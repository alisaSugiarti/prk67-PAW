<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Modul 6 & 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success" id="navbarSupportedContent">
  <div class="container">
  <div class="col-7"> 
  <a class="navbar-brand" href="#">Portal Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div> 
    <div class="col-5"> 
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="/about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </li>
      </ul>
    </div>
    </div> 
  </div>
</nav>
</header>
<main>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    @yield('content')
</div>
</main>
<footer class="fixed-bottom bg-dark">
      <div class="row small">
      <div class="col">
        <p class="text-center text-muted mt-2"> Universitas Trunojoyo Madura </p>
      </div>
      <div class="col">
        <p class="text-center text-muted mt-2"> Teknik Informatika </p>
      </div>
      <div class="col">
        <p class=" text-center text-muted mt-2"> Pendataan Mahasiswa </p>
      </div>
      <div class="col">
        <p class="text-center text-muted mt-2 "> Website Praktikum PAW </p>
      </div>
    </div>
</footer>


</body>
</html>