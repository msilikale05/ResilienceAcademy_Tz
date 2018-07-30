<?php
/**
 * The sidebar containing the main widget area
 *
 * 
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-12  col-sm-12  blog-wrap">
<div class="text-center">
<div id="sidebar-primary" class="widget-area" role="complementary">
    <div class="panel-body">
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
  </div>
</div><!-- #secondary -->
