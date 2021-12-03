<?php get_header(); ?>

<header id="banner" class="overlay" style="background-image: url(<?php the_field("img_1") ?>);">
    <div class="overlay-item ">
        <div class="product-information-container product-container overlay-item">
            <div class="row mx-0 h-100 text-white width-auto">
                <div class="col-md-7 banner-center">
                    <h2 itemprop="name"><?php the_field("titel-buy-now") ?></h2>
                </div>

                <div class="offset-md-1 col-md-4 product-image">

                    <div class="position-absolute bottom-0"><img itemprop="image" src=" <?php the_field("course_creator_image") ?>" alt="Course creator softwear buy now" width="100%">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<!-- Back to top starts here -->

<div class="back-to-top-btn-div">
    <a href="#banner">
        <div class="back-to-top-btn">
            <img src="<?php the_field("back_to_top_icon") ?>" alt="back to top button">
        </div>
    </a>
</div>

<!-- Back to top ends here -->

<div class="product-information-container">
    <div class="information-about-protuct row mx-0 h-100 width-auto">
        <div class="product-description-text col-md-7 col-xs-12 mt-4 mb-5">
            <div itemprop="description">
                <h5 class="py-3"><?php the_field("titel-2") ?></h5>
                <h6><?php the_field("sub-titel-2") ?></h6>
                <p><?php the_field("text-2") ?></p>
                <h6><?php the_field("title") ?></h6>
                <p><?php the_field("text-2-2") ?></p>
                <h6><?php the_field("img_1_text_") ?></h6>
                <p class="text-prewrap"><?php the_field("text-2-3") ?></p>
            </div>
        </div>
        <div class=" offset-md-1 col-md-4 col-xs-12 px-0 mb-5 bg-white">
            <div class="mx-5 mt-4">
                <div>
                    <h5 class="py-3"><?php the_field("hoved-titel-info") ?></h5>
                    <div>
                        <h6><?php the_field("usage_location") ?></h6>
                        <p><?php the_field("online_&_offline") ?></p>
                    </div>
                    <div>
                        <h6><?php the_field("language") ?></h6>
                        <p>
                            <span"> <?php the_field("english_danish_germany_spanish") ?> </span>
                        </p>
                    </div>
                    <div>
                        <h6><?php the_field("standard") ?></h6>
                        <p><?php the_field("viking") ?></p>
                    </div>
                </div>
                <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope="" class="mt-4 mb-5">
                    <div>
                        <h6><?php the_field("license") ?></h6>
                        <p class="mb-0"> <?php the_field("access_lifetime") ?> </p> 
                        <p class="price-md pt-4"><span itemprop="priceCurrency" content="EUR"></span><span
                                itemprop="price" content="35"> <?php the_field("price") ?> </span></p>
                    </div>
                    <button class=" page-buy-now-cta-btn btn btn-lg btn-primary rounded-0 w-100 mb-2 py-3">Buy now </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- SOME - sektion starts here -->
<?php get_template_part("template-parts/SOME") ?>
<!-- SOME - sektion ends here -->

<!--Login modal-->
<?php get_template_part("template-parts/users/log-in") ?>
<!--Login modal-->

<!--Sign up modal-->
<?php get_template_part("template-parts/users/sign-up") ?>
<!--Sign up modal-->

<!-- SOME - sektion ends here -->
<?php get_footer(); ?>