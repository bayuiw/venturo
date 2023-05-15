	

			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1 class="mb-none">
								<strong>Menampilkan Hasil Pencarian Produk <em>"<?=$hasil?>"</em></strong>
							</h1>
						</div>
					</div>

					<div class="row">

						<div class="col-md-12">
							   <div class="featured-box featured-box-primary align-left mt-sm">
								<div class="box-content">
								 <table class="shop_table cart">
								  <tr>
								     <th>No</th>
									 <th>Nama</th>
									 <th>Gambar</th>
									 <th>Harga</th>
									 <th>Jumlah</th>
									 <th>Deskripsi</th>
									 <th>Aksi</th>
								  </tr>
								  <form method="post">
								    <?php foreach ($produk as $key => $vaProduk) { ?>
									<tr>
									 <td><?=++$i?></td>
									 <td><?=$vaProduk['nama_barang']?></td>
									 <td><img alt="img-responsive" 
											src="<?=base_url().$vaProduk['gambar']?>" 
									   		width="100">
									</td>
									<td><?=number_format($vaProduk['harga'],2)?></td>
									<td>
									 <input type="number" name="cart[<?=$vaProduk['id']?>][qty]" value="1"  min="0" 
											class="input-number qty text form-control" 
											style="text-align: center" />
									</td>
									
									<td>
									<?= substr($vaProduk['keterangan'],0,150)?>
									</td>
									<td>
									  <a href="<?=site_url('website/detail/'.$vaProduk['url'].'')?>" 
									class="add-to-cart-product">
										<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
									</a>
									</td>
								 </tr>
								<?php } ?>
		
								</form> 
							</table>
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

			</div>

			