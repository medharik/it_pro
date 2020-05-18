
 <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
	

  
    </div>

	
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     



		<div class="section mainn mainn-raised">
		
		
		
			<div class="container">
			
			
				<div class="row">
				
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=1"><div class="shop">
							<div class="shop-img">
								<img src="./img/LenovoS340-15IML.png" alt="">
							</div>
							<div class="shop-body">
								<h3>LENOVO<br>informatique</h3>
								<a href="product.php?p=1" class="cta-btn">Achetez maintenant <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					

					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=6"><div class="shop">
							<div class="shop-img">
								<img src="./img/2 (2).jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>smartphones<br>SAMSUNG GALAXY</h3>
								<a href="product.php?p=6" class="cta-btn">Achetez maintenant<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					


					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=3"><div class="shop">
							<div class="shop-img">
								<img src="./img/2.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Télévisions<br>SAMSUNG</h3>
								<a href="product.php?p=3" class="cta-btn">Achetez maintenant <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		  
		


		<div class="section">
		
			<div class="container">
			
				<div class="row">


					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">NOUVEAUX PRODUITS</h3>
							
						</div>
					</div>
					

					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
							
							
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'fonction.php';
								
                    
					$product_query = "SELECT * FROM produits,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 5";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_prix = $row['product_prix'];
						$pro_text = $row["product_text"];
						$NEW = $row["NEW"];
						$solde  = $row["solde"];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_titre"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
									
										<span class='new'>$NEW </span>
										<span class='sale'>$solde  </span>
									 </div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_prix   MAD<del class='product-old-price'>
										
										
										$pro_price</del></h4>
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
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> ajouter au panier</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
								
								


									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		


		<div class="section">
		
			<div class="container">
			
				<div class="row">
				


					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
										
										<?php
                    include 'fonction.php';
								
                    
					$product_query = "SELECT * FROM produits,categories WHERE product_cat=cat_id AND product_id BETWEEN 3 AND 6";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_prix = $row['product_prix'];
						$pro_text = $row["product_text"];
						$NEW = $row["NEW"];
						$solde  = $row["solde"];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_titre"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										



										<div class='product-label'>
									
										<span class='new'>$NEW </span>
										<span class='sale'>$solde  </span>
									 </div>


									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_prix   MAD<del class='product-old-price'>
										
										
																				
<!-- 


2000 DHS
-->
							
										
										
										$pro_price</del></h4>
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
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> ajouter au panier </button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		


			</div>
			
		</div>
		
</div>
		