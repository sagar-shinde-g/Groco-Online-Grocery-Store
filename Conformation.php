<?php
// $pn1 = '';
// $pp1 = '';
// $pn2 = '';
// $pp2 = '';
// $pn3 = '';
// $pp3 = '';
// $pn4 = '';
// $pp4 = '';
// $pn5 = '';
// $pp5 = '';
$values = ["", "", "", "", "", "", "", "", "", ""];

if (isset($_GET["arrSize"])) {
  if ($_GET["arrSize"] == 0) {
    header("Location: index.php");
  } else {
    $total = $_GET["total"];
    $k = 1;
    for ($i = 1; $i <= $_GET["arrSize"]; $i++) {;
      $key = $_GET[$i . "pn"];
      $val = $_GET[$i . "pp"];
      strval($key);
      strval($val);
      $values[$k - 1] = $key;
      $k + 1;
      $values[$k] = $val;
      $k += 2;

      //echo $pn . $i;
    }

    // echo $values[1];
    // echo $values[2];
    // echo $values[3];
    // echo $values[4];
    // echo $values[5];

    // echo $values[1];
  }
}
$name = '';
$email = "";
$phone = "";
$address = "";
$pin = "";

if (isset($_POST['ai'])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address  = $_POST["address"];
  $pin  = $_POST["pincode"];

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful !</strong> Your Information Saved Succesfully...We Will Deliver Your Product On Your Address As Soon As Possible.....Please Scroll Below..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Finding the best car insurance company for you, Insurance and investing for your many sides, Finding the best car insurance company for you, The Best Insurance Companies for 2021, The Best Car Insurance Companies for 2021, Faq, Safe. Relaxing. Good to ride in. Subtly decorated., Contact Us">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Conformation</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <link rel="stylesheet" href="css/Conformation.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#ffd600">
  <meta property="og:title" content="Conformation">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-sticky u-header" id="sec-fe27">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-align-left u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="images/1.png" alt=""></span>
      <h3 class="u-align-center u-headline u-text u-text-body-color u-text-default u-text-1">
        <a href="/">Grocery Store</a>
      </h3>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-black u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-black u-text-hover-palette-2-base" href="index.php#products" style="padding: 10px 20px;">Products</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href='index.php#products' style="padding: 10px 20px;">Products</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
    <style class="u-sticky-style" data-style-id="9656">
      .u-sticky-fixed.u-sticky-9656,
      .u-body.u-sticky-fixed .u-sticky-9656 {
        box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4) !important
      }
    </style>
  </header>
  <section class="u-clearfix u-palette-2-base u-section-1" id="sec-9721">
    <div class="u-clearfix u-sheet u-valign-bottom-lg u-valign-bottom-xl u-valign-middle-xs u-sheet-1">
      <div class="u-clearfix u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-subtitle u-text u-text-default u-text-1">Your Info</h2>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-shading u-size-30 u-image-1" data-image-width="1280" data-image-height="853">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
        <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form" redirect="true">
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-form-control-hidden u-label">Name</label>
            <input type="text" value="<?php echo $name;  ?>" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" autofocus="autofocus">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-3b9a" class="u-form-control-hidden u-label">Email</label>
            <input type="email" value="<?php echo $email;  ?>" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-phone u-form-group-3">
            <label for="phone-968e" class="u-form-control-hidden u-label"></label>
            <input type="tel" value="<?php echo $phone;  ?>" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone " id="phone-968e" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-address u-form-group u-form-group-4">
            <label for="address-5b3d" class="u-form-control-hidden u-label"></label>
            <input type="text" value="<?php echo $address;  ?>" placeholder="Enter your address" id="address-5b3d" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-group-5">
            <label for="text-fe3b" class="u-form-control-hidden u-label"></label>
            <input type="number" value="<?php echo $pin;  ?>" placeholder="enter Pincode" id="text-fe3b" name="pincode" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
            <input type="submit" name='ai' value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try
            again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-c5c8">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-subtitle u-text u-text-default u-text-1">Your Order</h2>
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-1" src="images/da0a00c61c6fc957f2fab0a859d99276ab935e521ae22e80bffd90d6bbc8f1bfa809fb496cb2f016a63e720674785d6002b7dd820adcc3661bf71a_1280.png" alt="" data-image-width="769" data-image-height="1280">
                <a href="payment.php" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-1">Place
                  Order&nbsp; <span style="font-size: 1rem;">
                    <span style="font-size: 1.125rem;">
                      <span style="font-weight: 700;"></span>
                    </span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-2">Products
              </h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-3">Pricing</h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-4"><?php echo $values[0]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-6">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-5"><?php echo $values[1]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-container-layout-7">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-6"><?php echo $values[2]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-container-layout-8">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-7"><?php echo $values[3]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-7">
            <div class="u-container-layout u-similar-container u-container-layout-9">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-8"><?php echo $values[4]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-8">
            <div class="u-container-layout u-similar-container u-container-layout-10">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-9"><?php echo $values[5]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-7">
            <div class="u-container-layout u-similar-container u-container-layout-9">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-8"><?php echo $values[6]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-8">
            <div class="u-container-layout u-similar-container u-container-layout-10">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-9"><?php echo $values[7]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-9">
            <div class="u-container-layout u-similar-container u-container-layout-11">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-10"><?php echo $values[8]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-10">
            <div class="u-container-layout u-similar-container u-container-layout-12">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-11"><?php echo $values[9]; ?></h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-11">
            <div class="u-container-layout u-similar-container u-container-layout-13">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-12">
                <a href="https://search.brave.com/search?q=delivery%20charges" class="u-btn u-button-link u-button-style u-none u-text-body-color u-btn-2">delivery charges</a>
              </h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-12">
            <div class="u-container-layout u-similar-container u-container-layout-14">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-13">FREE</h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-13">
            <div class="u-container-layout u-similar-container u-container-layout-15">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-14">Total</h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-14">
            <div class="u-container-layout u-similar-container u-container-layout-16">
              <h4 class="u-align-center u-custom-item u-text u-text-default u-text-15"><?php echo $total; ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style class="u-overlap-style">
    .u-overlap:not(.u-sticky-scroll) .u-header {
      background-color: #ffffff !important
    }
  </style>
  <script>
    function infosave() {
      <?php  ?>
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>