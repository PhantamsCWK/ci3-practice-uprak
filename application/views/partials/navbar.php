<nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container d-flex justify-content-between align-items-center">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>book">Books</a>
            </li>
        </ul>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="" class="nav-link"><?= $this->session->userdata('username')?></a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout')?>" class="btn btn-primary">Logout</a>
            </li>
        </ul>
    </div>
</nav>