

<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Portfolio</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe%20UI:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Yu%20Gothic%20UI:wght@600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=F37BellaStencil:wght@400&display=swap">

    <script async src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
  <script async src="https://unpkg.com/gsap@3.9.0/dist/ScrollTrigger.min.js"></script>
  <script type="module" src="js/main.js"></script>


</head>

<body>
  <h1 class="hidden">projects</h1>
  <header class="main-header">
    <div class="header-logo"> 

      <img src="images/logo.svg" alt="logo">      
    </div>

    <div id="burger-nav">
      <h2 class="hidden">Main Navigation</h2>
<button class="hamburger">
  <img src="images/hamburger.svg" alt="Burger Menu" id="hamburger-icon">
</button>  
  </div>
  <nav class="burger_menu">
      <ul>
      <li><a href="index.php">PORTFOLIO</a></li>
          <li><a href="#about">ABOUT ME</a></li>
          <li><a href="#contact">CONTACT</a></li>
      </ul>
  </nav>
  <nav class="header-nav">
    <ul>
      <li><a href="index.php">PORTFOLIO</a></li>
      <li><a href="#about">ABOUT ME</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
  </nav>

      <div class="header-social">
        <a href="https://github.com/your-github-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        <a href="https://instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="https://pinterest.com/your-pinterest-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-pinterest"></i></a>
        <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
      </div>
       </header>

       <div>
      <section class="hero">
        <div class="hero-content">
           
        
            <div class="portfolio-image">
            <img src="images/profile-photo.png" alt="Portfolio Image">
          </div>  
          <div class="hero-text">          
            <h2>Mirdan Assi</h2>
            <p>Welcome to my portfolio!</p>
            <p>I am a graphic designer, Video editor, and web developer. Excited? Scroll down and check out some of my
            interesting projects. You can reach me by clicking on the "Contact Me" button below. Good luck</p>
            <a href="#contact" class="contact-button">CONTACT ME</a>
          </div>
        </div>
      </section>
   </div>
  <div class="Portfolio">
    <h2 class="fade"> Portfolio</h2>
  <section class="projects">
      <h2 class="hidden"> Portfolio</h2>



      <div class="project" id="project1">
      <?php
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo  '<section class="project"><h2>'

.$row['title'].'</h2><a href="project_detail.php?id='.

$row['id'].'"><img class="thumbnail" src="images/'.   

$row['image_url'].'" alt="Project Thumbnail"></a><p>';






}
$stmt = null;

?> 

      </div>
    </section> 
    
    </div>
  <div>
    <section class="demo-reel">
      <h2 class="fade">Demo Reel</h2>
      <div class="video-container">
        <video id="demoVideo" controls>
          <source src="videos/final-demo-reel.mp4" type="video/mp4">
        </video>
      </div>
    </section>
  </div>
    <div class="content">
        <section id="about" class="about-section">
            <div class="container">
                <div class="about-me">
                    <h2 class="fade">About Me</h2>
                    <img src="images/profile-photo.png" alt="Your Photo">
                    <p> Hey, it's Mirdan Assi! I am a graphic designer, Video editor, and web developer living in London, Ontario.
            After graduating from Fanshawe College, I dove headfirst into the world of tech to make my mark. My passion
            for creating innovative solutions to complex problems has led me to work on some truly exciting projects
            over the years. When I'm not busy coding or designing, you can find me at the gym, playing sports,
            practicing martial arts, and exploring the great outdoors. I believe life is all about striking the right
            balance between work and play, and I strive to do both with passion and enthusiasm.
          <p> Just curious, are you in search of a talented and passionate web designer and developer to bring your
            project to life? Look no further! If you're looking to take your project to the next level, I'm that guy!
            Don't hesitate to get in touch - I'd love to hear more about your vision and discuss how we can work
            together to make it a reality!
          </p>
                      
                </div> 
              </div>
              </section>
                </div>
                

 

  

                <div class="skills">
                    <h2 class="fade">My Skills</h2>

                    <div class="grid-con" id="my-skills">
    <div class="col-span-full">
      <ul>
        <li><a href="#" data-category="design" class="skills-link">DESIGN:</a></li>
        <li><a href="#" data-category="tools" class="skills-link">TOOLS:</a></li>
        <li><a href="#" data-category="code" class="skills-link">CODE:</a></li>
        <li><a href="#" data-category="motion" class="skills-link">MOTION:</a></li>
      </ul>

      <div id="design" class="content">
        <h2>DESIGN:</h2>
        <p> User Experience, User Interface, Product Design, Logo Design, Web Design</p>
      </div>

      <div id="tools" class="content">
        <h2>TOOLS:</h2>
        <p>Illustrator, Photoshop, Adobe XD, InDesign, Figma</p>
      </div>

      <div id="code" class="content">
        <h2>CODE:</h2>
        <p>HTML5, CSS3/SASS, JavaScript, PHP</p>
      </div>
      <div id="motion" class="content">
        <h2>MOTION:</h2>
        <p> Cinema 4D, After Effects, Premier Pro </p>
      </div>
    </div>
  </div>
                   
        </div>
       
    <div>
        <section id="contact" class="contact-section">
            <div class="container-contact">
                <h2 class="fade">Contact Me</h2>
                <p>Get in touch with me today, and I'll respond promptly. <br>
                    Let's collaborate to bring your vision to life!</p>
                <form id="contactForm">

                  
                <label for="fname"  class="hidden">First Name:</label>
                        <input type="text" name="firstname" id="fname" placeholder="First Name">

                        <label for="lname"  class="hidden">Last Name: </label>
                        <input type="text" name="lastname" id="lname" placeholder="Last Name">
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Email Adress:">
    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Type your message here.."></textarea>
    
                    <button type="submit" id="submit" value="send">SUBMIT</button>
                </form>
              </div>
               </section>
        </div>

    <div>
    <section class="social-media-section">
        <h2 class="fade"> Check out my Social Media</h2>
        <div class="social-media-icons">

            <a href="https://github.com/your-github-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
            <p>Github</p>
            <a href="https://instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <p>Instagram</p>
            <a href="https://pinterest.com/your-pinterest-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-pinterest"></i></a>
             <p>Pinterest</p>
            <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <p>Linkedin</p>
          </div>
    </section>
    
    </div>
    
 
    <footer>
      <div class="footer-logo">
        <img src="images/logo.svg" alt="footer Logo">
      </div>
      <div class="footer-center">
        <p><a href="#top">Back to top</a></p>
        <p>© 2024 Mirdan Assi. All Rights Reserved.</p>
      </div>
      <div class="footer-icons">
        <a href="https://github.com/your-github-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        <a href="https://instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="https://pinterest.com/your-pinterest-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-pinterest"></i></a>
        <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
      </div>
    </footer>

</body>
</html>