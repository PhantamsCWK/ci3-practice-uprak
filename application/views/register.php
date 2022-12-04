<section class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row rounded-4 shadow p-3 mb-5" style="width: 360px;">
        <div class="h4 pb-2 mb-3 text-primary border-bottom border-primary">
            <h1>
                Register
            </h1>
        </div>
        <form action="" method="POST">
            
            <div class="mb-2">
                <label for="username" class="form-label text-primary">Username</label>
                <input type="text" class="form-control text-primary" id="username" name="username" placeholder="Username" value="<?=set_value('username')?>">
                <?= form_error('username',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label text-primary">Email</label>
                <input type="text" class="form-control text-primary" id="email" name="email" placeholder="Email" value="<?=set_value('email')?>">
                <?= form_error('email',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label text-primary">Password</label>
                <input type="password" class="form-control text-primary" id="password" name="password" placeholder="">
                <?= form_error('password',"<small class='text-danger'>", "</small>")?>
            </div>
            <div class="mb-2">
                <label for="password2" class="form-label text-primary">Confirm Password</label>
                <input type="password" class="form-control text-primary" id="password2" name="password2" placeholder="">
                <?= form_error('password2',"<small class='text-danger'>", "</small>")?>
            </div>
            <div >
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
        <small class="text-center">already have account <a href="<?=base_url()?>login">login</a></small>
    </div>
</section>