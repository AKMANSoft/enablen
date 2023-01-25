<link rel="stylesheet" href="../css/components/header.css">
<header class="<?php echo $light ? "light" : "" ?>">
    <div class="inner">
        <a href="/" class="logo_container">
            <custom-svg src="./images/logo.svg" width="150"  height="60" alt="" class="logo"></custom-svg>
        </a>

        <div id="header_menu" class="header_menu">
            <div class="menu_close_btn_container">
                <i id="header_menu_close_btn" class="close_menu_btn bi bi-x"></i>
            </div>
            <ul class="menu_items">
                <li id="header_menu_item" class="menu_item">
                    <a href="#">Solutions <i class="bi bi-caret-down-fill"></i></a>
                    <div class="sub_menu_container">
                        <ul class="sub_menu">
                            <a href="/grant_writing.php" class="sub_menu_item">Grant Writing</a>
                            <a href="/web_development.php" class="sub_menu_item">Web Development</a>
                            <a href="/elearning.php" class="sub_menu_item">E Learning Service</a>
                        </ul>
                    </div>
                </li>
                <li id="header_menu_item" class="menu_item">
                    <a href="/our_impact.php">Our Impact</a>
                </li>
                <li id="header_menu_item" class="menu_item">
                    <a href="/about_us.php">About us</a>
                </li>
                <li id="header_menu_item" class="menu_item">
                    <a href="/blogs.php">Articles</a>
                </li>
                <a href="#" class="btn filled">Book a call</a>
            </ul>
        </div>
        <div class="header_btns">
            <a href="#" class="btn filled">Book a call</a>
            <button id="header_menu_expand_btn" class="menu_btn"><i class="bi bi-list"></i></button>
        </div>
    </div>
</header>
<script src="../scripts/components/header.js"></script>
<script src="../scripts/components/custom-svg.js"></script>