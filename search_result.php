<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result - Enablen</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/components/ltri_section.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/components/typography_and_layout.css" />
    <link rel="stylesheet" href="./css/components/button.css" />
    <link rel="stylesheet" href="./css/search_result.css">
</head>

<body>
    <?php $light = true;
    include("./includes/header.php"); ?>


    <section class="home_section">
        <div class="head">
            <div class="section_left">
                <div class="back_link">
                    <a href="./blogs.php">
                        <i class="back_icon bi bi-arrow-left-short"></i>
                    </a>
                    <p>Go Back</p>
                </div>
                <h3 class="info_text">12 results found for “Grant Writing” search result</h3>
            </div>
            <div class="search_bar_section">
                <input class="search_bar" type="text" name="blogs_search_text" id="blogs_search_input" placeholder="Search">
                <span class="search_icon bi bi-search"></span>
            </div>
        </div>
        <div class="blogs_grid">
            <div class="blog_item">
                <div class="blog_img_container">
                    <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
                </div>
                <div class="blog_info">
                    <p class="blog_date sm text-500">27 Jan 2021</p>
                    <h4 class="blog_title text-black">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium</h4>
                    <div class="tags">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
            <div class="blog_item">
                <div class="blog_img_container">
                    <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
                </div>
                <div class="blog_info">
                    <p class="blog_date sm text-500">27 Jan 2021</p>
                    <h4 class="blog_title text-black">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium </h4>
                    <div class="tags">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
            </div>
            <div class="blog_item">
                <div class="blog_img_container">
                    <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
                </div>
                <div class="blog_info">
                    <p class="blog_date sm text-500">27 Jan 2021</p>
                    <h4 class="blog_title text-black">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium </h4>
                    <div class="tags">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                </div>
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