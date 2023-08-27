<!-- A4: Question 3 -->
<!-- Amanda Beronilla (40228871) -->
<!-- SOEN 287 WEB PROGRAMMING -->
<!-- 22 August 2022 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find a Dog/Cat - The Gaia Concord</title>
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
      <div class="content" id="findForm">
        <p class="contentHeader">The Hunt</p>
        <img class="contentImageFloatRight" src="findImage.jpg" alt="Dog and cat rolling in grass">
        <form action="">
          <!-- QUESTION 1 -->
          <label class="contentText">Are you looking to adopt a dog or a cat?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="findPetDog" name="findPet" value="dog" required>
          <label for="findPetDog">Dog</label>
          <br>
          <input type="radio" class="contentText" id="findPetCat" name="findPet" value="cat">
          <label for="findPetCat">Cat</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 2 -->
          <label class="contentText">Do you have a preference for breed?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="findBreedInput" name="findBreed" value="input" onclick="findEmpty()" required>
          <label for="findBreedInput">Please specify: </label><input type="text" id="findBreedText">
          <br>
          <input type="radio" class="contentText" id="findBreedNone" name="findBreed" value="none" onclick="findEmpty()">
          <label for="findBreedNone">No preference</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 3 -->
          <label class="contentText">Do you have a preference for age?</label>
          <br>
          <br>
          <select id="findAge" name="findAge" class="formDropdown" required>
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
          <label class="contentText">Do you have a preference for gender?</label>
          <br>
          <br>
          <input type="radio" class="contentText" id="findGenderMale" name="findGender" value="male" required>
          <label for="findGenderMale">Male</label>
          <br>
          <input type="radio" class="contentText" id="findGenderFemale" name="findGender" value="female">
          <label for="findGenderFemale">Female</label>
          <br>
          <input type="radio" class="contentText" id="findGenderNone" name="findGender" value="none">
          <label for="findGenderNone">No preference</label>
          <br>
          <br>
          <br>
          <!-- QUESTION 5 -->
          <label class="contentText">Are there any specific requirements for your pet?</label>
          <br>
          <br>
          <input type="checkbox" class="contentText" id="findRequirementDogs" name="findRequirement" value="dogs">
          <label for="findRequirementDogs">Dog-friendly</label>
          <br>
          <input type="checkbox" class="contentText" id="findRequirementCats" name="findRequirement" value="cats">
          <label for="findRequirementCats">Cat-friendly</label>
          <br>
          <input type="checkbox" class="contentText" id="findRequirementChildren" name="findRequirement" value="children">
          <label for="findRequirementChildren">Children-friendly</label>
          <br>
          <br>
          <br>
          <!-- BUTTONS -->
          <button type="submit" id="findSubmit" name="submit">Submit</button>
          <button type="reset" id="findReset" name="reset">Reset</button>
        </form>
      </div>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
      <script src="_script.js"></script>
    </div>
  </body>
</html>
