<style>
.panel-body {
    padding: 15px;
    padding-bottom: 120px;
}
</style>
<form>
<div role="main" class="main shop">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
	<hr class="tall">
	</div>
   </div>
   <div class="row">
	 <div class="col-md-12">
	  <h2 class="mb-none"><strong>Checkout</strong></h2>
	  <p>Melanjutkan Checkout ? 
	   <a href="<?=site_url('website/login')?>">Klik Disini Untuk Login.</a>
	  </p>
	 </div>
   </div>
	<?php
	 if($this->session->userdata('id_user') != ""){
	  //echo $this->session->userdata('id_user');
	   if($row->num_rows() > 0 ){
					foreach ($row->result_array() as $key => $vaData) {
									$cAlamat 	= 	$vaData['alamat']	  ;
									$cProvinsi	= 	$vaData['provinsi'] ;
									$cKota  	=	$vaData['kota']	;
									$cKec 		=	$vaData['kec']	;
									$cKodePos 	=	$vaData['kode_pos'];
									$nNomorHp 	=	$vaData['nomor_hp'];
									$cEmail  	=	$vaData['email']	;
									$Query = $this->db->query("SELECT * FROM ongkir WHERE id = '".$cKota."'");
									foreach ($Query->result_array() as $key => $vaKota) {
										 	
										 	$KotaKirim = $vaKota['kota'];
										 	$HargaKirim	= $vaKota['harga'];
										 }	 
								}
							}else{
									$cAlamat 	= 	""	;
									$cProvinsi	= 	"" 	;
									$cKota  	=	$this->session->userdata('kota');
									$cKec 		=	""	;
									$cKodePos 	=	""	;
									$nNomorHp 	=	""	;
									$cEmail  	=	""	;
							}
					 ?>
					<div class="row">
						<div class="col-md-9">

							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Identitas Customer
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Nama Lengkap</label>
															<input type="text"
															value="<?=$this->session->userdata('nama_user')?>" 
															placeholder="Nama Lengkap"
															name="cNamaLengkap" 
															id="cNamaLengkap" 
															class="form-control" required >
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Alamat</label>
															<textarea id="cAlamat" placeholder="Alamat" name="alamat" class="form-control" required ><?=$cAlamat?></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Provinsi</label>
															<input type="text" 
																   value="<?=$cProvinsi?>"
																   placeholder="Provinsi"
																   id="cProvinsi" 
																   name="provinsi" 
																   class="form-control" 
																   required >
														</div>
														<div class="col-md-6">
															<label>Kota</label>
																   <input type="text" 
																   value="<?=$cKota?>"
																   placeholder="Kota"
																   id="cKota" 
																   name="kota" 
																   class="form-control"
																   required >
														</div>
														<div class="col-md-6">
															<label>Kecamatan</label>
															<input type="text" 
																   value="<?=$cKec?>"
																   placeholder="Kecamatan"
																   id="cKecamatan" 
																   name="kecamatan" 
																   class="form-control"
																   required >
														</div>
														<div class="col-md-6">
															<label>Kode Pos</label>
															<input type="text" 
																   value="<?=$cKodePos?>"
																   placeholder="Kode Pos"
																   id="cKodePos" 
																   name="kode_pos" 
																   class="form-control"
																   required >
														</div>
														<div class="col-md-6">
															<label>Nomor Hp</label>
															<input 
																   onkeypress="return hanyaAngka(event, false)" 
																   type="text"
																   value="<?=$nNomorHp?>"
																   placeholder="Nomor HP"
																   id="nNomorHp" 
																   name="nomor_hp" 
																   class="form-control" maxlength="12"
																   required >
														</div>
														<div class="col-md-6">
															<label>Email</label>
															<input type="email" 
																   value="<?=$cEmail?>"
																   placeholder="Email"
																   id="cEmail" 
																   name="email"
																   class="form-control"
																   required >
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												List Produk & Pembayaran
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											<table class="shop_table cart">
												<thead>
													<tr>
														<th class="product-thumbnail">
															&nbsp;
														</th>
														<th class="product-name">
															Produk
														</th>
														<th class="product-price">
															Harga
														</th>
														<th class="product-quantity">
															Jumlah
														</th>
														<th class="product-subtotal">
															Total
														</th>
													</tr>
												</thead>
												<tbody>
												<?php 
												$cart = $this->cart->contents() ;
							                    $grand_total = 0;
												foreach ($cart as $item){ ?>
													<tr class="cart_table_item">
														<td class="product-thumbnail">
															<a href="shop-product-sidebar.html">
																<img width="100" height="100" alt="" class="img-responsive" src="<?=base_url().$item['img']?>">
															</a>
														</td>
														<td class="product-name">
															<a href="#"><?=$item['name']?></a>
														</td>
														<td class="product-price">
															<span class="amount"><?=number_format($item['price'],2)?></span>
														</td>
														<td class="product-quantity" align="center">
															<?=$item['qty']?>
														</td>
														<td class="product-subtotal">
															<span class="amount">
															 <?php $grand_total = $grand_total + $item['subtotal']; 
							                            	echo number_format($item['subtotal'], 2) ?>
															</span>
														</td>
													</tr>
												<?php } ?>
												</tbody>
											</table>

											<hr class="tall">

											<h4 class="heading-primary">Total Belanja</h4>
											<table class="cart-totals">
												<tbody>
													<tr class="cart-subtotal">
														<th>
															<strong>Subtotal Belanja</strong>
														</th>
														<td>
															<strong><span class="amount">
																<?php 
																$cart = $this->cart->contents() ;
																$grand_total = 0;
																foreach ($cart as $key => $item) {
																	$grand_total = $grand_total + $item['subtotal']; 
							                            			
																}
																echo "Rp.".number_format($grand_total, 2);
																?>
															</span></strong>
														</td>
													</tr>
													<tr class="shipping">
														<th>
															Ongkir
														</th>
														<td>
															<?php 
															
															if($this->session->userdata('harga_ongkir') == ""){	
																$nOngkir	= $HargaKirim;
															}else{
																$nOngkir	= $this->session->userdata('harga_ongkir') ;
															}
															echo "Rp.".number_format($nOngkir,2) ;
															?>
														</td>
													</tr>
													<tr class="total">
														<th>
															<strong>Total Semua Belanja + Ongkir</strong>
														</th>
														<td>
															<strong><span class="amount">
																<?=number_format($grand_total+$nOngkir, 2);?>
															</span></strong>
														</td>
													</tr>
												</tbody>
											</table>

											<hr class="tall">
                                            <center><h5>Pembayaran Melalui Transfer BanK</h5></center>
                    
											<!--batas-->
											    <div class="content-grid content-grid-dashed mt-xlg mb-lg" style="margin-top:-300px">
                                                        <div class="row content-grid-row">
                                                            
                                                        <div class="content-grid-item col-md-4 center"><img src="https://mausaya.com/assets/invoice/logo-mandiri.gif" style="width:100px" />
                                                        <h4><strong>144-0005-815-227<br>a/n APOTIK SEHAT</strong></h4>
                                                        </div>
                                                         <div class="content-grid-item col-md-4 center"><img  src="https://mausaya.com/assets/invoice/logo-bri.gif" style="width:100px" />
                                                        <h4><strong>0429-01-000132-56-4<br>a/n HARIYADI</strong></h4>
                                                        </div>
                                                         <div class="content-grid-item col-md-4 center"><img src="https://www.bukalapak.com/images/logo-bca.gif" style="width:100px" />
                                                        <h4><strong>019-029-1189<br>a/n HARIYADI</strong></h4>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            
											<!--batas-->
										</div>
									</div>
								</div>
							</div>
                            
							<div class="actions-continue">
								<input type="button" 
									  value="Place Order" 
									  name="proceed" 
									  class="btn btn-lg btn-primary mt-xl"
									  onclick="return saveOrder();">
							</div>

						</div>
						<div class="col-md-3">
							<h4 class="heading-primary">Total Biaya</h4>
							<table class="cart-totals">
								<tbody>
									<tr class="cart-subtotal">
										<th>
											<strong>Total Belanja</strong>
										</th>
										<td>
											<strong>
												<span class="amount">Rp. <?=number_format($grand_total,2);?></span>
											</strong>
										</td>
									</tr>
									<tr class="shipping">
										<th>
											Ongkos Kirim
										</th>
										<td>
											<?php 
												if($this->session->userdata('harga_ongkir') == ""){	
													$nOngkir	= $HargaKirim;
												}else{
													$nOngkir	= $this->session->userdata('harga_ongkir') ;
												}
												echo "Rp.".number_format($nOngkir,2) ;
											?>
										</td>
									</tr>
									<tr class="total">
										<th>
											<strong>Order Total</strong>
										</th>
										<td>
											<strong>
											<span class="amount">Rp.<?=number_format($grand_total+$nOngkir, 2);?></span>
											</strong>
										</td>
									</tr>
								</tbody>
							</table>
							<br/>
							<div id="dt_invoice"></div>
						
						</div>
					</div>
					<?php } ?>

				</div>
                </div>
			</div>

</form>
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
  
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
</script>
<script type="text/javascript">
	
function saveOrder(){
	
	var cAlamat 	=	$('#cAlamat').val();
	var cProvinsi	=	$('#cProvinsi').val();
	var cKota		=	$('#cKota').val();
	var cKecamatan	=	$('#cKecamatan').val();
	var cKodePos	=	$('#cKodePos').val();
	var nNomorHp	=	$('#nNomorHp').val();
	var email		=	$('#cEmail').val();	

	$.ajax({
	    type: "POST",
	    data  :"alamat="+cAlamat+
	       	   "&provinsi="+cProvinsi+
	       	   "&kota="+cKota+
	       	   "&kec="+cKecamatan+
	       	   "&kode_pos="+cKodePos+
	       	   "&nomor_hp="+nNomorHp+
	       	   "&email="+email,  
	    url: "<?=site_url('Shop/save_order')?>",
	    cache: false,
	    success:function(msg){
		    $.gritter.add({
			    title: 'Notifikasi Sukses',
			    text:  '<p style="color:white">Checkout Telah Selesai , Harap Mencetak Invoice Anda </p>',
			    class_name: 'gritter-info gritter-center' 
		    });
	    	$('#dt_invoice').html(msg);
	    }
	 });
};
</script>