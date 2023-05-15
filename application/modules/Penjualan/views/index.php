<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Venturo Test</title>
  <!--favicon-->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
  <!-- Icons CSS -->
  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
</head>

<body>
  
  <!--page-wrapper-->
  <div class="page-wrapper" style="margin-top: 0;">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
      <div class="page-content">

        <div class="card radius-8">
          <div class="card-header">
            <label>Venturo - Laporan penjualan tahunan per menu</label>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 col-xs-12 select2-sm">
                <select class="form-select" id="tahun" name="tahun" onchange="tampilTabel();">
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                </select>
              </div>
            </div>

            <div class="table-responsive">
              <hr>
              <div class="tampil_tabel"></div>
            </div>
          </div>
        </div>
        <!-- End Page-content -->
      </div>
    </div>

    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>


  </body>

  </html>

  <script type="text/javascript">
    $(document).ready(function() {
      tampilTabel();
    });

    function tampilTabel(){
      var thn = document.getElementById('tahun').value;

      $.ajax({
        type:'post',
        data:{
          "tahun":thn
        },
        url: '<?php echo site_url('Penjualan/tabel') ?>',
        success: function(data){
          $('.tampil_tabel').html(data);
          $('.tampil_tabel').show();
        }
      });
    }

  </script>