<?= view('tema/header'); ?>
<div class="container">
    <?= view('tema/navbar'); ?>
    <div class="card card-body mt-3">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="alert alert-error alert-dismissible fade show" role="alert">
                <strong>Error!</strong> <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <?php $this->renderSection('content') ?>
    </div>
</div>
<?= view('tema/js'); ?>