
<?php

// function showNameAndJob($name= "Elien", $job="student")
// {
//     echo "ik ben $name en ik ben $job";
// }

// showNameAndJob();
?>
<?php get_header() ?>
    <div>
        <?php
            while (have_posts()) {
                the_post() ?>
              <div class="post">
                <h2><?php the_title() ?></h2>
                <p> <?php the_content() ?></p>
              </div>
              <hr/>
            <?php
            }
        ?>
    </div>
<?php get_footer() ?>