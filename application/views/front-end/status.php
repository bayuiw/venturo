	<?php 

	if($data_produk->num_rows() > 0) {
		foreach ($data_diri as $key => $vaChekout) {
			$cAlamat	=	$vaChekout['alamat']	;
			$cProvinsi	=	$vaChekout['provinsi']	;
			$cKota 		=	$vaChekout['kota']		;
			$cKec 		=	$vaChekout['kec']		;
			$cKodePos 	=	$vaChekout['kode_pos']	;
			$nNomorHp	=	$vaChekout['nomor_hp']	;
			$cEmail 	=	$vaChekout['email']		;
			$cNomorPesanan	=	$vaChekout['no_pesanan'];
			$cNama 		=	$vaChekout['nama'];
			$cIdUser 	=	$vaChekout['id_user'];
		}

	?>

			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h1 class="mb-none">
								<strong>Transaksi #<?=$cNomorPesanan?></strong>
							</h1>
						</div>
					</div>

					<div class="row">
					 <div class="featured-boxes">
					  <div class="featured-box featured-box-primary align-left mt-xlg">
				        <div class="box-content">
						  <h4 class="heading-primary text-uppercase mb-md">Barang Yang Anda Beli</h4>
							   <table class="shop_table cart">
								<tr>
								  <th>Id Barang</th>
								  <th>Nama</th>
								  <th>Gambar</th>
								  <th>Harga</th>
								  <th>Jumlah</th>
								  <th>Total</th>
								  <th>Status</th>
								</tr>
								<?php $nTotal = 0;  
								foreach ($data_produk->result_array() as $key => $vaProduk) { 
									if($vaProduk['status'] == 'N'){
										$cStatus = 'Belum Dibayar' ;
									}else{
										$cStatus = 'Sudah Di Bayar' ;
									}
								 $nTotal += $vaProduk['total'];	
								 $nOngkir = $vaProduk['ongkir'];
								?>
								 <tr>
								 	<td>#</td>
								 	<td><?=$vaProduk['nama_barang']?></td>
								 	<td><img alt="img-responsive" 
								                            		src="<?=base_url().$vaProduk['gambar']?>" 
								                            		width="100"></td>
								    <td><?=number_format($vaProduk['harga'],2)?></td>
								    <td><?=$vaProduk['jumlah']?></td>
								    <td><?=number_format($vaProduk['total'],2)?></td>
								    <td><?=$cStatus?></td>
								 </tr>
								<?php } ?>
							</table>
						   </div>
						 </div>
					   </div>
					</div>
					<div class="row">
					 <div class="col-sm-6">
					 	<div class="featured-boxes">
					      <div class="featured-box featured-box-primary align-left mt-xlg">
				            <div class="box-content">
						      <h4 class="heading-primary text-uppercase mb-md">Owner</h4>
						      <table class="table">
						      	<tr>
						      	  <td colspan="2">
						      	  	<h5 class="heading-primary text-uppercase mb-md">Mike Store</h5>
						      	  </td>
						      	</tr>
						      	<tr>
						      		<td>Harga Total</td>
						      		<td>Rp <?=number_format($nTotal,2)?></td>
						      	</tr>
						      	<tr>
						      		<td>Biaya Pengiriman</td>
						      		<td>Rp <?=number_format($nOngkir,2)?></td>
						      	</tr>
						      	<tr>
						      		<td>Biaya Asuransi</td>
						      		<td>Rp 0,-</td>
						      	</tr>
						      	<tr>
						      		<td>Total Biaya</td>
						      		<td>Rp <?=number_format($nTotal+$nOngkir,2)?></td>
						      	</tr>
						      </table>
						      <div align="center">
						      <p align="center">
						      	<h3 class="heading-primary text-uppercase mb-md">Dikirim Kepada</h3>
						      </p>
						      </div>
						      <table class="table">
						      	<tr>
						      	  <td colspan="2">
						      	  	<h5 class="heading-primary text-uppercase mb-md"><?=$cNama?></h5>
						      	  </td>
						      	</tr>
						      	<tr>
						      		<td>Telepon HP</td>
						      		<td><?=$nNomorHp?></td>
						      	</tr>
						      	<tr>
						      		<td>Alamat</td>
						      		<td><?=$cAlamat?></td>
						      	</tr>
						      	<tr>
						      		<td>Provinsi</td>
						      		<td><?=$cProvinsi?></td>
						      	</tr>
						      	<tr>
						      		<td>Kota , Kecamatan ,Kode Pos </td>
						      		<td><?=$cKota?> , <?=$cKec?> , <?=$cKodePos?> </td>
						      	</tr>

						      	
						      </table>
						   </div>
						  </div>
					   </div>   
					 </div>
					 <div class="col-sm-6">
					 	<div class="featured-boxes">
					      <div class="featured-box featured-box-primary align-left mt-xlg">
				            <div class="box-content">
						      <h4 class="heading-primary text-uppercase mb-md">Pembayaran</h4>
						      <form method="post" action="<?=site_url('Website/pembayaran')?>">
						      <input type="hidden" name="id_user" value="<?=$cIdUser?>">
						      <input type="hidden" name="no_pesanan" value="<?=$cNomorPesanan?>">
						      <table class="table">
						      	<tr>
						      	  <td colspan="2">
						      	  	<h5 class="heading-primary text-uppercase mb-md">Pembayaran dilakukan secara <strong>TRANSFER</strong> , Pilih Salah Satu Rekening Di bawah . </h5>
						      	  	<label>Bayar ke rekening*</label><br/>
						      	  	<select class="form-control" name="cRekening">
						      	  		<option value="1231140051-BCA">BCA : 1231140051 - Mike </option>
						      	  		<option value="1231140051-Mandiri">Mandiri : 1231140051 - Mike </option>
						      	  	</select>
						      	  </td>
						      	</tr>
						      	<tr>
						      		<td>
						      			<label>Jumlah yang dibayar persis yang tertera di invoice</label><br/>
						      			<input type="text" name="nTotal" value="<?=$nTotal+$nOngkir?>" 
						      			class="form-control">
						      		</td>
						      	</tr>
						      	<tr>
						      		<td>
						      			<label>Tanggal Bayar <em style="color:#0088CC">* dd-mm-yyyy</em></label><br/>
						      			<input type="text" name="dTglBayar" value="<?=date("d-m-Y")?>" 
						      			class="form-control">
						      		</td>
						      	</tr>	
						      	<tr>
						      		<td>
						      			<label>Nama pemegang rekening Anda (jika via ATM/Internet/SMS Banking)</label><br/>
						      			<input type="text" name="cNamaPengirim" value="" 
						      			class="form-control" placeholder="A/N Rekening">
						      		</td>
						      	</tr>
						      	<tr>
						      		<td>
						      			<label>Nomor rekening pengirim</label><br/>
						      			<input type="text" name="cNoRekening" value="" 
						      			class="form-control" placeholder="Nomor Rekening">
						      		</td>
						      	</tr>	
						      	<tr>
						      		<td>
						      			<label>Bukti Transfer</label><br/>
						      			<div class="col-sm-6">
						      			<input type="file" name="foto"  id="foto"
						      			class="form-control" onchange="return uploadBukti();">
						      			</div>
						      			<div class="col-sm-6">
						      			 <div id="resultbukti"></div>
						      			</div>
						      		</td>
						      	</tr>	
						      	<tr>
						      		<td colspan="2">
						      			<button type="submit" class="btn btn-primary">
								      	  <i class="fa fa-check"></i> Konfirmasi
								        </button>	
						      		</td>
						      	</tr>		
						      </table>
						      
						     </form> 
						     </div>
						  </div>
						</div>	
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
				<?php
					foreach ($data_produk->result_array() as $key => $vaProduk) { 

							$cStatusPembelian = $vaProduk['status']	;
							$cBayar 		  = $vaProduk['bayar']  ;
							$cKirim 		  = $vaProduk['kirim'] ;
							$cKemas			  = $vaProduk['kemas'];

					}
				?>
				<div class="col-sm-12">
				  <div class="featured-boxes">
				     <div class="featured-box featured-box-primary align-left mt-xlg">
				      <div class="box-content">
						<h4 class="heading-primary text-uppercase mb-md">STATUS TRANSAKSI</h4>
						<table class="table">
							<tr>
								<?php if($cStatusPembelian != 'N'){ ?>
								<td><img src="<?=base_url()?>web/img/status/dibayar.png"></td>
								<?php if($cKemas != ''){ ?>
								<td><img src="<?=base_url()?>web/img/status/panah.png"></td>
								<td><img src="<?=base_url()?>web/img/status/dikemas.png"></td>
								<?php } ?>
								<?php if($cKirim != ''){ ?>
								<td><img src="<?=base_url()?>web/img/status/panah.png"></td>
								<td><img src="<?=base_url()?>web/img/status/dikirim.png"></td>
								<td><img src="<?=base_url()?>web/img/status/panah.png"></td>
								<td><img src="<?=base_url()?>web/img/status/selesai.png"></td>
								<?php } ?>
								<?php }?>
							</tr>
						</table>
				      </div>
				    </div>
				  </div>
				</div>

			</div>

	<?php }else{ ?>
			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h1 class="mb-none">
								<strong>Transaksi Tidak Ditemukan</strong>
							</h1>
						</div>
					</div>
				</div>
			</div>
	<?php } ?>	

	<script type="text/javascript">
	 function uploadBukti(){
       var file = new FormData();
       file.append('file',$('#foto')[0].files[0]);
       
       $.ajax({
        url: "<?=site_url('Website/upload_bukti/')?>",
        type: "POST",
        data: file,
        processData: false,
        contentType: false, 
         beforeSend:function(){
          $("#resultbukti").html("<div align='center'><img  width='150' height=150' src='<?=base_url()?>web/img/hex-loader2.gif' /></div>");
          }, 
         success:function(data){
          $("#resultbukti").html(data);
          }
      });
    }
	</script>