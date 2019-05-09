</div> <!-- end container -->
<footer>
 
<!-- Footer -->
    <div class="footer-bottom">
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h2>Quick links</h2>
					<div class="bottomMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer_links') ); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h2>Libraries ACT</h2>
					<div class="bottomMenu">
						<?php wp_nav_menu( array( 'menu' => 'libraries')); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h2>Contact us</h2>
					<div class="bottomMenu">
						<?php wp_nav_menu( array( 'menu' => 'contactUs')); ?>
					</div>
				</div>
			</div>
		      <hr>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="footer-middle"> This website was produced by students in the
          Faculty of Arts & Design, University of Canberra. </p>
        <p class="footer-middle"> The content is extracted from the Tocumwal
          Houses Archive in the <a class="external-link1"
              href="https://www.library.act.gov.au/find/history/search/Manuscript_Collections/hmss_0074_tocumwal_houses_archive">
            ACT Heritage Library Manuscripts Collection </a></p>
        </p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
</div>
	<!-- ./Footer -->
</footer>
<!-- end footer -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<?php wp_footer(); // js scripts are inserted using this function ?>
</body>
</html>