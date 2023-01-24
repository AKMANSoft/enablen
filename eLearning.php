<?php $page_title = "E Learning Service";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/elearning.css" />
<link rel="stylesheet" href="./css/components/dotted_lsit.css" />




<body>
    <?php $light = true;
    include("./includes/header.php"); ?>

    <section class="ltri_section home_section">
        <div class="content_section">
            <h1>E-Learning Service</h1>
            <div class="spacer-10"></div>
            <p class="lg desc">Everything you need to get your online training up and running! We offer end-to-end eLearning services including courseware development, Moodle LMS customisation, and more.</p>
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


    <section class="Service-range">
        <p class="mainHeading"> Service range</p>
        <div>
            <P class="mainSubHeading">Access a full range of high-quality eLearning services and dedicated support to<br> ensure your training is made available online to your audience 24/7.</P>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="firstHeading">
                    <img class="picture2" width="4px" height="50px" src="images/Group.png">
                    <p class="heading1">
                        Courseware Development
                    </p>
                </div>
                <p class="subHeading1">
                    Turn your paper and pen courses into online ones and deliver them anywhere. We can create courseware directly in your LMS or as interoperable courseware so that it runs off any LMS or browser.
                </p>

            </div>
            <div class="grid-item">
                <div class="firstHeading">
                    <img class="picture2" width="4px" height="50px" src="images/Group.png">
                    <p class="heading1">
                        Videos and Animation
                    </p>
                </div>
                <p class="subHeading1">
                    Want better learner engagement for your online training? We can create customised, high-quality video and animated content to supplement your learning materials.
                </p>
            </div>
            <div class="grid-item">
                <div class="firstHeading">
                    <img class="picture2" width="4px" height="50px" src="images/Group.png">
                    <p class="heading1">
                        Moodle LMS Customisation
                    </p>
                </div>
                <p class="subHeading1">
                    We will customise and implement your very own white labelled Moodle LMS, packaged with ongoing technical support and maintenance to keep it in top shape.
                </p>
            </div>
        </div>
        <div class="grid-container1">
            <div class="grid-item">
                <div class="firstHeading">
                    <img class="picture2" width="4px" height="50px" src="images/Group.png">
                    <p class="heading1">
                        Custom Plugins and Functionality
                    </p>
                </div>
                <p class="subHeading1">
                    Turn your paper and pen courses into online ones and deliver them anywhere. We can create courseware directly in your LMS or as interoperable courseware so that it runs off any LMS or browser.
                </p>
            </div>
            <div class="grid-item">
                <div class="firstHeading">
                    <img class="picture2" width="4px" height="50px" src="images/Group.png">
                    <p class="heading1">
                        Mobile App
                    </p>
                </div>
                <p class="subHeading1">
                    Want to extend your Moodle LMS to the anywhere and anytime learner? We will develop a white labelled Moodle mobile app for your business so that your learners can seamlessly access your training anytime, anywhere on their mobile device.
                </p>
            </div>
        </div>
    </section>


    <section class="ltri_section whether_section">
        <div class="image_section">
            <div class="image_container">
                <div class="gradient_line_style">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <img src="images/our_impact.webp" width="468" height="446" alt="">
            </div>
        </div>
        <div class="content_section">
            <h3 class="heading">Whether you need to improve your online presence or revamp things to better reach your
                audience.</h3>
            <div class="spacer-20"></div>
            <p class="desc">There are clear benefits of working with us:</p>
            <div class="spacer-30"></div>
            <div class="dotted_list green">
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Focus on your business while we focus on your web development project.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Gain instant access to web development expertise.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>We work fast. Launch your web project quicker.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Build a 100% responsive website projects compatible with all devices.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Avail 15-day post-project support at no additional cost.</p>
                </div>
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