<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Sabanal's Personal Website"; ?></title>
  <style>
    body {
      background-color: black; /* Changed background color to black */
      padding: 20px;
      margin: 0;
      text-align: left; 
      color: green; /* Changed text color to green */
    }
    h1 {font-family: Times New Roman;} 
    h2 {font-family: Verdana;} 
    h3 {font-family: Courier New;} 
    img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }
    ol {
      list-style-position: inside;
      padding: 0;
      text-align: center;
    }
    .flex-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
	 .flex-container2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
	  text-align: center;
    }
    .dropdown {
      position: relative;
      display: none; /* Removed the dropdown */
    }
    .hidden {
       display: none;
    }
  </style>
  <script>
    // JavaScript class for handling website functionality
    class PersonalWebsite {

      }

      toggleSections(sectionId) {
        const sections = document.querySelectorAll('.flex-container2');
        sections.forEach(section => {
          section.style.display = (section.id === sectionId) ? 'flex' : 'none';
        });

        const additionalContent = document.querySelectorAll('.hidden');
        additionalContent.forEach(content => {
          content.style.display = (sectionId === 'dog') ? 'block' : 'none';
        });
      }

      displayHobbies() {
        const hobbiesList = document.getElementById("hobbies-list");
        hobbiesList.innerHTML = "";

        this.hobbiesArray.forEach(hobby => {
          const listItem = document.createElement("li");
          listItem.innerHTML = `<strong>${hobby.name}</strong> <a href="${hobby.image}" target="_blank"><img src="${hobby.image}" alt="${hobby.name}"></a>`;
          hobbiesList.appendChild(listItem);
        });
      }


    }

    // Create an instance of the PersonalWebsite class
    const myWebsite = new PersonalWebsite();

    // Display a welcome message using BOM
    window.onload = function() {
      alert("Good Morning! Welcome to My Personal Website!");
    };
  </script>
</head>
<body>
  <!-- Introduction section -->
  <div class="flex-container2" id="introduction">
    <div>
      <h2> Good Afternoon, My name is <strong>Alexus Sabanal</strong>.</h2>
      <p>I am a 23-year-old BSCS SF Student of Asia Pacific College. And I fully intend on completing this class through any means necessary. That being said, I do have a few weaknesses such as the habit of spacing out all the time. But of course, I do the best that I can to supplement them.</p>
    <p> With one of them of course, Being my insecurity. So to supplement that. I have decided to hide my face. And make up for it instead by making some slight design changes to my personal website</p>
    </div>
  </div>

  <!-- Hobbies section -->
  <div class="flex-container2" id="hobbies">
    <div style="margin: 0 auto;"> <!-- Center the content within the div -->
      <h2>These are some of my current hobbies:</h2>
      <ol>
        <li><strong>Writing</strong><a href="https://ibb.co/Mf2W17k"><img src="https://i.ibb.co/8bKTx9g/images-2.jpg" alt="Writing"></a> </li>
        <li><strong>Gaming</strong><a href="https://ibb.co/hY885yC"><img src="https://i.ibb.co/1z22VLb/images.jpg" alt="Gaming"></a> </li>
        <li><strong>Walking around town</strong> <a href="https://ibb.co/mvMzH8k"><img src="https://i.ibb.co/JxMkzQV/images-1.jpg" alt="Walking"></a> </li>
        <li><strong>And many more rather risque ones that I cannot show here out of fear of being judged for them.</strong>
      </ol>
    </div>
  </div>

<!-- Top 10 Boss Themes in Videogames -->
<div class="flex-container2">
  <div style="margin: 0 auto; text-align: center;"> <!-- Center the content within the div -->
    <h2>And now to showcase one of my hobbies. Here is my list of my top 10 videogame boss themes:</h2>
    <ol>
      <li><a href="https://www.youtube.com/watch?v=5TI10ciEKX0">#1:"It Has To Be This Way" from Metal Gear Rising Revengeance</a></li>
      <li><a href="https://www.youtube.com/watch?v=fzqx7Dp3a8Y">#2:"Unwavering Belief" from Lost Judgement</a></li>
      <li><a href="https://www.youtube.com/watch?v=jtGH1HQKDT4">#3:"The End of Denial" from Like a Dragon: Infinite Wealth</a></li>
      <li><a href="https://www.youtube.com/watch?v=6nvelCV1wuE">#4:"The One Who Spins Samsara" from Asura's Wrath</a></li>
      <li><a href="https://www.youtube.com/watch?v=ci3gO75B3Yc">#5:"Birth Of A Wish" from Nier: Automata</a></li>
      <li><a href="https://www.youtube.com/watch?v=Q8dWUZ5xOHM">#6:"Bury The Light" from Devil May Cry V</a></li>
      <li><a href="https://www.youtube.com/watch?v=6hjyuQFhAsI">#7:"Carmeaty Burana" from Super Meat Boy</a></li>
      <li><a href="https://www.youtube.com/watch?v=9r3KK77vFgc">#8:"My Last Stand" from Tekken 8</a></li>
      <li><a href="https://www.youtube.com/watch?v=J9IwRWu70NQ">#9:"LAMIA" from Punishing: Gray Raven</a></li>
      <li><a href="https://www.youtube.com/watch?v=kfR0gUsNcds">#10:"wdlsm" from Arknights</a></li>
    </ol>
  </div>
</div>


  <!-- Dog section -->
  <div class="flex-container2" id="dog">
    <div>
      <h2>But of course at the end of the day, I am nothing more than a regular old human being who, like most, strives to leave a good mark in this world during my fleeting lifetime. Just as how my dog wishes to do so too with his rather strange antics.</h2>
      <a href="https://imgbb.com/"><img src="https://i.ibb.co/Cm33XB4/20230623-170243.jpg" alt="20230623-170243" border="0" width="400" height="400"></a>
      <h1>Regardless, That Would Be All. Thank You Very Much and have a nice day.</h1>

      <!-- Display the current date -->
      <?php
        $currentDate = date('l, F j, Y');
        echo "<p style='text-align: center;'>Current Date: $currentDate</p>";
      ?>

      <!-- Buttons for Facebook and LinkedIn. -->
      <div style="text-align: center; margin-top: 20px;">
        <a href="https://www.facebook.com/alexusnorsaid/" target="_blank"><button>Facebook</button></a>
        <a href="https://www.linkedin.com/in/alexus-sabanal-b15712194/" target="_blank"><button>LinkedIn</button></a>
      </div>


</body>
</html>
