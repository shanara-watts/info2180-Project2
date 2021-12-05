$(document).ready(function(){
    //Clear the form in initial state
    $("input[type=text], textarea").val("");

    $("#user-form").submit(function(){
        
        //Input Forms
        var firstName = $('#firstName').val().trim();
        var lastName = $('#lastName').val().trim();
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        var passLength = password.length;


        var email = $('#email').val().trim();

        
        //Error Placements
        var firstNameValidate = $('#firstName-validate');
        var lastNameValidate = $('#lastName-validate');
        var usernameValidate = $('#usrename-validate');
        var passValidate = $('#password-validate');
        var emailValidate = $('#email-validate');

        

        //Validate the form
        if( firstName =='')
        {
            firstNameValidate.text('Please enter your first Name!!');
            return false;
        }else if(lastName =='')
        {
            lastNameValidate.text('Please enter your last name!!');
            return false;
        }else if(username =='')
        {
            usernameValidate.text('Please enter a username!!');
            return false;
        }else if(password =='')
        {
            passValidate.text('Please enter a password!!');
            return false;
        }else if(passLength < 8)
        {
            passValidate.text('Password should be minimum 8 characters!!');
            return false;
        }
        else if(email =='')
        {
            emailValidate.text('Please enter your valid email!!');
            return false;
        }

      });
})