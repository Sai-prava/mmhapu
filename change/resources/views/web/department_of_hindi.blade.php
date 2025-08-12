<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Hindi
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_Humanities_and_Languages.php">School of Humanities & Languages</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Hindi</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Hindi</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">हिंदी विभाग महात्मा गांधी केंद्रीय विश्वविद्यालय, मोतिहारी, बिहार की स्थापना के साथ ही सन 2016 में अस्तित्व में आ गया था । प्रारम्भ में स्नातक हिंदी प्रतिष्ठा, तत्पश्चात परास्नातक, एम.फिल. तथा पीएच.डी. पाठ्यक्रम विभाग में सम्मिलित होते चले गए । विभाग में दो आचार्य, एक सह आचार्य, तथा चार सहायक आचार्य हैं, जो साहित्य की विविध विधाओं और विमर्शों के विशेषज्ञ हैं । लोक साहित्य, दलित विमर्श, स्त्री विमर्श, आदिवासी विमर्श के साथ साथ कहानी, कविता, निबंध, उपन्यास आदि विधाओं में शिक्षक निष्णात हैं । विभाग गांधी भवन परिसर स्थित राष्ट्रकवि रामधारी सिंह भवन में क्रियाशील है । विभाग ने राष्ट्रीय एवं अंतर्राष्ट्रीय अनेक शोध संगोष्ठियों का आयोजन कर अपनी महती उपस्थिति दर्ज की है । समय समय पर कवि गोष्ठी, चर्चा-परिचर्चा और विशेष व्याख्यान का आयोजन कर विद्यार्थियों का ज्ञान वर्द्धन किया जाता है। क्षेत्र-विशेष के ख्याति प्राप्त विद्वानों को बुला कर उनके व्याख्यान करवाए जाते हैं। विभाग में विद्यार्थियों के अंदर नेतृत्व का गुण विकसित करने के लिए ‘हिंदी साहित्य सभा’ का भी ग़ठन किया गया है। यह सभा हिंदी विभाग के सभी आयोजनों को बहुत ही शिद्दत से कार्यरूप देती है ।</p>
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
                <li><a href="department_of_hindi_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_hindi_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_hindi_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_hindi_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="8" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Hindi - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>