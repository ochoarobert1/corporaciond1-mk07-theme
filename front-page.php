<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <div id="fullpage" class="page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <section class="first-section section">
                <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="img-fluid img-main-logo" />
                </div>
            </section>
            <?php $array_services = new WP_Query(array('post_type' => 'servicios', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date')); ?>
            <?php if ($array_services->have_posts()) : ?>
            <?php while ($array_services->have_posts()) : $array_services->the_post(); ?>
            <section class="section">
                <div class="wrapper">
                    <article class="container">
                        <div class="row no-gutters align-items-center">
                            <header class="service-title-container col-8">
                                <h3 class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                    <?php $text = get_post_meta(get_the_ID(), 'd1_service_title', true); ?>
                                    <?php foreach ($text as $piece) { ?>
                                    <span><?php echo $piece; ?></span>
                                    <?php } ?>
                                </h3>
                                <h2 class="d-block d-sm-block d-md-none d-lg-none d-xl-none"><?php the_title(); ?></h2>
                            </header>
                            <div class="service-info-container col-4">
                                <?php the_post_thumbnail('home_icon', array('class' => 'img-fluid')); ?>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <?php $page = get_page_by_path('inicio/home-seccion-1'); ?>
            <section class="section">
                <div class="wrapper">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="page-image-container col-8">
                                <?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="page-info-container col-4">
                                <?php echo apply_filters('the_content', $page->post_content); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $page = get_page_by_path('inicio/home-seccion-2'); ?>
            <section class="section">
                <div class="wrapper">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="page-image-container col-8">
                                <?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="page-info-container col-4">
                                <?php echo apply_filters('the_content', $page->post_content); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $page = get_page_by_path('inicio/home-seccion-3'); ?>
            <section class="section">
                <div class="wrapper">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="page-image-container page-full-image-container col-12">
                                <?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="col-8"></div>
                            <div class="page-info-container col-4">
                                <?php echo apply_filters('the_content', $page->post_content); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-clients">
                <div class="wrapper">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="clients-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2><?php _e('Clientes', 'corporaciond1'); ?></h2>
                                <div class="clients-slider-container owl-carousel">
                                    <?php $array_clients = new WP_Query(array('post_type' => 'clientes', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date')); ?>
                                    <?php if ($array_clients->have_posts()) : ?>
                                    <?php while ($array_clients->have_posts()) : $array_clients->the_post(); ?>
                                    <div class="clients-item">
                                        <div class="clients-wrapper">
                                            <?php the_post_thumbnail('home_clients', array('class' => 'img-fluid')); ?>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php wp_reset_query(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-footer">
                <div class="wrapper">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <?php if ( is_active_sidebar( 'footer_section' ) ) : ?>
                            <ul class="footer-item col-xl col-lg col-md col-sm col-12">
                                <?php dynamic_sidebar( 'footer_section' ); ?>
                            </ul>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'footer_section-2' ) ) : ?>
                            <ul class="footer-item col-xl col-lg col-md col-sm col-12">
                                <?php dynamic_sidebar( 'footer_section-2' ); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<script type="text/javascript">
    /* FRONTPAGE */
    jQuery(document).ready(function() {
        jQuery('#fullpage').fullpage({
            //Navegación
            menu: '#menu',
            anchors: ['firstPage', 'secondPage'],
            navigation: true,

            //Desplazamiento
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,

            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: false,

            fixedElements: '.the-header, .the-footer',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            parallax: false,
            parallaxOptions: {
                type: 'reveal',
                percentage: 62,
                property: 'translate'
            },

            //Selectores personalizados
            sectionSelector: '.section',
            slideSelector: '.slide',
            licenseKey: 'GNU GPL license v3'

        });
    });

</script>
<?php get_footer(); ?>
