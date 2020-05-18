<footer id="footer">

			<div class="section">

				<div class="container">

					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">À PROPOS DE NOUS</h3>
								
								<ul class="footer-links">
									<li><a href="https://goo.gl/maps/Dr9VYvfix3SL2gFCA"><i class="fa fa-map-marker"></i>address</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>06223423</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>soufiane@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:20px;">
							<ul class="footer-payments">
								



							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212753.59969013208!2d-7.727077376733595!3d33.57220859769721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca!5e0!3m2!1sfr!2sma!4v1588844660500!5m2!1sfr!2sma" 
							width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</ul>
						
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">électronique</h3>
								<ul class="footer-links">
									<li><a href="store.php#!">télévisions</a></li>
									<li><a href="store.php#!">smartphones</a></li>
									<li><a href="store.php#!">imprimante</a></li>
									<li><a href="store.php#!">PC PORTABLES</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>

				</div>

			</div>

			
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
