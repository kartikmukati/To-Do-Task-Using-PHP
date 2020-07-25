<?php
   $customer =  DB::table('customers')->where('id',$userId)->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assigned-Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../../../jqueryCdn.js"></script>
</head>
<body>
    <center>
        <h1>Assign Task to : <strong>{{$customer[0]->name}}</strong></h1>
        {{-- @if (Session::has('failed-register'))
            <p class="alert alert-danger"> {{Session::get('failed-register')}}{{Session::put('failed-register',null)}}</p>    
        @endif --}}
        @if (Session::has('invalid-details'))
            <p class="alert alert-danger"> {{Session::get('invalid-details')}}{{Session::put('invalid-details',null)}}</p>    
        @endif
         <form action="/admin/postTask/{{$customer[0]->id}}" method="POST">
                {{ csrf_field() }}
            <table>
                <tr>
                    <td>Title: </td><td></td>
                    <td><input type="text" id = 'title' placeholder="@title" name="title"></td>
                </tr>
                <tr>
                    <td>Description: </td><td></td>
                    <td><input type="text" id = 'description' placeholder="@description" name="description"></td>
                </tr>
                <tr>
                    <td>Training Name: </td><td></td>
                    <td><input type="text" id = 'trainingname' placeholder="@trainingname" name="trainingname"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input type="submit" id='btn' value="Submit"></td>
                </tr>
            </table>
        </form>
        <hr>
    </center>

</body>
<script>
    // $(document).ready(function(){
    //     $('#btn').click(function(){
    //         var name = $('#name').val()
    //         var email = $('#email').val()
    //         var password = $('#password').val()
    //         console.log(name);
    //         if(name.trim().length === 0 || email.trim().length === 0 || password.trim().length === 0 ){
    //             alert('Please enter a valid details');
    //         }
    //         else{
    //             $.ajax({
    //                 method: 'POST',
    //                 url: '{}',
    //                 data: {
    //                     name: $('#name').val(),
    //                     email: $('#email').val(),
    //                     password: $('#password').val(),
    //                 },
    //                 success: function(data){
    //                     console.log(data)
    //                 }
    //             })
    //         }
    //         console.log('Clicked')
    //     })
    // })
</script>
</html>