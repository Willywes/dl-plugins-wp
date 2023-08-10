<div class="top-holder scrolled">
    <div class="container container-big position-relative" >
        <div class="py-4 position-md-absolute">
            <div class="row">
                <div class="col-auto d-flex align-items-center d-none d-md-flex">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo-desktop ">
                        <img style="height: 54px" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php echo get_site_option('blogname') ?>">
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center d-flex d-md-none">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo-mobile ">
                        <img style="height: 39px" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="<?php echo get_site_option('blogname') ?>">
                    </a>
                    <a href="<?php echo get_home_url(); ?>" class="logo logo-mobile-contrast">
                        <img style="height: 39px" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark-contrast.png" alt="<?php echo get_site_option('blogname') ?>">
                    </a>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="my-auto w-100">
                        <div class="overlay"></div>
                        <div id="hamburger"
                             class="right relative clearfix menu-trigger menu-right-button right transition-slower">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </div>
                        <div class="nav-primary-holder">
                            <div class="menu-standard">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-primary',
                                        'menu_id'        => 'menu-primary',
                                        'menu_class'     => 'menu-primary',
                                        'container'      => false,
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('scroll', function () {
        const topHolder = document.querySelector('.top-holder');
        const top = window.scrollY;
        if (top === 0) {
            topHolder.classList.remove('scrolled');
        } else {
            topHolder.classList.add('scrolled');
        }
    });
</script>
