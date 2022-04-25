<!doctype html>
<html lang="en" class="h-100">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  
  <title>Aplikasi Antrian Berbasis Web</title>
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container pt-4">
      <div class="d-flex flex-column flex-md-row px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
        <div class="d-flex align-items-center me-md-auto">
          <i class="bi-mic-fill text-success me-3 fs-3"></i>
          <h1 class="h5 pt-2">Panggilan Antrian</h1>
        </div>
        <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              <li class="breadcrumb-item" aria-current="page">Antrian</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-people text-warning"></i>
                </div>
                <div>
                  <p id="jumlah-antrian" class="fs-3 text-warning mb-1"></p>
                  <p class="mb-0">Jumlah Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
          <div class="table-responsive">
            <table id="tabel-antrian" class="table table-bordered table-striped table-hover" width="100%">
              <thead>
                <tr>
                  <th>Nomor Antrian</th>
                  <th>Status</th>
                  <th>Panggil</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer mt-auto py-4">
    <div class="container">
      <hr class="my-4">
      <div class="copyright text-center mb-2 mb-md-0">
      </div>
    </div>
  </footer>
  <audio id="tingtung" src="../assets/audio/tingtung.mp3"></audio>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#jumlah-antrian').load('get_jumlah_antrian.php');
      $('#antrian-sekarang').load('get_antrian_sekarang.php');
      $('#antrian-selanjutnya').load('get_antrian_selanjutnya.php');
      $('#sisa-antrian').load('get_sisa_antrian.php');

      var table = $('#tabel-antrian').DataTable({
        "lengthChange": false,              
        "searching": false,                
        "ajax": "get_antrian.php",          
        "columns": [{
            "data": "no_antrian",
            "width": '250px',
            "className": 'text-center'
          },
          {
            "data": "status",
            "visible": false
          },
          {
            "data": null,
            "orderable": false,
            "searchable": false,
            "width": '100px',
            "className": 'text-center',
            "render": function(data, type, row) {
              if (data["status"] === "") {
                var btn = "-";
              } 
           
              else if (data["status"] === "0") {
                var btn = "<button class=\"btn btn-success btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
              } 
              else if (data["status"] === "1") {
                var btn = "<button class=\"btn btn-secondary btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
              };
              return btn;
            }
          },
        ],
        "order": [
          [0, "desc"]             
        ],
        "iDisplayLength": 10,     
      });

      
      $('#tabel-antrian tbody').on('click', 'button', function() {
        var data = table.row($(this).parents('tr')).data();
        var id = data["id"];
        var bell = document.getElementById('tingtung');

        bell.pause();
        bell.currentTime = 0;
        bell.play();

        durasi_bell = bell.duration * 770;

        setTimeout(function() {
          responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", menuju, loket, 1", "Indonesian Male", {
            rate: 0.9,
            pitch: 1,
            volume: 1
          });
        }, durasi_bell);

        $.ajax({
          type: "POST",               
          url: "update.php",          
          data: { id: id }            
        });
      });

      setInterval(function() {
        $('#jumlah-antrian').load('get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang').load('get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya').load('get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian').load('get_sisa_antrian.php').fadeIn("slow");
        table.ajax.reload(null, false);
      }, 1000);
    });
  </script>
</body>

</html>