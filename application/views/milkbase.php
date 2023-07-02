<div class="container fluid ">

    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/banner-1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/banner-2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- Product -->
    <div class="row  text-center">

        <?php foreach ($milkbase as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 15.9rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title mb-1 font-italic font-weight-bolder">
                        <?php echo $brg->nama_brg ?>
                    </h5>
                    <small>
                        <?php echo $brg->keterangan ?>
                    </small>
                    <br>
                    <span class="badge badge-pill badge-success mb-3">Rp
                        <?php echo number_format($brg->harga, 0, ',', '.') ?>
                    </span> <br>
                    <?php echo anchor('dashboard/masukan_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Masukan Keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>

                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>