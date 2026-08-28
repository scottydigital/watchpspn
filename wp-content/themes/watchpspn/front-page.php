<?php
/**
 * Front page template for Watch PSPN.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<main class="pspn-splash">
    <div class="pspn-overlay"></div>

    <div class="pspn-content">
        <img class="pspn-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pspn-logo.svg' ); ?>"
    alt="PSPN">
        <p class="pspn-tagline">The Worldwide Leader in Puppet Sports</p>

        <nav class="pspn-socials" aria-label="Watch PSPN social links">
    <a href="https://www.instagram.com/watchpspn/" target="_blank" rel="noopener noreferrer" aria-label="Watch PSPN on Instagram">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/instagram.svg' ); ?>" alt="">
    </a>

    <a href="https://www.tiktok.com/@watchpspn" target="_blank" rel="noopener noreferrer" aria-label="Watch PSPN on TikTok">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/tiktok.svg' ); ?>" alt="">
    </a>

    <a href="https://x.com/watchpspn" target="_blank" rel="noopener noreferrer" aria-label="Watch PSPN on X">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/x.svg' ); ?>" alt="">
    </a>

    <a href="https://www.youtube.com/@watchpspn" target="_blank" rel="noopener noreferrer" aria-label="Watch PSPN on YouTube">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/youtube.svg' ); ?>" alt="">
    </a>
</nav>

<p class="pspn-copyright">
            &copy; <?php echo esc_html( date( 'Y' ) ); ?> PSPN. All Rights Probably Reserved.
        </p>
    </div>
</main>

<?php wp_footer(); ?>
</body>
</html>