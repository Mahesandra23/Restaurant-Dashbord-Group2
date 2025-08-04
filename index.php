<?php
session_start();
$loginSuccess = false;
if (isset($_SESSION['user_id'])) {
    $loginSuccess = true;
}
$adminLoggedin = false;
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    $adminLoggedin = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="animate/animate.min.css" rel="stylesheet">
    <link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <title>UTS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-bottom">
        <a class="navbar-brand text-2xl font-bold" href="index.php">
            <img class="ms-0 ms-md-5 " src="img/korea.png" alt="" width="67" height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="color: orange;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item me-2 ms-2">
                    <a class="nav-link font-weight navfont-shadow" href="index.php">
                        <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                            <path fill="#FFA500" d="M512 128 128 447.936V896h255.936V640H640v256h255.936V447.936z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li class="nav-item me-2 ms-2">
                    <a class="nav-link font-weight navfont-shadow" href="menu.php">
                        <svg class="mb-1 me-1" width="24" height="24" class="mb-1 me-1" width="24" height="24" viewBox="0 -3.84 122.88 122.88" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 115.21" xml:space="preserve">
                            <path fill="#FFA500" d="M29.03,100.46l20.79-25.21l9.51,12.13L41,110.69C33.98,119.61,20.99,110.21,29.03,100.46L29.03,100.46z M53.31,43.05 c1.98-6.46,1.07-11.98-6.37-20.18L28.76,1c-2.58-3.03-8.66,1.42-6.12,5.09L37.18,24c2.75,3.34-2.36,7.76-5.2,4.32L16.94,9.8 c-2.8-3.21-8.59,1.03-5.66,4.7c4.24,5.10,10.8,13.43,15.04,18.53c2.94,2.99-1.53,7.42-4.43,3.69L6.96,18.32 c-2.19-2.38-5.77-0.90-6.72,1.88c-1.02,2.97,1.49,5.14,3.20,7.34L20.10,49.06c5.17,5.99,10.95,9.54,17.67,7.53 c1.03-0.31,2.29-0.94,3.64-1.77l44.76,57.78c2.41,3.11,7.06,3.44,10.08,0.93l0.69-0.57c3.40-2.83,3.95-8.00,1.04-11.34L50.58,47.16 C51.96,45.62,52.97,44.16,53.31,43.05L53.31,43.05z M65.98,55.65l7.37-8.94C63.87,23.21,99-8.11,116.03,6.29 C136.72,23.80,105.97,66,84.36,55.57l-8.73,11.09L65.98,55.65L65.98,55.65z" />
                        </svg>
                        Menu
                    </a>
                </li>
                <?php if ($adminLoggedin) {
                ?>
                    <li class="nav-item me-2 ms-2">
                        <a class="nav-link font-weight navfont-shadow" href="admin.php">
                            <svg width="24" height="24" class="mb-1 me-1 ms-2" fill="#FFA500" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="m773.596 1069.654 711.086 711.085c39.632 39.632 104.336 39.632 144.078 0l138.276-138.385c19.268-19.269 29.888-44.778 29.888-71.93 0-27.26-10.62-52.77-29.888-72.039l-698.714-698.714 11.495-32.625c63.5-178.675 18.284-380.45-115.284-514.018-123.715-123.605-305.126-171.01-471.648-128.313l272.281 272.282c32.516 32.406 50.362 75.652 50.362 121.744 0 45.982-17.846 89.227-50.362 121.744L654.48 751.17c-67.222 67.003-176.375 67.003-243.488 0L138.711 478.889c-42.589 166.522 4.707 347.934 128.313 471.648 123.714 123.715 306.22 172.325 476.027 127.218l30.545-8.101ZM1556.611 1920c-54.084 0-108.168-20.692-149.333-61.857L740.095 1190.96c-198.162 41.712-406.725-19.269-550.475-163.019C14.449 852.771-35.256 582.788 65.796 356.27l32.406-72.696 390.194 390.193c24.414 24.305 64.266 24.305 88.68 0l110.687-110.686c11.824-11.934 18.283-27.59 18.283-44.34 0-16.751-6.46-32.516-18.283-44.34L297.569 84.207 370.265 51.8C596.893-49.252 866.875.453 1041.937 175.515c155.026 155.136 212.833 385.157 151.851 594.815l650.651 650.651c39.961 39.852 61.967 92.95 61.967 149.443 0 56.383-22.006 109.482-61.967 149.334l-138.275 138.385c-41.275 41.165-95.36 61.857-149.553 61.857Z" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            Admin
                        </a>
                    </li>
                    </li>
                <?php } else { ?>
                    <li class="nav-item me-2 ms-2">
                        <a class="nav-link font-weight navfont-shadow" href="order.php">
                            <svg class="mb-1 me-1" width="24" height="24" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFA500;
                                        }
                                    </style>
                                    <g>
                                        <path class="st0" d="M494.365,133.438c-11.528-15.738-29.35-25.678-48.804-27.219L126.245,80.918l-3.129-17.749 c-5.252-29.676-28.858-52.657-58.671-57.066L24.597,0.187C15.093-1.209,6.253,5.359,4.84,14.846 c-1.409,9.512,5.158,18.356,14.658,19.761v-0.008l39.861,5.907c14.97,2.218,26.868,13.785,29.501,28.71l54.009,306.134 c5.073,28.735,30.027,49.669,59.206,49.678h221.971c9.606,0,17.394-7.792,17.394-17.39c0-9.607-7.788-17.398-17.394-17.398H202.075 c-12.282,0.009-22.813-8.836-24.946-20.934l-5-28.349h244.879c31.234,0,58.346-21.55,65.367-52.005l23.258-100.767 c1.151-5,1.717-10.06,1.717-15.086C507.35,158.962,502.88,145.04,494.365,133.438z M319.692,125.33l72.469,5.745v180.898h-72.469 V125.33z M296.502,311.973h-72.47V117.752l72.47,5.746V311.973z M131.451,110.415l69.395,5.496v196.062h-33.833L131.451,110.415z M477.378,181.668l-23.245,100.776c-3.986,17.278-19.385,29.53-37.125,29.53h-1.657V132.916l27.926,2.208 c11.049,0.866,21.174,6.516,27.706,15.447c4.838,6.592,7.381,14.495,7.381,22.526C478.363,175.949,478.038,178.809,477.378,181.668 z"></path>
                                        <path class="st0" d="M215.346,450.165c-17.076,0-30.909,13.853-30.909,30.926c0,17.073,13.832,30.909,30.909,30.909 c17.078,0,30.927-13.836,30.927-30.909C246.273,464.018,232.423,450.165,215.346,450.165z"></path>
                                        <path class="st0" d="M381.539,450.165c-17.073,0-30.913,13.853-30.913,30.926c0,17.073,13.84,30.909,30.913,30.909 c17.072,0,30.922-13.836,30.922-30.909C412.461,464.018,398.612,450.165,381.539,450.165z"></path>
                                    </g>
                                </g>
                            </svg>
                            Order
                        </a>

                    <?php } ?>
            </ul>
            <?php if ($loginSuccess) { ?>
                <a class="login font-weight navfont-shadow text-decoration-none me-5" href="logout.php">
                    <svg class="mb-1 me-1 ms-2" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#FFA500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827" stroke="#FFA500" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                    Logout
                </a>
            <?php } else { ?>
                <a class="login font-weight navfont-shadow text-decoration-none me-5" href="login.php">
                    <svg class="mb-1 me-1 ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M20 12C20 7.58172 16.4183 4 12 4" stroke="#FFA500" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="#FFA500" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Login
                </a>
            <?php } ?>
    </nav>
    <div class="area">
        <ul class="circles" style="z-index: -1;">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container-xxl py-5 hero-header">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5 mt-2">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="fs-10 fs-lg-5 animated slideInUp text-white font-shadow">Korean Culinary<br class="d-lg-none"> Delights Await</h1>
                        <p class="slide-in-left mb-4 pb-2 text-white font-shadow mt-4 animated slideInUp">Delight in delectable Korean cuisine at its best. From savory to sweet, our menu takes you on a delightful journey through Korea's rich culinary traditions.</p>
                        <a href="menu.php" class="shadow btn btn-light py-3 px-5 me-3 animated slideInLeft navfont-shadow" style="color: orange; z-index: 1;">Open Menu</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid animated slideInUp" src="img/korean-header.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp">
                            <div class="service-item p-3" style="border-radius: 20px;">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                    <h5 class="mb-0">Master Chefs</h5>
                                    <p class="mb-0">We have professional chefs for serving high-quality dishes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp ">
                            <div class="service-item  p-3" style="border-radius: 20px;">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                    <h5 class="mb-0">Quality Food</h5>
                                    <p class="mb-0">We provide high-quality food with delicious flavors and the finest ingredients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp">
                            <div class="service-item  p-3" style="border-radius: 20px;">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                    <h5 class="mb-0">Online Ordering</h5>
                                    <p class="mb-0">You can order your favorite food online with ease and convenience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp">
                            <div class="service-item  p-3" style="border-radius: 20px;">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                    <h5 class="mb-0">24/7 Service</h5>
                                    <p class="mb-0">We are ready to serve you anytime, 24/7, for your needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center fw-normal text-white">~ Testimonial ~</h5>
                        <h1 class="mb-5">Customer Reviews</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-transparent p-4" style="border-radius: 20px;">
                            <i class="fa fa-quote-left fa-2x text-white mb-3"></i>
                            <p>Exceptional dining experience at this Korean restaurant. Authentic flavors and top-notch service. Can't wait to visit again!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Sarah Anderson</h5>
                                    <small>Food Enthusiast</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent p-4" style="border-radius: 20px;">
                            <i class="fa fa-quote-left fa-2x text-white mb-3"></i>
                            <p>Korean BBQ here is a must-try. Tender meat and delightful side dishes. Highly recommended for Korean food lovers!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">John Kim</h5>
                                    <small>Culinary Explorer</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent p-4" style="border-radius: 20px;">
                            <i class="fa fa-quote-left fa-2x text-white mb-3"></i>
                            <p>Outstanding ambiance, food quality, and attentive staff. A perfect dining destination that I can't praise enough!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Linda Chen</h5>
                                    <small>Food Critic</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent p-4" style="border-radius: 20px;">
                            <i class="fa fa-quote-left fa-2x text-white mb-3"></i>
                            <p>Exceeded my expectations. The Bibimbap and Kimchi were outstanding. A hidden gem for Korean cuisine lovers!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Michael Brown</h5>
                                    <small>Korean Cuisine Lover</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="wow/wow.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="main.js"></script>
            </body>

</html>