<?= $this->extend('layout/beranda/login');  ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">

<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Modal Admin-->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/auth/admin" method="post" enctype="multipart/form-data" class="row">
                    
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="emailAdmin" name="emailAdmin" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="passwordAdmin" name="passwordAdmin" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Guru-->
<div class="modal fade" id="guruModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login Guru</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/auth/guru" method="post" enctype="multipart/form-data" class="row">
                    
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="emailGuru" name="emailGuru" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="passwordGuru" name="passwordGuru" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Wali-->
<div class="modal fade" id="waliModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/auth/wali" method="post" enctype="multipart/form-data" class="row">
                    
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="emailWali" name="emailWali" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="passwordWali" name="passwordWali" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="section">
  <div class="container">
    
    <div class="row justify-content-center">
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#adminModal">
          	<img class="card-img-top rounded-0" src="../beranda/images/admin.png" alt="scholarship-thumb">
          </a>
          <div class="card-body">
            <h4 class="mb-3" style="text-align: center;">ADMIN</h4>
          </div>
        </div>
      </div>
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#guruModal">
          	<img class="card-img-top rounded-0" src="../beranda/images/guru.png" alt="scholarship-thumb">
          </a>
          <div class="card-body">
            <h4 class="mb-3" style="text-align: center;">GURU</h4>
          </div>
        </div>
      </div>
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#waliModal">
          	<img class="card-img-top rounded-0" src="../beranda/images/wali.png" alt="scholarship-thumb">
          </a>
          <div class="card-body">
            <h4 class="mb-3 " style="text-align: center;">WALI</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<?php if(session()->getFlashdata('msg')=='Wrong_Password'):?>
    <script>
        
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Password Salah!'
            })
        
    </script>
<?php elseif(session()->getFlashdata('msg')=='Email_not_Found'):?>
    <script>
        
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Email tidak ditemukan!'
            })
        
    </script>
<?php endif; ?>

<?= $this->endSection(); ?>