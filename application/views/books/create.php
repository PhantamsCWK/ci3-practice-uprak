<div class="container">
        <form method="POST" action="" class="my-5">
        <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
                 <?= validation_errors()?>
            </div>
        <?php endif;?>
            <div class="row g-3">
                <div class="col-8">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-4">
                    <label class="form-label">NIS</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-4">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-8">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-12">
                    <label class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" >
                </div>
                <div class="col-12">
                    <label class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" >
                </div>
            </div>
        </form>
    </div>