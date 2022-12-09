<?php $title = 'contact'; include("_header.inc.php"); ?>

    <!------------------------------>

    <section id="top">
        <div class="page-hero">
            <img src="img/tmp/hero.webp" class="rellax" data-rellax-speed="-4">
            <div class="inner">
                <h1>Our <strong>Contacts</strong></h1>
                <div class="breadcrumbs">
                    <a href="#">Home</a><span>|</span><a href="#">Our contacts</a>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------>

    <section>
        <div class="contact">
            <div class="inner">
                <div class="text">
                    <h2>WHERE TO FIND US</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="contact-details">
                    <h3>Contact details:</h3>
                    <div>
                        <h4>OFFICE IN NEW YORK</h4>
                        <p>27th Brooklyn New York, NY 10065<br>+7(111)123456789<br><a href="#">yourmail@domain.com</a></p>
                    </div>
                    <div>
                        <h4>FIND US ON :</h4>
                        <p><a href="#">Facebook</a><br><a href="#">Twitter</a><br><a href="#">Instagram</a></p>
                    </div>
                </div>
                <div class="form">
                    <form>
                        <p><input type="text" placeholder="Name"></p>
                        <p><input type="email" placeholder="Email"></p>
                        <p><textarea placeholder="Message"></textarea></p>
                        <p><button class="button" type="submit">Submit</button</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!------------------------------>

    <section>
        <div class="map">
            <div class="map-box">
                <div id="map-canvas">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.235607399357!2d-6.251057161658002!3d53.3390385189215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e969a3f9d89%3A0x68b6b135a17f090e!2s40%20Merrion%20Square%20E%2C%20Dublin%2C%20Irska!5e0!3m2!1shr!2shr!4v1670580438479!5m2!1shr!2shr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>

    <?php ob_start(); ?>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/map.js"></script> -->

    <?php $js = ob_get_clean(); ?>

    <!------------------------------>

<?php include("_footer.inc.php"); 