<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-4 text-black">TOP bài hát yêu thích</h3>
    <div class="row">
        <?php foreach($articles as $article): ?>
            <a href="detail.php?id=<?= $article->getMaBViet() ?>" class="text-decoration-none col-md-3     col-sm-6text-black">
                <div class="card card-block">
                    <div class="p-3">
                        <img src="<?= so . '/assets/images/songs/' . $article->getHinhAnh().'.jpg' ?>" class="card-img-top">
                        <h4 class="card-title mt-3 mb-3 fw-bold"><?= $article->getTenBhat() ?></h4>
                        <p class="card-text"><?= $article->getTomTat() ?></p> 
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>
