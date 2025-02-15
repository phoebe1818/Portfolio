<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+MX:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="nav-container">
        <ul>
            <li class="nav-text">
                <input type="checkbox" class="toggle-switch" id="dark-mode-toggle">
                <label for="dark-mode-toggle" class="toggle-label"></label>
                Phoebe Labanon
            </li>
            <li><a href="index.php" class="nav-link"><i class="fas fa-home"></i></a></li>
            <li><a href="projects.php" class="nav-link"><i class="fas fa-folder-open"></i></a></li>
            <li><a href="contact.php" class="nav-link"><i class="fas fa-envelope"></i></a></li>
    </ul>
        </ul>
    </nav>
    <main>
        <section class="content-container">
            <div class="text-container">
                <h1>UI/UX DESIGNER</h1>
                <h2>Hello, My Name <br> is Phoebe Kates</h2>
                <p>I'm a BSIT student at Cavite State University,<br> passionate about technology and always eager to learn.</p>
                <div class="buttons">
                    <button id="resume-button">Download CV</button>
                    <button id="email-button">Email</button>
                </div>
                 <div class="social-icons custom-social-icons">
                    <a href="https://www.facebook.com/phoebe.kates.750/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_iamphoebekates/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/yourgithubaccount" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="gallery-container">
                <div class="gallery">
                    <img src="Styles/pb6.png" alt="orange">
                    <img src="Styles/pb1.jpg" alt="orange">
                    <img src="Styles/newpb1.png" alt="orange">
                    <img src="Styles/newpb2.png" alt="orange">
                    <img src="Styles/pb4.png" alt="orange">
                    <img src="Styles/newpb.png" alt="orange">
                </div>
            </div>
        </section>

        <section class="about-me-container">
        <h2>About Me</h2>
        <h1>Better design,<br> better experience</h1>
        <div class="about-me-content">
            <div class="about-me-text">
                <p>I am passionate about designing websites and aspire to become a web developer.  With a background in customer service, <br> I excel at understanding client needs and delivering exceptional experiences.</p>
                <p>With a background in customer service, I excel at understanding client needs and delivering exceptional experiences.</p>
                <p>When I have free time, I manage to create some sort of websites in terms of my school works. And from that I have knowledge in CSS, HTML, JavaScript, and PHP.</p>
                <p>Combining my technical skills and customer-centric approach, I am committed to creating engaging and user-friendly web designs.</p>
            </div>
            <div class="skills-grid">
                <a href="https://www.w3schools.com/js/" class="skill-box">
                    <img src="Styles/java-script.png" alt="JavaScript Icon">
                    <p>JavaScript</p>
                </a>
                <a href="https://www.w3schools.com/css/" class="skill-box">
                    <img src="Styles/CSS.png" alt="CSS Icon">
                    <p>CSS</p>
                </a>
                <a href="https://www.w3schools.com/html/" class="skill-box">
                    <img src="Styles/html.png" alt="HTML Icon">
                    <p>HTML</p>
                </a>
                <a href="https://www.w3schools.com/php/" class="skill-box">
                    <img src="Styles/PHP.png" alt="PHP Icon">
                    <p>PHP</p>
                </a>
            </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container2">
    <h2>Let's talk about Me</h2>
    <p>My Personal Information</p>
    <div style="display: flex; justify-content: center;align-items: center;gap: 40px;margin-top: 60px;">
        <div class="card">
            <div class="apple">
                <div class="circle" style="background-color: rgb(245, 65, 65);"></div>
                <div class="circle" style="background-color: rgb(215, 225, 71);"></div>
                <div class="circle" style="background-color: rgb(46, 214, 27);"></div>
            </div>
            <i class="fa-solid fa-id-card"></i>
            <p class="identification">Identification</p>
            <div class="bullet">
                <p>○ Phoebe Kates ○</p>
                <p>○ I'm 23 years old ○</p>
                <p>○ Town and Country West Molino 3, Bacoor, Cavite ○</p>
                <p>○ BSIT Student ○</p>
            </div>
        </div>

        <div class="card">
            <div class="apple">
                <div class="circle" style="background-color: rgb(245, 65, 65);"></div>
                <div class="circle" style="background-color: rgb(215, 225, 71);"></div>
                <div class="circle" style="background-color: rgb(46, 214, 27);"></div>
            </div>
            <i class="fa-solid fa-briefcase"></i>
            <p class="career-goals">Career Goals</p>
            <div class="bullet">
                <p>○ Aspiring Web Designer ○</p>
                <p>○ Passionate about UI/UX Design ○</p>
                <p>○ Customer-centric approach ○</p>
                <p>○ Eager to learn and grow ○</p>
            </div>
        </div>

        <div class="card">
            <div class="apple">
                <div class="circle" style="background-color: rgb(245, 65, 65);"></div>
                <div class="circle" style="background-color: rgb(215, 225, 71);"></div>
                <div class="circle" style="background-color: rgb(46, 214, 27);"></div>
            </div>
            <i class="fa-solid fa-heart"></i>
            <p class="hobbies-interests">Hobbies & Interests</p>
            <div class="bullet">
                <p>○ Reading thrillers, horror, and fantasy ○</p>
                <p>○ Creating websites for school projects ○</p>
                <p>○ Learning new technologies ○</p>
                <p>○ Engaging in creative activities ○</p>
            </div>
        </div>
    </div>
</section>
<div class="buttons outer-buttons">
            <button id="outer-resume-button">Download CV</button>
            <button id="outer-email-button">Email</button>
    </div>
    <main class="content">
            <div class="self-picture"></div>
            <section class="education-container">
    <h2>Education Attainment</h2>
    <div class="education-item">
        <div class="education-content">
            <h3>Cavite State University</h3>
            <p>Bachelor of Science in Information Technology</p>
            <p>Expected Graduation: 2025</p>
        </div>
        <a href="https://www.facebook.com/CvSU.B.Admission" target="_blank">
            <img src="Styles/CVSU1.png" alt="Cavite State University">
        </a>
    </div>
    <div class="education-item">
        <div class="education-content">
            <h3>Montesorri Professional College of Asia</h3>
            <p>Senior High School Diploma</p>
            <p>Year of Graduation: 2021</p>
        </div>
        <a href="https://www.facebook.com/MPCACollegesOFFICIAL" target="_blank">
            <img src="Styles/MPCA.png" alt="Montesorri Professional College of Asia">
        </a>
    </div>
    <div class="education-item">
        <div class="education-content">
            <h3>Bacoor National High School</h3>
            <p>Junior High School Diploma</p>
            <p>Year of Graduation: 2018</p>
        </div>
        <a href="https://www.facebook.com/pages/Bacoor-National-High-School-Main/282400438501281" target="_blank">
            <img src="Styles/BNHS.png" alt="Bacoor National High School">
        </a>
    </div>
    <div class="education-item">
        <div class="education-content">
            <h3>Molino Elementary School</h3>
            <p>Elementary School Diploma</p>
            <p>Year of Graduation: 2015</p>
        </div>
        <a href="https://www.molinoelementary.edu.ph" target="_blank">
            <img src="Styles/MOLINO.png" alt="Molino Elementary School">
        </a>
    </div>
</section>

        </main>
    </main>
    <footer>
    <p>&copy; 2024 My Portfolio</p>
    <div class="social-icons">
        <a href="https://www.facebook.com/phoebe.kates.750/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/_iamphoebekates/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/yourgithubaccount" target="_blank"><i class="fab fa-github"></i></a>
    </div>
</footer>


    <script>
        document.getElementById("resume-button").addEventListener("click", function() {
            window.open("RESUME PB.pdf", "_blank");
        });

        document.getElementById("email-button").addEventListener("click", function() {
            window.location.href = "mailto:pbkates1717@gmail.com";
        });

        document.getElementById("outer-resume-button").addEventListener("click", function() {
            window.open("RESUME PB.pdf", "_blank");
        });

        document.getElementById("outer-email-button").addEventListener("click", function() {
            window.location.href = "mailto:pbkates1717@gmail.com";
        });

        document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        let targetUrl = this.href;

       
        const isDarkMode = document.body.classList.contains('dark-mode');

        
        document.body.classList.add('slide-out');

        setTimeout(function() {
           
            localStorage.setItem('darkMode', isDarkMode ? 'true' : 'false');

           
            window.location.href = targetUrl;
        }, 500); 
    });
});

window.addEventListener('DOMContentLoaded', (event) => {
  
    const darkModeEnabled = localStorage.getItem('darkMode') === 'true';


    document.body.classList.remove('slide-in');

    
    if (darkModeEnabled) {
        document.body.classList.add('dark-mode');
    }
});

function toggleDarkMode() {
   
    document.body.classList.toggle('dark-mode');

    
    const isDarkMode = document.body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDarkMode ? 'true' : 'false');
}

   
    const darkModeToggle = document.getElementById("dark-mode-toggle");
    darkModeToggle.addEventListener("change", toggleDarkMode);



    </script>


    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
body.dark-mode h2,
body.dark-mode p {
    color: white;
}

body.dark-mode .nav-container {
  background-color: #111;

}

body.dark-mode .nav-text {
  color: white; 
}

body.dark-mode .nav-link {
  color: white; 
}

body.dark-mode #resume-button {
    color: black;
}

nav {
    background-color: white;
    padding: 10px 0;
    text-align: right;
}

nav ul {
    list-style-type: none;
    margin: 10px;
    padding: 0;
    display: flex;
    justify-content: flex-end; 
}

nav ul li {
    display: inline-block;
    margin-left: 30px; 
    font-family: "Roboto Mono", monospace;
}

nav ul {
    width: calc(100% - 100px); 
}


nav ul li.nav-text {
    margin-right: 10px; 
    color: #333;
    margin-left: 44px;
    font-family: "Playwrite US Trad", cursive;
    
}

nav ul li.nav-text:hover {
    color: #FFBF00; 
    cursor: pointer; 
}

nav ul li a:hover {
    color: yellow;  
}
.nav-text:hover {
    color: yellow; 
    
}
nav ul li a {
    color: #333;
    text-decoration: none;
}

body.dark-mode {
  background-color: #111;
  color: #fff;
}


.nav-container {
    background-color: white;
    padding: 10px 20px;
    text-align: right;
    display: flex;
    align-items: center; 
}

.nav-container .nav-text {
    display: flex;
    align-items: center; 
    margin-right: auto;
    color: #333;
}

.toggle-switch {
    display: none;
}

.sun-icon, .moon-icon {
  font-size: 20px; 
  margin-right: 5px; 
}
.toggle-label {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
  background-color: #ccc;
  border-radius: 20px;
  overflow: hidden; 
  margin-right: 10px;
}

.toggle-label::before,
.toggle-label::after {
  content: '';
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px; 
}

.toggle-label::before {
  left: 5px; 
  color: #FFD700; 
  content: '\2600'; 
}

.toggle-label::after {
  right: 5px; 
  color: #aaa; 
  content: '\1F319'; 
}

.toggle-switch {
  display: none; 
}

.toggle-switch:checked + .toggle-label {
  background-color: yellow; 
}


#email-button {
    padding: 10px 20px;
    font-size: 16px;
    color: black;
    background-color: white;
    border: solid black;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

#email-button:hover {
    background-color: peachpuff;
}

h1 {
    color: #FFBF00;
    margin-bottom: 20px;
    margin-right: auto;
    margin-left: 100px;
    transition: background 0.3s ease, color 0.3s ease, font-family 0.3s ease;
    text-transform: uppercase;
}

h1:hover{
    background: linear-gradient(60deg, #FF7D29, #FFBF00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: "Playwrite MX", cursive;
            text-transform: lowercase;
        }   

h2 {
    color: black;
    margin-bottom: 10px;
    margin-top: 0;
    font-family: 'Times New Roman', Times, serif;
    font-size: 80px;
    margin-right: auto;
    margin-left: 100px;
}

p {
    line-height: 1.6;
    margin-right: auto;
    margin-left: 100px;
}

.gallery-container {
    background-image: url('styles/amber.png');
    background-size: 100% auto; 
    background-position: right;
    padding: 20px;
    border-radius: 10px;
}
.content-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-right: 30px;
    margin-left: -10px;
}

.gallery {
    display: grid;
    gap: 10px;
    grid-template-columns: auto 0 auto;
    place-items: center;
    margin-left: -50px;
    margin-top: 20px;
}
.gallery:hover {
    transform: scale(1.1); 
}
.gallery > img {
    width: 200px;
    aspect-ratio: 1;
    object-fit: cover;
    transition: .35s;
    filter: grayscale();
    cursor: pointer;
}

.gallery > img:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
}

.gallery > img:nth-child(1) {
    clip-path: polygon(0 0,50% 0,100% 100%,0 100%);
}

.gallery > img:nth-child(2) {
    clip-path: polygon(0 0,100% 0,50% 100%);
}

.gallery > img:nth-child(3) {
    clip-path: polygon(50% 0,100% 0,100% 100%,0 100%);
}

.gallery > img:nth-child(4) {
    clip-path: polygon(0 0,100% 0,50% 100%,0 100%);
}

.gallery > img:nth-child(5) {
    clip-path: polygon(50% 0,100% 100%,0% 100%);
}

.gallery > img:nth-child(6) {
    clip-path: polygon(0 0,100% 0,100% 100%,50% 100%);
}

main {
    padding: 20px;
}

main.dark-mode {
    background-color: #111;
    color: #fff;
}
.about-me-container {
    padding: 40px;  
    margin: 120px auto 20px;  
    max-width: 1200px;  
    text-align: left;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    scroll-margin-top: 80px; 
}

.about-me-container h2 {
    font-size: 30px;  
    margin-bottom: 0;
    color: #FFBF00;
    font-family: "Playwrite US Trad", cursive;
}

.about-me-container h1 {
    font-size: 50px;
    margin-bottom: 10px;
    margin-top: 0;
    color: #333;
    font-family: 'Times New Roman', Times, serif;
}
body.dark-mode .about-me-container h1 {
    color: white;
}
body.dark-mode .about-me-container h2 {
    color: yellow;
}
.about-me-content {
    display: flex;
    align-items: flex-start; 
    gap: 20px;  
}

.about-me-text {
    flex: 2;  
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    max-width: 30%;
    margin-top: -70px;
}

.skill-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    transition: transform 0.3s, box-shadow 0.3s;
    text-decoration: none;
}

.skill-box:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


.skill-box img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.skill-box p {
    margin: 0;
    font-size: 16px;
    font-weight: bold;
    color: black;
}


.container2 {
    padding: 40px;
    margin: 60px auto 20px;
    max-width: 1200px;
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container2 h2 {
    font-size: 36px;
    color: #FFBF00;
    font-family: "Playwrite US Trad", cursive;
    transition: color 0.3s ease;
}

.container2 h2:hover {
    
    background: linear-gradient(60deg, #FF7D29, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.container2 p {
    font-size: 20px;
    color: #333;
    margin-bottom: 40px;
    font-family: "Poppins", sans-serif;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: left;
    max-width: 300px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.apple {
    display: flex;
    gap: 5px;
    margin-bottom: 10px;
    margin-left: 250px;
}

.circle {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.card i {
    font-size: 40px;
    color: #FFBF00;
    margin-bottom: 10px;
}

.card p {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

.bullet {
    font-size: 16px;
    color: #555;
}

@media screen and (max-width: 768px) {
    .container2 {
        padding: 20px;
    }

    .container2 h1 {
        font-size: 28px;

    }

    .container2 p {
        font-size: 18px;
    }

    .card {
        max-width: 100%;
    }

    .container2 > div {
        flex-direction: column;
        align-items: center;
    }
}


.career-goals {
    font-size: 24px; 
    color: #FF5733; 
    font-weight: bold; 
    margin-bottom: 20px; 
    text-align: center; 
}

body.dark-mode .career-goals {
    color: #FFBF00; 
}

.hobbies-interests {
    font-size: 24px; 
    color: #28A745; 
    font-weight: bold; 
    margin-bottom: 20px; 
    text-align: center;
}

body.dark-mode .hobbies-interests {
    color: #77DD77; 
}

.identification {
    font-size: 24px; 
    color: #007BFF; 
    font-weight: bold;
    margin-bottom: 20px; 
    text-align: center; 
}

body.dark-mode .identification {
    color: #779ECB; 
}

body.dark-mode .container2 {
    background-color: #111;
    color: #fff;
}

body.dark-mode .container2 p {
    color: white;
}

body.dark-mode .card p{
    color: black;
}



body.dark-mode .about-me-container {
    background-color: #111;
    color: #fff;
}

body.dark-mode .about-me-container p {
    color: #ccc;
}

.outer-buttons {
    text-align: center;
    margin: 40px auto;
}

.outer-buttons button {
    padding: 10px 20px;
    font-size: 16px;
    color: black;
    background-color: #FFBF00;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.outer-buttons button:hover {
    background-color: peachpuff;
}

#outer-email-button {
    padding: 10px 20px;
    font-size: 16px;
    color: black;
    background-color: white;
    border: solid black;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

#outer-email-button:hover {
    background-color: peachpuff;
}

body.dark-mode .outer-buttons button {
    background-color: #FFBF00;
    color: #fff;
    border: none;
}

body.dark-mode .outer-buttons button:hover {
    background-color: peachpuff;
}

body.dark-mode .outer-buttons button {
    background-color: #FFBF00;
}

body.dark-mode .outer-buttons button:hover {
    background-color: peachpuff;
}



.content {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 60px auto;
    padding: 20px;
    
}


.education-container {
    flex: 0 0 65%; 
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}

.education-container h2 {
    font-size: 36px;
    color: #FFBF00;
    font-family: "Playwrite US Trad", cursive;
    transition: color 0.3s ease;
    margin-left: 200px;
}

.education-container h2:hover {
    background: linear-gradient(60deg, #FF7D29, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.education-item:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
}

.education-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    margin-left: 20px;
}

.education-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.education-content {
    flex: 1;
    text-align: left;
    height: 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}



.education-item h3 {
    margin-top: 5px;
    font-size: 16px;
    margin-bottom: 0;
    margin-left: 5px;
    font-family: "Poppins", sans-serif;
}

.education-item p {
    margin-bottom: 1px;
    line-height: 12px;
    font-family: "Poppins", sans-serif;
}

.education-item img {
    max-width: 100px; 
    margin-left: 10px;
    transition: color 0.3s ease;
}

.education-item img:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
}

@media screen and (max-width: 768px) {
    .content {
        flex-direction: column;
    }

    .self-picture, .education-container {
        width: 100%;
        margin-bottom: 20px;
    }
}

.self-picture {
    flex: 0 0 30%;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 10px;
    overflow: hidden;
    background-image: url('Styles/pbkates.png');
    background-size: cover;
    background-position: center;
    width: 700px; 
    height: 500px; 
    position: relative;
    background-color: rgba(255, 255, 255, 0.7);
    border: 1px solid transparent; 
    transition: box-shadow 0.3s ease;
}

.self-picture img {
    position: absolute;
    top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%) scale(1); 
    width: 100%; 
    height: auto; 
    display: block;
    transition: transform 0.3s ease; 
}

.self-picture:hover img {
    transform: translate(-50%, -50%) scale(1.1);
}

.self-picture:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
}


body.dark-mode .education-container {
    background-color: #111;
    color: #fff;
}

body.dark-mode .education-container h2 {
    color: #FFBF00;
}

body.dark-mode .education-item {
    border-bottom: 1px solid #555; 
}

body.dark-mode .education-item h3 {
    color: #FFBF00; 
}

body.dark-mode .education-item p {
    color: #111; 
}

footer {
    color: black;
    text-align: center;
    padding: 10px 0;
    margin-right: -20px;
}
footer p {
    color: black;
    text-align: center;
    padding: 10px 0;
    margin-right: auto;
    font-size: 14px; 
}

.social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
    margin-right: -90px;
}

.social-icons a {
    color: #FFBF00;
    margin-right: 10px;
}

.social-icons a:last-child {
    margin-right: 0;
}
.social-icons a i {
    font-size: 30px; 
}

.social-icons a:hover {
    color: light yellow;
    transform: scale(1.2); 
}

.social-icons.custom-social-icons {
    display: flex;
    justify-content: center;
    align-items: left;
    margin-top: 10px;
    margin-right: 350px; 

}

.social-icons.custom-social-icons a {
    color: #FFBF00;
    margin-right: 10px;
    text-decoration: none; 
}

.social-icons.custom-social-icons a:last-child {
    margin-right: 0;
}

.social-icons.custom-social-icons a i {
    font-size: 30px;
}

.social-icons.custom-social-icons a:hover {
    color: lightyellow; 
    transform: scale(1.2);
}

.buttons {
    margin-top: 20px;
    margin-left: 100px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #FFBF00;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: peachpuff;
}

body.slide-out {
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateX(-100%);
    opacity: 0;
}

body.slide-in {
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateX(100%);
    opacity: 0;
}
.toggle-switch {
  display: none;
}

.toggle-label {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
  background-color: #ccc;
  border-radius: 20px;
}

.toggle-label::after {
  content: '';
  position: absolute;
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  background-color: white;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.toggle-switch:checked + .toggle-label {
  background-color: #2196F3;
}

.toggle-switch:checked + .toggle-label::after {
  transform: translateX(20px);
}
@media screen and (max-width: 768px) {
    
    nav ul {
        flex-direction: column;
        align-items: center;
    }
    nav ul li {
        margin: 10px 0;
    }
    
}


    </style>
</body>
</html>
