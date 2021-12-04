window.onload = function() {
    var httpRequest;
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var login_bttn = document.getElementById("login_bttn");

    login_bttn.onclick = login;
    
    function login() {
        event.preventDefault();

        if(email.value === "" || password.value === "") {
            alert("Enter required fields.");
            return;
        }

        httpRequest = new XMLHttpRequest();
        var url = "scripts/user_login.php";
        httpRequest.onreadystatechange = processLogin;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('email=' + encodeURIComponent(email.value) + "&password=" + encodeURIComponent(password.value));
    }

    function processLogin() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                var response = httpRequest.responseText;
                if(response === "true") {
                    window.location = "home.html";
                } else {
                    alert("Incorrect email or password.");
                }
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}