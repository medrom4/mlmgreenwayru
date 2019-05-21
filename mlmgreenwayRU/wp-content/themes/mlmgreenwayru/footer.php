<!--========== FOOTER ==========-->
<footer class="footer" id="yak2">
	<!-- Links -->
	<div class="footer-seperator">
		<div class="content-lg container">
			<div class="row">
				<!-- Footer -->
				<div class="footer hidden-print">
					<div class="footer-block footer-block-one">
						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt=" Latest Products Image">
						</div>
					</div>

					<div class="footer-block">
						<h4>Способы оплаты</h4>

						<p>Мы принимаем электронные платежи</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/epay2.png" style="width:100%; alt=" Latest Products Image">
					</div>
					<div class="footer-block">
						<h4>Контакты</h4>
						<ul class="footer-nav">
							<li><b><img src="https://img.icons8.com/color/24/000000/viber.png"><img src="https://img.icons8.com/color/24/000000/telegram-app.png"></b><a href="tel:+375336642007">+375 (33) 664 20 07</a></li>
							<li><b><img src="https://img.icons8.com/color/24/000000/whatsapp.png"></b><a href="tel:+375445577535">+375 (44) 557 75 35</a></li>
							<li><b><img src="https://img.icons8.com/flat_round/24/000000/secured-letter.png"></b> <a href="mailto:diana.gw02@gmail.com">diana.gw02@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--// end row -->
		</div>
	</div>
	<!-- End Links -->
</footer>
<!--========== END FOOTER ==========-->
<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
<?php wp_footer(); ?>


<script type="text/javascript">
	$(document).ready(function() {
		$(".menu").on("click", "a", function(event) {
			event.preventDefault();
			var id = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({
				scrollTop: top
			}, 1500);
		});
	});
</script>


</body>
<!-- END BODY -->

</html>