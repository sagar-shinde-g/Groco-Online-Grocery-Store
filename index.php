<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groco - Online Grocery Store</title>

    <link rel="stylesheet" href="css/swiper.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <!-- <a href="#categories">categories</a> -->
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
            <a href="About.html">About</a>
            <a href="contact-Us.html">Contact Us</a>

        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div style="visibility: hidden;" class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <!-- <div>hello aditya</div> -->
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart" id="sc">
            <!-- <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    
                </div>
            </div> -->
            <h2>your Products.....</h2>
            <div id="producthold">


            </div>

            <div class="total" id="total"></div>
            <a onclick="coc()" class="btn">checkout</a>
        </div>

        <form action="" method="POST" class="login-form">
            <h3 id="h3i">login now</h3>
            <input type="text" value="nilesh" placeholder="your email" name="user" id="user" class="box">
            <input type="password" value="pass@123" placeholder="your password" name="pass" id="pass" class="box">
            <!-- <p>forget your password <a href="#">click here</a></p> -->
            <!-- <p>don't have an account <a href="#">create now</a></p> -->
            <input type="button" onclick="loginbtn()" value="login now" name="login" id="btnw" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>fresh and <span>organic</span> products for your</h3>
            <p>The best online grocery store in India. Groco is an online supermarket for all your daily needs. Online shopping now made easy with a wide range of groceries.</p>
            <a href="#products" class="btn">shop now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/feature-img-1.png" alt="">
                <h3>fresh and organic</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

            <div class="box">
                <img src="image/feature-img-2.png" alt="">
                <h3>free delivery</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

            <div class="box">
                <img src="image/feature-img-3.png" alt="">
                <h3>easy payments</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

        </div>

    </section>

    <!-- features section ends -->

    <!-- products section starts  -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box" id="1">
                    <img src="image/product-1.png" alt="">
                    <h3>fresh orange</h3>
                    <div class="price" data-productPrice="150">1Kg - Rs 150/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(1)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="2">
                    <img src="image/product-2.png" alt="">
                    <h3>fresh onion</h3>
                    <div class="price" data-productPrice="80"> 1Kg - Rs 80/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(2)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="3">
                    <img src="image/product-3.png" alt="">
                    <h3>fresh meat</h3>
                    <div class="price" data-productPrice="300">1Kg - Rs 300/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(3)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="4">
                    <img src="image/product-4.png" alt="">
                    <h3>fresh cabbage</h3>
                    <div class="price" data-productPrice="70"> 1Kg - Rs 70/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(4)">add to cart</a>
                </div>

            </div>

        </div>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box" id="5">
                    <img src="image/product-5.png" alt="">
                    <h3>fresh potato</h3>
                    <div class="price" data-productPrice="50"> 1Kg - Rs 50/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(5)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="6">
                    <img src="image/product-6.png" alt="">
                    <h3>fresh avocado</h3>
                    <div class="price" data-productPrice="350"> 1Kg - Rs 350/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(6)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="7">
                    <img src="image/product-7.png" alt="">
                    <h3>fresh carrot</h3>
                    <div class="price" data-productPrice="150"> 1Kg - Rs 150/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(7)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="8">
                    <img src="image/product-8.png" alt="">
                    <h3>green lemon</h3>
                    <div class="price" data-productPrice="40"> 1Kg - Rs 40/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(8)">add to cart</a>
                </div>



                <div class="swiper-slide box" id="9">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/redcabbage_small-e1420762601186.jpg" alt="">
                    <h3>Cabbage, Red</h3>
                    <div class="price" data-productPrice="410"> 1Kg - Rs 410/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(9)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="10">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2014/12/bokchoy_small.gif" alt="">
                    <h3>Bok Choy</h3>
                    <div class="price" data-productPrice="130"> 1Kg - Rs 130/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(10)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="11">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/edamame_small.gif" alt="">
                    <h3>Edamame, Soybeans</h3>
                    <div class="price" data-productPrice="420"> 1Kg - Rs 420/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(11)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="12">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/cucumber_small.jpg" alt="">
                    <h3>Cucumber</h3>
                    <div class="price" data-productPrice="120"> 1Kg - Rs 120/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(12)">add to cart</a>
                </div>


                <div class="swiper-slide box" id="13">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/gingerroot_small.gif" alt="">
                    <h3>Ginger Root</h3>
                    <div class="price" data-productPrice="245"> 1Kg - Rs 245/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(13)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="14">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/peppergreen_small.jpg" alt="">
                    <h3>Pepper, Green</h3>
                    <div class="price" data-productPrice="40"> 1Kg - Rs 40/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(14)">add to cart</a>
                </div>

                <div class="swiper-slide box" id="15">
                    <img src="https://halfyourplate-4kgxi1gvwldjzby.stackpathdns.com/wp-content/uploads/2015/01/radishes_small.gif" alt="">
                    <h3>Radishes</h3>
                    <div class="price" data-productPrice="230"> 1Kg - Rs 230/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" onclick="ocl(15)">add to cart</a>
                </div>



            </div>

        </div>


    </section>

    <!-- products section ends -->

    <!-- categories section starts  -->

    <!-- <section class="categories" id="categories">

        <h1 class="heading"> product <span>categories</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/cat-1.png" alt="">
                <h3>vegitables</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-2.png" alt="">
                <h3>fresh fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-3.png" alt="">
                <h3>dairy products</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-4.png" alt="">
                <h3>fresh meat</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </section> -->

    <!-- categories section ends -->

    <!-- review section starts  -->

    <!-- <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est
                        maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/blog-1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st june, 2022 </a>
                    </div>
                    <h3>The 14 Most Nutrient-Dense Vegetables</h3>
                    <p>Here are 14 of the most nutrient-dense veggies available. Kseniya Ovchinnikova/Getty Images 1. Spinach This leafy green tops the chart as one of the most nutrient-dense vegetables. That’s because 1...</p>
                    <a href="https://www.healthline.com/nutrition/14-healthiest-vegetables-on-earth" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog-2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st june, 2022 </a>
                    </div>
                    <h3>17 Creative Ways to Eat More Vegetables</h3>
                    <p>There's more to veggies than just eating them plain. Here are 17 ways to add veggies to your everyday dishes and amp up the nutrients.</p>
                    <a href="https://www.healthline.com/nutrition/17-ways-to-eat-more-veggies" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog-3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st june, 2022 </a>
                    </div>
                    <h3>5 Myths About the Best Time to Eat Fruit (and the Truth)</h3>
                    <p> Does it really matter what time of the day you eat fruit? Here are 5 myths about the best time to eat fruit, along with the truth.</p>
                    <a href="https://www.healthline.com/nutrition/best-time-eat-fruit" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> groco <i class="fas fa-shopping-basket"></i> </h3>
                <p>The best online grocery store in India. Groco is an online supermarket for all your daily needs.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 7709080576 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 9119576348 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> nilesh@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Latur, Maharashtra, india - 413512 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
                <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <!-- <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a> -->
                <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" onclick="document.getElementById('emailsubs').value='Thanks For Subscribe'" id="emailsubs" class="btn">
                <img src="image/payment.png" class="payment-img" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> Aditya </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->















    <script src="js/swiper.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script type="text/javascript">
        var temp = 0;
        var price = 0;
        var pin = 0;
        var coArr = [];


        function ocl(p) {
            // var productsyntax = '<div class="box"><i class="fas fa-trash" ></i><img src="image/cart-img-1.png" alt=""><div class="content"><h3>watermelon</h3><span class="price">$4.99/-</span></div> </div>';
            id = p;
            pin = pin + 1
            //var static;
            var product_image = document.getElementById(id).getElementsByTagName("img")[0].src;
            var product_name = document.getElementById(id).getElementsByTagName("h3")[0].innerText;
            var product_price = document.getElementById(id).getElementsByTagName("div")[0].dataset.productprice;
            price = price + Number(product_price); // alert("product image url: " + product_image);
            // alert("you selected product name is: " + product_name);
            // alert("product price is:" + product_price);
            if (pin <= 5) {

                var cart_p = document.getElementById("producthold").innerHTML += '<div class="box"><img src=' + product_image + ' alt=""><div class="content"><h3>' + product_name + '</h3><span class="price">' + product_price + '</span></div > </div>';
                document.getElementById("total").innerText = price;
            } else {
                alert("you can add 5 products at a time")
            }


            //'<div class="box" < i class="fas fa-trash" > </i ><img src="image/cart-img-1.png" alt=""><div class="content"> <h3>watermelon</h3><span class="price">$4.99/-</span></div></div>';
        }


        function coc() {
            if (temp !== 0) {
                var i = 0;
                var str = 'Conformation.php?';
                //alert("check ou tbutton clicked")
                while (i <= 5) {
                    j = 0;
                    permission = document.getElementById("producthold").getElementsByClassName("box")[i];
                    if (permission !== undefined) {
                        var pn = document.getElementById("producthold").getElementsByClassName("box")[i].getElementsByTagName("h3")[0].innerText;
                        var pp = document.getElementById("producthold").getElementsByClassName("box")[i].getElementsByClassName("price")[0].innerText;
                        coArr.push([pn, pp])
                        str += (i + 1) + "pn=" + coArr[i][j] + "&" + (i + 1) + "pp=" + coArr[i][j + 1] + "&";

                        //code for exucution

                    } else {
                        // var k = 0;
                        var total = document.getElementById("total").innerText;
                        str += "total=" + total + "&arrSize=" + coArr.length;
                        //alert("reached maximum limit....");
                        // alert(str.replace(/\s+/g, "_"));
                        window.location.href = str.replace(/\s+/g, "_");
                        // while (k <= coArr.lenth - 1) {str.replace(/\s+/g, "_")
                        //     alert(coArr[k][j]);
                        //     alert(coArr[k][j + 1]);

                        //     k++;
                        // }

                        // 
                        //     var j = 0;
                        //     alert(coArr[i][j]);
                        //     alert(coArr[i][j + 1]);
                        //     i++;
                        // }
                        break;

                    }

                    i++;
                }
            } else {
                alert("please login first")

            }
            // while (i < coArr.lenth) {
            //     var j = 0;
            //     alert(coArr[i][j]);
            //     alert(coArr[i][j + 1]);
            //     i++;
            // }

        }



        document.getElementById("total").innerText = price;





        function loginbtn() {
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;
            if (user == "nilesh" && pass == "pass@123") {
                temp = 1;
                alert("Login Successful");
                document.getElementById("user").style.display = "none";
                document.getElementById("pass").style.display = "none";
                document.getElementById("btnw").style.display = "none";
                document.getElementById("h3i").innerText = " welcome  " + user;
            } else {
                alert("login Failed.....");
            }
            // alert(user + "  " + pass);

        }
    </script>

</body>

</html>
<?php
// include "sagar.php";
// if (isset($_POST["login"])) {
//     echo "clicked button";
//     $user = $_POST["user"];
//     $pass = $_POST['pass'];
//     if ($user == "user") {
//         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Your Order Placed Successfully....</strong>
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
//     } else {
//         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Your Order Placed Successfully....</strong>We Will Deliver Your Product With In 20min.......Thanks For Choosing Us.. 
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
//     }
// }
// echo "<style>alert('good to seee you')</style>";

?>