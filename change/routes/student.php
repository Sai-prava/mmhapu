<?php

/****************** STUDENT MIDDLEWARE PAGES ROUTES START****************/

use App\Http\Controllers\Student\ExamController;
use App\Http\Controllers\Student\SubjectController;
use App\Http\Controllers\Student\DashboardController;

Route::group(['prefix' => 'student', 'as'=>'student.','middleware' => 'auth:user','student'], function () {
    /*******************DASHBOARD ROUTE START*************/
        // Route::view('dashboard','student.dashboard.index')->name('dashboard.index');
    Route::resource('dashboard',DashboardController::class);
    /*******************DASHBOARD ROUTE END*************/
    /*******************EXAM ROUTE START*************/
    Route::resource('exam',ExamController::class);
    /*******************CITY ROUTE END*************/

    /*******************SUBJECT ROUTE START*************/
    Route::resource('subject',SubjectController::class);
    /*******************SUBJECT ROUTE END*************/
});
/****************** STUDENT MIDDLEWARE PAGES ROUTES END****************/
?>
