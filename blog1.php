<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'],$_SESSION['user_id'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg">
    <!-- site metas -->
    <title>FarmConnect</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <!-- bootstrap--> 
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        
        <!-- mean menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="css/main.css">
  </head>
  <!-- body -->
  <body class="main-layout inner_page blog_page">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="full_bg">
      
      <!-- header nav -->
      <?php 
       $user_type=$_SESSION['user_type'];
       if(isset($_SESSION['user_name'])){ 
       
          include 'nav.php';
       }else{
        include 'nav.html';
       }
        ?>
            <!-- end header nav -->
    </div>
    <!-- news -->
    <div class="news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_left">
        
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="latest">
              <figure><img src="images/mushroom.jpg" alt="#" /></figure>
              <span
                >01<br />
                MAY 2024</span
              >
              <div class="nostrud">
                <h3>Magical Mushroom</h3>
                <p>
                  Ganoderma lucidum is a medicanal mushroom in use for centuries
                  to heal diseases like diabetes,cancer,inflammation,ucler as
                  well as bacterial and skin infections.In india,however the
                  potential of the fungus is still being explored. Ganoderma
                  contains more than 400 chemical constituents, including
                  triterpenes, polysaccharides, nucleotides, alkaloids,
                  steroids, amino acids, fatty acids and phenols. These show
                  medicinal properties such as immunomodulatory, anti-hepatitis,
                  anti-tumour, antioxidant, antimicrobial, anti-HIV,
                  antimalarial, hypoglycaemic and anti-inflammatory
                  properties.Ganoderma lucidum can have immense potential for
                  livelihood generation, but there are some challenges as well.
                  Due to the increasing demand of herbal and natural health
                  products during the pandemic, a window of opportunity has been
                  created for its cultivation and marketing on a large scale in
                  India. The dried fruiting bodies or raw powder of Ganoderma
                  lucidum can be sold at Rs 4,000-5000 per kilogram. There is a
                  need to specifically work toward chemical analysis, quality
                  assessment and marketing of the mushroom grown by farmers, in
                  order to commercialise the products. At present, we rely on
                  other countries for raw materials and are importing it to
                  fulfil its demand in India. Thus, Ganoderma lucidum has every
                  potential for entrepreneurship as well as livelihood
                  opportunity in India and only needs proper scaling up among
                  the farmers
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="latest box_desho">
              <figure><img src="images/news2.jpg" alt="#" /></figure>
              <span
                >01<br />
                May 2024</span
              >
              <div class="nostrud">
                <h3>
                  Government Encourages Farmers to Adopt Economically
                  Sustainable Agriculture Strategies
                </h3>
                <p>
                  During the forthcoming Kharif season, the Aam Aadmi Party
                  (AAP) government will make significant reforms to Punjab's
                  agricultural sector in order to break the wheat-paddy cycle
                  and make the agriculture industry more sustainable in the long
                  run.To combat the state's drastically diminishing groundwater
                  levels, the government will reward farmers who partake in the
                  direct seeding of rice (DSR) and promote the production of
                  moong and three late-sown paddy cultivars. A detailed plan for
                  environmentally friendly agriculture has been devised and is
                  now ready to be implemented. Years later, successive
                  administrations devised a crop diversification and
                  environmentally sustainable plan, only for farmers to reject
                  it because none of the schemes guaranteed adequate
                  remuneration. According to Director (Agriculture) Gurwinder
                  Singh, the government has developed a strategy to wean farmers
                  away from monoculture and toward other crops with guaranteed
                  sales, The state administration was successful in persuading
                  farmers to cultivate moong last year. During the Kharif
                  season, moong was planted on around 50,000 acres. It produced
                  80-85 quintals per hectare and sold for Rs. 7,000 per quintal.
                  Moong has already been planted on 50,000 acres this year, with
                  a further 10,000 acres set to be planted by May 15. This year,
                  the government is encouraging farmers to plant late-sown paddy
                  types in July.As per officials of the Agricultural Department,
                  the state food procurement agencies are expected to buy maize.
                  A senior official stated that earlier, the government used to
                  purchase corn on the Army's behalf, and now they are planning
                  on requesting the Centre for help with comparable procurement
                  arrangements of corn. He further stated that if the deal falls
                  through, the agency will sell maize on the open market.
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="latest">
              <figure><img src="images/news3.jpg" alt="#" /></figure>
              <span
                >01<br />
                May 2024</span
              >
              <div class="nostrud">
                <h3>Top 5 Profitable Agri Businesses to Start in Your Backyard With Full Government Support</h3>
                <p>
                  If you want to start a business close to your home, then a backyard business could be the best choice. It may sound strange but believe me, there are many businesses that you can actually run right from your backyard.
                 <h2>1.Backyard Nursery</h2><br> 
Nowadays people are going crazy about gardening or keeping different types of plants at home. If you start a small nursery business in your backyard and grow different potted plants then it could be a profitable venture for you. You can sell these plants online and offline.<br><h2>2.Herb Grower</h2><br>
Next, you can also grow different types of herbs or medicinal plants in your garden and then harvest and package them for sale. You can begin by growing – mint, basil, fennel, parsley etc<br><h2>3.Florist</h2><br>The demand for flowers is always high, especially during festivals and weddings hence you can think of starting a florist business in your backyard. At the initial stage, you can select a few varieties of flowers later when your business gets established then you can add more varieties to your garden.<br><h2>4.Seeds Selling</h2><br>People who want to offer smaller products & help others start their own gardens then they can harvest seeds and package them for sale. The demand for quality seeds is also high these days hence by starting this business you can earn good income. Also investment in this business is very low.<br><h2>5.Dairy farming</h2><br>Last but one of the best options could be to start a small dairy farm in your backyard, you could keep goats, cows, or buffaloes. Believe me dairy farming is very profitable and at present many people are earning good money from it. 
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end news -->
    <!--  footer -->
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Newsletter</h3>
                <form id="colof" class="form_subscri">
                  <input
                    class="newsl"
                    placeholder="Enter Email"
                    type="text"
                    name="Email"
                  />
                  <button class="subsci_btn">
                    <img src="images/new.png" alt="#" />
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Menu</h3>
                <ul class="menu_footer">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about1.php">About</a></li>
                  <li><a href="service1.php">Service</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="contact1.php">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Recent Posts</h3>
                <ul class="recent">
                  <li>
                    <img src="images/modern.jpg" alt="#" />Modern farmer - Farm.Food.life
                  </li>
                  <li>
                    <img src="images/nat.jpg" alt="#" />The National Sustainable Agriculture Coalition is an alliance of grassroots organizations that advocates for federal policy reform to advance the sustainability of agriculture, food systems, natural resources, and rural communities.
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 flot_right text_align_left">
                <h3>ContacT</h3>
                <ul class="top_infomation">
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +91 9876543210
                  </li>
                  <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="Javascript:void(0)">farmconnect@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="copyright">
          <div class="container">
            <div class="row d_flex">
              <div class="col-md-8">
                <p>
                  © 2022 All Rights Reserved. Design by
                  <a href="WEB.html"> Dream Epic</a>
                </p>
              </div>
              <div class="col-md-4">
                <ul class="social_icon">
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
