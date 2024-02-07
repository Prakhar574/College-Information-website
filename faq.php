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
  
  

 
   <section class="faqs">
    <h2 style="text-align: center;">Frequently Asked Questions</h2>
    <div class="container faqs__container">
        <article class="faq open">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>Do they Provide courses for Beginners?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How much time will it take to master Frontend?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>


        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>Do this course will cover react concepts?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>



       


        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How much time will it take to master the Frontend?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>


        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>Will they will provide concepts for Nodejs?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>


        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How will I get the best from this tutorials?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>Are the courses provided here is free of cost?</h4>
            <p>
                Review the course outline of the courses you want to apply for. This will give you a rough idea of what lies ahead for you  
            </p>
        </div>
        </article>

    </div>
</section>






<script>
    const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');
    

        const icon=faq.querySelector('.faq__icon i');
        if(icon.className === 'uil uil-plus')  {
            icon.className = "uil uil-minus"
        }  else {
            icon.className= "uil uil-plus"
        } 
    
    
    
    })

})
</script>
</body>
</html>