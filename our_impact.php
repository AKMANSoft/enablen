<?php $page_title = "Our Impact";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/our_impact.css">


<body>
    <?php $light = true;
    include("./includes/header.php"); ?>

    <section class="ltri_section home_section">
        <div class="content_section">
            <h1>Our Impact</h1>
            <div class="spacer-10"></div>
            <p class="lg desc">Our mission is to make the world a better place by investing our profits back into our communities and contributing to real-world solutions.</p>
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
                <img src="images/our_impact.webp" width="484" height="460" alt="" class="home_image">
            </div>
        </div>
    </section>




    <section class="gridded_section">
        <div class="ltri_section gap-web-120 gap-mobile-30 max-1000">
            <div class="image_section">
                <div class="image_container">
                    <div class="gradient_line_style">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="./images/mental_health.svg" width="386" height="360" alt="">
                </div>
            </div>
            <div class="content_section">
                <h2 class="heading">Mental Health</h2>
                <p class="desc">We support charitable, community-based mental health initiatives.</p>
                <a href="/our_impact_detail.php" class="btn outlined mt-50">Learn More</a>
            </div>
        </div>
        <div class="ltri_section reverse_in_web gap-web-120 gap-mobile-30 max-1000">
            <div class="image_section">
                <div class="image_container">
                    <div class="gradient_line_style">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="./images/respect_in_workplace.svg" width="386" height="360" alt="">
                </div>
            </div>
            <div class="content_section">
                <h2 class="heading">Respect in the Workplace</h2>
                <p class="desc">We support initiatives that foster respectful workplaces and zero tolerance towards workplace sexual harassment.</p>
                <a href="/our_impact_detail.php" class="btn outlined mt-50">Learn More</a>
            </div>
        </div>
        <div class="ltri_section gap-web-120 gap-mobile-30 max-1000">
            <div class="image_section">
                <div class="image_container">
                    <div class="gradient_line_style">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="./images/youth_engagement.svg" width="386" height="360" alt="">
                </div>
            </div>
            <div class="content_section">
                <h2 class="heading">Youth Engagement</h2>
                <p class="desc">We support initiatives where young people are involved in responsible, challenging actions to create positive social change</p>
                <a href="/our_impact_detail.php" class="btn outlined mt-50">Learn More</a>
            </div>
        </div>
    </section>


    <!-- 

    <section class="gridded_section">
        <div class="grid_section">
            <div class="image_section">
                <img src="./images/mental_health.png" class="contain" width="386" height="360" alt="">
            </div>
            <div class="content_section">
                <h2 class="heading">Mental Health</h2>
                <p class="desc">Our proven end-to-end grant writing service has delivered successful funding outcomes to our clients and helped bring many good ideas to life.</p>
                <div class="spacer-60"></div>
                <a href="/our_impact_detail.php" class="btn outlined">Learn More</a>
            </div>
        </div>
        <div class="grid_section">
            <div class="image_section">
                <img src="./images/respect_in_workplace.png" class="contain" width="386" height="360" alt="">
            </div>
            <div class="content_section">
                <h2 class="heading">Respect in the Workplace</h2>
                <p class="desc">We support initiatives that foster respectful workplaces and zero tolerance towards workplace sexual harassment.</p>
                <div class="spacer-60"></div>
                <button type="button" class="btn outlined">Learn More</button>
            </div>
        </div>
        <div class="grid_section">
            <div class="image_section">
                <img src="./images/youth_engagement.png" class="contain" width="386" height="360" alt="">
            </div>
            <div class="content_section">
                <h2 class="heading">Youth Engagement</h2>
                <p class="desc">We support initiatives where young people are involved in responsible, challenging actions to create positive social change</p>
                <div class="spacer-60"></div>
                <button type="button" class="btn outlined">Learn More</button>
            </div>
        </div>
    </section> -->


    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>

</body>

</html>