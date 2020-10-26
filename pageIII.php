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
                            <a href="PageVI.php"><img src="assets/img/Erin-ijesha/sidebarr (1).jpg" alt="" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageVI.php">Erin-Ijesha Waterfall, Osun</a>
                        </h2>
                    </div>

                    <div class="n">
                        <div class="image-bar pp">
                            <a href="PageV.php"><img src="assets/img/Kaduna/kck (1).jpg" alt="" style="width:120px; height:100px"></a>
                        </div>
                        <h2 class="news-title SideBar">
                            <a href="PageV.php">Kajuru Castle, Kaduna</a>
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
                    <form action="pageIII.php#newsletter" method="post">
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
            Awhum Waterfall, Enugu
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
                    <img src="assets/img/[imagecyborg.com]/awe (2).jpg">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <!-- End Slideshow -->

            <!-- News  -->
            <div class="notes">
                <p>The Awhum Waterfall is located at Amaugwe village of Awhum town in Udi Local Government Area, Enugu State, Nigeria. The Awhum Waterfall is formed out of a massive outcrop of granite rock with water flow at the top forming a stream. Some part of the waterfall is usually warm through the seasons. The Awhum waterfall is 30 metres high and is located around the Awhum Monastery.</p>

                <p>The community itself also boasts of numerous pristine lakes, some of them with beautiful white sand beaches. The numerous streams and lakes are still maintained in their natural conditions. More than 50 different species of fish are found in the streams and lakes of the community and some of the lakes have never been fished on before. </p>
                    
                    <p>The water is said to be curative (have healing power) and capable of dispelling evil forces if and wherever it is sprinkled. It takes about 45 minutes walk from the parking spot to the fall. The site is particularly good for religious tourism.</p>
                    
                    <p>When visiting Awhum waterfall, don’t ask for directions from someone who probably did not drive down there. Use Google Maps, it works. It should take you to the town. You can then ask for directions to the Catholic Monastery (actually it’s Our Lady of Mount Calvary Cistercian Abbey). Also note that when you search for Awhum on Google Maps you will get directions to Ohum instead. Ohum is how you should pronounce it, not how you should spell it.</p>
                    
                    <p>Also, take bottles of water (or sachets of pure water if that’s how you roll). The hike to the waterfall will take an hour, and that’s the easy part. Climbing back up the hill after going down will definitely take longer than an hour and you are going to need water.</p>
                    
                    <p>The waterfall and cave is actually under the control of the Abbey. It has been closed to the general public for a few years now. The proper procedure for gaining access to the site requires you to write a letter to the abbey asking for permission to visit. They then let you know if and when you can visit. Their P.O.Box is 698, Enugu. That in a nutshell is the “proper” way.</p>
                    
                    <p>The security personnel at the gate can act as tour guides for a fee which actually varies. A significant part of the journey will require you to wade through the stream (knee deep at certain points) so it will be best to have footwear you won’t mind dipping in water.</p>
                    
                    <p>There is a “mountain” where prayers are usually offered on. It takes more than an hour to get there and it also involves letting yourself down with a rope.</p>
                    
                    <p>When next you are in Enugu State, make out time to visit the popular Awhum Waterfall, one of the major tourist attractions in the state. And if you are in love with nature, then this is definitely a must visit.</p>
                    
                    <p>This is all that you need to know about Awhum Waterfall, Enugu.</p>
                    
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
                        <li class="prev-post"><a href="pageII.php" class="prev-post-link">❮ PREVIOUS POST</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Published by -->

            <!-- Comments  -->
            <div class="posted-by" id="posted-by">
                <h2>Comments</h2>
               <form action="pageIII.php#posted-by" method="post">
                  
                   <!-- COde  -->
                   <label for="" class="label header"><?php echo $comment_header ?></label>
                   <label for="" class="label"><?php echo $comment_txt ?></label>
                   <label for="" class="label time"><?php echo date("Y-m-d"), " ".date("H:i:s") ?></label>
                   <label for="" class="label header">Jumoke T Arogundade</label>
                   <label for="" class="label">Thank you . But can you please tell us the average fee.</label>
                   <label for="" class="label time">June 8, 2020 9:58pm</label>
                   <label for="" class="label header">Aisha Bankola</label>
                   <label for="" class="label">5000 naira max if you’re going in group</label>
                   <label for="" class="label time">June 8, 2020 10:13pm</label>
                   <label for="" class="label header">Aisha</label>
                   <label for="" class="label">What if we are going alone
How much is the average fee
The place is so nice ♥️</label>
                   <label for="" class="label time">June 9, 2020 10:37am</label>
                   <label for="" class="label header">Aishah</label>
                   <label for="" class="label">This is really nice. Greater energy ma’am</label>
                   <label for="" class="label time">June 9, 2020 8:05pm</label>
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
