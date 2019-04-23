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
                <form action="<?php echo base_url('admin/kategori/' . $title_dashboard) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Kategori">Nama</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="text" class="form-control" pattern="[a-zA-Z0-9\s\-]+" id="nama_kategori" name="nama_kategori" placeholder="Masukkan nama kategori" required />
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
                <form action="<?php echo base_url('admin/' . strtolower(str_replace(' ', '_', $title_dashboard)) . '/tambahProduk') ?>" method="post" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" pattern="[a-zA-Z0-9\s\-]+" required="required" />
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" pattern="[a-zA-Z0-9\s\-]+"></textarea>
                    </div>

                    <?php if ($title_dashboard != "Produk Bedug") : ?>
                        <div class="form-group">
                            <label for="Kategori">Kategori</label>
                            <select name="kategori" id="kategori" name="kategori" class="form-control" required="required">
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($kategori as $data_kategori) : ?>
                                    <option value="<?php echo $data_kategori->id_kategori ?>"> <?php echo $data_kategori->nama_kategori ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="Kategori">Kategori</label>
                            <select name="kategori" id="kategori" name="kategori" class="form-control">
                                <option value="30" selected>Bedug</option>
                            </select>
                        </div>
                    <?php endif; ?>

                    Pilih File :
                    <div class="form-group">
                        <label for="gambar"></label>
                        <input class="form-control-file" type="file" name="gambar" required />
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
                        <input class="form-control-file" type="file" name="gambar" required />
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

<div class="modal fade" id="modalFormEditProduk" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php $nama_kategori = $info_kategori;
                $id = $id_produk;
                $gambar = $gambar_produk ?>
                <form action="<?php echo base_url('admin/' . strtolower(str_replace(' ', '_', $nama_kategori)) . '/updateProduk/' . $id . '/' . $gambar) ?>" method="post" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Produk">Nama Produk</label> <?php $nama_produk = $coba ?>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" pattern="[a-zA-Z0-9\s\-]+" required value="<?php echo $nama_produk ?>">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" pattern="[a-zA-Z0-9\s\-]+"> <?php echo $data_produk->deskripsi ?> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <select name="kategori" id="kategori" name="kategori" class="form-control">
                            <option value="<?php echo $data_produk->kategori->id_kategori ?>" selected><?php echo $data_produk->kategori->nama_kategori ?></option>
                        </select>
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

<div class="modal fade" id="modalFormBahan" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Data Bahan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/bahan_produk/addBahan') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Nama Bahan">Nama bahan </label>
                        <span id="pesan" class="error"></span></p>
                        <input type="text" class="form-control" pattern="[a-zA-Z0-9\s\-]+" id="nama_bahan" name="nama_bahan" placeholder="Masukkan nama bahan" required />
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
                <form action="<?php echo base_url('admin/kelola_akun/' . $title_dashboard) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="email" class="form-control txtOnly" id="email" name="email" placeholder="Masukkan Email" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <span id="pesan" class="error"></span></p>
                        <input type="password" class="form-control txtOnly" id="password" name="password" placeholder="Masukkan Password" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
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