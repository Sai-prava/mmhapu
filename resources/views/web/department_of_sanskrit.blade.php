<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Sanskrit
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_Humanities_and_Languages.php">School of Humanities & Languages</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Sanskrit</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Sanskrit</h2>
                </div>
                <div class="mb-20">
                    <div class="detials text-justify">
                        <h4 class="inner-title">About Department</h4>
                        <p>Sanskrit is acknowledged not merely a language but an inclusive heritage of Indians which functions as a bridge between India's past and present. It has been the key to Indian Intellectual Traditions, Art, Culture, Linguistics, Philosophy, Science, Spirituality etc. Keeping this in view, a full-fledged Department of Sanskrit was established in 2019 under the School of Humanities and Languages in response to a felt need for Sanskrit Studies at Mahatma Gandhi Central University. It offers M.A., M.Phil, and Ph.D. Programmes. There are six faculty members in the Department having varied expertise in the field of Indology. The thrust areas are Veda, Sāhitya, Nyāya-Vaiśesika, Navya-Nyāya Language, Vedānta, Vyākaraṇa, Saṅkhya-Yoga, Linguistics, and Manuscriptology. The sole aim of the Department is to impart high-quality teaching and research work to make Sanskrit academic culture as Indian way of teaching and learning perspective so that Indian Intellectual Traditions and its contemporary global need and significance may be flourished. The Department is dedicated to creating an academic platform for developing innovative Ideas in Human science for Sustainable Human Development by re-claiming pasts for tackling contemporary issues and re-visioning future through uninterrupted cosmopolitan Sanskrit Knowledge Systems. The vision of the Department is to make Sanskrit as a link of both ancient and modern and synthesize all the great thoughts of both east and west with following motto:</p>
                        <p>पुराणमित्येव न साधु सर्वं न चापि काव्यं नवमित्यवद्यम् ।<br/>
                            सन्तः परीक्ष्यान्यतरद्भजन्ते मूढः परप्रत्ययनेयबुद्धिः।।   - मालविकाग्निमित्रम् - 1.2
                        </p>
                        <p>Everything is not great just because it is ancient. Nothing is bad just because it is modern.</p>
                        <p>Intelligent people take things after examining it properly. An ignorant man simply believes what others say. </p>
                    </div>
                </div>               
            </div>
           <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_Humanities_and_Languages.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_sanskrit_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_sanskrit_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_sanskrit_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_sanskrit_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="9" /><button type="submit" style="display: none;"></button></form>
<script>
    function viewFun() {
        $('#frm').submit();
    }
</script>        </div>
    </div>
</section>

 <?php $this->load->view("frontend/footer.php");?>


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Department of Sanskrit - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>