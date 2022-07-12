<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>
    <div class="content">

    <div class="top">

    </div>

    <div class="title">
    <h1>Dashboard</h1>
    </div>

    <table class="card-box">
    <tr>
        <th colspan="4">Keluhan</th>
    </tr>
    <tr>
        <td>
        <div class="content">
            <div class="cards">
            <div class="card">
                <div class="box">
                <h3>Total Keluhan</h3>
                <h1>500</h1>
                </div>
            </div>
            </div>
            <div class="content-2"></div>
        </div>
        </td>
        <td>
        <div class="content">
            <div class="cards">
            <div class="card">
                <div class="box">
                <h3>Keluhan Bulan Ini</h3>
                <h1>50</h1>
                </div>
            </div>
            </div>
            <div class="content-2"></div>
        </div>
        </td>
        <td>
        <div class="content">
            <div class="cards">
            <div class="card">
                <div class="box">
                <h3>Keluhan Minggu Ini</h3>
                <h1>10</h1>
                </div>
            </div>
            </div>
            <div class="content-2"></div>
        </div>
        </td>
        <td>
        <div class="content">
            <div class="cards">
            <div class="card">
                <div class="box">
                <h3>Keluhan Diselesaikan</h3>
                <h1>450</h1>
                </div>
            </div>
            </div>
            <div class="content-2"></div>
        </div>
        </td>
    </tr>
    </table>

    <div class="history">
    <h1>History</h1>
    <p>Keluhan Bulan Ini</p>

    <div class="outer-wrapper">
        <div class="table-wrapper">
        <table class="list">
            <tr>
            <thead>
                <th>No</th>
                <th>ID Keluhan</th>
                <th>Keluhan</th>
                <th>Time</th>
                <th>Date</th>
                <th>Status</th>
            </thead>
            </tr>
            <tbody>
            <tr>
                <td>1</td>
                <td>001</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>2</td>
                <td>002</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>3</td>
                <td>003</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>4</td>
                <td>004</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>5</td>
                <td>005</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>6</td>
                <td>006</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>7</td>
                <td>007</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>8</td>
                <td>008</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>9</td>
                <td>009</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            <tr>
                <td>10</td>
                <td>010</td>
                <td>Open</td>
                <td>08:02 PM</td>
                <td>22-04-2022</td>
                <td>Belum diproses</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>

    <div class="nothing">

    </div>

    <footer class="kosplain-footer">
    <div class="outter">
        <div class="text">
        <br>
        <br>
        2022 - All rights reserved. Kosplain
        </div>
    </div>
    </footer>
    </div>
<?= $this->endSection(); ?>