<?php require_once('Connections/cms.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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
mysqli_select_db($cms, $database_cms);
$query_bio = "SELECT * FROM cmsPages WHERE pageID = 158";
$bio = mysqli_query($cms, $query_bio) or die(mysqli_error($cms));
$row_bio = mysqli_fetch_assoc($bio);
$totalRows_bio = mysqli_num_rows($bio);

$query_reviews = "SELECT * FROM cmsPages WHERE pageID = 156";
$reviews = mysqli_query($cms, $query_reviews) or die(mysqli_error($cms));
$row_reviews = mysqli_fetch_assoc($reviews);
$totalRows_reviews = mysqli_num_rows($reviews);

$query_hire = "SELECT * FROM cmsPages WHERE pageID = 159";
$hire = mysqli_query($cms, $query_hire) or die(mysqli_error($cms));
$row_hire = mysqli_fetch_assoc($hire);
$totalRows_hire = mysqli_num_rows($hire);

$query_classes = "SELECT * FROM cmsPages WHERE pageID = 155";
$classes = mysqli_query($cms, $query_classes) or die(mysqli_error($cms));
$row_classes = mysqli_fetch_assoc($classes);
$totalRows_classes = mysqli_num_rows($classes);

$query_faqs = "SELECT * FROM cmsPages WHERE pageID = 157";
$faqs = mysqli_query($cms, $query_faqs) or die(mysqli_error($cms));
$row_faqs = mysqli_fetch_assoc($faqs);
$totalRows_faqs = mysqli_num_rows($faqs);

//photos
$query_Recordset1 = "SELECT * FROM photos WHERE albumID = 363 ORDER BY photoSequence ASC";
$Recordset1 = mysqli_query($cms, $query_Recordset1) or die(mysqli_error($cms));
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
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
<link rel="stylesheet" type="text/css" href="css/masonry.css"/>
<link rel="stylesheet" type="text/css" href="css/lightbox.css"/>
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
      <div class="padding20"><div class='embed-container'><iframe src='https://www.youtube.com/embed/CAWMVmR8Cjo' frameborder='0' allowfullscreen></iframe></div></div>
      <div class="padding20"><div class='embed-container'><iframe src='https://www.youtube.com/embed/rL0hUPL76HA' frameborder='0' allowfullscreen></iframe></div></div>
      <div class="padding20"><div class='embed-container'><iframe src='https://www.youtube.com/embed/1b6JZKFW6kE' frameborder='0' allowfullscreen></iframe></div></div>
    </div>
  </section>
  <section id="photos">
    <h2 class="text_center">photos</h2>
    <!-- grid -->
    <div class="masonry">
      <?php do { ?>
        <a class="image-link" href="http://4siteusa.com/uploads/<?php echo $row_Recordset1['file_name']; ?>">
        <div class="item">
          <div class="overlay-item">
            <div class="item-image"><img src="http://4siteusa.com/uploads/thumb-<?php echo $row_Recordset1['file_name']; ?>"></div>
            <?php if ($row_Recordset1['photoTitle'] != ''){ ?>
            <div class="item-title">
              <h2><?php echo $row_Recordset1['photoTitle']; ?></h2>
            </div>
            <?php
		}
		if ($row_Recordset1['photoDescription'] != ''){
		?>
            <p><?php echo $row_Recordset1['photoDescription']; ?></p>
            <?php
		}
		?>
          </div>
        </div>
        </a>
        <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
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
      <li><a href="#videos">Videos &amp; Photos</a></li>
      <li><a href="#faqs">Quick FAQs</a></li>
    </ul>
    <div class="social"> <a class="icon-mail4" href="mailto:norelein929@gmail.com"></a> <a class="icon-facebook3" href="https://www.facebook.com/melraghba"></a> <a class="icon-youtube3" href="https://www.youtube.com/channel/UCuwWTOUkDYeV0ZlXG7dTeUA"></a> </div>
  </nav>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
</body>
</html>
<?php
mysqli_free_result($reviews);
mysqli_free_result($bio);
mysqli_free_result($hire);
mysqli_free_result($classes);
mysqli_free_result($faqs);
?>
