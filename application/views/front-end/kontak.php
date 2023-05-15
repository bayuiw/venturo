<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Kontak Kami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Cara Menghubungi Kami</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<?php 
							if($info == 'sukses'){
							?>
							<div class="alert alert-success  mt-lg" id="contactSuccess">
								<strong>Sukses!</strong> Pesan Berhasil Dikirim Kepada Kami.
							</div>
							<?php }elseif($info == 'gagal'){ ?>
							<div class="alert alert-danger  mt-lg" id="contactError">
								<strong>Error!</strong> Ada Kesalahan Saat Mengirim Pesan.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>
							<?php } ?>

							<h2 class="mb-sm mt-sm"><strong>Kontak</strong> Kami</h2>
							<form method="post" action="<?=site_url('Website/kontak_act')?>" >
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
											<label><strong>Subjek</strong></label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label><strong>Pesan</strong></label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="cKomentar" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<?=$image?><br/><br/>
			                                <input type="text"  data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control" name="secutity_code" id="captcha" style="width:50%"><br/>
			                                <em>Refresh Jika Kesulitan Membaca</em>
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


