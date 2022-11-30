<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\GradeAndSectionController;
use App\Http\Controllers\TrackAndStrandController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClasslistController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/l', function () {
//     return view('Login');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Calendar', function () {
//     return view('Calendar');
// });

// Route::get('/Password', function () {
//     return view('Password');
// });

Route::get('/dashboard',[UserController::class,'index'])->middleware('auth');

Route::get('/',[UserController::class,'homepage']);

Route::get('/Login',[UserController::class,'login'])->name('login');

Route::get('/register',[UserController::class,'register']);

Route::get('/Password', [UserController::class,'password']);

Route::view('/enrollment', 'enrollment');

Route::post('/enrollment', [UserController::class,'enrollmentStore']);

Route::get('/Calendar', [UserController::class, 'Calendar']);

// Route::get('/Student', [UserController::class, 'studentproUpdate']);

// Route::view('/studentpro', 'studentpro');
// Route::post('/studentpro', [UserController::class, 'studentproStore']);

Route::get('/about', [UserController::class, 'about']);

Route::get('/course', [UserController::class, 'course']);

Route::get('/homepage', [UserController::class, 'homepage']);

Route::get('/contact', [UserController::class, 'contact']);

Route::post('/login/process',[UserController::class,'process']);

Route::post('/store',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout']);


//for admin controller
Route::get('/admin/admindashboard',[AdminController::class,'index']);

Route::get('/admin',[AdminController::class,'homepage']);

Route::get('/admin/register',[AdminController::class,'register']);

Route::post('/admin/store',[AdminController::class,'store']);

Route::get('/admin/Login',[AdminController::class,'login']);

Route::post('/admin/login/process', [AdminController::class, 'process']);

Route::post('/admin/logout',[AdminController::class,'logout']);


//Student Controller


// Route::get('/admin/students/student', [StudentController::class,'student']);

// Route::get('/admin/students/student', [StudentController::class,'student']);
// Route::post('/admin/students/store', [StudentController::class,'store']);

Route::resource('/admin/enroll', StudentController::class);
//Faculty Controller

Route::resource('/admin/faculty', FacultyController::class);
    
//Academic Controller

Route::resource('/admin/gradeandsection', GradeAndSectionController::class);
Route::get('/admin/gradeandsection/show/{id}', [GradeAndSectionController::class,'show']);

// Route::get('/admin/gradeandsection/filterdatas', [GradeAndSectionController::class,'getStudent']);
// Route::post('/admin/gradeandsection/filterdata', [GradeAndSectionController::class,'filtercreate']);
// Route::get('/admin/gradeandsection/filterdata', [GradeAndSectionController::class,'filtercreate']);
// Route::get('/admin/gradeandsection/filterdata/{id}', [GradeAndSectionController::class,'test']);

//Track And Strand Controller

Route::resource('/admin/trackandstrand', TrackAndStrandController::class);

//School Year Controller
Route::resource('/admin/schoolyear', SchoolYearController::class);
// Route::view('admin/Login', 'admin/Login');
// Route::post('/admin/adminuser',[AdminController::class,'adminlogin']);

//Department Controller
Route::resource('/admin/departments', DepartmentController::class);

//Dashboard Controller

Route::resource('/admin/', DashboardController::class);
// Route::get('/admin/Department', [DashboardController::class, 'Department']); 
    
//Classes COntroller
Route::resource('/admin/classlist', ClasslistController::class);
