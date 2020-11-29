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
            <h2>Archives</h2>
                <?php wp_get_archives() ?>

            <h2>Categories</h2>
            <?php wp_list_categories() ?>

            <h2>Authors</h2>
            <?php wp_list_authors() ?>
    </div>

 De twee meest recente blog post met categorie "Nieuws"
        <?php
            $newsArticles = new WP_Query(array(
                'category_name' => 'news',
                'posts_per_page' => 2
            ));

            while ($newsArticles->have_posts()) {
                $newsArticles->the_post() ?>
                <div class="blog">
                    <h2>
                        <a  href="<?php the_permalink() ?>">
                            <?= the_title() ?>
                        </a>
                    </h2>
                </div>
            <?php
            } wp_reset_postdata(); ?>

            <a href="<?php echo get_category_link(get_cat_ID('news')); ?>">
                Nieuws
            </a>
        <hr/>

        <?php get_template_part('components/cards', null, array(
            'type' => 'event',
            ''
        )) ?>

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
                    <?php if (!empty($image)) {
                    echo wp_get_attachment_image($image, $size);
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
            <?php
           $loop= new WP_Query(array(
               'category_name' =>'scandals',
               'post_per_page' => 1
           ));

           while ($loop -> have_posts()) {
               $loop->the_post() ?>
               <div class="blog">
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    </a>
                </h2>
               </div>
          <?php
           }
           ?>
    </div>
</div>
<?php get_footer(); ?>