<?php include 'components/header.php'; ?>
<main>
    <!-- page description -->
    <section class="page-description blog-page">
        <!-- decorative elements -->
        <div class="back-icon icon-1"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-2"><img src="img/icons/icon-element.svg" alt="icon"></div>
        <div class="back-icon icon-3"><img src="img/icons/icon-element.svg" alt="icon"></div> 
        <div class="page-name">
            <h2>Our blog</h2>
        </div>
        <div class="page-img">
            <img src="img/blog-pic.jpg" alt="blog">
        </div>
    </section>

    <!-- news grid -->
    <section class="news-page-grid container">
        <?php for($i = 0; $i < 8; $i++): ?>
            <?php include 'components/news-block.php' ?>
        <?php endfor; ?>
    </section>

    <!-- navigation -->
    <section class="news-nav container">
        <div class="news-navigation">
            <a href="#">1</a>
            <a href="#" >2</a>
            <a href="#" class="active">3</a>
            <a href="#">4</a>
            <p>...</p>
            <a href="#">25</a>
        </div>
    </section>
    <!-- form -->
    <?php include 'components/form.php'; ?>
</main>
<?php include 'components/footer.php'; ?>