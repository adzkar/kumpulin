<!--Logo 2nd Header-->

	<div class="image_header text-center">
	  <img class="logo_image_header" src="asset/img/Logo.png">
	</div>

	<!-- akhir 2nd header -->

	<!--Navigation Bar-->
			
	<nav class="top_navbar navbar navbar-expand-lg bg-light navbar-light">
	  <ul class="navbar-nav mx-auto">
	    <li class="nav-item active">
		  <a class="navbar_text nav-link">Seni & Hiburan</a>
		</li>
		<li class="nav-item">
		  <a class="navbar_text nav-link">Seminar</a>
		</li>
	  </ul>
	</nav>	

	<!-- akhir navigation bar -->
<div class="main_content container-fluid">
<!-- contentnya -->


<div class="row_thumbnail row">

<?php  
	$page = @$_GET["page"];
	$show = 9;
	if (!isset($page)) {
		$start = 0;
	} else {
		$start = ($page * $halaman) - $halaman;
	}
	$baca = $blog->read_limit($event, $start, $show);
	while ($r = $baca->fetch(PDO::FETCH_LAZY)) {
?>




<div class=" col-lg-3" style="margin-left: 150px">
	<div class="thumbnail_style thumbnail rounded">
		<a href="<?="{$url}?halaman=post=id_post={$r['id_event']}"?>">
			<img class="thmb_img_style" src="<?="{$url}uploaded_img/{$r['gambar']}"?>">
		</a>
		<div class = "caption">
			<p class="caption_1">
				<a href="<?="{$url}?halaman=post=id_post={$r['id_event']}"?>">
					<strong>
						 <h2><?="{$r['judul_event']}"?></h2>
					</strong>
				</a>
			</p>
			<p class="caption_2"><span><?=$r['penyelenggara']?></span> </p>
			<p class="caption_3 text-justify"><?=substr($r['deskripsi'], 0, 50)?></p>		
			<div class="container-fluid">
				<div class="detail_thmb_style row">
					<div class="detail_thmb_1 col-lg-6">
						<p><b>Rp. 75.890.790</b><br>Terkumpul
					</div>
					<div class="detail_thmb_1 col-lg-3"><b>68%</b><br>Tercapai</p>
					</div>
					<div class="col-lg-3">
						<p><b>5 bln</b><br>Target
					</div>
				</div>
			</div><!-- container fluid -->
		</div><!-- caption -->
	</div><!-- thumbnail -->
</div><!-- col lg 3 -->

<?php
	} 
	// akhir dari perulanga while
?>
	
</div>
</div?

	<!--Pagination-->

	<div class="container">
		<div class="row">
			
		</div>
	</div>

	<nav aria-label="Pagination" class="text-center">
	 <ul class="pagination pagination-lg justify-content-center">
	   <li class="page-item">
	     <a class="page-link" aria-label="Previous">
		  <span aria-hidden="true">&laquo;</span>
		  <span class="sr-only">Previous</span>
		 </a>
	   </li>
<?php  
	$banyak = $baca->rowCount();
	$inya = ceil($banyak/$show);
	for ($i=1; $i <= $inya; $i++) { 
?>
	
	   <li class="page-item active">
		 <a class= "page-link" href="<?=$url."?page={$i}"?>" style="background-color:#2A394F;cursor: pointer;"><?=$i?></a>
	   </li>

	<!-- paginationa -->
	

	<?php
		}
	?>



<li class="page-item">
	     <a class=" page-link" href="#" aria-label="Next">
	      <span aria-hidden="true">&raquo;</span>
		  <span class="sr-only">Next</span>
	     </a>
	   </li>
	 </ul>
	</nav>