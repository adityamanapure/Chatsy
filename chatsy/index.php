<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home &mdash; CHATSY</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <div class="container nav_container">
          <h1>CHATSY</h1>
          <ul class="nav_list">
            
            <li class="nav_item"> <a href="#about"  onclick="toggleMenu()">About us</a></li>
            <li class="nav_item" > <a href="#contact"  onclick="toggleMenu()">Contact</a></li>
            

          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="header_container">
          <div class="header_wrapper">
            <h1 class="header_main_title">
              Chatting was never this fun before.
            </h1>
            
            
              
              
              
            <button class="nav_btn"><a href="login.php">Login</a></button>
            <button class="nav_btn"><a href="signup.php">Signup</a></button>
                
            
            
          </div>
        </div>
      </div>
    </header>
    <section class="section" id="about">
     
        <div class="container">
          <div class="section_header">
            <h2 class="section_header_title">About us</h2>
          </div>
          
          <p class="section_description"> 
            Our chat app is designed to provide a seamless and enjoyable chatting experience. With a user-friendly interface and innovative features, we make sure that you can connect with your friends and family in the most convenient way possible. Join us and start experiencing a better way of communication.
          </p>
        </div>


        <div class="container">
          <div class="section_header">
            <h2 class="section_header_title">About Me</h2>
          </div>
           <div class="section_description" id="me">
             <img src="me.jpg" >
             <h3>Aditya Manapure </h3>
             <h4>CSE Student At PRPCEM
             </h4>
             <p> Check out my portfolio to see some of my projects.</p>
             <button class="nav_btn"><a target="blank" href="https://aditya-manapure.netlify.app/">View Portfolio</a></button>
            </div>
        </div>

</section>
         
     
<section class="section" id="contact">
        <div class="container">
          <div class="section_header">
            <h2 class="section_header_title">Contact us</h2>
          </div>
          
          <p class="section_description"> 
            If you have any questions or concerns, feel free to contact us.
          </p>

        </div>
        <section class="contact-section">
            <div class="container">
              
              <form action="https://submit-form.com/rOVAdb7uu">
                <h2 class="contact-section_title">Contact us</h2>
               
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                  <button class="nav_btn" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </section>

    
    <footer class="footer">
      
        <p class="footer_text">CHATSY created by Aditya Manapure  &#10084;</p>
    
    </footer>

    <script src="script.js"></script>
  </body>
</html>
