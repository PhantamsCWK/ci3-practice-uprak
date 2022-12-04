<section class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
    <?= $this->session->flashdata('message')?>
    <div class="row rounded-4 shadow p-3 mb-5" style="width: 360px;">
        <div class="h4 pb-2 mb-3 text-primary border-bottom border-primary">
            <h1>
                Login
            </h1>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label text-primary">Email</label>
                <input type="text" class="form-control text-primary" id="email" name="email" placeholder="Email" value="<?=set_value('email')?>">
                <?= form_error('email',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-primary">Password</label>
                <input type="password" class="form-control text-primary" id="password" name="password" placeholder="">
                <?= form_error('password',"<small class='text-danger'>", "</small>")?>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
        <small class="text-center">Haven't account yet <a href="<?=base_url()?>register">register</a></small>
    </div>
</section>