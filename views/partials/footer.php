<!-- Footer -->
<footer>
    <div class="footer-main container">
        <div class="footer-item">
            <h2>About us</h2>
            <p>
                Appalicious was created by a dad who was looking for a way to help his
                kids with their math homework. An engineer by background, Damir
                often found it challenging trying to explain math concepts in an
                easy, approachable way, and so it was out of his personal struggles
                that sparked the idea for Appalicious.
            </p>
        </div>
        <div class="footer-item item-2">
            <h2>Services</h2>
            <p>
                Appalicious covers a wide range of math topics, so we can be your
                study buddy from second grade to senior year: Elementary math,
                Algebra Geometry, Calculus, Trigonometry, Statistics, Word problems
                and more!
            </p>
        </div>
        <div class="footer-item item-3">
            <h2>Blog</h2>
            <p>
                Providing content on our website that answers our prospective customers' questions and helps them learn about our product and services.
            </p>
        </div>
        <div class="footer-item">
            <h2>Contact us</h2>
            <form class="contact-us-form" action="controllers/contact.php" method="POST" >
                <input type="text" placeholder="Full Name" name="name" class="fullName" />
                <input type="text" placeholder="Email Address" name="email" class="emailAdress" />
                <textarea placeholder="Message" class="message" name="message"></textarea>
                <button type="submit" name="submit">Submit</button>
                <p class="error"></p>
            </form>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright © 2022 Appalicious - All Rights Reserved</p>
            <p>Template by FR</p>
        </div>
    </div>
</footer>