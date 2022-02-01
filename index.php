<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" ></link>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>login</h1>

                <form class="login" method="post">
                    <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                    </div>

                    <div class="form-group">
                    <label>Password </label>
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" value="Login" class="btn btn-primary" />

                </form>
            </did>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/helpers/helper.js"></script>
    <script type="text/javascript" src="assets/js/views/loginView.js"></script>
    <script>
        new LoginView();
    </script>
</body>
</html>