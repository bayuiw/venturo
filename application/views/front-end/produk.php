	

			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<?php foreach ($kategori as $key => $vaKategori) {
						$cKategori =	$vaKategori['nama_kategori'];
					} ?>
					<div class="row">
						<div class="col-md-6">
							<h1 class="mb-none">
								<strong>Menampilkan Produk <?=$cKategori?></strong>
							</h1>
						</div>
					</div>

					<div class="row">

						<ul class="products product-thumb-info-list" data-plugin-masonry>
						
						<?php foreach ($produk as $key => $vaProduk) { ?>
							<li class="col-md-3 col-sm-6 col-xs-12 product">
								<a href="shop-product-sidebar.html">
									<span class="onsale">New</span>
								</a>
								<span class="product-thumb-info">
									<a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" 
									class="add-to-cart-product">
										<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
									</a>
									<a href="<?=base_url().$vaProduk['gambar']?>" class="4IDE-Gallery">
										<span class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<span class="product-thumb-info-act-left"><em>Zoom</em></span>
												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Gambar</em></span>
											</span>
											<img alt="" style="" class="img-responsive" src="<?=base_url().$vaProduk['gambar']?>" style="width:800px;height:800px">
										</span>
									</a>
								    	
									<span class="product-thumb-info-content">
											<div align="center">
											<h6><strong><?=$vaProduk['nama_barang']?></strong></h6>
											<span class="price">
												<font size="-3" style="color:rgb(153, 153, 153)"><span class="amount"> Kategori : <?=$vaProduk['nama_kategori']?> </span></font><br/>
												<ins><span class="amount">Rp.<?=number_format($vaProduk['harga'],2)?></span></ins>
											</span>
										   </div>
									</span>
	
								</span>
							</li>
						<?php } ?>
						</ul>

					</div>

					<!--
					<div class="row">
						<div class="col-md-12">
							<ul class="pagination pull-right">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
					-->
				</div>

			</div>

			