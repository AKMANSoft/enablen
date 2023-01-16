<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/components/ltri_section.css">
    <link rel="stylesheet" href="./css/web_developemnet.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/components/typography_and_layout.css" />
    <link rel="stylesheet" href="./css/components/button.css" />
    <link rel="stylesheet" href="./css/components/checked_list.css" />
    <link rel="stylesheet" href="./css/components/dotted_lsit.css" />
    <link rel="stylesheet" href="./css/components/stepped_list.css" />
    <link rel="stylesheet" href="./css/components/header.css" />
    <link rel="stylesheet" href="./css/components/questions_section.css">
    <link rel="stylesheet" href="./css/components/projects_section.css" />
    <link rel="stylesheet" href="./css/components/reviews_section.css" />
    <link rel="stylesheet" href="./css/components/footer.css" />
    <link rel="stylesheet" href="./css/aboutUs.css">

</head>

<body>

    <?php $light = true;
    include("./includes/header.php"); ?>

    <section class="aboutUs-section">
        <p class="aboutUs-heading">About US</p>
        <div class="aboutUs-subheading">
            <p class="aboutUs-subheading1">Enablen exists to support Australian not-for-profits, SMEs, and start-ups that are committed to a better future for our communities and the world in general. We specialise in enabling our clients with technological and creative solutions to help reduce costs, enhance operational efficiencies, and gain meaningful exposure</p>
            <p class="aboutUs-subheading2">From experience, we understand a one-sized solution does not fit every client. We take pride in understanding your unique purpose, mission, values and needs to develop highly customised technology and creative solutions that deliver strong results.</p>
        </div>
        <img src="./images/aboutus.png" alt="" class="aboutus-img" />
        <div class="aboutus-footer">
            <div class="aboutus-footerflex1">
                <p class="aboutus-footer-h1">Our Track Record</p>
            </div>

            <div class="aboutus-footerflex2">
                <p class="aboutus-footer-h2">~80%</p>
                <p class="aboutus-footer-h3"> Operational fficiency</p>
            </div>
            <div class="aboutus-footerflex3">
                <p class="aboutus-footer-h2">400</p>
                <p class="aboutus-footer-h3">Trained Workforce</p>
            </div>
            <div class="aboutus-footerflex4">
                <p class="aboutus-footer-h2"> 1</p>
                <p class="aboutus-footer-h3">State Awards</p>
            </div>


        </div>


    </section>

    <section class="reviews_section">
        <h2 class="heading">What Our Clients Say About Us</h2>
        <div class="reviews">
            <div class="review_item">
                <p class="review_text">Enablen's engineering contributions have allowed us to significantly scale and
                    simplify our training and workforce development initiatives through our fully customised LMS
                    solution. The technology responds to our needs, as opposed to implementing something off-the-shelf
                    that we would be forced to mould our operations into. It is great to have Enablen in our corner.</p>
                <div class="review_user">
                    <img src="./images/user_image.png" class="user_image" width="60" height="60" alt="">
                    <div class="user_info">
                        <p class="username text-black">Debra Burden</p>
                        <p class="desc">Chief Executive Officer, selectability Ltd</p>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <p class="review_text">Enablen's engineering contributions have allowed us to significantly scale and
                    simplify our training and workforce development initiatives through our fully customised LMS
                    solution. The technology responds to our needs, as opposed to implementing something off-the-shelf
                    that we would be forced to mould our operations into. It is great to have Enablen in our corner.</p>
                <div class="review_user">
                    <img src="./images/user_image.png" class="user_image" width="60" height="60" alt="">
                    <div class="user_info">
                        <p class="username text-black">Debra Burden</p>
                        <p class="desc">Chief Executive Officer, selectability Ltd</p>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <p class="review_text">Enablen's engineering contributions have allowed us to significantly scale and
                    simplify our training and workforce development initiatives through our fully customised LMS
                    solution. The technology responds to our needs, as opposed to implementing something off-the-shelf
                    that we would be forced to mould our operations into. It is great to have Enablen in our corner.</p>
                <div class="review_user">
                    <img src="./images/user_image.png" class="user_image" width="60" height="60" alt="">
                    <div class="user_info">
                        <p class="username text-black">Debra Burden</p>
                        <p class="desc">Chief Executive Officer, selectability Ltd</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-30"></div>
        <div class="slider_indicators">
            <div class="indicator active"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
        </div>
    </section>




    <?php
    $upper_section_heading = "Supporting our charities, NFPs & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building
    and environmental preservation. It all starts here with us working together to give back to the
    world with every project we work on.";
    include("./includes/footer.php");
    ?>

</body>

</html>