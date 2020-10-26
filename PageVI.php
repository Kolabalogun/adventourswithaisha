<!-- Start PHP  -->
<?php
// Connection to db 
// require('conn.php');

// Global Variables 
$note = "";
$comment_header = "";
$comment_txt = "";
$c_note = "";
$c_name = "";
$c_comments = "";
$c_time = "";

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


// $sql = "SELECT NAME_, TEXT_, DATE_ FROM comments";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//      $c_name = $row["NAME_"]. "<br>";
//      $c_comments = $row["TEXT_"]. "<br>";
//      $c_time = $row["DATE_"]. "<br>";

     
//   }
// }
//  else {
//   echo "0 results";
// }

// Comments Posting and Connection 
if (isset($_POST['Submit_comment'])) {

    $comment_header = $_POST['name'];
    $comment_txt = $_POST['message'];

    if (empty($comment_header) || empty($comment_txt)) {
        $c_note = "Both Fields must be filled";
    }
    else {
        $comment_header;
        $comment_txt;

        // Comments Posting to db 
        // $sql = mysqli_query($conn, "INSERT INTO `comments`(`NAME_`, `TEXT_`) VALUES ('$comment_header', '$comment_txt')"); 
    }

};

// $conn->close();
?>
<!-- End PHP  -->



<!-- HTML  -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventours with Aisha</title>
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
                <!-- <a href=""><img src="assets/img/Svgs/instagram-brands.svg" alt=""></a>     
                <a href=""><img src="assets/img/Svgs/whatsapp-brands.svg" alt=""></a>         -->
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
               
                <!-- Popular Posts  -->
                <div class="about-wrapper">
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

                <!-- Related Posts  -->
                <div class="about-wrapper">
                    <div class="top-title">
                        <h2>Related Posts</h2>
                    </div>
                    
                    <div class="n">
                        <div class="image-bar pp">
                            <a href="PageVII.php"><img src="assets/img/Argun, Kebbi/sidebarr.jpg" alt="" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageVII.php">Argungu Fishing Festival, Kebbi</a>
                        </h2>
                    </div>
                    <div class="n">
                        <div class="image-bar pp">
                            <a href="PageV.php"><img src="assets/img/Kaduna/kck (1).jpg" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageV.php">Kajuru castle, Kaduna</a>
                        </h2>
                    </div>

                    <div class="n">
                        <div class="image-bar pp">
                            <a href="PageIV.php"><img src="assets/img/Yankari/ynp (2).jpg" alt="" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageIV.php">Yankari National Park, Bauchi</a>
                        </h2>
                    </div>     
                </div>
                <!-- End Related Posts  -->

                <!-- Newsletter  -->
                <div class="about-wrapper" id="newsletter">
                    <div class="top-title">
                        <h2>Newsletter</h2>
                    </div>
                    <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                    <form action="pageVI.php#newsletter" method="post">
                        <div class="sidebar-search">
                            <input type="email" class="sidebar-input" name="email" placeholder="Your Email Address" required>
                            <label for="" class="label"><?php echo $note ?></label>
                            <input type="Submit" value="Subscribe" name="submit-newsletter" class="sidebar-btn">
                        </div>
                    </form>
                </div>
                <!-- End Newsletter  -->
            </div>

            <!-- ---- Main Section ----  -->
        <div class="main-section">
            <h1 class="post-title">
            Erin-Ijesha Waterfall, Osun
            </h1>

            <!-- Post Metas -->
            <div class="post-meta">
                <span><a href="">Aisha Bankole</a></span>
                <span><a href="">May 23, 2020</a></span>
                <span><a href="">Travel</a></span>
            </div>
            <!-- End Post Metas -->

            <!-- Slideshow -->
            <div class="slideshow-container blog">
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Erin-ijesha/eiws (1).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Erin-ijesha/eiws (4).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Erin-ijesha/eiws (7).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Erin-ijesha/eiws (8).jpg" style="width:310px; height:300px">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <!-- End Slideshow -->

            <!-- News  -->
            <div class="notes">
                <p>Erin-Ijesha Waterfalls (also known as Olumirin waterfalls) is located in Erin-Ijesha. It is a tourist attraction located in Oriade local government area, Osun State, Nigeria. The waterfalls was discovered in 1140 AD by one of the daughters of Oduduwa.</p>

                <p>However, according to The Nation,”Olumirin waterfall was discovered by hunters in 1140 AD”. Another source has it that the tourist site was discovered by a woman called Akinla, founder of Erin-Ijesha town and a granddaughter of Oduduwa, during the migration of Ife people to Erin- Ijesha.</p>
                    
                    <p>There is also another wonderful thing about the Eri-Ijesha waterfalls; it is like a collection of seven cascades which pour over a cliff, thus creating an impressive seven-part waterfalls.</p>
                    
                    <p>The seven parts can best be described as a stunning assemblage of seven unique levels, with each level providing a whole new outlook when compared to the previous level.</p>
                    
                    <p>It is because of this unimaginable beauty that prompts a writer, who visited the waterfalls for the first time, to declare that the waterfalls exudes a therapeutic ambiance which only something natural can produce.</p>
                    
                    <p>Nevertheless, climbing the various levels of the waterfalls is not as easy as it may seem on first glance; however, it is exciting and worth the effort.</p>
                    
                    <p>Erin-Ijesha waterfall is one place you want to go over and over again with your friends and loved ones.</p>
                    
                    
                    <p>Photocredit: Instagram</p>
                    
                    
            </div>
            <!-- End News  -->

            <!-- Share Social Media  -->
            <div class="share">
                <nav class="nav-bar share">
                    <ul>
                        <li class="SH">SHARE THIS:</li>
                        <li><a href="https://www.facebook.com" class="FB">Facebook</a></li>
                        <li><a href="https://www.twitter.com" class="TW">Twitter</a></li>
                        <!-- <li><a href="" class="WH">Whatsapp</a></li>
                        <li><a href="" class="In">LinkedIn</a></li></li> -->
                    </ul>
                </nav>
            </div>
            <!-- End Share Social Media  -->

            <!-- Published by -->
            <div class="posted-by">
                <h3>Published by  <a href="about.php">Aisha Bankole</a> </h3>
                <span>My name is Aisha and I'm a Travel Enthusiast. </span>
                <div class="p-nav">
                    <ul class="post-nav">
                    <li class="next-post"><a href="pageVII.php" class="next-post-link">NEXT POST ❯</a></li>
                        <li class="prev-post"><a href="pageV.php" class="prev-post-link">❮ PREVIOUS POST</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Published by -->

            <!-- Comments  -->
            <div class="posted-by" id="posted-by">
                <h2>Comments</h2>
               <form action="pageVI.php#posted-by" method="post">
                   <!-- From DB  -->
                   
                   <label for="" class="label header">Abdulbasit Ibrahim</label>
                   <label for="" class="label">Wow. This is a wonderfully written article. I can’t wait to read more </label>
                   <label for="" class="label time">May 17, 2020 3:19pm</label>
                   <label for="" class="label header">Aisha Bankole</label>
                   <label for="" class="label">Thanks Basit!  </label>
                   <label for="" class="label time">May 22, 2020 3:33pm</label>
                   <label for="" class="label header">Geobalance</label>
                   <label for="" class="label">This is Geographically amazing 😍 Nigeria is well blessed with so many beautiful Geographical phenomenal… I Love this… </label>
                   <label for="" class="label time">May 18, 2020 4:31pm</label>
                   <label for="" class="label header">Aisha Bankole</label>
                   <label for="" class="label">Thank you! </label>
                   <label for="" class="label time">May 21, 2020 2:28am</label>
                   <label for="" class="label header">Aishah</label>
                   <label for="" class="label">My state is beautiful ayy</label>
                   <label for="" class="label time">May 19, 2020 6:33am</label>
                   <label for="" class="label header">Aliu Bankole</label>
                   <label for="" class="label">Absolutely amazing! I’m proud of you for this initiative! It’s a great startup indeed! Please go forth and do more! With this, we have started to register our footprints on the world stage! Please keep it up and take note of the large crowd behind you – your constituency!</label>
                   <label for="" class="label time">May 22, 2020 6:45am</label>
                   
                   <!-- COde  -->
                   <label for="" class="label header"><?php echo $comment_header ?></label>
                   <label for="" class="label"><?php echo $comment_txt ?></label>
                   <label for="" class="label time"><?php echo date("Y-m-d"), " ".date("H:i:s") ?></label>
                    <h2>Leave a Reply</h2>
                    <input type="text" class="name" name="name" placeholder="Your Name" required>
                    <input type="text" class="message" name="message" placeholder="Enter your comment here..." required>
                   <label for="" class="label"><?php echo $c_note ?></label>
                    <input type="submit" class="sidebar-btn comment" value="Post Comment" name="Submit_comment">
               </form>  
            </div>
            <!-- End Comments  -->

            
        </div>
    </Section>


    <!-- <Footer>  -->
        <footer>
            <p>Adventours with Aisha || Created by <a href="">Ibrahim Codes &copy; 2020</a></p>
            <div class="top-header-icons">
                   
            </div>
        </footer>
    <script src="assets/js/main.js" charset="utf-8"></script>
    </body>
    </html>
