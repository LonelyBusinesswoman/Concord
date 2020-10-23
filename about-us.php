<?php include 'components/header.php'; ?>
<main>
    <!-- page description -->
    <section class="page-description programs-page">
        <!-- decorative elements -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element.svg" alt="icon"></div> 
        <div class="page-name">
            <h1>About Us</h1>
            <span> <strong>Private Career School Concord Rusam</strong>  is dedicated to ensuring our programs are providing students with an excellent education that will lead them into a lifelong career. We are based in New York City and pride ourselves in having some of the most in-demand medical programs</span>
        </div>
        <div class="page-img">
            <img src="img/aboutus-pic.jpg" alt="programs">
        </div>
    </section>
    <!-- about us info -->
    <section class="aboutus-info">
        <div class="aboutus-wrapper">
            <!-- text -->
            <p>Our school has cultivated a roster of successful alumni, whom have graduated from our programs and are employed in well-paying positions, such as Clinical Medical Assistant, Nurse Aide, Phlebotomy Technician, Electrocardiography Technician, Home Health Aide, Medical Billing and Coding, Pharmacy Technicians. Concord Rusam provides complete theoretic and practical education followed by national examination hosted on school premises. </p>
            <!-- license block -->
            <div class="license-block">
                <img src="img/license.svg" alt="license">
                <div class="license-text">
                    <span>All Private Career School Concord Rusam programs are licensed by the New York State Department of Education.</span>
                    <p>Please visit <a href="http://www.acces.nysed.gov/bpss" target="_blank">www.acces.nysed.gov/bpss</a> to see our listing.</p>
                </div>
            </div>
            <p>We provide personalized job placement assistance for recent and former graduates, including resume service.</p>
            <p>On-site state and national certification testing-Take your licensing exam at the same place you completed your training and practice.</p>
            <p>We are a certified testing site for all the national exams such as Phlebotomy Technician National Exam, Clinical Medical Assistant National Exam, EKG National Exam, Patient Care Technician National Exam.</p>

        </div>
    </section>

     <!-- video -->
     <section class="video">
        <div class="aboutus-video">
            <iframe  src="https://www.youtube.com/embed/iKcWu0tsiZM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
     </section>
    
    <section class="col-text">
        <div class="aboutus-wrapper ">
            <!-- column text block -->
            <div class="column-text">
                <p>Private Career School Concord Rusam provides the fastest and most effective career training programs in NYC at the lowest tuition costs. <br> <br>
                    We are located downtown Manhattan at the corner of Wall Street and Pearl Street near all major subways, buses, is accessible by car, train, subway and bus.</p>

                <p>Private Career School offers a wide variety of tuition options for our students in order to give everyone a fair opportunity at attending our schools and becoming successful. Students may choose a weekly payment plan, pay in full, or, in some cases, be eligible for tuition grants through NYC agencies. We work with all students to help and support.</p>
            </div>
        </div>
    </section>
    
    <!-- team -->
    <section class="aboutus-team">
         <!-- icons -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element-2.svg" alt="icon"></div> 
        <div class="back-icon icon-4"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-5"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-6"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-7"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-8"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <!-- content -->
        <div class="container">
            <!-- titile -->
            <div class="aboutus-title">
                <h2>Meet the team</h2>
                <div class="buttons">
                    <div class="tab-btn instructors-btn active">Instructors</div>
                    <div class="tab-btn management-btn">Management</div>
                </div>
            </div>
            <!-- tabs -->
            <div class="tabs-wrapper">
                <span>Each one of our instructors is certified in their respective field, they are intelligent and highly motivated in helping each individual student succeed</span>
                <div class="tabs-content">
                    <!-- Instructors -->
                    <div class="team-tab">
                        <?php for($i = 0; $i < 7; $i++): ?>
                            <?php include 'components/team-mate.php' ?>
                        <?php endfor; ?>
                    </div>
                    <!-- Management -->
                    <div class="team-tab">
                        <?php for($i = 0; $i < 6; $i++): ?>
                            <?php include 'components/team-mate.php' ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission -->
    <section class="aboutus-mission">
        <div class="container">

            <div class="aboutus-title">
                <h2>Our Mission and Objective</h2>
            </div>

            <!-- content -->
            <div class="mission-content">
                <p>Our mission at Concord Rusam is to provide our students with high-quality post-secondary education and to prepare our graduates for entry-level positions. We are dedicated to achieving our goal by implementing the following:</p>
                <!--  list  -->
                <ul>
                    <li> Use innovative teaching methods as a means for students to retain the provided information more easily.</li>
                    <li> Annually review our curricula, equipment, and instructional material to make sure that students are receiving the most current information for their respective field.</li>
                    <li> Tend to all complaints and concerns as soon as they arise.</li>
                    <li> Provide resume workshops and interview preparation to assist students with attaining occupancy.</li>
                    <li> Continue correspondence with graduates to ensure that they are satisfied with the outcome of their education.</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- gallery -->
    <section class="aboutus-gallery">
        <!-- example -->
            <div class="gallery">
                <a href="img/gallery-item-2.jpg"><img src="img/gallery-item-2.jpg" alt="img"></a>
                <a href="img/aboutus-pic.jpg"><img src="img/aboutus-pic.jpg" alt="img"></a>
                <a href="img/gallery-item-2.jpg"><img src="img/gallery-item-2.jpg" alt="img"></a>
                <a href="img/gallery-item.jpg"><img src="img/gallery-item.jpg" alt="img"></a>
                <a href="img/gallery-item-2.jpg"><img src="img/gallery-item-2.jpg" alt="img"></a>
                <a href="img/gallery-item.jpg"><img src="img/gallery-item.jpg" alt="img"></a>
                <a href="img/gallery-item-2.jpg"><img src="img/gallery-item-2.jpg" alt="img"></a>
                <a href="img/gallery-item.jpg"><img src="img/gallery-item.jpg" alt="img"></a>
                <a href="img/gallery-item-2.jpg"><img src="img/gallery-item-2.jpg" alt="img"></a>
                <a href="img/gallery-item.jpg"><img src="img/gallery-item.jpg" alt="img"></a>
                <!-- shadow -->
                <div class="shadow"></div>
            </div>
            <a href="#" id="open-all" class="default-btn transparent-btn ">More photos</a>
    </section>

    <!-- Testimonials -->
    <section class="aboutus-testimonials">
        <div class="container">
            <div class="aboutus-title">
                <h2>Testimonials</h2>
            </div>
            <p class="descr">We will be very glad to receive your feedback on the work of the school. We highly appreciate your opinion</p>
        </div>
    </section>
    <!-- slider -->
    <section class="feedback-slider">
        <?php for($i = 0; $i < 6; $i++): ?>
            <?php include 'components/feedback_block.php' ?>
        <?php endfor; ?>
    </section>
    <a href="testimonials.php" class="default-btn transparent-btn more-comments">more comments from our students</a>
    <!-- form -->
    <?php include 'components/form.php'; ?>
</main>
<?php include 'components/footer.php'; ?>