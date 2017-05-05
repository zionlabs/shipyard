<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

$menu_args = [
  'menu' => 'Main Menu'
];

?>

	<div id="primary" class="content-area">
        <div class="mobile-menu">
            <?php wp_nav_menu($menu_args); ?>
        </div>
		<main id="main" class="site-main" role="main">
            <div class="home_container">
                <section class="header">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-shipyard-logo.png" alt="">
                    </div>
                </section>
                <p>JOIN US IN ORLANDO, FL</p>
                <section class="topic">
                    <div class="topic__header">
                        <p>Upcoming Event April 12th 2017</p>
                        <div>
                            <p>Join us on Meetup</p>
                        </div>
                    </div>
                    <div class="topic__content">
                        <div class="topic__content-title">
                            <h1>Developer<br /> Designer<br /> Handoffs</h1>
                            <button type="button" class="default-button dark">Save The Date .ICS</button>
                        </div>
                        <div class="topic__content-details">
                            <div>
                                <span>What</span>
                                <p>An open conversation about who’s responsible for what on designer, developer hand-offs.</p>
                            </div>
                            <div>
                                <span>Where</span>
                                <p>
                                    Purple Rock Scissors
                                    <address class="">
                                        189 S. Orange Ave #2020,<br /> Orlando, FL 32801
                                    </address>
                                </p>
                            </div>
                            <div>
                                <span>When</span>
                                <p>April 12th from 7pm to 9pm est.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="guests">
                    <div class="guests__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowdown.svg" alt="">
                        <h3>Guest Panel</h3>
                    </div>

                    <div class="guests__card">
                        <img src="http://placehold.it/300x220" alt="">
                        <p>Carrie Ryan</p>
                        <span>Product Manager // ShoFlo</span>
                        <a href="github">View on Github</a>
                    </div>
                    <div class="guests__card">
                        <img src="http://placehold.it/300x220" alt="">
                        <p>Gene Klein</p>
                        <span>Developer // LightMaker</span>
                        <a href="github">View on Github</a>
                    </div>
                    <div class="guests__card">
                        <img src="http://placehold.it/300x220" alt="">
                        <p>Luella Howell</p>
                        <span>Designer // Disney</span>
                        <a href="github">View on Github</a>
                    </div>
                </section>
                <section class="hosts">
                    <div class="hosts__container">
                        <h3>Hosts</h3>
                        <div class="hosts_card">
                            <img src="http://placehold.it/520x335" alt="">
                            <div class="right">
                                <h3>Josh Pagley</h3>
                                <p>Josh is a builder of things, whether that is for his day to day job, freelance work, or side projects you’ll always find him trying to bring the non-existent into existence. He is a senior full stack developer at Shoflo where he works to bring realtime software to the live event and production industry.</p>
                            </div>
                            <div class="default-button dark">
                                <a class="">Visit my site</a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowforward.svg" alt="">
                            </div>
                        </div>
                        <div class="hosts_card">
                            <img src="http://placehold.it/520x335" alt="">
                            <div class="right">
                                <h3>Brandy Bergh</h3>
                                <p>Brandy is a full stack developer, designer, and doer, that could out hustle Jay-Z. She has a passion for application development and is currently a full stack developer at Shoflo. If she isn't coding you can find her running laps around the beautiful lakes of Winter Park, FL or sipping espresso at the local coffee shops.</p>
                            </div>
                            <div class="default-button dark">
                                <a class="">Visit my site</a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowforward.svg" alt="">
                            </div>
                        </div>
                        <div class="hosts_card">
                            <img src="http://placehold.it/520x335" alt="">
                            <div class="right">
                                <h3>Paul Hershey</h3>
                                <p>I help people create human-centered products that users love. I have over ten years of experience in the field of experience design and have worked with the U.S. Army, Code School, Pluralsight, and Electronic Arts.</p>
                            </div>
                            <div class="default-button dark">
                                <a class="">Visit my site</a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowforward.svg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sponsors">
                    <h3>Sponsors</h3>
                    <div class="inner-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builttocreatelogo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoflo-logo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aiga-logo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ea-logo.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teksystems.png" alt="">
                    </div>
                </section>
                <section class="contact">
                    <div class="inner-container">
                        <div>
                            <p id="event" class="active">Never miss an event</p>
                            <p id="participate">Participate on a panel</p>
                            <div class="active" name="event">
                                <input type="email" name="email" value="" placeholder="event@email.net">
                                <svg width="20" height="14" viewBox="0 0 20 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:figma="http://www.figma.com/figma/ns">
                                <title>Arrow Back</title>
                                <desc>Created using Figma</desc>
                                <g id="Canvas" transform="translate(-2797 -5082)" figma:type="canvas">
                                <g id="Arrow Back" figma:type="vector">
                                <use xlink:href="#path0_fill" transform="matrix(-1 -1.22465e-16 1.22465e-16 -1 2817 5096)" fill="#FFFFFF"/>
                                </g>
                                </g>
                                <defs>
                                <path id="path0_fill" fill-rule="evenodd" d="M 20.0002 5.707L 3.41425 5.707L 7.70725 1.414L 6.29325 0L 0.29325 6C -0.09775 6.391 -0.09775 7.023 0.29325 7.414L 6.29325 13.414L 7.70725 12L 3.41425 7.707L 20.0002 7.707L 20.0002 5.707Z"/>
                                </defs>
                                </svg>

                                <p>We will never spam you. This is only to let you know when we have upcoming events. You can unsubscribe anytime.</p>
                            </div>
                            <div name="participate">
                                <input type="email" name="email" value="" placeholder="participate@email.net">
                                <svg width="20" height="14" viewBox="0 0 20 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:figma="http://www.figma.com/figma/ns">
                                <title>Arrow Back</title>
                                <desc>Created using Figma</desc>
                                <g id="Canvas" transform="translate(-2797 -5082)" figma:type="canvas">
                                <g id="Arrow Back" figma:type="vector">
                                <use xlink:href="#path0_fill" transform="matrix(-1 -1.22465e-16 1.22465e-16 -1 2817 5096)" fill="#FFFFFF"/>
                                </g>
                                </g>
                                <defs>
                                <path id="path0_fill" fill-rule="evenodd" d="M 20.0002 5.707L 3.41425 5.707L 7.70725 1.414L 6.29325 0L 0.29325 6C -0.09775 6.391 -0.09775 7.023 0.29325 7.414L 6.29325 13.414L 7.70725 12L 3.41425 7.707L 20.0002 7.707L 20.0002 5.707Z"/>
                                </defs>
                                </svg>

                                <p>We will never spam you. This is only to let you know when we have upcoming events. You can unsubscribe anytime.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-banner">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shipyard_logo_text.svg" alt="">
                    </div>
                </section>
            </div>


		<?php // if ( have_posts() ) : ?>

			<?php // if ( is_home() && ! is_front_page() ) : ?>
				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header> -->
			<?php //endif; ?>

			<?php
			// Start the loop.
		// 	while ( have_posts() ) : the_post();
        //
		// 		/*
		// 		 * Include the Post-Format-specific template for the content.
		// 		 * If you want to override this in a child theme, then include a file
		// 		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		// 		 */
		// 		get_template_part( 'content', get_post_format() );
        //
		// 	// End the loop.
		// 	endwhile;
        //
		// 	// Previous/next page navigation.
		// 	the_posts_pagination( array(
		// 		'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
		// 		'next_text'          => __( 'Next page', 'twentyfifteen' ),
		// 		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
		// 	) );
        //
		// // If no content, include the "No posts found" template.
		// else :
		// 	get_template_part( 'content', 'none' );
        //
		// endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
