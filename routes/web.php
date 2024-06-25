<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateRenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TemplateRenderController::class, 'backoffice_dashboard']);


// Chamber
Route::get('/chamber/dashboard', [TemplateRenderController::class, 'chamber_dashboard'])->name('chamber.dashboard');
Route::get('/chamber/find-doctor', [TemplateRenderController::class, 'chamber_find_doctor'])->name('chamber.find-doctor');
Route::get('/chamber/my-doctors', [TemplateRenderController::class, 'chamber_my_doctors'])->name('chamber.my-doctors');
Route::get('/chamber/feedback', [TemplateRenderController::class, 'chamber_feedback'])->name('chamber.feedback');
Route::get('/chamber/profile', [TemplateRenderController::class, 'chamber_profile'])->name('chamber.profile');
Route::get('/chamber/create-schedule', [TemplateRenderController::class, 'chamber_create_schedule'])->name('chamber.schedule.create');
Route::get('/chamber/schedule', [TemplateRenderController::class, 'chamber_schedule'])->name('chamber.schedule');
Route::get('/chamber/doctor-profile', [TemplateRenderController::class, 'chamber_doctor_profile'])->name('chamber.doctor.profile');
Route::get('/chamber/notifications', [TemplateRenderController::class, 'chamber_notifications'])->name('chamber.notifications');

// Doctor
Route::get('/doctor/dashboard', [TemplateRenderController::class, 'doctor_dashboard'])->name('doctor.dashboard');
Route::get('/doctor/profile', [TemplateRenderController::class, 'doctor_profile'])->name('doctor.profile');
Route::get('/doctor/notifications', [TemplateRenderController::class, 'doctor_notifications'])->name('doctor.notifications');
Route::get('/doctor/schedule', [TemplateRenderController::class, 'doctor_schedule'])->name('doctor.schedule');
Route::get('/doctor/blogs', [TemplateRenderController::class, 'doctor_blogs'])->name('doctor.blogs');

// Backoffice
Route::get('/backoffice/dashboard', [TemplateRenderController::class, 'backoffice_dashboard'])->name('backoffice.dashboard');
Route::get('/backoffice/create-doctor', [TemplateRenderController::class, 'backoffice_create_doctor'])->name('backoffice.doctor.create');
Route::get('/backoffice/doctor-list', [TemplateRenderController::class, 'backoffice_doctor_list'])->name('backoffice.doctor.list');
Route::get('/backoffice/create-chamber', [TemplateRenderController::class, 'backoffice_create_chamber'])->name('backoffice.chamber.create');
Route::get('/backoffice/chamber-list', [TemplateRenderController::class, 'backoffice_chamber_list'])->name('backoffice.chamber.list');
Route::get('/backoffice/create-blog', [TemplateRenderController::class, 'backoffice_create_blog'])->name('backoffice.blog.create');
Route::get('/backoffice/blog-list', [TemplateRenderController::class, 'backoffice_blog_list'])->name('backoffice.blog.list');
Route::get('/backoffice/create-speciality', [TemplateRenderController::class, 'backoffice_create_speciality'])->name('backoffice.speciality.create');
Route::get('/backoffice/speciality-list', [TemplateRenderController::class, 'backoffice_speciality_list'])->name('backoffice.speciality.list');
Route::get('/backoffice/create-institute', [TemplateRenderController::class, 'backoffice_create_institute'])->name('backoffice.institute.create');
Route::get('/backoffice/institute-list', [TemplateRenderController::class, 'backoffice_institute_list'])->name('backoffice.institute.list');
Route::get('/backoffice/create-course', [TemplateRenderController::class, 'backoffice_create_course'])->name('backoffice.course.create');
Route::get('/backoffice/course-list', [TemplateRenderController::class, 'backoffice_course_list'])->name('backoffice.course.list');
Route::get('/backoffice/feedback', [TemplateRenderController::class, 'backoffice_feedback'])->name('backoffice.feedback');
Route::get('/backoffice/doctor-request', [TemplateRenderController::class, 'backoffice_doctor_request'])->name('backoffice.doctor.request');
Route::get('/backoffice/doctor-info', [TemplateRenderController::class, 'backoffice_doctor_info'])->name('backoffice.doctor.info');
Route::get('/backoffice/notifications', [TemplateRenderController::class, 'backoffice_notifications'])->name('backoffice.notifications');
