<!-- Google Analytics -->
	<script>
	var _gaq = [['_setAccount', '<?php echo Configure::read('Site.google-anlytics'); ?>'], ['_trackPageview']];
	(function(d, t) {
		var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
		g.async = g.src = '//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
	}(document, 'script'));
	</script>