<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="IE-edge">
        <meta name="X-UA-Comaptible" content="width=device-width, initial-scale=0">
        <link rel="icon" href="">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="subcont">
                <div class="general">
                    <h1>Registeration Form</h1>
                </div>
                <div class="reg-form">
                    <form action="database2.php" method="POST">
                        <div class="name-feild">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Enter your name" value="" name="name" id="name">
                        </div>
                        <div class="name-feild">
                            <label for="email">Email</label>
                            <input type="email" placeholder="someone@gmail.com" name="email" id="email">
                        </div>
                        <div class="name-feild">
                            <label for="phone">Phone</label>
                            <input type="tel" placeholder="Enter your phonenumber" name="phonenumber" id="phone">
                        </div>
                        <div class="name-feild">
                            <label for="password">Pass</label>
                            <input type="password" placeholder="password" name="password" id="pass">
                        </div>
                        <div class="name-feild">
                            <label for="confirm">Conf</label>
                            <input type="password" placeholder="password" name="confirm_password" id="pass">
                        </div>
                        <input type="submit" name="submit" class="btn" id="submit" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>