<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">

  <title>SIMDES-BUBUHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="depan/img/desa.jpg" rel="icon">
  <link href="depan/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="depan/vendor/aos/aos.css" rel="stylesheet">
  <link href="depan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="depan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="depan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="depan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="depan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="depan/css/style.css" rel="stylesheet">

  {{-- icon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/logoicon.ico') }}"/>

</head>

<style>
    body{
    background-color: #f6f6f6;
    margin-top:20px;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: #e9e9eb;
    color: #666;
    padding-top: 15px;
    padding-bottom: 15px;
}

.table .table-img img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #bbbbbb;
    -webkit-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -moz-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -ms-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    text-shadow: 0 0 black;
}

.table .team-member-sm {
    width: 32px;
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    transition: all 0.25s ease;
}
.table .team-member {
    position: relative;
    width: 30px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
    display: inline-block;
}

.table .order-list li img { 
    border: 2px solid #ffffff;
    box-shadow: 4px 3px 6px 0 rgba(0,0,0,0.2);
}
.table .team-member img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0;
    border-radius: 1000px;
}
.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.avatar.avatar-sm {
    font-size: 12px;
    height: 30px;
    width: 30px;
}
.avatar {
    background: #6777ef;
    border-radius: 50%;
    color: #e3eaef;
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    margin: 0;
    position: relative;
    vertical-align: middle;
    line-height: 1.28;
    height: 45px;
    width: 45px;
}

.table .order-list li .badge {
    background: rgba(228,222,222,0.8);
    color: #6b6f82;
    margin-bottom: 6px;
}

.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.bg-success {
    background-color: #54ca68 !important;
}

.bg-purple {
    background-color: #9c27b0 !important;
    color: #fff;
}

.bg-cyan {
    background-color: #10cfbd !important;
    color: #fff;
}

.bg-red {
    background-color: #f44336 !important;
    color: #fff;
}

.progress {
    -webkit-box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
    box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
}
</style>



<body>
 <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h2 class="logo">Desa Bubuhan<span>.</span></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">Kegiatan</a></li>
          <li><a class="nav-link scrollto active" href="/">Agenda</a></li>
          <li><a class="nav-link scrollto" href="/">Proyek</a></li>
          <li><a class="nav-link scrollto" href="/">Perangkat</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  {{-- <div class="page-content page-container" id="page-content">
    <div class="padding">
    <div class="row">
        <div class="col-lg-10">  
            <h5 style="margin-top: 10px;">List Agenda</h5>          
            @foreach ($daftaragenda as $agenda)
            <div class="list list-row block" style="margin-top: 20px;">
  
                <div class="list-item" data-id="19">                    
                    <div class="flex" >                    
                        <div class="item-except text-muted text-sm h-1x">{{ $agenda->judulagenda }}</div>
                    </div>
                <div class="no-wrap">
                <div class="item-date text-muted text-sm d-none d-md-block" style="display:flex; text-align: right;">{{ $agenda->tanggalagenda->isoFormat('D MMMM Y') }}</div>
            </div>
        </div>
    </div>
    @endforeach
        </div>
    </div>
    </div>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top: 50px">
                <div class="card-header">
                    <h4>List Agenda</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive " id="proTeamScroll" tabindex="2" style=" overflow: hidden; outline: none;">
                        <table class="table table-striped">
                            {{-- <div class="container col-md-6"> --}}
                                <thead>
                                    <tr>
                                        {{-- <th>Cust.</th> --}}
                                        <th>No</th>
                                        <th>Agenda</th>
                                        <th>Tanggal Agenda</th>
                                        </tr>
                                    </thead>
                                    @foreach ($daftaragenda as $agenda)
                            <tbody>
                                <tr>
                                    <td><h6 class="mb-0 font-13">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td>
                                        
                                        <h6 class="mb-0 font-13">{{ $agenda->judulagenda }}</h6>
                                    </td>
                                    <td>{{ $agenda->tanggalagenda->isoFormat('DD MMMM Y') }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="depan/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="depan/vendor/aos/aos.js"></script>
  <script src="depan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="depan/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="depan/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="depan/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="depan/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="depan/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="depan/js/main.js"></script>

</body>

</html>



