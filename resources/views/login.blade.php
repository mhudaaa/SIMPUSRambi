<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login - SIMPUS Rambipuji</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
</head>

<body>
    <div class="login-form">
        <h1>Simpus Rambi</h1>
        <form method="post" action="/login">
            <div class="form-group ">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="">
            <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="log-btn" >Log in</button>
        </form>
    
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
