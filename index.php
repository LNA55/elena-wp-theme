<?php get_header(); ?>

<?php get_header(); ?>

<?php if(get_theme_mod('bg_picture', true)) : ?>
  <?php $bg_picture =  get_theme_mod('bg_picture', esc_url(get_template_directory_uri() . '/images/fond-mochi1.png')); ?>
<?php endif; ?>

<!-- used to set the main background image -->
<div id="imageBackground" style="background-image:url(<?php echo $bg_picture; ?>)"></div>

<div class="container-fluid no-padding-xs">
  <div class="row no-margin-xs">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding-xs">
      <div class="frame">
        <?php if(get_theme_mod('avatar', true)) : ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('logo', esc_url(get_template_directory_uri() . '/images/logo-baramochis.png')); ?>" alt="" class="logo img-responsive"></a>
        <?php endif; ?>

         <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- Titre de la page -->
            <h1 class="SoustitrePage" href="#">
                <?php the_title(); ?>
              </h1>


           <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div> <!-- end frame -->

    </div> <!-- end columns -->
    
  </div> <!-- end row -->
</div> <!-- end container fluid -->

<?php get_footer(); ?>
