<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BwK Restaurant | Home</title>

<!--===GOOGLE FONTS---------------------------------------------------------------------------------------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Urbanist&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

<!--===Favicon Icon---------------------------------------------------------------------------------------------------->

    <link rel="icon" href="Gallery/Logo_2.jpg">

<!--===CSS Style Sheets------------------------------------------------------------------------------------------------>

    <link rel="stylesheet" href="style.css">
<!--    <link rel="stylesheet" href="reset.css">-->

<!--===CDN------------------------------------------------------------------------------------------------------------->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!----===Use Swiper from CDN------------------------------------------------------------------------------------------->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

</head>
<body>

<!----===HEADER SECTION------------------------------------------------------------------------------------------------>

        <header>
            <div class="container">
                <div class="header-navbar">
                    <div class="logo">
                        <a href="index.php"><img src="Gallery/Resized_lg_3.png" alt=""></a>
                    </div>
                        <nav>
                                <div class="btn">
                                    <i class="fas fa-times close-btn"></i>
                                </div>
                            <li><a href="index.php">home</a></li>
                            <li><a href="#about">about</a></li>
                            <li><a href="#">menu</a></li>
                            <li><a href="#booking-section">booking</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">contact</a></li>
                        </nav>
                                <div class="btn">
                                    <i class="fas fa-bars menu-btn"></i>
                                </div>
                </div>
            </div>
        </header>

<!----===HERO SECTION-------------------------------------------------------------------------------------------------->

        <section class="hero-sec">
            <div class="container">
                <div class="hero-sec-content">
                    <img src="Gallery/Resized_lg_3.png" alt="">
                        <h2> — fine dining at its best — </h2>
                            <h3> a genuine experience awaits </h3>
                </div>
            </div>
        </section>

<!----===OFFERS SECTION-------------------------------------------------------------------------------------------------->

        <aside class="sp-offers" id="about">
            <div class="container">
                <div class="sp-content">
                    <div class="left-side-content">
                        <div class="headings">
                            <h3>finger licking menu</h3>
                            <h2>captains orders</h2>
                        </div>
                        <div class="imgs-content">
                            <div class="imgs">
                                <img src="Gallery/Kienyeji_3.jpg" alt="">
                                    <div class="content-for-img">
                                        <h4>kienyeji, greens & ugali</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio est ut velit!</p>
                                    </div>
                            </div>
                            <div class="prices">
                                <p>KES <br> 450</p>
                            </div>
                        </div>

                        <div class="imgs-content">
                            <div class="imgs">
                                <img src="Gallery/Salad4.jpg" alt="">
                                <div class="content-for-img">
                                    <h4>kienyeji, greens & ugali</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio est ut velit!</p>
                                </div>
                            </div>
                            <div class="prices">
                                <p>KES <br> 450</p>
                            </div>
                        </div>

                        <div class="imgs-content">
                            <div class="imgs">
                                <img src="Gallery/Fish_2_.jpg" alt="">
                                <div class="content-for-img">
                                    <h4>kienyeji, greens & ugali</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio est ut velit!</p>
                                </div>
                            </div>
                            <div class="prices">
                                <p>KES <br> 450</p>
                            </div>
                        </div>

                    </div>
                    <div class="right-side-content">
                        <div class="img-right-side">
                            <img src="Gallery/FoodCombos3_2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </aside>

<!----===BOOKING SECTION-------------------------------------------------------------------------------------------------->

         <div id="booking-section">
             <div class="container">
                <div class="form-data">
                    <h3>your reservations</h3>
                    <h2>book now</h2>
                    <form action="">
                        <input type="text" placeholder="Enter Your Name...">
                        <input type="text" placeholder="Enter Your Mobile No...">
                        <input type="email" placeholder="Enter Your Email Address...">
                        <input type="text" placeholder="Number of Persons...">
                        <input type="date" placeholder="Preferred Date...">
                        <input type="text" placeholder="Preferred Time...">
                        <textarea name="" id="" cols="10" rows="10" placeholder="Do you have any other requests?"></textarea>
                        <button type="button">book now</button>
                    </form>
                </div>
             </div>
         </div>

<!----===DEAL OF THE DAY SECTION--------------------------------------------------------------------------------------->

        <div id="todays-deal" class="deal-sec">
            <div class="container swiper mySwiper">
                <h3>hot deal of the day</h3>
                <h2>food made real good</h2>
                    <div class="card-content swiper-wrapper" >
                                <div class="cards swiper-slide">
                                    <img src="Gallery/Meat.jpg" alt="">
                                        <h4>medium rare stake & Veg</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias at optio.</p>
                                        <p class="price">only 550/=</p>
                                </div>
                                <div class="cards swiper-slide">
                                    <img src="Gallery/Salad_With.png" alt="">
                                        <h4>chefs salad with fillet & Veg</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias at optio.</p>
                                        <p class="price">only 550/=</p>
                                </div>
                                    <div class="cards swiper-slide">
                                        <img src="Gallery/Fish_2.png" alt="">
                                            <h4>whole fish, ugali & curry</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias at optio.</p>
                                        <p class="price">only 550/=</p>
                                    </div>
                    </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


<!----===JS QUERY SECTION---------------------------------------------------------------------------------------------->

<!----===JS NAV MENU TOGGLE ------------------------------------------------------------------------------------------->

     <script>
            let menu = document.querySelector("nav");
            let menuBTN = document.querySelector(".menu-btn");
            let closeBTN = document.querySelector(".close-btn");

            menuBTN.addEventListener("click", function () {
                menu.classList.add("active");
            })

            closeBTN.addEventListener("click", function () {
                menu.classList.remove("active");
            })
     </script>

<!----===JS SWIPER----------------------------------------------------------------------------------------------------->

     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidePerGroup: 1,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    0:{
                        slidesPerView: 1,
                    },
                    768:{
                        slidesPerView: 2,
                    },
                    968: {
                        slidesPerView: 3,
                    },
                }
            });
        </script>

</body>
</html>
