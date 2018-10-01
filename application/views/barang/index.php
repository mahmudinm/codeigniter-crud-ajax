<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD AJAX Codeigniter</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/datatables.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dataTables.bootstrap4.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">CRUD AJAX Codeigniter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <div class="container">
      <div class="row">

        <div class="col-md-12 my-5">
          <!-- Table disini -->
          <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal_add" id="btn_tambah">Tambah Data</a>
          <div class="clearfix"></div>
          <table class="table" id="datatable">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Berat</td>
                <td>Options</td>
              </tr>
            </thead>
            <tbody id="data_barang">
              
            </tbody>
          </table>          
        </div>
        
      </div>
    </div>

    <?php require '__add.php'; ?>
    <?php require '__edit.php'; ?>

    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables.js"></script>
    <script src="<?= base_url() ?>assets/js/dataTables.bootstrap4.js"></script>

    <?php require '__script.php'; ?>

  </body>
</html>
