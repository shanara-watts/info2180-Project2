<?php include('inc/header.php'); ?>

<div id="add-user-box">
    <div class="container">
        <form id="user-form" action="functions/addUser.php" class="user-form" method="POST">
            <h3>New User</h3>
            <br>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="First name">
                <i id="firstName-validate" class="text-danger error"></i>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last name">
                <i id="lastName-validate" class="text-danger error"></i>
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
            <a href="userlist.php" class="btn btn-dark">View Users</a>


            <?php if(isset($_GET['msg'])){ ?>
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                <?php echo $_GET['msg'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
        </form>
    </div>
</div>

<?php include('inc/footer.php'); ?>