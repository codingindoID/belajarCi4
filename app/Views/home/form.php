<?php $this->extend('tema/tema') ?>

<?php $this->section('content') ?>
<form action="<?= site_url('home/simpanData') ?>" method="post">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="">Nama Produk</label>
            <input name="nama" type="text" class="form-control upper" placeholder="Nama Produk">
        </div>
        <div class="col-md-6">
            <label for="">Kategori Produk</label>
            <input name="type" type="text" class="form-control upper" placeholder="Kategori Produk">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="">Harga Produk</label>
            <input name="harga" type="number" class="form-control upper" placeholder="Harga Produk">
        </div>
        <div class="col-md-6">
            <label for="">QTY Produk</label>
            <input name="qty" type="number" class="form-control upper" placeholder="QTY Produk">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-success"><i class="icofont-ui-check"></i> Simpan</button>
        </div>
    </div>
</form>
<?php $this->endSection('content') ?>