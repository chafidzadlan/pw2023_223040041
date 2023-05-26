<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>

<!-- PROFILE -->
<section class="profile" id="profile">
    <h2 class="profile-teks">Welcome, <?= strtoupper($myuser['username']); ?>!</h2>
    <div class="container">
      <form action="" method="post" class="myprofile" enctype="multipart/form-data">
        <div class="profile-list-img">
          <img src="backend/image/user/<?= $myuser['img']; ?>" alt="" class="profile-img img-preview">
        </div>
        <div class="profile-list">
          <input type="hidden" name="password">
          <input type="hidden" name="gambar_lama" value="<?= $myuser['img']; ?>">
          <label for="formInput" class="form-label">Foto Profile</label>
          <input type="file" name="gambar" class="form-control img-upload">
        </div>
        <div class="profile-list">
          <label for="formInput" class="form-label">Username</label>
          <input type="text" name="name" id="name" class="form-control" required value="<?= $myuser["username"] ?>">
        </div>
        <div class="profile-list">
          <label for="formInput" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" required value="<?= $myuser["email"] ?>">
        </div>
        <div class="profile-list">
          <label for="formInput" class="form-label">Address</label>
          <input type="address" name="address" id="address" class="form-control" required value="<?= $myuser['address']; ?>">
        </div>
        <div class="profile-list">
          <label for="formInput" class="form-label">Date of Birth</label>
          <input type="date" name="date" id="date" class="form-control" required value="<?= $myuser['tgl_lahir'] ?>">
        </div>
        <div class="profile-button">
          <button type="submit" name="create" class="btn profile-btn">
            Save Changes
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- CHANGE PASSWORD -->
  <section class="cpassword" id="cpassword">
    <h2 class="cpassword-teks">Change Password</h2>
    <div class="container">
      <form action="" method="post" class="myprofile" name="formchangepass">
        <input type="hidden" name="ids" id="ids" value="<?= $myuser['id_users']; ?>">
        <div class="profile-list">
          <label for="formInput" class="form-label">Previous Password</label>
          <input type="password" name="prevpassword" id="prevpassword" class="form-control" autocomplete="off" required>
        </div>
        <div class="profile-list">
          <label for="formInput" class="form-label">New Password</label>
          <input type="password" name="newpassword" id="newpassword" class="form-control" autocomplete="off" required>
        </div>
        <div class="profile-button">
          <button type="submit" name="changepass" class="btn profile-btn" >
            Change Password
          </button>
        </div>
      </form>
    </div>
  </section>

<?php require('partials/footer.php'); ?>