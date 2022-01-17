<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Dosen</title>
  
    
</head>
<body>
<div class="mt-5">
    <div class="container">

 
    @if(session('status'))
      <script>
        Swal.fire({
          icon : "success",
          title : "Sukses !",
          text : "{{session('status')}}"
        })
      </script>
    @endif
  <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
     <th scope="col">no</th>
      <th scope="col">nidn</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
     
    </tr>
  </thead>
  <tbody>
 
    @foreach ($lecturers as $tabel=> $item)    
    <tr>
      <td scope="row">{{$tabel + 1}}</td>
      <td>{{$item->nidn }}</td>
      <td>{{$item->name }}</td>
      <td>{{$item->address }}</td>
      <td>{{$item->phone }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
  </body>


</html>