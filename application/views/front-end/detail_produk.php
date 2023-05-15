<?php 
  foreach ($produk as $key => $vaRelated) {
     $cIdBarang		=	$vaRelated['id_barang']		;
     $cIdKategori 	= 	$vaRelated['id_kategori']	;
     $dTglRegister	=	$vaRelated['tgl_register']	;
     $cKodeBarang	=	$vaRelated['kode_barang']	;
     $cGambar		=	$vaRelated['gambar']			;
     $cNamaBarang	=	$vaRelated['nama_barang']	;
     $nHarga 		=	$vaRelated['harga']			;
     $nJumlah 		=	$vaRelated['jumlah']			;
     $cKeterangan 	=	$vaRelated['keterangan']		;
     $cAktor 		=	$vaRelated['aktor']			;
     $cNamaKategori	= 	$vaRelated['nama_kategori']	;
     $cNamaMenu		=	$vaRelated['nama_menu']		;
  }

?>

                  <form method="post" action="">
                    <input type="hidden" name="cIdBarang" 	id="cIdBarang" 		value="<?=$cIdBarang?>">
                    <input type="hidden" name="cNamaBarang" id="cNamaBarang" 	value="<?=$cNamaBarang?>">
                    <input type="hidden" name="nHarga" 		id="nHarga" 		value="<?=$nHarga?>">
                    <input type="hidden" name="cGambar"		id="cGambar" 		value="<?=$cGambar?>">
                  </form>

		<div role="main" class="main shop">
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-9">

							<div class="row">
								<div class="col-md-6">

									<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url().$cGambar?>">
										</div>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url().$cGambar?>">
										</div>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url().$cGambar?>">
										</div>
									</div>

								</div>

								<div class="col-md-6">

									<div class="summary entry-summary">

										<h1 class="mb-none"><strong><?=$cNamaBarang?></strong></h1>

										<div class="review_num">
											<span class="count" itemprop="ratingCount">Kategori : </span> <?=$cNamaKategori?>
										</div>
										<p class="taller">
											<table class="table table-striped mt-xl">
													<tbody>
														<tr>
															<th>
																Tanggal Register Barang:
															</th>
															<td>
																<?=$dTglRegister?>
															</td>
														</tr>
														<tr>
															<th>
																Kategori Barang
															</th>
															<td>
																<?=$cNamaKategori?>
															</td>
														</tr>
														<tr>
															<th>
																Kode - Barang
															</th>
															<td>
																<?=$cKodeBarang?>
															</td>
														</tr>
														<tr>
															<th>
																Nama - Barang
															</th>
															<td>
																<?=$cNamaBarang?>
															</td>
														</tr>
														<tr>
															<th>
																Harga- Barang
															</th>
															<td>
																<p style="color: #0088CC"><strong>Rp . <?=number_format($nHarga,2)?>
																</strong></p>
															</td>
														</tr>
													</tbody>
												</table>
										</p>

											<button onclick="return addToChart();" 
													type="button" 
													href="#" 
													class="btn btn-primary btn-icon">
												<i class="fa fa-shopping-cart"></i> Add to cart
											</button>
									</div>


								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="tabs tabs-product">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#productDescription" data-toggle="tab">Description</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="productDescription">
												<p><?=$cKeterangan?></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<hr class="tall">

							<h4 class="mb-md text-uppercase">Related <strong>Products</strong></h4>

							<div class="row">

							 <ul class="products product-thumb-info-list">
							 <?php foreach ($related as $key => $vaRelated) { ?>
								<li class="col-md-3 col-sm-6 col-xs-12 product">
									<a href="<?=site_url('website/detail/'.$vaRelated['url'].'')?>">
										<span class="onsale">New</span>
									</a>
									<span class="product-thumb-info">
										<a href="<?=site_url('website/detail/'.$vaRelated['url'].'')?>" 
										class="add-to-cart-product">
											<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
										</a>
										<a href="<?=base_url().$vaRelated['gambar']?>" class="4IDE-Gallery">
											<span class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<span class="product-thumb-info-act-left"><em>Zoom</em></span>
													<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Gambar</em></span>
												</span>
												<img alt="" style="" class="img-responsive" src="<?=base_url().$vaRelated['gambar']?>">
											</span>
										</a>
									    	
										<span class="product-thumb-info-content">
											<a href="<?=site_url('website/detail/'.$vaRelated['url'].'')?>">
												<div align="center">
												<h6><strong><?=$vaRelated['nama_barang']?></strong></h6>
												<span class="price">
													<font size="-3" style="color:rgb(153, 153, 153)"><span class="amount"> Kategori : <?=$vaRelated['nama_kategori']?> </span></font><br/>
													<ins><span class="amount">Rp.<?=number_format($vaRelated['harga'],2)?></span></ins>
												</span>
											   </div>
											</a>
										</span>
		
									</span>
								</li>
								<?php } ?>
								</ul>

							</div>

						</div>
						<div class="col-md-3">
							<?php include'container/sidebar.php';?>
						</div>
					</div>
				</div>

			</div>

<script type="text/javascript">
	
function addToChart(){
	
	var cIdBarang 	=	$('#cIdBarang').val();
	var cNamaBarang	=	$('#cNamaBarang').val();
	var nHarga 		=	$('#nHarga').val();
	var cGambar 	=	$('#cGambar').val();

	$.ajax({
	    type: "POST",
	    data  :"id="+cIdBarang+
	       	   "&nama="+cNamaBarang+
	       	   "&harga="+nHarga+
	       	   "&gambar="+cGambar,  
	    url: "<?=site_url('Shop/Add')?>",
	    cache: false,
	    success:function(msg){
		    $.gritter.add({
			    title: 'Notifikasi Sukses',
			    text:  '<p style="color:white">Barang ' +cNamaBarang+ ' Sukses Ditambahkan Ke Keranjang</p>',
			    class_name: 'gritter-info gritter-center' 
		    });
	    	setTimeout(function() { location.reload() },2000);
	    }
	 });
};
</script>