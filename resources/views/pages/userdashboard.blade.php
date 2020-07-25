<?php
    $toDoTasks = DB::table('to_do_tasks')->where('user_id',$customer[0]->id)->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User-Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <h1><strong>User Dashboard</strong></h1>
        <h2>Welcome: {{$customer[0]->name}}
        {{-- @if (Session::has('success-login'))
            <p class="alert alert-success"> {{Session::get('success-login')}}{{Session::put('success-login',null)}}</p>    
        @endif --}}
        <hr>
        @foreach ($toDoTasks as $toDoTask)
            <h3>Title: &nbsp;&nbsp;&nbsp; {{$toDoTask->title}}</h3>
            <h3>Description: &nbsp;&nbsp;&nbsp;{{$toDoTask->description}}</h3>
            <h3>Training Name: &nbsp;&nbsp;&nbsp;{{$toDoTask->training_name}}</h3>
            <hr>


        @endforeach
        
    {{-- <a href="{{URL::to('/register')}}" >Register</a> --}}
    </center>
    <a href="/logout/{{$customer[0]->id}}" >Log out</a>

</body>
</html>