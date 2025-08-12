<?php

use App\Helpers\PaymentGateway;

use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\ApplicationController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\NoticeListController;
use App\Http\Controllers\FrontWeb\DashboardController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontwebuser\DashbController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AcademicController;
use App\Http\Controllers\Web\AcademicsController;
use App\Http\Controllers\Web\ActStatuesController;
use App\Http\Controllers\Web\AdministrationController;
use App\Http\Controllers\Web\ChancellorController;
use App\Http\Controllers\Web\CollabrationController;
use App\Http\Controllers\Web\ContactusController;
use App\Http\Controllers\Web\GrievancesController;
use App\Http\Controllers\Web\IqacController;
use App\Http\Controllers\Web\LegacyController;
use App\Http\Controllers\Web\LogoController;
use App\Http\Controllers\Web\MissionVisionController;
use App\Http\Controllers\Web\NotificationsController;
use App\Http\Controllers\Web\OrdinancesController;
use App\Http\Controllers\Web\PublicationsController;
use App\Http\Controllers\Web\StudentSectionController;
use App\Http\Controllers\Web\VcController;
use App\Http\Controllers\Web\WebCalenderController;
use App\Http\Controllers\Web\WebFacultyController;

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

/******************LOGIN PAGE ROUTES START****************/

// Web Routes
Route::middleware(['XSS'])->namespace('Web')->group(function () {

    // Home Route
    Route::get('/', [IndexController::class, 'index'])->name('index');

    //about
    Route::get('/about', [AboutController::class, 'about'])->name('about');

    //mission & vision
    Route::get('/vision_mission', [MissionVisionController::class, 'missionVision'])->name('missionVision');

    //Chancellor
    Route::get('/chancellor', [ChancellorController::class, 'chancellor'])->name('chancellor');

    //legacy
    Route::get('/legacy', [LegacyController::class, 'legacy'])->name('legacy');

    //Logo
    Route::get('/logo', [LogoController::class, 'logo'])->name('logo');

    //act_statutes
    Route::get('/act_statutes', [ActStatuesController::class, 'actStatutes'])->name('actStatutes');

    //ordinances
    Route::get('/ordinances', [OrdinancesController::class, 'ordinances'])->name('ordinances');

    //Administration
    Route::get('/chancellor_1', [AdministrationController::class, 'chancellor_1'])->name('chancellor_1');
    Route::get('/vc', [AdministrationController::class, 'vc'])->name('vc');
    Route::get('/university_authority', [AdministrationController::class, 'universityAuthority'])->name('universityAuthority');
    Route::get('/statutory_bodies', [AdministrationController::class, 'statutoryBodies'])->name('statutoryBodies');
    Route::get('/university_officers', [AdministrationController::class, 'universityOfficers'])->name('universityOfficers');
    Route::get('/directory', [AdministrationController::class, 'directory'])->name('directory');


    //Latest Notice
    Route::get('/latest', [NotificationsController::class, 'latest'])->name('latest');

    Route::get('/events', [NotificationsController::class, 'events'])->name('events');

    //IQAC
    Route::get('/iqac_event', [EventController::class, 'iqac_event'])->name('iqac_event');
    Route::get('/events_view/{id}', [EventController::class, 'viewEvent'])->name('viewEvent');
    Route::post('/get_title', [EventController::class, 'viewTitle'])->name('viewTitle');
    Route::post('/iqac_event_filter', [EventController::class, 'iqac_event_filter'])->name('iqac_event_filter');

    //collabration
    Route::get('/collabration', [CollabrationController::class, 'collabration'])->name('collabration');

    //Feedback
    Route::get('/feedback', [IqacController::class, 'Feedback'])->name('feedback');

    Route::get('/evaluation_report', [IqacController::class, 'Evaluation'])->name('evaluation_report');

    //committees
    Route::get('/committees', [IqacController::class, 'committees'])->name('committees');

    //policy
    Route::get('/policies', [IqacController::class, 'policy'])->name('policies');

    //Minutes
    Route::get('/minutes', [IqacController::class, 'minutes'])->name('minutes');

    //committees&cells
    Route::get('/committees_cells', [IqacController::class, 'committeesCells'])->name('committeesCells');

    //MOUs
    Route::get('/mou', [IqacController::class, 'mou'])->name('Mous');

    //Facilities
    Route::get('/facilities', [IqacController::class, 'facilities'])->name('facilities');

    //Attendance
    Route::get('/attendance', [IqacController::class, 'attendance'])->name('attendance');

    //eLearning
    Route::get('/eLearning', [IqacController::class, 'eLearning'])->name('eLearning');
    Route::get('/eResource', [IqacController::class, 'eResource'])->name('eResource');

    //Student Grievance Redressal Committee
    Route::get('/grievance_redressal', [IqacController::class, 'grievanceRedressal'])->name('grievance_redressal');

    //Grievance
    Route::get('/grievances', [GrievancesController::class, 'grievances'])->name('grievances');
    Route::get('/reload-captcha', [GrievancesController::class, 'reloadCaptcha'])->name('reloadCaptcha');
    Route::post('/store_grievances', [GrievancesController::class, 'storeGrievances'])->name('storeGrievances');

    //Syllabus
    Route::get('/syllabus', [IqacController::class, 'syllabus'])->name('syllabus');

    //proceedings
    Route::get('/proceedings', [PublicationsController::class, 'proceedings'])->name('proceedings');

    //documentation
    Route::get('/documentation', [PublicationsController::class, 'documentation'])->name('documentation');

    //documentation
    Route::get('/anti_raging', [GrievancesController::class, 'antiRaging'])->name('antiRaging');

    //annual_magazine
    Route::get('/annual_magazine', [PublicationsController::class, 'annualMagazine'])->name('annualMagazine');
    Route::get('/gyangrah', [PublicationsController::class, 'gyangrah'])->name('gyangrah');
    Route::get('/hramony', [PublicationsController::class, 'hramony'])->name('hramony');

    //annual_reports
    Route::get('/reports', [PublicationsController::class, 'annualReports'])->name('annualReports');

    //E-news Letter
    Route::get('/enews_letter', [PublicationsController::class, 'enewsLetter'])->name('enewsLetter');

    //booksResearchPublication
    Route::get('/books_research_publication', [PublicationsController::class, 'booksResearchPublication'])->name('booksResearchPublication');
    Route::get('/monograph', [PublicationsController::class, 'monograph'])->name('monograph');

    //Fazil
    Route::get('/fazil', [AcademicController::class, 'fazil'])->name('fazil');
    Route::get('/alim', [AcademicController::class, 'alim'])->name('alim');

    //KRC
    Route::get('/krc_with_aicte', [AcademicController::class, 'with_aicte'])->name('with_aicte');
    Route::get('/krc_without_aicte', [AcademicController::class, 'without_aicte'])->name('without_aicte');

    //B.Ed
    Route::get('/bed', [AcademicController::class, 'bed'])->name('bed');

    //Application for Online Certificate
    Route::get('/online_certificate', [StudentSectionController::class, 'onlineCertificate'])->name('onlineCertificate');
    Route::get('/filter-degrees', [StudentSectionController::class, 'filterDegrees'])
        ->name('filter.degrees');
    Route::post('/get-degrees-by-urgent', [StudentSectionController::class, 'getDegreesByUrgent'])->name('getDegreesByUrgent');
    Route::post('/get-degree-price', [StudentSectionController::class, 'getDegreePrice'])->name('getDegreePrice');


    Route::post('/certificate_store', [StudentSectionController::class, 'certificateStore'])->name('certificateStore');
    Route::post('/translate-name', [StudentSectionController::class, 'translateName']);
    Route::post('/check-registration', [StudentSectionController::class, 'checkMobileNumber'])->name('checkMobileNumber');
    Route::get('/view-certificate/{reg_no}', [StudentSectionController::class, 'viewCertificate'])->name('viewCertificate');
    Route::post('/check_receipt', [StudentSectionController::class, 'checkReceipt'])->name('checkReceipt');
    Route::post('/check-certificate', [StudentSectionController::class, 'checkCertificate'])->name('checkCertificate');
    Route::get('/generate_receipt/{id}', [StudentSectionController::class, 'generateReceipt'])->name('generateReceipt');
    Route::post('/get_document', [StudentSectionController::class, 'getDocument'])->name('getDocument');
    Route::post('/get_document_name', [StudentSectionController::class, 'getDocumentName'])->name('getDocumentName');
    Route::post('/get_certificate', [StudentSectionController::class, 'getCertificate'])->name('getCertificate');
    Route::post('/get_course', [StudentSectionController::class, 'getcourse'])->name('getcourse');
    Route::post('/get_session', [StudentSectionController::class, 'getsession'])->name('getsession');
    //Calener
    Route::get('/calender', [IndexController::class, 'calender'])->name('calender');
    Route::get('/get_calender', [IndexController::class, 'getCalenderByYear'])->name('getCalenderByYear');
    //Razorpay
    Route::get('payment/{id}', [RazorpayController::class, 'index'])->name('razorpay.payment');
    Route::post('payment', [RazorpayController::class, 'store'])->name('razorpay.store');
    // Route::get('/settlement', [RazorpayController::class, 'settlement'])->name('razorpay.settlement');

    //Team
    Route::get('/view-team/{id}', [TeamController::class, 'viewTeam'])->name('viewTeam');

    //faculty
    Route::get('/faculty', [WebFacultyController::class, 'faculty'])->name('faculty');
    Route::get('/viewfaculties/{id}', [WebFacultyController::class, 'viewfaculties'])->name('viewfaculties');
    Route::get('/teams/{id}', [WebFacultyController::class, 'teams'])->name('faculty.team');
    Route::get('/view-faculty/{id}', [WebFacultyController::class, 'viewfaculty'])->name('faculty.viewfaculty');

    //Academics
    Route::get('/department_arabic', [AcademicsController::class, 'departmentArabic'])->name('departmentArabic');

    //Contact Us
    Route::get('/contact_us', [ContactusController::class, 'contactUs'])->name('contact_us');
    Route::get('/address', [ContactusController::class, 'address'])->name('address');
    Route::get('/how_to_reach', [ContactusController::class, 'howtoReach'])->name('howtoReach');
    Route::get('/sc_st', [ContactusController::class, 'ScSt'])->name('sc_st');

    //st_sc


    //quicklink
    Route::get('/quicklink', [ContactusController::class, 'quicklink'])->name('quicklink');

    //fit-india-movement
    Route::get('/fit_india_movement', [IndexController::class, 'fitIndia'])->name('fitIndia');

    //Committe
    Route::get('/topbar_committees', [IndexController::class, 'committe'])->name('committe');


    // Course Route
    Route::get('/course', [CourseController::class, 'index'])->name('course');
    Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.single');
    // Event Route
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::get('/event/{id}/{slug}', [EventController::class, 'show'])->name('event.single');
    // Faq Route
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    // Gallery Route
    Route::get('/gallery_thum', [GalleryController::class, 'index'])->name('galleryThum');
    Route::get('/view_gallery/{id}', [GalleryController::class, 'viewGallery'])->name('viewGallery');
    // News Route
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/newspaper/{id}', [NewsController::class, 'show'])->name('news.single');
    // Page Route
    Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.single');

    // Application Route
    Route::resource('application', ApplicationController::class);

    //Notice-list
    Route::get('/view-notice-list/{type}', [NoticeListController::class, 'noticeList'])->name('web.noticeList');
    Route::get('/noticelist-single{id}', [NoticeListController::class, 'viewNotice'])->name('web.viewNotice');

    // SetCookie Route
    Route::get('/set-cookie', [IndexController::class, 'setCookie'])->name('setCookie');
});

// Set Lang Version
Route::get('locale/language/{locale}', function ($locale) {

    \Session::put('locale', $locale);

    \App::setLocale($locale);

    return redirect()->back();
})->name('version');



//Admin Routes
Route::view('login', 'auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login');
/******************LOGIN PAGE ROUTES END****************/

/*******************REGISTER ROUTE START*************/
Route::view('register', 'auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register');
/*******************REGISTER ROUTE END*************/

/*******************LOGOUT ROUTE START*************/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
/*******************LOGOUT ROUTE END*************/
Route::post('get_city_against_states', [AuthController::class, 'getCityAgainstStates'])->name('get_city_against_states');
Route::post('get_state_against_countries', [AuthController::class, 'getStateAgainstCountries'])->name('get_state_against_countries');
Route::post('get_course_aganist_college', [AuthController::class, 'getCourseAganistCollege'])->name('get_course_aganist_college');
Route::post('get_semester_aganist_course', [AuthController::class, 'getSemesterAganistCourse'])->name('get_semester_aganist_course');
Route::post('get_subject_aganist_semester', [AuthController::class, 'getSubjectAganistSemester'])->name('get_subject_aganist_semester');
Route::get('get_course_fields', [AuthController::class, 'getCourseFields'])->name('get_course_fields');
Route::post('razor/callback', [AuthController::class, 'razorCallback'])->name('razor.callback');
Route::post('get_subject_aganist_course', [AuthController::class, 'getSubjectAganistCourse'])->name('get_subject_aganist_course');

Route::post('get_student_profiles_against_cities', [AuthController::class, 'getStudentProfilesAgainstCity'])->name('get_student_profiles_against_cities');


/*******************ADMIN ROUTE START*************/
include __DIR__ . '/admin.php';
/*******************ADMIN ROUTE END*************/

/*******************STUDENT ROUTE START*************/
include __DIR__ . '/student.php';
/*******************STUDENT ROUTE END*************/

/*******************COLLEGE ROUTE START*************/
include __DIR__ . '/college.php';
/*******************COLLEGE ROUTE END*************/

/*******************TEACHER ROUTE START*************/
include __DIR__ . '/teacher.php';
/*******************TEACHER ROUTE END*************/

/*******************Prospect ROUTE START*************/
include __DIR__ . '/prospect.php';
/*******************Prospect ROUTE END*************/
/******************FUNCTIONALITY ROUTES****************/
Route::get('cd', function () {
    Artisan::call('config:cache');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed', ['--class' => DatabaseSeeder::class]);
    Artisan::call('view:clear');
    return 'DONE';
});
Route::get('migrate', function () {
    Artisan::call('config:cache');
    Artisan::call('migrate');
    Artisan::call('view:clear');
    return 'DONE';
});
Route::get('cache_clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'DONE';
});
Route::get('test', function () {
    dd(config('services.razor_pay'));
    // PaymentGateway::proccess();
});
Route::get('add_categories', function () {

    DB::table('document_categories')->insert([
        ['name' => 'Passport Size Photograph'],
        ['name' => 'Full Signatue of the Candidate'],
        ['name' => 'Full Signatue of the Father'],
        ['name' => 'Full Signatue of the Mother'],
        ['name' => 'Full Signatue of the Guradian'],
        ['name' => 'Aadhar Card'],
        ['name' => 'Citizen Certificate'],
        ['name' => 'Caste Certificate From the Appropriate Authority'],
        ['name' => 'Physically Handicapped Ceertificate with Percentage of Disability from the Appropriate'],
        ['name' => 'Ex-Serviceman Certificate'],
        ['name' => '10th or Equivalent Certificate'],
        ['name' => '10th or Equivalent Martsheet'],
    ]);
});
