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
                            <a href="PageVI.php"><img src="assets/img/Erin-ijesha/sidebarr (1).jpg" alt="" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageVI.php">Erin-Ijesha Waterfall, Osun</a>
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
                    <form action="pageV.php#newsletter" method="post">
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
            Kajuru castle, Kaduna
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
                    <img src="assets/img/Kaduna/kck (1).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Kaduna/kck (2).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Kaduna/kck (3).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Kaduna/kck (4).jpg" style="width:310px; height:300px">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <!-- End Slideshow -->

            <!-- News  -->
            <div class="notes">
                <p>Kajuru Castle is a luxury villa, built between the years 1981 and 1989, at Kajuru village in Kaduna State, Nigeria.</p>

                <p>It was built by a German expatriate in Nigeria, living in Kaduna at the time.</p>
                    
                    <p>The Castle is located at about 45 km from Kaduna on a mountaintop in Kajuru village, Kaduna state. Built with 1 meter thick granite stone in a fanciful medieval-inspired Romanesque style, it is adorned with turrets, an armory and a dungeon.</p>
                    
                    <p>The castle is privately owned, and has the capacity to contain 150 guests.</p>
                    
                    <p>It’s allowed for rent, you can hold your parties or group holidays there…. It can also serve as your honeymoon destination</p>
                    
                    <p>However, the price of renting it actually depends on your choice or taste.</p>
                    
                    <p>Note: As at the time of writing this, it’s actually not safe visiting this place as reports of kidnaps and murder have been reported along the area.</p>
                    
                    
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
                    <li class="next-post"><a href="pageIV.php" class="next-post-link">NEXT POST ❯</a></li>
                        <li class="prev-post"><a href="pageIV.php" class="prev-post-link">❮ PREVIOUS POST</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Published by -->

            <!-- Comments  -->
            <div class="posted-by" id="posted-by">
                <h2>Comments</h2>
               <form action="pageV.php#posted-by" method="post">
               <label for="" class="label header">Nyke</label>
                   <label for="" class="label">Wow! U have done a great job. In fact, I am impressed is an under statement. The pictures and the intro are well put. May Allah bless you abundantly. Well done!</label>
                   <label for="" class="label time">May 21, 2020 11:53am</label>
                   <label for="" class="label header">Aisha Bankole</label>
                   <label for="" class="label">Aameen, thank you! </label>
                   <label for="" class="label time">May 22, 2020 4:10pm</label>
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
