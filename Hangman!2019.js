// My Array of words. This will create a word bank.
let words = [
  "Pig",
  "monkey",
  "amazing",
  "pancake",
  "galvainze",
  "Tango",
  "concatenate",
  "iteration",
  "index",
  "code",
  "Alpha",
  "Master",
  "python"
];
const newLocal = words[Math.random() * words.length];

console.log("Dog, fish, cat");(Math.random() * words.length);
console.log(words[0]);(Math.random)
console.log(words[Math.floor(Math.random()*13)]);


// // This is  the amswer answerArrayvar answerArray = [];
// for (let i = 0; i < word.length; i++) {
//   answerArray[i] = "";
// }

// let remainingLetters = word.length;

// // This section is a  game loop

// while (remainingLetters > 0) {
//   // Show player progress alert(answerArray.join(" "));

//   // Get a guess from the player

//   let guess = prompt("Guess a letter, or click Cancel to stop playing.");
//   if (guess === null) {
//     // Exit the game loop
//     break;
//   } else if (guess.length !== 1) {
//     alert("Please enter a single letter dude.");
//   } else {
//     // Update the game state with the guess

//     for (let j = 0; j < word.length; j++) {
//       if (word[j] === guess) {
//         answerArray[j] = guess;
//         remainingLetters--;
//       }
//     }
//   }

//   // The end of the game loop
// }

// // Show the answer and you did it!

// alert(answerArray.join(" "));
// alert("Good job! The answer was " + word);

// // A list of the funtions used.

// let word = pickWord();
// let answerArray = setupAnswerArray(word);
// let remainingLetters = word.length;
// let pickWord = function () {
//   // Return a random word
// };

// let setupAnswerArray = function (word) {
//   // Return the answer array
// };

// let showPlayerProgress = functin(answerArray); {
//   //Use alert to show the player their progress
// };

// let getGuess = function () {
//   // Use prompt to get a guess
// };

// let updateGameState = function (guess, word, answerArray) {
//   // Update answerArray and return a number showing how many times the guess appears in the word so remainingLetters can be updated
// };

// let showAnswerAndCongratulatePlayer = function (answerArray) {
//   // Use alert to show the answer and tell the player well done.
// };
// while (remainingLetters > 0) {
//   showPlayerProgress(answerArray);
//   let guess = getGuess();
//   if (guess === null) {
//     break;
//   } else if (guess.length !== 1) {
//     alert("Please enter a single letter.");
//   } else {
//     let correctGuesses = updateGameState(guess, word, answerArray);
//     remainingLetters -= correctGuesses;
//   }
// }

// showAnswerAndCongratulatePlayer(answerArray);




