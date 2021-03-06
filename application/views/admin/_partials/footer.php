<footer>
   <!-- <div class="copyright">
        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
    </div>-->
</footer>

<!-- Jquery JS-->
<script src="<?php echo base_url('assets/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/data-table/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/data-table/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/data-table/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/data-table/button//js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/data-table/button//js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/magnific/jquery.magnific-popup.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });
</script>

<script>
    function deleteConfirm(url) {
        swal({
                title: "Apa anda yakin?",
                text: "Data yang sudah dihapus tidak dapat dikembalikan lagi!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.replace(url);
                } else {
                    swal("Info", "Penghapusan dibatalkan", "info");
                }
            });
    }

    function deleteConfirmKategori(url, kategori) {
        swal({
                title: "Apa anda yakin?",
                text: "Data produk yang memiliki kategori " + kategori +
                    " juga akan terhapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.replace(url);
                } else {
                    swal("Info", "Penghapusan dibatalkan", "info");
                }
            });
    }

    function updateConfirm(url) {
        swal({
                title: "Ubah status bahan?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willUpdate) => {
                if (willUpdate) {
                    window.location.replace(url);
                } else {
                    swal("Info", "Ubah status bahan dibatalkan", "info");
                }
            });
    }
</script>

<!-- Seleksi input simbol -->
<script>
    $(document).ready(function() {
        $('.txtOnly').keypress(function(e) {
            var regex = new RegExp("^[a-zA-Z0-9\'\-]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            } else {
                e.preventDefault();
                $('.error').html('Inputan salah').show().fadeOut("slow");
                return false;
            }
        });
    });
</script>


<!-- Tombol Status -->
<script>
    $(document).ready(function() {
        $('.btnStatusAktif').hover(function() {
            $(this).find('span').text('Tidak Tersedia');
        }, function() {
            $(this).find('span').text('Tersedia');
        });
    });

    $(document).ready(function() {
        $('.btnStatusNonAktif').hover(function() {
            $(this).find('span').text('Tersedia');
        }, function() {
            $(this).find('span').text('Tidak Tersedia');
        });
    });
</script>


<script>
    jQuery(document).ready(function($) {
        $('.alert_notif').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: 'Alert',
                text: 'Hapus Data?',
                html: true,
                confirmButtonColor: '#d9534f',
                showCancelButton: true,
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
</script>


<!-- Bootstrap JS-->
<script src="<?php echo base_url('assets/bootstrap-4.1/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-4.1/bootstrap.min.js') ?>"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url('assets/slick/slick.min.js') ?>">
</script>
<script src="<?php echo base_url('assets/wow/wow.min.js') ?>"></script>
<script src="<?php echo base_url('assets/animsition/animsition.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
</script>
<script src="<?php echo base_url('assets/counter-up/jquery.waypoints.min.js') ?>"></script>
<script src="<?php echo base_url('assets/counter-up/jquery.counterup.min.js') ?>">
</script>
<script src="<?php echo base_url('assets/circle-progress/circle-progress.min.js') ?>"></script>
<script src="<?php echo base_url('assets/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
<script src="<?php echo base_url('assets/chartjs/Chart.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/select2/select2.min.js') ?>"></script>
<!-- Main JS-->
<script src="<?php echo base_url('js/main.js') ?>"></script>