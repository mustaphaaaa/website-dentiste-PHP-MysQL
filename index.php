
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

  
</head>
<body>
    
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>
            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#service">service</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
               </nav>
               <a href="#contact"   class="btn">make appointment</a>
               <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </div>
     
</header>

<section class="home">
    <div class="container">
        <div class="row min-vh-100  align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores est at dolore maiores voluptatum!</p>
                <a href="#contact" class="btn">make appointment</a>

            </div>
        </div>
    </div>
</section>


<section >
    <div class="about" id="about">
        <div class="container">
            <div class="row align-items²-center">
                <div class="col-md-6">
                <img src="images/about-img.jpg" alt="" class="w-100 mb-4 mb-md-0">
               </div>
               <div class="col-md-6 content">
                   <span>about us</span>
                   <h3>true healthcare for your family</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium praesentium, 
                       odit maiores, tempora cum officiis nesciunt ratione maxime, enim iure optio aliquid dolor sed!</p>
                       <a href="#contact" class="btn">make appointment</a>

               </div>

            </div>
        </div>
    </div>
</section>


<section class="services" id="services">
  <h1 class="heading">our services</h1>

  <div class="box-container">
      <div class="box">
          <img src="images/icon-1.svg" alt="">
          <h3>alignement specialite</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Dicta error perferendis incidunt enim ducimus!</p>
      </div>
      <div class="box">
          <img src="images/icon-2.svg" alt="">
          <h3>Cosmetic dentistry</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error perferendis incidunt enim ducimus!</p>
      </div>
      <div class="box">
          <img src="images/icon-3.svg" alt="">
          <h3>alignement specialite</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error perferendis incidunt enim ducimus!</p>
      </div>
      <div class="box">
          <img src="images/icon-4.svg" alt="">
          <h3>alignement specialite</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error perferendis incidunt enim ducimus!</p>
      </div>
      <div class="box">
          <img src="images/icon-5.svg" alt="">
          <h3>alignement specialite</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error perferendis incidunt enim ducimus!</p>
      </div>
      <div class="box">
          <img src="images/icon-6.svg" alt="">
          <h3>alignement specialite</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error perferendis incidunt enim ducimus!</p>
      </div>

  </div>


</section>



 <section class="process">
     
     <h1 class="heading">work process</h1>
     <div class="box-container">
         <div class="box">
             <img src="images/process-1.png" alt="">
             <h3>Cosmetic dentistry</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
         </div>
         <div class="box">
             <img src="images/process-2.png" alt="">
             <h3>Pediatric dentistry</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
         </div>
         <div class="box">
             <img src="images/process-3.png" alt="">
             <h3>Cosmetic dentistry</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
         </div>
     </div>


 </section>

<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>

   <div class="box-container">
       <div class="box">
           <img src="images/pic-1.png" alt="">
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, tenetur deleniti.
                Magni fugit labore saepe? tenetur minima cupiditate.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>statisfied client</span>
       </div>
       <div class="box">
           <img src="images/pic-2.png" alt="">
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, tenetur deleniti.
                Magni fugit labore saepe?  tenetur minima cupiditate.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>statisfied client</span>
       </div>
       <div class="box">
           <img src="images/pic-3.png" alt="">
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, tenetur deleniti.
                Magni fugit labore saepe?  tenetur minima cupiditate.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>statisfied client</span>
       </div>
   </div>

</section>

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>



<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>mumbai, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>shaikhanas@gmail.com</p>
         <p>anasbhai@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span>  </div>

</section>






<script src="js/script.js"></script>
</body>
</html>