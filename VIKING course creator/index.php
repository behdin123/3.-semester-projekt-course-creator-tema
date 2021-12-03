<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>

<!-- Banner sektion starts here -->
<!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->

<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
            <stop offset="0" stop-color="#fff"></stop>
            <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
            <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0"
                style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>

<div class="banner" id="jssor_1"
    style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">

    <!-- Loading Screen -->
    <div class="banner-img" data-u="slides"
        style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        <div style="background-color:#d3890e;">
            <img alt="E-learning in office" data-u="image" data-src="<?php the_field("img_1") ?>" />
            <div data-ts="flat" data-p="275" data-po="40% 50%"
                style="left:100px;top:110px;width:925px;height:300px;position:absolute;">
                <div class="first-banner-text" data-to="50% 50%" data-t="0"
                    style="left:50px;top:965px;width:925px;height:100px;position:absolute;color:#efefef;font-family:'Open Sans',sans-serif;font-size:36px;font-weight:900;text-shadow: 3px 3px 7px black;bottom:50px;">
                    <h1><?php the_field("img_1_text_") ?>
                </div>
                </h1>
            </div>
        </div>
        <div>
            <img alt="E-learning on sea" data-u="image" data-src="<?php the_field("img_2") ?>" />
            <div data-ts="flat" data-p="540" data-po="40% 50%"
                style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6"
                    style="left:534px;top:700px;width:900px;height:500px;position:absolute;">
                    <div viewbox="0 0 800 100" width="800" height="100" data-t="9"
                        style="color:#efefef;left:40px;top:155px;display:block;position:absolute;text-shadow: 5px 5px 8px black;font-family:'Open Sans',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <h2 text-anchor="middle" x="400" y="230">
                            <?php the_field("img_2_text_") ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img alt="Practical training by employess on sea" data-u="image" data-src="<?php the_field("img_3") ?>" />
            <div data-ts="flat" data-p="1080" style="left:80px;top:0px;width:1600px;height:560px;position:absolute;">
                <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                    style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                </svg>
                <div viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                    style="color:#efefef;text-shadow: 2px 2px 5px black;left:-800px;top:52px;display:block;position:absolute;font-family:'Open Sans',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                    <h2 text-anchor="middle" x="400" y="72"><?php the_field("img_3_text_") ?>
                    </h2>
                </div>
                <div viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                    style="color:#efefef;text-shadow: 2px 2px 5px black;left:1600px;top:153px;display:block;position:absolute;font-family:'Open Sans',sans-serif;font-size:30px;font-weight:900;overflow:visible;">
                    <h2 style="width:553px;margin-top:70px;" text-anchor="middle" x="400" y="72">
                        <?php the_field("img_3_text_-2") ?>
                    </h2>
                </div>
            </div>
        </div>

    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;"></a>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1"
        data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
        data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2"
        data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>

<!-- Banner sektion ends here -->

<!-- Back to top starts here -->

<?php get_template_part("template-parts/Back-to-top") ?>

<!-- Back to top ends here -->

<!-- Course creator - first sektion starts here -->

<div class="container first-sektion flex-direction bg-color">
    <div class="txt h1 h2 txt-box">
        <div>
            <h3><?php the_field("sub-titel") ?></h3>
            <h2><?php the_field("titel") ?></h2>
            <p><?php the_field("text") ?><br></p>
            <p class="hided-text"><?php the_field("text-1.2") ?><br></p>
            <b id="see-more" class="see-more">see more</b>
        </div>
        <div class="btn-box">
            <a href="/VIKING/e-learning-software"><button class="btn cta-btn">Buy now</button></a>
        </div>
    </div>

    <div class="sektion-image image"><img src=" <?php the_field("image") ?>" alt="Course creator usage in office by a employee" width="100%" height="auto"></div>
</div>

<!-- Course creator - first sektion ends here -->

<!-- Video - sektion starts here -->

<div class="video-div">
    <?php the_content() ?>
</div>

<!-- Video - sektion ends here -->


<!-- Benefits - sektion starts here -->

<div id="benefit" class="contain first-mode">
    <div class="benefits-title">
        <h2><?php the_field("title") ?></h2>
    </div>
    <div class="informations h1">

        <div class="informations">
            <?php
         $args = array(
            "meta_key" => "order",
            "orderby" => "meta_value_num",
            "order" => "ASC",
            "post_type" => "benefit")
        ?>
            <?php $query = new WP_Query($args) ?>

            <?php while($query->have_posts()) : $query->the_post(); ?>

            <div class="info">
                <div class="info-titel">
                    <h3><?php the_title() ?></h3>
                </div>
                <img src=" <?php the_field("image") ?>" alt="benefit icons" width="100px" height="auto">
                <?php the_content() ?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Benefits - sektion ends here -->

<!-- Easy and steady synchronization - sektion starts here -->

<div class="container first-sektion flex-direction">
    <div class="txt h1 h2 txt-box">
        <div>
            <h2><?php the_field("titel-2") ?></h2>
            <p><?php the_field("text-2") ?><br></p>
            <p><?php the_field("text-2-2") ?><br></p>
            <p><?php the_field("text-2-3") ?><br></p>
        </div>
    </div>
    <div class="sektion-image image"><img src=" <?php the_field("image-2") ?>" alt="E-learning on sea by employee" width="100%" height="auto"></div>
</div>

<!-- Easy and steady synchronization - sektion ends here -->


<!-- SOME - sektion starts here -->
<?php get_template_part("template-parts/SOME") ?>
<!-- SOME - sektion ends here -->

<?php endwhile; ?>



<!--Login modal-->
<?php get_template_part("template-parts/users/log-in") ?>
<!--Login modal-->

<!--Sign up modal-->
<?php get_template_part("template-parts/users/sign-up") ?>
<!--Sign up modal-->


<?php get_footer(); ?>