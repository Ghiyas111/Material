<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shopping</title>

    <!-- my style -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- animate scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- feathet icons -->
  <style>
    * {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    font-family: sans-serif;
}

:root {
    --primary: rgb(59, 59, 255);
}

html {
    scroll-behavior: smooth;
}

/* navbar start*/

.navbar.sticky {
    background-color: #fff;
}

.navbar {
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 7%;
    background-color: transparent;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
}

.navbar-logo {
    font-style: italic;
    font-size: 2rem;
    font-weight: 600;
    color: black;
}

.navbar-logo span {
    color: var(--primary);
}

.navbar .navbar-nav a {
    color: black;
    display: inline-block;
    font-size: 20px;
    margin: 0 1rem;
}

.navbar .navbar-nav a:hover {
    color: var(--primary);
}

.navbar .navbar-extra a {
    color: black;
    margin: 0 0.5rem;
}

.navbar .navbar-extra a:hover {
    color: var(--primary);
}

#hamburger-menu {
    display: none;
}

/* hero */

.home {
    background-image: url(../img/background-hero.jpg);
    height: 100vh;
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

.hero-content {
    padding: 15% 0 0 18%;
}

.hero-content .wither {
    color: var(--primary);
}

.hero-content>h2 {
    padding: 2px 0;
    font-size: 45px;
}

.hero-content .lorem {
    padding-bottom: 20px;
}

.hero-content>a {
    border: 2px solid black;
    color: black;
    padding: 10px 10px;
}

.hero-content a:hover {
    background-color: black;
    color: #fff;
}

.shop-now a:hover {
    color: #fff;
}

.hero-content #panah {
    color: black;
}

.hero-content #panah:hover {
    color: #fff;
}

.arrow-down {
    font-size: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    margin: 9% 85%;
}

.arrow-down a i {
    border: 2px solid black;
    border-radius: 50%;
    padding: 15px 20px;
    cursor: pointer;
}

.arrow-down a i {
    color: black;
}

.arrow-down a i:hover {
    background-color: black;
    color: #fff;
}


/* shop */

.shop>h2 {
    padding-top: 80px;
    display: flex;
    justify-content: center;
}

.shop-card {
    margin: 25px 100px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.card {
    width: 200px;
    height: 365px;
    overflow: hidden;
}

.caption-card>button {
    margin-top: 5px;
    border-radius: 5px;
    width: 100%;
    height: 25px;
    border: none;
    cursor: pointer;
    background-color: var(--primary);
}

.caption-card .eyee {
    display: flex;
    justify-content: space-between;
}

.eyee .fa-regular {
    cursor: pointer;
    margin: 2px 5px;
    font-size: 17px;
}

.fa-solid {
    color: #fff;
}

.card {
    background-color: rgba(255, 255, 255, 0.974);
    margin-top: 20px;
}

.card:hover {
    box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
    -webkit-box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
}

.card-img img {
    width: 200px;
}

.caption-card {
    line-height: 22px;
}

.caption-card .idr {
    font-weight: 600;
}

.rating-container .fa-star {
    color: #FFD700;

}

.rating-container .fa-star-half-alt {
    color: #FFD700;
    opacity: 0.5;
}

/* store */

.offline-store>h1 {
    display: flex;
    padding: 100px 0 30px 0;
    justify-content: center;
}

.offline-container {
    margin: 0 100px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.card-store {
    box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
    -webkit-box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 1px 7px 5px 0px rgba(0, 0, 0, 0.12);
    background-color: #fff;
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
    width: 250px;
    height: 350px;
}

.store-img iframe {
    width: 300px;
    height: 200px;
}

.caption-store {
    padding-top: 10px;
    text-align: center;
    line-height: 25px;
}

.caption-store h3 {
    margin: 10px 0;
}

/* footer */

.container-footer {
    background-color: #dedede;
    display: flex;
    margin-top: 150px;
    justify-content: space-around;
    height: 25vh;
}

.footer-social,
.footer-menu,
.footer-about,
.footer-logo {
    padding-top: 20px;
    cursor: pointer;
    line-height: 30px;
    text-align: center;
}

.footer-social h3,
.footer-menu h3,
.footer-about h3 {
    border-bottom: 1px solid var(--primary);
    color: var(--primary);
}

.footer-social a,
.footer-menu a,
.footer-about a {
    color: black;
}

.footer-social ul,
.footer-menu ul,
.footer-about a i {
    padding-top: 10px;
}

/* media queries */

@media (max-width: 870px) {

    /* navbar */
    .navbar {
        padding: 20px 0;
    }

    /* home */
    .hero-content {
        padding: 12% 0 0 0;
    }

    .home {
        padding: 15% 0 0 10%;
    }

    /* shop */
    .shop-card {
        margin: 0 30px;
        gap: 3px;
    }

}

/* tampilat tab */

@media (max-width: 768px) {

    .navbar .navbar-nav a {
        color: var(--bg);
        display: block;
        margin: 1.5rem;
        padding: 0.5rem;
        font-size: 2rem;
    }

    .navbar .navbar-nav a::after {
        transform-origin: 0 0;
    }

    .navbar .navbar-nav a:hover:after {
        transform: scaleX(0.2);
    }

    .navbar .navbar-nav {
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: #fff;
        width: 50%;
        height: 100vh;
        transition: 0.5s;
    }

    .navbar .navbar-nav.active {
        right: 0;
    }

    #hamburger-menu {
        display: inline-block;
    }

    /* home */

    .hero-content {
        width: 300px;
        font-size: 10px;
        padding: 15% 0 0 5%;
    }

    /* shop */
    .shop-card {
        margin: 20px 0;
    }

    /* store */
    .card-store {
        height: 20rem;
    }

}

@media (max-width: 400px) {

    /* navbar */
    .navbar-logo {
        font-size: 25px;
    }

    /* home */
    .hero-content {
        padding-top: 50%;
    }

    /* shop */
    .card {
        font-size: 10px;
        width: 80%;
        height: 50%;
    }

    .card-img img {
        width: 100%;
    }

    .eyee .fa-regular {
        font-size: 10px;
    }

    .caption-card button {
        height: 20px;
    }

    .caption-card button .fa-solid {
        font-size: 10px;
    }

    /* store */
    .offline-container {
        margin: 0;
    }
    .card-store {
        width: 80%;
        height: 21rem;
    }

    .store-img img {
        width: 100%;
    }

    /* footer */
    .container-footer {
        padding-top: 10%;
        height: 50%;
        display: block;
    }

    .container-footer h3 {
        border: none;
    }

}
  </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">My <span>Shopping</span></a>
        <div class="navbar-nav">
            <a href="#menu">Menu</a>
            <a href="#produk">Produk</a>
            <a href="#toko">Toko</a>
            <a href="#about">About</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="user"><i data-feather="user"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero start -->
    <section id="menu" class="menu">
        <div class="hero-content" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000">
            <p class="wither">Summer Colection</p>
            <h2>New Summer</h2>
            <h2>Collection 2024</h2>
            <p class="lorem">Lorem, ipsum dolor.</p>
            <a href="#">Shop Now <i class="fa-solid fa-arrow-right" id="panah"></i></a>
        </div>
    </section>
    <!-- hero end -->

    <!-- shop start -->
    <section id="produk" class="produk">
        <h2>Our Trending Product</h2>
        <div class="shop-card">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <div class="card-img">
                    <img src="img/card-1.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <div class="card-img">
                    <img src="../img/card-2.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-img">
                    <img src="../img/card-3.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="400">
                <div class="card-img">
                    <img src="../img/card-4.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="500">
                <div class="card-img">
                    <img src="../img/card-5.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <div class="card-img">
                    <img src="../img/card-6.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <div class="card-img">
                    <img src="../img/card-7.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-img">
                    <img src="../img/card-8.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="400">
                <div class="card-img">
                    <img src="../img/card-9.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="500">
                <div class="card-img">
                    <img src="../img/card-3.jpg" alt="">
                </div>
                <div class="caption-card">
                    <div class="eyee">
                        <div class="rating-container" data-rating="4.5">
                        </div>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>Lorem ipsum</p>
                    <p class="idr">IDR 99k</p>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- shop end -->

    <!-- store start -->
    <section id="toko" class="offline-store">
        <h1>My Offline Store</h1>
        <div class="offline-container">
            <div class="card-store" data-aos="flip-left" data-aos-duration="1000">
                <div class="store-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6072693432625!2d107.75900867378529!3d-6.571149264234112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693c9e535c5c75%3A0x7d4f73e4a31f335f!2sAlun-Alun%20Kota%20Subang!5e0!3m2!1sid!2sid!4v1704953182669!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="caption-store">
                    <h3>Subang Jawa barat</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, velit.</p>
                </div>
            </div>
            <div class="card-store" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                <div class="store-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4911817425086!2d108.55641377378753!3d-6.70975006559851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee267cb8474b3%3A0x73c7df4620b5d915!2sAlun-Alun%20Kejaksan%2C%20Kota%20Cirebon!5e0!3m2!1sid!2sid!4v1704953268222!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="caption-store">
                    <h3>Cirebon Jawa barat</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, velit.</p>
                </div>
            </div>
            <div class="card-store" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
                <div class="store-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.830949804112!2d107.46229047378284!3d-6.415762327138299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69739ce357e149%3A0x6cd4e6d359647dfc!2sAlun%20Alun%20Cikampek!5e0!3m2!1sid!2sid!4v1704953362052!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="caption-store">
                    <h3>Cikampek Jawa barat</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, velit.</p>
                </div>
            </div>
            <div class="card-store" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="store-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7385668590196!2d107.60448737379086!3d-6.921824167746835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e89dbe0ec231%3A0x177412aac90cd065!2sAlun-alun%20Bandung!5e0!3m2!1sid!2sid!4v1704953419304!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="caption-store">
                    <h3>Bandung Jawa barat</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, velit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- store end -->

    <!-- footer start -->
    <footer>
        <div class="container-footer">
            <div class="footer-logo">
                <a href="#" class="navbar-logo">My <span>Shopping</span></a>
            </div>
            <div class="footer-about">
                <h3>Contact</h3>
                <a href="#"><i class="fa-regular fa-envelope"></i> shopsaya@gmail.com</a>
            </div>
            <div class="footer-menu">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#store">Store</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Social media</h3>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i> facebook</a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i> instagram</a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i> twitter</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    
    <!-- animate scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init();
    </script>

    <!-- icon -->
    <script src="script.js"></script>

    <script>
        feather.replace();
    </script>
<script>
    // navbar scroll
const navbar = document.querySelector(".navbar");

window.onscroll = function () {
    if (window.scrollY > 20) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

// togle class active
const navbarNav = document.querySelector(".navbar-nav");

document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("active");
}

// click di luar sidebar untuk menghilangka menu nya

const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
})

// rating bintang

document.addEventListener("DOMContentLoaded", function () {
    const ratingContainers = document.querySelectorAll('.rating-container');

    ratingContainers.forEach(function (container) {
        const rating = parseFloat(container.getAttribute('data-rating'));
        const roundedRating = Math.round(rating * 2) / 2; // Pembulatan ke 0.5 terdekat

        for (let i = 0; i < 5; i++) {
            const star = document.createElement('i');
            if (i + 1 <= roundedRating) {
                star.classList.add('fas', 'fa-star');
            } else if (i + 0.5 <= roundedRating) {
                star.classList.add('fas', 'fa-star-half-alt');
            } else {
                star.classList.add('far', 'fa-star');
            }
            container.appendChild(star);
        }
    });
});

</script>

</body>

</html>