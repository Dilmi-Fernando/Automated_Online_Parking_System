<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./stylesd.css"> 
    <title> parKING | Never Tour Around The Block Again </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <div class="container-body">
        <?php 
        require_once('landing.php');
        ?>


<!--Landing Page-->

<!----------------------------------------------Welcome Section---------------------------------------------->
<div class="landing-container">
    <section class="home" id="home">
        <div class="head-container">
            <div class="box">
                <div class="text">
                    <h1>WELCOME</h1>
                    <p>As the world is moving at a swift pace, the constant battle with time has 
                        become a significant issue in the present times. Amidst their hectic daily routines, 
                        most people will have to waste an unnecessary amount of time and fuel 
                        wandering in the streets and parking lots hunting for an available space to park 
                        their vehicles. In an attempt to resolve this matter we introduce
                        <span>ParKING</span>, our Automated Parking System.
                        <br><br>
                        With us, You will never tour aroud the parking lot again!
                       </p>
                   
                   <!-- <button>MORE INFO</button> -->
                </div>
            </div>

            <div class="image">
                <img src="/landing page/parking1.jpg" class="slide">
            </div>

            <div class="slider">
                <img src="/landing page/parking1.jpg"  class="slide" onclick="img('/landing page/parking1.jpg')">
                <img src="/landing page/parking2.jpg"  class="slide" onclick="img('/landing page/parking2.jpg')">
                <img src="/landing page/parking3.jpg"  class="slide" onclick="img('/landing page/parking3.jpg')">

            </div>
            
    </section>

<!----------------------------------------------Facilities Section---------------------------------------------->

    <section class="facilities" id="facilities">
        <div class="facs">

            <h2>Facilities We Offer</h2>

            <div class="fac-box">
                <ul class="fac-line">
                    <li><img src="/landing page/f1.jpg" class="fac-box" ><br>Online Payment</li>
                    <li><img src="/landing page/f2.jpg" class="fac-box" ><br>Different Floors for Accesibility</li>
                    <li><img src="/landing page/f3.jpg" class="fac-box" ><br>Advance Boking</li>
                    <li><img src="/landing page/f4.jpg" class="fac-box" ><br>Assured Security</li>
                </ul>
            </div>
    
        </div>
    </section>
    <!----------------------------------------------FAQ Section---------------------------------------------->
<section class="faq" id="faq">

    <h2>Frequantly Asked Questions</h2>

    <ul class="accordion">
        <li>
            <button class="accordion-btn">Can I reserve a parking spot in advance?</button>
            <div class="accordion-content">
                <p>Yes, our system allows you to reserve a parking spot in advance, giving you peace of mind knowing that your spot will be available when you arrive.</p>
            </div>
        </li>
        <li>
            <button class="accordion-btn">What information do I need to provide to make a parking reservation?</button>
            <div class="accordion-content">
                <p>To make a parking reservation, you will need to provide details such as the desired date and time of your arrival, the duration of your stay, and your contact information.</p>
            </div>
        </li>
        <li>
            <button class="accordion-btn">Is there a fee for using the automated parking reservation system?</button>
            <div class="accordion-content">
                <p>Yes, The fee may vary depending on factors such as the location, duration of the reservation,</p>
            </div>
        </li>
        <li>
            <button class="accordion-btn">How do I pay for the parking reservation?</button>
            <div class="accordion-content">
                <p>Payment for your parking reservation can be made securely through our online platforms</p>
            </div>
        </li>
        
    </ul>

</section>
</div>
    </div>



<!--Footer-->

    <footer class="footer-distributed">
        <div class="footer-left">
            <img src="/landing page/Footer/Logo (2).png">
        </div>

        <div class="footer-center">
            <div>
                <i class="fa-solid fa-phone"></i><span>1 400 - 26 - 3621</span>
            </div>
            <div>
                <i class="fa-solid fa-location-dot"></i><span>123, ABC Address,
                Sri Lanka</span>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i><span>parking.email@mail.com</span>
            </div>

         </div>

        <div class="footer-right">
 
            <span>About The Team</span>
            <p class="footer-company-about">
                
                PARKING is an Automated Parking System where you can
                check for available slots and reserve them according to your requirements.
                This is built by MLB_01.01_09 students from Y1S2 2023 February batch
                as the project for the module Internet and Web Technologies - IT1100.
                
            </p>

            <p class="footer-links">
                <a href="#">HOME</a>
                |
                <a href="#">VIEW PARKING</a>
                |
                <a href="#">BOOKING</a>
                |
                <a href="#">MY ACCOUNT</a>
                |
                <a href="#">ABOUT</a>
                |
                <a href="#">FEEDBACK</a>
                |
                <a href="#">FAQ</a>
            </p>


        </div>

    </footer>

        <!----------------------------------------------SCRIPTS---------------------------------------------->

    <script>
        function img(anything) {
          document.querySelector('.slide').src = anything;
        }
    
        function change(change) {
          const line = document.querySelector('.image');
          line.style.background = change;
          
        }
      </script>

      <script>
        const accordionBtns = document.querySelectorAll('.accordion-btn');

        accordionBtns.forEach(function (btn) {
            
            btn.addEventListener('click', function() {
                const listItem = this.parentNode;
                
                const openItems = document.querySelectorAll('.accordion-content.open');
                
                openItems.forEach(function (item) {
                     if (item.parentNode !== listItem) {
                         item.classList.remove('open');
                          }
                        });
            const content = this.nextElementSibling;
            content.classList.toggle('open');
        });

        });
      </script>
</body>

</html>