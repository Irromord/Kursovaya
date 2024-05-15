<?php
session_start();
if(!isset($_SESSION["login"])):
	header("location:loggg.php");
  else:
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Panel</title>

	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="1/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>

</head>


<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title">Админ Панель</a></h1>
			<h2 class="section_title">CakesVanilla</h2><div class="btn_view_site"><a href="http://casenokeys.com/">Сайт</a></div>
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">
			<p>Администратор</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="http://casenokeys.com">CakesVanilla</a> <div class="breadcrumb_divider"></div> <a class="current">Управление</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<aside id="sidebar" class="column">
		<h3>Управление</h3>
		<ul class="toggle" id="tabs">
			<li class="icn_new_article"><a href="orders.php">Заказы</a></li>
<ul class="toggle1" id="tab1">
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li></ul>

		<footer>
			<hr />
			<p><strong>Copyright &copy; 2024 Жуковец Иулиания</strong></p>
			<p>Проект подготовлен в качестве курсовой работы</p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="main" class="column">
		<article class="module width_full" id='tabs-container'>
				</article>
	</section>
</body>
</html>
<?php endif; ?>
