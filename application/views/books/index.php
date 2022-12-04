<div class="container my-3">
    <a class="btn btn-primary" href="<?= base_url()?>book/create"> Create</a>
    <?php foreach($books as $b): ?>
    <div class="card my-2">
        <div class="card-body d-flex justify-content-between align-items-center">
            <?= $b['title']?>
            <div class="d-flex justify-content-center gap-2">
                <a class="btn btn-primary" href="<?= base_url()?>book/detail/<?= $b['id']?>"><i class="bi bi-eye"></i></a>
                <a class="btn btn-danger" href="<?= base_url()?>book/destroy/<?= $b['id']?>"><i class="bi bi-trash3"></i></a>
                <a class="btn btn-warning" href="<?= base_url()?>book/edit/<?= $b['id']?>"><i class="bi bi-clipboard2"></i></a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>