<div class="container fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td class="text-center">
                    <?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $brg->nama_brg ?>
                </td>
                <td>
                    <?php echo $brg->keterangan ?>
                </td>
                <td class="text-center">
                    <?php echo $brg->kategori ?>
                </td>
                <td class="text-right">Rp.
                    <?php echo number_format($brg->harga, 0, ',', '.') ?>
                </td>
                <td class="text-center">
                    <?php echo $brg->stok ?>
                </td>
                <td>
                    <?php echo anchor('admin/data_barang/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?>
                </td>
                <td>
                    <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                <td>
                    <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Form Input -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-italic" id="exampleModalLabel">Form Input Produk</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="">Pilih Kategori</option>
                            <option value="coffee">Coffee</option>
                            <option value="milkbase">Milkbase</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control ">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>