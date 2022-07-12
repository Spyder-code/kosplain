<?= $this->extend('layouts/penghuni'); ?>
<?= $this->section('content'); ?>
<div style="background-image: url('../../bahan/halaman_kost.jpeg');" class="top">
        <div class="top-content">
            <div class="card">
            <div class="card-content">
                <img src="../../bahan/Deni.jpeg" alt="">
                <div class="card-alamat">
                <div class="alamat">
                    <h4>Alamat</h4>
                    <p>Jl. Garuda no.94 RT 03 RW 15, Mancasan lor,
                    Condongcatur, Depok, Sleman, Yogyakarta</p>
                </div>
                <div class="pemilik">
                    <h4>Pemilik</h4>
                    <p>Maryono, SE</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <h1>Keluhan Terbaru</h1>

    <div class="container">
        <div class="card">
            <div class="content">
                <div class="nama">Nama</div>
                <div class><hr></div>
                <div class="laporan">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a risus arcu.
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Morbi rhoncus et orci vel consequat.
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>