<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Pesanan</strong>
    </div>

    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="30px">NO</th>
                    <th>NAMA PEMESAN</th>
                    <th>KOTA</th>
                    <th>TANGGAL</th>
                    <th>STATUS</th>
                    <th width="150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr-shadow">
                    <td>
                        1
                    </td>
                    <td>
                        Mohamad Fiqri Rahardian
                    </td>
                    <td>
                        Palangkaraya
                    </td>
                    <td>
                        20-06-2019
                    </td>
                    <td>
                        Belum Direspon
                    </td>
                    <td>
                        <div>
                            <button class="btn btn-danger" type="button" title="Delete">
                                Hapus
                            </button>
                            <button type="button" class="btn btn-info">Info</button>
                        </div>
                    </td>
                </tr>

                <?php $i = 1;
                foreach ($pesanan as $data_pesanan) : ?>
                    <tr class="tr-shadow">
                        <td>
                            <?php echo $i;
                            $i++ ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->nama_pemesan ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->kota ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->tanggal ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->status ?>
                        </td>
                        <td>
                            <div>
                                <button class="btn btn-danger" type="button" title="Delete">
                                    Hapus
                                </button>
                                <button type="button" class="btn btn-info">Info</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div>