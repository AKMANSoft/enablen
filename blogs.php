<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Enablen</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/components/ltri_section.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/components/typography_and_layout.css" />
    <link rel="stylesheet" href="./css/components/button.css" />
    <link rel="stylesheet" href="./css/blogs.css">
</head>

<body>
    <?php $light = true;
    include("./includes/header.php"); ?>


    <section class="home_section">
        <div class="head">
            <h1 class="heading">Articles And News</h1>
            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div class="filter_and_search">
            <div class="filters_section">
                <button id="categories_prev_scroll_btn" type="button" class="scroll_prev_btn bi bi-chevron-left"></button>
                <div class="categories_scroll_container">
                    <div id="blogs_filter_categories" class="categories_list">
                        <button type="button" class="category_item active">All</button>
                        <button type="button" class="category_item">Category A</button>
                        <button type="button" class="category_item">Category B</button>
                        <button type="button" class="category_item">Category C</button>
                        <button type="button" class="category_item">Category D</button>
                    </div>
                </div>
                <button id="categories_next_scroll_btn" type="button" class="scroll_next_btn bi bi-chevron-right"></button>
            </div>
            <div class="search_bar_section">
                <input class="search_bar" type="text" name="blogs_search_text" id="blogs_search_input" placeholder="Search">
                <span class="search_icon bi bi-search"></span>
            </div>
        </div>
        <div class="blogs_grid">
            <div class="blog_item featured">
                <img src="./images/articles_and_news_3.png" height="380" alt="" class="blog_img">
                <div class="blog_info">
                    <p class="blog_date sm text-500">27 Jan 2021</p>
                    <h4 class="blog_title text-black">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium </h4>
                    <div class="tags">
                        <p class="tag_item">Grant Writing</p>
                        <p class="tag_item">Health Industry</p>
                    </div>
                    <div class="extra_info">
                        <div class="divider"></div>
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorelaudantium, totam rem aperiam, eaqu quae aatae vitae dicta sunt experror sit voluptatem....</p>
                        <a href="#" class="btn outlined">Read More</a>
                    </div>
                </div>
            </div>
            <div class="blog_item">
                <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
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
                <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
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
                <img src="./images/articles_and_news_3.png" width="380" height="250" alt="" class="blog_img">
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
    include("./includes/footer.php");
    ?>

    <script src="./scripts/blogs.js"></script>
</body>

</html>