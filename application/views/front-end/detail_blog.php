<?php foreach ($blog as $key => $vaBlog) {  ?>
<meta content='<?=$vaBlog['judul']?>' property='og:title'/>
<meta content='article' property='og:type'/>
<meta content='<?=$vaBlog['headline']?>' property='og:description'/>
<meta content='<?=base_url().'website/blog_detail/'.$vaBlog['url']?>' property='og:url'/>
<meta content='<?=base_url().$vaBlog['gambar']?>' property='og:image'/>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-555097bb4c5e86c0" async="async"></script> 
<?php 

	 $vaExplode = explode("-",$vaBlog['tanggal']) ;
	 $cDay 	 = $vaExplode[2];
	 $cMonth = $vaExplode[1];
	 $cYears = $vaExplode[0];
?>
<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?=base_url()?>">Home</a></li>
									<li class="active">Blog Detail</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 style="color: white"><?=$vaBlog['judul']?></h3>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" 
													src="<?=base_url().$vaBlog['gambar']?>" alt="">
												</div>
											</div>
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="<?=base_url().$vaBlog['gambar']?>" alt="">
												</div>
											</div>
										</div>
									</div>

									<div class="post-date">
										<span class="day"><?=$cDay?></span>
										<span class="month"><?=$cMonth?></span>
									</div>

									<div class="post-content">

										<h2><a href="#"><?=$vaBlog['judul']?></a></h2>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#"><?=$vaBlog['aktor']?></a> </span>

											<span><i class="fa fa-calendar-o"></i> By <a href="#"><?=$vaBlog['tanggal']?></a> </span>

											<span><i class="fa fa-clock-o"></i> By <a href="#"><?=$vaBlog['waktu']?></a> </span>
											
										</div>

										<p><?=$vaBlog['isi']?></p>


										<div class="post-block post-share">
											<h3 class="heading-primary"><i class="fa fa-share"></i>Share this post</h3>

											<!-- AddThis Button BEGIN -->
											<div class="addthis_native_toolbox"></div>
              								<!-- AddThis Button END -->
										    <div class="fb-comments" data-width="500" data-href="<?=site_url('website/blog_detail/'.$vaBlog['url'].'')?>" 
										    data-numposts="5" data-colorscheme="light"></div>
											<!-- AddThis Button END -->

										</div>

									</div>
								</article>

							</div>
						</div>

						<div class="col-md-3">
							<?php include 'container/sidebar.php'; ?>
						</div>
					</div>

				</div>

			</div>
<?php } ?>