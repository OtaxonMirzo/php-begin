<?php
    include 'app/home_news.php';
?>
<?php include 'layouts/header.php' ?>
        <!-- SLIDER BEGIN -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/images/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/images/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/images/slide-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- SLIDER END -->
        <!-- CONTENT BEGIN -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Maqolalar</h3>
            </div>
            <?php foreach ($news_items as $item): ?>
            <div class="col-lg-3 col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <img src="<?php echo $item['IMG'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$item['Theme']?></h5>
                        <p class="card-text"><?=$item['Short']?></p>
                        <div class="text-right">
                            <p> Ko'rildi: <?php echo $item['Count']; ?></p>
                            <?=date_format(date_create($item['created_at']), '<b>H:i</b> d/m/Y')?>
                        </div>
                        <a href="batafsil.php?ID=<?=$item['ID']?>" class="btn btn-primary">Batafsil</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- CONTENT END -->
<?php include 'layouts/footer.php' ?>