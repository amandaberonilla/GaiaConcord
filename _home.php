<!-- A3: Question 5 -->
<!-- Amanda Beronilla (40228871) -->
<!-- SOEN 287 WEB PROGRAMMING -->
<!-- 22 July 2022 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - The Gaia Concord</title>
    <link rel="stylesheet" href="_style.css">
    <link rel="icon" href="favIcon.png">
  </head>

  <body>
    <div class="body">
      <!-- HEADER -->
      <?php include("-header.php") ?>
      <!-- SIDE MENU -->
      <div class="sideMenu">
        <p>Her Cornucopia</p>
        <a href="_home.php">Home</a>
        <a href="_browse.php">Browse Available Pets</a>
        <a href="_find.php">Find a Dog/Cat</a>
        <a href="_dog.php">Dog Care</a>
        <a href="_cat.php">Cat Care</a>
        <a href="_give.php">Have a pet to give away?</a>
        <a href="_contact.php">Contact Us</a>
      </div>
      <!-- CONTENT -->
      <div class="content">
        <p class="contentHeader">Welcome to The Gaia Concord</p>
        <img class="contentImageFloatRight" src="https://www.dogbible.com/i/en/italian-windpsiel.jpg" alt="Grey Italian greyhound standing in a sunny field">
        <p class="contentText">
          The Gaia Concord is a non-profit, charity-run adoption organisation surrounding the rehabilitation and rehoming of animals.
          The centre's main focus are dogs and cats, though The Gaia Concord also works with other animals, such as rodents, reptiles, and other creatures in need.
        </p>
        <!-- <p class="contentDivider">•••</p> -->
        <p class="contentText">
          Named after the goddess of the Earth, The Gaia Concord is devoted to maintaining the natural order and harmony found between human and non-human animals.
          The greyhound is used as a token of knightly and loyal virtues while maintaining a gentle, graceful, and elegant posture.
          This symbolism encapsulates the organisation's purpose, making this dog breed the perfect mascot for The Gaia Concord.
        </p>
        <!-- <p class="contentDivider">୨•୧</p> -->
        <p class="contentText">
          Feel free to <a href="_browse.php">browse through our available pets</a> that are currently up for adoption.
          If you are interested in adopting an animal with any specifications, you can <a href="_find.php">submit a form</a>.
          The Gaia Concord also <a href="_give.php">accepts animals for rehabilitation and rehoming</a>.
        </p>
      </div>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
      <script src="_script.js"></script>
    </div>
  </body>
</html>
