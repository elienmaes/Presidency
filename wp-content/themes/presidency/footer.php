<footer>
    <nav class="navigation">
            <?php wp_nav_menu(array(
                'menu' => 'header',
                'theme_location' => 'footer-nav'
            )) ?>
        </nav>
        <?php echo do_shortcode('[contact-form-7 id="69" title="Contact form 1"]') ?>
        <h1>Inschrijven op onze nieuwsbrief?</h1>
        <?php echo do_shortcode('[contact-form-7 id="76" title="newsletter form"]') ?>

        <?php if (is_active_sidebar('footer-form')) { ?>
            <aside class="widget-area" role="complementary">
                <?php dynamic_sidebar('footer-form'); ?>
            </aside>
        <?php } ?>
       
</footer>

</body>
</html>