<div class="container fluid">
    <h4>Invoice Pemesanan</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr class="text-center">
            <th class="text-center">ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th class="text-center">Tanggal Pemesanan</th>
            <th class="text-center">Batas Pembayaran</th>
            <th class="text-center">Aksi</th>
        </tr>

        <?php
        foreach ($invoice as $inv) : ?>
            <tr>
                <td class="text-center"><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td class="text-center"><?php echo $inv->tgl_pesan ?></td>
                <td class="text-center"><?php echo $inv->batas_bayar ?></td>
                <td class="text-center"><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            </tr>


        <?php endforeach; ?>
    </table>
</div>