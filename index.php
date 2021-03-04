<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
</head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
<body>
<section class="intro">
    <div class="introDiv">
        <h1>BRANDON NG</h1>
        <hr><br><br>
        <p>
            Web Developer <br>
            Pace University Graduate Student <br>
            Software Development and Engineering Major <br>
            Graduated August 2020
        </p><br><br>
        <a class="btnLink" href="#about">Learn More</a>
    </div>
</section>
<section class="about" id="about">

    <div class="aboutDiv">
        <h1>ABOUT</h1>
        <hr>  
        <p>
            My name is Brandon Ng, a web developer in Brooklyn, NY who graduated from Pace University with a Master Degree in Software Engineering. A Passionate developer who seeks to develop responsive native website using Angular, JavaScript, HTML, CSS and more. I always enjoyed using JavaScript over most programming language and started adapting more JS techniques after creating the discord bot for my gaming community.
        </p>
    </div>
    <div class="innerAboutDiv">
        <button class="button" type="button" id="button1" onclick="onClickButton('button1')">
            Technologies
        </button>
        <button class="button" type="button" id="button2" onclick="onClickButton('button2')">
            Tools and Platforms
        </button>
        <button class="button" type="button" id="button3" onclick="onClickButton('button3')">
            Classes
        </button>
        <button class="button" type="button" id="button4" onclick="onClickButton('button4')">
            Hobbies
        </button>
        <div class="innerAboutText">
          <ul id="innerAboutList"></ul>
        </div>
      </div>
</section>
<section class="projects" id="projects">
    <div class="projHeader"> 
        <h1>PROJECTS</h1>
        <p>
            <b>Hover over the project image to view the title, languages used, description, and links of the project.</b>
            <br>The live view link will let you view the website or the application.
            <br>The github repository link will link you to github with the code to produce the project. <br><i> Note: Not all projects will have either link.</i>
        </p>
    </div>
    <div class="projectPanels"> 
        <img src="assets/homepage.jpg" alt="Portfolio" class="img">
        <div class="textBoxOutline">
        <div class="textBox">
            <h1>My Webpage Portfolio</h1>
            <p class="tech">HTML, CSS, JavaScript, PHP</p>
            <p class="pLinks">
            <a href="https://v1.ngbrandon.com">Version 1</a> - No PHP <br>
            <a href="https://v2.ngbrandon.com">Version 2</a> - No PHP - 
            <a href="https://v3.ngbrandon.com">Version 2</a> - Minimal PHP - Current Page <br>Current Page <br>
            Version 3 - PHP - In-Progress
            </p>
        </div>
        </div>
    </div>
    <div class="projectPanels"> 
        <img src="assets/login.png" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
        <div class="textBox">
            <h1>My Login System</h1>
            <p class="pLinks"><a href="http://www.loginsystem.ngbrandon.com/">View Project</a></p>
            <p class="tech">HTML, CSS, JavaScript, PHP, MYSQL, </p>
            <p class="projDes">
                A basic login system I created in where you can sign up and create an account, write some details about your self in the about me section of your account profile and add a picture to your account profile and delete the photo. Also able to reset your password via link from your email. Home page of this subdomain will have more details if further features are included. 
            </p>
        </div>
        </div>
    </div>
    <div class="projectPanels"> 
        <img src="assets/placeHolder.jpg" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
        <div class="textBox">
            <h1>My Blog</h1>
            <p class="pLinks"><a href="http://www.v3.ngbrandon.com/blog">View Project</a></p>
            <p class="tech">HTML, CSS, JavaScript, PHP, MYSQL</p>
            <p class="projDes">
                This is a mini blog, that I created as to test out how to use php to connect to mysql database. It will not be fully created functional blog where it will be updated on a daily, weekly or even monthly basis. However it will be constantly updated with changes that are necessary and features that I will implement in the future.
            </p>
        </div>
        </div>
    </div>
    <div class="projectPanels"> 
        <img src="assets/bridgetRiley.jpg" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Bridget Riley Image Replication with Devicemotion</h1>
                <p class="tech">HTML CSS Angular JavaScript Devicemotion</p>
                <p class="pLinks"><a href="https://bridgetrileyv3.ngbrandon.com">View Project</a>
                <p class="projDes">
                   An replication of an image created by the artist Bridget Riley. To use devicemotion, click on the request permission button. Recommended to used when viewing on an IPhone or Android phone that allows devicemotion. Background color will change upon reload of page. Tab 3 is a Three.JS object.
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels"> 
        <img src="assets/ultracorp.png" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Ultra Corporation</h1>
                <p class="tech">HTML & CSS</p>
                <p class="pLinks"><a href="https://ultracorp.ngbrandon.com/">View Project</a><br>
                <a href="https://github.com/ngbrandon1994/Ultra-Coorporation">GitHub Repository</a></p>
                <p class="projDes">
                    An mock-up company, E-commerce website, created to display mock-up products. A responsive website using just html and css and sell any products on the website for the company. 
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels"> 
        <img src="assets/rickandmorty.jpg" alt="Rick and Morty Characters Database" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Rick and Morty Characters Database</h1>
                <p class="tech">Angular & Ionic Framework</p>
                <p class="pLinks"><a href="http://rickandmortydb.ngbrandon.com/">View Project</a><br>
                <a href="https://github.com/ngbrandon1994/ricknmorty-db">GitHub Repository</a></p>
                <p class="projDes">
                    An simple API call to retrieve data and print the data acquired.
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/hikingtrails.jpg" alt="Hiking Trail Android App" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Hiking Trail Android App</h1>
                <p class="tech">Angular & Ionic Framework (android cordova platform)</p>
                <p class="pLinks"><a href="https://github.com/ngbrandon1994/hiking-trail-app">GitHub Repository</a></p>
                <p class="projDes">              
                    An Android Only Application that is used to generate hiking trails spot based off your current location and experience level. Currently unavailable to download. Please note APIs keys are removed from repository.
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/astronomy.jpg" alt="Astronomy" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Astronomy Quiz Website</h1>
                <p class="tech">HTML & CSS</p>
                <p class="pLinks"><a href="http://www.astronomy.ngbrandon.com">View Project</a><br>
                <a href="https://github.com/ngbrandon1994/astronomy-website">GitHub Repository (No Assets files)</a></p>
                <p class="projDes">
                    A very basic website created as a STEM Learning website to teach kids about our solar system. The website contains video quizzes, css animation and button based quizzes.
                </p>
                <p style="color: #FF0000"> <b>WARNING:</b> This website contain background music upon visiting the website.</p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/discordIcon.svg" alt="Discord Bot" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Discord Bot</h1>
                <p class="tech">Discord.js, Node.js, JavaScript</p>
                <p class="pLinks"><a href="https://github.com/ngbrandon1994/heroku-bot">GitHub Repository</a> </p>
                <p class="projDes">
                   This bot was created using JavaScript and Node.js. It is hosted on heroku server to run live for 23 days a month. This bot is a duplicate and a backup of my main bot for my personal server. Certain commands and features are missing as I do not want to revealing sensible commands or data. Invite Link to my discord is currently unavailable. 
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/reverse.jpg" alt="Reverse" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Reverse Pictionary</h1>
                <p class="tech">Java, Android Studio</p>
                <p class="pLinks">Private GitHub Repository</a> </p>
                <p class="projDes">
                    The application lets the user pick one of the two games to play, in which one lets the user say a word with the right pronunciation, listed in the word bank and will show the picture of the word. The other game is a picture of a word listed from the word bank is shown and the user must correctly pronounce the word that matches the picture correctly in order to proceed.
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/sushigo.jpg" alt="Sushi Go" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>Two Player Sushi Go Game</h1>
                <p class="tech">Java, Console Commands</p>
                <p class="pLinks">Private GitHub Repository</a> </p>
                <p class="projDes">
                    A two player game of one of my favorite card games, Sushi Go. It was a two man project with my friend Mohammed Sujoon. We had an intention of making it into a website as a project showcase for up to 5 player to play as the game intended. The full featured game would of been an password protected website to be used among friends and family only.
                </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/planesArtOnline.jpg" alt="Reverse" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
            <h1>Planes Art Online</h1>
            <p class="tech">C#, Unity</p>
            <p class="pLinks"><a href="https://github.com/ngbrandon1994/Planes-Art-Online">GitHub Repository</a> </p>
            <p class="projDes">
                Playing a game of planes vs an AI in unity. An one screen, one vs one against the AI. Space bar to shoot and arrows key to move. 
            </p>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/placeHolder.jpg" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>COMING SOON...</h1>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/placeHolder.jpg" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>COMING SOON...</h1>
            </div>
        </div>
    </div>
    <div class="projectPanels">  
        <img src="assets/placeHolder.jpg" alt="PlaceHolder" class="img">
        <div class="textBoxOutline">
            <div class="textBox">
                <h1>COMING SOON...</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <div>
        <h1>CONTACT</h1>
        <p>My inbox is always open. I am currently not looking for freelance opportunities, but whether it is a potential project or to just say hi, I will try my best to respond back to in a timely fashion!</p>
        Email: <a href="mailto:me@ngbrandon.com">me@ngbrandon.com</a>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
<script src="function.js"></script>
</body>
</html>