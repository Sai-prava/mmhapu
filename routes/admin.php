<?php

/****************** ADMIN MIDDLEWARE PAGES ROUTES START****************/

use App\Http\Controllers\Admin\AcademicsController;
use App\Http\Controllers\Admin\CenterMappingController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CollegeCourseController;
use App\Http\Controllers\Admin\CollegeProfileController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DocumentCategoryController;
use App\Http\Controllers\Admin\DocumentCategoryEntranceFeeController;
use App\Http\Controllers\Admin\EntranceFeeController;
use App\Http\Controllers\Admin\ExamCenterRegistrationController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\GradeCategoryController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PoliceStationController;
use App\Http\Controllers\Admin\ProspectController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\StudentAttendanceController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\NoticeTypeController;
use App\Http\Controllers\Admin\noticeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DepartmentinfoController as AdminDepartmentinfoController;
use App\Http\Controllers\Admin\EvaluationController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\FacultySubcategoryController;
use App\Http\Controllers\Admin\GatewayDetailController;
use App\Http\Controllers\Admin\IqacCollabrationController;
use App\Http\Controllers\Admin\IqacCommitteesController;
use App\Http\Controllers\Admin\IqaceventController;
use App\Http\Controllers\Admin\IqaceventTitleController;
use App\Http\Controllers\Admin\IqacFeedbackController;
use App\Http\Controllers\Admin\IqacPolicyController;
use App\Http\Controllers\Admin\IqacMinutesController;
use App\Http\Controllers\Admin\CommitteesCellsController;
use App\Http\Controllers\Admin\MouController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\ElearningController;
use App\Http\Controllers\Admin\StudentGrievanceController;
use App\Http\Controllers\Admin\SyllabusController;
use App\Http\Controllers\Admin\ProceedingsController;
use App\Http\Controllers\Admin\AnnualMagazineController;
use App\Http\Controllers\Admin\AnnualReportsController;
use App\Http\Controllers\Admin\EnewsLetterController;
use App\Http\Controllers\Admin\AdministrativeController;
use App\Http\Controllers\Admin\ActStatusController;
use App\Http\Controllers\Admin\AdminCalenderController;
use App\Http\Controllers\Admin\AntiragingController;
use App\Http\Controllers\Admin\MonographController;
use App\Http\Controllers\Admin\OverviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ShiftController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\Web\AboutUsController;
use App\Http\Controllers\Admin\Web\CallToActionController;
use App\Http\Controllers\Admin\Web\CourseController as WebCourseController;
use App\Http\Controllers\Admin\Web\FaqController as WebFaqController;
use App\Http\Controllers\Admin\Web\FeatureController;
use App\Http\Controllers\Admin\Web\GalleryController as WebGalleryController;
use App\Http\Controllers\Admin\Web\NewsController as WebNewsController;
use App\Http\Controllers\Admin\Web\PageController as WebPageController;
use App\Http\Controllers\Admin\Web\SliderController;
use App\Http\Controllers\Admin\Web\SocialSettingController;
use App\Http\Controllers\Admin\Web\TestimonialController;
use App\Http\Controllers\Admin\Web\TopbarSettingController;
use App\Http\Controllers\Admin\Web\WebEventController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PassedexamController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuicklinkController;
use App\Http\Controllers\Admin\QuicklinktitleController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TopbarController;
use App\Http\Controllers\Admin\StudymaterialController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\Web\AdministrationController;
use App\Http\Controllers\Admin\Web\CampusController;
use App\Http\Controllers\Admin\Web\MediapathController;
use App\Http\Controllers\Admin\Web\NewspaperController;
use App\Http\Controllers\Admin\Web\StudentsectionController;
use App\Http\Controllers\Admin\Web\ViewgalleryController;
use App\Http\Controllers\Admin\Web\ViewnewsController;
use App\Http\Controllers\DepartmentinfoController;
use App\Http\Controllers\Frontwebuser\Web\GalleryController;
use App\Http\Controllers\Prospect\ResultController;
use App\Http\Controllers\Web\StudentSectionController as WebStudentSectionController;
use App\Models\GatewayDetail;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:user', 'admin'], function () {
    /*******************DASHBOARD ROUTE START*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /*******************DASHBOARD ROUTE END*************/
    /*******************USER ROUTE START*************/
    Route::get('user/verified/{id}', [UserController::class, 'verified'])->name('user.verified');
    Route::get('user/revert_verification/{id}', [UserController::class, 'revert_verification'])->name('user.revert_verification');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('user.active');
    Route::get('user/in_active/{id}', [UserController::class, 'in_active'])->name('user.in_active');
    Route::resource('user', UserController::class);
    /*******************USER ROUTE END*************/
    /*******************COLLEGE ROUTE START*************/
    Route::resource('college', CollegeController::class);
    /*******************COLLEGE PROFILE ROUTE START*************/
    Route::get('college_profile/download/{id}', [CollegeProfileController::class, 'downloadFile'])->name('college_profile.download');
    Route::resource('college_profile', CollegeProfileController::class);
    /*******************COLLEGE PROFILE ROUTE END*************/
    /*******************COLLEGE COURSE ROUTE START*************/
    Route::resource('college_course', CollegeCourseController::class);
    /*******************COLLEGE PROFILE ROUTE END*************/
    /*******************COLLEGE ROUTE END*************/
    /*******************STUDENT ROUTE START*************/
    /*******************COLLEGE PROFILE ROUTE START*************/

    // Route::resource('student_profile', StudentProfileController::class);

    /*******************COLLEGE PROFILE ROUTE END*************/
    Route::resource('student', StudentController::class);
    /*******************STUDENT ROUTE END*************/
    /*******************PROSPECT ROUTE END*************/
    Route::post('status_update', [ProspectController::class, 'statusUpdate'])->name('prospect.status_update');
    Route::post('get_admit_content', [ProspectController::class, 'getAdmitContent'])->name('prospect.get_admit_content');
    Route::resource('prospect', ProspectController::class);
    Route::resource('center_mapping', CenterMappingController::class);
    /*******************PROSPECT ROUTE END*************/
    /*******************TEACHER ROUTE START*************/
    Route::resource('teacher', TeacherController::class);
    /*******************TEACHER ROUTE END*************/

    /*******************ADMIN USER ROUTE START*************/
    Route::get('adminuser/list', [AdminUserController::class, 'list'])->name('AdminUser.list');
    Route::get('adminuser/add', [AdminUserController::class, 'add'])->name('AdminUser.add');
    Route::post('adminuser/store', [AdminUserController::class, 'store'])->name('AdminUser.store');
    Route::get('adminuser/edit{id}', [AdminUserController::class, 'edit'])->name('AdminUser.edit');
    Route::post('adminuser/update', [AdminUserController::class, 'update'])->name('AdminUser.update');
    Route::get('adminuser/delete{id}', [AdminUserController::class, 'delete'])->name('AdminUser.delete');
    /*******************ADMIN USER ROUTE END*************/

    /*******************COURSE ROUTE START*************/
    // Route::resource('course', CourseController::class);
    Route::resource('course', WebCourseController::class);
    /*******************COURSE ROUTE END*************/
    /*******************SEMESTER ROUTE START*************/
    Route::resource('semester', SemesterController::class);
    /*******************SEMESTER ROUTE END*************/
    /*******************SUBJECT ROUTE START*************/
    Route::post('subject/get_course_semsters', [SubjectController::class, 'getCourseSemsters'])->name('subject.get_course_semsters');
    Route::resource('subject', SubjectController::class);
    /*******************SUBJECT ROUTE END*************/
    /*******************COUNTRY ROUTE START*************/
    Route::resource('country', CountryController::class);
    /*******************COUNTRY ROUTE END*************/
    /*******************STATE ROUTE START*************/
    Route::resource('state', StateController::class);
    /*******************STATE ROUTE END*************/
    /*******************CITY ROUTE START*************/
    Route::resource('city', CityController::class);
    /*******************CITY ROUTE END*************/
    /*******************STUDENT ATTENDANCE ROUTE START*************/
    Route::post('get_students_for_attendance', [StudentAttendanceController::class, 'getStudents'])->name('student_attendance.get_student');
    Route::post('force_allowed', [StudentAttendanceController::class, 'forceAllowed'])->name('student_attendance.force_allowed');
    Route::resource('student_attendance', StudentAttendanceController::class);
    /*******************STUDENT ATTENDANCE ROUTE END*************/
    /*******************ROLE START*************/
    Route::resource('roles', RolesController::class);
    /*******************ROLE END*************/
    /*******************Notice Type Start*************/
    Route::get('/noticetype/list', [NoticeTypeController::class, 'list'])->name('NoticeType.list');
    Route::get('/noticetype/add', [NoticeTypeController::class, 'add'])->name('NoticeType.add');
    Route::post('/noticetype/add', [NoticeTypeController::class, 'store'])->name('NoticeType.store');
    Route::get('/noticetype/edit{id}', [NoticeTypeController::class, 'edit'])->name('NoticeType.edit');
    Route::post('/noticetype/update', [NoticeTypeController::class, 'update'])->name('NoticeType.update');
    Route::get('/noticetype/delete{id}', [NoticeTypeController::class, 'delete'])->name('NoticeType.delete');
    /*******************Notice Type END*************/
    /*******************Notice  Start*************/
    Route::get('/notice/list', [noticeController::class, 'list'])->name('Notice.list');
    Route::get('/notice/add', [noticeController::class, 'add'])->name('Notice.add');
    Route::post('/notice/add', [noticeController::class, 'store'])->name('Notice.store');
    Route::get('/notice/edit{id}', [noticeController::class, 'edit'])->name('Notice.edit');
    Route::post('/notice/update', [noticeController::class, 'update'])->name('Notice.update');
    Route::get('/notice/delete{id}', [noticeController::class, 'delete'])->name('Notice.delete');

    /*******************Notice END*************/
    // Route::resource('team', TeamController::class);

    /*******************Notice END*************/

    /*******************EXAM ROUTE START*************/
    Route::resource('exam', ExamController::class);
    /*******************EXAM ROUTE END*************/
    /*******************GRADE CATEGORY ROUTE START*************/
    Route::resource('grade_category', GradeCategoryController::class);
    /*******************GRADE CATEGORY ROUTE END*************/
    /*******************GRADE ROUTE START*************/
    Route::resource('grade', GradeController::class);
    /*******************GRADE  ROUTE END*************/
    /*******************Passed Exam ROUTE START*************/
    Route::resource('passed_exam', PassedexamController::class);
    /*******************Passed Exam ROUTE END*************/
    /*******************Board ROUTE START*************/
    Route::resource('board', BoardController::class);
    /*******************Board  ROUTE END*************/
    /*******************POLICE STATION ROUTE START*************/
    Route::resource('police_station', PoliceStationController::class);
    /*******************POLICE STATION  ROUTE END*************/
    /*******************ENTRANCE FEE ROUTE START*************/
    Route::resource('entrance_fee', EntranceFeeController::class);
    /*******************ENTRANCE FEE ROUTE END*************/

    //Quiz
    Route::get('/add-quiz', [QuizController::class, 'addQuiz'])->name('add.quiz');

    Route::get('/add-question/{id}', [QuestionController::class, 'addQuestion'])->name('add.question');

    Route::post('/store-quiz', [QuizController::class, 'storeQuiz'])->name('store.quiz');
    Route::get('/edit-quiz/{id}', [QuizController::class, 'editQuiz'])->name('edit.quiz');
    Route::post('/update-quiz', [QuizController::class, 'updateQuiz'])->name('update.quiz');
    Route::get('/delete-quiz/{id}', [QuizController::class, 'deleteQuiz'])->name('delete.quiz');

    Route::post('/store-question', [QuestionController::class, 'storeQuestion'])->name('store.question');
    Route::get('/edit-question/{id}', [QuestionController::class, 'editQuestion'])->name('edit.question');
    Route::post('/update-question', [QuestionController::class, 'updateQuestion'])->name('update.question');
    Route::get('/delete-question/{id}', [QuestionController::class, 'deleteQuestion'])->name('delete.question');
    Route::get('/results', [ResultController::class, 'index'])->name('results');

    /*******************Document Category ROUTE START*************/
    Route::resource('document_category', DocumentCategoryController::class);
    /*******************Document Category ROUTE END*************/
    /*******************Document Category Entrance Fee ROUTE START*************/
    Route::resource('document_category_entrance_fee', DocumentCategoryEntranceFeeController::class);
    /*******************Document Category Entrance Fee ROUTE END*************/
    /*******************Exam Center Registration ROUTE START*************/
    Route::resource('exam_center_registration', ExamCenterRegistrationController::class);
    /*******************Exam Center Registration ROUTE END*************/
    /*******************Exam Shift ROUTE START*************/
    Route::resource('shift', ShiftController::class);
    /*******************Exam Shift ROUTE END*************/
    /*******************Gateway ROUTE START*************/
    Route::resource('gateway', GatewayDetailController::class);
    /*******************Gateway ROUTE END*************/

    Route::prefix('web')->group(function () {
        Route::resource('menu', MenuController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('feature', FeatureController::class);
        Route::resource('about-us', AboutUsController::class);
        // Route::resource('course', WebCourseController::class);
        Route::resource('web-event', WebEventController::class);
        Route::post('/getsubmenu', [MenuController::class, 'getSubmenu'])->name('get_submenu');

        //Overview
        Route::get('/overview/list', [OverviewController::class, 'list'])->name('Overview.list');
        Route::post('/overview/store', [OverviewController::class, 'store'])->name('Overview.store');

        //team
        Route::get('/team/list', [TeamController::class, 'list'])->name('Team.list');
        Route::get('/team/add', [TeamController::class, 'add'])->name('Team.add');
        Route::post('/team/store', [TeamController::class, 'store'])->name('Team.store');
        Route::get('/team/edit{id}', [TeamController::class, 'edit'])->name('Team.edit');
        Route::post('/team/update', [TeamController::class, 'update'])->name('Team.update');
        Route::get('/team/delete{id}', [TeamController::class, 'delete'])->name('Team.delete');

        //department info
        Route::get('/info/list', [AdminDepartmentinfoController::class, 'list'])->name('Info.list');
        Route::get('/info/add', [AdminDepartmentinfoController::class, 'add'])->name('Info.add');
        Route::post('/info/store', [AdminDepartmentinfoController::class, 'store'])->name('Info.store');
        Route::get('/info/edit{id}', [AdminDepartmentinfoController::class, 'edit'])->name('Info.edit');
        Route::post('/info/update', [AdminDepartmentinfoController::class, 'update'])->name('Info.update');
        Route::get('/info/delete{id}', [AdminDepartmentinfoController::class, 'delete'])->name('Info.delete');

        //faculty category
        Route::get('/faculty/category/list', [FacultyController::class, 'list'])->name('faculty.category.list');
        Route::get('/faculty/category/add', [FacultyController::class, 'add'])->name('faculty.category.add');
        Route::post('/faculty/category/store', [FacultyController::class, 'store'])->name('faculty.category.store');
        Route::get('/faculty/category/edit{id}', [FacultyController::class, 'edit'])->name('faculty.category.edit');
        Route::post('/faculty/category/update', [FacultyController::class, 'update'])->name('faculty.category.update');
        Route::get('/faculty/category/delete{id}', [FacultyController::class, 'delete'])->name('faculty.category.delete');

        Route::post('faculty/getsubcategory', [FacultyController::class, 'getSubcategory'])->name('faculty.getsubcategory');

        //faculty subcategory
        Route::get('/faculty/subcategory/list', [FacultySubcategoryController::class, 'list'])->name('faculty.subcategory.list');
        Route::get('/faculty/subcategory/add', [FacultySubcategoryController::class, 'add'])->name('faculty.subcategory.add');
        Route::post('/faculty/subcategory/store', [FacultySubcategoryController::class, 'store'])->name('faculty.subcategory.store');
        Route::get('/faculty/subcategory/edit{id}', [FacultySubcategoryController::class, 'edit'])->name('faculty.subcategory.edit');
        Route::post('/faculty/subcategory/update', [FacultySubcategoryController::class, 'update'])->name('faculty.subcategory.update');
        Route::get('/faculty/subcategory/delete{id}', [FacultySubcategoryController::class, 'delete'])->name('faculty.subcategory.delete');

        //Facility
        Route::get('/facility/list', [FacilityController::class, 'list'])->name('facility.list');
        Route::get('/facility/add', [FacilityController::class, 'add'])->name('facility.add');
        Route::post('/facility/store', [FacilityController::class, 'store'])->name('facility.store');
        Route::get('/facility/edit{id}', [FacilityController::class, 'edit'])->name('facility.edit');
        Route::post('/facility/update', [FacilityController::class, 'update'])->name('facility.update');
        Route::get('/facility/delete{id}', [FacilityController::class, 'delete'])->name('facility.delete');


        //Media Path
        Route::get('media_path/list', [MediapathController::class, 'list'])->name('Mediapath.list');
        Route::post('media_path/store', [MediapathController::class, 'store'])->name('Mediapath.store');
        Route::get('media_path/delete/{id}', [MediapathController::class, 'delete'])->name('Mediapath.delete');

        //Quick-link-title
        Route::get('/quicklink_title/list', [QuicklinktitleController::class, 'list'])->name('qtitle.list');
        Route::post('/quicklink_title/store', [QuicklinktitleController::class, 'store'])->name('qtitle.store');
        Route::get('/quicklink_title/edit/{id}', [QuicklinktitleController::class, 'edit'])->name('qtitle.edit');
        Route::post('/quicklink_title/update', [QuicklinktitleController::class, 'update'])->name('qtitle.update');
        Route::get('/quicklink_title/delete/{id}', [QuicklinktitleController::class, 'delete'])->name('qtitle.delete');

        //Quick-links
        Route::get('/quick_link/list', [QuicklinkController::class, 'list'])->name('Quicklink.list');
        Route::get('/quick_link/add', [QuicklinkController::class, 'add'])->name('Quicklink.add');
        Route::post('/quick_link/store', [QuicklinkController::class, 'store'])->name('Quicklink.store');
        Route::get('/quick_link/edit{id}', [QuicklinkController::class, 'edit'])->name('Quicklink.edit');
        Route::post('/quick_link/update', [QuicklinkController::class, 'update'])->name('Quicklink.update');
        Route::get('/quick_link/delete{id}', [QuicklinkController::class, 'delete'])->name('Quicklink.delete');

        //iqac event title
        Route::get('iqac_eventtitle/list', [IqaceventTitleController::class, 'list'])->name('IqacEventTitle.list');
        Route::get('iqac_eventtitle/add', [IqaceventTitleController::class, 'add'])->name('IqacEventTitle.add');
        Route::post('iqac_eventtitle/store', [IqaceventTitleController::class, 'store'])->name('IqacEventTitle.store');
        Route::get('iqac_eventtitle/edit{id}', [IqaceventTitleController::class, 'edit'])->name('IqacEventTitle.edit');
        Route::post('iqac_eventtitle/update', [IqaceventTitleController::class, 'update'])->name('IqacEventTitle.update');
        Route::get('iqac_eventtitle/delete{id}', [IqaceventTitleController::class, 'delete'])->name('IqacEventTitle.delete');

        //iqac event
        Route::get('iqac_event/list', [IqaceventController::class, 'list'])->name('IqacEvent.list');
        Route::post('iqac_event/store', [IqaceventController::class, 'store'])->name('IqacEvent.store');
        Route::get('iqac_event/edit{id}', [IqaceventController::class, 'edit'])->name('IqacEvent.edit');
        Route::post('iqac_event/update', [IqaceventController::class, 'update'])->name('IqacEvent.update');
        Route::get('iqac_event/delete{id}', [IqaceventController::class, 'delete'])->name('IqacEvent.delete');

        //iqac Collabration
        Route::get('/collabration/list', [IqacCollabrationController::class, 'list'])->name('Collabration.list');
        Route::get('/collabration/add', [IqacCollabrationController::class, 'add'])->name('Collabration.add');
        Route::post('/collabration/store', [IqacCollabrationController::class, 'store'])->name('Collabration.store');
        Route::get('/collabration/edit/{id}', [IqacCollabrationController::class, 'edit'])->name('Collabration.edit');
        Route::post('/collabration/update', [IqacCollabrationController::class, 'update'])->name('Collabration.update');
        Route::get('/collabration/delete/{id}', [IqacCollabrationController::class, 'delete'])->name('Collabration.delete');

        //Feedback
        Route::get('/feedback/index', [IqacFeedbackController::class, 'index'])->name('Feedback.index');
        Route::post('/feedback/store', [IqacFeedbackController::class, 'store'])->name('Feedback.store');
        Route::get('/feedback/edit/{id}', [IqacFeedbackController::class, 'edit'])->name('Feedback.edit');
        Route::post('/feedback/update', [IqacFeedbackController::class, 'update'])->name('Feedback.update');
        Route::get('/feedback/delete/{id}', [IqacFeedbackController::class, 'delete'])->name('Feedback.delete');

        //Evalutions-title
        Route::get('/evaluation_title/index', [EvaluationController::class, 'index'])->name('Evaluation.index');
        Route::post('/evaluation_title/store', [EvaluationController::class, 'store'])->name('Evaluation.store');
        Route::post('/evaluation_title/update', [EvaluationController::class, 'update'])->name('Evaluation.update');
        Route::get('/evaluation_title/delete/{id}', [EvaluationController::class, 'delete'])->name('Evaluation.delete');

        //Evalutions
        Route::get('/evaluation_report/list', [EvaluationController::class, 'list'])->name('evaluation_report.list');
        Route::get('/evaluation_report/add', [EvaluationController::class, 'add'])->name('evaluation_report.add');
        Route::post('/evaluation_report/insert', [EvaluationController::class, 'insert'])->name('evaluation_report.insert');
        Route::get('/evaluation_report/edit/{id}', [EvaluationController::class, 'edit'])->name('evaluation_report.edit');
        Route::post('/evaluation_report/update', [EvaluationController::class, 'Eupdate'])->name('evaluation_report.update');
        Route::get('/evaluation_report/destory/{id}', [EvaluationController::class, 'destory'])->name('evaluation_report.destory');

        //Committees
        Route::get('/committees/list', [IqacCommitteesController::class, 'list'])->name('committees.list');
        Route::get('/committees/add', [IqacCommitteesController::class, 'add'])->name('committees.add');
        Route::post('/committees/store', [IqacCommitteesController::class, 'store'])->name('committees.store');
        Route::get('/committees/edit/{id}', [IqacCommitteesController::class, 'edit'])->name('committees.edit');
        Route::post('/committees/update', [IqacCommitteesController::class, 'update'])->name('committees.update');
        Route::get('/committees/delete/{id}', [IqacCommitteesController::class, 'delete'])->name('committees.delete');

        //Policy
        Route::get('/policies/list', [IqacPolicyController::class, 'list'])->name('policies.list');
        Route::get('/policies/add', [IqacPolicyController::class, 'add'])->name('policies.add');
        Route::post('/policies/store', [IqacPolicyController::class, 'store'])->name('policies.store');
        Route::get('/policies/edit/{id}', [IqacPolicyController::class, 'edit'])->name('policies.edit');
        Route::post('/policies/update', [IqacPolicyController::class, 'update'])->name('policies.update');
        Route::get('/policies/delete/{id}', [IqacPolicyController::class, 'delete'])->name('policies.delete');

        //minutes
        Route::get('/minutes/list', [IqacMinutesController::class, 'list'])->name('minutes.list');
        Route::get('/minutes/add', [IqacMinutesController::class, 'add'])->name('minutes.add');
        Route::post('/minutes/store', [IqacMinutesController::class, 'store'])->name('minutes.store');
        Route::get('/minutes/edit/{id}', [IqacMinutesController::class, 'edit'])->name('minutes.edit');
        Route::post('/minutes/update', [IqacMinutesController::class, 'update'])->name('minutes.update');
        Route::get('/minutes/delete/{id}', [IqacMinutesController::class, 'delete'])->name('minutes.delete');

        //committees & cells title
        Route::get('/iqac_committes_title/list', [CommitteesCellsController::class, 'index'])->name('CommitteesCellsTitle.list');
        Route::post('/iqac_committes_title/store', [CommitteesCellsController::class, 'storeTitle'])->name('CommitteesCellsTitle.store');
        Route::post('/iqac_committes_title/update', [CommitteesCellsController::class, 'update'])->name('CommitteesCellsTitle.update');
        Route::get('/iqac_committes_title/delete/{id}', [CommitteesCellsController::class, 'delete'])->name('CommitteesCellsTitle.delete');

        //committees & cells
        Route::get('/iqac_committes_cells/list', [CommitteesCellsController::class, 'list'])->name('committesCells.list');
        Route::get('/iqac_committes_cells/add', [CommitteesCellsController::class, 'add'])->name('committesCells.add');
        Route::post('/iqac_committes_cells/store', [CommitteesCellsController::class, 'store'])->name('committesCells.store');
        Route::get('/iqac_committes_cells/edit/{id}', [CommitteesCellsController::class, 'edit'])->name('committesCells.edit');
        Route::post('/iqac_committes_cells/update', [CommitteesCellsController::class, 'updateCommittee'])->name('committesCells.update');
        Route::get('/iqac_committes_cells/delete/{id}', [CommitteesCellsController::class, 'deleteCommittee'])->name('committesCells.delete');
        Route::post('/gettitle', [CommitteesCellsController::class, 'getTitle'])->name('getTitle');

        //MOUs
        Route::get('/mous/list', [MouController::class, 'list'])->name('mous.list');
        Route::get('/mous/add', [MouController::class, 'add'])->name('mous.add');
        Route::post('/mous/store', [MouController::class, 'store'])->name('mous.store');
        Route::get('/mous/edit/{id}', [MouController::class, 'edit'])->name('mous.edit');
        Route::post('/mous/update', [MouController::class, 'update'])->name('mous.update');
        Route::get('/mous/delete/{id}', [MouController::class, 'delete'])->name('mous.delete');

        //Attendance Title
        Route::get('/attendance_title/list', [AttendanceController::class, 'title'])->name('attendanceTitle.list');
        Route::post('/attendance_title/store', [AttendanceController::class, 'storeTitle'])->name('attendanceTitle.store');
        Route::post('/attendance_title/update', [AttendanceController::class, 'updateTitle'])->name('attendanceTitle.update');
        Route::get('/attendance_title/delete/{id}', [AttendanceController::class, 'deleteTitle'])->name('attendanceTitle.delete');

        //Attendance
        Route::get('/attendance/list', [AttendanceController::class, 'list'])->name('attendance.list');
        Route::get('/attendance/add', [AttendanceController::class, 'add'])->name('attendance.add');
        Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');
        Route::get('/attendance/edit/{id}', [AttendanceController::class, 'edit'])->name('attendance.edit');
        Route::post('/attendance/update', [AttendanceController::class, 'update'])->name('attendance.update');
        Route::get('/attendance/delete/{id}', [AttendanceController::class, 'delete'])->name('attendance.delete');

        //e-Learning Title
        Route::get('/elearning_title/list', [ElearningController::class, 'title'])->name('elearningTitle.list');
        Route::post('/elearning_title/store', [ElearningController::class, 'storeTitle'])->name('elearningTitle.store');
        Route::post('/elearning_title/update', [ElearningController::class, 'updateTitle'])->name('elearningTitle.update');
        Route::get('/elearning_title/delete/{id}', [ElearningController::class, 'deleteTitle'])->name('elearningTitle.delete');

        //e-Learning
        Route::get('/elearning/list', [ElearningController::class, 'list'])->name('elearning.list');
        Route::get('/elearning/add', [ElearningController::class, 'add'])->name('elearning.add');
        Route::post('/elearning/store', [ElearningController::class, 'store'])->name('elearning.store');
        Route::get('/elearning/edit/{id}', [ElearningController::class, 'edit'])->name('elearning.edit');
        Route::post('/elearning/update', [ElearningController::class, 'update'])->name('elearning.update');
        Route::get('/elearning/delete/{id}', [ElearningController::class, 'delete'])->name('elearning.delete');

        //Student Grievance Redressal Committee
        Route::get('/student_grievance/list', [StudentGrievanceController::class, 'list'])->name('studentGrievance.list');
        Route::get('/student_grievance/add', [StudentGrievanceController::class, 'add'])->name('studentGrievance.add');
        Route::post('/student_grievance/store', [StudentGrievanceController::class, 'store'])->name('studentGrievance.store');
        Route::get('/student_grievance/edit/{id}', [StudentGrievanceController::class, 'edit'])->name('studentGrievance.edit');
        Route::post('/student_grievance/update', [StudentGrievanceController::class, 'update'])->name('studentGrievance.update');
        Route::get('/student_grievance/delete/{id}', [StudentGrievanceController::class, 'delete'])->name('studentGrievance.delete');

        Route::get('/grievances_list', [StudentGrievanceController::class, 'grievances'])->name('grievances_list');
        Route::get('/grievances_view/{id}', [StudentGrievanceController::class, 'viewGrievances'])->name('viewGrievances');

        //Syllabus title
        Route::get('/syllabus_title/index', [SyllabusController::class, 'index'])->name('syllabus.index');
        Route::post('/syllabus_title/insert', [SyllabusController::class, 'insert'])->name('syllabus.insert');
        Route::post('/syllabus_title/update/{id}', [SyllabusController::class, 'updateTitle'])->name('syllabus.updateTitle');
        Route::get('/syllabus_title/destory/{id}', [SyllabusController::class, 'destory'])->name('syllabus.destory');

        //Syllabus
        Route::get('/syllabus/list', [SyllabusController::class, 'list'])->name('syllabus.list');
        Route::get('/syllabus/add', [SyllabusController::class, 'add'])->name('syllabus.add');
        Route::post('/syllabus/store', [SyllabusController::class, 'store'])->name('syllabus.store');
        Route::get('/syllabus/edit/{id}', [SyllabusController::class, 'edit'])->name('syllabus.edit');
        Route::post('/syllabus/update', [SyllabusController::class, 'update'])->name('syllabus.update');
        Route::get('/syllabus/delete/{id}', [SyllabusController::class, 'delete'])->name('syllabus.delete');

        //proceedings
        Route::get('/proceedings/list', [ProceedingsController::class, 'list'])->name('proceedings.list');
        Route::get('/proceedings/add', [ProceedingsController::class, 'add'])->name('proceedings.add');
        Route::post('/proceedings/store', [ProceedingsController::class, 'store'])->name('proceedings.store');
        Route::get('/proceedings/edit/{id}', [ProceedingsController::class, 'edit'])->name('proceedings.edit');
        Route::post('/proceedings/update', [ProceedingsController::class, 'update'])->name('proceedings.update');
        Route::get('/proceedings/delete/{id}', [ProceedingsController::class, 'delete'])->name('proceedings.delete');

        //Gyangrah
        Route::get('/gyangrah/list', [AnnualMagazineController::class, 'gyangrahList'])->name('gyangrah.list');
        Route::post('/gyangrah/store', [AnnualMagazineController::class, 'gyangrahStore'])->name('gyangrah.store');
        Route::get('/gyangrah/edit/{id}', [AnnualMagazineController::class, 'gyangrahEdit'])->name('gyangrah.edit');
        Route::post('/gyangrah/update', [AnnualMagazineController::class, 'gyangrahUpdate'])->name('gyangrah.update');
        Route::get('/gyangrah/delete/{id}', [AnnualMagazineController::class, 'gyangrahDelete'])->name('gyangrah.delete');

        //Harmony
        Route::get('/harmony/list', [AnnualMagazineController::class, 'harmonyList'])->name('harmony.list');
        Route::post('/harmony/store', [AnnualMagazineController::class, 'harmonyStore'])->name('harmony.store');
        Route::get('/harmony/edit/{id}', [AnnualMagazineController::class, 'harmonyEdit'])->name('harmony.edit');
        Route::post('/harmony/update', [AnnualMagazineController::class, 'harmonyUpdate'])->name('harmony.update');
        Route::get('/harmony/delete/{id}', [AnnualMagazineController::class, 'harmonyDelete'])->name('harmony.delete');

        //Monograph
        Route::get('/monograph/list', [MonographController::class, 'List'])->name('monograph.list');
        Route::post('/monograph/store', [MonographController::class, 'Store'])->name('monograph.store');
        Route::get('/monograph/edit/{id}', [MonographController::class, 'Edit'])->name('monograph.edit');
        Route::post('/monograph/update', [MonographController::class, 'Update'])->name('monograph.update');
        Route::get('/monograph/delete/{id}', [MonographController::class, 'Delete'])->name('monograph.delete');

        //Documentation
        Route::get('/documentation/list', [MonographController::class, 'documentationList'])->name('documentation.list');
        Route::post('/documentation/store', [MonographController::class, 'documentationStore'])->name('documentation.store');
        Route::get('/documentation/edit/{id}', [MonographController::class, 'documentationEdit'])->name('documentation.edit');
        Route::post('/documentation/update', [MonographController::class, 'documentationUpdate'])->name('documentation.update');
        Route::get('/documentation/delete/{id}', [MonographController::class, 'documentationDelete'])->name('documentation.delete');

        //Anti-Raging
        Route::get('/anti_raging/list', [AntiragingController::class, 'list'])->name('antiRaging.list');
        Route::get('/anti_raging/add', [AntiragingController::class, 'add'])->name('antiRaging.add');
        Route::post('/anti_raging/store', [AntiragingController::class, 'store'])->name('antiRaging.store');
        Route::get('/anti_raging/edit/{id}', [AntiragingController::class, 'edit'])->name('antiRaging.edit');
        Route::post('/anti_raging/update', [AntiragingController::class, 'update'])->name('antiRaging.update');
        Route::get('/anti_raging/delete/{id}', [AntiragingController::class, 'delete'])->name('antiRaging.delete');

        //Annual Reports
        Route::get('/reports/list', [AnnualReportsController::class, 'list'])->name('reports.list');
        Route::post('/reports/store', [AnnualReportsController::class, 'store'])->name('reports.store');
        Route::get('/reports/edit/{id}', [AnnualReportsController::class, 'edit'])->name('reports.edit');
        Route::post('/reports/update', [AnnualReportsController::class, 'update'])->name('reports.update');
        Route::get('/reports/delete/{id}', [AnnualReportsController::class, 'delete'])->name('reports.delete');

        //E-Newsletter
        Route::get('/enews_letter/list', [EnewsLetterController::class, 'list'])->name('enews_letter.list');
        Route::post('/enews_letter/store', [EnewsLetterController::class, 'store'])->name('enews_letter.store');
        Route::get('/enews_letter/edit/{id}', [EnewsLetterController::class, 'edit'])->name('enews_letter.edit');
        Route::post('/enews_letter/update', [EnewsLetterController::class, 'update'])->name('enews_letter.update');
        Route::get('/enews_letter/delete/{id}', [EnewsLetterController::class, 'delete'])->name('enews_letter.delete');

        //Fazil
        Route::get('/fazil/list', [AcademicsController::class, 'fazilList'])->name('fazil.list');
        Route::get('/fazil/add', [AcademicsController::class, 'fazilAdd'])->name('fazil.add');
        Route::post('/fazil/store', [AcademicsController::class, 'fazilStore'])->name('fazil.store');
        Route::get('/fazil/edit/{id}', [AcademicsController::class, 'fazilEdit'])->name('fazil.edit');
        Route::post('/fazil/update', [AcademicsController::class, 'fazilUpdate'])->name('fazil.update');
        Route::get('/fazil/delete/{id}', [AcademicsController::class, 'fazilDelete'])->name('fazil.delete');

        //alim
        Route::get('/alim/list', [AcademicsController::class, 'alimList'])->name('alim.list');
        Route::get('/alim/add', [AcademicsController::class, 'alimAdd'])->name('alim.add');
        Route::post('/alim/store', [AcademicsController::class, 'alimStore'])->name('alim.store');
        Route::get('/alim/edit/{id}', [AcademicsController::class, 'alimEdit'])->name('alim.edit');
        Route::post('/alim/update', [AcademicsController::class, 'alimUpdate'])->name('alim.update');
        Route::get('/alim/delete/{id}', [AcademicsController::class, 'alimDelete'])->name('alim.delete');

        //KRC with AICTE
        Route::get('/krc_with_aicte/list', [AcademicsController::class, 'WithAicteList'])->name('krcWithAicte.list');
        Route::get('/krc_with_aicte/add', [AcademicsController::class, 'WithAicteAdd'])->name('krcWithAicte.add');
        Route::post('/krc_with_aicte/store', [AcademicsController::class, 'WithAicteStore'])->name('krcWithAicte.store');
        Route::get('/krc_with_aicte/edit/{id}', [AcademicsController::class, 'WithAicteEdit'])->name('krcWithAicte.edit');
        Route::post('/krc_with_aicte/update', [AcademicsController::class, 'WithAicteUpdate'])->name('krcWithAicte.update');
        Route::get('/krc_with_aicte/delete/{id}', [AcademicsController::class, 'WithAicteDelete'])->name('krcWithAicte.delete');

        //KRC without AICTE
        Route::get('/krc_without_aicte/list', [AcademicsController::class, 'WithoutAicteList'])->name('krcWithoutAicte.list');
        Route::get('/krc_without_aicte/add', [AcademicsController::class, 'WithoutAicteAdd'])->name('krcWithoutAicte.add');
        Route::post('/krc_without_aicte/store', [AcademicsController::class, 'WithoutAicteStore'])->name('krcWithoutAicte.store');
        Route::get('/krc_without_aicte/edit/{id}', [AcademicsController::class, 'WithoutAicteEdit'])->name('krcWithoutAicte.edit');
        Route::post('/krc_without_aicte/update', [AcademicsController::class, 'WithoutAicteUpdate'])->name('krcWithoutAicte.update');
        Route::get('/krc_without_aicte/delete/{id}', [AcademicsController::class, 'WithoutAicteDelete'])->name('krcWithoutAicte.delete');

        //B.Ed
        Route::get('/bed/list', [AcademicsController::class, 'bedList'])->name('bed.list');
        Route::get('/bed/add', [AcademicsController::class, 'bedAdd'])->name('bed.add');
        Route::post('/bed/store', [AcademicsController::class, 'bedStore'])->name('bed.store');
        Route::get('/bed/edit/{id}', [AcademicsController::class, 'bedEdit'])->name('bed.edit');
        Route::post('/bed/update', [AcademicsController::class, 'bedUpdate'])->name('bed.update');
        Route::get('/bed/delete/{id}', [AcademicsController::class, 'bedDelete'])->name('bed.delete');

        //Administrative Officers
        Route::get('/administrative_officers/list', [AdministrativeController::class, 'officersList'])->name('administrative_officers.list');
        Route::get('/administrative_officers/add', [AdministrativeController::class, 'officersAdd'])->name('administrative_officers.add');
        Route::post('/administrative_officers/store', [AdministrativeController::class, 'officersStore'])->name('administrative_officers.store');
        Route::get('/administrative_officers/edit/{id}', [AdministrativeController::class, 'officersEdit'])->name('administrative_officers.edit');
        Route::post('/administrative_officers/update', [AdministrativeController::class, 'officersUpdate'])->name('administrative_officers.update');
        Route::get('/administrative_officers/delete/{id}', [AdministrativeController::class, 'officersDelete'])->name('administrative_officers.delete');

        //University Officers Title
        Route::get('/university_officers_title/list', [AdministrativeController::class, 'university_officers_titleList'])->name('university_officers_title.list');

        Route::post('/university_officers_title/store', [AdministrativeController::class,  'university_officers_titleStore'])->name('university_officers_title.store');

        Route::post('/university_officers_title/update', [AdministrativeController::class, 'university_officers_titleUpdate'])->name('university_officers_title.update');

        Route::get('/university_officers_title/delete/{id}', [AdministrativeController::class, 'university_officers_titleDelete'])->name('university_officers_title.delete');

        //University Officers
        Route::get('/university_officers/list', [AdministrativeController::class, 'university_officersList'])->name('university_officers.list');
        Route::get('/university_officers/add', [AdministrativeController::class, 'university_officersAdd'])->name('university_officers.add');
        Route::post('/university_officers/store', [AdministrativeController::class, 'university_officersStore'])->name('university_officers.store');
        Route::get('/university_officers/edit/{id}', [AdministrativeController::class, 'university_officersEdit'])->name('university_officers.edit');
        Route::post('/university_officers/update', [AdministrativeController::class, 'university_officersUpdate'])->name('university_officers.update');
        Route::get('/university_officers/delete/{id}', [AdministrativeController::class, 'university_officersDelete'])->name('university_officers.delete');

        //university Authorities title
        Route::get('/authorities/list', [AdministrativeController::class, 'authoritiesList'])->name('authorities.list');
        Route::post('/authorities/store', [AdministrativeController::class, 'authoritiesStore'])->name('authorities.store');
        Route::post('/authorities/update', [AdministrativeController::class, 'authoritiesUpdate'])->name('authorities.update');
        Route::get('/authorities/delete/{id}', [AdministrativeController::class, 'authoritiesDelete'])->name('authorities.delete');

        //university Authorities Position
        Route::get('/position/list', [AdministrativeController::class, 'positionList'])->name('position.list');
        Route::post('/position/store', [AdministrativeController::class, 'positionStore'])->name('position.store');
        Route::post('/position/update', [AdministrativeController::class, 'positionUpdate'])->name('position.update');
        Route::get('/position/delete/{id}', [AdministrativeController::class, 'positionDelete'])->name('position.delete');

        //university Authorities
        Route::get('/authority/list', [AdministrativeController::class, 'authorityList'])->name('authority.list');
        Route::get('/authority/add', [AdministrativeController::class, 'authorityAdd'])->name('authority.add');
        Route::post('/authority/store', [AdministrativeController::class, 'authorityStore'])->name('authority.store');
        Route::get('/authority/edit/{id}', [AdministrativeController::class, 'authorityEdit'])->name('authority.edit');
        Route::post('/authority/update', [AdministrativeController::class, 'authorityUpdate'])->name('authority.update');
        Route::get('/authority/delete/{id}', [AdministrativeController::class, 'authorityDelete'])->name('authority.delete');
        Route::post('/get_position', [AdministrativeController::class, 'getPosition'])->name('authority.getPosition');

        //Committes Title
        Route::get('/committe_title/list', [CommitteeController::class, 'committe_titleList'])->name('committe_title.list');

        Route::post('/committe_title/store', [CommitteeController::class,  'committe_titleStore'])->name('committe_title.store');

        Route::post('/committe_title/update', [CommitteeController::class, 'committe_titleUpdate'])->name('committe_title.update');

        Route::get('/committe_title/delete/{id}', [CommitteeController::class, 'committe_titleDelete'])->name('committe_title.delete');

        //Committes
        Route::get('/committe/list', [CommitteeController::class, 'committeList'])->name('committe.list');
        Route::get('/committe/add', [CommitteeController::class, 'committeAdd'])->name('committe.add');
        Route::post('/committe/store', [CommitteeController::class, 'committeStore'])->name('committe.store');
        Route::get('/committe/edit/{id}', [CommitteeController::class, 'committeEdit'])->name('committe.edit');
        Route::post('/committe/update', [CommitteeController::class, 'committeUpdate'])->name('committe.update');
        Route::get('/committe/delete/{id}', [CommitteeController::class, 'committeDelete'])->name('committe.delete');

        //Act & Status
        Route::get('/act_status/list', [ActStatusController::class, 'list'])->name('actStatus.list');
        Route::get('/act_status/add', [ActStatusController::class, 'add'])->name('actStatus.add');
        Route::post('/act_status/store', [ActStatusController::class, 'store'])->name('actStatus.store');
        Route::get('/act_status/edit/{id}', [ActStatusController::class, 'edit'])->name('actStatus.edit');
        Route::post('/act_status/update', [ActStatusController::class, 'update'])->name('actStatus.update');
        Route::get('/act_status/delete/{id}', [ActStatusController::class, 'delete'])->name('actStatus.delete');

        //Top Bar
        Route::get('/top_bar/list', [TopbarController::class, 'list'])->name('Topbar.list');
        Route::get('/top_bar/add', [TopbarController::class, 'add'])->name('Topbar.add');
        Route::post('/top_bar/store', [TopbarController::class, 'store'])->name('Topbar.store');
        Route::get('/top_bar/edit{id}', [TopbarController::class, 'edit'])->name('Topbar.edit');
        Route::post('/top_bar/update', [TopbarController::class, 'update'])->name('Topbar.update');
        Route::get('/top_bar/delete{id}', [TopbarController::class, 'delete'])->name('Topbar.delete');

        //View-Gallery
        Route::get('galleries/list', [ViewgalleryController::class, 'list'])->name('Viewgalleries.list');
        Route::get('galleries/add', [ViewgalleryController::class, 'add'])->name('Viewgalleries.add');
        Route::post('galleries/store', [ViewgalleryController::class, 'store'])->name('Viewgalleries.store');
        Route::get('galleries/edit{id}', [ViewgalleryController::class, 'edit'])->name('Viewgalleries.edit');
        Route::post('galleries/update', [ViewgalleryController::class, 'update'])->name('Viewgalleries.update');
        Route::get('galleries/delete{id}', [ViewgalleryController::class, 'delete'])->name('Viewgalleries.delete');

        //View-Newspaper
        Route::get('view_news/list', [ViewnewsController::class, 'list'])->name('view_news.list');
        Route::get('view_news/add', [ViewnewsController::class, 'add'])->name('view_news.add');
        Route::post('view_news/store', [ViewnewsController::class, 'store'])->name('view_news.store');
        Route::get('view_news/edit{id}', [ViewnewsController::class, 'edit'])->name('view_news.edit');
        Route::post('view_news/update', [ViewnewsController::class, 'update'])->name('view_news.update');
        Route::get('view_news/delete{id}', [ViewnewsController::class, 'delete'])->name('view_news.delete');

        //Campus
        Route::get('/campus/list', [CampusController::class, 'list'])->name('campus.list');
        Route::get('/campus/add', [CampusController::class, 'add'])->name('campus.add');
        Route::post('/campus/store', [CampusController::class, 'store'])->name('campus.store');
        Route::get('/campus/edit{id}', [CampusController::class, 'edit'])->name('campus.edit');
        Route::post('/campus/update', [CampusController::class, 'update'])->name('campus.update');
        Route::get('/campus/delete{id}', [CampusController::class, 'delete'])->name('campus.delete');

        //Administration
        Route::get('/administration/list', [AdministrationController::class, 'list'])->name('administration.list');
        Route::get('/administration/add', [AdministrationController::class, 'add'])->name('administration.add');
        Route::post('/administration/store', [AdministrationController::class, 'store'])->name('administration.store');
        Route::get('/administration/edit{id}', [AdministrationController::class, 'edit'])->name('administration.edit');
        Route::post('/administration/update', [AdministrationController::class, 'update'])->name('administration.update');
        Route::get('/administration/delete{id}', [AdministrationController::class, 'delete'])->name('administration.delete');

        //STUDENT Section
        Route::get('/student/list', [StudentsectionController::class, 'list'])->name('student.list');
        Route::get('/student/add', [StudentsectionController::class, 'add'])->name('student.add');
        Route::post('/student/store', [StudentsectionController::class, 'store'])->name('student.store');
        Route::get('/student/edit{id}', [StudentsectionController::class, 'edit'])->name('student.edit');
        Route::post('/student/update', [StudentsectionController::class, 'update'])->name('student.update');
        Route::get('/student/delete{id}', [StudentsectionController::class, 'delete'])->name('student.delete');

        //degree certificate
        Route::get('/degree_certificate', [StudentsectionController::class, 'index'])->name('certificate.index');
        Route::get('/degree_add', [StudentsectionController::class, 'certificateAdd'])->name('certificate.add');
       

        Route::post('/certificate_store', [StudentsectionController::class, 'certificateStore'])->name('certificate.store');
        Route::get('/degree_edit/{id}', [StudentsectionController::class, 'certificateEdit'])->name('certificate.edit');
        Route::post('/degree_update', [StudentsectionController::class, 'degreeUpdate'])->name('degree.update');
        Route::get('/certificate_delete/{id}', [StudentsectionController::class, 'certificateDelete'])->name('certificate.delete');
        //urgent mode
        Route::get('/urgent_mode', [StudentsectionController::class, 'urgentmodeIndex'])->name('urgentmodeIndex');
        Route::get('/urgent_mode/add', [StudentsectionController::class, 'urgentmodeAdd'])->name('urgentmodeAdd');
        Route::post('/urgent_mode/store', [StudentsectionController::class, 'urgentmodeStore'])->name('urgentmodeStore');

        //certificate name
         Route::get('/certificate_name', [StudentsectionController::class, 'certificateName'])->name('certificateName');
         Route::get('/certificate_name/add', [StudentsectionController::class, 'certificateNameAdd'])->name('certificateNameAdd');
         Route::post('/certificate_name/store', [StudentsectionController::class, 'certificateNameStore'])->name('certificateNameStore');
         Route::get('/certificate_name/edit/{id}', [StudentsectionController::class, 'certificateNameEdit'])->name('certificateNameEdit');
         Route::post('/certificate_name/update', [StudentsectionController::class, 'certificateNameUpdate'])->name('certificateNameUpdate');
         Route::get('/certificate_name/delete/{id}', [StudentsectionController::class, 'certificateNameDelete'])->name('certificateNameDelete');
        //Session
        Route::get('/session', [StudentsectionController::class, 'session'])->name('session.index');
        Route::post('/session_store', [StudentsectionController::class, 'sessionStore'])->name('session.store');
        Route::post('/session_update', [StudentsectionController::class, 'sessionUpdate'])->name('session.update');
        Route::get('/session_delete/{id}', [StudentsectionController::class, 'sessionDelete'])->name('session.delete');

        //Course Category
        Route::get('/course_category', [CourseController::class, 'Category'])->name('category.index');
        Route::post('/course_category/store', [CourseController::class, 'storeCategory'])->name('category.store');
        Route::post('/course_category/update', [CourseController::class, 'updateCategory'])->name('category.update');
        Route::get('/course_category/delete/{id}', [CourseController::class, 'deleteCategory'])->name('category.delete');
        //Course
        Route::get('/course', [CourseController::class, 'course'])->name('course.index');
        Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
        Route::post('/course/update', [CourseController::class, 'update'])->name('course.update');
        Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
        //Calender
        Route::get('/calender', [AdminCalenderController::class, 'calender'])->name('calender.index');
        Route::get('/calender/add', [AdminCalenderController::class, 'add'])->name('calender.add');
        Route::post('/calender/store', [AdminCalenderController::class, 'store'])->name('calender.store');
        Route::get('/calender/edit/{id}', [AdminCalenderController::class, 'edit'])->name('calender.edit');
        Route::post('/calender/update', [AdminCalenderController::class, 'update'])->name('calender.update');
        Route::get('/calender/delete/{id}', [AdminCalenderController::class, 'delete'])->name('calender.delete');

        //Document
        Route::get('/document', [DocumentController::class, 'document'])->name('document.index');
        Route::post('/document/store', [DocumentController::class, 'store'])->name('document.store');
        Route::post('/document/update', [DocumentController::class, 'update'])->name('document.update');
        Route::get('/document/delete{id}', [DocumentController::class, 'delete'])->name('document.delete');

        //Study Material
        Route::get('study_material/list', [StudymaterialController::class, 'list'])->name('studyMaterial.list');
        Route::get('study_material/add', [StudymaterialController::class, 'add'])->name('studyMaterial.add');
        Route::post('study_material/store', [StudymaterialController::class, 'insert'])->name('studyMaterial.insert');
        Route::get('study_material/edit/{id}', [StudymaterialController::class, 'edit'])->name('studyMaterial.edit');
        Route::post('study_material/update', [StudymaterialController::class, 'update'])->name('studyMaterial.update');
        Route::get('study_material/delete/{id}', [StudymaterialController::class, 'delete'])->name('studyMaterial.delete');

        //Application for Online Certificate
        Route::get('/certificate_view', [WebStudentSectionController::class, 'certificateView'])->name('certificateView');
        Route::get('/certificate-data', [WebStudentSectionController::class, 'getCertificatesData'])
            ->name('getCertificatesData');
        Route::get('/certificate_edit/{id}', [WebStudentSectionController::class, 'certificateEdit'])->name('certificateEdit');
        Route::post('/certificate_update', [WebStudentSectionController::class, 'certificateUpdate'])->name('certificateUpdate');
        Route::get('/application_delete/{id}', [WebStudentSectionController::class, 'applicationDelete'])->name('applicationDelete');
        Route::post('/get_payment', [WebStudentSectionController::class, 'getPayment'])->name('getPayment');
        Route::get('/admin/filter-certificates', [WebStudentSectionController::class, 'filterCertificates'])->name('filterCertificates');

        Route::resource('news', WebNewsController::class);
        Route::resource('gallery', WebGalleryController::class);
        Route::resource('faq', WebFaqController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('page', WebPageController::class);
        Route::resource('call-to-action', CallToActionController::class);
        Route::resource('social-setting', SocialSettingController::class);
        Route::resource('topbar-setting', TopbarSettingController::class);
    });
});
/****************** ADMIN MIDDLEWARE PAGES ROUTES END****************/
