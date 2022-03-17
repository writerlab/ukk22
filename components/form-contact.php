<?php
if (isset($_POST['kirim'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $simpan = mysqli_query($koneksi, 
  "
  insert into contact values (
    NULL, '$email', '$nama', '$pesan'
    )
  ");

  if($simpan) {
    $pesan = "<div class='alert alert-success'>Message sent!</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Message not send!</div>";
  }
}
?>
<section class="page-section" id="contact">
  <div class="container">
    <!-- Contact Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Contact Section Form-->
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">
        <?=$pesan?>
        <form action="" method="POST">
          <!-- Name input-->
          <div class="form-floating mb-3">
            <input name="nama" class="form-control" id="name" type="text" placeholder="Enter your name..." required />
            <label for="name">Full name</label>
          </div>
          <!-- Email address input-->
          <div class="form-floating mb-3">
            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" required />
            <label for="email">Email address</label>
          </div>
          <!-- Message input-->
          <div class="form-floating mb-3">
            <textarea name="pesan" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
            <label for="message">Message</label>
          </div>
          
          <!-- Submit Button-->
          <button class="btn btn-primary btn-xl" type="submit" name="kirim">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>