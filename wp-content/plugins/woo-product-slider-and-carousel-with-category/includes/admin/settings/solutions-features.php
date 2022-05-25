<?php
/**
 * Plugin Solutions & Features Page
 *
 * @package Product Slider and Carousel with Category for WooCommerce
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Taking some variables
$popup_add_link = add_query_arg( array( 'post_type' =>WCPSCWC_POST_TYPE ), admin_url( 'post-new.php' ) );
?>

<div id="wrap">
	<div class="wcpscwc-sf-wrap">
		<div class="wcpscwc-sf-inr">
			<!-- Start - Welcome Box -->
			<div class="wcpscwc-sf-welcome-wrap">
				<div class="wcpscwc-sf-welcome-inr">
					<div class="wcpscwc-sf-welcome-left">
						<div class="wcpscwc-sf-subtitle">Getting Started</div>
						<h2 class="wcpscwc-sf-title">Welcome to Product Slider</h2>
						<p class="wcpscwc-sf-content">Slide your WooCommerce Products, Best Selling and Featured Products. You can easily display slider in your theme using short codes.</p>
						<a href="<?php echo esc_url( $popup_add_link ); ?>" class="wcpscwc-sf-btn">Launch Product Slider</a></br> <b>OR</b> </br><a href="<?php echo WCPSCWC_PLUGIN_LINK_WELCOME; ?>"  target="_blank" class="wcpscwc-sf-btn wcpscwc-sf-btn-orange">Grab Now Pro Features</a>
						<div class="wcpscwc-rc-wrap">
							<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
								<div class="wcpscwc-rc-icon">
									<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
								</div>
								<div class="wcpscwc-rc-cont">
									<h3>14 Days Refund Policy. 0 risk to you.</h3>
									<p>14-day No Question Asked Refund Guarantee</p>
								</div>
							</div>
							<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
								<div class="wcpscwc-rc-icon">
									<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
								</div>
								<div class="wcpscwc-rc-cont">
									<h3>Include Done-For-You Product Slider Setup</h3>
									<p>Our  experts team will design 1 free Product Slider for you as per your need.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wcpscwc-sf-welcome-right">
						<div class="wcpscwc-sf-fp-ttl">Free vs Pro</div>
						<div class="wcpscwc-sf-fp-box-wrp">
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wcpscwc-sf-box-ttl">1 Designs for Product Grid</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wcpscwc-sf-box-ttl">1 Designs for Product Slider</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-block-default"></i>
								<div class="wcpscwc-sf-box-ttl">Gutenbreg Block Support</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wcpscwc-sf-box-ttl">3 – Product Type of Grid and Slider(Product, Featured, Bestselling)</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-category"></i>
								<div class="wcpscwc-sf-box-ttl">Display Slides for Particular Categories</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box">
								<i class="dashicons dashicons-move"></i>
								<div class="wcpscwc-sf-box-ttl">Order and Orderby Parameter</div>
								<div class="wcpscwc-sf-tag">Free</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wcpscwc-sf-box-ttl">6 – Product Type of Grid and Slider(products, featured, bestselling, rating, regular_price, sale_price)</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-tagcloud"></i>
								<div class="wcpscwc-sf-box-ttl">2 Design for Product Widget(Grid, Slider)</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-layout"></i>
								<div class="wcpscwc-sf-box-ttl">Elementor, Beaver, SiteOrigin, and VC Page Builder Support</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-art"></i>
								<div class="wcpscwc-sf-box-ttl">15+ Designs</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-html"></i>
								<div class="wcpscwc-sf-box-ttl">WP Templating Features </div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-format-image"></i>
								<div class="wcpscwc-sf-box-ttl">Image Lazyload for Slider</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-align-center"></i>
								<div class="wcpscwc-sf-box-ttl">Center Mode</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-shortcode"></i>
								<div class="wcpscwc-sf-box-ttl">Shortcode Generator</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
							<div class="wcpscwc-sf-fp-box wcpscwc-sf-pro-box">
								<i class="dashicons dashicons-admin-links"></i>
								<div class="wcpscwc-sf-box-ttl">Link Target</div>
								<div class="wcpscwc-sf-tag">Pro</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Welcome Box -->

			<!-- Start - Product Slider and Carousel with Category for WooCommerce - Features -->
			<div class="wcpscwc-features-section">
				<div class="wcpscwc-center wcpscwc-features-ttl">
					<h2 class="wcpscwc-sf-ttl">Powerful Pro Features, Simplified</h2>
				</div>
				<div class="wcpscwc-features-section-inr">
					<div class="wcpscwc-features-box-wrap">
						<ul class="wcpscwc-features-box-grid">
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-grid.png" /></div>
							Woo Product Grid View</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Product Slider View</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-centermode.png" /></div>
							Woo Product with Centermode</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Featured Product</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Best Selling Product</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Sale Price Product</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Regular Price Product</li>
							<li>
							<div class="wcpscwc-popup-icon"><img src="<?php echo WCPSCWC_URL; ?>assets/images/popup-icon/woo-carousel.png" /></div>
							Woo Rated Product Slider</li>
						</ul>
					</div>
					<a href="<?php echo WCPSCWC_PLUGIN_LINK_WELCOME; ?>" target="_blank" class="wcpscwc-sf-btn wcpscwc-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Grab Now Pro Features</a>
					<div class="wcpscwc-rc-wrap">
						<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
							<div class="wcpscwc-rc-icon">
								<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
							</div>
							<div class="wcpscwc-rc-cont">
								<h3>14 Days Refund Policy. 0 risk to you.</h3>
								<p>14-day No Question Asked Refund Guarantee</p>
							</div>
						</div>
						<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
							<div class="wcpscwc-rc-icon">
								<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
							</div>
							<div class="wcpscwc-rc-cont">
								<h3>Include Done-For-You Product Slider Setup</h3>
								<p>Our  experts team will design 1 free Product Slider for you as per your need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Logo Showcase - Features -->

			<!-- Start - Testimonial Section -->
			<div class="wcpscwc-sf-testimonial-wrap">
				<div class="wcpscwc-center wcpscwc-features-ttl">
					<h2 class="wcpscwc-sf-ttl">Looking for a Reason to Use Product Slider? Here are 40+...</h2>
				</div>
				<div class="wcpscwc-testimonial-section-inr">
					<div class="wcpscwc-testimonial-box-wrap">
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">Excellent</h3>
							<div class="wcpscwc-testimonial-desc">The only free plugin that allows the products being filtered by categories, and have a awesome support.</div>
							<div class="wcpscwc-testimonial-clnt">@discopegre</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">Great Plugin, easy to use</h3>
							<div class="wcpscwc-testimonial-desc">Thanks for this, great plugin, easy to use with shortcodes, working perfectly and not breaking my custom css for products! </div>
							<div class="wcpscwc-testimonial-clnt">@alizotiwebsolutions</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">What I need! and great support</h3>
							<div class="wcpscwc-testimonial-desc">I had try some similiar plugin for this carousel, but this one is the best. and the support is nice + fast. thank you</div>
							<div class="wcpscwc-testimonial-clnt">@mseka</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">best service</h3>
							<div class="wcpscwc-testimonial-desc">very good and helpful service very happy to use the plugin </div>
							<div class="wcpscwc-testimonial-clnt">@vidhi123</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">Great Plug in and excellent support</h3>
							<div class="wcpscwc-testimonial-desc">Great Plug in and excellent support, amazing support</div>
							<div class="wcpscwc-testimonial-clnt">@mitchelly</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wcpscwc-testimonial-box-grid">
							<h3 class="wcpscwc-testimonial-title">easy to use and great support</h3>
							<div class="wcpscwc-testimonial-desc">It is very easy to add sliders and customise them. Support is helpful. You can’t ask more for a free plugin!</div>
							<div class="wcpscwc-testimonial-clnt">@francesca111</div>
							<div class="wcpscwc-testimonial-rating"><img src="<?php echo WCPSCWC_URL; ?>assets/images/rating.png" /></div>
						</div>
					</div>
					<a href="https://wordpress.org/support/plugin/woo-product-slider-and-carousel-with-category/reviews/?filter=5" target="_blank" class="wcpscwc-sf-btn"><span class="dashicons dashicons-star-filled"></span> View All Reviews</a> OR <a href="<?php echo WCPSCWC_PLUGIN_LINK_WELCOME; ?>"  target="_blank" class="wcpscwc-sf-btn wcpscwc-sf-btn-orange">Grab Now Pro Features</a>
					<div class="wcpscwc-rc-wrap">
						<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
							<div class="wcpscwc-rc-icon">
								<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
							</div>
							<div class="wcpscwc-rc-cont">
								<h3>14 Days Refund Policy. 0 risk to you.</h3>
								<p>14-day No Question Asked Refund Guarantee</p>
							</div>
						</div>
						<div class="wcpscwc-rc-inr wcpscwc-rc-bg-box">
							<div class="wcpscwc-rc-icon">
								<img src="<?php echo esc_url( WCPSCWC_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
							</div>
							<div class="wcpscwc-rc-cont">
								<h3>Include Done-For-You Product Slider Setup</h3>
								<p>Our  experts team will design 1 free Product Slider for you as per your need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Testimonial Section -->
		</div>
	</div><!-- end .wcpscwc-sf-wrap -->
</div><!-- end .wrap -->