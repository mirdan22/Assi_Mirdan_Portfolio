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
       
     
       
            <div class="project-text">
          
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
            <section class="projects-media">
                <h2 hidden>project imags</h2>
                <?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="projects-media" src="images/'.$images[$i].'" alt="Project Image">';

}
?>
            

            </section>
        </div>
    </div>

    <div>
        <section class="comment-contact">
            <h2 hidden>Comment / Contact</h2>
            <p>Comment / Contact about this project</p>
            <button onclick="location.href='index.php'" class="comment-btn" id="comment">
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
            <p>© 2024 Mirdan Assi. All Rights Reserved.</p>
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



$stmt = null;

?> 
   
</body>

</html>