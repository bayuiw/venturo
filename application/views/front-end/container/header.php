<?php 
 $link = @mysqli_connect('localhost', 'k1518726_benar', 'benar123', 'k1518726_benar'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?=$title?></title>	

		<meta name="keywords" content="Toko Online , Online Shop" />
		<meta name="description" content="Engine Toko Online Terbaik">
		<meta name="author" content="Arga Septandika , Alan Maulana , Aphep , Aldias">

		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url()?>web/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url()?>web/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-elements.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="http://halodana.com/web/js/slider/revolution_settings.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/skins/skin-shop-6.css">		
		<script src="<?=base_url()?>web/master/style-switcher/style.switcher.localstorage.js"></script> 

		<!-- Demo CSS -->		
		<link rel="stylesheet" href="<?=base_url()?>web/css/demos/demo-shop-6.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=base_url()?>web/vendor/modernizr/modernizr.min.js"></script>
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/gritter/css/jquery.gritter.css" />

	</head>
	<body>
	<div class="body">
	  <header id="header" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 147, 'stickySetTop': '-147px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="dropdowns-container">
								<div class="header-dropdown cur-dropdown">
									<a href="#">IND<i class="fa fa-caret-down"></i></a>

									<ul class="header-dropdownmenu">
										<li><a href="#">IND</a></li>
										<li><a href="#">USD</a></li>
									</ul>
								</div>

								<div class="header-dropdown lang-dropdown">
									<a href="#"><img src="<?=base_url()?>web/img/demos/shop/fr.png" alt="English">IND<i class="fa fa-caret-down"></i></a>

									<ul class="header-dropdownmenu">
										<li><a href="#"><img src="<?=base_url()?>web/img/demos/shop/en.png" alt="English">English</a></li>
										<li><a href="#"><img src="<?=base_url()?>web/img/demos/shop/fr.png" alt="French">Indonesia</a></li>
									</ul>
								</div>
							</div>		
							
							<div class="top-menu-area">
								<a href="#">Links <i class="fa fa-caret-down"></i></a>
								<ul class="top-menu">
									<li><a href="<?=base_url()?>website/login">Log in</a></li>
									<li><a href="<?=base_url()?>website/Status_Transaksi">Status Transaksi</a></li>
									<li><a href="#">Promo Hari ini</a></li>
									<li><a href="<?=base_url()?>website/resep">Upload Resep</a></li>
									<li><a href="<?=base_url()?>website/antrian">Antrian Dokter</a></li>
								</ul>
							</div>
							<p class="welcome-msg">APOTEK SEHAT BATU MALANG</p>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<!--<div class="header-column">
								<div class="header-logo">
									<a href="<?=base_url()?>website">
										<img alt="Porto" width="111" height="51" src="<?=base_url()?>web/img/demos/shop/logo-shop-white.png">
									</a>
								</div>
							</div>-->
							<div class="header-column">
								<div class="row">
									<div class="cart-area">
										<div class="custom-block">
											<i class="fa fa-phone"></i>
											<span>(0341) 591558</span>
											<span class="split"></span>
											<a href="<?=base_url()?>website/kontak">Hubungi Kami</a>
										</div>

										<?php  $cart_check = $this->cart->contents();
						              			if(empty($cart_check)) {
						           		?>	

										<div class="cart-dropdown">
											<a href="#" class="cart-dropdown-icon">
												<i class="fa fa-shopping-cart"></i><span> (0) - Rp.00</span>
											</a>

											<div class="cart-dropdownmenu right">
												<div class="dropdownmenu-wrapper">
													<div class="cart-products">
														<div class="product product-sm">
															<p>Belum Ada Barang Di Dalam Keranjang</p>
														</div>
													</div>

													<div class="cart-totals">
														Total: <span>Rp.00.00</span>
													</div>

													
												</div>
											</div>
										</div>
									 <?php }else{ ?>
									 	<div class="cart-dropdown">
											<a href="#" class="cart-dropdown-icon">
												<i class="fa fa-shopping-cart"></i> <span>(<?=count($this->cart->contents())?>) - 
												Rp . <?= number_format($Total = $this->cart->total(),2)?></span>
											</a>

											<div class="cart-dropdownmenu right">
												<div class="dropdownmenu-wrapper">
													<div class="cart-products">
														
														<?php 
										                  $cart = $this->cart->contents() ;
										                  $grand_total = 0;
										                            $i = 1;
										                   foreach ($cart as $item){
										                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
										                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
										                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
										                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
										                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
										                        echo form_hidden('cart[' . $item['id'] . '][img]', $item['img']);
										            // <input type="hidden" name="cart[1][id]" value="1" />
										                   ?>
														<div class="product product-sm">
															<a href="#" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>	
															<figure class="product-image-area">
																
																<img src="<?=base_url()?><?=$item['img']?>" class="img-responsive" width="100%">
																
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><?=$item['name']?></h2>
																<div class="cart-qty-price">
																	<?=$item['qty']?> X 
																	<span class="product-price">Rp. <?=$item['price']?></span>
																</div>
															</div>
														</div>
														<?php } ?>
													</div>

													<div class="cart-totals">
														Total: <span>Rp <?= number_format($Total = $this->cart->total(),2)?></span>
													</div>

													<div class="cart-actions">
														<a href="<?=base_url()?>" class="btn btn-primary" style="font-size: 12px">Lanjutkan Belanja</a>
														<a href="<?=site_url('website/cart')?>" class="btn btn-primary" style="font-size: 12px">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									 <?php } ?>


									</div>
									
									<div class="header-search">
										<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
										<form action="<?=site_url('Website/proses_search/')?>" method="post">
											<div class="header-search-wrapper">
												<input type="text" class="form-control" name="cari" 
											   id="cari"  placeholder="Search..." required>
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>

									<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
										<i class="fa fa-bars"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<?php foreach ($menu as $key => $vaKategori) { ?>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="<?=site_url('website/'.$vaKategori['link'].'')?>">
										<?=$vaKategori['nama_menu']?>
							</a>
							<?php  
			                    $dbKategori   = $this->db->query("SELECT * FROM kategori WHERE id_menu = '".$vaKategori['id_menu']."' ");
			                     if($dbKategori->num_rows() > 0){
			                 ?>
							<ul>
							 <?php 
							 foreach ($dbKategori->result_array() as $key => $vaData) {
							 	# code...
							 ?>
								<li><a href="<?=site_url('website/product/'.$vaData['url'].'')?>"><?=$vaData['nama_kategori']?></a></li>
							<?php } ?>
							</ul>
							<?php } ?>
						</li>
						<?php } ?>
						
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

<script type="text/javascript">
	
function HapusBarang(id){
	if(confirm("Apakah Yakin Hapus Produk ?")){
		$.ajax({
	    type: "GET",  
	    url:  "<?=base_url()?>Shop/Remove/"+id,
	    cache: false,
	    success:function(msg){
		   window.alert('Barang Berhasil Di Hapus') ;
	       setTimeout(function() { location.reload() },2000);
	    }
	 });

	}else{
		return false ; 
	}
	
}

</script>