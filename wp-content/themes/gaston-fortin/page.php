<?php get_header(); ?>

<main class="container-portfolio">
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- Title -->
        <h1 class="mt-4"><?php the_title(); ?></h1>
        
        <!-- Post Content -->
        <?php the_content(); ?>

		<?php endwhile; else : ?>
            <p>Lo siento, no hemos encontrado ningún post.</p>
        <?php endif; ?>
      </div>
      
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  </main>
<?php get_footer(); ?>
