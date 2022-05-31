<?php include('./admin/config.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/e87e9beb1c.js" crossorigin="anonymous"></script>
    <title>St patrick Catholic Church</title>
  </head>
  <body>

  <style>
    

  </style>
    <!-- header starts -->
    <header id="header">
      <nav>
        <div class="logo">
          <span class="logo"> St patrick </span>
        </div>
        <ul>
          <li>
            <a href="#main">Home</a>
          </li>
          <li><a href="#about">About</a></li>

          <li><a href="#events-section">Events</a></li>
          <li><a href="#media">Media</a></li>
          <li><a href="#contact">Contact us</a></li>
          <li><a href="./admin">Admin</a></li>
          <li>
<?php
          if(memberLoggedIn()){
         echo '<a href="./logout.php?logout=`1`">Logout</a>';
          }
?>
</li>
<li style="background: #111;border-radius: 9px;margin-right: 4px;color: #fff;padding:2px 3px;text-align: center;">
          <?php
          if(memberLoggedIn()){
            echo $_SESSION['member']['member_name'];
          }else{
            echo '<a href="./Login.php">Register/Login</a>';
          }
          ?>
</li>



        </ul>
      </nav>
    </header>
    <!-- header ends -->

    <!-- showcase begins -->
    <section class="showcase">
      <div class="showcase-content">
        <span>
          <h1>
            Welcome to St.Patrick Catholic Church where every life matters!
          </h1>
          <p>
          Matthew 19:14, Jesus said, "Let the little children come to me, and do not hinder them."
  
          </p>
        </span>
        <div class="btns">
       
        <span>
          <button class="pay-btn"><a href="./payment.php">Payments</a></button>
        </span>
        </div>
        
      
      </div>
    </section>

    <!-- showcase ends -->
    <section class="about" id="about">
      <h2>About us</h2>
      <div class="about-content">
        <div class="about-intro">
          About st patrick catholic Church
          
 St. Patrick Catholic Church was founded in 1950, St. Patrick Catholic is a church located in Thika, Kiambu. 
          It is located next to Thika level 5 hospital which is at General Kago Road. 
          It is one of the oldest buildings to have been built in Thika which traces back to the colonial era where it is believed to have been built during those times.
          It’s a big church which can hold a maximum of 1500 people in one single mass but the numbers have changed because during this hard time of the pandemic, not more than 400 people can attend the church so as to observe the government’s guideline of social distance of 1.5 meter away from each other. 
          The adults attend the normal church while the children go to a Sunday school which is just around the church. 
          The Sunday school teachers are selected by the women organization called (CWA) Catholic Women’s Association.

        </div>
        
      </div>
    </section>

    <!-- events section -->
    <section id="events-section" class="grid">
      <h2>Upcoming Events</h2>
      <div class="events">
      <?php $events = get_events(); ?>
    <?php foreach ($events as $event) : ?>
      <?php
  $file = $event['name'];
  $image_src = "./admin/images/" . $file;
  ?>
        <div class="card">
          <img src="<?php echo $image_src ?>" alt="" />
          <div style="display: flex;flex-direction:column;align-items: center;justify-content: center;">
         <span>Event name: <?php echo $event['event_name'] ?></span>
         <span>Event location: <?php echo $event['event_location'] ?></span>
         <span>Date: <?php echo $event['event_date'] ?></span>
    </div>
          <div style="word-wrap: break-word;">
          <?php echo $event['info'] ?>
    </div>
        </div>
      <?php endforeach ?>
      </div>
    </section>


   

    <!-- gallery section starts -->

    <section class="gallery" id="media">
      <h1>Church gallery</h1>
      <div class="images-wrap">
      <?php $images = get_images(); ?>
      <?php foreach ($images as $image) : ?>
      <?php
  $file = $image['name'];
  $image_src = "./admin/images/" . $file;
  ?>
        <div class="image">
        <img alt="" src="<?php echo $image_src ?>" />
        </div>
        <?php endforeach ?>
      </div>
    </section>

        <!-- organizations starts -->

<section class="organization">
  <h3>Church organizations</h3>
  <div class="box">
    <div class="box-logo">
      <img src="./images/cwa.jpg" alt="">
    </div>
    <div class="box-info">
    <h4>CATHOLIC WOMEN ASSOCIATION(CWA)</h4>
    CWA is an association of Catholic lay Women mandated to empower Catholic Women Spiritually, Morally, socially and economically for the purpose of 
      evangelizing families and society at large

    </div>
  </div>
  <div class="box">
    <div class="box-logo">
      <img src="./images/cma.png" alt="">
    </div>
    <div class="box-info">
      <h4>CATHOLIC MEN ASSOCIATION(CMA)</h4>
      CMA is an association that brings Catholic Men together. CMA promotes Catholic Faith and religious life among members that strengthens the Catholic Church.


    </div>
  </div>
  <div class="box">
    <div class="box-logo">
      <img src="./images/pmc.png" alt="">
    </div>
    <div class="box-info">
    <h4>PONTIFICAL MISSIONARY CHILDHOOD(PMC)</h4>
    PMC is a wonderful and intimate following of christ who is our friend. It is a society created by the Holy Father Pope. 
    This group encourages children about the Catholic faith.

      
    </div>
  </div>
</section>

<!-- staff starts -->

<div class="staff-section">
  <h1>Leaders and staffs</h1>
  <div class="inner-staff">
    <?php $staffs = get_staffs(); ?>
    <?php foreach ($staffs as $staff) : ?>
      <?php
  $file = $staff['name'];
  $image_src = "./admin/images/" . $file;
  ?>
    <div class="staff-box">
      <div class="staff-image">
        <img src=<?php echo $image_src ?> alt="image">
      </div>
      <div class="staff-info">
        <h4><?php echo $staff['staff_name'] ?> - <?php echo $staff['category'] ?></h4>
        <div class="text">
        <?php echo $staff['info'] ?>
        </div>
      </div>
    </div>
   <?php endforeach; ?>
  </div>
</div>


 <!-- contact us -->
 <div class="contact-title" style="text-align: center">
     <h1>Contact us</h1>
    </div>

    <section class="contact" id="contact">
<div class="address">
  <span>
    <i class="fas fa-user">Church:</i> st patrick church
  </span>
<span>
<i class="fas fa-map-marker-alt">Address:</i> 012323 Nairobi
</span>
<span>
  <i class="fas fa-envelope">Email:</i> stparick@gmail.com
</span>

</div>

<div class="form">
  <form action="index.php" method="post">
  <?php echo display_error(); ?>
  <div class="alert-success">
  <?php echo display_success(); ?>
  </div>
  
    <label for="email">Email</label>
    <input type="email" name="email" id="" placeholder="Email address">
    <label for="name">Name</label>
    <input type="text"  name="first_name" id="" placeholder="Your Name">
    <label for="number">Phone number</label>
    <input type="text" name="number" id="" placeholder="Phone number">
    <label for="message">Message</label>
    <textarea  id="" placeholder="Message" name="details"></textarea>
    <button type="submit" value="Send" class="btn" name="send_message">send</button>
  </form>
</div>
    </section>

    

    <!-- footer starts -->
    <section class="footer">
      <footer>
        <p>All rights reserved. &copy; .2022 St patrick catholic church</p>
      </footer>
    </section>


  </body>
</html>
