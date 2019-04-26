<div class="modal fade" id="modalFormCarapesan" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Cara Pesan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/kelola_akun/' . $title_dashboard) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Cara_pesan">Cara Pesan</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="text" class="form-control txtOnly" id="cara_pesan" name="cara_pesan" placeholder="Masukkan Cara Pesan terbaru" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="password" class="form-control txtOnly" id="password" name="password" placeholder="Masukkan Password" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>