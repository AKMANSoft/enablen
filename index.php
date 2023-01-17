<?php $page_title = "Home";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/index.css" />
<link rel="stylesheet" href="./css/components/checked_list.css" />

<body>
    <?php $light = false;
    include("./includes/header.php"); ?>
    <section class="home_section">
        <div id="home_sldier" class="home_sldier">
            <div class="embla__container">
                <div class="embla__slide">
                    <img class="embla__slide__img" src="./images/home.png" alt="Your alt text" />
                </div>
                <div class="embla__slide">
                    <img class="embla__slide__img" src="./images/home.png" alt="Your alt text" />
                </div>
                <div class="embla__slide">
                    <img class="embla__slide__img" src="./images/home.png" alt="Your alt text" />
                </div>
            </div>
        </div>

        <div class="content">
            <h2 class="text-green text-center">Queensland based</h2>
            <h1 class="text-center text-white">
                profit-for-purpose business consultants
            </h1>
            <div class="spacer-20"></div>
            <p class="desc">
                Building futures by supporting Australian charities and small businesses
                with funding solutions and technology consultancy
            </p>
            <a href="#" class="btn outlined white bg-50">Book a call</a>
            <div class="progress-bar-container">
                <div class="progress-bar">
                    <span id="home_sider_progress_bar" class="progress"></span>
                </div>
                <div class="row justify-between num-btn-container">
                    <p id="home_slider_cur_slide_num" class="cur-slide-num">01</p>
                    <div class="next-prev-btns">
                        <i id="home_slider_prev_btn" class="prev-btn bi bi-arrow-left"></i>
                        <i id="home_slider_next_btn" class="next-btn bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="orgs_support_section">
        <h4>Organisations we support</h4>
        <div class="orgs_container">
            <div class="organisations">
                <img src="./images/selectability logo_LATESTorgs.svg" alt="" class="org_item">
                <img src="./images/Method Insuranceorgs.svg" alt="" class="org_item">
                <img src="./images/TAIHS logoorgs.svg" alt="" class="org_item">
                <img src="./images/Upvisory Logoorgs.svg" alt="" class="org_item">
                <img src="./images/Djarragun-College-Logo-Vector-2orgs.svg" alt="" class="org_item">
                <img src="./images/selectability logo_LATESTorgs.svg" alt="" class="org_item">
                <img src="./images/Method Insuranceorgs.svg" alt="" class="org_item">
                <img src="./images/TAIHS logoorgs.svg" alt="" class="org_item">
                <img src="./images/Upvisory Logoorgs.svg" alt="" class="org_item">
                <img src="./images/Djarragun-College-Logo-Vector-2orgs.svg" alt="" class="org_item">
            </div>
        </div>
    </section>
    <section class="nurturing_section">
        <div class="section_left">
            <h3 class="heading">Nurturing Responsible Action</h3>
        </div>
        <div class="section_right">
            <p>At Enablen, our social responsibility is twofold. First, we believe in giving back to the environment and
                our communities. Second, we work with charities and small businesses to enable them to bring about those
                initiatives. You too can be part of this.</p>
        </div>
    </section>
    <section class="ltri_section impact_section">
        <div class="image_section">
            <img src="images/our_imapct.png" width="468" height="446" alt="">
        </div>
        <div class="content_section">
            <h2 class="heading">Our impact</h2>
            <p class="desc">Enablen is committed to building a better, more inclusive world by helping those in need and
                supporting local communities. <strong>Since January 2021, we have supported local charities to secure
                    over $6.5 million in funding since January 2021,</strong> played our role in securing valuable
                health infrastructure for our regional communities, supported local youth, and created awareness around
                sexual harassment in the workplace.</p>
            <p>When we work together, there's nothing that can stop us from achieving our goals.</p>
            <a href="#" class="btn outlined">Learn More</a>
        </div>
    </section>
    <section class="solutions_section">
        <div class="head">
            <h2 class="heading">Our Solutions</h2>
            <p>Our goal is to enable you with any funding, technological, or creative solutions you require so you can
                focus on what's important: getting your products and services out there!</p>
        </div>
        <div class="tabs_container">
            <div class="tabs">
                <button type="button" id="solutions_tab_item" data-tabview-ref="web_development" class="tab_item active">Website Development</button>
                <button type="button" id="solutions_tab_item" data-tabview-ref="elearning" class="tab_item">E-Learning</button>
                <button type="button" id="solutions_tab_item" data-tabview-ref="grant_writing" class="tab_item">Grant Writing</button>
            </div>
        </div>
        <div id="solutions_tabview_container" class="solutions_tabview_container">
            <div id="web_development" class="ltri_section tab_content_view active">
                <div class="content_section">
                    <h4 class="heading">Need help to secure funding?</h4>
                    <div class="spacer-20"></div>
                    <p class="desc">We are here to help. Our end-to-end grant writing solutions are backed by a
                        proven track
                        record, with over <strong>$6.5 million</strong> secured for our clients since
                        <strong>January
                            2021</strong>, and counting. Contact us today to learn more about our grant writing
                        services.
                    </p>
                    <div class="spacer-50"></div>
                    <div class="checked_list green">
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Understand and fully comply with guidelines</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Develop a compelling approach</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Draft high-quality responses and documentation</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>End-to-end submission management</p>
                        </div>
                    </div>
                    <div class="spacer-50"></div>
                    <a href="#" class="btn outlined">Learn More</a>
                </div>
                <div class="image_section">
                    <img src="./images/articles_and_news_4.png" width="488" height="430" alt="">
                </div>
            </div>
            <div id="elearning" class="ltri_section tab_content_view">
                <div class="content_section">
                    <h4 class="heading">Need help to secure funding?</h4>
                    <div class="spacer-20"></div>
                    <p class="desc">We are here to help. Our end-to-end grant writing solutions are backed by a
                        proven track
                        record, with over <strong>$6.5 million</strong> secured for our clients since
                        <strong>January
                            2021</strong>, and counting. Contact us today to learn more about our grant writing
                        services.
                    </p>
                    <div class="spacer-50"></div>
                    <div class="checked_list green">
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Understand and fully comply with guidelines</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Develop a compelling approach</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Draft high-quality responses and documentation</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>End-to-end submission management</p>
                        </div>
                    </div>
                    <div class="spacer-50"></div>
                    <a href="#" class="btn outlined">Learn More</a>
                </div>
                <div class="image_section">
                    <img src="./images/solutions.png" width="488" height="430" alt="">
                </div>
            </div>
            <div id="grant_writing" class="ltri_section tab_content_view">
                <div class="content_section">
                    <h4 class="heading">Need help to secure funding?</h4>
                    <div class="spacer-20"></div>
                    <p class="desc">We are here to help. Our end-to-end grant writing solutions are backed by a
                        proven track
                        record, with over <strong>$6.5 million</strong> secured for our clients since
                        <strong>January
                            2021</strong>, and counting. Contact us today to learn more about our grant writing
                        services.
                    </p>
                    <div class="spacer-50"></div>
                    <div class="checked_list green">
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Understand and fully comply with guidelines</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Develop a compelling approach</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Draft high-quality responses and documentation</p>
                        </div>
                        <div class="check_item">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>End-to-end submission management</p>
                        </div>
                    </div>
                    <div class="spacer-50"></div>
                    <a href="#" class="btn outlined">Learn More</a>
                </div>
                <div class="image_section">
                    <img src="./images/articles_and_news_4.png" width="488" height="430" alt="">
                </div>
            </div>
        </div>

    </section>
    <?php include("./includes/projects_section.php") ?>
    <?php include("./includes/reviews_section.php") ?>

    <section class="articles_and_news_section">
        <h2 class="heading">Articles and News</h2>
        <div class="articles">
            <div class="article ">
                <img src="./images/articles_and_news_section_1.png" width="590" height="278" alt="">
                <div class="article_info">
                    <p class="strong">27 Jan 2021</p>
                    <h4 class="text-black mt-10">Sed ut perspiciatis unde omnis iste tis unde om nis iste errorsit
                        voluptatem accus...</h4>
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
                    <h4 class="text-black mt-10">Sed ut perspiciatis </h4>
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
                    <h4 class="text-black mt-10">Sed ut perspiciatis unde</h4>
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
                    <h4 class="text-black mt-10">Sed ut perspiciatis unde</h4>
                    <div class="tags mt-15">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn outlined">View Articles</a>
    </section>

    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>

    <script src="./scripts/index.js"></script>
</body>

</html>