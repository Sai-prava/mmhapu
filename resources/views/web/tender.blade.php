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
        left: -8%;
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
                    Tender
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="tender.php" class="orange-text"> Tender </a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Tender</span> <a href="https://mgcub.euniwizarde.com/" >(E-tender)</a></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <nav>
                            <div class="nav nav-pills flex-column flex-sm-row nav-tabs" id="nav-tab" role="tablist">
                                <button class="flex-sm-fill text-sm-cente nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tenders</button>
                                <button class="flex-sm-fill text-sm-cente nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Archives</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <ul>
                                    <li class="mb-10">
                                        <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                        <a href="https://mgcub.euniwizarde.com/" >Click here for e-Tender</a>
                                        <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                    </li>
                                                                                <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2024051521571336c3344c7a.pdf" >
                                                    Re-tender Document regarding Hiring of Vehicles on Monthly/Daily basis                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202403131618072c4a173889.pdf" >
                                                    Tender No. MGCU/Tender/01/2024 dated 13th March 2024 reg. Hiring of Vehicle (Last Date: 3rd April 2024 by 05:00 PM)                                                </a>
                                                                                                    <img src="<?php echo base_url(); ?>images/new.gif" alt="new image"/>
                                                                                            </li>
                                                                            </ul>  
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <p class="text-justify">With reference to information published in various newspapers on 7th December 2018 regarding Tender/EOI, it is hereby informed to all concerned persons/firms that the Tender Document(s) shall be uploaded on the University Website shortly (Last date of receipt of tenders will be extended accordingly). For more information, all concerned are requested to visit the University Website regularly.</p>
                                <ul>
                                                                                <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20231003222142819c3c5f36.pdf">
                                                    Tender for Printing and Installation of Flex/Banner etc. for 1st convocation of the University.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202310022109216ce166336e.pdf">
                                                    Tender for Flower Decoration on the occasion of 1st  convocation of the University.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20231002210811506c0174d3.pdf">
                                                    Tender for Printing and Supply of Invitation Card, Souvenir & University’s Report for 1st convocation of the University.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2023100221021476b333b469.pdf">
                                                    Tender for Supply of Tent House Services and Lighting Services for 1st convocation of the University.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202310022059468c1f6d50cf.pdf">
                                                    Tender for Catering Services for 1st convocation of the University.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230921180739c6e922ee12.pdf">
                                                    Notification for Opening of Tender documents for empanelment of vendors for supply of print books.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230810220605d8826577d3.pdf">
                                                    MGCU Corrigendum No. 3 dated 10.08.2023 reg. Extension of Last Date for receipt of Tender w.r.t. Hiring of Building.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202307281931526065672231.pdf">
                                                    Corrigendum No. 2 dated 28.07.2023 reg. extension of  last date for submission of tender [Tender No. MGCU/Tender/02/2023 dated 13.06.2023] reg. Hiring of buildings [Last Date: 10th August 2023 by 05:00 PM].                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230728192959ace15eb080.pdf">
                                                    Corrigendum No. 4 dated 28.07.2023 reg. extension of  last date for submission of tender [Tender No. MGCU/Tender/01/2023 dated 18.05.2023] reg. Hiring of vehicles [Last Date: 16th August 2023 by 05:00 PM].                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230728131103e9e2b68b43.pdf">
                                                    Expression of Interest (EOI) dated 28.07.2023 reg. Empanelment of Vendors for Supply of Books to Central Library of MGCU [Last Date: 19th August 2023 by 05:00 PM]                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230714184704b5a57a9f04.pdf">
                                                    Corrigendum reg. MGCU Tender No. MGCU/Tender/01/2023 dated 18.05.2023 w.r.t. Hiring of Vehicles.(Dated 13.07.2023)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230714202818c2f8a15998.pdf">
                                                    Corrigendum reg. Extension of last date for receipt of Tender document (Tender No. - MGCU/Tender/02/2023 dated 13.06.2023) w.r.t. Hiring of Buildings.(Dated 13.07.2023)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202306131348248f73e700f0.pdf">
                                                     Tender Document for Hiring of Buildings for MGCU to run its Hostel, Academic and Administrative Activities.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2023060814282243e75092b7.pdf">
                                                    Corrigendum dated 7th June 2023 regarding Extension of last date for receipt of tender document w.r.t Hiring of Vehicles, upto 22nd June 2023 [upto 5:00 PM]                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20230518213913ad76dd357d.pdf">
                                                    MGCU Tender No. MGCU/Tender/01/2023 dated 18.05.2023 w.r.t. Hiring of Vehicles                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20210504083141496a10c35f.pdf">
                                                     Extension of Last Date for submission of Tender w.r.t. Empanelment of Vendors for supply of Books (Corrigendum 1)                                                </a>
                                                                                                        <a class="orange-text" href="pdf/2021052516105301205b8deb.pdf">
                                                            Corrigendum 2                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2021041002443822d641b7e9.pdf">
                                                    Corringedum reg. MGCU Tender No. 12/03/2021/MGCUB dated 23rd March 2021.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202104020719191b539bd427.pdf">
                                                    Corrigendum No. 2 dated 01.04.2021 - Expression of Interest reg. Registration/Empanelment of Agencies/Firms/Companies/Contractors for works of Repair & Maintenance                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20210331123843cca513731c.pdf">
                                                    Corrigendum dated 31.03.2021- Expression of Interest reg. Registration/Impanelment of Agencies/Firms/Companies/Contractors for works of Repair & Maintenance                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20210331101349a88d63ff74.pdf">
                                                    Engagement of Chartered Accountant Firm                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20210323195446ab02b6ff1e.pdf">
                                                    Tender Document for Hiring of Services for DEPLOYMENT OF MANPOWER ON OUTSOURCING BASIS                                                </a>
                                                                                                        <a class="orange-text" href="pdf/202105251606518eee942640.pdf">
                                                            Corrigendum                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/20210621143517c2f2554d29.pdf">
                                                            Corrigendum                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202103240708012cf4fcc364.pdf">
                                                    Interest for Registration of Vendors for the supply of books in financial year 2021-2022                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2021031112132353190a447d.PDF">
                                                    Tender Notice for Registration/Empanelment of Vendors/Suppliers for              Toner, Printer Cartridge, Office Stationeries & Others, Sanitation Items, Electronic Items, Computer Peripherals & Others, Audio Visual Equipment, Printing Materials, Office Furniture, Electrical Installation and Accessories, Laboratory Equipment, Laboratory Chemicals and Glassware, Sports & Gym  Equipment, Event Management.                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202103111214486f4886ee29.pdf">
                                                    Registration/Empanelment of  Agencies / Firms/ Companies/ Contractors  For             Works of Repair & Maintenance                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2020122312282117521ff274.pdf">
                                                    TENDER DOCUMENT FOR HIRING OF BUILDING FOR MAHATMA GANDHI CENTRAL UNIVERSITY, BIHAR TO RUN ITS ACADEMIC, ADMINISTRATIVE ACTIVITIES AND RESIDENCES OF OFFICIALS                                                 </a>
                                                                                                        <a class="orange-text" href="pdf/202101152134176d485f28ed.pdf">
                                                            Corrigendum                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20201027094130cf9b64f296.pdf">
                                                     Tender Document For Hiring of Building For Mahatma Gandhi Central University, Bihar To Run Its Academic, Administrative activities and  Residences of officials - Last Date:  23rd November 2020 (Monday) (3:00 PM)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2020100507574993592e0810.pdf">
                                                    MGCU Corrigendum dated 05.10.2020 reg. Extension of Last Date for Submission of Tender Document for Hiring of Building(s)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200921062658124527cfa4.pdf">
                                                    MGCU Corrigendum dated 21.09.2020 reg. Extension of Last Date for Submission of Tender Document for Hiring of Building(s)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2020082905425815aaa3b3b2.pdf">
                                                    Tender Document For Hiring of Building For Mahatma Gandhi Central University, Bihar To Run Its Academic, Administrative Activities And Residences Of Statutory Officers -  Last Date: 21st September 2020 (Monday) (3:00 PM)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200321044906589f99d9d3.pdf">
                                                    Corrigendum last date for  submission of Hiring of Vehicles  tender is hereby extended up to 20th April 2020 (Monday)  (17:00 Hrs).                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202003071641199f34dc897a.pdf">
                                                    Notice Inviting Tender dated 6th March 2020 regarding Hiring of Vehicles                                                </a>
                                                                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/20200321044906589f99d9d3.pdf">
                                                            Corrigendum last date for submission of Hiring of Vehicles tender is hereby extended up to 20th April 2020 (Monday) (17:00 Hrs).                                                         </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200218170213f257b1b77c.pdf">
                                                    Inviting Quotations for various items in connection with ”Annual Sports Meet 2020”                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202002131305047a52940482.pdf">
                                                    Revised document inviting EOI for Preparation of Detailed Project Report (DPR) [Last Date: (24/02/2020) by 5:00 PM]                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/202002031209228c281f48be.pdf">
                                                    Corrigendum for Finalisation of PREPRATION OF DETAILED PROJECT REPORT [17th February 2020 (Monday) (17:00 Hrs)]                                                 </a>
                                                                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/202002131305047a52940482.pdf">
                                                             Revised document inviting EOI for Preparation of Detailed Project Report (DPR) [Last Date: (24/02/2020) by 5:00 PM]                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200203064537051ae21c80.pdf">
                                                    Tender Document  for  Finalisation of  PREPRATION OF DETAILED PROJECT REPORT [Last Date: (06/02/2020) by 5:00 PM]                                                </a>
                                                                                                        <a class="orange-text" href="pdf/2020020312082278cf8e78b0.pdf">
                                                            Corrigendum  for Finalisation of PREPRATION OF DETAILED PROJECT REPORT [17th February 2020 (Monday) (17:00 Hrs)]                                                        </a>
                                                        ||                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/202002131305047a52940482.pdf">
                                                             Revised document inviting EOI for Preparation of Detailed Project Report (DPR) [Last Date: (24/02/2020) by 5:00 PM]                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200203064435c1963c578a.pdf">
                                                    CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for                                                  </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200203064619ee3c433cf1.pdf">
                                                    Expression of Interest are invited for Empanelment of Vendors for registration of supply of Books in Central Library, Mahatma Gandhi Central University                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2020020306475790705b58a9.pdf">
                                                     CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for                                                 </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20200203064938eb4741ca9c.pdf">
                                                    CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for                                                 </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20191220182944742a79e83a.pdf">
                                                    Corrigendum- E-tender for computer and printer  submission of tender is extended upto 6th January 2020 (Monday) (17:00 Hrs).                                                 </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20191214135131e02ebb13f1.pdf">
                                                    CORRIGENDUM - E-Tender for                                                 </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2019111511122961dbef9fa0.pdf">
                                                    Tender Document  for Purchase of Desktop Computer & Printer [Last Date: 04-12-2019 (Wednesday) Up to 05.00 PM]                                                </a>
                                                                                                        <a class="orange-text" href="pdf/20191203102122624473f200.pdf">
                                                            CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for &quot;Purchase of Desktop Computer &amp; Printer&quot;.  [Last Date-15th December 2019 (Sunday) (17:00 Hrs).]                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/20191214134854cd4e9bfca5.pdf">
                                                            CORRIGENDUM - E-Tender  for &quot;Purchase of Desktop Computer &amp; Printer&quot;- Pre-bid                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/201912180614026620df34d0.pdf">
                                                            CORRIGENDUM -Letter of invitation for Pre‐Bid queries till 19th Dec. 2019 and Meeting on 20th December 2019                                                        </a>
                                                        ||                                                        <a class="orange-text" href="pdf/20191220182637a21871bd8b.pdf">
                                                            CORRIGENDUM - after  Pre‐Bid queries.                                                        </a>
                                                        ||                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/2019122610045681a580ad37.pdf">
                                                            CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for &quot;Purchase of Desktop Computer &amp; Printer&quot;. [Last Date- 6th January 2020 (Monday)(17:00 Hrs)]                                                         </a>
                                                        ||                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/20200106103246cce8f9ec2d.pdf">
                                                            CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for &quot;Purchase of Desktop Computer &amp; Printer&quot;. [Last Date- 15th January 2020 (Wednesday) (17:00 Hrs).]                                                        </a>
                                                        ||                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/2020011509134325c7483d8e.pdf">
                                                             CORRIGENDUM - E-Tender No. 04/2019/MGCUB/dated 14th Nov 2019 for &quot;Purchase of Desktop Computer &amp; Printer&quot;. [Last Date- 27th January 2020 (Monday) (17:00 Hrs)]                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/201911151108333985360c7c.pdf">
                                                    Tender document  for Finalisation of  Project management consultancy (PMC) services for prepration of detailed project report  [Last Date: (05/12/2019) by 5:00 PM]                                                </a>
                                                                                                        <a class="orange-text" href="pdf/201912031016015ce2fe2830.pdf">
                                                            CORRIGENDUM - E-Tender No.05/2019/MGCUB for Preparation of DPR  [Last date: 15th December 2019 (Sunday) (17:00 Hrs)]                                                        </a>
                                                        ||                                                        <a class="orange-text" href="http://www.mgcub.ac.in/pdf/202002131305047a52940482.pdf">
                                                             Revised document inviting EOI for Preparation of Detailed Project Report (DPR) [Last Date: (24/02/2020) by 5:00 PM]                                                        </a>
                                                                                                    </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20190612122532680548b916.pdf">
                                                    Notice Inviting Tender dated 31.05.2019 for supply of Software                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/201904302144376b5d6a82fa.pdf">
                                                    TENDER DOCUMENT FOR HIRING OF BUILDING FOR MAHATMA GANDHI CENTRAL UNIVERSITY, BIHAR TO RUN ITS ACADEMIC AND ADMINISTRATIVE ACTIVITIES                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20181227041811d502c82718.pdf">
                                                    Expression of Interest for Empanelment of Publishers/Vendors etc. for supply of Printed Books (Last Date: 31st December 2018 by 3:00 PM)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/2018110420160565b171f6eb.PDF">
                                                    Tender Notice for "Hiring Service of Agency for Deployment of Manpower on Outsourcing Basis" (Last Date: 17th December 2018)                                                </a>
                                                                                            </li>
                                                                                        <li class="mb-10">
                                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                <a href="pdf/20181104201807ba9823492c.pdf">
                                                    Tender Notice for "Procurement of Softwares" (Last Date: 17th December 2018)                                                </a>
                                                                                            </li>
                                            
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Tender for Engagement of Chartered Accountant Firm - MGCUB - 27.03.2018.pdf" >Tender for Engagement of Chartered Accountant Firm</a> </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Tender - Furniture on 01-06-2017.pdf" > Notice inviting Tender for Furniture, Last Date:27-06-2017 (03:00 PM) </a> </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Re-extension of tender submission date reg. Printing - MGCUB - 23.05.2017.pdf" ><font color="black">Tender for Printing work : Corrigendum & Extension of Submission Date, Revised Last Date: 30th May 2017 till 3:00 PM</a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>  
                                        <a href="pdf/short_tender_ca new23052017.pdf" ><font color="black">Invitation of proposals from Chartered Accountant Firms, Last Date: 30.05.2017, 5 PM
                                        </a></li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Corg. & Extn. Printing 17.05.2017.pdf" ><font color="black">Tender for Printing work : Corrigendum & Extension of Submission Date , Revised Last Date: 23rd May, 2017 till 3.00 P.M
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Tender Document for Hiring of Building for MGCU Bihar.pdf" ><font color="black">TENDER DOCUMENT FOR HIRING OF BUILDING FOR MAHATMA GANDHI CENTRAL UNIVERSITY, BIHAR
                                            TO RUN ITS ACADEMIC ACTIVITIES, Last Date:29th May, 2017 (3:00 PM)
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/printing-documents.pdf" ><font color="black">Corrigendum & Extension of Tender Submission Date, Last Date: 11 May, 2017, 3 pm
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Extn-tndr-29-4-17.pdf" ><font color="black">Extension of Last Date of Submission of Tender Document to 6th May 2017 till 3.00 PM
                                            (Ref.: Tender for Printing of University Prospectus, Annual Report, Journals, Magazines & Brochures)
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/vehicle_hiring_Document.pdf" ><font color="black">Notice inviting tenders for Hiring Vehicles, Last Date: 10.05.2017
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Tender Notice_6thApril_printing.pdf" ><font color="black">Tender for printing of university prospectus and other items. Last date: 26th  April,2017 at 4.30 P.M.
                                        </a>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Inviting Quotations - MGCUB - 04.04.2017.pdf" ><font color="black">Inviting Quotations for Celebrations of Centenary of Champaran Satyagraha in Motihari organised by MGCUB
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 

                                        <a href="pdf/EoI17.03.2017.pdf" > Re-advertisement of the EoI for publication work, Last date: 24th March, 2017.
                                        </a>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 

                                        <a href="pdf/EoI03.03.2017.pdf" >Expression of Interest (EoI) for Publication of University Books and Journals. Last Date: 15th March, 2017. 4 PM
                                        </a>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Tender Tuck Shop Extension.pdf" >EXTENSION OF  SUBMISSION DATE REGARDING TENDER FOR TUCK SHOP FOR STATIONERY ITEMS  upto 2nd March, 2017, 3.30 PM
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Tuck_Tender.pdf" >TENDER DOCUMENT FOR RUNNING OF TUCK SHOP FOR STATIONERY ITEMS WITH FACILITIES OF PRINTING AND BINDING & PHOTOSTAT. Last date: 09.01.2017, 3 p.m.
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/inv.pdf" >INVITATION OF RATE OF INTEREST FOR THE INVESTMENT OF SURPLUS FUNDS FROM PUBLIC AND THREE PRIVATE SECTOR BANKS (ICICI Bank, HDFC Bank & Axis Bank). Last date: 29.12.2016, 4 p.m.
                                        </a></li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Corrigendum - Extension of Last Date of Tender for Running Canteen - MGCUB - 20.12.2016.pdf" >Corrigendum dated 20.12.2016 reg. Extension of Last Date for submission of Tender Document for Running of Canteen at MGCU, Bihar
                                        </a>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Canteen Tender Document - MGCU - 03.12.2016.pdf" >Notice Inviting Quotations for Running of Canteen at MGCUB (Ref.: MGCU/Canteen/2016-17 dated 3rd December, 2016) (Last Date: 20th December, 2016)
                                        </a>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Tender - Furniture_MGCUB_01.12.2016 .pdf" >Notice Inviting Tender for Furniture and Miscellaneous Items (Ref.: MGCU/S&P/Admin/Tender/2016-17 dated 01st  December, 2016) (Last Date: 20th December, 2016)
                                        </a>
                                    </li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/vehicle_hiring_tender.pdf" >Sealed Quotations are invited from reputed transporters for hiring of vehicles Innova/Indigo/Xylo/Tempo Traveler/Bus/Lorry etc. on Monthly/Daily/ Hourly basis for meeting the official needs of the university.
                                        </a>
                                    </li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Inviting Quotation for the Inaugural Function.pdf" >Inviting Quotation for the Inaugural Function of the MGCU Bihar - <span class="orange-text">Last Date: 1st October, 2016</span>
                                        </a></li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Tender for Empanelment of Books.pdf" >EOI for empanelment of vendor for supply of books to Central Library (EOI REF. NO.: CUSB/LIB/EOI/01/2016-17 DATED 04.07.2016): <span class="orange-text">Last Date: 27.07.2016 (upto 5:00 PM)</span>
                                        </a></li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Tender Document for Hiring of Building for MGCU Bihar_04.07.2016.pdf" >Tender for Hiring of Building for MGCU Bihar to run its Academic Activities (Ref: Tender No. 003/2016/MGCUB/NIT dated 5th July, 2016): <span class="orange-text">Last Date: 20.07.2016 (upto 3:00 PM) </span>
                                        </a></li>


                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Tender-28.06.2016-for-Furniture.pdf" >Tender dated 28.06.2016 for Furniture (Student Chair with Desklet (Tender No: CUSB/S&P/Admin/Tender/03/2016-17): <span class="orange-text">Last Date: 13.07.2016 (upto 5:00 PM)</span>
                                        </a></li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> <a href="pdf/Corrigendum-reg-Extension-of-Last Date_10.05.2016.pdf" >Corrigendum dated 10.05.2016 reg. Extension of Last Date for submission of Tender for Hiring of Building for MGCU Bihar to run its Academic and Administrative Activities.
                                        </a></li>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/Extension Notice and Amendment_Tender_01_Security_Manpower.pdf" >Tender No. CUSB/S&P/Admin./Tender /01/2016-17 Dated 04/04/2016 for DEPLOYMENT OF PRIVATE SECURITY & OTHER MANPOWER.</a>|| <span class="orange-text">Last Date:19-05-2016 (03:00 PM)</span>

                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/tender-building.pdf" >Tender No. 002/2016 dated 27.04.2016 for Hiring of Building for MGCU Bihar to run its Academic and Administrative Activities.
                                        </a>|| <span class="orange-text">Last Date:03-05-2016  (03:00 PM) </span>
                                    </li>
                                    <li class="mb-10"><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i> 
                                        <a href="pdf/tender-security.pdf" >Tender Notice for Inviting EOI for Deployment of Security Personnel & others. </a>
                                        <span class="orange-text">|| Last Date:02-05-2016 </span>
                                        <!--<a href="pdf/advt-03-16.pdf" >01. Employment Notice No. 001/2016 dated 22.03.2016: Online Applications are invited for various Non-Teaching Positions.</a>-->


                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>



<?php $this->load->view("frontend/footer.php");?>


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Tender - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>