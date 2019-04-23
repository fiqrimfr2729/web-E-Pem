<div class="card">
    <div class="card-header">
        <strong class="card-title">Akun </strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormAkun">
            <i class="zmdi zmdi-plus"></i>add item</button>
    </div>

    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $start = 0;
                foreach ($user_data as $user) {
                    ?>
                    <tr>
                        <td><?php echo ++$start ?></td>
                        <td><?php echo $user->email ?></td>
                        <td style="text-align:center" width="140px">
                            <?php
                            echo anchor(site_url('admin/kelola_akun/update/' . $user->id), '<i class="fa fa-pencil-square-o"></i>', array('title' => 'edit', 'class' => 'btn btn-danger btn-sm'));
                            echo '  ';
                            echo anchor(site_url('admin/kelola_akun/' . $user->id), '<i class="fa fa-trash-o"></i>', 'title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                            ?>
                        </td>
                    </tr>
                <?php

            }
            ?>
            </tbody>
        </table> <br>
    </div>
</div>