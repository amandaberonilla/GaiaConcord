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
      <div class="content" id="citationsPage">
        <p class="contentHeader">Sources & Citations</p>
        <!-- ROW 1 -->
        <div class="contentImageRow">
          <div class="contentImageCaptioned1 contentImageCaptioned">
            <a href="https://www.dogbible.com/en/breeds/italian-greyhound ">
              <img class="contentImageProfile" src="https://www.dogbible.com/_ipx/fit_cover,s_330x330/cms/i/en/italian-windhound.png" alt="Brown Italian greyhound looking directly at the camera">
              dogbible
            </a>
          </div>
          <div class="contentImageCaptioned2 contentImageCaptioned">
            <a href="https://www.dogbible.com/i/en/italian-windpsiel.jpg">
              <img class="contentImageProfile" src="https://www.dogbible.com/i/en/italian-windpsiel.jpg" alt="Grey Italian greyhound standing in a sunny field">
              dogbible
            </a>
          </div>
          <div class="contentImageCaptioned3 contentImageCaptioned">
            <a href="https://www.allthingsdogs.com/red-golden-retriever/">
              <img class="contentImageProfile" src="dogImage.jpg" alt="Golden retriever basking in the sun">
              All Things Dogs
            </a>
          </div>
          <div class="contentImageCaptioned4 contentImageCaptioned">
            <a href="https://petkeen.com/fluffy-cat-breeds/">
              <img class="contentImageProfile" src="catImage.webp" alt="Grey cat looking into the distance">
              Pet Keen
            </a>
          </div>
        </div>
        <!-- ROW 2 -->
        <div class="contentImageRow">
          <div class="contentImageCaptioned1 contentImageCaptioned">
            <a href="http://www.clipartbest.com/clipart-aTq6RnaBc">
              <img class="contentImageProfile" src="favIcon.png" alt="Brown paw print">
              ClipArt Best
            </a>
          </div>
          <div class="contentImageCaptioned2 contentImageCaptioned">
            <a href="https://www.vets4pets.com/pet-health-advice/small-pet-advice/spring-tips-for-small-furries/">
              <img class="contentImageProfile" src="giveImage.jpg" alt="Guinea pig sitting beside a dandelion">
              Vets4Pets
            </a>
          </div>
          <div class="contentImageCaptioned3 contentImageCaptioned">
            <a href="https://www.americanhumane.org/fact-sheet/introducing-dogs-to-cats/">
              <img class="contentImageProfile" src="findImage.jpg" alt="Dog and cat rolling in grass">
              Americane Humane
            </a>
          </div>
          <!-- <div class="contentImageCaptioned4 contentImageCaptioned">
            <a href="">
              <img class="contentImageProfile" src="" alt="">
              dog
            </a>
          </div> -->
          
        </div>
        <!-- ROW 3 -->
        <div class="contentImageRow">
          <div class="contentImageCaptioned1 contentImageCaptioned">
            <a href="https://www.hindustantimes.com/lifestyle/health/pet-care-how-to-protect-your-dog-from-parvovirus-symptoms-to-watch-out-for-101647089192862.html">
              <img class="contentImageProfile" src="browseDog1.webp" alt="Golden retriver sitting in a dog bowl">
              Hindustan Times
            </a>
          </div>
          <div class="contentImageCaptioned2 contentImageCaptioned">
            <a href="https://www.k9ofmine.com/pitbull-mixes/">
              <img class="contentImageProfile" src="browseDog2.jpg" alt="Pitbull resting their snout on a cushion">
              K9 of Mine
            </a>
          </div>
          <div class="contentImageCaptioned3 contentImageCaptioned">
            <a href="https://www.humanesociety.org/animals/cats">
              <img class="contentImageProfile" src="browseCat1.jpg" alt="Grey cat resting & looking into the camera">
              The Human Society of the United States
            </a>
          </div>
          <div class="contentImageCaptioned4 contentImageCaptioned">
            <a href="https://penntoday.upenn.edu/news/covid-cat-penn-vet-elizabeth-lennon">
              <img class="contentImageProfile" src="browseCat2.jpg" alt="Orange cat sleeping on an orange blanket">
              Penn Today
            </a>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
      <script src="_script.js"></script>
    </div>
  </body>
</html>
