<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete Registrasi -->
<div class="modal fade" id="deleteModalRegistrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menghapus registrasi ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika ingin menghapus silahkan klik "Hapus", jika tidak silahkan klik "Batal" </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <?php foreach ($detail as $d): ?>
                <a class="btn btn-danger"
                    href="<?php echo base_url();?>admin/registrasi/delete/<?php echo $d->id ?>">Hapus</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<!-- Tabnah Kode Formulir -->
<div class="modal fade" id="addModalRegistrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menambah registrasi ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika ingin menambah kode silahkan klik "Tambah", jika tidak silahkan klik "Batal"
            </div>
            <div class="modal-footer">

                <div>
                    <form action="<?php echo base_url('admin/registrasi/addCode'); ?>" method="post">
                        <input type="text" name="kode" class="form-control" value="<?php echo $d->nisn ?>"
                            readonly /><br>
                        <button class="btn btn-success  pull-right" type="submit">Tambah</button>
                    </form>
                    <button class="btn btn-secondary pull-left" type="button" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Hapus Siswa -->
<div class="modal fade" id="hapusSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menghapus siswa ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika ingin menghapus silahkan klik "Hapus", jika tidak silahkan klik "Batal" </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <?php foreach ($siswa as $s): ?>
                <a class="btn btn-danger" href="<?php echo site_url('admin/siswa/delete/'.$s->id) ?>">Hapus</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Hapus Berita -->

<div class="modal fade" id="hapusBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menghapus berita ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika ingin menghapus silahkan klik "Hapus", jika tidak silahkan klik "Batal" </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <?php foreach ($berita as $b): ?>
                <a class="btn btn-danger" href="<?php echo site_url('admin/berita/delete/'.$b->id) ?>">Hapus</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- Hapus Email -->

<div class="modal fade" id="hapusEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menghapus email ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika ingin menghapus silahkan klik "Hapus", jika tidak silahkan klik "Batal" </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <?php foreach ($detailEmail as $d): ?>
                <a class="btn btn-danger" href="<?php echo site_url('admin/email/delete/'.$d->id) ?>">Delete</a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>