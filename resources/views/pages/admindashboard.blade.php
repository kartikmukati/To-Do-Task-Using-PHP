<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin-Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <h1><strong>Admin Dashboard</strong></h1>
       
        {{-- @if (Session::has('success-login'))
            <p class="alert alert-success"> {{Session::get('success-login')}}{{Session::put('success-login',null)}}</p>    
        @endif --}}
        <hr>
        @foreach ($customers as $customer)
            <a href="/admin/getTask/{{$customer->id}}" >{{$customer->name}} </a>
            <br>
        @endforeach
        
    {{-- <a href="{{URL::to('/register')}}" >Register</a> --}}
    </center>

</body>
</html>