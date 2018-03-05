<?php
	$id_post = @$_GET["id_post"];
	if (!isset($id_post)) {
?>
<div class="main_content container-fluid">
	<h3>Halaman yang anda cari tidak ada</h3>	
</div>
<?php
		echo "Halaman yang anda kunjungi tidak terdapat konten";		
	} else {
		$data = array('id_event' => $id_post);
		$baca = $blog->read($event, $data);
		$r = $baca->fetch(PDO::FETCH_LAZY);
?>
		<!-- <h1><?=$r['judul_event']?></h1> -->
		<!-- <strong>
			<small><?=$r['slogan']?> by <?=$r['penyelenggara']?></small>
		</strong> -->
		<!-- <iframe width="560" height="315" src="<?=$r['link']?>" frameborder="0" allowfullscreen></iframe> -->
		<!-- <div class="content">
			<?=$r['deskripsi']?>
		</div> -->
		<!-- <a href="<?=$url."?halaman=pilih2&id={$r['id_event']}"?>">Support</a> -->
<?php
	}
?>

<div class="page">
	<!-- 

		Event Title

	-->

    <!-- <div class="title"> -->
	 <div class="container-fluid">
		<div class="row">
			<div>
				<p class="title-text1" style="text-align: center; padding-right: 140px; margin-top: 40px"><b><?=$r['judul_event']?></b></p>
				<p class="title-text2" style="text-align: center; margin-bottom: 40px"><?=$r['slogan']?> by <?=$r['penyelenggara']?></p>
			</div><!-- 
			<div class="logo col-lg-2">
				<p class="logo-text"><b>by <?=$r['penyelenggara']?></b></p>
			</div> -->
		</div>
	 </div>



	<!-- </div> -->

	<!--

		Event Image Title Row

	-->

	 <div class="container-fluid">
		<div class="row">
			<div class="col-sm-7" style="margin-left: 30px">
				<img class="title-image" src="asset/img/Eventimage.png">
			</div>
			<div class="rounded detailamount col-sm-3" style="padding-right: 20px; padding-top: 30px; padding-bottom: 30px">
				<?php  
					$b = array('id_event' => $r['id_event']);
					$baca = $blog->read($pembelian, $b);
					$total = 0;
					while ($d = $baca->fetch(PDO::FETCH_LAZY)) {
						$total = $total + $d['harga_murni'];
					}
				?>
				<p class="text-num"><b><?=$blog->rupiah($total)?></b></p>
				<p class="text-numargs">dari <?=$blog->rupiah($r['dana'])?></p>
				<?php  
					$c = array('id_event' => $r['id_event']);
					$d = $blog->read($pembelian, $c);
					$pendukung = $d->rowCount();
				?>
				<p class="text-num"><b><?=$pendukung?></b></p>
				<p class="text-numargs">Mendukung</p>
				<p class="text-num"><b>30</b></p>
				<p class="text-numargs">Hari Lagi</p>
			 <div>
				<a class="btn-supp btn btn-primary" href='<?=$url."?halaman=pilih2&id={$r['id_event']}"?>'>
					<b>Support</b>
				</a>

				<div class="container-fluid button-group">
					<div class="row">
						<div>
							<a class="btn-save btn btn-primary"><img src="asset/img/Save button.png"></a>
						
							<button class="btn-cp btn btn-primary"><img src="asset/img/Facebook.png"></button>
							<button class="btn-cp btn btn-primary"><img src="asset/img/Twitter.png"></button>
							<button class="btn-cp btn btn-primary"><img src="asset/img/Google.png"></button>
						</div>
					</div>
				</div>
			 </div>
			</div>
		</div>
	 </div>

	
	<!--

		Navigation Bar

	-->

	<nav class="top_navbar navbar navbar-expand-lg bg-light" style="background-color: white; margin-top: 30px">
		  <ul class="navbar-nav mx-auto">
			 <li class="navbar-text-active nav-item active">
				 <a class="nav-link" style="color: #2A394F">Detail</a>
			 <li class="navbar-text nav-item">
				 <a class="nav-link" style="color: black">Update</a>
			 </li>
			 <li class="navbar-text nav-item">
				 <a class="nav-link" style="color: black">FAQ</a>
			 </li>
		  </ul>
    </nav>	
	
   <!--

   	Main Content

   -->
   <div class="content rounded col-centered col-lg-7" style="padding-top: 30px">
   	<p>
   		<?=$r['deskripsi']?>
   	</p>
   	
   </div>
   <div class="col-centered col-lg-8">
		<a class="btn-supp2 btn btn-primary" href='<?=$url."?halaman=pilih2&id={$r['id_event']}"?>'><b>Support</b></a>
	</div>

   	<div class="col-centered col-lg-7">
   		<button class="btn-save2 btn btn-primary"><img src="asset/img/Save button.png"></button>
   	</div>

</div>