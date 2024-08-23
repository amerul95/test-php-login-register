<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: auto;
            gap: 10px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="" id="form">
            <label for="username">Login</label>
            <input type="text" id="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="current-password">
            <button type="submit"> submit</button>
        </form>
    </div>
    <div>
        <h1>Register</h1>
        <form action="register.php" id="form-register" method="POST">
            <label for="first-name">first name</label>
            <input type="text" id="username" name="firstname">
            <label for="fName">Last Name</label>
            <input type="text"  name="lastName" >
            <label for="password">email</label>
            <input type="email" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="current-password">
            <button type="submit"> submit</button>
        </form>
    </div>
    <script>
        const userName = document.getElementById("username")
        const password = document.getElementById("password")
        const form = document.getElementById("form")

        form.addEventListener("submit",function(e){
            e.preventDefault()
            console.log("username:",userName.value)
            console.log("password:",password.value)
        })
    </script>
</body>
</html>