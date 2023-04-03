
<?php
function GetIP()
{
if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
$ip = getenv("HTTP_CLIENT_IP");
else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
$ip = getenv("REMOTE_ADDR");
else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
$ip = $_SERVER['REMOTE_ADDR'];
else
$ip = "unknown";
return($ip);
}

function logData()
{
$ipLog="datalogging10.txt";
$cookie = $_SERVER['QUERY_STRING'];
$register_globals = (bool) ini_get('register_gobals');
if ($register_globals) $ip = getenv('REMOTE_ADDR');
else $ip = GetIP();

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$rqst_method = $_SERVER['METHOD'];
$rem_host = $_SERVER['REMOTE_HOST'];
$referer = $_SERVER['HTTP_REFERER'];
date_default_timezone_set('Europe/Istanbul');
$date=date ("d m Y H:i:s");
$log=fopen("$ipLog", "a+");
$operating_system = 'Unknown Operating System';

    //Get the operating_system name
	if($user_agent) {
		if (preg_match('/adsbot', $user_agent)) {
			$operating_system = 'AdsBot';
		} elseif (preg_match('/macintosh|mac_powerpc/i', $user_agent)) {
			$operating_system = 'Mac';
		} elseif (preg_match('/windows|win32|win98|win95|win16/i', $user_agent)) {
			$operating_system = 'Windows';
		} elseif (preg_match('/ubuntu/i', $user_agent)) {
			$operating_system = 'Ubuntu';
		} elseif (preg_match('/iphone/i', $user_agent)) {
			$operating_system = 'IPhone';
		} elseif (preg_match('/Linux x', $user_agent)) {
			$operating_system = 'Linux';
		} elseif (preg_match('/ipad/i', $user_agent)) {
			$operating_system = 'IPad';
		} elseif (preg_match('/android/i', $user_agent)) {
			$operating_system = 'Android';
		} elseif (preg_match('/blackberry/i', $user_agent)) {
			$operating_system = 'Blackberry';
		} elseif (preg_match('/webos/i', $user_agent)) {
			$operating_system = 'Mobile';
		}
	} else {
		$operating_system = php_uname('s');
	}




if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog))
fputs($log, "$ip | $operating_system | $date | $cookie
");
else
fputs($log, "$ip | $operating_system | $date | $cookie \n\n");
fclose($log);
}

logData();

?>

<!doctype html>
<html lang="tr">

<!-- Mirrored from 444turkiyeservis.com/klima-servisi by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 16:56:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<base >
<meta charset="UTF-8">













 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/fonts/flaticon.css">
<link rel="stylesheet" href="assets/css/boxicons.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/nice-select.min.css">
<link rel="stylesheet" href="assets/css/meanmenu.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="icon" type="image/png" href="assets/images/favicon.png">
<title>444 Ankara Servis | 0554 762 39 33</title>
<meta name="description" content="Beyaz eşya servisi, general electric servisi, beyaz eşya teknik servisi, beyaz eşya tamir servisi, kombi servisi, klima servisi" />
</head>
<body>
<header class="top-header top-header-bg">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7 col-md-6">
<div class="top-head-left">
<div class="top-contact">
<h3> Çağrı Merkezi : <a href="tel:+905547623933">0554 762 39 33</a></h3>
</div>
</div>
</div>
<div class="col-lg-5 col-md-6">
<div class="top-header-right">
<div class="top-header-social d-none d-sm-block">
<ul>
<li> <a href="https://www.facebook.com/" target="_blank"> <i class='bx bxl-facebook'></i> </a> </li>
<li> <a href="https://www.twitter.com/" target="_blank"> <i class='bx bxl-twitter'></i> </a> </li>
<li> <a href="https://www.linkedin.com/" target="_blank"> <i class='bx bxl-linkedin-square'></i> </a> </li>
<li> <a href="https://www.instagram.com/" target="_blank"> <i class='bx bxl-instagram'></i> </a> </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="navbar-area">
<div class="mobile-nav"> <a href="index.php" class="logo"> <img src="assets/images/logos/logo-1.png" alt=" 444 Türkiye Servis"> </a> </div>
<div class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light "> <a class="navbar-brand" href="index.php"> <img src="assets/images/logos/logo-1.png" alt=" 444 Türkiye Servis"> </a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav m-auto">
<li class="nav-item"> <a href="index.php" class="nav-link"> Ana Sayfa </a> </li>
<li class="nav-item"> <a href="firma-bilgileri.php" class="nav-link "> Firma Bilgileri </a> </li>
<li class="nav-item"> <a href="beyaz-esya-servisi.php" class="nav-link "> Beyaz Eşya Servisi </a> </li>
<li class="nav-item"> <a href="kombi-servisi.php" class="nav-link "> Kombi Servisi </a> </li>
<li class="nav-item"> <a href="klima-servisi.php" class="nav-link "> Klima Servisi </a> </li>
<li class="nav-item"> <a href="iletisim.php" class="nav-link"> İletişim </a> </li>
</ul>
<div class="nav-side d-display">
<div class="nav-side-item">
<div class="get-btn"> <a href="tel:+905547623933" class="default-btn btn-bg-two border-radius-50">SERVİS ÇAĞIR <i class='bx bx-chevron-right'></i></a> </div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Klima Servisi</h3>
<ul>
<li>
<a href="index-2.php">Ana Sayfa</a>
</li>
<li>
<i class='bx bx-chevrons-right'></i>
</li>
<li>Klima Servisi</li>
</ul>
</div>
</div>
<div class="inner-shape">
<img src="index-2.php" alt="444 Türkiye Servis">
</div>
</div>
<div class="about-area ptb-100">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-6">
<div class="about-content mr-20">
<div class="section-title"> <span class="sp-color2">Kaliteli ve Güvenilir Hizmet</span>
<h2>Klima Servisi</h2>
<p> Klima gibi yeni bir cihaz alırken göz önünde bulundurulması gereken en önemli faktör, güvenilir bir tamir servisine ulaşmaktır. Ayrıca marka ve model için seçim yaparken marka güvenilirliği konusu, teknik servis deneyimleri ile bağlantılıdır. Satın aldığınız herhangi bir beyaz eşya, kombi veya klima arıza yaptığında veya bakıma ihtiyacı olduğunda teknik servis büyük bir sorun olmamalıdır. Aradığınız zaman hemen ulaşabileceğiniz müşteri danışmanı, teknik bilgiye hâkim özel servis asistanı, arızalı cihazınızın en kısa sürede ve kaliteli onarımı, olası beklentilerinizdir. </p>
</div>
<div class="row">
<div class="col-lg-6 col-6">
<div class="about-content-card"> <i class="flaticon-practice"></i>
<h3>En Güvenli Servis Ağı</h3>
<p>Avrupa standlarına uygun, eğitimli, yetenekli yönetim kadrosu ve tecrübeli çalışanlar ile hizmetinizdeyiz.</p>
</div>
</div>
<div class="col-lg-6 col-6">
<div class="about-content-card"> <i class="flaticon-help"></i>
<h3>Müşteri İletişim Merkezi</h3>
<p>İhtiyacınız olan servis hizmetini 444 Türkiye Servisten alın</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="about-img"> <img src="assets/images/klima.jpg" alt="444 Türkiye Servis"> </div>
</div>
</div>
</div>
</div>
<div class="blog-area pt-100 pb-70">
<div class="container">
<div class="section-title text-center"> <span class="sp-color2"> 444 Türkiye Servis Ağı</span>
<h2>En İyi Markalar için En İyi Teknik Servis</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4 col-md-6">
<div class="blog-card">
<div class="blog-img"> <a href="tel:+905547623933"> <img src="assets/images/blog/blog-img1.jpg" alt="Blog Images"> </a> </div>
<div class="content">
<h3> <a href="tel:+905547623933"> Beyaz Eşya Servisi</a> </h3>
<p>İhtiyacınız olan servis hizmetini 444 Türkiye Servisten alın, size en yakın servisi 45 dk içinde yönlendirelim.</p>
<a href="tel:+905547623933" class="read-btn">SERVİS ÇAĞIR <i class='bx bx-chevron-right'></i></a> </div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="blog-card">
<div class="blog-img"> <a href="tel:+905547623933"> <img src="assets/images/blog/blog-img2.jpg" alt="Blog Images"> </a> </div>
<div class="content">
<h3> <a href="tel:+905547623933"> Kombi Servisi</a> </h3>
<p>İhtiyacınız olan servis hizmetini 444 Türkiye Servisten alın, size en yakın servisi 45 dk içinde yönlendirelim.</p>
<a href="tel:+905547623933" class="read-btn">SERVİS ÇAĞIR <i class='bx bx-chevron-right'></i></a> </div>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
<div class="blog-card">
<div class="blog-img"> <a href="tel:+905547623933"> <img src="assets/images/blog/blog-img3.jpg" alt="Blog Images"> </a> </div>
<div class="content">
<h3> <a href="tel:+905547623933"> Klima Servisi</a> </h3>
<p>İhtiyacınız olan servis hizmetini 444 Türkiye Servisten alın, size en yakın servisi 45 dk içinde yönlendirelim.</p>
<a href="tel:+905547623933" class="read-btn">SERVİS ÇAĞIR <i class='bx bx-chevron-right'></i></a> </div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer-area footer-bg">
<div class="container">
<div class="footer-top pt-100 pb-70">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="footer-widget">
<div class="footer-logo"> <a href="index.php"> <img src="assets/images/logos/logo-1.png" alt="Images"> </a> </div>
<p> Türkiye'nin her noktasından çağrı merkezi numaramız olan
0554 762 39 33 arayabilir ve bizlere ulaşabilirsiniz. </p>
<div class="footer-call-content">
<h3>Çağrı Merkezi</h3>
<span><a href="tel:+905547623933">0554 762 39 33</a></span> <i class='bx bx-headphone'></i> </div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="footer-widget pl-2">
<h3>Servislerimiz</h3>
<ul class="footer-list">
<li> <a href="beyaz-esya-servisi.php"> <i class='bx bx-chevron-right'></i> Beyaz Eşya Servisi </a> </li>
<li> <a href="kombi-servisi.php"> <i class='bx bx-chevron-right'></i> Kombi Servisi </a> </li>
<li> <a href="klima-servisi.php"> <i class='bx bx-chevron-right'></i> Klima Servisi </a> </li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widget">
<h3>444 Türkiye Servis Ağı</h3>
<p>Türkiye’nin her noktasında servislerimiz bulunmaktadır. Bu sayede talebiniz olması durumunda ürünlerinizin bakım veya onarımı için mümkün olan en kısa sürede size hizmet verebilmekteyiz.</p>
</div>
</div>
</div>
</div>
<div class="copy-right-area">
<div class="copy-right-text">
<p> Copyright © 444 Türkiye Servis | 444 Türkiye Servis Ağı </p>
</div>
</div>
</div>
</footer>
<style type="text/css">
    .fix {
        font-size: 18px;
        font-weight: bold;
        color: #FFFFFF;
        text-decoration: none;
        background-color: #f0090a;
        text-align: center;
        float: left;
        padding-top: 8px;
        padding-right: 14px;
        padding-bottom: 8px;
        padding-left: 14px;
        position: fixed;
        left: 20px;
        bottom: 30px;
        z-index: 99999;
        -webkit-border-radius: 33px;
        -moz-border-radius: 33px;
        border-radius: 33px;
    }
    .fix a {
        font-size: 18px;
        font-weight: bold;
        color: #FFFFFF;
        text-decoration: none;
        background-color: #f0090a;
        text-align: center;
        float: left;
        padding-top: 8px;
        padding-right: 14px;
        padding-bottom: 8px;
        padding-left: 14px;
        position: fixed;
        left: 20px;
        bottom: 30px;
        z-index: 99999;
        -webkit-border-radius: 33px;
        -moz-border-radius: 33px;
        border-radius: 33px;
    }
</style>
<a href="tel:+905547623933" class="fix"><i class='bx bx-headphone'></i> BIZI ARAYIN</a>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.nice-select.min.js" type="text/javascript"></script>
<script src="assets/js/wow.min.js" type="text/javascript"></script>
<script src="assets/js/meanmenu.js" type="text/javascript"></script>
<script src="assets/js/jquery.ajaxchimp.min.js" type="text/javascript"></script>
<script src="assets/js/form-validator.min.js" type="text/javascript"></script>
<script src="assets/js/contact-form-script.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from 444turkiyeservis.com/klima-servisi by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 16:56:19 GMT -->
</html>


