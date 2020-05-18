<?php
include "header.php";

?>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
		<script>
    
    (function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
			

            e.stopPropagation();
        };		
    };
})(window);
</script>


		<div class="section main main-raised">
		
			<div class="container">
			
				<div class="row">
				
					
					<?php 
								include 'fonction.php';
								$product_id = $_GET['p'];
								
								$sql = " SELECT * FROM produits ";
								$sql = " SELECT * FROM produits WHERE product_id = $product_id";
								if (!$con) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($con, $sql);
								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
									echo '
									
                                    
                                
                                <div class="col-md-5 col-md-push-2">
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="product_images/'.$row['Description'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['Description2'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                  
                                </div>
                            </div>
                                
                                <div class="col-md-2  col-md-pull-5">
                                <div id="product-imgs">
                                    <div class="product-preview">
                                        <img src="product_images/'.$row['Description'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['Description2'].'" alt="">
                                    </div>


                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">"
                                    </div>
                                </div>
                            </div>

                                 
									';
                                    
									?>
									
									
									<?php 
									echo '
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">'.$row['product_title'].'</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#review-form">10 Review(s) | Add your review</a>
							</div>
							<div>
							<!-- 2000DHS -->



								<h3 class="product-price">'.$row['product_prix'].'DHS<del class="product-old-price"> '.$row['product_price'].'DHS</del></h3>
								
							</div>






							<h5 class="product-text">'.$row['product_text'].'<del class="product-old-price"></del></h5>
							
								<div class="product-options">
								<label>
								
									</select>
								</label>
								<label>
								
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									
								</div>
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button class="add-to-cart-btn" pid="'.$row['product_id'].'"  id="product" ><i class="fa fa-shopping-cart"></i> J"ACHÈTE</button>
                                </div>
								
								
							</div>

						

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://mail.google.com/"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
									
					
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					
					
					
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Détails</a></li>
								<li><a data-toggle="tab" href="#tab3">Description</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
										<p><h5 class="Description1">'.$row['Description1'].'<del class="product-old-price">

										</del></h5>
										
										
                                        <img src="product_images/'.$row['Description'].'" alt="" width=460px>
                                        <img src="product_images/'.$row['Description2'].'" alt=""  width=466px><br>
                                        <img src="product_images/'.$row['Description3'].'" alt=""  width=366px>
                                  
									
		
                                                  

										</p>













												</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p><h5 class="Details">'.$row['Details'].'<del class="product-old-price"></del></h5>
											
											

















														</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">  </h5>
															
															<h5 class="date">'.$row['date'].'<del class="product-old-price"></del></h5>
							
															

															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">

														<h6 class="Reviews">'.$row['Reviews'].'<del class="product-old-price"></del></h6>

												
														</div>
													</li>
													
													
													<li>
														<div class="review-heading">
															<h5 class="name">  </h5>
															<h5 class="date">'.$row['date'].'<del class="product-old-price"></del></h5>
							

															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
														<h6 class="reviews1">'.$row['reviews1'].'<del class="product-old-price"></del></h6>



														</p>


														</div>
													</li>
												</ul>
												
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form
										<div class="col-md-3 mainn">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="product_id" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div> -->
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section main main-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    
				<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">PRODUITS CONNEXES</h3>
					
				</div>
			</div>
			';
							$_SESSION['product_id'] = $row['product_id'];
							}
						} 
						?>	
						<?php
			include 'fonction.php';
						$product_id = $_GET['p'];
			
			$product_query = "SELECT * FROM produits,categories WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
		$run_query = mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query) > 0){

			while($row = mysqli_fetch_array($run_query)){
				$pro_id    = $row['product_id'];
				$pro_cat   = $row['product_cat'];
				$pro_brand = $row['product_brand'];
				$pro_title = $row['product_title'];
			$NEW = $row["NEW"];
			$solde  = $row["solde"];
				$pro_price = $row['product_price'];
				$pro_prix = $row['product_prix'];
				$pro_image = $row['product_image'];
				
				$cat_name = $row["cat_titre"];

				echo "
		
				
						<div class='col-md-3 col-xs-6'>
						<a href='product.php?p=$pro_id'><div class='product'>
							<div class='product-img'>
								<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
								<div class='product-label'>
									
											<span class='new'>$NEW </span>
											<span class='sale'>$solde  </span>
										 </div>
							</div></a>
							<div class='product-body'>
								<p class='product-category'>$cat_name</p>
								<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
								<h4 class='product-price header-cart-item-info'>$pro_prix MAD <del class='product-old-price'>$pro_price
								
								
								</del></h4>
								<div class='product-rating'>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
								</div>
								<div class='product-btns'>
									<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
									<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
									<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
								</div>
							</div>
							<div class='add-to-cart'>
								<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i>J'ACHÈTE</button>
							</div>
						</div>
						</div>
					
				
	";
}
;

}
?>
		

		</div>
		
		
	</div>
	
</div>




<?php
include "newslettter.php";
include "footer.php";

?>
