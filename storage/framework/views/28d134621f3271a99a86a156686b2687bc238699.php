<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Usr</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;900&display=swap" rel="stylesheet">
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="add-user-box">
        <div class="container">
            <form id="user-form" action="/insert-user" class="user-form" method="POST">
                <?php echo csrf_field(); ?>
                <h3>New User</h3>
                <br>
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name">
                    <i id="name-validate" class="text-danger error"></i>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                    <i id="usrename-validate" class="text-danger error"></i>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    <i id="password-validate" class="text-danger error"></i>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    <i id="email-validate" class="text-danger error"></i>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <?php if(isset($msg)): ?>
                <div class="mt-3 alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo e($msg); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/form-validate.js"></script>
</body>

</html><?php /**PATH D:\superstar211 - United States\example-app\resources\views/addUser.blade.php ENDPATH**/ ?>