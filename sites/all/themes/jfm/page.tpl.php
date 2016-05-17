<div class="main-body">
    <div class="container">
        <div class="row">
            <div class="main-page">

                <aside class="main-navigation">
                    <div class="main-menu">

                        <div class="menu-container">
                            <div class="block-keep-ratio block-keep-ratio-2-1 block-width-full home">
                                <a href="<?php print $front_page; ?>" class="block-keep-ratio__content  main-menu-link">
                                        <span class="main-menu-link-text">
                                        </span>
                                </a>
                            </div>
                        </div>

                        <div class="menu-container">
                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">
                                <a href="#"
                                   class="main-menu-link about block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-user fa-4x main-menu-link-icon"></i>
                                    OM MARKETIPS
                                </a>
                            </div>

                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                <a href="#"
                                   class="main-menu-link contact block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-star fa-4x main-menu-link-icon"></i>
                                    KOM GODT I GANG
                                </a>
                            </div>
                        </div>

                        <h1 class="focus text-center text-primary">Kategorier</h1>


                        <div class="menu-container">
                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">
                                <a href="<?php print $front_page; ?>sociale-medier"
                                   class="main-menu-link facebook block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-facebook-official fa-4x main-menu-link-icon"></i>
                                    Sociale medier
                                </a>
                            </div>

                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                <a href="<?php print $front_page; ?>google-adwords"
                                   class="main-menu-link google block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-google fa-4x main-menu-link-icon"></i>
                                    Google AdWords
                                </a>
                            </div>

                        </div>
                        <div class="menu-container">
                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">
                                <a href="<?php print $front_page; ?>seo"
                                   class="main-menu-link seo block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-search-plus fa-4x main-menu-link-icon"></i>
                                    SEO
                                </a>
                            </div>

                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                <a href="<?php print $front_page; ?>email-marketing"
                                   class="main-menu-link email-marketing block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-envelope-o fa-4x main-menu-link-icon"></i>
                                    E-mail marketing
                                </a>
                            </div>
                        </div>
                        <div class="menu-container">
                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">
                                <a href="<?php print $front_page; ?>affiliate-marketing"
                                   class="main-menu-link affiliate block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-line-chart fa-4x main-menu-link-icon"></i>
                                    Affiliate marketing
                                </a>
                            </div>

                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                <a href="<?php print $front_page; ?>bannerannoncering"
                                   class="main-menu-link bannerannoncering block-keep-ratio__content flexbox-center">
                                    <i class="fa fa-map-signs fa-4x main-menu-link-icon"></i>
                                    Bannerannoncering
                                </a>
                            </div>
                        </div>

                        <h1 class="focus text-center text-primary">Nyhedsbrev</h1>

                        <div class="menu-container">
                            <div
                                class="block-keep-ratio  block-keep-ratio-1-1  block-width-full  contact-main">
                                <div class="newsletter block-keep-ratio__content">
                                    <p>Nu har du muligheden for at være på forkant!</p>
                                    <p>Tilmeld dig vores nyhedsbrev for at
                                        modtage <strong>unikke</strong> tips og tricks målrettet <strong>din
                                            virksomhed!</strong></p>
                                    <br/>
                                    <form action="#">
                                        <input type="email" placeholder="E-mail" tabindex="1" class="form-control"/><br/>
                                        <input type="submit" value="Tilmeld" class="btn btn-primary btn-block"/>
                                    </form>

                                </div>
                            </div>

                            <div class="menu-container">
                                <?php print render($page['sidebar_first']); ?>
                            </div>


                        </div> <!-- main-menu -->
                </aside> <!-- main-navigation -->

                <div class="content-main">

                    <?php if (drupal_is_front_page()) : ?>
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="banner-main-home">
                                    <div class="banner-main-home-text">
                                        <div class="heading">
                                            <h1>Marketips</h1>
                                            <p class="text-uppercase">Vi sørger for at du bliver set</p>
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate
                                            velit a
                                            velit consectetur luctus. Etiam in malesuada turpis. Praesent at accumsan
                                            elit.
                                            Duis viverra neque eu odio lacinia semper. Sed id lectus lectus. Vivamus
                                            hendrerit vehicula ipsum in tincidunt.
                                            </p>
                                            <button type="button" class="">LÆS MERE OM HVEM VI ER</button>
                                        </div>
                                    </div>
                                    <img src="images/home-img-1.png" alt="Image" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        <?php print render($page['blog_content_frontpage']); ?>
                    <?php endif; ?>

                    <?php if (!drupal_is_front_page()) : ?>
                        <?php print render($page['content']); ?>
                    <?php endif; ?>

                    <div class="row margin-t-30">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="box bottom-main">
                                <?php print render($page['testimonials']); ?>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- .content-main -->
            </div> <!-- .main-page -->
        </div> <!-- .row -->
        <footer class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                <?php if ($page['footer']): ?>
                    <?php print render($page['footer']); ?>
                <?php endif; ?>
            </div>
        </footer>  <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .main-body -->