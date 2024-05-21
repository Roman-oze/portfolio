
//   //touch text
//   var i = 0;

//   var txt ="I am a responsible individual who values connectivity for productivity. I believe in fostering confidence in others as a source of strength. Born in Brahmanbaria, raised and educated in Dhaka, I completed my HSC at Dhanmondi Ideal College. I pursued undergraduate studies in China and am now a student at Daffodil International University, majoring in ITM.This is my last semester. Thank you.";

//   var speed = 10;

//   function typeWriter() {
//     if (i < txt.length) {
//       document.getElementById("demo").innerHTML += txt.charAt(i);
//       i++;
//       setTimeout(typeWriter, speed);

//     }
//   }

//   //Non-stop typing
// document.addEventListener('DOMContentLoaded', function () {
//           var counters = document.querySelectorAll('.purecounter');
//           var speed = 10; // The speed of counting in milliseconds
//           var scrolled =false;

//           // Function to check if element is in viewport
//           function isInViewport(element) {
//               var rect = element.getBoundingClientRect();
//               return (
//                   rect.top >= 0 &&
//                   rect.left >= 0 &&
//                   rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//                   rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//               );
//           }

//           // Function to update counter
//           function updateCounter(counter) {
//               var start = parseInt(counter.getAttribute('data-purecounter-start'));
//               var end = parseInt(counter.getAttribute('data-purecounter-end'));
//               var duration = parseInt(counter.getAttribute('data-purecounter-duration'));
//               var range = end - start;
//               var current = start;
//               var increment = end > start ? 1 : -1;
//               var stepTime = Math.abs(Math.floor(duration / range));

//               function count() {
//                   counter.innerText = current;
//                   if (current !== end) {
//                       current += increment;
//                       setTimeout(count, stepTime);
//                   }
//               }

//               count();
//           }

//           // Function to handle scroll event
//           function handleScroll() {
//               if (!scrolled) {
//                   counters.forEach(function (counter) {
//                       if (isInViewport(counter)) {
//                           updateCounter(counter);
//                           scrolled = true;
//                       }
//                   });
//               }
//           }

//           // Add scroll event listener
//           window.addEventListener('scroll', handleScroll);
//       });
// // JavaScript to start typing effect after page load
// window.onload = function() {
//   // Get the text container
//   var textContainer = document.getElementById('typing-text');
//   // Get the text content
//   var text = textContainer.innerHTML;
//   // Clear the text content
//   textContainer.innerHTML = '';
//   // Define a function to simulate typing effect
//   function typeWriter(text, i) {
//     if (i < text.length) {
//       textContainer.innerHTML += text.charAt(i);
//       i++;
//       setTimeout(function() {
//         typeWriter(text, i);
//       }, 100); // Adjust typing speed here (in milliseconds)
//     }
//   }
//   // Start the typing effect
//   typeWriter(text, 0);
// };

