<div class="container fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div>
    </h4>

    <table class="table table-bordered tabel-hover table-striped">
        <tr>
            <th class="text-center">ID Barang</th>
            <th class="text-center">Nama Produk</th>
            <th class="text-center">Jumlah Pesanan</th>
            <th class="text-center">Harga Satuan</th>
            <th class="text-center">Sub-Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

            <tr>
                <td class="text-center"><?php echo $psn->id_brg ?></td>
                <td><?php echo $psn->nama_brg ?></td>
                <td class="text-center"><?php echo $psn->jumlah ?></td>
                <td class="text-right">Rp. <?php echo number_format($psn->harga,0,',', '.') ?></td>
                <td class="text-right">Rp. <?php echo number_format($subtotal,0,',', '.') ?></td>
            </tr>

        <?php endforeach ?>

        <tr>
            <td colspan="4" class="text-right">Grand Total</td>
            <td class="text-right">Rp. <?php echo number_format($total,0,',', '.')?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index')?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>