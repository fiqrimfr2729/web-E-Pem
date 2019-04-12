<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>

                    <h3 class='box-title'>Akun</h3>
                    <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post">
                            <table class='table table-bordered'>
                                <tr>
                                    <td>Email <?php echo form_error('email') ?></td>
                                    <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                                    </td>
                                    <td>Password <?php echo form_error('password') ?></td>
                                    <td><input type="text" class="form-control" name="password" id="password" placeholder="password" value="<?php echo $password; ?>" />
                                    </td>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <tr>
                                    <td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                                        <a href="<?php echo site_url('admin/kelola_akun') ?>" class="btn btn-default">Cancel</a></td>
                                </tr>

                            </table>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content --> 