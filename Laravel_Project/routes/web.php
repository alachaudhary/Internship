<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

// Public Routes
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);


// Authenticated Routes
Route::middleware(['auth','verified'])->group(function () {
    Route::middleware(['user-access'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/userinfo', [UserController::class, 'index'])->name('user');
        
        Route::post('/students/{id}/upload_image', [StudentController::class, 'uploadImage'])->name('students.upload_image');
        Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('api/users', [UserController::class, 'fetchUsers']); // API endpoint to fetch users
        Route::post('api/users/update-role', [UserController::class, 'updateRole']); // API endpoint to update user role


        // Resource Routes
        Route::resource('students', StudentController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('sections', SectionController::class);

        // Additional Section Routes
        Route::get('/sections/create/{id}', [SectionController::class, 'create'])->name('sections.create');
        Route::get('/sections/{section}/add-student', [SectionController::class, 'showAddStudentForm'])->name('sections.addStudentForm');
        Route::post('/sections/{section}/add-student', [SectionController::class, 'addStudentToSection'])->name('sections.addStudent');
    });

    Route::get('/user/index', function () {
        return view('user.index');
    })->name('user.index');

    // Student Profile and Course Routes
    Route::get('/student-details', [StudentController::class, 'studentProfile'])->name('studentinfo');
    Route::get('/student-courses', [StudentController::class, 'studentCourse'])->name('studentcourse');


    // News Routes
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/fetch-news', [NewsController::class, 'fetchNews'])->name('news.fetch');

    // Logout Route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
