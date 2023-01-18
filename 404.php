<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="./css/404.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
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
</head>
<body>
    
    <?php $light = true;
    include("./includes/header.php"); ?>
  

    <section class="section404">
        <img src="./images/404.png" width="652" height="244.5" alt="" class="img404">
        <P class="page">Page not found</P>
        <p class="page1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi morbi sit consectetur elit nibh faucibus morbi. Sed sit eget est lacus.</p>
        <button class="btn404">Go To Home</button>
    </section>

    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>

</body>
</html>