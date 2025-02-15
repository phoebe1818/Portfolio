<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </nav>
    <main>
    
    <div class="container">
            <h2>Contact Me</h2>
            <p> You can contact me here. Just send me a message</p>
            <form action="send_email.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div>
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
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

         

            const params = new URLSearchParams(window.location.search);
            const response = params.get('response');

            if (response) {
                let message = '';
                if (response === 'success') {
                    message = 'Message has been sent!';
                } else if (response === 'error') {
                    message = 'Message could not be sent.';
                } else {
                    message = 'Invalid request.';
                }
                
                alert(message);
                
                setTimeout(() => {
                    window.location.href = 'contact.php';
                }, 2000);
            }
        

    </script>
    <style> 

  body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
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

            main {
            padding: 20px;
            }

            main.dark-mode {
            background-color: #111;
            color: #fff;
            }

            .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #FFBF00;
            margin-bottom: 20px;
            font-size: 36px;
            font-family: "Playwrite US Trad", cursive;
            transition: color 0.3s ease;
        }

        .container h2:hover {
            background: linear-gradient(60deg, #FF7D29, #FFBF00);
             -webkit-background-clip: text;
             -webkit-text-fill-color: transparent;
        }

        .container p {
            text-align: center;
            font-family: "Poppins", sans-serif;
            margin-bottom: 10px;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container form label {
            margin-bottom: 5px;
            color: #333;
            font-family: "Poppins", sans-serif;
        }

        

        .container form input,
        .container form textarea {
            margin-bottom: 15px;
            padding: 10px;
            width: 80%; 
            max-width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: "Poppins", sans-serif;
        }

        .container form textarea {
            margin-bottom: 15px;
            padding: 10px;
            width: calc(100% - 22px); 
            max-width: calc(100% - 22px); 
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: "Poppins", sans-serif;
        }


        
        .container form button[type="submit"] {
            background-color: #FFBF00;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 20px;
            width: 100%; 
            max-width: 50%;
            border-radius: 5px;
            font-family: "Poppins", sans-serif;
            transition: background-color 0.3s ease; 
        }

        .container form button[type="submit"]:hover {
            background-color: #FF7D29; 
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
            }

            .social-icons a {
                color: #FFBF00;
                margin: 0 10px; 
            }

            .social-icons a:last-child {
                margin-right: 0;
            }

            .social-icons a i {
                font-size: 30px; 
            }

            .social-icons a:hover {
                color: lightyellow;
                transform: scale(1.2); 
            }

            body.dark-mode footer p {
                 color: white; 
            }
  
          
            body.slide-out {
                transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
                transform: translateX(-100%);
                opacity: 0;
            }

          
            body.slide-in {
                transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
                transform: translateX(0);
                opacity: 1;
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
