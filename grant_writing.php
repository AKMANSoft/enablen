<?php $page_title = "Grant Writing";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/grant_writing.css">
<link rel="stylesheet" href="./css/components/checked_list.css" />
<link rel="stylesheet" href="./css/components/stepped_list.css" />



<body>
    <?php $light = true;
    include("./includes/header.php"); ?>

    <section class="ltri_section home_section">
        <div class="content_section">
            <h1>Grant writing services</h1>
            <div class="spacer-10"></div>
            <p class="lg desc">Our proven end-to-end grant writing service has delivered successful funding outcomes to our clients and helped bring many good ideas to life.</p>
            <button type="button" class="btn outlined">Book A Call</button>
        </div>
        <div class="image_section">
            <div class="image_container">
                <div class="gradient_line_style">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <img src="./images/home_image.png" width="484" height="460" alt="">
            </div>
        </div>
    </section>


    <section class="ltri_section align_start process_section">
        <div class="content_section">
            <h2 class="heading">Seamless Process and Plan</h2>
            <div class="spacer-30"></div>
            <p class="desc">Our proven six-step process makes complicated grant writing projects easier to manage.</p>
        </div>
        <div class="content_section">
            <div class="stepped_lsit">
                <div class="stepped_item">
                    <span class="num">1</span>
                    <div class="details">
                        <h5 class="heading">The Strategy</h5>
                        <p>We research the funder's program guidelines and outline your options moving forward.</p>
                    </div>
                </div>
                <div class="stepped_item">
                    <div class="num">2</div>
                    <div class="details">
                        <h5 class="heading">Stepped Plan</h5>
                        <p>We break the application process into steps to ensure the project is completed to scope and time.
                        </p>
                    </div>
                </div>
                <div class="stepped_item">
                    <div class="num">3</div>
                    <div class="details">
                        <h5 class="heading">Research</h5>
                        <p>We will gather data (either primary or secondary) to make your case for funding.</p>
                    </div>
                </div>
                <div class="stepped_item">
                    <div class="num">4</div>
                    <div class="details">
                        <h5 class="heading">First Draft</h5>
                        <p>We draft your Initial documentation and criteria responses.</p>
                    </div>
                </div>
                <div class="stepped_item">
                    <div class="num">5</div>
                    <div class="details">
                        <h5 class="heading">Final Review</h5>
                        <p>We work with you to go over your application prior to final submission.</p>
                    </div>
                </div>

                <div class="stepped_item">
                    <div class="num">6</div>
                    <div class="details">
                        <h5 class="heading">Submission</h5>
                        <p>We lodge your application with the funder following your approval.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ltri_section benifits_section">
        <div class="content_section">
            <h2 class="heading text-white">Benefits of using our grant writing service</h2>
            <div class="spacer-20"></div>
            <p class="desc text-white">You’re not just looking for a professional grant writing service. You’re looking for one that you can
                trust. At Enablen, we take care of all aspects relevant to the grant application in order to ease the
                workload for your team. Additional benefits include:
            </p>
            <div class="spacer-40"></div>
            <div class="checked_list">
                <div class="check_item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="text-white">Focusing on your business without the distraction of grant writing work and deadlines.</p>
                </div>
                <div class="check_item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="text-white">Gaining access to hassle-free grant writing expertise.</p>
                </div>
                <div class="check_item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="text-white">Enhancing your chances of securing grant funding.</p>
                </div>
                <div class="check_item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="text-white">No upfront fees.</p>
                </div>
            </div>
            <a href="#" class="btn outlined white mt-15">Book a call</a>
        </div>
        <div class="image_section">
            <div class="image_container">
                <div class="backdrop_globe"></div>
                <img src="images/benefits.png" width="490" height="515" alt="">
            </div>
        </div>
    </section>



    <section class="ltri_section freebie_section">
        <div class="content_section">
            <h2 class="heading">Enablen Freebie</h2>
            <div class="spacer-20"></div>
            <p class="desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam
                <br><br>
                When we work together, there's nothing that can stop us from achieving our goals.
            </p>
            <div class="spacer-60"></div>
            <button type="button" class="btn outlined">Download</button>
        </div>
        <div class="image_section">
            <div class="image_container">
                <div class="freebie_img_drop_shadow"></div>
                <img src="images/book.png" class="contain" width="372" height="440" />
            </div>
        </div>
    </section>



    <?php include("./includes/projects_section.php") ?>
    <?php include("./includes/reviews_section.php") ?>


    <?php include("./includes/questions_section.php") ?>

    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>
</body>

</html>