<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Services;

use Modules\Location\Repositories\CountryDbRepository;
use Exception;

class CountryService
{
    private CountryDbRepository $repository;

    public function __construct()
    {
        $this->repository = new CountryDbRepository();

    }

    /**
     * @return array|mixed
     */
    public function getCountryList(): mixed
    {
        $result = $this->repository->getCountryData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    /**
     * @param array $formData
     * @return mixed
     * @throws Exception
     */
    public function storeCountry(array $formData): mixed
    {
        $result = $this->repository->storeCountryData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    /**
     * @param int $id
     * @return object
     * @throws Exception
     */
    public function getCountryById(int $id): object
    {
        $result = $this->repository->getCountryDataById($id);
        if (empty($result)){
            throw new Exception('Country Data not found');
        }
        return $result;
    }


    /**
     * @param int $id
     * @param array $formData
     * @return mixed
     * @throws Exception
     */
    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid country update data');
        }
        return $result;
    }

    /**
     * @param int $id
     * @return mixed
     * @throws Exception
     */
    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid country info');
        }
        return $result;
    }

    public function getCountriesForSelect()
    {
        $result = $this->repository->fetchCountriesForSelect();
        if (empty($result)){
            throw new Exception('Invalid country info');
        }
        return $result;
    }
}
