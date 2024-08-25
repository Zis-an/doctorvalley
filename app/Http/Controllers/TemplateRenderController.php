<?php

namespace App\Http\Controllers;

class TemplateRenderController extends Controller
{

    // Backoffice Starts

    public function backoffice_dashboard()
    {
        return view('backoffice.dashboard');
    }

    public function backoffice_create_blog()
    {
        return view('backoffice.blog.createUpdateBlog');
    }

    public function backoffice_blog_list()
    {
        return view('backoffice.blog.blogList');
    }

    public function backoffice_feedback()
    {
        return view('backoffice.feedback');
    }

    public function backoffice_doctor_request()
    {
        return view('backoffice.doctor.doctor-request');
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

    public function doctor_add_post()
    {
        return view('doctor.blogs.add_post');
    }

    public function doctor_feedback()
    {
        return view('doctor.feedback');
    }

    // Doctor Ends

    // Frontend Starts

    public function frontend_index()
    {
        return view('frontend.index');
    }

    public function frontend_doctors()
    {
        return view('frontend.doctors');
    }

    public function frontend_doctor_details()
    {
        return view('frontend.doctorDetails');
    }

    public function frontend_blogs()
    {
        return view('frontend.blogs');
    }

    public function frontend_blog_details()
    {
        return view('frontend.blogDetails');
    }

    public function frontend_contact()
    {
        return view('frontend.contact');
    }

    // Frontend Ends
}
