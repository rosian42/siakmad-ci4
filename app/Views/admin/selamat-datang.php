<?= $this->extend('layout/dashboard'); ?>
<?= $this->section('content'); ?>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        let timerInterval
        let level = "<?=$session->get('user_tipe');?>";
        let name = "<?=$session->get('user_name');?>";
        Swal.fire({
            title: 'Selamat Datang '+name+'!!!!',
            html: 'Anda login sebagai <b>' + level + '</b>.',
            timer: 4000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()

            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        })
    })
</script>

<?= $this->endSection(); ?>