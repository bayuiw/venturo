<div role="main" class="main shop">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<form method="post" action="<?=site_url('website/status')?>">
					<div class="row">
						<div class="col-md-12">
							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-3">
									</div>
									<div class="col-sm-6" align="center">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">
													Cek Status Transaksi
												</h4>
												<form id="login">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Kode Pemesanan Anda</label>
																<input type="text" 
																placeholder="Kode Pesanan Anda" 
																name="no_pesanan"
																class="form-control input-lg">
															</div>
														</div>
													</div>
					
													<div class="row">
														<div class="col-md-6" align="left">
															<button class="btn btn-primary" type="submit">
																<i class="fa fa-sign-in"></i> Cek Status
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				  </form>
				</div>

			</div>


	<script type="text/javascript">
			function login(){
				cUsername	=	$('#username_login').val() ;
				cPassword	=	$('#password_login').val() ;
				 if(cUsername == "" ){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Username Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }else if(cPassword == ""){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Password Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }

				 $.ajax({
		         type: "POST",
		         data  :"user="+cUsername+
		               	"&pass="+cPassword,  
		                url: "<?=site_url('Master_Act/signin')?>",
		                cache: false,
		                success:function(msg){
		                  
		                  if(msg == 'sukses'){
		                  	if($.gritter.add({
				              title: 'Informasi',
				              text: '<p style="color:white">Login Berhasil</p>',
				              class_name: 'gritter-info gritter-center' 
				            })){
		                  	window.location.href='<?=site_url('Website/checkout')?>';
		                  	}
		                  }else{
		                  	$.gritter.add({
				              title: 'Informasi',
				              text: '<p style="color:white">Login Gagal ,Password Salah</p>',
				              class_name: 'gritter-info gritter-center' 
				            });
		                  }
		                }
	            });
			}

			function register(){
				cUsername	=	$('#username_daftar').val() ;
				cNama		=	$('#nama_daftar').val() ;
				cPassword	=	$('#password_daftar').val() ;
				cRePassword =   $('#repassword_daftar').val() ;
				 if(cUsername == "" ){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Username Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }else if(cPassword == ""){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Password Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }else if(cNama == ""){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Nama Masih Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }else if(cRePassword == ""){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Re Password Kosong</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }

				 if(cPassword != cRePassword){
				 	$.gritter.add({
		              title: 'Informasi',
		              text: '<p style="color:white">Password Tidak Sama</p>',
		              class_name: 'gritter-info gritter-center' 
		            });
		            return false ;
				 }

				 $.ajax({
		         type: "POST",
		         data  :"user="+cUsername+
		         		"&nama="+cNama+
		               	"&pass="+cPassword,  
		                url: "<?=site_url('Master_Act/register')?>",
		                cache: false,
		                success:function(msg){
		                  	if($.gritter.add({
				              title: 'Informasi',
				              text: '<p style="color:white">Berhasil Daftar</p>',
				              class_name: 'gritter-info gritter-center' 
				            })){
		                  	window.location.href='<?=site_url('Website/login')?>';
		                  	}	
		                }
	            });


			}
		</script>