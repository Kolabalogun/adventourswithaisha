<!-- Start PHP  -->
<?php

// Global Variables 
$note = "";

// Newsletter Connection 
if (isset($_POST['submit-newsletter'])) {
    
    $Email = $_POST['email'];
    if (empty($Email)) {
        $note = "Email Address Required";
    }
    else {
        $note = "Thanks for Subscribing, Check your email for our latest post!";
    }
};
// End Newsletter Connection 

?>
<!-- End PHP  -->



<!-- HTML  -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblog</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Section  -->
    <section class="header">
        <!-- Top Header  -->
        <div class="top-header-wrapper">
            <div class="top-header-text">
                <p>Welcome to my Travel Blog🤗</p>
            </div>
            <div class="top-header-icons">
                <!-- <a href="www.instagram.com"><img src="assets/img/Svgs/instagram-brands.svg" alt=""></a>     
                <a href=""><img src="assets/img/Svgs/facebook-f-brands.svg" alt=""></a>         -->
                <input type="text" placeholder="Search">
            </div>
        </div>
        <!-- End Top Header  -->

        <!-- Logo  -->
        <div class="banner"></div>
        <!-- End Logo  -->

        <!-- Navigation Bar  -->
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- End Navigation Bar  -->
    </section>


    <!-- Main Section  -->
    <Section class="news-bar">

        
    <!-- ---- SideBar ----  -->
        <div class="left-sidebar">
            <!-- About Me  -->
            <div class="about-wrapper">
                <div class="top-title">
                    <h2>ABOUT ME</h2>
                </div>
                
                <div class="about-image">
                    <a href="about.php"><img src="assets/img/about/120257928_1026846971096580_8672472677267954625_n.jpg" alt=""></a>
                </div>
                <h2>Aisha Bankole</h2>
                <p>Hi🙂, I’m Aisha and I’m a Nigerian. As an undergraduate currently in my penultimate year in the University I am pretty sure I can say I’ve seen quite a number of places here in Nigeria already and made my fair share of trips.</p>
                <a href="about.php" class="RM">Continue Reading...</a>
            </div>
            <!-- End About Me  -->

            <!--Popular Posts  -->
            <div class="about-wrapper PP">
                <div class="top-title">
                    <h2>Popular Post</h2>
                </div>
                
                <div class="image-bar pp">
                    <a href="PageII.php"><img src="assets/img/Ten10/sidebar.jpg" alt=""></a>
                </div>
                <h2 class="news-title SideBar">
                    <a href="PageII.php">Top 10 Must See Destinations in NIGERIA</a>
                </h2>
            </div>
            <!-- End Popular Posts  -->

            <!-- Slideshow -->
            <div class="about-wrapper">
                <div class="top-title">
                    <h2>Slides</h2>
                </div>
                <div class="slideshow-container">
                    <div id="mySlides" class="mySlides fade">
                        <a href="PageVII.php"><img src="assets/img/Argun, Kebbi/sidebarr.jpg" style="width:310px; height:300px"></a>
                    </div>
                      
                    <div id="mySlides" class="mySlides fade">
                        <a href="PageVI.php"><img src="assets/img/Erin-ijesha/sidebarr (1).jpg" style="width:310px; height:300px"></a>
                    </div>
                      
                    <div id="mySlides" class="mySlides fade">
                        <a href="PageV.php"><img src="assets/img/Kaduna/kck (1).jpg" style="width:310px; height:300px"></a>
                    </div>
                    <div id="mySlides" class="mySlides fade">
                        <a href="PageIV.php"><img src="assets/img/Yankari/ynp (1).jpg" style="width:310px; height:300px"></a>
                    </div>
                    <div id="mySlides" class="mySlides fade">
                        <a href="PageIII.php"><img src="assets/img/[imagecyborg.com]/awe (2).jpg" style="width:310px; height:300px"></a>
                    </div>
                      
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </div>
            <!-- End Slideshow -->

            <!-- Newsletter  -->
            <div class="about-wrapper" id="about-wrapper">
                <div class="top-title">
                    <h2>Newsletter</h2>
                </div>
                <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                    <form action="index.php" method="post">
                        <div class="sidebar-search">
                            <input type="email" class="sidebar-input" name="email" placeholder="Your Email Address" required>
                            <label for="" class="label"><?php echo $note ?></label>
                            <input type="Submit" value="Subscribe" name="submit-newsletter" class="sidebar-btn">
                        </div>
                    </form>
                </div>
            </div>
             <!-- End Newsletter  -->
        </div>

        <!-- ---- Main Section ----  -->
        <div class="main-section">

            <!-- News -->
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="PageII.php"><img src="assets/img/Ten10/tp10.jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="PageII.php">Top 10 Must See Destinations in NIGERIA</a>
                    </h2>
                    <div class="date">May 23, 2020</div>
                    <p>Hi Adventour-ers 🤗 I’ll be taking you on 10 must see places in Nigeria. When next you’re making your travel bucket list in Nigeria these are places that should be on your top list, I made sure I touched the 6 geopolitical zones in Nigeria. 1. Yankari National Park, Bauchi: A large wildlife park located</p>
                    <a href="PageII.php" class="RM">Read More...</a>
                </div>       
            </div>   
            <!-- News --> 
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="pageIII.php"><img src="assets/img/[imagecyborg.com]/awe (2).jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="pageIII.php">Awhum Waterfall, Enugu</a>
                    </h2>
                    <div class="date">June 8, 2020</div>
                    <p>The Awhum Waterfall is located at Amaugwe village of Awhum town in Udi Local Government Area, Enugu State, Nigeria. The Awhum Waterfall is formed out of a massive outcrop of granite rock with water flow at the top forming a stream. Some part of the waterfall is usually warm through the seasons. The Awhum waterfall ...</p>
                    <a href="pageIII.php" class="RM">Read More...</a>
                </div>       
            </div>
            <!-- News -->
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="PageIV.php"><img src="assets/img/Yankari/ynp (5).jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="PageIV.php">Yankari National Park, Bauchi</a>
                    </h2>
                    <div class="date">May 30, 2020</div>
                    <p>Yankari National Park is a large wildlife park located in the south-central part of Bauchi State, in northeastern Nigeria. It covers an area of about 2,244 square kilometres (866 sq mi) and it is home to several natural warm water springs, as well as a wide variety of flora and fauna. Its location in the...</p>
                    <a href="PageIV.php" class="RM">Read More...</a>
                </div>       
            </div>
            <!-- News -->
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="PageV.php"><img src="assets/img/Kaduna/kck (4).jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="PageV.php">Kajuru Castle, Kaduna</a>
                    </h2>
                    <div class="date">May 19, 2020</div>
                    <p>Kajuru Castle is a luxury villa, built between the years 1981 and 1989, at Kajuru village in Kaduna State, Nigeria.   It was built by a German expatriate in Nigeria, living in Kaduna at the time.   The Castle is located at about 45 km from Kaduna on a mountaintop in Kajuru village, Kaduna state.</p>
                    <a href="PageV.php" class="RM">Read More...</a>
                </div>       
            </div>   
            <!-- News --> 
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="PageVI.php"><img src="assets/img/Erin-ijesha/sidebarr (1).jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="PageVI.php">Erin-Ijesha Waterfall, Osun</a>
                    </h2>
                    <div class="date">May 17, 2020</div>
                    <p>Erin-Ijesha Waterfalls (also known as Olumirin waterfalls) is located in Erin-Ijesha. It is a tourist attraction located in Oriade local government area, Osun State, Nigeria. The waterfalls was discovered in 1140 AD by one of the daughters of Oduduwa. However, according to The Nation,”Olumirin waterfall was discovered by hunters in 1140 AD”. Another source has...</p>
                    <a href="PageVI.php" class="RM">Read More...</a>
                </div>       
            </div>
            <!-- News -->    
            <div class="post-wrapper">
                <div class="image-bar">   
                    <a href="PageVII.php"><img src="assets/img/Argun, Kebbi/sidebarr.jpg" alt=""></a>               
                </div>
                <div class="news-bar">
                    <h2 class="news-title">
                        <a href="PageVII.php">Argungu Fishing Festival, Kebbi</a>
                    </h2>
                    <div class="date">May 17, 2020</div>
                    <p>The Argungu Fishing Festival or Argungu Dance Festival is an annual four-day festival in the state of Kebbi, in the north-western part of Northern Nigeria. The region is made up of fertile river areas of (matanfada, mala, gamji), with much irrigation and orchards (lambu in Hausa). The majority of fishermen are the followers of Islam...</p>
                    <a href="PageVII.php" class="RM">Read More...</a>
                </div>       
            </div>    

            <!-- Published by -->
            <div class="posted-by">
                <h3>Published by  <a href="about.php">Aisha Bankole</a> </h3>
                <span>My name is Aisha and I'm a Travel Enthusiast. <a href="index.php">View More Posts</a> </span>
            </div>
            <!-- End Published by -->

            <!-- Media Query Section  -->


        </div>

        

    </Section>




    <!-- <Footer>  -->
    <footer>
        <p>Adventours with Aisha || Designed by <a href="">Ibrahim Codes 2020</a></p>
        <div class="top-header-icons">
           
                       
        </div>
    </footer>
<script src="assets/js/main.js" charset="utf-8"></script>
</body>
</html>