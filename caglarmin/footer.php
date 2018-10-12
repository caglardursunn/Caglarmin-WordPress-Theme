<div class="temizle"></div>
	<?php wp_footer(); ?>
	<footer>
		<div class="konteyner">
			<span>caglardursun.com © 2011-2016 | Tema <a href="http://caglardursun.com">Çağlar Dursun</a> <!-- Linki farklı formatta da yazabilirsiniz fakat kaldırmazsanız mutlu olurum, kaldırırsanız da canınız sağolsun. :) --></span>
		</div>
	</footer>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$("#menuac").click(function () {
				$(".mobilmenu").toggle();
				$(".arama").hide();
			});
			
			$(".ara").click(function(){
				$(".arama").toggle();
				$('.aramainput').focus();
				$(".mobilmenu").hide();
				return false
			});
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57767255-7', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>