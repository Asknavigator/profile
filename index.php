<?php include('vpdata.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./css/extracss.css">

    <link rel="stylesheet" href="./css/style.css?v2.1">
    <link rel="stylesheet" href="./css/mq.css">


    <title>Vendor Profile of <?php echo $vendor['company']; ?></title>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11 px-0">
                <div class="container-fluid">
                    <div class="row position-relative">
                        <div class="col-12 py-md-5 pt-2 pb-2 d-flex justify-content-center align-items-center">
                            <header class="brand_ven ">
                                <div class="">
                                    <img src="./images/Vector.png" alt="">

                                </div>

                                <h6 class="mb-0 "> <?php echo $vendor['company']; ?> </h6>


                            </header>
                        </div>

                        <span class="menu-sm d-md-none">
                            <i class="fa-solid fa-ellipsis-vertical"></i>

                            <a class="rep-user d-none cur-point">
                                <span>Report User</span>
                        </a>
                        </span>
                    </div>

                    <div class="row justify-content-center py-2">

                        <div class="col-lg-10 col-md-11 profile_card shadow-sm rounded py-3 d-flex flex-md-row flex-column  justify-content-center align-items-md-start align-items-center">
                            <div class="img-profile-sec">
                                <div class="profile-img-div">
                                    <img src="./images/image 1.png" alt="" class="img-fluid">

                                </div>

                            </div>

                            <div class="prof_det flex-grow-1 d-md-block d-inline-flex flex-column align-items-start">

                                <h6 class="name text-md-start text-center mx-auto">
                                <?php echo $vendor['name']; ?>
                                </h6>
                                <h6 class="sm-info text-md-start text-center mx-auto d-inline-flex align-items-center justify-content-start"> <span>Pro Vendor</span> <span class="text-black">at AskNavigator</span> <img src="./images/image 8.png" alt=""></h6>
                                <h6 class="full-info text-md-start text-center"> <span>
                                    A vendor, also known as a supplier, is a person or a business entity that sells something. Large retail store chains such as Target.
                                </span> <span class="d-md-inline d-none">
                                    A vendor, also known as a supplier, is a person or a business entity that sells something. Large retail store chains such as Target.
                                </span> </h6>

                            </div>

                            <div class="contact-div">

                                <a href="3" class="cont-btn">Contact Vendor</a>


                            </div>
                        </div>




                    </div>

                    <div class="row py-md-5 pb-2">
                        <div class="col-12 trust-score-block mark-pro d-flex align-items-center justify-content-center">
                            <div class="quoto">

                                <span class="quoto_send text-theme"><?php echo $vendor['Total_Leads_Distributed']; ?></span>
                                <span>Quotation sends</span>

                            </div>

                            <div class="tr-score mx-3">

                                <span class="info-block"><img src="./images/info.png" alt=""></span>

                                <a class="info-content d-none">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quasi, neque ducimus culpa et laudantium. Commodi dolores est quas eius?</span>
                                </a>

                                <div class="tr-img mb-2">
                                    <img src="./images/image 11.png" alt="" class="img-fluid ">
                                </div>

                                <div class="tr-score-value d-flex align-items-end">


                                    <span>4.5</span> <span>/10</span>
                                </div>

                                <span>Trust Score</span>

                            </div>

                            <div class="doc-ver">

                                <span class="doc-img ">
                                    <img src="./images/Group 48095785.png" alt="" class="img-fluid">
                                </span>

                                <span><?php echo $vendor['verification_status']; ?></span>

                            </div>
                        </div>
                    </div>

                    <div class="row poppins justify-content-center py-3">
                        <div class="col-md-6 d-flex">
                            <nav class="nav-tabs nav vendor-nav w-100">
                                <a class="nav-link cur-point active flex-grow-1">Services</a>
                                <a class="nav-link cur-point flex-grow-1">Reviews</a>
                            </nav>
                        </div>

                        <div class="col-md-12 tab-content  tab-main-content ">

                            <div class="tab-pane serv py-2 active" id="serv">

                                <div class="row justify-content-between serv-sec">
                                    <div class="col-md-35 ">

                                        <div class="d-flex flex-column">
                                            <div class="serv-img">
                                                <img src="./images/image 4.png" alt="" class="img-fluid">

                                            </div>

                                            <h6 class="serv-title my-2">
                                                Full Household Shifting
                                            </h6>
                                        </div>



                                        <p class="mb-0 serv-info collapse-md-below">
                                            We shift all kind of national or international home shifting for your destinaion.
                                        </p>


                                    </div>



                                    <div class="col-md-35 ">


                                        <div class="d-flex flex-column">
                                            <div class="serv-img">
                                                <img src="./images/image 5.png" alt="" class="img-fluid">

                                            </div>

                                            <h6 class="serv-title my-2">
                                                Vehicle Shifting
                                            </h6>

                                        </div>

                                        <p class="mb-0 serv-info collapse-md-below">
                                            We shift all kind of national or international home shifting for your destinaion.
                                        </p>

                                    </div>



                                    <div class="col-md-35 ">

                                        <div class="d-flex flex-column">



                                            <div class="serv-img">
                                                <img src="./images/image 6.png" alt="" class="img-fluid">

                                            </div>

                                            <h6 class="serv-title my-2">
                                                Office Shifting
                                            </h6>

                                        </div>

                                        <p class="mb-0 serv-info collapse-md-below">
                                            We shift all kind of national or international home shifting for your destinaion.
                                        </p>
                                    </div>
                                </div>


                                <div class="row faq justify-content-center ">


                                    <h1 class="text-center">FAQ's</h1>
                                    <p class="text-center">Everything Need to know about AskNavigator. Have more questions <br class="d-lg-block d-none"> contact us to know more about AskNavigator.</p>


                                    <div class="col-md-12  faq-section ">

                                        <div class="d-flex flex-grow-1">
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What is Asknavigator?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-1">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What you will do with My number?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-2">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What you will do with My number?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-3">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-grow-1">
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What you will do with My number?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-4">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What you will do with My number?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-5">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                            <div class="faq-sec">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">What you will do with My number?</h6>
                                                    <a class="collapse-btn "><i class="fa-solid fa-plus"></i></a>
                                                </div>

                                                <p class="collapse mb-0  pe-5" id="faq-info-6">
                                                    <span class="">
                                                        AskNavigator is helping people to find best services in their city. Along with it increasing the sales of a good business is really a enjoying task.
                                                    </span>

                                                </p>
                                            </div>
                                        </div>






                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane py-2 rev" id="rev">

                                <div class="row justify-content-center">
                                    <div class="col-lg-9 ">

                                        <div class=" write-review flex-column">
                                            <div class="d-flex w-100 align-items-center">
                                                <div class="rev-img">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </div>


                                                <div class="rev-info ">
                                                    <span class="rev-name">Write a review</span>

                                                </div>

                                                <div class="five-star ms-auto mb-auto">
                                                    <i class="fa-solid fa-star blank"></i><i class="fa-solid fa-star blank"></i><i class="fa-solid fa-star blank"></i><i class="fa-solid fa-star blank"></i><i class="fa-solid fa-star blank"></i>
                                                </div>
                                            </div>





                                        </div>

                                        <section class="review-card-sec">
                                            <div class="rev-card flex-column">
                                                <div class="d-flex w-100 align-items-center">
                                                    <div class="rev-img">
                                                        <img src="./images/Ellipse 3.png" alt="" class="img-fluid w-100 h-100">
                                                    </div>


                                                    <div class="rev-info ">
                                                        <span class="rev-name">Mohit Rawat</span>
                                                        <span class="rev-prof">Shifting from Delhi to Gurgaon</span>

                                                    </div>

                                                    <div class="five-star ms-auto mb-auto">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star blank"></i>
                                                    </div>
                                                </div>

                                                <p class="rev-content">
                                                    Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes. <span class="d-md-inline d-none">Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.</span>
                                                </p>

                                                <div class="check-issue d-flex align-items-center">
                                                    <i class="fa-regular me-2  fa-circle-check"></i>
                                                    <span>Issue Resolved</span>
                                                </div>



                                            </div>
                                            <div class="rev-card flex-column">
                                                <div class="d-flex w-100 align-items-center">
                                                    <div class="rev-img">
                                                        <img src="./images/Ellipse 3.png" alt="" class="img-fluid w-100 h-100">
                                                    </div>


                                                    <div class="rev-info ">
                                                        <span class="rev-name">Mohit Rawat</span>
                                                        <span class="rev-prof">Shifting from Delhi to Gurgaon</span>

                                                    </div>

                                                    <div class="five-star ms-auto mb-auto">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star blank"></i>
                                                    </div>
                                                </div>

                                                <p class="rev-content">
                                                    Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes. <span class="d-md-inline d-none">Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.</span>
                                                </p>

                                                <div class="check-issue d-flex align-items-center">
                                                    <i class="fa-regular me-2  fa-circle-check"></i>
                                                    <span>Issue Resolved</span>
                                                </div>



                                            </div>
                                            <div class="rev-card d-none flex-column">
                                                <div class="d-flex w-100 align-items-center">
                                                    <div class="rev-img">
                                                        <img src="./images/Ellipse 3.png" alt="" class="img-fluid w-100 h-100">
                                                    </div>


                                                    <div class="rev-info ">
                                                        <span class="rev-name">Mohit Rawat</span>
                                                        <span class="rev-prof">Shifting from Delhi to Gurgaon</span>

                                                    </div>

                                                    <div class="five-star ms-auto mb-auto">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star blank"></i>
                                                    </div>
                                                </div>

                                                <p class="rev-content">
                                                    Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes. <span class="d-md-inline d-none">Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.</span>
                                                </p>

                                                <div class="check-issue d-flex align-items-center">
                                                    <i class="fa-regular me-2  fa-circle-check"></i>
                                                    <span>Issue Resolved</span>
                                                </div>



                                            </div>
                                        </section>



                                    </div>

                                    <div class="col-lg-9 d-flex justify-content-center">
                                        <a class="show-more">
                                            <span>Show more</span> <i class="fas fa-angle-down ms-1"></i>
                                        </a>
                                    </div>

                                </div>


                                <div class="row asknav justify-content-center">
                                    <div class="col-lg-6 ">

                                        <h6 class="text-center fs-5 fw-600 ask-nav-head">AskNavigator’s Review</h6>
                                        <h6 class="text-center text-black-50 fs-8">Everything Need to know about AskNavigator. Have more questions <br class="d-md-block d-none"> contact us</h6>

                                    </div>
                                    <div class="col-lg-9">
                                        <section class="ask-nav-sec ">
                                            <div class="rev-card flex-column">
                                                <div class="d-flex w-100 align-items-center">
                                                    <div class="rev-img">
                                                        <img src="./images/Ellipse 3.png" alt="" class="img-fluid w-100 h-100">
                                                    </div>


                                                    <div class="rev-info ">
                                                        <span class="rev-name">Mohit Rawat</span>
                                                        <span class="rev-prof">Shifting from Delhi to Gurgaon</span>

                                                    </div>

                                                    <div class="five-star ms-auto mb-auto">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star blank"></i>
                                                    </div>
                                                </div>

                                                <p class="rev-content">
                                                    Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes. <span class="d-md-inline d-none">Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.</span>
                                                </p>





                                            </div>
                                            <div class="rev-card flex-column">
                                                <div class="d-flex w-100 align-items-center">
                                                    <div class="rev-img">
                                                        <img src="./images/Ellipse 3.png" alt="" class="img-fluid w-100 h-100">
                                                    </div>


                                                    <div class="rev-info ">
                                                        <span class="rev-name">Mohit Rawat</span>
                                                        <span class="rev-prof">Shifting from Delhi to Gurgaon</span>

                                                    </div>

                                                    <div class="five-star ms-auto mb-auto">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star blank"></i>
                                                    </div>
                                                </div>

                                                <p class="rev-content">
                                                    Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes. <span class="d-md-inline d-none">Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.Asknavigator is the best company to hire Packers and Movers the helps you find packer mover in reasonable prices. The staff also polite and humble and resolve every problem in minutes.</span>
                                                </p>





                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>





                        </div>

                        <div class="col-md-12 px-0 pb-md-0 pb-4">
                            <h6 class="text-center copy ">Copyright © 2021 <strong>AskNavigator.</strong> All Rights Reserved.</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://kit.fontawesome.com/2918a48001.js" crossorigin="anonymous"></script>

    <script src="./js/main.js"></script>
</body>

</html>