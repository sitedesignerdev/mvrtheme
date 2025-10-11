<?php
/**
 * Author archive template
 */
get_header();
?>

<main class="min-h-screen">
  <!-- Hero Section -->
  <section class="relative py-20 bg-primary">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto px-4 text-center text-white">
      <div class="max-w-2xl mx-auto">
        <!-- Author Avatar -->
        <div class="w-24 h-24 bg-white rounded-full overflow-hidden mx-auto mb-6">
          <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'w-full h-full object-cover')); ?>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">
          Articles by: <?php echo get_the_author(); ?>
        </h1>
        
        <?php if (get_the_author_meta('description')) : ?>
          <p class="text-xl opacity-90"><?php echo get_the_author_meta('description'); ?></p>
        <?php endif; ?>
        
        <!-- Author Stats -->
        <div class="flex justify-center gap-6 mt-6 text-sm">
          <div class="text-center">
            <div class="text-2xl font-bold"><?php echo count_user_posts(get_the_author_meta('ID')); ?></div>
            <div class="opacity-80">Articles</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold"><?php echo get_the_author_meta('user_registered'); ?></div>
            <div class="opacity-80">Member Since</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rest of the content from archive.php -->
  <?php get_template_part('template-parts/archive-content'); ?>
</main>

<?php get_footer(); ?>