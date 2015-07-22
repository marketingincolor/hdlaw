<?php
/**
 * Custom display for Mobile Navigation.
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<div class="mobile-nav">
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1"><img class="hbg-ico" src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-hbg.png" />MENU</a>
			<div id="panel1" class="content">
				<ul class="small-block-grid-3">
					<li>
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-att.png" /></span>
						<span>Phone</span>

					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-wri.png" /></span>
						<span>Write Us</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/firm-profile' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-pro.png" /></span>
						<span>Firm<br />Profile</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/attorneys' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-att.png" /></span>
						<span>Attorneys</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/our-services' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-ser.png" /></span>
						<span>Our<br />Services</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/continuing-education' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-mob-ced.png" /></span>
						<span>Continuing<br />Education</span>
						</a>
					</li>
				</ul>
				<form method="get" id="searchform" action="<?php echo home_url();?>">
					<div class="header-search-mobile small-9 small-centered columns">
						<div class="search-zoom search-btn" style="display:inline-block; float:left; margin-right:5px;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-ico-srch.png" />
						</div>
						<input id="s" name="s" type="text" placeholder="<?php _e('Type & hit enter to search','zfwp-base');?>" class="search-box-mobile" />
					</div>
				</form>
			</div>
		</li>
	</ul>
</div>