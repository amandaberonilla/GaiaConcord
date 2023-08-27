<!-- A3: Question 5 -->
<!-- Amanda Beronilla (40228871) -->
<!-- SOEN 287 WEB PROGRAMMING -->
<!-- 22 July 2022 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dog Care - The Gaia Concord</title>
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
        <p class="contentHeader">Parenting A Dog</p>
        <img class="contentImageFloatRight" src="dogImage.jpg" alt="Golden retriever basking in the sun">
        <p class="contentText">
          Thinking of adopting a dog?
          Here are some tips and tricks to raising them well.
        </p>
        <ul class="contentList">
          <li>Research on breed-specific diseases and illnesses to help prevent your dog from getting them.</li>
          <li>Maintain a good routine that fits your dog's own internal schedule.</li>
          <li>Make sure to properly socialise them with both humans and other animals so they don't build aggressive traits.</li>
          <li>Keep their vaccinations and treatments up to date.</li>
          <li>If applicable, spay and neuter them.</li>
          <li>Register your dog and attach an ID on their collar.</li>
          <li>For puppies, buy chew toys to avoid them chewing on home items.</li>
          <li>For seniors, try to make your house as accessible as possible.</li>
        </ul>
      </div>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
    <script src="_script.js"></script>
  </body>
</html>
