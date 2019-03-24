<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript">
    <?php if ($this->session->flashdata('success')) { ?> swal("Berhasil", "<?php echo $this->session->flashdata('success');?>", "success");
    <?php 
} else if ($this->session->flashdata('error')) { ?> swal("Hello world!");
    <?php 
} else if ($this->session->flashdata('warning')) { ?> toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php 
} else if ($this->session->flashdata('info')) { ?> toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php 
} ?>
</script> 