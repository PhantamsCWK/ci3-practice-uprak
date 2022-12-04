<div class="container d-flex justify-content-center align-items-center">
    <?php 
    // var_dump($book);die;
    foreach($book as $b):?>
    <div class="card text-center my-5">
    <div class="card-header">
        <?= $b['title']?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $b['author']?></h5>
        <p class="card-text"><?= $b['genre']?></p>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
    </div>
    <?php endforeach;?>
</div>