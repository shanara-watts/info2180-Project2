<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Usr</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="add-user-box">
        <div class="container">
            <form id="user-form" action="index.html" class="user-form">
                <h3>New User</h3>
                <br>
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                    <i id="name-validate" class="text-danger error"></i>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <i id="usrename-validate" class="text-danger error"></i>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <i id="password-validate" class="text-danger error" ></i>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    <i id="email-validate" class="text-danger error"></i>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/js/form-validate.js"></script>
</body>

</html>
<?php /**PATH D:\superstar211 - United States\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>