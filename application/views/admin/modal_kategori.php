<div class="modal fade" id="modalFormKategori" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Kategori Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/kategori/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Kategori">Nama</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama kategori" />
                    </div>
                    <div class="form-group">
                        <label for="namakategori">jenis</label>
                        <input type="text" class="form-control" name="id_jenis_kategori" placeholder="id jenis" />
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
                        <label for="namakategori">Nama</label>
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