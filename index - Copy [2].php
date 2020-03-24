<?php require_once('Connections/cms.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

//content
mysql_select_db($database_cms, $cms);
$query_bio = "SELECT * FROM cmsPages WHERE pageID = 158";
$bio = mysql_query($query_bio, $cms) or die(mysql_error());
$row_bio = mysql_fetch_assoc($bio);
$totalRows_bio = mysql_num_rows($bio);

mysql_select_db($database_cms, $cms);
$query_reviews = "SELECT * FROM cmsPages WHERE pageID = 156";
$reviews = mysql_query($query_reviews, $cms) or die(mysql_error());
$row_reviews = mysql_fetch_assoc($reviews);
$totalRows_reviews = mysql_num_rows($reviews);

mysql_select_db($database_cms, $cms);
$query_hire = "SELECT * FROM cmsPages WHERE pageID = 159";
$hire = mysql_query($query_hire, $cms) or die(mysql_error());
$row_hire = mysql_fetch_assoc($hire);
$totalRows_hire = mysql_num_rows($hire);

mysql_select_db($database_cms, $cms);
$query_classes = "SELECT * FROM cmsPages WHERE pageID = 155";
$classes = mysql_query($query_classes, $cms) or die(mysql_error());
$row_classes = mysql_fetch_assoc($classes);
$totalRows_classes = mysql_num_rows($classes);

mysql_select_db($database_cms, $cms);
$query_faqs = "SELECT * FROM cmsPages WHERE pageID = 157";
$faqs = mysql_query($query_faqs, $cms) or die(mysql_error());
$row_faqs = mysql_fetch_assoc($faqs);
$totalRows_faqs = mysql_num_rows($faqs);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Mel'Keta | Professional Bellydancer in Tennessee</title>
<meta name="description" content="Mel'Keta is a Professional Bellydancer Tennessee" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<div class="container"> 
  <!-- menu button -->
  <div id="wn_menu">MENU
    <div id="wn_hamburger"><span></span><span></span><span></span></div>
  </div>
  
  <!-- home -->
  <section id="home">
    <div class="sectionContent">
      <h1>mel'keta's raghba</h1>
      <h2>professional bellydance artist</h2>
    </div>
  </section>
  <section id="reviews">
    <div class="sectionContent">
      <h2>reviews</h2>
      <div class="translucentBG-black"> <?php echo $row_reviews['pageContent']; ?> </div>
    </div>
  </section>
  <section id="bio">
    <div class="sectionContent">
      <h2 class="purple">about me</h2>
      <div class="translucentBG"> <?php echo $row_bio['pageContent']; ?> </div>
    </div>
  </section>
  <section id="hire">
    <div class="sectionContent">
      <h2>hire</h2>
      <div class="translucentBG-black"> <?php echo $row_hire['pageContent']; ?> </div>
    </div>
  </section>
  <section id="classes">
    <div class="sectionContent">
      <h2>classes</h2>
      <div class="translucentBG"> <?php echo $row_classes['pageContent']; ?> </div>
    </div>
  </section>
  <section id="videos">
    <div class="sectionContent">
      <h2 class="centered">videos</h2>
      <div class="padding20"><div class='embed-container'><iframe src='https://www.youtube.com/embed/rL0hUPL76HA' frameborder='0' allowfullscreen></iframe></div></div>
      <div class="padding20"><div class='embed-container'><iframe src='https://www.youtube.com/embed/1b6JZKFW6kE' frameborder='0' allowfullscreen></iframe></div></div>
    </div>
  </section>
  <section id="faqs">
    <div class="faqs">
      <h2>quick faqs</h2>
      <div class="translucentBG-black"> <?php echo $row_faqs['pageContent']; ?> </div>
    </div>
  </section>
  <div class="social"> <a class="icon-mail4" href="mailto:norelein929@gmail.com"></a> <a class="icon-facebook3" href="https://www.facebook.com/melraghba"></a> <a class="icon-youtube3" href="https://www.youtube.com/channel/UCuwWTOUkDYeV0ZlXG7dTeUA"></a> </div>
  <p class="text_center padding20">Copyright &copy; MelketasRaghba.com <?php echo date("Y"); ?>, All Rights Reserved&nbsp;&nbsp;|&nbsp;&nbsp;Web Design by <a href="http://www.4siteusa.com">4 Site</a></p>
  </section>
</div>
<!-- menu overlay -->
<div class="overlay overlay-hugeinc">
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#reviews">Reviews</a></li>
      <li><a href="#bio">About Me</a></li>
      <li><a href="#hire">Hire</a></li>
      <li><a href="#classes">Classes</a></li>
      <li><a href="#videos">Videos</a></li>
      <li><a href="#faqs">Quick FAQs</a></li>
    </ul>
    <div class="social"> <a class="icon-mail4" href="mailto:norelein929@gmail.com"></a> <a class="icon-facebook3" href="https://www.facebook.com/melraghba"></a> <a class="icon-youtube3" href="https://www.youtube.com/channel/UCuwWTOUkDYeV0ZlXG7dTeUA"></a> </div>
  </nav>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
mysql_free_result($reviews);
mysql_free_result($bio);
mysql_free_result($hire);
mysql_free_result($classes);
mysql_free_result($faqs);
?>