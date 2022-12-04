<div class="container">
        <form method="POST" action="" class="my-5">
        <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
                 <?= validation_errors()?>
            </div>
        <?php endif;?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select"  name="genre" id="genre">
                    <option value="drama">Drama</option>
                    <option value="action">Action</option>
                    <option value="romance">Romance</option>
                    <option value="horror">Horror</option>
                    <option value="comedy">Comedy</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>