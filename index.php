<?php  
	include 'config/master.php';
	include 'config/web.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kumpul.in</title>
	<link rel="icon" type="image/png" sizes="96x96" href="<?=$url."asset/img/favicon.png"?>">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?="{$url}asset/css/bootstrap.min.css"?>" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?="{$url}asset/css/animate.min.css"?>" rel="stylesheet"/>
    <!-- Pembayaran page -->
	<link rel="stylesheet" href="asset/css/Pembayaran-page3.css">
	<!-- login css -->
	<link rel="stylesheet" href="asset/css/Login.css">
	<!-- signup css -->
	<link rel="stylesheet" href="asset/css/Daftar.css">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">		
	<!-- main page css -->
	<link rel="stylesheet" href="asset/css/MainPage.css">
	<!-- detail CSS -->
	<link rel="stylesheet" href="asset/css/Detail.css">
</head>
<body>
	
	<div class="page">
	<!--Top Menu-->	

  <div class="menu">
	 <div class ="container-fluid">
	  <div class="row">
	    <div class="logo_header col-lg-2">
	    	<a href="<?="{$url}"?>">
				<img src="asset/img/Logo.png" width="150px" height="55px">	
	    	</a>
		</div>

		<div class="explore_word col-lg-2">
			<p><b>EXPLORE</b></p>
		</div>

		<div class="search_field col-lg-5">
		  <form>
	        <div class="input-group">
			  <input type="text" class="form-control" placeholder="Cari Event...">
			</div>
		  </form>
		</div>

		<div class="btnGroupLogDaf col-lg-3">
			<?php  
				if (isset($_SESSION['status_masuk']) && @$_SESSION['status_masuk'] == 'sudah masuk') {
			?>
		 	 <a href="<?="{$url}Logout.php"?>" class="daftar btn btn-primary">Logout</a>	
			<?php
				} else {
			?>
		  <a href="<?="{$url}?halaman=signup"?>" class="daftar btn btn-primary">Daftar</a>	
		  <a href="<?="{$url}?halaman=login"?>" class="login btn btn-primary">Login</a>
			<?php		
				}
			?>
		</div>
	  </div>
	 </div>	
	</div>
	<!-- akhir top menu -->


	

	<?php  
		include 'isi.php';
	?>
	
	
<!-- </div> -->

	<div class="footer_style countainer-fluid" id="footernya" style="margin-top: 100px">
	     <div class="col-lg-3">
	       <img class="logo_footer" src="asset/img/Logo.png">
		   <div>
		     <p class="text_footer_1 text-justify">Kumpul.in<br> Sebuah platform pengumpulan dana untuk event-event dikampus, dengan menjual merchandise dan hasil ukm mahasiswa. <br>Hubungi kami :<br> berfeadahyuk@gmail.com</p>  
	       </div>
		   <div class="countainer-fluid cpbtn_style">
		     <div class="row">
			   <div class="col-lg-3">
			   	 <button class="cp_button btn btn-primary">
			   	  <img src="asset/img/Facebook.png">
			     </button>
			   </div>
			   <div class="col-lg-3">
			   	 <button class="cp_button btn btn-primary">
			   	  <img src="asset/img/Twitter.png">
			     </button>
			   </div>
			   <div class="col-lg-3">
			   	 <button class="cp_button  btn btn-primary">
			   	  <img src="asset/img/Google.png">
			     </button>
			   </div>
			 </div>
		   </div>
		</div>
			<div class="container">
				<div class="row"></div>
			</div>
		<p  class="text_footer_2">© Hak Cipta team Cupcake 2017</p>
	</div>
</div>
</body>
</html>