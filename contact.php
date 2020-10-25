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
                <!-- <div class="about-wrapper">
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
                </div> -->
                <!-- End Related Posts  -->

                <!-- Newsletter  -->
                <div class="about-wrapper" id="newsletter">
                    <div class="top-title">
                        <h2>Newsletter</h2>
                    </div>
                    <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                    <form action="about.php#newsletter" method="post">
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

            <div class="contact-header">
                <h2>Contact</h2>
                <p>Don’t hesitate to reach out with the contact information below, or send a message using the form.</p>
           
           
                <div class="git">
                    <h2>Get in Touch</h2>
                    <p>Lagos</p>
                    <p>Nigeria</p>
                
                    <a href="mailto:>advnetourswithaisha@gmail.com">advnetourswithaisha@gmail.com</a> <br>
                    <a href="tel:+2349038615721">(234)9038615721</a>
                   
                
                </div>
            
            </div>

        



        </div>
    </section>

        <!-- <Footer>  -->
        <footer>
            <p>Adventours with Aisha || Created by <a href="">Ibrahim Codes &copy; 2020</a></p>
            <div class="top-header-icons">
                    
            </div>
        </footer>
    <script src="assets/js/main.js" charset="utf-8"></script>
    </body>
    </html>
