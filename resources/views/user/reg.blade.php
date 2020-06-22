 <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>前台注册页面</title>
    </head>
    <body>
    <center>
        <form action="/user/regDo" method="post">
            @csrf
            用户名: <input type="text" name="user_name"><br>
            Email: <input type="email" name="email"><br>
            密码: <input type="password" name="password"><br>
            确认密码: <input type="password" name="passwordker"><br>
            <input type="submit" id="reg" value="注册">
        </form>
    </center>
    </body>
</html>
