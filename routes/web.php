<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NoticeController;
use Illuminate\Support\Facades\Route;

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

// Page Routes
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-director-message', [PageController::class, 'aboutDirectorMessage'])->name('about-director-message');
Route::get('/about-management', [PageController::class, 'aboutManagement'])->name('about-management');
Route::get('/about-vision-mission', [PageController::class, 'aboutVisionMission'])->name('about-vision-mission');
Route::get('/admission-procedure', [PageController::class, 'admissionProcedure'])->name('admission-procedure');
Route::get('/bpharma-1st-year', [PageController::class, 'bpharmaFirstYear'])->name('bpharma-1st-year');
Route::get('/canteen', [PageController::class, 'canteen'])->name('canteen');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/course-bpharma', [PageController::class, 'courseBpharma'])->name('course-bpharma');
Route::get('/course-dpharma', [PageController::class, 'courseDpharma'])->name('course-dpharma');
Route::get('/dpharma-1st-year', [PageController::class, 'dpharmaFirstYear'])->name('dpharma-1st-year');
Route::get('/facility-computer-lab', [PageController::class, 'facilityComputerLab'])->name('facility-computer-lab');
Route::get('/facility-library', [PageController::class, 'facilityLibrary'])->name('facility-library');
Route::get('/facility-wifi-campus', [PageController::class, 'facilityWifiCampus'])->name('facility-wifi-campus');
Route::get('/fee-structure', [PageController::class, 'feeStructure'])->name('fee-structure');
Route::get('/first-aid-treatment', [PageController::class, 'firstAidTreatment'])->name('first-aid-treatment');
Route::get('/mail', [PageController::class, 'mail'])->name('mail');
Route::get('/medical-garden', [PageController::class, 'medicalGarden'])->name('medical-garden');
Route::get('/museum', [PageController::class, 'museum'])->name('museum');
Route::get('/registration-form', [PageController::class, 'registrationForm'])->name('registration-form');
Route::get('/seminar-hall', [PageController::class, 'seminarHall'])->name('seminar-hall');
Route::get('/sports-field', [PageController::class, 'sportsField'])->name('sports-field');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/getNotices',[PageController::class,'getNotices']);
Route::get('/gallery',[PageController::class,'photoGallery'])->name('gallery');

Route::middleware(['auth'])->group(function () {
    Route::resource('notices', NoticeController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
});
