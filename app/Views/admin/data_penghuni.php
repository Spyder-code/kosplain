<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>
<div class="title">
        <h1>Data Penghuni</h1>
      </div>

      <div class="search">
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control input-sm" maxlength="64" placeholder="Cari nama...">
      </div>

        <div class="outer-wrapper">
          <div class="table-wrapper">
            <table id="myTable" class="myTable">
              <tr data-href="profile_penghuni.html">
                <thead>
                  <th>No</th>
                  <th>ID Penghuni</th>
                  <th>No Kamar</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>NIK</th>
                </thead>
              </tr>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>001</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>2</td>
                  <td>002</td>
                  <td>01</td>
                  <td>Tota Munthe</td>
                  <td>tota@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>3</td>
                  <td>003</td>
                  <td>02</td>
                  <td>Rakha Guevara</td>
                  <td>rakha@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>4</td>
                  <td>004</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>5</td>
                  <td>005</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>6</td>
                  <td>006</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>7</td>
                  <td>007</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>8</td>
                  <td>008</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>9</td>
                  <td>009</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
                <tr data-href="profile_penghuni.html">
                  <td>10</td>
                  <td>010</td>
                  <td>01</td>
                  <td>Fulan</td>
                  <td>fulan@gmail.com</td>
                  <td>081234567890</td>
                  <td>12345678</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
<?= $this->endSection(); ?>