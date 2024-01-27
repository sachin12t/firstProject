<?php include 'header.php' ?>
    <!----------start the Home-------------------->
    <div class="home">
        <div class="home-box">
            <a href="#" class="home-content">Home</a><span>Contact</span>
        </div>
    </div>
    <!----------------End the Home-->
    <!--------------start the Contact-->
     <div class="contact">
        <div class="contact-box">
          <div class="contact-head">
            <h1>Contact Us</h1>
            <div class="line"></div>
          </div>
          <div class="contact-input">
             <div class="input-box">
                <label for="name">Your Name:</label>
                <input type="text" id="name" placeholder="your name" class="input">
             </div>
             <div class="input-box">
                <label for="email">Your Email:</label>
                <input type="email" id="email" placeholder="your email" class="input">
             </div>
             <div class="input-box">
                <label for="phone">Your Phone:</label>
                <input type="phone" id="phone" placeholder="your phone" class="input">
             </div>
          </div>
          <div class="contact-message">
          <label for="message">message</label>
          <textarea type="message" placeholder="message" class="message"></textarea>
          </div>
          <div class="contact-button">
            <button type="submit" class="button">clear</button>
            <button type="submit"  class="button">send</button>
          </div>
        </div>
        <div class="contact-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.98710314097!2d80.77769796333013!3d26.848902830140982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1693557965096!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </div>
     <hr>
    <!------------------End the Contact-->
 <?php include 'footer.php' ?>