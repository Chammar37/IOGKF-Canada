<?php get_header();?>

<div class="container pt-5 pb-5">

    <div class="row">

        <!-- <div class="col">
            Left side
        </div> -->

        <h1> <?php the_title();?> </h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

        <!-- <div class="col">
            Right Side
        </div> -->


    </div>

</div>



<?php get_footer();?>