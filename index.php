<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>

    <div class="login">
    <h2>Log-In</h2>
        <div class="uname">
           <label>Enter Username</label>
                <input type="text" maxlength="8" id="username"><br><br>
        </div>
        <div class="pass">
            <label> Enter Password</label>
                <input type="password" maxlength="8" id="password" onkeyup="return validate()"><br><br>
        </div>
            <button class="log" id="log">Log-in</button><br><br>
        <a href="create.html">Create New Account</a>
    </div>
</body>

<script>
    function validate(){
        var pass = document.getElementById('pass1'); 
        var upper = document.getElementById('upper');
        var lower = document.getElementById('lower');
        var spec = document.getElementById('spec');
        var num = document.getElementById('number');

        if(pass.value.match(/[0-9]/)) {
            num.style.color = 'green'
        }
        else {
            num.style.color = 'red'
        }

        if(pass.value.match(/[A-Z]/)) {
            upper.style.color = 'green'
        }
        else {
            upper.style.color = 'red'
        }

        if(pass.value.match(/[a-z]/)) {
            lower.style.color = 'green'
        }
        else {
            lower.style.color = 'red'
        }
        if(pass.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=\>\<\.\,\?\(/)]/)) {
            spec.style.color = 'green'
        }
        else {
            spec.style.color = 'red'
        }
    }

    function press(user,pass1){
        if(user ='' || pass1 === "Chl0."){
            alert("Congratulations, you have successfuly logged in!");
        }
        console.log(pass1);
    }
     


    

</script>
</html>