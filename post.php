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
		<strong>
			<small><?=$r['slogan']?> by <?=$r['penyelenggara']?></small>
		</strong>
		<!-- <iframe width="420" height="345" src="<?=$r['link']?>"></iframe> -->
		<!-- <video width="320" height="240" controls>
		  <source src="<?=$r['link']?>" type="video/mp4">
		  <source src="<?=$r['link']?>" type="video/ogg">
		Your browser does not support the video tag.
		</video> -->
		<iframe width="560" height="315" src="<?=$r['link']?>" frameborder="0" allowfullscreen></iframe>
		<div class="content">
			<?=$r['deskripsi']?>
		</div>
		<a href="<?=$url."?halaman=pilih2&id={$r['id_event']}"?>">Support</a>
<?php
	}
?>

<div class="page">
	<!-- 

		Event Title

	-->
    <div class="title">
	 <div class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<p class="title-text1"><b>AWSM FESTIVAL 2018</b></p>
				<p class="title-text2">A thematic festival by HMBTI</p>
			</div>
			<div class="logo col-lg-2">
				<img class="logo-image" src="image/Logohmbti.png">
				<p class="logo-text"><b>By HMBTI</b></p>
			</div>
		</div>
	 </div>
	</div>
	<!--

		Event Image Title Row

	-->

	 <div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<img class="title-image" src="asset/img/Eventimage.png">
			</div>
			<div class="rounded detailamount col-sm-6">
				<p class="text-num"><b>Rp.150.318.189</b></p>
				<p class="text-numargs">dari Rp.200.000.000</p>
				<p class="text-num"><b>700</b></p>
				<p class="text-numargs">Mendukung</p>
				<p class="text-num"><b>30</b></p>
				<p class="text-numargs">Hari Lagi</p>
			 <div>
				<button class="btn-supp btn btn-primary">
					<b>Support</b>
				</button>

				<div class="container-fluid button-group">
					<div class="row">
						<div>
							<button class="btn-save btn btn-primary"><img src="image/Save button.png"></button>
						</div>
						<button class="btn-cp btn btn-primary"><img src="image/Facebook.png"></button>
						<button class="btn-cp btn btn-primary"><img src="image/Twitter.png"></button>
						<button class="btn-cp btn btn-primary"><img src="image/Google.png"></button>
					</div>
				</div>
			 </div>
			</div>
		</div>
	 </div>


	<!--

		Navigation Bar

	-->

	<nav class="top_navbar navbar navbar-expand-lg bg-light">
	  <ul class="navbar-nav mx-auto">
		 <li class="navbar-text-active nav-item active">
			 <a class="nav-link">Detail</a>
		 </li>
		 <li class="navbar-text nav-item">
			 <a class="nav-link">Update</a>
		 </li>
		 <li class="navbar-text nav-item">
			 <a class="nav-link">FAQ</a>
		 </li>
	  </ul>
    </nav>	
	
   <!--

   	Main Content

   -->
   <div class="content rounded col-centered col-lg-7">
   	<p class="content-header">About</p>
   	<p class="text-justify">
   		Pada tanggal 3 Desember AWSMFSTVL telah berhasil di selenggarakan di Secapa AD dengan di ikuti lebih dari 3000 penonton, AWSMFSTVL memanjakan para penonton dengan nuansa La Plancha di dalam venue dan juga panitia menyediakan food truck yang dapat dinikmati penonton.
   	</p>
   	<img class="content-image" src="image/image.png">
   	<p class="text-justify">     
   		AWSMFSTVL 2016 kali ini menghadirkan musisi papan atas Indonesia yaitu, FLO, Danilla, Kimokal, The Overtunes, White Shoes & The Couples Company, Dipha Barus, Teza Sumendra, dan RAN. Acara di mulai pada pukul 16.15 dibuka dengan MC dan sedikit sambutan oleh Rezqi Budiman selaku Ketua Pelaksana.
   	</p>
   	<img class="content-image" src="image/image2.png">
   	<p class="text-justify">
   		AWSMFSTVL pun semakin pecah dengan tampilnya Dipha Barus, DJ yang sedang naik daun ini memainkan lagu yang di aransemen ulang seperti Closer, I Love it, Till it Hurts, Pria kelahiran Jakarta ini membuat malam itu pun menjadi AWESOME dengan lagu No One Can’t Stop Us bersama Kalulla. Malam terus berlanjut 
   	</p>
   	<img class="content-image" src="image/image3.png">
   	<p class="text-justify">
   		 Kami Pengurus HMBTI 2016 meminta partisipasi kalian untuk melancarkan acara ini dengan membantu kami melalui platform ini, mari belilah merchandise dan souvenir kami dan jangan lupa menshare selalu kegiatan ini. Atas nama panitia kami mohon bantuannya.<br>
		 SEE YOU ON AWSMFSTVL 2017 AWESOME PEOPLE! #awsmfstvl #awsmpeople #tropiescape-AR-
   	</p>
   	
   </div>
   <div class="col-centered col-lg-8">
		<button class="btn-supp2 btn btn-primary"><b>Support</b></button>
	</div>

   	<div class="col-centered col-lg-7">
   		<button class="btn-save2 btn btn-primary"><img src="image/Save button.png"></button>
   	</div>

</div>