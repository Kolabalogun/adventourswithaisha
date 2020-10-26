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
        // echo "done";
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
                            <a href="PageVII.php"><img src="assets/img/Argun, Kebbi/sidebarr.jpg" alt=""  style="width:120px; height:100px"></a>
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
                    <form action="pageII.php#newsletter" method="post">
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
                Top 10 Must See Destinations in NIGERIA
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
                    <a href=""><img src="assets/img/Ten10/tp10.jpg" style="width:310px; height:300px"></a>
                </div>
            </div>
            <!-- End Slideshow -->

            <!-- News  -->
            <div class="notes">
                <p>Hi Adventour-ers 🤗</p>

                <p> I’ll be taking you on 10 must see places in Nigeria. When next you’re making your travel bucket list in Nigeria these are places that should be on your top list, I made sure I touched the 6 geopolitical zones in Nigeria </p>
                    
                    <p>  1. Yankari National Park, Bauchi: A large wildlife park located in Bauchi. It was originally created as a game reserve in 1956, but later designated Nigeria’s biggest national park in 1991. It is one of the most popular eco destinations in West Africa</p>
                    
                    <p> 2. Awhum Waterfall, Enugu: Located at Amaugwe village of Awhum town in Enugu State, Nigeria. It is formed out of a massive outcrop of granite rock with water flow at the top forming a stream. Some part of the waterfall is usually warm through the seasons. The locals believe the water has healing powers and is capable of driving away evil spirits if used.</p>
                    
                    <p> 3. Ado-Awaye suspended lake, Oyo: There are two suspended lakes in the world and one of them is in Nigeria. It is the mysterious Iyake suspended lake at the peak of Oke Ado Awaye. It can be tagged the “hiker’s fairy-tale.”Oke Ado Awaye gets its name from the two sister communities surrounding the mountain Ado and Awaye. The ancient community was a powerful monarchy in past centuries until the death of the last king.</p>
                    
                    <p>  4. Ogbunike Caves, Anambra: Located in a valley blanketed by tropical rain forest, the collection of caves has been in use over centuries by local people for whom it has particular spiritual significance.The immediate environment of the caves up to about 200 meters radius is a thick tropical rainforest type of vegetation. The site has sufficient boundaries (20 hectares) to protect its values from direct effects of human encroachment.</p>
                    
                    <p>  5. Olumo Rock, Ogun: A mountain in south-western Nigeria. It is located in the ancient city of Abeokuta, Ogun State, and was normally used as hidden places during inter-tribal warfare in the 11th century. Its patron spirit is venerated in the Yoruba religion as an orisha.</p>
                    
                    <p> 6. Owu Waterfall, Kwara: A waterfall located in Isin Local Government Area of Kwara. It’s the highest waterfall in West Africa measuring 120m above the water level and cascades 330 feet down an escarpment, with rocky out crops to a pool of ice-cold water below. This is a place you want to go to over and over again.</p>
                    
                    <p> 7. Mambilla Plateau, Taraba: A plateau in Taraba State. The plateau is Nigeria’s northern continuation of the Bamenda Highlands of Cameroon. It is the highest mountain in Nigeria and the highest mountain in West Africa if Cameroon’s mountains, such as Mount Cameroon, are excluded.</p>
                    
                    <p>  8. Obudu Mountain Resort, Cross River: Obudu Mountain Resort (formerly known as the Obudu Cattle Ranch) is a ranch and resort on the Obudu Plateau in Cross River State. Because of the developed tourist facilities it has turned the ranch into a well known holiday and tourist resort center in Nigeria. It has a serene climate compared to other regions in Nigeria.</p>
                    
                    <p> 9. Ikogosi warm spring, Ekiti: A tourist attraction located at Ikogosi, a town in Ekiti State, southwestern Nigeria. Flowing abreast the warm spring is another cold spring which meets the warm spring at a confluence, each maintaining its thermal properties.These attributes make the spring a tourist attraction in Nigeria.</p>
                    
                    <p> 10. Dalla Hill, Kano: The hill is a crucial part of the history of the city of Kano. It is believed that Barbushe, a man of great stature and might who hunted elephants with his stick and carried them on his back to the hill, resided there hundreds of years ago. The only person that was allowed access to the shrine was Barbushe and anyone that entered it without his permission is said to have died tragically.</p>
                    
                    <p>These are amazing places to check out here in Nigeria, and trust me I’ll be taking you through it one by one in my next few posts.
                    
                    <p> Kisses!
                    </p>
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
                    <li class="next-post"><a href="pageIII.php" class="next-post-link">NEXT POST ❯</a></li>
                        <li class="prev-post"><a href="pageVII.php" class="prev-post-link">❮ PREVIOUS POST</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Published by -->

            <!-- Comments  -->
            <div class="posted-by" id="posted-by">
                <h2>Comments</h2>
               <form action="pageII.php#posted-by" method="post">



                   <!-- From DB  -->
<!-- 
            <?php 
                   
            // require('conn.php');
                   
            // $sql = "SELECT NAME_, TEXT_, DATE_ FROM comments";
            // $result = mysqli_query($conn, $sql);

            // if (mysqli_num_rows($result) > 0) {
            //      while($row = mysqli_fetch_assoc($result)) {
            //          $c_name = $row["NAME_"]. "<br>";
            //          $c_comments = $row["TEXT_"]. "<br>";
            //      $c_time = $row["DATE_"]. "<br>";

            // echo '
    
            //         <label for="" class="label header">'.$c_name.'</label>
            //        <label for="" class="label">'.$c_comments.'</label>
            //        <label for="" class="label time">'.$c_time.'</label>'
    
            //     ;
     
            //     }
            // }
            //     else {
            //         //  echo "0 results";
            //     }

                   
                   
            ?> -->
                   
                   
                   
                   <label for="" class="label header">Oyetoke Ademola</label>
                   <label for="" class="label">Lovely places to visit….. Very soon</label>
                   <label for="" class="label time">May 23, 2020 3:19pm</label>
                   <label for="" class="label header">Aisha Bankole</label>
                   <label for="" class="label">Yes! </label>
                   <label for="" class="label time">May 23, 2020 3:33pm</label>
                   <label for="" class="label header">Amirat</label>
                   <label for="" class="label">Amazing </label>
                   <label for="" class="label time">May 23, 2020 4:31pm</label>
                   <label for="" class="label header">George Black</label>
                   <label for="" class="label">Lovely travel goals</label>
                   <label for="" class="label time">May 24, 2020 2:28am</label>
                   <label for="" class="label header">Idris Oduola</label>
                   <label for="" class="label">Amazing</label>
                   <label for="" class="label time">May 24, 2020 6:33am</label>
                   <label for="" class="label header">Bankole Adebori</label>
                   <label for="" class="label">It’s amazing that in my country Nigeria, we have such tourist sites and natural scenes that could be of great sources of economic advantage to us and our government are not maximally annexing it. This is quiet unfortunate.

In other climes, this would have been generating IGR (Internally Generated Revenue) for the immediate environment, local or state government if the central or Federal government refused to take it up.

However, creating awareness of such tourist sites, as you are doing now, could be the penultimate step to making government or private organisations takes up the right actions at optimizing the economic advantages.

One again, kudos to your efforts.</label>
                   <label for="" class="label time">May 24, 2020 11:04</label>
                   <label for="" class="label header">Aisha</label>
                   <label for="" class="label">I’d definitely go to at least five places out of these places 😍
The place is so nice ♥️</label>
                   <label for="" class="label time">May 27, 2020 1:52pm</label>

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
