<div role="main" class="main">
<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Cara Pesan</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Cara Pesan</h1>
							</div>
						</div>
					</div>
				</section>
				
				<div class="container">

					<div class="row">
						<div class="col-sm-6">

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url()?>web/invoice/logo.png">
										</div>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url()?>web/invoice/logo.png">
										</div>
										<div>
											<img alt="" 
												 height="300" 
												 class="img-responsive" src="<?=base_url()?>web/invoice/logo.png">
										</div>
									</div>
							

						

						</div>

						<div class="span6">
							<?php 
							foreach ($row as $key => $vaTentang) {
								echo $vaTentang['deskripsi'] ;
							}
							?>
							
						</div>
					</div>

					<hr class="tall" />
				</div>   
			</div>
			             
            
	