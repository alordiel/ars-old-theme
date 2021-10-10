<?php
/* Template name: Donate Landing page */
?>
<?php get_header(); ?>

<div class="sand-background">
	<div class="landing-header">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/lp-top-image.png" alt="Ая">
	</div>
	<div class="dogs-image-and-text">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/lp-image1.png" alt="Ая">
	</div>
	<div class="dogs-image-and-text">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/lp-image2.png" alt="Бонд">
	</div>
	<div class="dogs-image-and-text">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/lp-image3.png" alt="Анубис">
	</div>
	<div class="bottom-framed-box">

		<div class="donate-text">
			<p>Всички животни във Фермата имат нужда от специални и редовни грижи, вкусна храна и много любов. Финансираме се единствено чрез вашите доброволни дарения и месечният ни бюджет зависи само от вас.</p>
			<p>Помогни ни да спасяваме и да се грижим за четириноги приятели всеки ден, като се абонираш за месечно дарение.</p>
		</div>

		<div class="donate-payment-methods">

			<div class="payment-sms">
				<a href="<?php echo site_url(); ?>/bg/dari#donate-sms" title="Дарете със SMS">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/donate-sms.png" alt="Дарение със SMS">
				</a>
			</div>
			<div class="payment-paypal">
				<a href="<?php echo site_url(); ?>/bg/dari#donate-paypal" title="Дарете с PayPal">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/donate-paypal.png" alt="Дарение с paypal">
				</a>
			</div>
			<div class="payment-card">
				<a href="#" onclick="return false" title="Очаквайте скоро дарение с карта" style="cursor:default">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/donate-card.png" alt="Дарение с карта (очаквайте скоро)">
				</a>
			</div>

		</div>

		<div class="final-thank-you">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landing-page/thank-you.png" alt="Благодарим">
		</div>

	</div>
	<div class="fix"></div>
</div>

<?php get_footer(); ?>