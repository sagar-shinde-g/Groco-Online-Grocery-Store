<?php
include "sagar.php";
$card_number = "";
$name = "";
$expiry = "";
$cvv = "";

if (isset($_POST['card_btn_p'])) {
  $card_number = $_POST["card_number"];
  $name = $_POST["name"];
  $expiry = $_POST["expiry"];
  $cvv  = $_POST["cvv"];
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Please Wait....</strong> We Are Checking Your Card Information...If Your Information Will Be Correct We Will Redirect You On Conformatioin Page.....
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
?>
  <script>
    setTimeout(function() {
      window.location.href = "order-placed.php"
    }, 5000);
    //alert("it buttonis clicked......")
  </script>
<?php
  // sleep(3);
  // echo "ggod";
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Enter Your Card Detail">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>payment</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <link rel="stylesheet" href="css/payment.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#ffd600">
  <meta property="og:title" content="payment">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-black u-text-hover-palette-2-base" style="padding: 10px 20px;">Products</a>
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
                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Products</a>
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
  <section class="u-clearfix u-section-1" id="carousel_60c4">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-palette-2-base u-size-35 u-layout-cell-1">
              <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Enter Your Card Detail</h2>
                <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                  <form action="#" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" redirect="true">
                    <div class="u-form-group u-form-group-1">
                      <label for="name-e0f0" class="u-label">Enter Card Number</label>
                      <input type="number" placeholder="card Number...." id="name-e0f0" value="<?php echo $card_number; ?>" name="card_number" class="u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-form-group u-form-name u-form-group-2">
                      <label for="name-04db" class="u-label">Card Holder Name</label>
                      <input type="text" value="<?php echo $name; ?>" placeholder="Name" id="name-04db" name="name" class="u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-date u-form-group u-form-group-3">
                      <label for="date-d49a" class="u-label">Enter Expiry Date</label>
                      <input type="date" placeholder="MM/DD/YYYY" id="date-d49a" name="expiry" value="<?php echo $expiry; ?>" class="u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-4">
                      <label for="text-f314" class="u-label">Enter CVV Number</label>
                      <input type="number" placeholder="CVV Number....." id="text-f314" name="cvv" value="<?php echo $cvv; ?>" class="u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-form-group-5">
                      <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
                      <input type="submit" value="submit" name="card_btn_p" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors
                      then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-size-25 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-expanded-width u-image u-image-contain u-image-default u-image-1" src="image/card.jpg" alt="" data-image-width="1280" data-image-height="960">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>


</html>