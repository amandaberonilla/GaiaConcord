<!-- A3: Question 5 -->
<!-- Amanda Beronilla (40228871) -->
<!-- SOEN 287 WEB PROGRAMMING -->
<!-- 22 July 2022 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Have a pet to give away? - The Gaia Concord</title>
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
      <div class="content" id="giveForm">
        <p class="contentHeader">Relinquishing An Animal</p>
        <img class="contentImageFloatRight" src="giveImage.jpg" alt="Guinea pig sitting beside a dandelion">
        <form action="">
          <!-- QUESTION 1 -->
          <label class="contentText">Is the animal a dog or a cat?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="givePetDog" name="givePet" value="dog" required>
          <label for="givePetDog">Dog</label>
          <br>
          <input type="radio" class="contentText" id="givePetCat" name="givePet" value="cat">
          <label for="givePetCat">Cat</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 2 -->
          <label class="contentText">What breed are they?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="giveBreedInput" name="giveBreed" value="input" onclick="giveEmpty();" required>
          <label for="giveBreedInput">Please specify: </label><input type="text" id="giveBreedText">
          <br>
          <input type="radio" class="contentText" id="giveBreedMix" name="giveBreed" value="mix" onclick="giveEmpty();">
          <label for="giveBreedMix">Mix breed</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 3 -->
          <label class="contentText">What is their age range?</label>
          <br>
          <br>
          <select name="giveAge" class="formDropdown" required>
            <option value="" selected hidden disabled>Select here.</option>
            <option value="0to3">0 to 3 years</option>
            <option value="4to7">4 to 7 years</option>
            <option value="8to11">8 to 11 years</option>
            <option value="12to15">12 to 15 years</option>
            <option value="16plus">16 years and higher</option>
          </select>
          <br>
          <br>
          <br>
          <!-- QUESTION 4 -->
          <label class="contentText">What gender are they?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="giveGenderMale" name="giveGender" value="male" required>
          <label for="giveGenderMale">Male</label>
          <br>
          <input type="radio" class="contentText" id="giveGenderFemale" name="giveGender" value="female">
          <label for="giveGenderFemale">Female</label>
          <br>
          <input type="radio" class="contentText" id="giveGenderNone" name="giveGender" value="none">
          <label for="giveGenderNone">No preference</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 5 -->
          <label class="contentText">Do they fit any of the following characteristics?</label>
          <br>
          <br>
          <input type="checkbox" class="contentText" id="giveCharacteristicDogs" name="giveCharacteristic" value="dogs">
          <label for="giveCharacteristicDogs">Dog-friendly</label>
          <br>
          <input type="checkbox" class="contentText" id="giveCharacteristicCats" name="giveCharacteristic" value="cats">
          <label for="giveCharacteristicCats">Cat-friendly</label>
          <br>
          <input type="checkbox" class="contentText" id="giveCharacteristicChildren" name="giveCharacteristic" value="children">
          <label for="giveCharacteristicChildren">Children-friendly</label>
          <br>
          <br>
          <br>
          <!-- COMMENT AREA -->
          <label class="contentText">Is there anything of which The Gaia Concord should be made aware?</label>
          <br>
          <br>
          <input class="formTextInput" type="text" placeholder="If yes, type here.">
          <br>
          <br>
          <br>
          <!-- INFORMATION -->
          <label class="contentText">Kindly provide your name and email address below.</label>
          <br>
          <br>
          <label class="contentText contentTextSmall">Name: </label><input type="text" id="giveName" required>
          <br>
          <label class="contentText contentTextSmall">Email: </label><input type="email" id="giveEmail" required>
          <br>
          <br>
          <br>
          <!-- BUTTONS -->
          <button type="submit" id="giveSubmit" name="submit">Submit</button>
          <button type="reset" id="giveReset" name="reset">Reset</button>
        </form>
      </div>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
      <script src="_script.js"></script>
    </div>
  </body>
</html>
