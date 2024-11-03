<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Doctor\Enums\DoctorEnum;
use Modules\Doctor\Models\Doctor;
use mysql_xdevapi\Collection;

class DoctorDBRepository
{
    private Doctor $model;
    public function __construct()
    {
        $this->model = new Doctor();
    }

    public function getDoctorData(array $filters=[]): mixed
    {
        $query = $this->model
            ->with('specialities', 'province', 'city', 'area')
            ->whereNull('deleted_at')
            ->latest();
        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
    }

    public function storeDoctorData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDoctorPhoto(int $id): ?string
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->value(DoctorEnum::DOCTOR_PHOTO); // Get the photo path directly
    }


    public function updateDoctorPhoto(int $id, string $photoPath): bool
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->update([DoctorEnum::DOCTOR_PHOTO => $photoPath]);
    }

//    public function getDoctorDataById(int $id): object | null
//    {
//        $doctor = DB::table(DoctorEnum::DB_TABLE)
//            ->where(DoctorEnum::ID, $id)
//            ->first();
//
//        if ($doctor && $doctor->province_id) {
//            $province = DB::table('provinces')
//                ->where('id', $doctor->province_id)
//                ->first();
//            $doctor->province = $province;
//        }
//
//        if ($doctor && $doctor->city_id) {
//            $city = DB::table('cities')
//                ->where('id', $doctor->city_id)
//                ->first();
//            $doctor->city = $city;
//        }
//
//        if ($doctor && $doctor->area_id) {
//            $area = DB::table('areas')
//                ->where('id', $doctor->area_id)
//                ->first();
//            $doctor->area = $area;
//        }
//
//        return $doctor;
//    }

//    public function getDoctorDataById(int $id): object | null
//    {
//        $doctor = DB::table(DoctorEnum::DB_TABLE)
//            ->where(DoctorEnum::ID, $id)
//            ->first();
//
//        if (!$doctor) {
//            return null;
//        }
//
//        // Fetch related data and assign it to the doctor object
//
//        // Province
//        if ($doctor->province_id) {
//            $doctor->province = DB::table('provinces')
//                ->where('id', $doctor->province_id)
//                ->first();
//        }
//
//        // City
//        if ($doctor->city_id) {
//            $doctor->city = DB::table('cities')
//                ->where('id', $doctor->city_id)
//                ->first();
//        }
//
//        // Area
//        if ($doctor->area_id) {
//            $doctor->area = DB::table('areas')
//                ->where('id', $doctor->area_id)
//                ->first();
//        }
//
//        // Detail (hasOne relationship)
//        $doctor->detail = DB::table('doctor_details')
//            ->where('doctor_id', $doctor->id)
//            ->first();
//
//        // Experiences (hasMany relationship)
//        $doctor->experiences = DB::table('doctor_experiences')
//            ->where('doctor_id', $doctor->id)
//            ->get();
//
//        // Qualifications (hasMany relationship)
//        $doctor->qualification = DB::table('doctor_qualifications')
//            ->where('doctor_id', $doctor->id)
//            ->get();
//
//        // Specialities (belongsToMany relationship)
//        $doctor->specialities = DB::table('specialities')
//            ->join('doctor_specialities', 'specialities.id', '=', 'doctor_specialities.speciality_id')
//            ->where('doctor_specialities.doctor_id', $doctor->id)
//            ->get();
//
//        // Chambers (belongsToMany relationship with pivot data)
//        $doctor->chambers = DB::table('chambers')
//            ->join('chamber_doctor', 'chambers.id', '=', 'chamber_doctor.chamber_id')
//            ->where('chamber_doctor.doctor_id', $doctor->id)
//            ->select('chambers.*', 'chamber_doctor.add_from', 'chamber_doctor.add_to')
//            ->get();
//
//        // Schedules (hasMany relationship)
//        $doctor->schedules = DB::table('schedules')
//            ->where('doctor_id', $doctor->id)
//            ->get();
//
//        // Blogs (morphMany relationship)
//        $doctor->blogs = DB::table('blogs')
//            ->where('authorable_type', 'Modules\Doctor\Models\Doctor')
//            ->where('authorable_id', $doctor->id)
//            ->get();
//
//        // Visits (morphMany relationship)
//        $doctor->visits = DB::table('visitor_count')
//            ->where('ownarable_type', 'Modules\Doctor\Models\Doctor')
//            ->where('ownarable_id', $doctor->id)
//            ->get();
//
//        return $doctor;
//    }

    public function getDoctorDataById(int $id): object | null
    {
        $doctor = Doctor::with([
            'province',            // hasOne
            'city',                // hasOne
            'area',                // hasOne
            'detail',              // hasOne
            'experiences',         // hasMany
            'qualification',       // hasMany
            'specialities',        // belongsToMany
            'chambers',            // belongsToMany with pivot data
            'schedules',           // hasMany
            'blogs',               // morphMany
            'visits'               // morphMany
        ])->find($id);

        return $doctor ?: null;
    }

    public function updateDoctorData(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->delete();
    }


    public function getDoctorListWithFilter(array $filters=[]): mixed
    {
        $query = $this->model
            ->with('specialities', 'qualification', 'experiences')
            ->whereNull('deleted_at')
            ->latest();
        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(12);
    }

    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['speciality_id'])){
            $query = $query->whereHas('specialities', function ($q) use ($filters) {
                $q->where('specialities.id', $filters['speciality_id']);
            });
        }

        // Filter by doctor name or phone or email
        if (!empty($filters['search_doctor'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['search_doctor'] . '%')
                    ->orWhere('phone', 'like', '%' . $filters['search_doctor'] . '%')
                    ->orWhere('email', 'like', '%' . $filters['search_doctor'] . '%')
                    ->orWhere('bmdc', 'like', '%' . $filters['search_doctor'] . '%');
            });
        }

        if (!empty($filters['province_id'])){
            $query = $query->whereHas('province', function ($q) use ($filters) {
                $q->where('provinces.id', $filters['province_id']);
            });
        }

        if (!empty($filters['city_id'])){
            $query = $query->whereHas('city', function ($q) use ($filters) {
                $q->where('cities.id', $filters['city_id']);
            });
        }

        if (!empty($filters['area_id'])){
            $query = $query->whereHas('area', function ($q) use ($filters) {
                $q->where('areas.id', $filters['area_id']);
            });
        }

        return $query;
    }

//    public function getDoctorListBySpecialityIds(array $specialityIds, $currentDoctorId)
//    {
//        return Doctor::whereHas('specialities', function ($query) use ($specialityIds) {
//            $query->whereIn('speciality_id', $specialityIds);
//        })
//            ->where('id', '!=', $currentDoctorId) // Exclude the current doctor
//            ->get();
//    }

    public function getDoctorListBySpecialityIds(array $specialityIds, $currentDoctorId)
    {
        return Doctor::with([
            'detail',
            'province',
            'city',
            'area',
            'experiences',
            'qualification',
            'specialities',
            'chambers',
            'schedules',
            'blogs',
            'visits',
        ])
            ->whereHas('specialities', function ($query) use ($specialityIds) {
                $query->whereIn('speciality_id', $specialityIds);
            })
            ->where('id', '!=', $currentDoctorId) // Exclude the current doctor
            ->get();
    }

    public function getAllDoctors()
    {
        return $this->model
            ->whereNull('deleted_at')
            ->where('status', 1);
    }
}
