<div class="modal fade" id="modalFormAkun" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Akun Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/edit_akun/' . $title_dashboard) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Akun">Nama</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="text" class="form-control txtOnly" id="nama_akun" name="nama_kategori" placeholder="Masukkan nama kategori" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Masukan</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalFormProduk" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="namakategori">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan nama kategori" />
                    </div>

                    <div class="form-group">
                        <label for="namakategori">Nama</label>
                        <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan nama kategori" />
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Masukan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTestimoni" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/testimoni/uploadGambar') ?>" method="post" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" max="<?php echo date('Y-m-d') ?>" class="tanggal form-control" value="<?php echo date('Y-m-d') ?>" required />
                    </div>
                    Pilih File :
                    <div class="form-group">
                        <label for="gambar"></label>
                        <input class="form-control-file" type="file" name="gambar" />
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Masukan</button>
                </form>
            </div>
        </div>
    </div>
</div> 