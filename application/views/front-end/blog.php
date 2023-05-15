<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
									<li class="active">Testimoni</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Testimoni Customer</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">
							 <?php foreach ($blog as $key => $vaBlog) { ?>
								<article class="post post-medium">
									<div class="row">
										<div class="col-md-7">

											<div class="post-content">

												<h2>
												 <a href="<?=site_url('website/blog_detail/'.$vaBlog['url'].'')?>">
												<?=$vaBlog['nama']?>
												</a>
												</h2>
												<p><?=$vaBlog['komentar']?></p>

											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="fa fa-calendar"></i> <?=$vaBlog['tanggal']?> </span>
												<span><i class="fa fa-user"></i> By <a href="#"><?=$vaBlog['email']?></a> </span>
												
											</div>
										</div>
									</div>

								</article>
							<?php } ?>

								
								<!--
								<ul class="pagination pagination-lg pull-right">
									<li><a href="#">«</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">»</a></li>
								</ul>
								-->
							</div>
						</div>

						<div class="col-md-3">
							<?php include'container/sidebar.php';?>
						</div>
					</div>

				</div>

			</div>
