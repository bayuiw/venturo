	<div role="main" class="main shop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<hr class="tall">
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-md-12">
										<div class="featured-box featured-box-primary align-left mt-sm">
											<div class="box-content table">
											<table class="shop_table cart" width="100%" style="margin-left: -15px;margin-right: -10px">
							                  <tr>
							                        <th class="hidden-xs">No</th>
							                        <th>Nama</th>
							                        <th class="hidden-xs">Gambar</th>
							                        <th class="hidden-xs">Harga</th>
							                        <th>Jumlah</th>
							                        <th>Total</th>
							                        <th>Aksi</th>
							                    </tr>
							                    <form method="post" action="<?=site_url('shop/update_cart')?>">
							                        <?php 
							                          $cart = $this->cart->contents() ;
							                          $grand_total = 0;
							                                    $i = 1;
							                          foreach ($cart as $item){
							                            echo form_hidden('cart[' . $item['id'] . '][id]', 
							                            				$item['id']);
							                            echo form_hidden('cart[' . $item['id'] . '][rowid]', 
							                            				$item['rowid']);
							                            echo form_hidden('cart[' . $item['id'] . '][name]', 
							                            				$item['name']);
							                            echo form_hidden('cart[' . $item['id'] . '][price]', 
							                            				$item['price']);
							                            echo form_hidden('cart[' . $item['id'] . '][qty]', 
							                            				$item['qty']);
							                             echo form_hidden('cart[' . $item['id'] . '][img]', 
							                             				$item['img']);
							                            // <input type="hidden" name="cart[1][id]" value="1" />
							                          ?>
							                        <tr>
							                          <td class="hidden-xs"><?=$i++?></td>
							                            <td><?=$item['name']?></td>
							                            <td class="hidden-xs"><img alt="img-responsive" 
							                            		src="<?=base_url().$item['img']?>" 
							                            		width="100"></td>
							                            <td class="hidden-xs">Rp . <?=number_format($item['price'],2)?></td>
							                            <td>
							                            <?php echo form_input('cart[' . $item['id'] . '][qty]', 
							                            	$item['qty'], 
							                             	'maxlength="3" 
							                             	 size="1" 
							                             	 class="input-text qty text form-control" 
							                             	 style="text-align: center"'); ?>
							                            </td>
							                            <td>
							                            Rp. <?php $grand_total = $grand_total + $item['subtotal']; 
							                            	echo number_format($item['subtotal'], 2) ?>
							                           	</td>
							                            <td>
							                                <button type="submit" 
							                                		class="btn btn-primary" 
							                                		title="Update Qty">
							                                	<i class="fa fa-refresh"></i>
							                                </button>
							                                <button type="button" 
							                                		onclick="return HapusBarang('<?=$item['rowid']?>')" 
							                                		class="btn btn-danger" 
							                                		title="Hapus Barang">
							                                	<i class="fa fa-times"></i>
							                                </button>
							                            </td>
							                        </tr>
							                        <?php } ?>
							                        <tr>
							                        	<td colspan="2" align="right" class="hidden-xs">
							                        		<h4 class="heading-primary text-uppercase mb-md">
							                        			Total Belanja
							                        		</h4>
							                        	</td>
							                        	<td class="hidden-xs">
							                        		<h4 class="heading-primary text-uppercase mb-md">
							                        			:
							                        		</h4>
							                        	</td>
							                        	<td colspan="2">
							                        	
							                        	</td>
							                        	<td>
							                        		<h4 class="heading-primary text-uppercase mb-md">
							                        			Rp. <?= number_format($Total = $this->cart->total(),2)?>
							                        		</h4>
							                        	</td>
							                        </tr>
							                    </form>
							                </table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">Ongkos Kirim</h4>
												<form>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Pilih Jasa Pengiriman</label>
																<select class="form-control">
																	<option value="">Pilih Jasa Pengiriman</option>
																	<option value="1">JNE</option>
																	<option value="2">TIKI</option>
																	<option value="3">POS</option>
																	<option value="4">COD</option>
																	
																</select>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<label>Pilih Kota</label>
																<select class="form-control" 
																onchange="return getOngkir(this.value)">
																	<option value="">Pilih Kota</option>
																	<?php 
																	foreach ($ongkir as $key => $vaOngkir) { ?>
																	?>
																	<option value="<?=$vaOngkir['id']?>">
																	<?=$vaOngkir['kota']?>
																	</option>
																	<?php } ?>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
													 <div class="container">
														<p>
															<h4 class="heading-primary text-uppercase mb-md">
																<div class="harga_ongkir"></div>
															</h4>
														</p>
													 </div>
													</div>
												
												</form>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">
													Total Belanja + Ongkir
												</h4>
												<table class="cart-totals">
													<tbody>
														<tr class="cart-subtotal">
															<th>
																<strong>Sub Total Belanja</strong>
															</th>
															<td>
																<strong>
																<span class="amount">
																Rp. <?= number_format($Total = $this->cart->total(),2)?>
																</span>
																</strong>
															</td>
														</tr>
														<tr class="shipping">
															<th>
																Ongkos Kirim
															</th>
															<td>
																<div class="harga_ongkir"></div>
															</td>
														</tr>
														<tr class="total">
															<th>
																<strong>Order Total</strong>
															</th>
															<td>
																<strong>
																	<span class="amount" id="total_semua"></span>
																</strong>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="actions-continue">
										<a href="<?=site_url('Website/checkout')?>">
										<button type="button" class="btn pull-right btn-primary btn-lg">
											Proses Ke Checkout <i class="fa fa-angle-right ml-xs"></i>
										</button>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>

<script type="text/javascript">
	
	function number_format(number, decimals, dec_point, thousands_sep) {
      number = (number + '')
        .replace(/[^0-9+\-Ee.]/g, '');
      var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
          var k = Math.pow(10, prec);
          return '' + (Math.round(n * k) / k)
            .toFixed(prec);
        };
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
      if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '')
        .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
          .join('0');
      }
      return s.join(dec);
  }


	function getOngkir(id){
		$.ajax({
	       type: "GET",
	       url: "<?=site_url('Website/ongkir')?>/"+id,
	       cache: false,
	        success:function(msg){
	         var cMessage    = msg ;
	    	 var vaExplode   = cMessage.split('-');
	    	 
	    	 var cKota   	 = vaExplode[1];
	    	 var nHarga      = vaExplode[0];	
	          $('.harga_ongkir').html("Pengiriman Ke <strong>"+cKota+"</strong> <br/> Dengan Biaya Pengiriman Rp." +number_format(nHarga, 2, ',', '.')+" ");
	          var Total = eval(<?=$this->cart->total()?>) + eval(nHarga)  ; 
	          document.getElementById('total_semua').innerHTML = "Rp."+number_format(Total, 2, ',', '.') ;

	        }
	    });
	}
</script>