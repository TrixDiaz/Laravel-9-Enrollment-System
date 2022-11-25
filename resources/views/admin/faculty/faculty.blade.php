<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Faculty List</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    @include("admin.partials.sidenav")
        <h1 class = "head"><center>Faculty List</h1></center><br>
        <button type="button" class="facultybtn" data-toggle="modal"> New Faculty</button>
        {{-- <button onclick="document.getElementById('newFaculty').style.display='block'" style="width:auto;" class = "facultybtn">+ New Faculty</button> --}}
        @include("admin.faculty.newFaculty")
        @include("admin.faculty.editFaculty")
        
        <table id="myTable">
          <thead>
          <tr class="header">
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Advisory</th>
            <th scope="col">Operation</th>
          </tr>
          </thead>
          <tbody>
            @foreach($faculties as $faculty)
          <tr>
            <td>{{ $faculty->firstName }}</td>
            <td>{{ $faculty->lastName }}</td>
            <td>{{ $faculty->middleName }}</td>
            <td>{{ $faculty->gender }}</td>
            <td>{{ $faculty->username }}</td>
            <td>{{ $faculty->advisory }}</td>
            <td>{{ $faculty->password }}</td>
            <td>
           
              <a href = "#" class="editBtn"> EDIT </a>
              @include("admin.faculty.editFaculty")
              
            </tr>
          @endforeach
          
          </tbody>
        </table>
       
    <script src ="/js/script.js"> </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
</body>
</html>