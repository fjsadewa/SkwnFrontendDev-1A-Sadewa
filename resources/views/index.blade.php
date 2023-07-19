<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-U-Compatible" content="IE=egde" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dekoor Website</title>
    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <!-- Box Icon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    <!-- Nav Bar Section -->
    <div class="header">
      <img src="asset/component/logo/logo.svg" class="logo" alt="" />
      <div class="bx bx-menu-alt-left" id="menu-icon"></div>
      <nav class="navbar">
        <div class="menu-1">
          <a href="#wcu">About us</a>
        </div>
        <div button type class="menu-2">
          <a href="#">Furniture</a>
          <img src="asset/component/icon/keyboard_arrow_down.svg" alt="" />
        </div>
        <div class="menu-3">
          <a href="#partner">Partnerships</a>
        </div>
        <div class="menu-4">
          <a href="#Footer">Contact</a>
        </div>
      </nav>
      <div class="sidenav">
        <button class="button-signUp">Sign Up</button>
        <div class="iconframe">
          <div class="icon">
            <img src="asset/component/icon/shopping_bag.svg" class="shoppingBag" />
          </div>
        </div>
      </div>
    </div>
    <!-- Content Section -->
    <div class="container">
      <!-- Hero Section -->
      <section class="hero animate__animated animate__backInLeft" id="hero">
        <div class="title">
          <h1>The kind of <span>furniture</span> you have been looking for</h1>
          <div class="btn-box">
            <div class="button-1">
              <img src="asset/component/icon/search.svg" class="img-search" />
              <a href="#" id="search">SEARCH CATALOG</a>
            </div>
            <div class="button-2">
              <img src="asset/component/icon/play_circle_outline.svg" class="img-watch" />
              <a href="#" id="watch">WATCH VIDEOS</a>
            </div>
          </div>
        </div>
        <div class="sideHero">
          <img src="asset/images/image 64.png" class="img-hero" />
          <div class="price-tag">
            <h3>$329</h3>
          </div>
          <div class="tag">
            <h2>Pösht Sofa</h2>
          </div>
          <div class="button-tag">
            <a href="#">VIEW DETAILS</a>
            <img src="asset/component/icon/chevron_right.svg" alt="buttontag" />
          </div>
        </div>
      </section>
      <!-- Why Choose Us -->
      <section class="wcu-section" id="wcu">
        <div class="wcu-title">Why Choose Us</div>
        <div class="wcu-text">We care about details and the quality of our products</div>
        <div class="Features">
          <div class="TextIcon">
            <div class="IconFrame">
              <img class="Icon" src="/asset/component/icon/search-2.svg" alt="Icon 1" />
            </div>
            <h3>MANUFACTURED WITH QUALITY MATERIALS</h3>
          </div>
          <div class="TextIcon">
            <div class="IconFrame">
              <img class="Icon" src="/asset/component/icon/5.svg" alt="Icon 2" />
            </div>
            <h3>5 YEARS OF WARRANTY FOR EACH PROFUCT</h3>
          </div>
          <div class="TextIcon">
            <div class="IconFrame">
              <img class="Icon" src="/asset/component/icon/work_outline.svg" alt="Icon 3" />
            </div>
            <h3>20 YEARS OF EXPERTISE</h3>
          </div>
        </div>
      </section>
      <!-- Parnerships -->
      <section class="partner-section" id="partner">
        <div class="partner-title">
          <h1>25+</h1>
          <h3>PARTNERED BRANDS</h3>
        </div>
        <div class="companylogos">
          <div class="CompanyLogo">
            <img class="LogoImage" src="/asset/component/logo/Company logo (1).svg" alt="Company Logo 1" />
          </div>
          <div class="CompanyLogo">
            <img class="LogoImage" src="/asset/component/logo/Company logo.svg" alt="Company Logo 2" />
          </div>
          <div class="CompanyLogo">
            <img class="LogoImage" src="/asset/component/logo/Company logo (2).svg" alt="Company Logo 3" />
          </div>
          <div class="CompanyLogo">
            <img class="LogoImage" src="/asset/component/logo/Company logo (3).svg" alt="Company Logo 3" />
          </div>
        </div>
      </section>
      <!-- Recommendations -->
      <section class="recommendations" id="recommend">
        <div class="accordion">
          <img class="img1" src="/asset/images/Rectangle 6794.png" />
          <img class="img2" src="/asset/images/Rectangle 6793.png" />
          <img class="img3" src="/asset/images/Rectangle 6792.png" />
        </div>
        <div class="details-sections">
          <div class="categories">Categories</div>
          <div class="details-title">Furniture Sets Recommendations</div>
          <div class="description">
            <div class="BedroomAccordion">
              <div class="Bedroom">Bedroom</div>
            </div>
            <div class="LivingRoomAccordion">
              <div class="LivingRoom">Living Room</div>
              <p class="accordion-content">Enjoy a great living room aesthetics with your family Designs created for increased comfortability</p>
            </div>
            <div class="HomeOfficeAccordion">
              <div class="HomeOffice">Home Office</div>
            </div>
            <div class="GamingRoomAccordion">
              <div class="GamingRoom">Gaming Room</div>
            </div>
          </div>
        </div>
      </section>
      <!-- Best Seller -->
      <section class="bs-section" id="bs">
        <div class="bs-header">
          <div class="headline">
            <h3 class="OurProducts">OUR PRODUCTS</h3>
            <div class="bs-title">This month's best seller</div>
          </div>
          <div class="Button">
            <div class="SeeMore">SEE MORE</div>
          </div>
        </div>
        <div class="Photos">
          <!-- <img class="img" src="asset/images/Rectangle 6802.png" /> -->
          <img class="img-1" src="asset/images/Rectangle 6802.png" />
          <div class="DetailProductName">
            <img class="img-2" src="asset/images/Rectangle 6799.png" />
            <div class="price-tag">
              <h3>$329</h3>
            </div>
            <div class="tag">
              <h2>Und Chair</h2>
            </div>
          </div>
          <img class="img-3" src="asset/images/Rectangle 6798.png" />
          <img class="img-4" src="asset/images/Rectangle 6796.png" />
          <img class="img-5" src="asset/images/Rectangle 6800.png" />
          <!-- <img class="img-6" src="asset/images/Rectangle 6800.png" /> -->
        </div>
        <div class="ArrowButton">
          <div class="Button">
            <img class="ArrowBackIos" src="asset/component/icon/arrow_back_ios.svg" />
          </div>
          <div class="Button">
            <img class="ArrowForwardIos" src="asset/component/icon/arrow_forward_ios.svg" />
          </div>
        </div>
      </section>
      <!-- Newsletter -->
      <section class="newsletter" id="ns">
        <div class="LimitedDeals">LIMITED DEALS</div>
        <div class="ns-title">Become a member and get 10% off of your first purchase</div>
        <div class="text-field">
          <div class="col">
            <p class="email">Enter your email here</p>
          </div>
          <div class="ns-icon">
            <div class="Mail">
              <img src="/asset/component/icon/mail.svg" alt="mail" />
            </div>
          </div>
        </div>
      </section>
      <!-- Footer Section -->
      <footer class="Footer" id="Footer">
        <div class="col1">
          <div class="logo-frame">
            <div class="Logo">
              <img src="/asset/component/logo/logo.svg" alt="logo" />
            </div>
          </div>
          <p class="ft-text">
            Dekoor is a furniture company created to fulfill the needs of families with an aesthetic feeling in their furniture. We always pay attention to details and provide clear communication for
            our customers. Our design priority is comfortability.
          </p>
          <p class="copyright">© Copyright 2022 Dekoor</p>
        </div>
        <div class="col2">
          <div class="col2-1">
            <h5>Support</h5>
            <div class="ft-sub">
              <p>FAQ</p>
              <p>Shipping & Returns</p>
              <p>Care guide</p>
              <p>Redeem warranty</p>
            </div>
          </div>
          <div class="col2-2">
            <h5>Social Media</h5>
            <div class="ft-sub">
              <p>Instagram</p>
              <p>Facebook</p>
              <p>Twitter</p>
              <p>TikTok</p>
            </div>
          </div>
          <div class="col2-3">
            <h5>About Us</h5>
            <div class="ft-sub">
              <p>Our story</p>
              <p>Designer</p>
              <p>Craftsmanship</p>
              <p>Sustainability</p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="script.js"></script>
  </body>
</html>
