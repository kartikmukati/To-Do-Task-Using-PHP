<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../../../jqueryCdn.js"></script>
</head>
<body>
    <center>
        <h1><strong>User Registration</strong></h1>
        @if (Session::has('failed-register'))
            <p class="alert alert-danger"> {{Session::get('failed-register')}}{{Session::put('failed-register',null)}}</p>    
        @endif
        @if (Session::has('invalid-details'))
            <p class="alert alert-danger"> {{Session::get('invalid-details')}}{{Session::put('invalid-details',null)}}</p>    
        @endif
         <form action="{{URL::to('/register')}}" method="POST">
                {{ csrf_field() }}
            <table>
                <tr>
                    <td>Name</td><td></td>
                    <td><input type="text" id = 'name' placeholder="@name" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td><td></td>
                    <td><input type="text" id = 'email' placeholder="@email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td><td></td>
                    <td><input type="password" id = 'passsword' placeholder="@password" name="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset"></td><td>&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="submit" id='btn' value="Sign up"></td>
                </tr>
            </table>
        </form>
        <hr>
        <p>Do you already have account.?</p>
    <a href="{{URL::to('/')}}" >Login</a>
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