<?php


namespace BCS\Uploader\V1\Services;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Stringable;
use Image;
use Throwable;

class UploaderService
{
    private int $length;
    private string $characters;
    private string $fileNamePrefix;
    private string $fileSystem;
    private string $uploadPath;
    private string $rootPath;
    private string $fileType;
    private string $fileOriginalName ='unknown-file-name';
    private string $extension;
    private int $size;
    private string $fileName;
    private string $uploadFullPath;
    private bool $isBase65File = false;
    private const fileTypes = [
        "jpg" => "image",
        "jpeg" => "image",
        "png" => "image",
        "svg" => "image",
        "webp" => "image",
        "gif" => "image",
        "mp4" => "video",
        "mpg" => "video",
        "mpeg" => "video",
        "webm" => "video",
        "ogg" => "video",
        "avi" => "video",
        "mov" => "video",
        "flv" => "video",
        "swf" => "video",
        "mkv" => "video",
        "wmv" => "video",
        "wma" => "audio",
        "aac" => "audio",
        "wav" => "audio",
        "mp3" => "audio",
        "zip" => "archive",
        "rar" => "archive",
        "7z" => "archive",
        "doc" => "document",
        "txt" => "document",
        "docx" => "document",
        "pdf" => "document",
        "csv" => "document",
        "xml" => "document",
        "ods" => "document",
        "xlr" => "document",
        "xls" => "document",
        "xlsx" => "document"
    ];

    public function __construct()
    {
        $this->characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $this->length = 5;
        $this->fileSystem = config('filesystems.default');
        $this->uploadPath = '/uploads';
        $this->fileType = 'image';
        $this->rootPath = config("filesystems.disks.{$this->fileSystem}.root");
    }

    /**
     * @return $this
     */
    public function init(
        string $uploadPath = '',
        mixed $file = null,
        string $filenamePrefix='',
        string $fileSystem='public',
    )
    {
        $this->setFileNamePrefix($filenamePrefix);
        if (empty($this->uploadPath) && !empty($uploadPath)){
            $this->setUploadPath($uploadPath);
        }
        if (empty($this->fileSystem) && !empty($fileSystem)){
            $this->setFileSystem($fileSystem);
        }

        if (!empty($file)){
            $this->setExtension($file);
            $this->setFileOriginalName($file);
            $this->setSize($file);
            $this->setFileType();
        }
        $this->generateRandFileName();
        $this->setUploadFullPath();
        $this->makeDirectory();
        return $this;
    }

    /**
     * @param $file
     * @param string $uploadPath
     * @param string $filenamePrefix
     * @param string $fileSystem
     * @return array|Exception|Throwable
     */
    public function upload($file, string $uploadPath= '', string $filenamePrefix='', string $fileSystem='public', ): Throwable|Exception|array
    {
        try {
            if ($this->is_base64($file) || $file instanceof UploadedFile){
                $this->init($uploadPath, $file, $filenamePrefix, $fileSystem);

                if ($this->is_base64($file) && $this->fileType != 'image'){
                    $this->uploadBase64DocumentFile($file);
                }
                if ($this->is_base64($file) && $this->fileType == 'image'){
                    $this->uploadBase64Image($file);
                }
                if ($file instanceof UploadedFile && $this->fileType == 'image'){
                    $this->uploadImage($file);
                }
                else{
                    $this->uploadDocumentFile($file);
                }
            }else{
                throw new Exception('Invalid file data provide');
            }
            return $this->getUploadFileData();
        } catch (Throwable $e) {
            return $e;
        }
    }

    /**
     * @return array
     */
    public function getUploadFileData(): array
    {
        return [
            'fullPath'=>$this->getUploadFullPath(),
            'originalName'=>$this->getFileOriginalName(),
            'ext'=>$this->getExtension(),
            'size'=>$this->getSize(),
            'fileName'=>$this->getFileName(),
            'fileType'=>$this->getFileType(),
            'uploadDriver'=>$this->getFileSystem()
        ];
    }

    /**
     * @param UploadedFile $file
     * @return void
     * @throws Exception
     */
    private function uploadImage(UploadedFile $file): void
    {
        $this->storagePutFile($file);
        $img = Image::make($file->getRealPath())->encode();

        $height = $img->height();
        $width = $img->width();
        if ($width > $height && $width > 1500) {
            $img->resize(1500, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        } elseif ($height > 1500) {
            $img->resize(null, 800, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $img->save($this->rootPath.$this->getUploadFullPath());
        clearstatcache();
        $this->uploadFileInS3();
    }

    /**
     * @param UploadedFile $file
     * @return void
     * @throws Exception
     */
    public function uploadDocumentFile(UploadedFile $file): void
    {
        $this->storagePutFile($file);
        clearstatcache();
        $this->uploadFileInS3();
    }

    private function uploadBase64Image(){

    }

    /**
     * @param UploadedFile $file
     * @return void
     * @throws Exception
     */
    public function uploadBase64DocumentFile(UploadedFile $file): void
    {
        $this->storagePutFile($file);
        clearstatcache();
        $this->uploadFileInS3();
    }

    /**
     * @return void
     */
    public function uploadFileInS3(): void
    {
        if ($this->fileSystem == 's3') {
            Storage::disk('s3')->putFileAs($this->rootPath.'/'.$this->getUploadFullPath(), file_get_contents($this->rootPath.'/'.$this->getUploadFullPath()), $this->getFileName());
            unlink($this->getUploadFullPath());
        }
    }

    /**
     * @param $file
     * @return void
     * @throws Exception
     */
    private function storagePutFile($file): void
    {
       if (!Storage::disk($this->fileSystem)->putFileAs($this->getUploadPath(), $file, $this->getFileName())){
           throw new Exception('File not uploaded successfully');
       }
    }

    /**
     * @return void
     */
    private function makeDirectory(): void
    {
        if (!Storage::disk($this->getFileSystem())->exists($this->getUploadPath())){
            Storage::disk($this->getFileSystem())->makeDirectory($this->getUploadPath());
        }
    }
    /**
     * @return void
     */
    private function setUploadFullPath(): void
    {
        $this->uploadFullPath = $this->getUploadPath().$this->getFileName();
    }

    /**
     * @return string
     */
    private function getUploadFullPath(): string
    {
        return $this->uploadFullPath;
    }
    /**
     * @return string
     */
    public function getUploadPath(): string
    {
        return $this->uploadPath;
    }

    /**
     * @param string $uploadPath
     * @return UploaderService
     */
    public function setUploadPath(string $uploadPath): self
    {
        $this->uploadPath = $uploadPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileSystem(): string
    {
        return $this->fileSystem;
    }

    /**
     * @param string $fileSystem
     * @return UploaderService
     */
    public function setFileSystem(string $fileSystem='public'):self
    {
        $this->fileSystem = $fileSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * @return void
     */
    public function setFileType(): void
    {
        $this->fileType = self::fileTypes[$this->extension];
    }


    /**
     * @param UploadedFile $file
     * @return void
     */
    public function setFileOriginalName(UploadedFile $file): void
    {
        if (!$this->is_base64($file)){
            $this->fileOriginalName = '';
            $arr = explode('.', $file->getClientOriginalName());
            for ($i = 0; $i < count($arr) - 1; $i++) {
                if ($i == 0) {
                    $this->fileOriginalName .= $arr[$i];
                } else {
                    $this->fileOriginalName .= "." . $arr[$i];
                }
            }
            $this->fileOriginalName = $this->fileOriginalName.'.'.$this->getExtension();
        }

    }

    /**
     * @return string
     */
    public function getFileOriginalName(): string
    {
        return $this->fileOriginalName;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param UploadedFile $file
     */
    public function setExtension(UploadedFile $file): void
    {
        if ($this->is_base64($file)){
            $fileData = $this->decodeBase64File($file);
            $this->extension = image_type_to_extension($fileData);
        }else{
            $this->extension = strtolower($file->getClientOriginalExtension());
        }
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param $file
     */
    public function setSize($file): void
    {
        if ($this->is_base64($file)){
            $fileData = $this->decodeBase64File($file);
            $this->size = getimagesizefromstring($fileData);
        }else{
            $this->size = $file->getSize();
        }
    }

    /**
     * @return string
     */
    public function getFileNamePrefix(): string
    {
        return $this->fileNamePrefix;
    }

    /**
     * @param string $fileNamePrefix
     * @return UploaderService
     */
    public function setFileNamePrefix(string $fileNamePrefix): self
    {
        $this->fileNamePrefix = $fileNamePrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $this->getFileNamePrefix().$fileName.'.'.$this->getExtension();
    }

    /**
     * @param $s
     * @return bool
     */
    private function is_base64($s){
        // Check if there are valid base64 characters
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s)) return false;

        // Decode the string in strict mode and check the results
        $decoded = base64_decode($s, true);
        if(false === $decoded) return false;

        // Encode the string again
        if(base64_encode($decoded) != $s) return false;

        return true;
    }

    /**
     * @param $file
     * @return false|string
     */
    private function decodeBase64File($file): bool|string
    {
        return base64_decode($file, true);
    }

    private function generateRandFileName(): void
    {
        $rand = '';
        $charactersLength = strlen($this->characters);
        for ($i = 0; $i < $this->length; $i++) {
            $rand .= $this->characters[rand(0, $charactersLength - 1)];
        }
        $this->setFileName($rand);
    }
}
