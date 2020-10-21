<?php include 'components/header.php'; ?>
<main>
   
    <!-- slider -->
    <section class="main-slider">

        <div class="slide">
            <!-- img -->
            <div class="slide-img">
                <img src="img/slide-img.jpg" alt="slide">
            </div> 
            <!-- content -->
            <div class="slide-content">
                <h1>A different way to learn</h1>

                <p>Go back to school from home
                    with affordable, online education</p>

                <a href="#" class="default-btn action-btn">get started</a>
            </div>
        </div>

        <div class="slide">
            <!-- img -->
            <div class="slide-img">
                <img src="img/slide-img.jpg" alt="slide">
            </div> 
            <!-- content -->
            <div class="slide-content">
                <h1>A different way to learn</h1>

                <p>Go back to school from home
                    with affordable, online education</p>

                <a href="#" class="default-btn action-btn">get started</a>
            </div>
        </div>

        <div class="slide">
            <!-- img -->
            <div class="slide-img">
                <img src="img/slide-img.jpg" alt="slide">
            </div> 
            <!-- content -->
            <div class="slide-content">
                <h1>A different way to learn</h1>

                <p>Go back to school from home
                    with affordable, online education</p>

                <a href="#" class="default-btn action-btn">get started</a>
            </div>
        </div>

        <div class="slide">
            <!-- img -->
            <div class="slide-img">
                <img src="img/slide-img.jpg" alt="slide">
            </div> 
            <!-- content -->
            <div class="slide-content">
                <h1>A different way to learn</h1>

                <p>Go back to school from home
                    with affordable, online education</p>

                <a href="#" class="default-btn action-btn">get started</a>
            </div>
        </div>
    </section>

    <!-- opportunities -->
    <section class="opportunities">
        <!-- icons -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element.svg" alt="icon"></div> 
        <div class="back-icon icon-4"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-5"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-6"><img src="img/icons/icon-element.svg" alt="icon"></div>

        <div class="opportunities-wrapper">
            <h2> <span>Concord Rusam</span> is your opportunity to get a respectable medical career in the U.S.</h2>
            <p>As a <span>LCME-approved</span> medical school we provide personalized job placement assistance for recent and former graduates, including resume service.</p>
        </div>
    </section>

    <!-- possibilities -->
    <section class="possibilities">
        <div class="possibilities-wrapper container">
            <!-- descr -->
            <div class="possibilities-descr">
                <h3>Get started on your career path by choosing one of our tailored NY State licensed programs</h3>
                <p>We provide personalized job placement assistance for recent and former graduates, including resume service.</p>
            </div>
            <!-- grid -->
            <div class="possibilities-grid">
                <?php for($i = 0; $i < 5; $i++): ?>
                    <?php include 'components/program_block.php' ?>
                <?php endfor; ?>
            </div>
            <!-- explore -->
            <a href="programs.php" class="default-btn transparent-btn">Explore all possibilities</a>
        </div>
    </section>
    
    <!-- team -->
    <section class="team">
         <!-- icons -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element-2.svg" alt="icon"></div> 
        <div class="back-icon icon-4"><img src="img/icons/icon-element-2.svg" alt="icon"></div>
        <div class="team-wrapper">
            <!-- slider -->
            <div class="team-slider">
                <!-- slides -->
                 <?php for($i = 0; $i < 4; $i++): ?>
                    <?php include 'components/team-mate.php' ?>
                <?php endfor; ?>
            </div>
            <!-- descr -->
            <div class="team-descr">
                <h3>Guided by the team of professionals</h3>
                <p>We provide personalized job placement assistance for recent and former graduates, including resume service.</p>
                <a href="about-us.php" class="default-btn transparent-btn">Learn more about us</a>
            </div>
        </div>
        <a href="about-us.php" class="default-btn transparent-btn mob-btn">Learn more about us</a>
    </section>

    <!-- feedback -->
    <section class="feedback">
        <div class="feedback-wrapper">
            <div class="feedback-text">
                <!-- quotes -->
                <img src="img/icons/quotes.svg" alt="quotes">
                <!-- text -->
                <p>As our graduates say:</p>
                <span>The program is user-friendly, very convenient, cost-effective and it will better your career outlook</span>
                <a href="testimonials.php" class="default-btn transparent-btn">more comments from our students</a>
            </div>
            <div class="feedback-img">
                <img src="img/feedback-img.jpg" alt="feedback">
            </div>
        </div>
    </section>
    <!-- cooperation -->
    <section class="connection">
        <div class="connection-wrapper">
            <h3>We are affiliated with</h3>
            <div class="connection-companies">
                <div class="company">
                    <img src="img/BCNA.svg" alt="logo">
                </div>
                <div class="company">
                    <img src="img/NPA.svg" alt="logo">
                </div>
                <div class="company">
                    <img src="img/HebrewFreeLoan.svg" alt="logo">
                </div>
                <div class="company">
                    <img src="img/company-logo-4.png" alt="logo">
                </div>
                <div class="company">
                    <img src="img/company-logo-5.png" alt="logo">
                </div>
                <div class="company">
                    <img src="img/company-logo-6.png" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <!-- form -->
    <?php include 'components/form.php'; ?>
    <!-- news -->
    <section class="recent-news">
        <div class="news-wrapper container">
            <h3>Recent on our blog</h3>
            <!-- grid -->
            <div class="news-grid">
                <?php for($i = 0; $i < 3; $i++): ?>
                    <?php include 'components/news_block.php' ?>
                <?php endfor; ?>
            </div>
        </div>
        <a href="blog.php" class="default-btn transparent-btn">Read our blog</a>
    </section>
</main>
<?php include 'components/footer.php'; ?>