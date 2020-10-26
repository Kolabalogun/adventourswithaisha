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
                    <form action="pageIV.php#newsletter" method="post">
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
            Yankari National Park, Bauchi
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
                    <img src="assets/img/Yankari/ynp (2).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Yankari/ynp (3).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Yankari/ynp (4).jpg" style="width:310px; height:300px">
                </div>
                <div id="mySlides" class="mySlides fade">
                    <img src="assets/img/Yankari/ynp (1).jpg" style="width:310px; height:300px">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <!-- End Slideshow -->

            <!-- News  -->
            <div class="notes">
                <p>Yankari National Park is a large wildlife park located in the south-central part of Bauchi State, in northeastern Nigeria.</p>

                <p>It covers an area of about 2,244 square kilometres (866 sq mi) and it is home to several natural warm water springs, as well as a wide variety of flora and fauna. Its location in the heartland of the West African savanna makes it a unique way for tourists and holidaymakers to watch wildlife in its natural habitat.</p>
                    
                    <p>Yankari was originally created as a game reserve in 1956, but later designated Nigeria’s biggest national park in 1991. It is the most popular destination for tourists in Nigeria and, as such, plays a crucial role in the development and promotion of tourism and ecotourism in Nigeria. It is also one of the most popular eco-destinations in West Africa.</p>
                    
                    <p>The open country and villages that surround Yankari National Park are populated by farmers and herders, but there has been no human settlement in the park for over a century. There is, however, evidence of earlier human habitation in the park, including old iron smelting sites and caves.</p>
                    
                    <p>In 1934, the Northern Regional Committee made a recommendation to the Executive Council to establish a pilot game reserve in the Bauchi Emirate. This was supported by Alhaji Muhammadu Ngeleruma, a minister in the former northern Nigeria Ministry of Agriculture and Natural Resources. Around this time, he had been impressed by a visit to a Sudanese game reserve while on a trip to East Africa. On returning, he encouraged the moves to establish something similar in Nigeria.</p>
                    
                    <p>In 1956, the Northern Nigeria Government approved the plans for the creation of a Game Preservation area. Yankari was identified as a region in the south of what was then Bauchi Province where large numbers of wild animals existed naturally and could be protected. In 1957 a Game Preservation area was carved out and the area was constituted as a Bauchi Native Authority Forest Reserve.</p>
                    
                    <p>Yankari was first opened to the public as a premier game reserve on 1 December 1962. Since then, the Northern Eastern State Government and then the Bauchi State Government both managed the Yankari Game Reserve. The park is now managed by the Federal Government of Nigeria, through the National Park Service</p>
                    
                    <p>In 1991 it officially became a National Park by decree 36 of the National Government.</p>
                    
                    <p>However, planning a trip to Yankari National Park, Bauchi, you need enough money to lodge in a hotel because the sight of the park is not enough for a day journey and of course your photographer to capture every moment in there, it has it own Restaurant and Bar (Yankari Bar), Resort and Safari, Wikki Warm Spring, Safari Game review and many more. </p>
                    
                    <p>Attached to this post is a picture of the prices charged at Yankari Game Reserve. To make reservations check in at http://www.yankarigamereserve.com.ng/</p>
                    <p>Pictures: Instagram</p>
                    <p>Reference: Wikipedia</p>
                    
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
                    <li class="next-post"><a href="pageV.php" class="next-post-link">NEXT POST ❯</a></li>
                        <li class="prev-post"><a href="pageIII.php" class="prev-post-link">❮ PREVIOUS POST</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Published by -->

            <!-- Comments  -->
            <div class="posted-by" id="posted-by">
                <h2>Comments</h2>
               <form action="pageIV.php#posted-by" method="post">
                   
                   <!-- COde  -->
                   <label for="" class="label header">Aisha</label>
                   <label for="" class="label">So mind blowing😍🤤…. Now I need to update my to travel list 🤩</label>
                   <label for="" class="label time">May 30, 2020 3:00pm</label>
                   <label for="" class="label header">Jumoke T Arogundade</label>
                   <label for="" class="label">You are really doing a great job babe. Keep it up</label>
                   <label for="" class="label time">May 30, 2020 5:10pm</label>
                  
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
