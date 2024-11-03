<?php

namespace Modules\Chamber\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Chamber\Models\ChamberDoctor;
use Modules\Chamber\Enums\ChamberDoctorEnum;
use Modules\Doctor\Models\Doctor;
use Modules\Speciality\Models\Speciality;

class ChamberDoctorDBRepository
{

    private ChamberDoctor  $chamberDoctor;
    private Doctor $doctor;
    private Speciality $speciality;
    public function __construct()
    {
        $this->chamberDoctor = new ChamberDoctor();
        $this->doctor = new Doctor();
        $this->speciality = new Speciality();
    }

    public function storeChamberDoctorData(array $prepareData) : mixed
    {
        return $this->chamberDoctor->create($prepareData);
    }

    public function getDoctorListByAuthChamber(): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;
        return $this->doctor->whereHas('chambers', function($query) use ($chamberId) {
            $query->where('chamber_id', $chamberId);
        })
        ->with(['specialities', 'qualification', 'chambers' => function($query) use ($chamberId) {
                $query->where('chamber_id', $chamberId); // Ensure we get the correct pivot data
            }])
        ->latest()
        ->get();
    }

    public function deleteChamberDoctorById($doctorId)
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;

        // Use the Doctor model to detach from the pivot table
        $doctor = Doctor::findOrFail($doctorId);
        $result = $doctor->chambers()->detach($chamberId);

        // Return the number of rows affected by the detach operation
        return $result;
    }

    public function getChamberDoctorIdsByAuthChamber(): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;
        return $this->chamberDoctor
            ->where('chamber_id', $chamberId)
            ->pluck('doctor_id')
            ->toArray();

    }

    public function chamberDoctorsCountBySpeciality(): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;

        // Fetch all specialities with their doctor count related to the specific chamber
        $specialities = $this->speciality->with('doctors')
            ->get()
            ->map(function ($speciality) use ($chamberId) {
                // Count doctors linked to the current chamber
                $speciality->doctors_count = $speciality->doctors->filter(function ($doctor) use ($chamberId) {
                    return $doctor->chambers->contains('id', $chamberId);
                })->count();

                return $speciality;
            });

        // Remove specialities with zero doctors
        $specialities = $specialities->filter(function ($speciality) {
            return $speciality->doctors_count > 0;
        });

        // Return the final collection
        return $specialities;
    }






}
