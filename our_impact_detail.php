<?php $page_title = "Our Impact Detail";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/our_impact_detail.css" />
<link rel="stylesheet" href="./css/components/dotted_lsit.css" />



<body>
    <?php $light = true;
    include("./includes/header.php"); ?>


    <section class="home_section">
        <div class="links">
            <a href="/our_impact.php" class="text-black-80">Our Impact</a>
            <i class="text-green text-bold bi bi-chevron-right"></i>
            <a href="/our_impact_detail.php" class="text-black text-500">Mental Health</a>
        </div>
        <div class="spacer-10"></div>
        <h1 class="heading">Mental Health</h1>
        <div class="spacer-10"></div>
        <p class="desc">The issue of our national mental health is essential and critical. At a national level, mental health as a concept and practice still has a long way to go.</p>
        <div class="spacer-30"></div>
        <img src="./images/mental_health_home.png" width="996" height="613" alt="" class="home_image">
        <div class="spacer-40"></div>
        <div class="stats_info">
            <h4>1,000+ Students Enrolled</h4>
            <div class="stats_list">
                <div class="stat_item">
                    <h4 class="text-black text-center">~ 80%</h4>
                    <p class="text-center">Operational Efficiency</p>
                </div>
                <div class="stat_item">
                    <h4 class="text-black text-center">400</h4>
                    <p class="text-center">Trained Workforce</p>
                </div>
                <div class="stat_item">
                    <h4 class="text-black text-center">1</h4>
                    <p class="text-center">State Awards</p>
                </div>
            </div>
        </div>
    </section>



    <section class="ltri_section max-1000 challenge_section">
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
            <h2 class="heading">The Challenge</h2>
            <div class="spacer-15"></div>
            <p class="desc">It came to the point where suicide was the leading cause of death for Australians aged 15 to 49 years in 2019. Data from the Australian Bureau of Statistics on mental health paints a concerning picture:</p>
            <div class="spacer-20"></div>
            <div class="dotted_list gap-10 green">
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Over two in five Australians aged 16-85 years (43.7% or 8.6 million people) had experienced a mental disorder at some time in their life.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>One in five had a 12-month mental disorder.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Anxiety was the most common group of 12-month mental disorders.</p>
                </div>
                <div class="dotted_item">
                    <i class="bi bi-circle-fill"></i>
                    <p>Almost two in five people aged 16-24 years had a 12-month mental disorder.</p>
                </div>
            </div>
            <div class="spacer-15"></div>
            <p class="desc">Unfortunately, at a national level, mental health as a concept and practice still has a long way to go. There is often stigma, as well as limited understanding associated with anything pertaining to mental health.</p>
        </div>
    </section>


    <section class="ltri_section max-1000 support_section">
        <div class="content_section">
            <h2 class="heading">Our Support</h2>
            <div class="spacer-15"></div>
            <p class="desc">
                At Enablen, we feel it is extremely important to support good mental health initiatives that address community-based mental health issues in a constructive and sustainable manner.
                <br><br>
                Our full range of services can be tailored to develop solutions that can drive scalable and sustainable mental health initiatives.
            </p>
        </div>
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
            <img src="images/book.png" class="contain" width="372" height="440" />
        </div>
    </section>

    <?php include("./includes/projects_section.php") ?>


    <section class="articles_and_news_section">
        <h2 class="heading">Articles and News</h2>
        <div class="articles">
            <div class="article featured">
                <img src="./images/articles_and_news_section_1.png" width="590" height="278" alt="">
                <div class="article_info">
                    <p class="strong">27 Jan 2021</p>
                    <a href="./article_detail.php" class="h4 mt-10">Sed ut perspiciatis unde omnis iste tis unde om nis iste errorsit
                        voluptatem accus...</a>
                    <div class="tags mt-15">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
            <div class="article ">
                <img src="./images/articles_and_news_2.png" width="590" height="278" alt="">
                <div class="article_info">
                    <p class="strong">27 Jan 2021</p>
                    <a href="./article_detail.php" class="h4 mt-10">Sed ut perspiciatis </a>
                    <div class="tags mt-15">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
            <div class="article ">
                <img src="./images/articles_and_news_3.png" width="590" height="278" alt="">
                <div class="article_info">
                    <p class="strong">27 Jan 2021</p>
                    <a href="./article_detail.php" class="h4 mt-10">Sed ut perspiciatis unde</a>
                    <div class="tags mt-15">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
            <div class="article ">
                <img src="./images/articles_and_news_4.png" width="590" height="278" alt="">
                <div class="article_info">
                    <p class="strong">27 Jan 2021</p>
                    <a href="./article_detail.php" class="h4 mt-10">Sed ut perspiciatis unde</a>
                    <div class="tags mt-15">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="/blogs.php" class="btn outlined">View Blogs</a>
    </section>


    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>
</body>

</html>