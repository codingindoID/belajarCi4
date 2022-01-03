<?php $this->extend('tema/tema') ?>

<?php $this->section('content') ?>
<div class="row mb-3">
    <div class="col">
        <a href="<?= site_url('home/tambahProduk') ?>" class="btn-sm btn-success"><i class="icofont-cursor-drag"></i> tambah</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-hover table-bordered custom-table" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA BARANG</th>
                        <th>KELOMPOK</th>
                        <th>QTY ( Pcs )</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $total = 0;
                    foreach ($barang as $key => $b) : ?>
                        <tr>
                            <td class="text-center text-bold"><?= $no++ ?></td>
                            <td><?= $b->nama ?></td>
                            <td><?= $b->kategori ?></td>
                            <td class="text-right"><?= $b->qty ?></td>
                            <td width="10%" class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-purple" data-toggle="modal" onclick="editFormBarang(<?= $b->id ?>)"><i class="icofont-gears"></i></a>
                                    <a type="button" class="btn btn-orange" onclick="return confirm('Hapus Data?')" href="<?= site_url('home/hapusBarang/') . $b->id ?>"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $total += $b->qty;
                    endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2"></th>
                        <th>Total</th>
                        <th class="text-right text-bold"><?= $total ?></th>
                        <th class="text-center">#</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<form action="<?= site_url('home/simpanData') ?>" method="post">
    <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id-barang">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12">
                            <label>Nama Produk</label>
                            <input name="nama" type="text" class="form-control upper" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12">
                            <label>Kategori Produk</label>
                            <input name="type" type="text" class="form-control upper" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12">
                            <label>Harga Produk</label>
                            <input name="harga" type="text" class="form-control upper" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12">
                            <label>QTY Produk</label>
                            <input name="qty" type="text" class="form-control upper" placeholder="Nama Produk">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-purple">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->endSection('content') ?>