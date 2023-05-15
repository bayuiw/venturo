<aside class="sidebar">

								<form action="<?=site_url('Website/proses_search/')?>" method="post">
									<div class="input-group input-group-lg">
										<input class="form-control" 
											   placeholder="Search..." 
											   name="cari" 
											   id="cari" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>

								<hr>

								<h5 class="heading-primary">Tags</h5>
								<?php 
								foreach ($tags as $key => $vaTags) { 
									if($vaTags['nama_kategori'] == 'all' or $vaTags['nama_kategori'] == 'All'){
										$cLink = 'blog' ;
									}else{
										$cLink = 'product' ;
									}
								?>
									<a href="<?=site_url('website/'.$cLink.'/'.$vaTags['url'].'')?>">
										<span class="label label-dark"><?=$vaTags['nama_kategori']?></span>
									</a>
								<?php } ?>
								<hr>

								<h5 class="heading-primary">Top Rated Produk</h5>
								<ul class="simple-post-list">
								<?php foreach ($related as $key => $vaRelated) { ?>
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
											<a href="<?=site_url('website/detail/'.$vaRelated['url'].'')?>">
													<img alt="" width="60" height="60" class="img-responsive" src="<?=base_url().$vaRelated['gambar']?>">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="<?=site_url('website/detail/'.$vaRelated['url'].'')?>"><?=$vaRelated['nama_barang']?></a>
											<div class="post-meta">
												Rp.<?=number_format($vaRelated['harga'],2)?>
											</div>
										</div>
									</li>
								<?php } ?>		
								</ul>

								<hr style="color: rgb(0, 136, 204)">

								<h5 class="heading-primary">Blog</h5>
								<ul class="simple-post-list">
								<?php foreach ($top_blog as $key => $vaRelated) { ?>
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
											<a href="<?=site_url('website/blog_detail/'.$vaRelated['url'].'')?>">
													<img alt="" width="60" height="60" class="img-responsive" src="<?=base_url().$vaRelated['gambar']?>">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="<?=site_url('website/blog_detail/'.$vaRelated['url'].'')?>"><?=$vaRelated['judul']?></a>
											<div class="post-meta">
												Tgl : <?=$vaRelated['tanggal']?>
											</div>
										</div>
									</li>
								<?php } ?>		
								</ul>

							</aside>