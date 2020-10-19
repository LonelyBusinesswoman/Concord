<?php include 'components/header.php'; ?>
<main>
    <!-- page description -->
    <section class="page-description blog-page">
        <!-- decorative elements -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element.svg" alt="icon"></div> 
        <div class="page-name">
            <h2>Testimonials</h2>
        </div>
        <div class="page-img">
            <img src="img/Testimonials-pic.jpg" alt="blog">
        </div>
    </section>
    <!-- testimonials -->
    <section class="testimonials">
        <div class="testimonials-wrapper">
            <?php for($i = 0; $i < 4; $i++): ?>
                <?php include 'components/feedback_block.php' ?>
            <?php endfor; ?>
        </div>
    </section>
     <!-- navigation -->
     <section class="feedback-nav">
        <div class="default-navigation">
            <a href="#">1</a>
            <a href="#" >2</a>
            <a href="#" class="nav-active">3</a>
            <a href="#">4</a>
            <p>...</p>
            <a href="#">25</a>
        </div>
    </section>
    <!-- form -->
    <?php include 'components/form.php'; ?>
</main>
<?php include 'components/footer.php'; ?>