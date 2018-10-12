<?php echo get_option('sidebar'); ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) ?>