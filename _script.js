// ### DATE & TIME
// taking all elements of class headerDateTime as variable dateTime
var dateTime = document.getElementsByClassName("headerDateTime");
// printing the current date & time at each instance of dateTime
function setDateTime() {
    var today = new Date();
    var date = today.toDateString();
    var time = today.toLocaleTimeString();
    for(var i = 0; i < dateTime.length; i++) dateTime[i].innerHTML = time + "<br>" + date;
}
// updating date & time every 25 ms
setInterval(setDateTime, 25);

// ### FIND A DOG/CAT
// taking animal breed as variables
var findBreedInput = document.getElementById("findBreedInput");
var findBreedText = document.getElementById("findBreedText");
var findBreedNone = document.getElementById("findBreedNone");
// alerting user of empty choices
function findEmpty() {
    cosole.log("hi");
    if(findBreedInput.checked) {
        findBreedText.required = true;
        // return;
    }
    if(findBreedNone.checked) {
        findBreedText.required = false;
        // return;
    }
}

// ### HAVE A PET TO GIVE AWAY
// taking animal breed as variables
var giveBreedInput = document.getElementById("giveBreedInput");
var giveBreedText = document.getElementById("giveBreedText");
var giveBreedMix = document.getElementById("giveBreedMix");
// alerting user of empty choices
function giveEmpty() {
    if(giveBreedInput.checked) {
        giveBreedText.required = true;
        return;
    }
    if(giveBreedMix.checked) {
        giveBreedText.required = false;
        return;
    }
}