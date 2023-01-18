<?php $page_title = "404 - Page Not Found";
include("./includes/base_layout.php") ?>
<link rel="stylesheet" href="./css/404.css">


<body>

    <?php $light = true;
    include("./includes/header.php"); ?>

    <section class="section404">
        <img src="./images/404.png" width="652" height="244.5" alt="" class="img404">
        <P class="page">Page not found</P>
        <p class="page1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi morbi sit consectetur elit nibh faucibus morbi. Sed sit eget est lacus.</p>
        <a href="/" class="btn filled btn404">Go To Home</a>
    </section>

    <?php
    $upper_section_heading = "Supporting our charities, NFPs <br> & small businesses";
    $upper_section_description = "Our number one goal is to help our clients succeed in community-building and environmental preservation. It all starts here with us working together to give back to the world with every project we work on.";
    include("./includes/cta_section.php");
    ?>

    <?php include("./includes/footer.php"); ?>

</body>

</html>