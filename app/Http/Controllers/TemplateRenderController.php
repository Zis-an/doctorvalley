<?php

namespace App\Http\Controllers;

class TemplateRenderController extends Controller
{

    // Backoffice Starts

    public function backoffice_dashboard()
    {
        return view('backoffice.dashboard');
    }

    public function backoffice_create_doctor()
    {
        return view('backoffice.doctor.createUpdateDoctor');
    }

    public function backoffice_doctor_list()
    {
        return view('backoffice.doctor.doctorList');
    }

    public function backoffice_create_chamber()
    {
        return view('backoffice.chamber.createUpdateChamber');
    }

    public function backoffice_chamber_list()
    {
        return view('backoffice.chamber.chamberList');
    }

    public function backoffice_create_blog()
    {
        return view('backoffice.blog.createUpdateBlog');
    }

    public function backoffice_blog_list()
    {
        return view('backoffice.blog.blogList');
    }

    public function backoffice_create_speciality()
    {
        return view('backoffice.speciality.createUpdateSpeciality');
    }

    public function backoffice_speciality_list()
    {
        return view('backoffice.speciality.specialityList');
    }

    public function backoffice_create_institute()
    {
        return view('backoffice.institute.createUpdateInstitute');
    }

    public function backoffice_institute_list()
    {
        return view('backoffice.institute.instituteList');
    }

    public function backoffice_create_course()
    {
        return view('backoffice.course.createUpdateCourse');
    }

    public function backoffice_course_list()
    {
        return view('backoffice.course.courseList');
    }

    public function backoffice_feedback()
    {
        return view('backoffice.feedback');
    }

    public function backoffice_doctor_request()
    {
        return view('backoffice.doctor.doctor-request');
    }

    public function backoffice_doctor_info()
    {
        return view('backoffice.doctor.doctorinfo');
    }

    public function backoffice_notifications()
    {
        return view('backoffice.notifications');
    }

    // Backoffice Ends


    // Chamber Starts

    public function chamber_dashboard()
    {
        return view('chamber.dashboard');
    }

    public function chamber_find_doctor()
    {
        return view('chamber.find-doctor');
    }

    public function chamber_my_doctors()
    {
        return view('chamber.my-doctors');
    }

    public function chamber_feedback()
    {
        return view('chamber.feedback');
    }

    public function chamber_profile()
    {
        return view('chamber.chamberProfile');
    }

    public function chamber_create_schedule()
    {
        return view('chamber.schedule.createUpdateSchedule');
    }

    public function chamber_schedule()
    {
        return view('chamber.schedule.index');
    }

    public function chamber_doctor_profile()
    {
        return view('chamber.doctorProfile');
    }

    public function chamber_notifications()
    {
        return view('chamber.notifications');
    }

    // Chamber Ends

    // Doctor Starts

    public function doctor_dashboard()
    {
        return view('doctor.dashboard');
    }

    public function doctor_profile()
    {
        return view('doctor.doctorProfile');
    }

    public function doctor_notifications()
    {
        return view('doctor.notifications');
    }

    public function doctor_schedule()
    {
        return view('doctor.schedule');
    }

    public function doctor_blogs()
    {
        return view('doctor.blogs.index');
    }

    // Doctor Ends
}
