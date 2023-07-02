<div class="container fluid">
    <div class="card">
        <div class="card-header">
            <h5 class="text-grey-500">Detail Produk</h5>
        </div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top"></div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td><span class="font-italic">Nama Produk</span></td>
                                <td><strong><?php echo $brg->nama_brg?></strong></td>
                            </tr>
                            <tr>
                                <td><span class="font-italic">Keterangan</span></td>
                                <td><strong><?php echo $brg->keterangan?></strong></td>
                            </tr>
                            <tr>
                                <td><span class="font-italic">Kategori</span></td>
                                <td><strong><?php echo $brg->kategori?></strong></td>
                            </tr>
                            <tr>
                                <td><span class="font-italic">Stok</span></td>
                                <td><strong><?php echo $brg->stok?></strong></td>
                            </tr>
                            <tr>
                                <td><span class="font-italic">Harga</span></td>
                                <td><strong><div class="btn btn-sm btn-success font-weight-bold">Rp. <?php echo number_format($brg->harga,0,',','.')?></div></strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('dashboard/masukan_keranjang/' .$brg->id_brg, '<div class="btn btn-sm btn-primary font-weight-bolder">Masukan Keranjang</div>')?>
                        <?php echo anchor('dashboard','<div class="btn btn-sm btn-danger font-weight-bolder">Kembali</div>')?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>