<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luxium
 */

get_header();
?>
<section class="features">
	<div class="container-1">
		<div class="features__inner">
			<div class="features__presentation">
				<div class="logo" id="home">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt=""></a>
				</div>
				<div class="features__title">
					<?php the_field('features__title') ?>
				</div>
				<div class="features__scroll-down">
					<a href="#about" class="skroll-arrow"><span>scroll down</span></a>
				</div>
			</div>

			<div class="features__slider">
				<div class="slider-item">
					<div class="slider-img"><img src="<?php the_field('slide-1-picture') ?>" alt=""></div>
					<div class="slider-discription">
						<a href="<?php the_field('slide-1-link') ?>"><span><?php the_field('slide-1-discription') ?></span></a>
					</div>
				</div>

				<div class="slider-item">
					<div class="slider-img"><img src="<?php the_field('slide-2-picture') ?>" alt=""></div>
					<div class="slider-discription">
						<a href="<?php the_field('slide-2-link') ?>"><span><?php the_field('slide-2-discription') ?></span></a>
					</div>
				</div>
				<div class="slider-item">
					<div class="slider-img"><img src="<?php the_field('slide-3-picture') ?>" alt=""></div>
					<div class="slider-discription">
						<a href="<?php the_field('slide-3-link') ?>"><span><?php the_field('slide-3-discription') ?></span></a>
					</div>
				</div>
				<div class="slider-item">
					<div class="slider-img"><img src="<?php the_field('slide-4-picture') ?>" alt=""></div>
					<div class="slider-discription">
						<a href="<?php the_field('slide-4-link') ?>"><span><?php the_field('slide-4-discription') ?></span></a>
					</div>
				</div>
			</div>
			<div class="features__navigation">
				<div class="navigation-menu">
					<nav class="menu-mob">
						<button class="menu__btn no-active"></button>
						<ul>
							<li><a href="#about">about</a></li>
							<li><a href="#portfolio">portfolio</a></li>
							<li><a href="#contacts">contacts</a></li>
							<div class="contact-links">
								<a href="mailto:<?php the_field('email__go') ?>" class="email"><?php the_field('email__show') ?></a>
								<a href="tel:<?php the_field('phone__go') ?>" class="phone"><?php the_field('phone__show') ?></a>
							</div>
						</ul>
					</nav>
				</div>
				<div class="navigation-menu">
					<nav class="menu">
						<ul>
							<li><a href="#about">about</a></li>
							<li><a href="#portfolio">portfolio</a></li>
							<li><a href="#contacts">contacts</a></li>
						</ul>
					</nav>
				</div>
				<div class="contact-links">
					<a href="mailto:<?php the_field('email__go') ?>" class="email"><?php the_field('email__show') ?></a>
					<a href="tel:<?php the_field('phone__go') ?>" class="phone"><?php the_field('phone__show') ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<main class="main">
	<section class="about" id="about">
		<div class="container-2">
			<div class="about__caption">About us</div>
			<div class="about__inner">
				<div class="about__first-block">
					<div class="about__title"><?php the_field('about__title') ?></div>
					<div class="about__first-text">
						<?php the_field('about__first-text') ?>
					</div>
				</div>
				<div class="about__second-block">
					<div class="about__second-text">
						<?php the_field('about__second-text') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-3">
			<div class="about__picture">
				<img src="<?php the_field('about__picture') ?>" alt="">
			</div>
		</div>
	</section>
	<section class="portfolio" id="portfolio">
		<div class="container-2">
			<div class="portfolio__caption">Our portfolio</div>
			<div class="portfolio__text"><?php the_field('portfolio__text') ?></div>
		</div>
		<div class="container-4">
			<div class="portfolio__gallery">
				<div class="left-gallery">
					<?php

					$posts = get_field('left-gallery');

					if ($posts) : ?>
						<ul>
							<?php foreach ($posts as $post) :
								?>
								<?php setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""><span><?php the_title(); ?></span></a></li>
							<?php endforeach; ?>
						</ul>
						<?php wp_reset_postdata();
						?>
					<?php endif; ?>
				</div>
				<div class="right-gallery">
					<?php

					$posts = get_field('right-gallery');

					if ($posts) : ?>
						<ul>
							<?php foreach ($posts as $post) :
								?>
								<?php setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""><span><?php the_title(); ?></span></a></li>
							<?php endforeach; ?>
						</ul>
						<?php wp_reset_postdata();
						?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		</div>
	</section>
</main>
<footer class="footer">
	<div class="container-2">
		<section class="contacts" id="contacts">
			<div class="contacts__caption">Contacts</div>
			<div class="contacts__text">
				<?php the_field('contacts__text') ?>
			</div>

			<form class="contacts__form" id="contact" action="<?php bloginfo('template_url'); ?>/mail.php" method="post">

				<div id="fields">
					<div class="contacts__form-top">
						<input required="true" name="name" type="text" placeholder="Name" class="input">
						<input required="true" name="email" type="email" placeholder="Email" class="input">
					</div>
					<div class="contacts__form-bottom">
						<textarea required="true" name="message" type="text" placeholder="Message" class="input"></textarea>

						<button id="submitinput" class="submit" value="Отправить" type="submit">
							Get in touch
						</button>
					</div>
				</div>

			</form>

	</div>
	</section>
	<section class="footer__inner" id="bottom">
		<div class="container-2">
			<div class="footer__items">
				<div class="footer__menu">
					<div class="navigation-menu">
						<nav class="menu">
							<ul>
								<li><a href="#about">about</a></li>
								<li><a href="#portfolio">portfolio</a></li>
								<li><a href="#contacts">contacts</a></li>
							</ul>
						</nav>
					</div>
					<div class="footer__scroll-top">
						<a href="#home" class="skroll-arrow"><span>to the top</span></a>
					</div>
				</div>
				<div class="footer__contacts">
					<div class="contact-links">
						<a href="mailto:<?php the_field('email__go') ?>" class="email"><?php the_field('email__show') ?></a>
						<a href="tel:<?php the_field('phone__go') ?>" class="phone"><?php the_field('phone__show') ?></a>
					</div>
					<div class="footer__info-links">
						<span>Made by <a href="http://ukraine-it.com" target="_blank">Ukraine IT</a></span><br>
						<span>A brand of <a href="http://ukrainify.com" target="_blank">Ukrainify</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>
<?php
get_footer();
