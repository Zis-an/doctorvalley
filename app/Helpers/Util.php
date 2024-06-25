<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

abstract class Util
{

    private static string $lang='en';
    private static string $hash;
    private static string $appVersion;
    private static int $isAgentLogin;

    public static function init(Request $request): void
    {
        if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']))   static::setLang($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    }

    /**
     * set language
     * @param string $lang
     * @return void
     */
    public static function setLang(string $lang='en'): void
    {
        static::$lang = $lang=='bn'?'bn': 'en';
    }

    /**
     * get request language
     * @return string
     */
    public static function getLang(): string
    {
        return static::$lang;
    }

    /**
     * set ETag-Hash From Header
     * @param string $hash
     * @return void
     */
    public static function setHash(string $hash=''): void
    {
        static::$hash = $hash;
    }

    /**
     * get request ETag-Hash
     * @return string
     */
    public static function getHash(): string
    {
        return static::$hash;
    }

    /**
     * set Request App Version From Header
     * @param string $version
     * @return void
     */
    public static function setAppVersion(string $version=''): void
    {
        static::$appVersion = $version;
    }

    /**
     * return request app version
     * @return string
     */
    public static function getAppVersion(): string
    {
        return static::$appVersion;
    }



    /**
     * @param bool $timestamp
     * @return string
     */
    public static function getDateTime(bool $timestamp = false): string
    {
        if (!$timestamp) {
            return date("Y-m-d H:i:s");
        }
        return date("Y-m-d H:i:s", $timestamp);
    }

//    public static function getDateTimeDifferenceString($datetime): string
//    {
//        $date = Carbon::parse(static::getDateTime($datetime));
//
//        return self::convertNumberEnglishToBangla($date->locale(Device::language())->diffForHumans());
//    }

    /**
     * Changing the numbers
     *
     * @param $string
     *
     * @return string
     */
//    public static function convertNumberEnglishToBangla($string)
//    {
//        // in case of english use it
//        if (!Device::isLanguageBengali()) {
//            return $string;
//        }
//
//        return str_replace(
//            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
//            ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'],
//            $string
//        );
//    }


    /**
     * @param Throwable $exception
     *
     * @return string
     */
    public static function formatErrorLogMessage(Throwable $exception): string
    {
        $message = 'Error occured in File: ' . $exception->getFile();
        $message .= ' on Line: ' . $exception->getLine();
        $message .= ' due to: ' . $exception->getMessage();

        return $message;
    }

    /**
     * @param mixed $message
     *
     * @return mixed
     */
    private static function prepareErrorMessage(mixed $message): mixed
    {
        if ($message instanceof Throwable) {
            return self::formatErrorLogMessage($message);
        } elseif (!is_string($message)) {
            return json_encode($message);
        }

        return $message;
    }

    /**
     * @param string $process
     * @param string $type
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public static function writeToLog(string $process, string $type, string $message, array $context = []): void
    {
        Log::log($type, $process.':'.self::prepareErrorMessage($message), $context);
    }

    /**
     * @param int $total
     * @param int $page
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public static function prePareMetaData(int $total, int $page, int $limit, int $offset): array
    {
        $to = $page * $limit;
        return [
            'total' => $total,
            'current_page' => $page,
            'last_page' => ceil($total/$limit),
            'per_page' => $limit,
            'limit' => $limit,
            'from'=> $offset,
            'to'=> min($to, $total)
        ];
    }

    public static function wordSimilarity($s1,$s2)
    {
        $s1 = strtolower($s1);
        $s2 = strtolower($s2);

        $words1 = preg_split('/\s+/',$s1);
        $words2 = preg_split('/\s+/',$s2);
        $diffs1 = array_diff($words2,$words1);
        $diffs2 = array_diff($words1,$words2);
        $diffsLength = strlen(join("",$diffs1).join("",$diffs2));
        $wordsLength = strlen(join("",$words1).join("",$words2));
        if(!$wordsLength) return 0;
        $differenceRate = ( $diffsLength / $wordsLength );
        $similarityRate = 1 - $differenceRate;
        return $similarityRate;
    }
}
