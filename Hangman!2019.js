// This word bank is the master word list that will be used as an key.

//   let words = [
//   "code",
//   "Alpha",
//   "Master",
//   "Python",
//   "Ruby",
//   "Tango"
// ];

// let answerArray3 = [
//   "code",
//   "Alpha",
//   "Master",
// ]
//This section of code is for my logic for Hangman!2019.
//This section also can be overwriten to change functions.
// let alphabet = ("a", "b","c","d","e","f","g","h","i","j",
// "k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
// let answerKey = words;
// let letters = [alphabet];
// let wrongLetters = [("z","w","q","k","i")];
// let counter = [8];
// let lives = 13;
// const newLocal = words[Math.random() * words.length];
// let btn = document.createElement("BUTTON");

// function myFunction() {
//   let btn = document.createElement("BUTTON");
//   // let t = document.createTextNode("a");
//  let answerArray2 = [];
// for (let i = 0; i < words.lenght; i++){
// answerArray[i] = ("_");
// }
// let remainingLetters = words.length;

// }

// alert(answerArray3.join("Welcome"));
// // alert("Well Done! The answer was" + words);
// //This section is my Answer Array.
// let answerArray = [1];
// for (let i = 0; i < words.length; i++){
//   answerArray[i] = ["_", "_", "_", "_", "_", "_"];
// let remainingLetters = words.length

// let guess = prompt("Guess a letter playa or click Cancel to stop playing.");
// if (guess === null) {
//   // return; Note, at this point a break or return needs to be added to this section.
// } else if (guess.length !== 1) {
//   alert("Please enter a single letter.");
// } else {
//   // Game state will be updated when the player enters a guess.
// }
// for (let j = 1; j < words.lenght; j++){
//   if (words[j] === guess) {
//     awserArray[j],[i] = guess;
//     remainingLetters--;
//   }
// }

// }
// console.log("Alpha, code, Master");(Math.random([-2]) * words.length);
// //This section is to test the numerical value assigned to the 'words' bank.
// console.log(words[1]);(Math.random)
// console.log(words[Math.floor(Math.random()*0)]);
// console.log(words)

let words = [
  "code",
  "Alpha",
  "Master",
  "Python",
  "Ruby",
  "Tango"
];

function successScenario(correctAnswerArray, chosenWord)
      {
        alert(correctAnswerArray.join(''));
        alert("You got it Bro! The answer is " + chosenWord);
      }
function chooseRandomWord(wordsArray)
      {
return wordsArray[Math.floor(Math.random() * wordsArray.length)];
      }

function checkLetter(arrayOfCorrectLettersInOrder, chosenWord, playerGuess)
      {
for (let j = 0; j < chosenWord.length; j++)
{
  if (chosenWord[j] === playerGuess)
{ arrayOfCorrectLettersInOrder[j] = playerGuess;
   remainingLetters--;
 }
     }
      }

      function createAnswerArray(chosenWord)
      {
        let arr = []

        for (let i = 0; i < chosenWord.length; i++)
        {
          arr[i] = "_";
        }

        return arr;
      }

      function gameLogic(correctAnswerArray, playerGuess, chosenWord)
      {
        if (playerGuess === null)
        {
          return;
        }
        else if (playerGuess.length !== 1)
        {
          prompt('Dude enter a letter');
        }
        else
        {
          checkLetter(correctAnswerArray, chosenWord, playerGuess);
        }
      }

      let word = chooseRandomWord(words)
      let answerArray = createAnswerArray(word);
      let remainingLetters = word.length;
 
      if (window.confirm('Welcome to Hangman!2019! Are you ready to play?'))
      {
     while (remainingLetters > 0)
{
prompt(answerArray.join(' '));
          let guess = prompt("Guess a letter Bro or Sis, or click Cancel to stop playing");
          gameLogic(answerArray, guess, word)
        }
        successScenario(answerArray, word);
      }