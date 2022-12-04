<div class="container">
        <form method="POST" action="" class="my-5">
            <input type="hidden" name="id" value="<?= $book[0]['id']?>">
        <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
                 <?= validation_errors()?>
            </div>
        <?php endif;?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $book[0]['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" value="<?= $book[0]['author'] ?>">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select"  name="genre" id="genre">
                    <?php 
                    $genres = ['drama', 'action', 'romance', 'horror', 'comedy'];
                    foreach($genres as $g):
                        if($g === $book[0]['genre']):
                    ?>
                        <option value="<?= $g ?>" selected><?= $g ?></option>
                        <?php else:?>
                        <option value="<?= $g ?>"><?= $g ?></option>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>