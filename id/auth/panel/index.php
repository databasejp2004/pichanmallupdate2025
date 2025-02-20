<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <link href="https://www.unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
      <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
   </head>
   <body>
      <?php 
         include 'zendsdev.php';
         ?>
      <form class="container" id="needs-validation" onsubmit="return false">
         <div class="container">
         <div class="card mt-5">
         <div class="card-header">
            <a>  Data Result </a>
         </div>
         <div class="card-body">
         <div class="row">
         <div class="col-md-6">
            <label class="mt-2" for="id_telegram">Id Telegram</label>
            <input type="text" class="form-control" value="<?= $idtele; ?>" readonly>
            <label class="mt-3" for="id_botTele">Token Bot</label>
            <input type="text" class="form-control" value="<?= $token; ?>" readonly>
            <!--<label class="mt-2" for="id_telegram">Nama Result</label>
               <input type="text" placeholder="Contoh: Res BY MasterwebStore" class="form-control" value="<?= $waktu; ?>" readonly> -->
            <button class="form-control btn btn-primary mt-3" data-toggle="modal" data-target="#gantidata">Ganti Bot</button>
         </div>
         <div class="modal fade" id="gantidata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Ganti Bot</h5>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Id Telegram</label>
                        <input type="text" id="valid" class="form-control" value="<?= $idtele; ?>">
                        <label class="mt-2" for="exampleInputEmail1">Token Bot</label>
                        <input type="text" id="valtoken" class="form-control" value="<?= $token; ?>">
                        <!-- <label class="mt-2" for="exampleInputEmail1">Nama Result</label>
                           <input type="text" id="waktu" placeholder="Contoh: Res BY MasterwebStore" class="form-control" value="<?= $waktu; ?>"> -->
                     </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-start">
                     <button type="button" id="gantis" class="form-control btn btn-success">Simpan</button>
                     <button type="button" class="form-control btn btn-danger" data-dismiss="modal">Batal</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.js'></script><script  src="script.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         $('#gantis').click(function(){
         const idtele = $('#valid').val();
         const token = $('#valtoken').val();
         const waktu = $('#waktu').val();
         $(this).prop('disabled', true).css('opacity', '0.5').css('cursor', 'not-allowed');
         $.get('ganti.php?idtele=' + idtele + '&token=' + token + '&waktu=' + waktu, function(done){
         if (done == 200) {
         setTimeout(() => {
         $('#gantis').prop('disabled', false).css('opacity', '1').css('cursor', 'pointer');
         location.reload();
         }, 2000);
         }
         });
         });
         });
      </script>