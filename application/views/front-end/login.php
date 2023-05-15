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
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">
													Login Customer
												</h4>
												<form id="login">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Username / Alamat Email</label>
																<input type="text" 
																value=""
																id="username_login" 
																class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<a class="pull-right" href="#">(Lost Password?)</a>
																<label>Password</label>
																<input type="password" 
																value="" 
																id="password_login"
																class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																</label>
															</span>
														</div>
														<div class="col-md-6" align="right">
															<button class="btn btn-primary" type="button" 
															onclick="return login();">
																<i class="fa fa-sign-in"></i> Login
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">Daftar Customer</h4>
												<form id="daftar">
													<div class="row">
														<div class="form-group">
															<div class="col-md-9">
																<label>E-mail Address / Username</label>
																<input type="text" 
																value="" id="username_daftar" 
																class="form-control input-lg">
															</div>
															<div class="col-md-12">
																<label>Nama Lengkap</label>
																<input type="text" 
																value="" id="nama_daftar" 
																class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-6">
																<label>Password</label>
																<input type="password" id="password_daftar"
																value="" class="form-control input-lg">
															</div>
															<div class="col-md-6">
																<label>Re-enter Password</label>
																<input type="password" id="repassword_daftar" 
																value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<button class="btn btn-primary pull-right" type="button" 
															onclick="return register();">
																<i class="fa fa-edit"></i> Daftar
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