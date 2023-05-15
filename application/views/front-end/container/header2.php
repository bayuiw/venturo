<?php 
 $link = @mysqli_connect('localhost', 'root', '', 'e-commerce'); 
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

		<!-- Favicon -->
		<link rel="shortcut icon" 	 href="<?=base_url()?>web/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url()?>web/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-elements.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-shop.css">
		<link rel="stylesheet" href="<?=base_url()?>web/css/theme-animate.css">

		<link rel="stylesheet" href="<?=base_url()?>web/vendor/slider/css/revolution_settings.css">
		
		<link rel="stylesheet" href="<?=base_url()?>assets/js/prettyphoto/css/prettyPhoto.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>web/vendor/gritter/css/jquery.gritter.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/skins/blue.css">		

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>web/css/custom.css">
		
		<link rel="stylesheet" href="<?=base_url()?>assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datetimepicker.min.css" />
		<!-- Head Libs -->
		<script src="<?=base_url()?>web/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
	<div class="body">
	  <header id="header">
	    <div class="header-body">
		  <div class="header-container container">
		    <div class="header-row">
			 <div class="header-column">
			  <div class="header-logo">
			   <a href="#">
			   <?php 
		         $cFolder = "assets/elfinder/files/logo";  
		         $cHandle = opendir($cFolder); 
		         $i = 1;  
		         $cImageExtension = array('png', 'jpg', 'jpeg', 'gif');  
		         while(false !== ($file = readdir($cHandle))){  
		         $fileAndExt = explode('.', $file);  
		            if(in_array(end($fileAndExt), $cImageExtension)){ 
		                  //Remove Extension
		            $cName = str_replace($cImageExtension, " ", $file); 
		         ?>
				 <img alt="Porto" width="111" height="54" data-sticky-width="82" 
				 data-sticky-height="40" 
				 data-sticky-top="33" 
				 src="<?=base_url().$cFolder?>/<?=$file?>">
				<?php } } ?>
			   </a>
			  </div>
			</div>
			<div class="header-column">
			  <div class="header-row">
			   <div class="header-search hidden-xs">
				 <form action="<?=site_url('Website/proses_search/')?>" method="post">
				   <div class="input-group">
					<input class="form-control" 
											   placeholder="Search..." 
											   name="cari" 
											   id="cari" type="text">
					 <span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					 </span>
					</div>
				  </form>
				</div>
				<nav class="header-nav-top">
				 <ul class="nav nav-pills nav-top">
						
							<li class="phone">
								<span><i class="fa fa-google-plus"></i> apoteksehatbatu@gmail.com </span>
							</li>
                            <li class="phone">
								<span><i class="fa fa-phone"></i> (0341) 591558</span>
							</li>
                            <li class="phone">
								<span><i class="fa fa-fax"></i> (0341) 591558 </span>
							</li>
						</ul>
				</nav>
			  </div>
			 <div class="header-row">
			  <div class="header-nav">
			    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
				  <i class="fa fa-bars"></i>
				</button>
				<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
				 <nav>
				  <ul class="nav nav-pills" id="mainNav">
					<?php foreach ($menu as $key => $vaMenu) {
						if($vaMenu['id_menu'] == '1'){
							$cPanah = "dropdown-toggle";
						}else{
							$cPanah = "" ;
						}
					?>
					<li class="dropdown <?php if($vaMenu['id_menu'] == $links)echo "active"; ?> ">
				      <a class="<?=$cPanah?> " href="<?=site_url('website/'.$vaMenu['link'].'')?>">
				      	<?=$vaMenu['nama_menu']?>
				      </a>
						<?php 
                          $dbKategori   = mysqli_query($link,"SELECT * FROM kategori 
                          				WHERE id_menu = '".$vaMenu['id_menu']."' order by nama_kategori ASC ");
                          $nRowKategori = mysqli_num_rows($dbKategori);
                          if($nRowKategori > 0){
                        ?>
						<ul class="dropdown-menu">
						  <?php 
						  while($dataKategori = mysqli_fetch_array($dbKategori)){
						  	if($dataKategori['id_menu'] == 2){
						  		$cLink = 'blog';
						  	} else{
						  		$cLink = 'product' ;
						  	}
						  ?>
						  <li>
						    <a href="<?=site_url('website/'.$cLink.'/'.$dataKategori['url'].'')?>">
						     <i style="color: rgb(0, 136, 204)" class="fa fa-hand-o-right"></i>	
						     <?=$dataKategori['nama_kategori']?>
						    </a>
						  </li>
						  <?php } ?>

						 <!--
						 <li class="dropdown-submenu">
						   <a href="index-classic.html">Classic</a>
							<ul class="dropdown-menu">
							 <li>
							 	<a href="index-classic.html" 
							 	data-thumb-preview="img/previews/preview-classic.jpg"> 
							 	Classic - Original</a>
							 </li>
							</ul>
						  </li>
						 -->
						</ul>
					   <?php } ?>
					 </li>
					<?php } ?>	
					
					<?php  $cart_check = $this->cart->contents();
              			if(empty($cart_check)) {
           			?>	

					 <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
						<a class="dropdown-toggle" href="page-login.html">
							<i class="fa fa-shopping-cart"></i> Cart (0) - Rp.00
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="dropdown-mega-content">
									<p>Belum Ada Barang Di Dalam Keranjang</p>
								</div>
							   </li>
						    </ul>
					     </li>
					    <?php }else{ ?>
					    <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
						<a class="dropdown-toggle" href="#">
							<i class="fa fa-shopping-cart"></i> Cart (<?=count($this->cart->contents())?>) - 
							Rp . <?= number_format($Total = $this->cart->total(),2)?>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="dropdown-mega-content">
									<table class="cart">
						 			 <tbody>
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
									  <tr>
									    
										<td class="product-name">
										 <a href="shop-product-sidebar.html"><?=$item['name']?><br>
										 	<span class="amount">
										 		<strong>Rp.<?=number_format($item['price'],2)?></strong>
										 	</span>
										 </a>
										</td>
										<td class="product-actions">
										  <a title="Remove this item" class="Hapus"  
										  onclick="return HapusBarang('<?=$item['rowid']?>');">
											<i class="fa fa-times"></i>
										  </a>
										</td>
									  </tr>
									 <?php } ?>
									   <tr>
										<td class="actions" colspan="6">
										 <div class="actions-continue">
										   <button type="button" 
										   onclick="window.location.href='<?=base_url()?>'" 
										   class="btn btn-default">Lanjutkan Belanja</button>
										   
										   <button type="button"
										   onclick="window.location.href='<?=site_url('website/cart')?>'" 
										   class="btn pull-right btn-primary">
										   	Proses Checkout <i class="fa fa-angle-right ml-xs"></i>
										   </button>
										  </div>
										</td>
										</tr>
									  </tbody>
									</table>
								</div>
							   </li>
						    </ul>
					     </li>
					    <?php } ?>
					    <li class="dropdown <?php if($links == 'status')echo "active"; ?>" id="headerShop">
						<a class="dropdown-toggle" href="#">
							<i class="fa fa-user"></i> Member
						</a>
						<ul class="dropdown-menu">
							<?php 
								if(!empty($this->session->userdata('id_user'))){
							?>
								<li>
									<a href="<?=base_url()?>website/biodata">
								     <i style="color: rgb(0, 136, 204)" class="fa fa-hand-o-right">
								     </i>	
								     Profil Member
							    	</a>
								</li>
								<li>
									<a href="<?=base_url()?>website/logout">
								     <i style="color: rgb(0, 136, 204)" class="fa fa-hand-o-right">
								     </i>	
								     Logout
							    	</a>
								</li>
							<?php }else{ ?>
								<li>
								<a href="<?=base_url()?>website/login">
							     <i style="color: rgb(0, 136, 204)" class="fa fa-hand-o-right">
							     </i>	
							     Login Member
						    	</a>
							</li>
							<?php } ?>

							<li>
								<a href="<?=base_url()?>website/Status_Transaksi">
							     <i style="color: rgb(0, 136, 204)" class="fa fa-hand-o-right">
							     </i>	
							     Status Transaksi
						    	</a>
							</li>
						</ul>
					     </li>
				     </ul>
			      </nav>
		       </div>
	         </div>
           </div>
		 </div>
	   </div>
	 </div>
   </div>
</header>

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