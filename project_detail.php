<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(image_filename) AS images, my_role, industry, project_type, description, title FROM projects, media WHERE projects.id = project_id AND projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$images = explode(",", $row['images']);
$stmt = null;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe%20UI:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Yu%20Gothic%20UI:wght@600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=F37BellaStencil:wght@400&display=swap">

    <script defer src="js/burger.js"></script>
    <script async type="module" src="js/projects.js"></script>
    <script defer src="js/video.js"></script>
    <script async src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script async src="https://unpkg.com/gsap@3.9.0/dist/ScrollTrigger.min.js"></script>
    <script defer src="js/main.js"></script>
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
                <li><a href="index.php">ABOUT ME</a></li>
                <li><a href="index.php">CONTACT</a></li>
            </ul>
        </nav>
        <nav class="header-nav">
            <ul>
                <li><a href="index.php">PORTFOLIO</a></li>
                <li><a href="index.php">ABOUT ME</a></li>
                <li><a href="index.php">CONTACT</a></li>
            </ul>
        </nav>

        <div class="header-social">
            <a href="https://github.com/your-github-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-github"></i></a>
            <a href="https://instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://pinterest.com/your-pinterest-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-pinterest"></i></a>
            <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </header>

    <div class="desktop-project-page">

        <header>
       
            <!-- <img class="project-img1" alt="Image 1" src="./images/car-project1.png"> -->
       
            <div class="project-text">
                <!-- <h2>Cars 4 Sale</h2>
                <p>My Role: designing, Coding, Research, Photoshoot</p>
                <p>Industry: UX/UI, HTML, CSS, JS</p>
                <p>Project Type: Buying used cars website</p> -->
                <h2><?php echo $row['title']; ?></h2>
                
<p><?php echo $row['my_role']; ?></p>
<p><?php echo $row['industry']; ?></p>
<p><?php echo $row['project_type']; ?></p>

            </div>
          
        </header>

        <main>
            <div class="about-me">
            <p><?php echo $row['description']; ?></p>
         
        </main>


        <div>
            <section class="projects">
                <h2 hidden>project imags</h2>
                <?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="projects" src="images/'.$images[$i].'" alt="Project Image">';

}
?>
                <!-- <img class="project-img" alt="Image 1" src="./images/car-web-2.png">
                <img class="project-img" alt="Image 2" src="./images/car-web-1.png">
                <img class="project-img2" alt="Image 3" src="./images/car-web.png">
                <img class="project-img2" alt="Image 4" src="./images/car-mobile.png"> -->

            </section>
        </div>
    </div>

    <div>
        <section class="comment-contact">
            <h2 hidden>Comment / Contact</h2>
            <p>Comment / Contact about this project</p>
            <button onclick="location.href='index.html'" class="comment-btn" id="comment">
                <span>Contact</span>
            </button>
        </section>
    </div>


    <footer>
        <div class="footer-logo">
            <img src="images/logo.svg" alt="footer Logo">
        </div>
        <div class="footer-center">
            <p><a href="#top">Back to top</a></p>
            <p>© 2023 Mirdan Assi. All Rights Reserved.</p>
        </div>
        <div class="footer-icons">
            <a href="https://github.com/your-github-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-github"></i></a>
            <a href="https://instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://pinterest.com/your-pinterest-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-pinterest"></i></a>
            <a href="https://linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-linkedin"></i></a>
        </div>

    </footer>
    <?php

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

//   echo  '<section class="projects"><h3>'
  
// .$row['title'].'</h3><a href="project_detail.php?id='.

// $row['id'].'"><img class="thumbnail" src="images/'.   

// $row['image_url'].'" alt="Project Thumbnail"></a><p>'. 

// $row['project_type'].'</p>'.

// $row['description'].'</p></section>';

// }





$stmt = null;

?> 
   
</body>

</html>