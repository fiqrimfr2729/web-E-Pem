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
                            <?php echo ucfirst(strtolower($data_pesanan->kota->nama_kabkota)) ?>
                        </td>
                        <td>
                            <?php $originalDate = $data_pesanan->tanggal;
                            $newDate = date("d-m-Y", strtotime($originalDate));
                            echo $newDate; ?>
                        </td>
                        <td>
                            <?php $no = substr($data_pesanan->kontak, 1, strlen($data_pesanan->kontak) - 1);
                            if ($data_pesanan->status_pesanan == 'ST01') : ?>
                                <a class="btn btn-warning" type="button" title="Edit" href="https://web.whatsapp.com/send?phone=62<?php echo $no ?> " target="_blank" title="Respon">
                                    Respon pesanan
                                </a>
                            <?php elseif ($data_pesanan->status_pesanan == 'ST02') : ?>
                                <button class="btn btn-secondary" type="button" title="Edit">
                                    Pesanan selesai
                                </button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <button onclick="deleteConfirm('<?php echo site_url('admin/costum/delete/' . $data_pesanan->id) ?>')" type="button" class="btn btn-danger" onclick="">Hapus</button>
                                <button type="button" onclick="window.location.href='<?php echo base_url('admin/costum/infoPesanan/' . $data_pesanan->id) ?>'" class="btn btn-info">Info</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div>