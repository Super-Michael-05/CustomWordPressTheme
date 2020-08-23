<?php
/* 
Template Name: Ota yhteyttä
*/
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">
    <h1><?php the_title();?></h1>

    <div class="row">
        <div class="col-lg-6">
            Tähän menee ota yhteyttä lomake.
        </div>
        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content');?>
        </div>
    </div>
</div>
</section>

<?php get_footer();?>