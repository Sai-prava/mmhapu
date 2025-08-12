<?php $this->load->view("frontend/header.php");?>

<style>
    nav > .nav.nav-tabs{
        border: none;
        color:#0b416f;
        border-radius:0;
    }
    nav > div a.nav-item.nav-link,
    nav > div a.nav-item.nav-link.active
    {
        border: none;
        padding: 18px 25px;
        color:#fff;
        border-radius:0;
    }
    nav > div a.nav-item.nav-link.active:after
    {
        content: "";
        position: relative;
        bottom: -58px;
        left: -35%;
        border: 15px solid transparent;
        border-top-color: #0B416F;
    }
    .tab-content{
        background: #fdfdfd;
        line-height: 25px;
        border: 1px solid #ddd;
        border-top:5px solid #E16734;
        border-bottom:5px solid #E16734;
        padding:30px 40px !important;
    }
    nav > div a.nav-item.nav-link:hover,
    nav > div a.nav-item.nav-link:focus
    {
        border: none;
        background: #0B416F;
        color:#fff;
        border-radius:0;
        transition:background 0.20s linear;
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Recruitment
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="recruitments.php" class="orange-text"> Recruitment </a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Recruitment</span></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h6 class="text-rigth mb-10"><a href="<?php echo base_url(); ?>frontend/recruitments_archives">Archives</a></h6>
                        <nav>
                            <div class="nav nav-pills flex-column flex-sm-row nav-tabs" id="nav-tab" role="tablist">
                                <button class="flex-sm-fill text-sm-cente nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recruitment for Administration</button>
                                <button class="flex-sm-fill text-sm-cente nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Recruitment for Teaching Positions</button>
                                <button class="flex-sm-fill text-sm-cente nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Recruitment for Non-Teaching Positions</button>
                                <button class="flex-sm-fill text-sm-cente nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Recruitment for Research Project</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <ol style="list-style: decimal">
                                                                                <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202404121743171a13c134d6.pdf" >
                                                    MGCU Corrigendum No. 1 w.r.t. Advt. No. MGCU/2024/R/NT/01 dated 13.03.2024 for the post of First Finance Officer.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2024031313241789dcae0072.pdf" >
                                                    Advt. No.: MGCU/2024/R/NT/01 dated 13th March 2024 - Advertisement for Recruitment to the post of First Finance Officer (Last Date: 12th April 2024)                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240219200158957e9990ae.pdf" >
                                                    Public Notice dated 16th February 2024 issued by National Testing Agency, Delhi regarding Syllabus and Tentative Dates of Stage II Written Examination (Descriptive Type) to be conducted by NTA for various Non-Teaching Positions [Group - 'B' & 'C'].                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202401041903560aca2535f8.pdf" >
                                                    Public Notice dated 2nd January 2024 issued by National Testing Agency (NTA) reg. Stage I (Objective Type) Computer Based Test (CBT) to be conducted by NTA on 25th January 2024, for recruitment to various Non-Teaching Posts (Group - 'B' and 'C') in six different Central Universities.                                                 </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2023122123430279a3f1d6ef.pdf" >
                                                    Extension of Last Date (upto 26th December 2023 by 23:50 hrs) for submission of Online Applications for various Non-Teaching Positions (Group - ‘A’, ‘B’ and ‘C’) through National Testing Agency (NTA) [Ref.: Advertisement No. MGCU/R/NT/2023/02 dated 1st December 2023]                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2023120310341928fc62d7dc.pdf" >
                                                    Information Bulletin: Online Applications are invited for various Non-Teaching Positions (Group - ‘A’, ‘B’ and ‘C’) through National Testing Agency (NTA) [Ref.: Advertisement No. MGCU/R/NT/2023/02 dated 1st December 2023]                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231202202437545c7f7afa.pdf" >
                                                    Corrigendum No. 1 dated 2nd December 2023 reg. Two posts of General Medical Officer (one Male and One Female) stands withdrawn [Ref.: Advt. No.: MGCU/2023/R/NT/01 dated 1st December 2023]                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202312022023080492682c8b.pdf" >
                                                    ADVERTISEMENT FOR RECRUITMENT TO STATUTORY, NON-TEACHING AND OTHER ACADEMIC POSTS.                                                 </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231125132328a8f89046f7.pdf" >
                                                    Corrigendum reg. Change of Date of Walk-in-Interview for the post of Hindi Officer to be filled up on Contract basis.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202310312025330090a43e6c.PDF" >
                                                    Recruitment of Private Secretary on Contract basis [Employment Notice No. 002/2023 dated 31.10.2023]                                                 </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202310312024287a998f8a4c.PDF" >
                                                    Walk-in-Interview for the post of Hindi Officer to be filled up on Contract basis [Employment Notice No. 001/2023 dated 31.10.2023]                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                            </ol>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <ol style="list-style: decimal">
                                                                                <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20220521130053ace9896835.pdf" >
                                                    Advertisement reg. Appointment of Vice-Chancellor of MGCU, Motihari, Bihar" Advertisement (In Hindi) Advertisement (In English) Application Form                                                </a>
                                                                                                        <a class="orange-text" href="pdf/202205211300535143a101c7.pdf" >
                                                            Advertisement (In Hindi)                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/20220521130053e7a246ff90.pdf" >
                                                            Advertisement (In English)                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/202205211312572fbaf0cde7.pdf" >
                                                             Application Form                                                        </a>
                                                                                                    </li>
                                                                            </ol>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                <ol style="list-style: decimal">
                                                                                <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202312021859569de25917f7.pdf" >
                                                    Corrigendum No. 1 dated 2nd December 2023 reg. Extension of Last Date for Submission of Application for various Teaching Positions through Online Mode on CU-Chayan Portal                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2023112420540343f6c03fc9.pdf" >
                                                    CU Chayan User Manual for the Teaching Applications                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231112165312762dffc8a6.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the Pt. MMM School of Commerce & Management Sciences.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231112165041924f285a4d.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Social Sciences.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231112164912006c797dbe.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Humanities & Languages.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202311121647037b32ad3c4f.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Education.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231112164441a372961744.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Computational Sciences, Information & Communication Technology.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202311121642291f3936a29a.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Physical Sciences.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20231112164004be218ab26f.pdf" >
                                                    Advertisement for recruitment to teaching position(s) under the School of Life Sciences.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202305161737168c134c52f8.pdf" >
                                                    Notice for appointment of Guest Faculty                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20221215173210ba74596d67.pdf" >
                                                    Notice regarding withdrawal of vacancy of  Guest faculty in the department of media studies                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202212131800362476fbb0f4.pdf" >
                                                    Walk- In- Interview for Guest Faculty in various Teaching Departments (Library and Info. Sciences, Computer Science & IT, and Media Studies)                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                            </ol>
                            </div>
                            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                <ol style="list-style: decimal">
                                                                    <!-- <li><a href="pdf/image0.jpeg" >Advertisement for the Recruitment of JRF(one position) for DST-SERB funded project <img src="images/new.gif"/></a></li>
                                                                    <li><a href="pdf/JRF_Ad_revised.pdf" >Advertisement for Junior Research Fellow (JRF)  for a SERB-DST sponsored major research project</a></li> -->
                                                                                <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240507153945a08a828de6.pdf" >
                                                    Corrigendum to Advertisement Date on 17th April 2024 for the post of Project Fellow/JRF                                                 </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202405021217146621371e55.pdf" >
                                                    Result of interview for the appointment of CRS Project Fellow (Junior)-I                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240417233902fd51e1620a.pdf" >
                                                    Advertisement for the post of Project Fellow under the IUAC funded project (UFR-75325).                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240408151931002fc13d4d.pdf" >
                                                    Result of Interview for the position of Project Technical Support-III.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2024040221275557c3c45476.pdf" >
                                                    Advertisement for the Recruitment of CRS Project Fellow (Junior)-I under UGC-DAE CSR Project                                                </a>
                                                                                                        <a class="orange-text" href="pdf/20240402212755e95a593b3f.pdf" >
                                                            Application proforma for CRS Project Fellow (Junior)-I                                                         </a>
                                                                                                            <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240328193808a6f226def7.pdf" >
                                                    List of candidates called for the interview for the post of Project Technical Support-III (temporary position).                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240303144613a1e356884e.pdf" >
                                                    Advertisement for the Post of Project Technical Support-III for an ICMR sponsored project at Department of Chemistry; Last Date for submission of application is 23.03.2024.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202403022010359442b09677.pdf" >
                                                    Advertisement for Project Staff under ICSSR funded Project Staff under the Department of Political Science.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20240108161952c0fba8535a.pdf" >
                                                    Advertisement for Research Assistant under the project sponsored by ICPR.                                                 </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20220727213920cbdeb06b32.pdf" >
                                                    Result of the interview for the project assistants posts (2) for SERB-DST research project in Department of Chemistry.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2022071811464006001256cf.pdf" >
                                                    Corrigendum regarding the Advertisement posted for the post of Project assistants (02) under DST-SERB Project in the Department of Chemistry.                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/20220714182126ebbca9968c.pdf" >
                                                    Provisional List of Selected Candidates and Waitlisted Candidates of Project Staff for ICSSR funded Minor Project 2022                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/202207081343036514003391.pdf" >
                                                    Advertisement for the Recruitment of Project Assistants in DST-SERB Sponsored Major Research Project (Contact Charged Surfaces for Driving Useful Surface Chemical Reactions), Department of Chemistry, MGCUB                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li type="1" class="text-justify mb-10">
                                                <a href="pdf/2022052310403334deb73c5e.pdf" >
                                                    Advertisement for Project staff in ICSSR Minor Research Project,  Department Of Management Sciences, MGCUB                                                </a>
                                                                                            </li>
                                                                            </ol>
                            </div>
                        </div>
                        <!--                        <nav>
                                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="true">Recruitment for Administration</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Recruitment for Teaching Positions</a>
                                                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recruitment for Non-Teaching Positions</a>
                                                        <a class="nav-item nav-link" id="nav-project-tab" data-toggle="tab" href="#nav-project" role="tab" aria-controls="nav-project" aria-selected="false">Recruitment for  Research Project</a>
                                                    </div>
                                                </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade  " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                            </div>


                            <div class="tab-pane fade show active" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">

                            </div>



                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            </div>
                            <div class="tab-pane fade" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">

                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


 <?php $this->load->view("frontend/footer.php");?>
