<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EXPLORE LOKSADO | Dashboard</title>
   

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">EXPLORE LOKSADO HSS</a><button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="http://localhost/myprojek/public/" method="post">
              <button type="submit" class="nav-link px-3 bg-dark border-0"><i class="bi bi-arrow-left-square-fill"></i>Logout</li></button>
            </form> 
    </div>
  </div>
</header>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">

        </li>
        </ul>
        
        
      </div>
    </nav>
    <a href="{{ route('dashboard.create') }}" class="btn" style="background-color:paleturquoise;"><b>Edit Data</a>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Wisata</th>
            <th scope="col">Alamat</th>
            <th scope="col-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <th scope="row">1</th>
            <td>Air Terjun Haratai</td>
            <td>Desa Haratai</td>
            
            <td>
                <a href="{{ route('dashboard.edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="" method="POST" class="d-inline">
            
     
     <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
</form>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Air Panas Tanuhi</td>
            <td>Desa Tanuhi</td>
            
            <td>
                <a href="{{ route('dashboard.edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="" method="POST" class="d-inline">
            
         <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>

         </form>
                <tr>
            <th scope="row">3</th>
            <td>Bambo Rafting</td>
            <td>Loksado</td>
            
            <td>
                <a href="{{ route('dashboard.edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="" method="POST" class="d-inline">
            
     
     <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
</form>

</form>
                <tr>
            <th scope="row">4</th>
            <td>Bukit Batu Langgara</td>
            <td>Desa Lumpangi</td>
            
            <td>
                <a href="{{ route('dashboard.edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="" method="POST" class="d-inline">
            
     
     <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
</form>
            </td>
        </tr>

     
       
    </tbody>
</table>
</div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<script src="/js/dashboard.js"></script>
  </body>
</html>
