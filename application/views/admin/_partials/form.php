<div class="card">
    <div class="card-header">Credit Card</div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Pay Invoice</h3>
        </div>
        <hr>
        <form action="<?php echo base_url('admin/kategori/add') ?>" method="post" novalidate="novalidate">
            <div class="form-group">
                <label for="Nama Kategori" class="control-label mb-1">Nama Kategori</label>
                <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
            </div>
            <div class="form-group has-success">
                <label for="Id Kategori" class="control-label mb-1">Id Kategori</label>
                <input id="id_kategori" name="id_kategori" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="Jenis Kategori" class="control-label mb-1">Id Jenis</label>
                <input id="id_jenis_kategori" name="id_jenis_kategori" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>

            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Pay $100.00</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
        </form>
    </div>
</div> 