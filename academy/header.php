<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<?php 
    $page = $_SERVER['PHP_SELF'];
if($page == "/index.php")
{
?>
<?php 
// include("snow.php"); 
?> 
<!-- <canvas class="snow" style="position:absolute; z-index:2;margin-top:100px;"></canvas> -->
  <?php  }
      include("admin/dbconnect.php");
    $bsql = "SELECT * FROM banner WHERE b_enddate >= CURDATE()";
    $bres = mysqli_query($conn,$bsql);
    $brow = mysqli_fetch_assoc($bres);
    $bcon = mysqli_num_rows($bres);
     ?>



<style class="cp-pen-styles">

.notification-bar {
  position: absolute;
  width: 100%;
  top: 0;
  z-index: 1000;
}
.notification-text {
  background-color: #562284;
  color: #fff;
  font-size: 14px;
  text-align: center;
  position: absolute;
  width: 100%;

  -webkit-animation: initiate 350ms ease;
  -moz-animation: initiate 350ms ease;
  -o-animation: initiate 350ms ease;
  animation: initiate 350ms ease;
}
.notification-bar input {
  display: none;
}
.notification-bar label {
  cursor: pointer;
  color: #fff;
  position: absolute;
  z-index: 5;
  display: block;
  white-space: nowrap;
  overflow: hidden;
}
.notification-bar label[for=hide] {
  
  right: 15px;
  top: 11px;
  width: 24px;
  height: 24px;
  background: url('http://blogs.discovermagazine.com/cosmicvariance/wp-content/themes/discoverblog/images/close_icon_small.png') no-repeat center center;

  -webkit-animation: initiate 350ms ease;
  -moz-animation: initiate 350ms ease;
  -o-animation: initiate 350ms ease;
  animation: initiate 350ms ease;
}
.notification-bar label[for=show] {
      width: 68px;
    height: 127px;
  
  right: 10px;
  background:#562284;
  text-align: center;

}


.notification-bar label[for=show]:before,
#badge-ribbon:after {
    content: '';
    position: absolute;
    border-bottom: 54px solid rgb(255, 255, 255);
    border-left: 51px solid transparent;
    border-right: 45px solid transparent;
    top: 90px;
    left: -16px;
   
}

.notification-bar label[for=show]:after {
  left: auto;
  right: -10px;
  -webkit-transform: rotate(140deg);
  -moz-transform:    rotate(140deg);
  -ms-transform:     rotate(140deg);
  -o-transform:      rotate(140deg);
}
/*div{

   

    font-family: 'Circular Std Book', Helvetica, Arial, " sans-serif"!important;
    src: url('CircularStd-Book.eot');
    src: url('CircularStd-Book.eot?#iefix') format('embedded-opentype'),
        url('CircularStd-Book.woff') format('woff'),
        url('CircularStd-Book.ttf') format('truetype'),
        url('CircularStd-Book.svg#CircularStd-Book') format('svg'); 
 
}*/

/* Function */
.notification-bar input[value=show]:checked ~ label[for=show],
.notification-bar input[value=hide]:checked ~ label[for=hide],
.notification-bar input[value=hide]:checked ~ .notification-text {
  -webkit-transition: ease 350ms;
  -moz-transition: ease 350ms;
  -o-transition: ease 350ms;
  transition: ease 350ms;
  
  -webkit-transform: translateY(-100%);
  -moz-transform: translateY(-100%);
  -o-transform: translateY(-100%);
  transform: translateY(-100%);
}
.notification-bar input[value=hide]:checked ~ label[for=show],
.notification-bar input[value=show]:checked ~ label[for=hide],
.notification-bar input[value=show]:checked ~ .notification-text {
  -webkit-transition: ease 350ms;
  -moz-transition: ease 350ms;
  -o-transition: ease 350ms;
  transition: ease 350ms;
  
  -webkit-transform: translateY(0%);
  -moz-transform: translateY(0%);
  -o-transform: translateY(0%);
  transform: translateY(0%);
}

/* Inital Animation */
@-webkit-keyframes initiate {
  0% {
    -webkit-transform:translateY(-100%);
  }
  50% {
    -webkit-transform:translateY(-50%);
  }
  100% {
    -webkit-transform:translateY(0%);
  } 
}
@-moz-keyframes initiate {
  0% {
    -moz-transform:translateY(-100%);
  }
  50% {
    -moz-transform:translateY(-50%);
  }
  100% {
    -moz-transform:translateY(0%);
  } 
}
@-o-keyframes initiate {
  0% {
    -o-transform:translateY(-100%);
  }
  50% {
    -o-transform:translateY(-50%);
  }
  100% {
    -o-transform:translateY(0%);
  } 
}
@keyframes initiate {
  0% {
    transform:translateY(-100%);
  }
  50% {
    transform:translateY(-50%);
  }
  100% {
    transform:translateY(0%);
  } 
   .fontt {
    font-family: 'Poppins', sans-serif;
}
}</style>
<style>
a{
  
      font-family: 'Circular Std Book', Helvetica, Arial, " sans-serif"!important;
    src: url('CircularStd-Book.eot');
    src: url('CircularStd-Book.eot?#iefix') format('embedded-opentype'),
        url('CircularStd-Book.woff') format('woff'),
        url('CircularStd-Book.ttf') format('truetype'),
        url('CircularStd-Book.svg#CircularStd-Book') format('svg'); 
   

}
</style>
<script type="application/ld+json"> 
                {
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "url": "http://www.redbackacademy.com",
                    "logo": "http://www.redbackacademy.com/logo.png",
                    "legalName" : "Redback IT Solutions Pvt  Ltd.,",
                    "contactPoint" : [{
                        "@type" : "ContactPoint",
                        "telephone" : "+91-818-998-5559",
                        "contactType" : "Customer Service",
                        "contactOption" : "Contact" 
                    }],
                     "sameAs" : [ 
 "https://www.facebook.com/RedbackAcademy",
 "https://twitter.com/redbackacademy",
 "https://plus.google.com/+Redbackacademy",
    "https://www.pinterest.com/redbackacademy",
    "http://youtube.com/redbackacademy"
 ]
                }
            </script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?nVBvLxlsn0bt8eo0E1JWXvtsF9IC3CRL";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>

<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>

   


<!-- WP Content Copy Protection -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46788350-1', 'redbackacademy.com');
  ga('send', 'pageview');

</script>
<!--  Ribbon TOP Add -- >
  <!-- to show to ribbon change style display: none; to  display:block; -->
<?php 
if($bcon >= 1) { ?>
<div class="demo-wrapper" style="display: block;">
  <div class="notification-bar">
    <input id="hide" type="radio" name="bar" value="hide" checked="checked">
    <input id="show" type="radio" name="bar" value="show">
    
    <label for="hide"></label>

    <label for="show">SAVE <br> UPTO <br><?php echo $brow['b_offerper']; ?></label>
    
    <div class="notification-text"><a href="#" data-toggle="modal" data-target="#banner"><img src="http://redbackacademy.com/admin/uploads/<?php echo $brow['b_image']; ?>" alt="<?php echo $brow['b_title']; ?>"></a></div>
  </div>
</div> 

  <div id="banner" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0499AF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h6 style="color: #fff;">Scholarship on our top courses</h6>
      </div>
      <div class="modal-body" style="text-align: center;">
        <p>Fast-track your career with scholarships just for you</p>
        <div class="row">
        <div class="col-md-5" style="padding:20px;border:1px solid #909090;margin:20px;text-align: center;">
        	<p>Enroll for any offline classroom courses upto <span style="color:#0499AF;"><?php echo $brow['b_offerper']; ?></span> discount only few contact soon.</p>

        </div>	
         <div class="col-md-5" style="padding:20px;border:1px solid #909090;margin:20px;text-align: center;">
        	<p>Enroll for any offline classroom courses upto <span style="color:#0499AF;"><?php echo $brow['b_offerper']; ?></span> discount only few contact soon.</p>

        </div>
		</div>
        <a href="#" data-toggle="modal" data-target="#enroll" style="background-color:#0499AF;padding:10px;color:#fff; ">Enroll Now</a>
        <br>
        <h2>+91 81899 85559 | 81899 85551</h2>
      </div>
        </div>

  </div>
</div>
<div id="enroll" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0499AF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h6 style="color: #fff;">Enroll Your Course Now</h6>
      </div>
      <div class="modal-body" style="text-align: center;">
        <p>Fast-track your career with scholarships just for you</p>

         
<?php
         $sendto   = "info@exoncorp.com";
if(isset($_POST['submit']))
  {
 
$name = nl2br($_POST['name']);
$mail = nl2br($_POST['email']);
$mobile = nl2br($_POST['mobile']);
$course = nl2br($_POST['course']); 
$message = nl2br($_POST['message']); 


        $subject  = "Redback.in Contact Page";
        $headers  = "From: " . strip_tags($mail) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($mail) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<div style='border:1px solid grey;'> <img src='http://redbackacademy.com/images/logo.png'> <div style='float:right;'><a href='http://facebook.com/exoncorp'><i class='fa fa-facebook' style='color:red'></i></a> </div>\r\n";
        $msg .= "<div style='width:100%;height:75px;color:white;background-color:#232222;text-align:center;padding-top:20px;'><h1>Offers Enroll From Redback Academy</h1></div>\r\n"; 
               $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Student Enrolled Detail</h2>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Name :</strong> ".$name."</p>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Email :</strong> ".$mail."</p>\r\n";
  	$msg .= "<p><strong style='text-transform:uppercase;'> Mobile:</strong> ".$mobile."</p>\r\n";
 	$msg .= "<p><strong style='text-transform:uppercase;'> Course :</strong> ".$course."</p>\r\n";
      	$msg .= "<p><strong style='text-transform:uppercase;'> Message :</strong> ".$message."</p>\r\n";
        $msg .= "</div></div>";
        $msg .= "<div style='background-color:#28435F;text-align:center;text-decoration:none;color:red;width:100%; height:50px;padding-top:10px;'><p>&copy; 2016-2017 Redback.in. Powered By <a href='http://redbackstudios.in' style='text-decoration:none;color:red;'>Redback Studios</a></p></div>";
        $msg .= "</body></html>";
        $mails = mail ($sendto,$subject,$msg,$headers);

if($mails == true)
{
    echo ("<script language='javascript'> window.alert('Thanks For your Details!'); </script>");
}
else
{
    echo ("<script language='javascript'> window.alert('Failed! Please Try Again!'); </script>");
}
    }  ?>
        <div class="row">
        <div class="col-md-12">
        	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        	<div class="form-group">
        	<input type="text" name="name" class="form-control" placeholder="Name" required="">
        	</div>
        	<div class="form-group">
        	<input type="email" name="email" class="form-control" placeholder="Email" required="">
        	</div>
        	<div class="form-group">
        	<input type="text" name="mobile" class="form-control" placeholder="Mobile" required="" pattern="[789][0-9]{9}">
        	</div>
        	<div class="form-group">
        	<input type="text" name="course" class="form-control" placeholder="Course your Interest" required="">
        	</div>
        	<div class="form-group">
        	<textarea placeholder="Message" class="form-control" name="message"></textarea>
        	</div>
        	<input type="submit" name="submit" value="Enroll Now" class="btn btn-primary">
        	</form>
		</div>
     </div>
      </div>
        </div>

  </div>
</div>
<!-- End Ribbon TOP add -->

<?php } ?>

   <header id="header" class="gv-fixonscroll fontt">
      <div class="topbar">
        <div class="container">
                         <div class="region region-topbar">
    <div id="block-block-12" class="block block-block no-title">
  <div class="block-inner clearfix">

    <div class="block-title">
                      </div> 
   
    <div class="block-content">
      <div>
        <div class="pull-left text-left">
<ul class="inline"><li><a target="_blank" href="<?php echo $row['c_facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a target="_blank" href="<?php echo $row['c_twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
   <li><a target="_blank" href="<?php echo $row['c_googleplus']; ?>"> <i class="fa fa-google-plus"></i></a></li>
  <li><a target="_blank" href="<?php echo $row['c_youtube']; ?>"> <i class="fa fa-youtube"></i></a></li>

<li><a target="_blank" href="<?php echo $row['c_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a target="_blank" href="<?php echo $row['c_blog']; ?>"><i class="fa fa-rss"></i></a></li>
<li><a target="_blank" href="<?php echo $row['c_flickr']; ?>"> <i class="fa fa-flickr"></i></a></li>
<li><a target="_blank" href="https://velloreads.com/Vellore/Redback-IT-Academy"><i class="fa fa-buysellads"></i></a></li>
</ul></div>
 

<div class="pull-right text-right">
<ul class="inline"><!--<li><span> <i class="fa fa-clock-o"></i>Mon - Fri : 09:00 - 17:00</span> </li>-->
<li><span> <i class="fa fa-phone"></i><a href="tel:+91 818 998 5559">(+91) - 818 998 5559  </span> </li>
<li><span><i class="fa fa-envelope"></i><a href="mailto:info@exoncorp.com">info@exoncorp.com</a></span></li>
</ul></div>
<div class="pull-right text-left">
<ul class="inline"><!--<li><span> <i class="fa fa-clock-o"></i>Mon - Fri : 09:00 - 17:00</span> </li>-->
<li><span> <i class="fa fa-phone"></i><a href="#"><b>MULTIMEDIA</b></span> </li>
<li><span><i class="fa fa-envelope"></i><a href="#"><b>SKILL DEVELOPMENT</b></a></span></li>
<li><span><i class="fa fa-envelope"></i><a href="#"><b>SOFTWARE</b></a></span></li>

</ul></div>

      </div>
    </div>  
  </div>
</div>
  </div>
                  </div>
      </div>    
      <div class="header-main">
         <div class="container">
            <div class="header-main-inner">
               <div class="row">
                  <div class="col-md-3 col-xs-5 pull-left">
                                                <h1 class="logo">
                                 <a href="https://exoncorp.com/academy/index.php" title="Home" rel="home" id="logo">
                                       <img src="logo.png" alt="image">
                                 </a>
                           </h1>
                     
                                       </div>

                  <div class="col-md-9 col-xs-7 area-main-menu pull-right">
                    <div class="region region-main-menu">
    <div id="block-tb-megamenu-main-menu" class="block block-tb-megamenu no-bg no-margin position-static no-title">
  <div class="block-inner clearfix">

    <div class="block-title">
                      </div> 
   
    <div class="block-content">
      <div>
        <div  class="tb-megamenu tb-megamenu-main-menu">
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar tb-megamenu-button" type="button">
      <i class="fa fa-reorder"></i>
    </button>
    <div class="nav-collapse  always-show">
    <ul  class="tb-megamenu-nav nav level-0 items-7">
  <li  data-id="218" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown active active-trail">
  <a href="https://exoncorp.com/academy/index.php"  class="dropdown-toggle">
        
    Home          <!--<span class="caret"></span>-->
          </a>
 <!-- <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-1" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-5">
  <li  data-id="1117" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega active active-trail">
  <a href="home-edu-v1.php"  title="Home Education 1">
        
    Home Education 1          </a>
  </li>

<li  data-id="1118" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="home-edu-v2.php"  title="Home Education 2">
        
    Home Education 2          </a>
  </li>

<li  data-id="1194" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="home-edu-v3.php"  title="Home Education 3">
        
    Home Education 3          </a>
  </li>

<li  data-id="1195" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="home-v1.php"  title="Home business 1">
        
    Home business 1          </a>
  </li>

<li  data-id="537" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="home-v2.php"  title="Home business 2">
        
    Home business 2          </a>
  </li>
</ul>
  </div>
</div>
</div>
  </div>
</div>-->
</li>


 

<li  data-id="561" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
  <a href="https://exoncorp.com/academy/courses" class="dropdown-toggle" title="it-courses">
        
    IT Courses        <span class="caret"></span>
          </a>
  <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-4" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-2">
  <li  data-id="786" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/microsoft-certifications"  title="Microsoft IT Courses">
        
    Microsoft          </a>
  </li>

<li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/cisco-certifications"  title="Cisco IT Courses">
        
    Cisco          </a>
  </li>
  <li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/redhat-certifications"  title="Redhat IT Courses">
        
    Redhat          </a>
  </li>
  <li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/vmware-certifications"  title="Vmware IT Courses">
        
    Vmware          </a>
  </li>
  <li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/comptia-certifications"  title="Comptia IT Courses">
        
    Comptia          </a>
  </li>
  <li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/security-certifications"  title="Security | (Isc2) | Sans | ISACA IT Courses">
        
    Security | (Isc2)  | Sans | ISACA        </a>
  </li>
            <li  data-id="787" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/ethical-hacking-certifications"  title="Ethical Hacking | Forensics IT Courses">
        
    Ethical Hacking | Forensics        </a>
  </li>
</ul>
  </div>
</div>
</div>
  </div>
</div>
</li>


<li  data-id="1224" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
  <a href="https://exoncorp.com/academy/certifications"  class="dropdown-toggle" title="Courses">
        
    Certifications        
         
          
            <span class="caret"></span>
          </a>
  <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-2" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-2">
 <!-- <li  data-id="1229" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="courses.php"  title="Course Grid">
        
    Course Grid          </a>
  </li>-->
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega dropodown-toggle">
  <a href="https://exoncorp.com/academy/certifications/hardware" >
        
    HARDWARE         </a> 
    
     
  </li><li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega dropodown-toggle">
  <a href="https://exoncorp.com/academy/certifications/networking" >
        
    Networking         </a> 
    
     
  </li><li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega dropodown-toggle">
  <a href="https://exoncorp.com/academy/certifications/server" >
        
   Server         </a> 
    
     
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega dropodown-toggle">
  <a href="https://exoncorp.com/academy/certifications/security" >
        
   Security         </a> 
    
     
  </li>

<li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega dropodown-toggle">
  <a href="https://exoncorp.com/academy/certifications/android-development" >
        
     Android Development         </a> 
    
     
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/certifications/web-development" >
        
    Web Development         </a>
  </li>
    <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/python-certification.php" >
        
    Python Development        </a>
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/certifications/seo-digital-marketing" >
        
    SEO | Digital Marketing       </a>
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/certifications/cloud-bigdata" >
        
    Cloud | Bigdata        </a>
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/certifications/itil" >
        
    ITIL       </a>
  </li>
  <li  data-id="1228" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/certifications/iso" >
        
    ISO | Six Sigma

        </a>
  </li>
  
  
  
</ul>
  </div>
</div>
</div>
  </div>
</div>
</li>





<li  data-id="1225" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
  <a href="https://exoncorp.com/academy/programs/"  class="dropdown-toggle" title="Teachers">
        
   Programs          <span class="caret"></span>
          </a>
  <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-3" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-2">
  <li  data-id="1227" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/it-security-programs.php"  title="Teachers Grid">
        
    IT Security Programs          </a>
  </li>

<li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/it-programs.php"  title="Teacher Single">
        
    IT Programs          </a>
  </li>
  
  <li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/it-service-management.php"  title="Teacher Single">
        
    IT Service Management          </a>
  </li>
            <li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/software-programs.php"  title="Teacher Single">
        
    Software Programs         </a>
  </li>
            <li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/corporate.php"  title="Teacher Single">
        
    Corporate Program         </a>
  </li>
            <li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/programs/careers.php"  title="Teacher Single">
        
    Career Programs        </a>
  </li>
   <li  data-id="1226" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="#"  title="Teacher Single">
        
    Soft Skill Programs        </a>
  </li>
</ul>
  </div>
</div>
</div>
  </div>
</div>
</li>


<li  data-id="547" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="center" data-group="0" data-hidewcol="1" data-hidesub="0" class="tb-megamenu-item level-1 mega mega-align-center sub-hidden-collapse dropdown">
  <a href="https://exoncorp.com/academy/services.php"  class="dropdown-toggle">
        
Services         <span class="caret"></span>
          </a>
  <div  data-class="" data-width="750" style="width: 750px;" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="5" data-hidewcol="0" id="tb-megamenu-column-5" class="tb-megamenu-column span5  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-11">
  <li  data-id="560" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/workshop.php" >
        
    Workshop          </a>
  </li>

<li  data-id="557" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/onsite.php" >
        
    On-Site Training          </a>
  </li>

<li  data-id="556" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/customized.php" >
        
    Customized Training         </a>
  </li>

<li  data-id="555" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/careers.php" >
        
    Career Programs       </a>
  </li>

<li  data-id="554" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/boot.php" >
        
    Boot Camp          </a>
  </li>

<li  data-id="559" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/webinars.php" >
        
    Webinars        </a>
  </li>

<li  data-id="550" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/final-year-project-in-vellore.php" >
        
    Final Year Projects          </a>
  </li>

<li  data-id="558" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/internship-in-vellore.php" >
        
    Internships         </a>
  </li>

<li  data-id="785" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/corporate.php" >
        
    Corporate Training          </a>
  </li>

  <li  data-id="785" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/online-training.php" >
        
    Online Training        </a>
  </li>


</ul>
  </div>
</div>

<div  data-showblocktitle="1" data-class="" data-width="7" data-hidewcol="" id="tb-megamenu-column-6" class="tb-megamenu-column span7  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <div  data-type="block" data-block="block--8" class="tb-megamenu-block tb-block tb-megamenu-block">
  <div class="block-inner">
    <div id="block-block-8" class="block block-block ">
  <div class="block-inner clearfix">

    <div class="block-title">
                    <h2><span>SPEECH BY GOOGLE CEO </span></h2>
                </div> 
   
    <div class="block-content">
      <div>
        <div class="margin-bottom-10"><J>Inspirational Speech By Sundar Pichai on BEST CAREER GUIDANCE AND ADVICE FOR A SUCCESSFUL LIFE PATH</J> </div>
        <BR>
<div class="clearfix">
<iframe src="https://www.youtube.com/embed/H8n4DJpzWj0" frameborder="0"" style="width:100%; height:250px allowfullscreen=" "></iframe></div>
      </div>
    </div>  
  </div>
</div>
  </div>
</div>
  </div>
</div>
</div>
  </div>
</div>
</li>

<!--<li  data-id="545" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
  <a href="https://exoncorp.com/academy/content/page.php"  class="dropdown-toggle">
        
    Blog         <span class="caret"></span>
          </a>
  <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-7" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-4">
  <li  data-id="433" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/gallery.php"  title="Gallery">
        
    Gallery          </a>
  </li>

<li  data-id="423" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/contact.php"  title="Contact">
        
    Contact          </a>
  </li>

<li  data-id="546" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/fullwidth/pricing-table.php" >
        
    Pricing table          </a>
  </li>

<li  data-id="422" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/forum.php"  title="Forum">
        
    Forum          </a>
  </li>
</ul>
  </div>
</div>
</div>
  </div>
</div>
</li>-->

<li  data-id="436" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
  <a href="services.php"  class="dropdown-toggle" title="Post">
        
    Company          <span class="caret"></span>
          </a>
  <div  data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
  <div class="mega-dropdown-inner">
    <div  class="tb-megamenu-row row-fluid">
  <div  data-class="" data-width="12" data-hidewcol="0" id="tb-megamenu-column-8" class="tb-megamenu-column span12  mega-col-nav">
  <div class="tb-megamenu-column-inner mega-inner clearfix">
        <ul  class="tb-megamenu-subnav mega-nav level-1 items-9">
  <li  data-id="798" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="http://ecxoncorp.com/" target="_blank"  title="Blog Masonry 2 columns">
        
    Blog          </a>
  </li>

<li  data-id="799" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="clients.php"  title="Blog Masonry 3 columns">
        
    Clients          </a>
  </li>

<li  data-id="800" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="news.php"  title="Blog list">
        
    News         </a>
  </li>

<li  data-id="431" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="http://z13.invisionfree.com/exoncorp/index.php" target="_blank"  title="Category Fashion">
        
    Forums        </a>
  </li>

<li  data-id="432" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/jobs.php"  title="Category Lifestyle ">
        
    Careers          </a>
  </li>

<li  data-id="446" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/about.php"  title="Post Image">
        
    About         </a>
  </li>

<li  data-id="438" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/enquiry.php"  title="Post Gallery">
        
    Enquiry         </a>
  </li>

<li  data-id="437" data-level="2" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="1" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-2 mega">
  <a href="https://exoncorp.com/academy/contactus.php"  title="Post Video">
        
    Contact Us         </a>
  </li>


</ul>
  </div>
</div>
</div>
  </div>
</div>
</li>
</ul>
      </div>
  </div>
      </div>
    </div>  
  </div>
</div>
  </div>
                                       <div class="search-region hidden-xs hidden-sm ">
                          <div class="region region-search">
    <div id="block-search-form" class="block block-search no-padding no-margin no-title">
  <div class="block-inner clearfix">

    <div class="block-title">
                      </div> 
   
    <div class="block-content">
      <div>
        <div><div class="gavias-search-form">
   <div class="search-icon">
   	 <a href="https://exoncorp.com/academy/admin/login.php"> <i class="fa fa-user"></i></a>
   </div>
</div>   

</div>    </div>
    </div>  
  </div>
</div>
  </div>
                     </div>
                     
               </div>   
               </div> 
            </div>     
         </div>
      </div>   

   </header>
   <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?nVBvLxlsn0bt8eo0E1JWXvtsF9IC3CRL";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WFDW5C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WFDW5C');</script>
<!-- End Google Tag Manager -->
<script type="text/javascript">
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</script>


<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86))

{e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||

e.which==86)){}return false}
</script>

<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46788350-1', 'redbackacademy.com');
  ga('send', 'pageview');

</script>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/78734/script.js');
</script>
  