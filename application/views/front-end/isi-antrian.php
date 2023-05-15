<div role="main" class="main">

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<?php 
							if($info == 'sukses'){
							?>
							<div class="alert alert-success  mt-lg" id="contactSuccess">
								<strong>Sukses!</strong> Resep Berhasil Dikirim Kepada Kami.
							</div>
							<?php }elseif($info == 'gagal'){ ?>
							<div class="alert alert-danger  mt-lg" id="contactError">
								<strong>Error!</strong> Ada Kesalahan Saat Mengirim Pesan.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>
							<?php } ?>

							<h2 class="mb-sm mt-sm"><strong>Antrian</strong> Dokter</h2>
							<?php foreach ($row as $key => $vaDokter) { ?>
							<div class="col-md-6">
							<div class="featured-box" align="left">
								<div class="box-content">
									
									<div class="row">
									<div class="col-md-3">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbLg5tWLQEPOOgohTHxupjPGm8yq27o1MmBof4IZO9YWX4zwLB" style="width: 100px"><br>
									<a href="" class="btn btn-primary mt-xl">Antrian Pasien</a>
									</div>
									<div class="col-md-9" align="left">
										<h3 class="heading-danger" ><strong><?=$vaDokter['dokter']?></strong></h3>
										<table width="50%">
											<tr>
												<td>Alamat Praktek</td><td>:</td><td>&nbsp;&nbsp;<strong><?=$vaDokter['alamat']?></strong></td>
											</tr>
											<tr>
												<td>Jam Praktek</td><td>:</td><td>&nbsp;&nbsp;<strong><?=$vaDokter['jam_buka']?></strong></td>
											</tr>
											<tr>
												<td>Telepon</td><td>:</td><td>&nbsp;&nbsp;<strong><?=$vaDokter['telepon']?></strong></td>
											</tr>
										</table>
										<br>
										<p><?=$vaDokter['penjelasan']?></p>

									</div>
									</div>
								</div>
							</div>
							</div>
							<div class="col-md-6">
								<div class="featured-box" align="left">
									<div class="box-content" align="left">
										<div class="row" align="left">
											<h5>Jadwal Antrian Anda Pukul : <?=$jam?> WIB</h5>
											<form action="<?=base_url()?>website/antrian_act" method="post">
												<div class="col-md-12">
													<label><strong>Nama</strong></label>
													<input type="text" class="form-control" 
														   name="cNama" id="cNama" required>
													<input type="hidden" class="form-control" 
														   name="cJam" id="cNama" value="<?=$jam?>" required>
													<input type="hidden" class="form-control" 
														   name="cTanggal" id="cNama" value="<?php echo date("d-m-Y")?>" required>
													<input type="hidden" class="form-control" 
														   name="cDokter" id="cNama" value="<?=$vaDokter['id_prakter']?>" required>
												</div>
												<div class="col-md-12">
													<label><strong>Email</strong></label>
													<input type="text" class="form-control" name="cEmail"  required>
												</div>
												<div class="col-md-12">
													<label><strong>No Telepon</strong></label>
													<input type="text" class="form-control" name="cTelepon" required>
													
												</div>

													<div class="col-md-12">
													<br>
														<input type="submit" value="Daftar" class="btn btn-primary btn-lg mb-xlg">
													</div>
												
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
					</div>

				</div>

			</div>


</div>