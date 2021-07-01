<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registar</title>
    <style>
        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col align-self-center">

            <form action="index.php?cmd=registo" method="post">
                <div class="form-group">
                    <label style="color: black;" for='name'><b>Nome</b></label>
                    <input class="form-control" type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label style="color: black;" for='phone'><b>Telemóvel</b></label>
                    <input class="form-control" type="text" name="phone" >
                </div>
                <div class="form-group">
                    <label style="color: black;" for='mail'><b>Email</b></label>
                    <input class="form-control" type="mail" name="mail" required>
                </div>
                <div class="form-group">
                    <label style="color: black;" for='password'><b>Password</b></label>
                    <input class="form-control" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <input style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" type="submit" name="criar" value="Criar">
                    <input style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>

</body>

</html>