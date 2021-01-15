<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS in here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Branding Laundry -->
      <a class="navbar-brand" href="<?= base_url('/') ?>">LAundryKU</a>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
        </li>

        <!-- Menu Dropdown jika telah login -->
        <?php if (session()->has('login') && session()->get('login') == TRUE) : ?>
          <li class="nav-item dropdown">
            <!-- Nama Menu Dropdown menggunakan nama User-->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
              <?= session()->get('fullname') ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- Ke Halaman Admin/index-->
              <?php if (session()->get('role') == 1) : ?>
                <a class="dropdown-item" href="<?= base_url('/admin'); ?>">Administrator</a>
                <div class="dropdown-divider"></div>
              <?php endif; ?>
              <!--Logout-->
              <a class="dropdown-item" href=" <?= base_url('/logout'); ?>">Logout</a>
            </div>
          </li>
        <?php endif; ?>
      </ul>


    </div>
  </nav>

  <?= $this->renderSection('content'); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script>
  function previewImg(){
    const bukti_bayar= document.querySelector('#bukti_bayar');
    const bukti_bayarLabel= document.querySelector('.custom-file-label');
    const imgPreview= document.querySelector('.img-preview');

    bukti_bayarLabel.textContent = bukti_bayar.files[0].name;
    
    const filebukti_bayar = new FileReader();
    filebukti_bayar.readAsDataURL(bukti_bayar.files[0]);

    filebukti_bayar.onload= function(e){
      imgPreview.src = e.target.result;
    } 
  }
    
  </script>
</html>