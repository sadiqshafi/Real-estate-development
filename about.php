<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>Why choose us?</h3>
         <p>With years of experience in real estate, we provide expert guidance to help you make informed decisions. Our diverse portfolio includes everything from luxury apartments to commercial spaces, all in prime locations. We ensure transparent deals with no hidden costs, focusing on your unique needs and offering tailored solutions. From property search to post-sale support, we are committed to delivering exceptional service every step of the way.</p>
         <a href="contact.php" class="inline-btn">Contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 Simple Steps</h1>

   <div class="box-container">

   <div class="box">
   <img src="images/step-1.png" alt="">
   <h3>Search Property</h3>
   <p>Browse through our extensive listings of homes, apartments, and commercial properties to find your perfect match.</p>
</div>

<div class="box">
   <img src="images/step-2.png" alt="">
   <h3>Contact Agents</h3>
   <p>Connect with our experienced real estate agents who will guide you through the entire buying or renting process.</p>
</div>

<div class="box">
   <img src="images/step-3.png" alt="">
   <h3>Enjoy Property</h3>
   <p>Move into your new property with confidence, knowing you've made the right choice for your lifestyle and needs.</p>
</div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading"><i class="fas fa-star"></i> Client's Reviews <i class="fas fa-star"></i></h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/anvir.png" alt="">
            <div>
               <h3>Sayem Sobhan Anvir</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><b>Managing director of Bashundhara Group</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/frahman.png" alt="">
            <div>
               <h3>Salman F. Rahman</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            </div>
         <p><b>Former member of the Jatiya Sangsad</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/nurul.png" alt="">
            <div>
               <h3>Nurul Islam Babu</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
            </div>
         <p><b>Founder and Chairman of Jamuna Group</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/fazlur.png" alt="">
            <div>
               <h3>Fazlur Rahman</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            </div>
         <p><b>Managing director of City Group</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/yunus.png" alt="">
            <div>
               <h3>Dr. Yunus</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
            </div>
         <p><b>Founder of Grameen</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/rouf.png" alt="">
            <div>
               <h3>Rouf Chowdhury</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            </div>
         <p><b>Chairman of Rangs Group</b> <br> Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>