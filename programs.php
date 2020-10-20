<?php include 'components/header.php'; ?>
<main>
    <!-- page description -->
    <section class="page-description programs-page">
        <!-- decorative elements -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element.svg" alt="icon"></div> 
        <div class="page-name">
            <h2>Our programs</h2>
            <span>Learn more about our tailored, NY State licensed programs</span>
        </div>
        <div class="page-img">
            <img src="img/faq-pic.jpg" alt="programs">
        </div>
    </section>
    <!-- programs -->
    <section class="programs open-programs">
        <div class="programs-wrapper container">
            <p class="program-offer">Our programs for fall semester registration is now open!</p>
            <span class="program-description">If you would like to obtain a well-paid and in-demand profession in the medical field, we invite you to register for one of our programs.</span>
            <div class="program-grid open-program">
                <?php for($i = 0; $i < 5; $i++): ?>
                    <?php include 'components/program_block.php' ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

     <!-- programs -->
     <section class="programs new-programs">
        <div class="programs-wrapper container">
            <p class="program-offer">There are 8 more programs we are willing to offer</p>
            <span class="program-description">If you would like to obtain a well-paid and in-demand profession in the medical field, we invite you to register for one of our programs.</span>
            <div class="program-grid new-program">
                <?php for($i = 0; $i < 8; $i++): ?>
                    <?php include 'components/program_block.php' ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- form -->
    <?php include 'components/form.php'; ?>
</main>
<?php include 'components/footer.php'; ?>