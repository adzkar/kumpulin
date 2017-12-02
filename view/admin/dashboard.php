<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=$url."asset/img/favicon.png"?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="<?="{$url}asset/tinymce/tinymce.min.js"?>"></script>  
    <script src="<?="{$url}asset/tinymce/jquery.tinymce.min.js"?>"></script>  
	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?="{$url}asset/css/bootstrap.min.css"?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?="{$url}asset/css/animate.min.css"?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?="{$url}asset/css/paper-dashboard.css"?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?="{$url}asset/css/demo.css"?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?="{$url}asset/css/dashboard/themify-icons.css"?>" rel="stylesheet">
    <script type="text/javascript">  
     tinymce.init({  
       selector: "textarea",  
       plugins: [  
         "advlist autolink lists link image charmap print preview anchor",  
         "searchreplace visualblocks code fullscreen",  
         "insertdatetime media table contextmenu paste"  
       ],  
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"  
     });  
     </script>  

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <?php  
                $halaman = @$_GET["halaman"];
            ?>
            <ul class="nav">
                <li <?php if ($halaman == 'home')  {
                    echo "class='active'";
                } ?>
                >
                    <a href="<?="{$url}admin/dashboard/?halaman=home"?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if ($halaman == 'event') {
                    echo "class='active'";
                } ?>>
                    <a href="<?="{$url}admin/dashboard/?halaman=event"?>">
                        <i class="ti-user"></i>
                        <p>Post Event</p>
                    </a>
                </li>
                <li <?php if ($halaman == 'barang') {
                    echo "class='active'";
                } ?>>
                    <a href="<?="{$url}admin/dashboard/?halaman=barang"?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Barang / Tiket</p>
                    </a>
                </li>
                <li <?php if ($halaman == 'daftartiket') {
                    echo "class='active'";
                } ?>>
                    <a href="<?="{$url}admin/dashboard/?halaman=daftartiket"?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Daftar Tiket</p>
                    </a>
                </li>
                <li <?php if ($halaman == 'daftarsouvenir') {
                    echo "class='active'";
                } ?>>
                    <a href="<?="{$url}admin/dashboard/?halaman=daftarsouvenir"?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Daftar Souvenir</p>
                    </a>
                </li>
                <li>
                    <a href="<?="{$url}admin/dashboard/?halaman=logout"?>">
                        <i class="ti-bell"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="content">
                               <?php  
                                    include 'isi.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?="{$url}asset/js/jquery-1.10.2.js"?>" type="text/javascript"></script>
	<script src="<?="{$url}asset/js/bootstrap.min.js"?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?="{$url}asset/js/bootstrap-checkbox-radio.js"?>"></script>

	<!--  Charts Plugin -->
	<script src="<?="{$url}asset/js/chartist.min.js"?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?="{$url}asset/js/bootstrap-notify.js"?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?="{$url}asset/js/paper-dashboard.js"?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?="{$url}asset/js/demo.js"?>"></script>

	

</html>
