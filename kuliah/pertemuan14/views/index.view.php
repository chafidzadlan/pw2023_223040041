<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary text-decoration-none">Tambah Data Mahasiswa</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group my-3">
          <input type="text" name="keyword" class="form-control" 
          placeholder="Search students" id="keyword" autofocus autocomplete="off">
          <button type="submit" name="search" class="btn btn-primary" id="search-button">Search</button>
        </div>
      </form>
    </div>
  </div>

<div id="search-container">
  <?php if($students) : ?>
    <table class="table">
      <thead class="">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php
        foreach ($students as $student) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><img src="img/<?= $student['gambar']; ?>" class="rounded-circle" width="50"></td>
            <td><?= $student['nim']; ?></td>
            <td><?= $student['nama']; ?></td>
            <td><?= $student['email']; ?></td>
            <td><?= $student['jurusan']; ?></td>
            <td>
              <a href="ubah.php" class="badge text-bg-warning text-decoration-none">Ubah</a> |
              <a href="" class="badge text-bg-danger text-decoration-none">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-danger" role="alert">
          student not found!
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>

</div>

<?php require('partials/footer.php'); ?>