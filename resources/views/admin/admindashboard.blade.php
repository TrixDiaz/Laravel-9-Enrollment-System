<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link href="/css/style.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <title> Admin Dashboard </title>
        @include('admin.partials.topnav')
    </head>
<body>
   @include('admin.partials.sidenav');
            
   <div class="container">
    
   <div class="card" style="width: 18rem;">
    <img src="/images/image.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Total Departments</h5>
      {{-- <p class="card-text">{{ $dep->count() }}</p> --}}
      <a href="/admin/departments" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
        
</div>
        </section>
        <script src="/js/script.js"></script>    
</body>
</html>