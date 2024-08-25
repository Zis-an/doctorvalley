<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateRenderController;
use App\Http\Controllers\HomeController;

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

Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');


// Chamber
Route::get('/chamber/find-doctor', [TemplateRenderController::class, 'chamber_find_doctor'])->name('chamber.find-doctor');
Route::get('/chamber/my-doctors', [TemplateRenderController::class, 'chamber_my_doctors'])->name('chamber.my-doctors');
Route::get('/chamber/feedback', [TemplateRenderController::class, 'chamber_feedback'])->name('chamber.feedback');
Route::get('/chamber/create-schedule', [TemplateRenderController::class, 'chamber_create_schedule'])->name('chamber.schedule.create');
Route::get('/chamber/schedule', [TemplateRenderController::class, 'chamber_schedule'])->name('chamber.schedule');
Route::get('/chamber/doctor-profile', [TemplateRenderController::class, 'chamber_doctor_profile'])->name('chamber.doctor.profile');
//Route::get('/chamber/notifications', [TemplateRenderController::class, 'chamber_notifications'])->name('chamber.notifications');

// Doctor
Route::get('/doctor/schedule', [TemplateRenderController::class, 'doctor_schedule'])->name('doctor.schedule');
Route::get('/doctor/blogs', [TemplateRenderController::class, 'doctor_blogs'])->name('doctor.blogs');
Route::get('/doctor/add-post', [TemplateRenderController::class, 'doctor_add_post'])->name('doctor.add.post');
Route::get('/doctor/feedback', [TemplateRenderController::class, 'doctor_feedback'])->name('doctor.feedback');

// Backoffice


Route::get('/backoffice/create-blog', [TemplateRenderController::class, 'backoffice_create_blog'])->name('backoffice.blog.create');
Route::get('/backoffice/blog-list', [TemplateRenderController::class, 'backoffice_blog_list'])->name('backoffice.blog.list');


Route::get('/backoffice/feedback', [TemplateRenderController::class, 'backoffice_feedback'])->name('backoffice.feedback');

Route::get('/backoffice/doctor-request', [TemplateRenderController::class, 'backoffice_doctor_request'])->name('backoffice.doctor.request');

// Frontend
Route::get('/', [TemplateRenderController::class, 'frontend_index'])->name('index');
Route::get('/frontend/doctors', [TemplateRenderController::class, 'frontend_doctors'])->name('frontend.doctors');
Route::get('/frontend/doctor-details', [TemplateRenderController::class, 'frontend_doctor_details'])->name('frontend.doctor.details');
Route::get('/frontend/blogs', [TemplateRenderController::class, 'frontend_blogs'])->name('frontend.blogs');
Route::get('/frontend/blog-details', [TemplateRenderController::class, 'frontend_blog_details'])->name('frontend.blog.details');
Route::get('/frontend/contact', [TemplateRenderController::class, 'frontend_contact'])->name('frontend.contact');
