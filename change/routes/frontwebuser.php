<?php

use App\Http\Controllers\Frontwebuser\DashboardController;
use App\Http\Controllers\Frontwebuser\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontwebuser\Web\TopbarSettingController;
use App\Http\Controllers\Frontwebuser\Web\SocialSettingController;
use App\Http\Controllers\Frontwebuser\Web\SliderController;
use App\Http\Controllers\Frontwebuser\Web\AboutUsController;
use App\Http\Controllers\Frontwebuser\Web\FeatureController;
use App\Http\Controllers\Frontwebuser\Web\WebEventController;
use App\Http\Controllers\Frontwebuser\Web\TeamController;
use App\Http\Controllers\Frontwebuser\Web\NewsController;
use App\Http\Controllers\Frontwebuser\Web\FaqController;
use App\Http\Controllers\Frontwebuser\Web\GalleryController;
use App\Http\Controllers\Frontwebuser\Web\TestimonialController;
use App\Http\Controllers\Frontwebuser\Web\PageController;
use App\Http\Controllers\Frontwebuser\Web\CallToActionController;
use App\Http\Controllers\Frontwebuser\Web\MenuController;







Route::group(['prefix' => 'frontwebuser', 'as'=>'frontwebuser.','middleware' => 'auth:user','frontwebuser'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::prefix('web')->group(function () {
        Route::resource('menu', MenuController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('feature', FeatureController::class);
        Route::resource('about-us', AboutUsController::class);
        // Route::resource('course', WebCourseController::class);
        Route::resource('web-event', WebEventController::class);

        //team
        Route::get('/team/list',[TeamController::class,'list'])->name('Team.list');
        Route::get('/team/add',[TeamController::class,'add'])->name('Team.add');
        Route::post('/team/add',[TeamController::class,'store'])->name('Team.store');
        Route::get('/team/edit{id}',[TeamController::class,'edit'])->name('Team.edit');
        Route::post('/team/update',[TeamController::class,'update'])->name('Team.update');
        Route::get('/team/delete{id}',[TeamController::class,'delete'])->name('Team.delete');

        Route::resource('news', NewsController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('faq', FaqController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('page', PageController::class);
        Route::resource('call-to-action', CallToActionController::class);
        Route::resource('social-setting', SocialSettingController::class);
        Route::resource('topbar-setting', TopbarSettingController::class);
    });
});

?>
