<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the signin page if not logged in
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><img src="./images/avatar3.png"> Semester Encyclopedia of MCA </title>
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,900;1,900&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
   <nav>
    <div class="container nav__container">
        <a href="index.php" class="nav__logo">Semester Encyclopedia</a>
        <ul class="nav__items">
           
            <li><a href="about.php">About</a></li>

            <li><a href="contact.php">Contact us</a></li>
            
            <li class="nav__profile">
                <div class="avatar">
                    <img src="./images/avatar1.png">
                </div>
                <ul>
                    
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
   </nav> 

   

   <section class="featured">
    <div class="container featured__container">
        <div class="post__thumbnail">
           
        </div>
    
    <div class="post__info">
        <a href="" class="category__button">MCA</a>
        <h2 class="post__title"><a href="post.html">Master of Computer Application</a></h2>
        <p class="post__body">MCA stands for Master of Computer Applications. It is a 2-year postgraduate program that provides a comprehensive understanding of computer applications, 
            software programming, operating systems, and web technology1
        </p>
        <div class="post__author">
            <div class="post__author-avatar">
                <img src="./images/avatar2.jpg">
            </div>
            <div class="post__author-info">
                <h5>By: Dr. Balraj</h5>
                <small>June 10, 2022 - 7:23</small>
            </div>
        </div>
    </div>
</div>
   </section>
  


   <section class="posts">
    <div class="container posts__container">
        <article class="post">
            <div class="post__thumbnail">
                <img src="images/blog2.png">
            </div>

            <div class="post__info">
                <a href="semester1.php" class="category__button">Semester1</a>
                <h3 class="post__title"><a href="post.html">Syllabus and Subjects regarding Semester 1</a></h3>
                <p class="post__body">Get Details about your course syllabus regarding the first semester of Master of Computer Application</p>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar3.png">
                </div>
                <div class="post__author-info">
                    <h5>By LPU Management</h5>
                    <small>June 13, 2022 - 10:32</small>
                </div>
            </div>
            </div>
        </article>

        <article class="post">
            <div class="post__thumbnail">
                <img src="images/blog15.jpg">
            </div>

            <div class="post__info">
                <a href="semester2.php" class="category__button">Semester2</a>
                <h3 class="post__title"><a href="post.html">Syllabus and Subjects regarding Semester 2</a></h3>
                <p class="post__body">Get Details about your course syllabus regarding the second semester of Master of Computer Application</p>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar3.png">
                </div>
                <div class="post__author-info">
                    <h5>By LPU Management</h5>
                    <small>June 13, 2022 - 10:32</small>
                </div>
            </div>
            </div>
        </article>

        <article class="post">
            <div class="post__thumbnail">
                <img src="images/blog4.png">
            </div>

            <div class="post__info">
                <a href="semester3.php" class="category__button">Semester3</a>
                <h3 class="post__title"><a href="post.html">Syllabus and Subjects regarding Semester 3</a></h3>
                <p class="post__body">Get Details about your course syllabus regarding the third semester of Master of Computer Application</p>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar3.png">
                </div>
                <div class="post__author-info">
                    <h5>By LPU Management</h5>
                    <small>JAugust 22, 2023 - 06:04</small>
                </div>
            </div>
            </div>
        </article>

        <article class="post">
            <div class="post__thumbnail">
                <img src="images/blog5.png">
            </div>

            <div class="post__info">
                <a href="semester4.php" class="category__button">Semester4</a>
                <h3 class="post__title"><a href="post.html">Syllabus and Subjects regarding Semester 4</a></h3>
                <p class="post__body">Get Details about your course syllabus regarding the Last semester of Master of Computer Application</p>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar3.png">
                </div>
                <div class="post__author-info">
                    <h5>By LPU Management</h5>
                    <small>January, 2024 - 03:23</small>
                </div>
            </div>
            </div>
        </article>
    </div>
   </section>
  

    <section class="category__buttons">
        <div class="container category__buttons-container">
         <a href="category-posts.php" class="category__button">Domain</a>
         <a href="faq.php" class="category__button">FAQ's</a> 
         <a href="star.php" class="category__button">Star Courses</a> 
         <a href="" class="category__button">Project</a> 
         <a href="" class="category__button">Marks Distribution</a> 
         <a href="" class="category__button">Alumni</a>    
        </div>
    </section>

  


    <footer>
        <div class="footer__socials">
       <a href="https://youtu.be/JSpuRb4PLLg?si=tCUhO-3m3eP0haql" target="_blank"><i class="uil uil-youtube"></i></a>
       <a href="https://www.facebook.com/LPUUniversity/" target="_blank"><i class="uil uil-facebook-f"></i></a>
       <a href="https://www.linkedin.com/school/lovely-professional-university/?originalSubdomain=in" target="_blank"><i class="uil uil-linkedin"></i></a>
       <a href="hhttps://twitter.com/lpuuniversity?lang=en" target="_blank"><i class="uil uil-twitter"></i></a>
       <a href="https://www.instagram.com/lpuuniversity/" target="_blank"><i class="uil uil-instagram-alt"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="category-posts.php">Domain</a></li>
                <li><a href="faq.php">Faq's</a></li>
                <li><a href="star.php">Star Courses</a></li>
                <li><a href="">Project</a></li>
                <li><a href="">Marks Distribution</a></li>
                <li><a href="">Alumni</a></li>
            </ul>
        </article>

        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Student Query</a></li>
                <li><a href="">Location</a></li>
                
            </ul>
        </article>

        <article>
            <h4>Life at LPU</h4>
            <ul>
                <li><a href="">Hostel Life</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Placements</a></li>
                <li><a href="">Books</a></li>
                <li><a href="">Marks Distribution</a></li>
                <li><a href="">Alumni</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy;  2006 Lovely Professional University</small>
    </div>
    </footer>





 <script src="script.js"></script>   
</body>
</html>