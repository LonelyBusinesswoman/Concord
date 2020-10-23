<?php include 'components/header.php'; ?>
<main>
    <section class="map">
        <!-- example -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18807.23117779876!2d27.547613100179007!3d53.89791205091658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfd35b1e6ad3%3A0xb61b853ddb570d9!2z0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1602979861744!5m2!1sru!2sby" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!-- information -->
    <section class="contact-inf">
        <div class="contact-wrapper">
            <p>We are located downtown Manhattan at the corner of Wall Street and Pearl Street near all major subways, buses, is accessible by car, train, subway and bus</p>
            <!-- info -->
            <div class="contact-inf__block">
                <img src="img/icons/location-icon.svg" alt="location">
                <p>160, Pearl Street, <br>
                    New York, NY 10005</p>
            </div>
             <!-- info -->
             <div class="contact-inf__block">
                <!-- <img src="img/icons/tel-icon-2.svg" alt="tel"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="54" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <div class="contact-inf__tel">
                    <a href="tel:2126192260">212-619-2260</a>
                    <br>
                    <a href="tel:2126192280">212-619-2280</a>
                </div>
            </div>
             <!-- info -->
             <div class="contact-inf__block">
                <img src="img/icons/mail-icon.svg" alt="mail">
                <a  class="contact-inf__mail" href="mailto:info@concordrusam.com">info@concordrusam.com</a>
            </div>
        </div>
    </section>
    <!-- form -->
    <?php include 'components/form.php'; ?>
</main>
<?php include 'components/footer.php'; ?>