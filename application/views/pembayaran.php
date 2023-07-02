<div class="container fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                    ?>
                </div>
                <br>
                <br>
                <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form action="<?php echo base_url() ?> dashboard/proses_pesanan" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input class="form-control" type="text" name="no_telp" placeholder="Nomor Telp" required>
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option label="- Jasa Pengiriman -" readonly>
                            <option>JNE</option>
                            <option>J&T</option>
                            <option>TIKI</option>
                            <option>GO-SEND</option>
                            <option>GRAB-EXPRESS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Metode Pembayaran Transfer</label>
                        <select class="form-control">
                            <option label="- Rekening Tujuan -" readonly>
                            <option>BCA - 750XXXXXXX</option>
                            <option>BRI - 105XXXXXXX</option>
                            <option>MANDIRI - 120XXXXXXX</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                </form>

            <?php
                } else {
                    echo "<h4>Kerajang Belanja Anda Masih Kosong";
                }
                ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>