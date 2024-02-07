<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><img src="./images/avatar3.png"> Semester Encyclopedia of MCA </title>
    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <!--Iconscout cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--Google font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,900;1,900&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
   <nav>
    <div class="container nav__container">
        <a href="index.html" class=""nav__logo>Semester Encyclopedia</a>
        <ul class="nav__items">
            <li><a href="syllabus.html">Syllabus</a></li>
            <li><a href="faculty.html">Faculty</a></li>
            <li><a href="about.html">About</a></li>

            <li><a href="contact.html">Contact</a></li>
            <!--<li><a href="signin.html">Signin</a></li>-->
            <li class="nav__profile">
                <div class="avatar">
                    <img src="./images/avatar1.png">
                </div>
                <ul>
                    <li><a href="dashboard.htmk">Dashboard</a></li>
                    <li><a href="logout.html">Logout</a></li>
                </ul>
            </li>
        </ul>
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
   </nav> 
<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Posts</h2>
        <div class="alert__message error">
            <p>This is a error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="1">Semester1</option>
                <option value="1">Semester2</option>
                <option value="1">Semester3</option>
                <option value="1">Semester4</option>
            </select>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured">
                <label for="is_featured" checked>Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <textarea rows="10" placeholder="Body"></textarea>
            <button type="submit" class="btn">Add Posts</button>
      
        </form>
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
            <li><a href="category-posts.html">Domain</a></li>
            <li><a href="">Faq's</a></li>
            <li><a href="">Star Courses</a></li>
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