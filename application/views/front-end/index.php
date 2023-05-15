<div role="main" class="main">

			<div class="container">
				<div class="homepage-bar">
					<div class="row">
						<div class="col-md-4">
							<i class="fa fa-truck bar-icon"></i>
							<div class="bar-textarea">
								<h3>Layanan Pesan Antar</h3>
								<p>Layanan Delivery Order Obat</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fa fa-dollar bar-icon"></i>
							<div class="bar-textarea">
								<h3>Pembayaran Langsung</h3>
								<p>Pembayaran Pesanan Ditempat</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fa fa-support bar-icon"></i>
							<div class="bar-textarea">
								<h3>Konsultasi Gratis</h3>
								<p>Konsultasi pemilihan Obat</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row row-sm mb-lg-2">
					<div class="col-md-9 col-md-push-3" >
					<div class="slider-container rev_slider_wrapper responsive" style="height: 80%;width:90%">
							<div id="revolutionSlider" class="slider rev_slider">
								<ul>
								<?php 
					                $cFolder = "assets/elfinder/files/slider";  
					                $cHandle = opendir($cFolder); 
					                $i = 1;  
					                $cImageExtension = array('png', 'jpg', 'jpeg', 'gif');  
					         	      while(false !== ($file = readdir($cHandle))){  
					                       $fileAndExt = explode('.', $file);  
					                        if(in_array(end($fileAndExt), $cImageExtension)){ 
					                         //Remove Extension
					                         $cName = str_replace($cImageExtension, " ", $file); 
					               ?>
					               <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
										<img src="<?=base_url().$cFolder?>/<?=$file?>"  
											alt="slide bg"
											data-bgposition="center center" 
											data-bgfit="cover" 
											data-bgrepeat="no-repeat"
											class="rev-slidebg">
									</li>
								   <?php }  }?> 
								</ul>
							</div>
						</div>
					</div>
					<aside class="col-md-3 col-md-pull-9">
						<div class="home-side-menu-container">
							<h2 class="side-menu-title">Kategori</h2>
							<ul class="home-side-menu">
								<?php foreach ($kategori as $key => $vaKategori) { ?>
								<li class="dropdown-full-color dropdown-primary">
									<a href="<?=site_url('website/product/'.$vaKategori['url'].'')?>">
										<?=$vaKategori['nama_kategori']?><i class="fa fa-caret-right"></i>
									</a>
									<?php 
									  $link = @mysqli_connect('localhost', 'k1518726_benar', 'benar123', 'k1518726_benar'); 
			                          $dbKategori   = mysqli_query($link,"SELECT * FROM sub_kategori 
			                          				WHERE id_kategori = '".$vaKategori['id_kategori']."' ");
			                          $nRowKategori = mysqli_num_rows($dbKategori);
			                          if($nRowKategori > 0){
			                        ?>

									<ul class="dropdown-menu">
										 <?php 
						  					while($dataKategori = mysqli_fetch_array($dbKategori)){
						  					?>
										<li class="dropdown-submenu">
											<a href="<?=site_url('website/product_sub/'.$dataKategori['url'].'')?>"><?=$dataKategori['nama_kategori']?></a>
										</li>
										<?php } ?>
										
									</ul>
									<?php } ?>
								</li>
								<?php } ?>								
						</div>
					</aside>
				</div>
				<div class="row row-sm">
					<div class="col-md-9 col-md-push-3">
						<div class="banners-container">
							<div class="row">
								<div class="col-sm-4">
									<a href="#" class="banner responsive">
										<img src="<?=base_url()?>web/img/demos/shop/banners/shop6/banner1.jpg" alt="Banner">
									</a>
								</div>
								<div class="col-sm-4">
									<a href="#" class="banner responsive">
										<img src="<?=base_url()?>web/img/demos/shop/banners/shop6/banner2.jpg" alt="Banner">
									</a>
								</div>

								<div class="col-sm-4">
									<a href="#" class="banner responsive">
										<img src="<?=base_url()?>web/img/demos/shop/banners/shop6/banner3.jpg" alt="Banner">
									</a>
								</div>
							</div>
						</div>

						<h2 class="slider-title">
		                    <span class="inline-title">Produk Terbaru</span>
		                    <span class="line"></span>
		                </h2>

		                <div class="owl-carousel owl-theme manual featured-products-carousel">
		                <?php foreach ($produk as $key => $vaProduk) { ?>
							<div class="product">
								
									<figure class="product-image-area">
										<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name" class="product-image">
											<img src="<?=base_url().$vaProduk['gambar']?>" alt="Product Name">
										
										</a>
										<div class="product-label"><span class="discount"></span></div>
										<!--<div class="product-label"><span class="new">New</span></div>-->
									</figure>

								<div class="product-details-area">
									<h2 class="product-name"><a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name"><?=$vaProduk['nama_barang']?></a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">Rp.<?=number_format($vaProduk['harga'])?></span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

						<hr class="mt-xlg mb-xl">

						<div class="row mb-sm">
							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>Food Health</strong></h3>
									<?php foreach ($health as $key => $vaProduk) { ?>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name" class="product-image">
												<img src="<?=base_url().$vaProduk['gambar']?>" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name"><?=$vaProduk['nama_barang']?></a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">Rp.<?=number_format($vaProduk['harga'])?></span>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>Terlaris</strong></h3>
									<?php foreach ($laris as $key => $vaProduk) { ?>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name" class="product-image">
												<img src="<?=base_url().$vaProduk['gambar']?>" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name"><?=$vaProduk['nama_barang']?></a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">Rp.<?=number_format($vaProduk['harga'])?></span>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>SUPLEMEN</strong></h3>
									<?php foreach ($suplemen as $key => $vaProduk) { ?>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name" class="product-image">
												<img src="<?=base_url().$vaProduk['gambar']?>" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" title="Product Name"><?=$vaProduk['nama_barang']?></a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">Rp.<?=number_format($vaProduk['harga'])?></span>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="customer-support-section">
							<h2 class="slider-title text-center mb-xl">
								<span class="inline-title">Kenapa Apotek Sehat Online</span>
								<span class="line"></span>
							</h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-star"></i>
										</div>
										<h4>Pelayanan Terbaik</h4>
										<p>Kami selalu memberikan pelayanan terbaik dan terdepan untuk kesehatan anda</p>
										
									</div>
								</div>

								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-mail-reply"></i>
										</div>
										<h4>Terpercaya</h4>
										<p>Kami adalah apotek online pertama yang memberikan pelayanan tidak hanya di satu kota</p></p>
										
									</div>
								</div>

								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-paper-plane"></i>
										</div>
										<h4>Pengiriman Cepat</h4>
										<p>Layanan Pesan Antar kami selalu memprioritaskan pengiriman agar obat cepat sampai kepada anda</p>
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar home-sidebar">

						<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
							<a href="#">
								<img class="img-responsive" src="<?=base_url()?>web/img/demos/shop/banners/banner1.jpg" alt="Banner">
							</a>
						</div>

						<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
							<a href="#">
								<img class="img-responsive" src="<?=base_url()?>web/img/demos/shop/banners/banner3.jpg" alt="Banner">
							</a>
						</div>

						<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
							<a href="#">
								<img class="img-responsive" src="<?=base_url()?>web/img/demos/shop/banners/banner2.jpg" alt="Banner">
							</a>
						</div>
						
					</aside>
				</div>
			</div>
			
			<!--<div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(img/demos/shop/newsletter_popup_bg.jpg)">
                <div class="newsletter-popup-content">
                	<img src="<?=base_url()?>web/img/demos/shop/logo-shop.png" alt="Logo" class="img-responsive center-block">
                    <h2>BE THE FIRST TO KNOW</h2>
                    <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Go!">
                            </span>
                        </div><!-- End .from-group -->
                    <!--</form>
                    <div class="newsletter-subscribe">
                    	<div class="checkbox mb-none">
							<label>
								<input type="checkbox" value="1">
							   Don't show this popup again
							</label>
						</div>
                    </div>
                </div><!-- End .newsletter-popup-content -->
           <!-- </div><!-- End .newsletter-popup -->-->

			</div>