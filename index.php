<?php
session_start();

    $cookie1_name = 'ClickAde';
    $cookie2_name = 'LastAde';
  
    unset($_COOKIE[$cookie1_name]);
    unset($_COOKIE[$cookie2_name]);
  
    $res = setcookie($cookie1_name, '');
    $res2 = setcookie($cookie2_name, '');

 
//unset($_SESSION['place']); 

include 'universal.php';
$ffi=mysqli_query($con,"select * from user");
    while($dataffi=mysqli_fetch_row($ffi))
{   
 //echo   $dataffirr=$dataffi[8];
 //echo    $browirr=$dataffi[9];
if($dataffirr== $_SERVER['REMOTE_ADDR'] && $browirr==$_SERVER['HTTP_USER_AGENT']){
   	$rdataffirr=mysqli_query($con,"select * from user");
    $datarrowrr=mysqli_fetch_row($rdataffirr);
    $d=$datarrowrr[2];
    $_SESSION['userlogined']=$d;
}
}
 $_SESSION['backurl']=$_SERVER['REQUEST_URI'];
if(isset($_POST['searchsubmit'])){
    
    $selectvalue=$_POST['selectvalue'];

   $place=$_POST['customword'];
   $_SESSION['place']=$place;
    $_SESSION['selectvalue']=$selectvalue;
       // header('location:'.$selectvalue);
      if($place!=""){
          header('location:'.$selectvalue.'?place='.$place);
     }
     else{
          header('location:'.$selectvalue);
     }
    
   
}
if(isset($_POST['bodysubmit'])){
    $place=' ';
    $_SESSION['place']=$place;
    $page=$_POST['page'];
    
    header('location:'.$page.'?place='.$place);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<title>Allznow Search, Find, Rent, Buy or Post free ads for paying guest PG, houses, flats, apartment, commerical space </title>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




<meta name="description" content="Post free ads, Search find rent Paying guest house Pg, Search find rent house, Search find rent flats or apartment,
Search commerical space or commercial rent, Buy a house, Buy a flat, Buy an apartment, Buy shop or shops, post free ads, Post unlimited ads, 1 BHK, 2 Bhk, 3 BHK, 4 BHK 
5 BHK, 6 BHK, 7 BHK, Single room, Single PG, Self cooking pg,
Post free ads for paying guest house PG, Post free ads for house or rent house, Post free ads for flats or apartments, 
 Post free ads for shops or commercial rents" >

<meta name="keyword" content="Post free ads, Search find rent Paying guest house Pg, Search find rent house, Search find rent flats or apartment,
Search commerical space or commercial rent, Buy a house, Buy a flat, Buy an apartment, Buy shop or shops, post free ads, Post unlimited ads, 1 BHK, 2 Bhk, 3 BHK, 4 BHK 
5 BHK, 6 BHK, 7 BHK, Single room, Single PG, Self cooking pg,
Post free ads for paying guest house PG, Post free ads for house or rent house, Post free ads for flats or apartments, 
 Post free ads for shops or commercial rents " >




<!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">-->

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<!--<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">-->

<!--<link rel="stylesheet" type="text/css" href="assets/css/animate.css">-->

<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

<!--<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">-->

<link rel="stylesheet" type="text/css" href="assets/css/main.min.css">

<!--<link rel="stylesheet" type="text/css" href="assets/css/main.css">-->

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- save adds styles and scripts starts here -->
        <style>
          @media only screen and (max-width: 991px)
          {
              .fl-figure,.fl-figure-l
        {
            float: none!important;;
        }
     }
              
    
    @media only screen and (max-width: 761px) {
        .search-glass {
            z-index: 1;
            position: absolute;
            font-size: 27px;
            right: 16px;
            top: 75px;
    color: #e91e63;
        }
        
    }
    @media(max-width:550px) {
    .postAde {
        width: 50%!important;
    }
}
.fl-figure{
    float: right;
}.fl-figure-l{
    float: left;
}
            /* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}

.trigger_popup_fricc 
{
    /*cursor: pointer;*/
    font-size: 14px;
    /*display: inline-block;*/
    /*font-weight: bold;*/
}


            .section-tit {
                font-size: 50px;
                color: #e01e63;
                line-height: 60px;
                font-weight: 1000;
                padding-bottom: 15px;
                margin-bottom: 20px;
                margin-top: 20px;
                font-family: Verdana;
                font-weight: bold;
                text-align: center;
                position: relative
            }

            .section-tit: {
                position: absolute;
                content: '';
                height: 3px;
                width: 70px;
                margin-left: -90px;
                bottom: 40px;
                background-color: #e01e63
            }

            .section-tit:{
                position: absolute;
                content: '';
                height: 3px;
                width: 70px;
                margin-left: 20px;
                bottom: 40px;
                background-color: #e91e63
            }
            @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
                .section-tit {
                    font-size: 36px;
                    color: #e01e63;
                    line-height: 60px;
                    font-weight: 700;
                    padding-bottom: 15px;
                    margin-bottom: 1px;
                    margin-top: 15px;
                    text-align: center;
                    font-family: Verdana;
                    position: relative
                }
                @media only screen and (max-width: 1000px)
{
 .navbar-brand{
     padding-top: 10px ;
 }
            .section-tit:before {
                position: absolute;
                content: '';
                height: 3px;
                width: 70px;
                margin-left: -90px;
                bottom: 40px;
                background-color: #fff
            }

            .section-tit:after {
                position: absolute;
                content: '';
                height: 3px;
                width: 70px;
                margin-left: 20px;
                bottom: 40px;
                background-color: #fff
            }
            
                /* Styles */
            }



/* Popup box BEGIN */
        </style>
     
<!-- save adds styles and scripts ends here -->
</head>
<body>

<header id="header-wrap">
    
    
<!--<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><i class="lni-phone"></i> +0123 456 789</li>
<li><i class="lni-envelope"></i> support@gmail.com</li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">
<div class="roof-social float-right">
<a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
<a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
<a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
<a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
<a class="google" href="#"><i class="lni-google-plus"></i></a>
</div>
<div class="header-top-right float-right">
<a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
<a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
</div>
</div>
</div>
</div>
</div>-->
<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" alt="no data"></a>
</div>



<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
<?php  if(isset($_SESSION['userlogined'])){ ?>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
My Account
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="myads.php">My Ads</a>
<a class="dropdown-item" href="savedadds/savedadds.php">Saved Ads <img height="19" width="20" src="assets/img/SAVE.png"> </a>
<a class="dropdown-item" href="settings.php">Settings</a>

</div>
</li>
<li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
<?PHP }else{?>

<li class="nav-item"><a class="nav-link" href="forgotpasword.php">Forgot Password</a></li>
<li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
<?php
}
?>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
More
</a>
<div class="dropdown-menu">

<a class="dropdown-item" href="aboutus.php">About us</a>
<a class="dropdown-item" href="tnc.php">Terms and conditions</a>
<a class="dropdown-item" href="contactus.php">Contact Us</a>
<?php if($_SESSION['userlogined']==""){
echo '<a class="dropdown-item" href="forgotverificationcode.php">Resend Verification Code</a>';
} ?>

</div>
</li>

</ul>
<div class="post-btn">
<a class="color-w btn btn-common "><i class="lni-pencil-alt"></i> Post an Ad</a>
</div>
</div>
</div>

<ul class="mobile-menu">
<li><a class="active" href="../index.php" style="text-decoration: none;" >Home</a></li>
<?php  if(isset($_SESSION['userlogined'])){
?>
<li><a href="myads.php" style="text-decoration: none;" >My Ads</a></li>

<li><a href="savedadds/savedadds.php" style="text-decoration: none;" >Saved Ads  <img height="18" width="20" src="assets/img/SAVE.png"></a></li>

<li><a href="settings.php" style="text-decoration: none;" >Settings</a></li>
<li><a href="logout.php" style="text-decoration: none;" >Logout</a></li>
<?PHP }else{?>
<li><a href="signup.php" style="text-decoration: none;" >Sign Up</a></li>
<li><a href="login.php" style="text-decoration: none;" >Log In</a></li>
<li><a href="forgotverificationcode.php" style="text-decoration: none;" >Resend Verification Code</a></li>
<li><a href="forgotpasword.php" style="text-decoration: none;" >Forgot Password</a></li>


<?php
}
?>
<li><a href="aboutus.php" style="text-decoration: none;" >About Us</a></li>
<li><a href="tnc.php" style="text-decoration: none;" >Terms and conditions</a></li>
<li><a href="contactus.php" style="text-decoration: none;" >Contact Us</a></li>

</ul>
</nav>


<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9 col-lg-9 col-xs-9 text-center">
<div class="contents">

<div class="search-bar">
<div class="search-inner h-60">
    
<form class="search-form" method="POST" action="index.php">
    <div class="form-group inputwithicon">
       
<div class="select">
<b><select style="-webkit-appearance: checkbox;" name="selectvalue" required>
<option value="">CLICK here to Find PG, Houses, Flats etc.</option>
<option value="pg.php">Paying Guest </option>
<option value="renthouse.php">Rent a house </option>
<option value="sellhouse.php">Buy a house </option>
<option value="flatrent.php">Rent a flat/apartment </option>
<option value="sellflat.php">Buy a flat/apartment </option>
<option value="commercial.php">Commercial rent </option>
</select></b> 
</div>
</div>
<div class="form-group wid-50">
    <?php
    if( $_SESSION['place']==" ")
    { 
    ?>
<input style= "font-weight: 700" type="text" name="customword" value="" class="form-control pr-15" id="myInput" placeholder="Enter here the address" required>
<?php
    }else
    { 
    ?>
<input style= "font-weight: 700" type="text" name="customword" value="<?php echo  $_SESSION['place'];  ?>" class="form-control pr-15" id="myInput" placeholder="Enter here the address" required>
<?php
} 
    ?>
    </div>


<button id="mainSearch" class="btn btn-common" type="submit" name="searchsubmit"><i class="lni-search"></i> Search Now</button>
</form> 
 <a id="mirSearch">
                                        <i class="lni-search search-glass"></i>
                                        </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>

<section class="featured">
     <!-- Not loggined popup  starts-->
    <div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
         <center>  <font size="5" color="#e91e63"  ><b style="font-family: Verdana">You Are Not Logged In !</b>
         </font>
     <p><br>
      <a style="width: 100px; margin: 5px " class="popbutton btn btn-common "  href="login.php"><b>Log In</b></a> <a style="width: 100px; margin: 5px" class="popbutton btn btn-common"  href="signup.php"><b>Sign Up</b></a>
         
    </center>
 
    </div>
</div>
 <!-- Not loggined popup  ends-->


<div class="container" style="margin-bottom: 25px;">
 <br>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form  method="POST" action="index.php" enctype="multipart/form-data">
                                <input type="hidden" name="page" value="pg.php">
                                <span class="price-save">
                                    <button id="b1" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Paying Guest
                                    </button>
                                </span>
                                <a onclick="document.getElementById('b1').click();">
                                    <img class="img-fluid" src="assets/img/featured/pg 2.jpg" alt="">
                                </a>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form method="POST" action="index.php">
                                <input type="hidden" name="page" value="renthouse.php">
                                <span class="price-save">
                                    <button id="b2" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Rent house
                                    </button>
                                </span>
                                <a onclick="document.getElementById('b2').click();">
                                <img class="img-fluid" src="assets/img/featured/renthouse 2.jpg" alt=""></a>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form method="POST" action="index.php">
                                <input type="hidden" name="page" value="flatrent.php">

                                <span class="price-save">
                                    <button id="b3" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Rent flat/apartment
                                    </button>
                                </span>

                                <a onclick="document.getElementById('b3').click();">
                                <img class="img-fluid" src="assets/img/featured/rentflat 2.jpg" alt=""></a>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form method="POST" action="index.php">
                                <input type="hidden" name="page" value="sellhouse.php">
                                <span class="price-save">
                                    <button id="b4" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Sell house
                                    </button>
                                </span>
                                <a onclick="document.getElementById('b4').click();">
                                <img class="img-fluid" src="assets/img/featured/sellhouse 2.jpg" alt=""></a>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form method="POST" action="index.php">
                                <input type="hidden" name="page" value="sellflat.php">
                                <span class="price-save">
                                    <button id="b5" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Sell flat/apartment
                                    </button>
                                </span>

                                <a onclick="document.getElementById('b5').click();">
                                <img class="img-fluid" src="assets/img/featured/sell flat 2.jpg"
                                        alt=""></a>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <form method="POST" action="index.php">
                                <input type="hidden" name="page" value="commercial.php">
                                <span class="price-save">
                                    <button id="b6" type="submit" name="bodysubmit"
                                        style="color: #fff; background-color: transparent; border: none;">
                                        Commercial rent
                                    </button>
                                </span>
                                <a onclick="document.getElementById('b6').click();">
                                <img class="img-fluid" src="assets/img/featured/commer 2.jpg" alt="">
                                </a>
                            </form>
                        </figure>
                    </div>
                </div>
            </div>
            
            <h1 style="margin-top: 1em;" class="section-tit">Post Free Ad's For</h1>
            <div style="text-align: center;" class="row ">
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure class="fl-figure">
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em;  font-size: 14px;" href="pgform.php" class="btn btn-common">
                                    Paying Guest
                                </a>
                            </span>

                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Paying Guest
                                </a>
                            </span>
                            <?php
                        }?>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure>
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em;  font-size: 14px;" href="renthouseform.php" class="btn btn-common">
                                    Rent house
                                </a>
                            </span>


                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Rent house
                                </a>
                            </span>

                            <?php
                    }?>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure class="fl-figure-l">
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em;  font-size: 14px;" href="flatrentform.php" class="btn btn-common">
                                    Rent flat/apartment
                                </a>
                            </span>


                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Rent flat/apartment

                                </a>
                            </span>


                            <?php
                    }?>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure class="fl-figure">
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em;  font-size: 14px;" href="sellhouseform.php" class="btn btn-common">
                                    Sell house
                                </a>
                            </span>

                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Sell house
                                </a>
                            </span>

                            <?php
                    }?>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure>
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em; font-size: 14px; " href="sellflatform.php" class="btn btn-common">
                                    Sell flat/apartment
                                </a>
                            </span>

                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Sell flat/apartment
                                </a>
                            </span>


                            <?php
                    }?>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-6 postAde col-lg-4">
                    <div>
                        <figure class="fl-figure-l">
                            <?php  if(isset($_SESSION['userlogined'])){ ?>
                            <span class="price-save">
                                <a style="width: 11em;  font-size: 14px;" href="commercialrentform.php" class="btn btn-common">
                                    Commercial rent
                                </a>
                            </span>


                            <?php } else{?>
                            <span class="price-save">
                                <a style="width: 11em; color: #fff; " class="trigger_popup_fricc btn btn-common">
                                    Commercial rent
                                </a>
                            </span>

                            <?php
                    }?>
                        </figure>
                    </div>
                </div>
            </div>
</div>
</section>

<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">

<ul class="mt-3 footer-social">
<b>Stay connected with us in</b><br><br>
<li><a class="facebook" href="https://www.facebook.com/allznow/"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="https://twitter.com/allznow?s=03"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instagram" href="https://instagram.com/allznow?igshid=1v33abp5rcyyh"><i class="lni-instagram-filled"></i></a></li>

</ul>


</div>
</div>

</div>
</div>
</section>


</footer>

<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>

<!--<script src="assets/js/popper.min.js"></script>-->
<!--<script src="assets/js/bootstrap.min.js"></script>-->
<!--<script src="assets/js/color-switcher.js"></script>-->
<!--<script src="assets/js/jquery.counterup.min.js"></script>-->
<!--<script src="assets/js/waypoints.min.js"></script>-->
<!--<script src="assets/js/wow.js"></script>-->
<!--<script src="assets/js/owl.carousel.min.js"></script>-->
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<!--<script src="assets/js/form-validator.min.js"></script>-->
<!--<script src="assets/js/contact-form-script.min.js"></script>-->
<script src="assets/autocomplete/jquery-ui.min.js"></script>
     
        
        <script>
                    $(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
      
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
      
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    
});
    $( "#mirSearch" ).click(function() {
        $('#mainSearch').click();
    });
    
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "location.php", 
                success: function (response) {
                    if (response) {
                        console.log("1363", response)
                        let arr = response.split(",,,");
                        $("#myInput").autocomplete({
                            source: arr
                        });
                    }
                }
            });
           
        })
       
       
    </script>
    
  
  
</body>
</html>
