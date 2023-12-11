<html>
<head>
</head>

<body>
<section id="contact" class="contact-section">
            <div class="container-contact">
                <h2>Contact Me</h2>
                <p>Get in touch with me today, and I'll respond promptly. <br>
                    Let's collaborate to bring your vision to life!</p>
                <form id="contactForm">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Full Name:">
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Email Adress:">
    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Type your message here.."></textarea>
    
                    <button type="submit">SUBMIT</button>
                </form> 
              </section>
<footer>
<?php 
echo date("F j, Y, g:i a"); 
?>

</footer>
</body>
</html>