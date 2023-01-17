<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Impact - Enablen</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/components/ltri_section.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/components/typography_and_layout.css" />
    <link rel="stylesheet" href="./css/components/button.css" />
    <link rel="stylesheet" href="./css/our_impact.css">
</head>

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
            <img src="./images/home_image.png" width="484" height="460" alt="" class=" home_image">
        </div>
    </section>


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
    </section>


    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>

</body>

</html>