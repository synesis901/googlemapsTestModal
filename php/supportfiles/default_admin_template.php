<?php
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/header.php");
	echo "DealMe";
	echo ($_SERVER['DOCUMENT_ROOT']);
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/preload.php");
	echo "<link rel='stylesheet' type='text/css' href='/DealMeMVP/css/admin.css'>";
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/Classes/Search/c_search.php");
	include ($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/bodystartadmin.php");
	
?>

<div class="container-fluid">
	<div class="row">
		<!-- sidebar nav -->
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Analytics</a></li>
				<li><a href="#">Export</a></li>
			</ul>
		</div>
		<!-- main content area -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		</div>
	</div>
</div><!-- .content-area -->


<!--  test -->
<?php 
include($_SERVER['DOCUMENT_ROOT']."/DealMeMVP/php/footer.php");
?>
