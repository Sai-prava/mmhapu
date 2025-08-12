@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Commerce
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a>Pandit Madan Mohan Malaviya School of Commerce & Management Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Commerce</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Commerce</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of Commerce was established in the year 2016 to promote the research and higher education environment. The main aim of the department is to fulfil the gap of higher education and specially research in the region. In the beginning the Department introduced an undergraduate program B.Com.(H) in the year 2016 with intake of 30 students. Very early in the next step the Department introduced three new programs one post graduate program M.Com. and to create and promote research environment the Department started Master of Philosophy (MPhil) and Doctor of Philosophy (PhD) program in the year 2019 under the valuable direction of our dynamic Hon’ble Vice chancellor Prof. Sanjeev Kumar Sharma. The Department is nurturing the knowledge and skills required for shaping the students for 21stcentury requirements. The Department also facilitates co-curriculum and cultural activities to enhance the ability and competency in our brand ambassadors i.e. our students. </p>
                        <p class="text-justify">Presently, Department of Commerce is based at Pt. Deen Dayal Upadhyay Parisar, Chandmari, Motihari. The department has well equipped class-rooms and a central library in Jila School, Motihari. It is also noteworthy that the Department has minimum resources as the university is in initial stage however the department has an optimum utilization of resources. The department is imparting the best and updated content to the students. The Department looks forward to being recognised as one of the best centres of commerce and business education in India and abroad under able guidance of  Prof. Shirish Mishra, who is currently Head of the Department.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_commerce_management_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_commerce_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_commerce_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_commerce_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research / Publications</a></li>
                <li><a href="department_of_commerce_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="1" /><button type="submit" style="display: none;"></button></form>
<script>
    function viewFun() {
        $('#frm').submit();
    }
</script>        </div>
    </div>
</section>

 @include('web.layouts.footer')


 <script type="text/javascript">
    $(document).ready(function () {
        document.title = "Department of Commerce - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
