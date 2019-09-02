<?php
get_header();
?>

<body>
	<section class="single-interior">
		<div class="container-5">
			<div class="single-interior__header">
				<div class="single-interior__logo">
					<div class="logo" id="home">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt=""></a>
					</div>
				</div>
				<div class="single-interior__navigation">
					<div class="contact-links">
						<a href="mailto:<?php the_field('email__go') ?>" class="email"><?php the_field('email__show') ?></a>
						<a href="tel:<?php the_field('phone__go') ?>" class="phone"><?php the_field('phone__show') ?></a>
					</div>
					<div class="navigation-menu">
						<nav class="menu-mob">
							<button class="menu__btn no-active"></button>
							<ul>
								<li><a href="<?php echo home_url('#about'); ?>">about</a></li>
								<li><a href="<?php echo home_url('#portfolio'); ?>">portfolio</a></li>
								<li><a href="<?php echo home_url('#contacts'); ?>">contacts</a></li>
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
								<li><a href="<?php echo home_url('#about'); ?>"> about</a></li>
								<li><a href="<?php echo home_url('#portfolio'); ?>">portfolio</a></li>
								<li><a href="<?php echo home_url('#contacts'); ?>">contacts</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="single-interior__inner">
				<div class="left-inner">
					<div class="single-interior__title">
						<?php the_field('single-interior__title') ?>
					</div>
					<a href="<?php echo home_url('#portfolio'); ?>" class="skroll-arrow"><span>back</span></a>
				</div>
				<div class="right-inner">
					<div class="single-interior__description"><?php the_field('single-interior__description') ?>
					</div>
				</div>
			</div>
		</div>

		<div class="single-interior__gallery">
			<div class="container-6">
				<div class="row">
					<ul>
						<li><a href="<?php the_field('picture__1') ?>"><img src="<?php the_field('picture__1') ?>" alt=""></a></li>
						<li><a href="<?php the_field('picture__2') ?>"><img src="<?php the_field('picture__2') ?>" alt=""></a></li>
					</ul>
				</div>
				<div class="row">
					<ul>
						<li><a href="<?php the_field('picture__3') ?>"><img src="<?php the_field('picture__3') ?>" alt=""></a></li>
						<li><a href="<?php the_field('picture__4') ?>"><img src="<?php the_field('picture__4') ?>" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
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
									<li><a href="<?php echo home_url('#about'); ?>">about</a></li>
									<li><a href="<?php echo home_url('#portfolio'); ?>">portfolio</a></li>
									<li><a href="<?php echo home_url('#contacts'); ?>">contacts</a></li>
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
