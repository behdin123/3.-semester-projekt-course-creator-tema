<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php while(have_posts()) : the_post() ?>
    <div class="navbar" id="navigation">
        <div class="logo">
            <a href="https://www.behdin.digital/"><img alt="Viking life saving equipment logo" class="logo-img"
                    src=" <?php the_field("logo") ?>" /></a>
        </div>

        <div class="justify">
            <div class="navbar-links">
                <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
                <div class="navbar-others">
                    <button class="btn btn-dark h-header header-text rounded-0 mx-1 login-btn"> Log in </button>
                    <button class="btn btn-primary h-header header-text rounded-0 mx-1 SignUp-btn"> Sign up </button>
                </div>
            </div>
        </div>

        <div class="toggel-btn">
            <img class="icon toggle-menu" src=" <?php the_field("hamburger_menu") ?>" width="23px" height="23px">
        </div>
    </div>
    <?php endwhile; ?>