<div role="main" class="main">

				<div class="container">

					<div class="row">
						<div class="col-md-6">

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

							<h2 class="mb-sm mt-sm"><strong>Kirim</strong> Resep</h2>
							<form method="post" action="<?=site_url('Website/resep_act')?>"
							enctype="multipart/form-data">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label><strong>Nama</strong></label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="cNama" id="name" required>
										</div>
										<div class="col-md-6">
											<label><strong>Email</strong></label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="cEmail" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label><strong>Nomor Telepon</strong></label>
											<input type="text" value="" data-msg-required="" maxlength="100" class="form-control" name="nNomorHp" id="subject" required>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label><strong>Upload Resep</strong></label>
											<input type="file" class="form-control" name="foto">
											<label>
												<font color="red" size="-1">
													<em><strong>Format File (*Jpg / Png)</strong></em>
												</font>
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<?=$image?><br/><br/>
			                                <input type="text"  data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control" name="secutity_code" id="captcha" style="width:50%"><br/>
			                                <em>Refresh Jika Kesulitan Membaca</em>
			                                <input type="hidden" name="captcha" value="<?=$this->session->userdata('mycaptcha')?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<?php 
							foreach ($row as $key => $vaTentang) {
								echo $vaTentang['deskripsi'] ;
							}
							?>
						</div>

					</div>

				</div>

			</div>


