<?php do_action( 'avada_after_main_content' ); ?><!-- fusion-row -->
<!-- #main -->
<?php do_action( 'avada_after_main_container' ); ?><?php global $social_icons; ?><?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?><?php endif; ?><?php
            /**
             * Only include the footer
             */
            ?><?php if ( ! is_page_template( 'blank.php' ) ) : ?><?php $footer_parallax_class = ( 'footer_parallax_effect' == Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="fusion-footer&lt;?php echo $footer_parallax_class; ?&gt;">
		<?php
		                    /**
		                     * Check if the footer widget area should be displayed
		                     */
		                    ?><?php if ( ( Avada()->settings->get( 'footer_widgets' ) && 'no' != get_post_meta( $c_pageID, 'pyre_display_footer', true ) ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' == get_post_meta( $c_pageID, 'pyre_display_footer', true ) ) ) : ?><?php $footer_widget_area_center_class = ( Avada()->settings->get( 'footer_widgets_center_content' ) ) ? ' fusion-footer-widget-area-center' : ''; ?>
		<footer class="fusion-footer-widget-area fusion-widget-area&lt;?php echo $footer_widget_area_center_class; ?&gt;">
			<div class="fusion-row">
				<div class="fusion-columns fusion-columns-&lt;?php echo Avada()-&gt;settings-&gt;get( 'footer_widgets_columns' ); ?&gt; fusion-widget-area">
					<?php
					                                    /**
					                                     * Check the column width based on the amount of columns chosen in Theme Options
					                                     */
					                                    $column_width = ( '5' == Avada()->settings->get( 'footer_widgets_columns' ) ) ? 2 : 12 / Avada()->settings->get( 'footer_widgets_columns' );
					                                    ?><?php
					                                    /**
					                                     * Render as many widget columns as have been chosen in Theme Options
					                                     */
					                                    ?><?php for ( $i = 1; $i < 7; $i++ ) : ?><?php if ( $i <= Avada()->settings->get( 'footer_widgets_columns' ) ) : ?>
					<div class="fusion-column&lt;?php echo ( $i == Avada()-&gt;settings-&gt;get( 'footer_widgets_columns' ) ) ? ' fusion-column-last' : ''; ?&gt; col-lg-&lt;?php echo $column_width; ?&gt; col-md-&lt;?php echo $column_width; ?&gt; col-sm-&lt;?php echo $column_width; ?&gt;">
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'avada-footer-widget-' . $i ) ) : ?><?php
						                                                    /**
						                                                     * All is good, dynamic_sidebar() already called the rendering
						                                                     */
						                                                    ?><?php endif; ?>
					</div><?php endif; ?><?php endfor; ?>
					<div class="fusion-clearfix"></div>
				</div><!-- fusion-columns -->
			</div><!-- fusion-row -->
		</footer><!-- fusion-footer-widget-area -->
		<?php endif; // end footer wigets check ?><?php
		                    /**
		                     * Check if the footer copyright area should be displayed
		                     */
		                    ?><?php// if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' != get_post_meta( $c_pageID, 'pyre_display_copyright', true ) ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' == get_post_meta( $c_pageID, 'pyre_display_copyright', true ) ) ) : ?><?php// $footer_copyright_center_class = ( Avada()->settings->get( 'footer_copyright_center_content' ) ) ? ' fusion-footer-copyright-center' : ''; ?><!--                        <footer id="footer" class="fusion-footer-copyright-area<?php echo $footer_copyright_center_class; ?>"> -->
		<footer class="uams-footer" id="footer" role="contentinfo">
			<a class="footer-wordmark" href="http://www.uams.edu">University of Arkansas for Medical Sciences</a>
			<h4>Connect with us:</h4>
			<nav aria-label="social networking" role="navigation">
				<ul class="footer-social">
					<li>
						<a class="facebook" href="http://facebook.com/uamshealth">Facebook</a>
					</li>
					<li>
						<a class="twitter" href="http://twitter.com/uamshealth">Twitter</a>
					</li>
					<li>
						<a class="instagram" href="http://instagram.com/uamshealth">Instagram</a>
					</li>
					<li>
						<a class="youtube" href="https://www.youtube.com/user/UAMSHealth">YouTube</a>
					</li>
					<li>
						<a class="linkedin" href="https://www.linkedin.com/company/uams">LinkedIn</a>
					</li>
					<li>
						<a class="pinterest" href="http://pinterest.com/uamshealth">Pinterest</a>
					</li><!--                 <li><a class="google" href="https://plus.google.com/+">Google+</a></li> -->
				</ul>
			</nav>
			<nav aria-label="footer links" role="navigation">
				<ul class="footer-links">
					<!--                 <li><a href="http://www.uams.edu/accessibility">Accessibility</a></li> -->
					<li>
						<a href="http://uamshealth.com/disclaimer/">Disclaimer</a>
					</li>
					<li>
						<a href="http://jobs.uams.edu">Jobs</a>
					</li>
					<li>
						<a href="http://uamshealth.com/privacy/#legal">Copyright Statement</a>
					</li>
					<li>
						<a href="http://uamshealth.com/privacy/">Privacy</a>
					</li>
					<li>
						<a href="http://uamshealth.com/termsofuse/">Terms</a>
					</li>
				</ul>
			</nav>
			<p>&copy; <?php echo date("Y"); ?> University of Arkansas for Medical Sciences | Little Rock, AR</p>
		</footer><?php endif; // end footer copyright area check ?>
	</div><!-- fusion-footer -->
	<?php// endif; // end is not blank page check ?><!-- wrapper -->
	<?php
	        /**
	         * Check if boxed side header layout is used; if so close the #boxed-wrapper container
	         */
	        ?><?php if ( ( ( 'Boxed' == Avada()->settings->get( 'layout' ) && 'default' == get_post_meta( $c_pageID, 'pyre_page_bg_layout', true ) ) || 'boxed' == get_post_meta( $c_pageID, 'pyre_page_bg_layout', true ) ) && 'Top' != Avada()->settings->get( 'header_position' ) ) : ?><!-- #boxed-wrapper -->
	<?php endif; ?><a class="fusion-one-page-text-link fusion-page-load-link"></a> <!-- W3TC-include-js-head -->
	 <?php wp_footer(); ?> <?php
	        /**
	         * Echo the scripts added to the "before </body>" field in Theme Options
	         */
	        echo Avada()->settings->get( 'space_body' );
	        ?> <!--[if lte IE 8]>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.js"></script>
        <![endif]-->
</body>
</html>