<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Grade And Section</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    
   @include("admin.partials.sidenav")
    <div class="container">
        <div class="header"><h5>List of Students Enrolled in this Section</h5>
   <table class="table table-striped" id="datatable">
    <thead>
        
        <tr>
        
        <th scope="col">Section</th>
        <th scope="col">Student ID</th>
        <th scope="col">Student First Name</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student )  
        <td>{{ $student->section }}</td>
        <td>{{ $student->studentID }}</td>
        <td>{{ $student->firstName}}</td>
        @endforeach