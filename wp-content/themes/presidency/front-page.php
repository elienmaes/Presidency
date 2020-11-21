<?php get_header(); ?>

<div class= "container">
    <h1>Dit is de homepage!</h1>
    <div>
        <?php
                while (have_posts()) {
                    the_post() ?>
                <a href ="<?php the_permalink()?>" class="post">
                    <h2><?php the_title() ?></h2>
                    <p> <?php echo wp_trim_words(get_the_content(), 5) ?></p>
                    <p> <?php the_content() ?></p>
                </a>
                <?php
                }
            ?>
    </div>
    <div>
        <?php wp_get_archives() ?>
    </div>
    <div>
        <a class ="btn" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Bekijk alle posts</a>
        <a class ="btn" href="<?php echo site_url('blog'); ?>">Naar de blog pagina</a>
    </div>
</div>

<div class="bg-white">
    <div class="container">
        <?php if (have_rows('row')) {
                while (have_rows('row')) {
                    the_row();

                    $image= get_sub_field('image');
                    $title= get_sub_field('title');
                    $desc= get_sub_field('description');
                    $align= get_sub_field('align'); ?>

                <div class="row <?php echo $align ?>">
                    <?php if (!empty($image)) { ?>
                    <img
                    class="w-full"
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_url($image['alt']); ?>" />
                    <?php
                    } ?>

                    <div>
                        <?php if ($title) {
                        echo '<h2>'. $title . '</h2>';
                    } ?>
                    </div>
                    <div>
                        <?php if ($desc) {
                        echo '<p>'. $desc . '</p>';
                    } ?>
                    </div>
              <?php
                }
            }?>
    </div>
</div>
<?php get_footer(); ?>
