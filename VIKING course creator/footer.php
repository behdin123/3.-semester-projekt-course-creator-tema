<footer>
    <?php while(have_posts()) : the_post() ?>

    <div class="container-footer pt-4">
        <div class="row">
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("first-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-1") ?>"><?php the_field("link-1-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-2") ?>"><?php the_field("link-2-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-3") ?>"><?php the_field("link-3-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-4") ?>"><?php the_field("link-4-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-5") ?>"><?php the_field("link-5-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("second-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-1") ?>"><?php the_field("second-link-1-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-2") ?>"><?php the_field("second-link-2-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-3") ?>"><?php the_field("second-link-3-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("third-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("third-link-1") ?>"><?php the_field("third-link-1-text") ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("fourth-titel") ?></h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("fourth-link-1") ?>"><?php the_field("fourth-link-1-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <!---->
            <div class="col-md"><a href="https://www.opito.com/"><img style="width:80px;heghit:auto;" alt="opito"
                        src="<?php the_field("logo-img") ?>"></a>
            </div>
        </div>
    </div>

    <hr class="w-50 mt-5 mb-4">
    <div class="footer-copyright text-center pb-4">
        <div itemtype="http://schema.org/Organization" class="container-footer-copyright"><a itemprop="url"
                href="https://www.viking-life.com"><img itemprop="logo" alt="logo"
                    src="<?php the_field("viking-logo-footer") ?>" height="88px"></a>
            <p itemprop="legalName" class="small pt-4">VIKING LIFE-SAVING EQUIPMENT A/S</p>
            <div class="small text-center"><span itemtype="http://schema.org/PostalAddress"><span
                        itemprop="streetAddress">Saedding Ringvej 13</span> - <span
                        itemprop="postalCode">6710</span><span itemprop="addressLocality">Esbjerg</span> - <span
                        itemprop="addressCountry">Denmark</span> - </span><a class="text-body small"
                    href="tel:+45 76 11 81 00"> Tel. <span itemprop="telephone">+45 76 11 81 00</span></a> - <a
                    class="text-body small" href="fax:+45 76 11 81 01"> Fax <span itemprop="faxNumber">+45 76 11 81
                        01</span></a> - <a class="text-body small" href="mailto:SafetyAcademy@VIKING-life.com"><span
                        itemprop="email">SafetyAcademy@VIKING-life.com</span></a> - CVR:15016213
            </div>
        </div>
    </div>
</footer>

<?php endwhile; ?>
<script type="text/javascript">
jssor_1_slider_init();
</script>
<?php wp_footer() ?>
</body>

</html>