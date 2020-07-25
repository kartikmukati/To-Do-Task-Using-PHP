<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <h1><strong>User Login</strong></h1>
        @if (Session::has('success-register'))
            <p class="alert alert-success"> {{Session::get('success-register')}}{{Session::put('success-register',null)}}</p>    
        @endif
        @if (Session::has('invalid-credential'))
            <p class="alert alert-danger"> {{Session::get('invalid-credential')}}{{Session::put('invalid-credential',null)}}</p>    
        @endif
        <form action="{{URL::to('/login')}}" method="POST">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" placeholder="@email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" placeholder="@password" name="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset"></td><td>&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <hr>
        <p>Do not have account.?</p>
    <a href="{{URL::to('/register')}}" >Register</a>
    </center>

</body>
</html>