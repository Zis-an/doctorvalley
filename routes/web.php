<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateRenderController;
use Illuminate\Support\Facades\Route;
use Modules\Feedback\Http\Controllers\FeedbackController;

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
//Route::get('/chamber/find-doctors', [TemplateRenderController::class, 'chamber_find_doctor'])->name('chamber.find-doctor');
//Route::get('/chamber/my-doctors', [TemplateRenderController::class, 'chamber_my_doctors'])->name('chamber.my-doctors');
Route::get('/chamber/feedback', [TemplateRenderController::class, 'chamber_feedback'])->name('chamber.feedback');
//Route::get('/chamber/create-schedule', [TemplateRenderController::class, 'chamber_create_schedule'])->name('chamber.schedule.create');
//Route::get('/chamber/schedule', [TemplateRenderController::class, 'chamber_schedule'])->name('chamber.schedule');
Route::get('/chamber/doctor-profile', [TemplateRenderController::class, 'chamber_doctor_profile'])->name('chamber.doctor.profile');
Route::get('/chamber/notifications', [TemplateRenderController::class, 'chamber_notifications'])->name('chamber.notifications');

// Doctor

Route::get('/doctor/add-post', [TemplateRenderController::class, 'doctor_add_post'])->name('doctor.add.post');
Route::get('/doctor/feedback', [TemplateRenderController::class, 'doctor_feedback'])->name('doctor.feedback');

// Backoffice
Route::get('/backoffice/doctor-request', [TemplateRenderController::class, 'backoffice_doctor_request'])->name('backoffice.doctor.request');

// Frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/doctors', [DoctorController::class, 'doctors'])->name('doctors');
Route::get('/doctor/{id}', [DoctorController::class, 'doctor'])->name('doctor');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{id}', [BlogController::class, 'blog'])->name('blog');
Route::get('/hospitals', [FrontendController::class, 'hospitals'])->name('hospitals');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');
ROute::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');



Route::get('/frontend/doctor-details', [TemplateRenderController::class, 'frontend_doctor_details'])->name('frontend.doctor.details');
Route::get('/frontend/blog-details', [TemplateRenderController::class, 'frontend_blog_details'])->name('frontend.blog.details');
Route::get('/frontend/contact', [TemplateRenderController::class, 'frontend_contact'])->name('frontend.contact');
