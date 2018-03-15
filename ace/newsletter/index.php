<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Ace In The Hole Multisport</title>
    
    <link href="css/style.less" type="text/css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="menu.js"></script>

</head>
<body>
 
    <header>

        <nav>

            <div class="toggle">

                <div class="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <h1>Ace In the Hole MultiSport</h1>
                </div>
            </div>
            <ul>
                <li class="active-nav"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="registration.html">Registration</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="faqs.html">FAQS</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </nav>
        <section class="weather">

            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original">PORTLAND WEATHER</a>
            
        </section>
        
    </header>

  
    <h3>Sign up for our Newsletter!</h3>
    <div class="form">
    <form action="connect.php" method="POST">
        
     <center>
          <table>
              <tr>
                  <th></th>
              </tr>
              <tr>
                <td>Name</td>  
                 <td><input name="name" type="text" placeholder="Name" required=""></td>  
              </tr>
              
              <tr>
                <td>Email</td>  
                 <td><input name="email" type="text" placeholder="E-mail" required=""></td>  
              </tr>
              
        
              <tr>
                  <td></td>
                   <td><input type="submit" value="submit" name="submit"></td>
                  
              </tr>
              
          </table>
          </center>
 
        
    </form>
      
    </div>
    




<footer>

<a href="facebook.com"><img src="images/facebook.png" alt="Facebook" style="width:40px;height:40px"></a>
   <a href="twitter.com"><img src="images/twitter.png" alt="Facebook" style="width:40px;height:40px"></a>
   <a href="instagram.com"><img src="images/insta.png" alt="Facebook" style="width:40px;height:40px"></a>
   <a href="youtube.com"><img src="images/youtube.png" alt="Facebook" style="width:40px;height:40px"></a>
   
    <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
    
</footer>
      
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>
</body> 


</html>