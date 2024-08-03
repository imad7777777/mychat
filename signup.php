<!DOCTYPE html>
<html>
<head>
    <title>Create New Account</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style></style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class ="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out thisform and start chating with your friends.</p>

            </div>
            <div class="form-groupe">
                <label>Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Exemple : Imad"
                autocomplete="off" required>

            </div>
            <div class="form-groupe">
                <label>Email Adress</label>
                <input type="email" class="form-control" name="user_email" placeholder="someone@site.com"
                autocomplete="off" required>

            </div>
            <div class="form-groupe">
                <label>Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Password"
                autocomplete="off" required>

            </div>
            <div class="form-groupe">
                <label>Country</label>
                <select class="form-control" name="user_country"required>
                    <option disabled="">Select a Country</option>
                    <option>Algeria</option>
                    <option>Tunisia</option>
                    <option>Morocco</option>
                    <option>France</option>
                    <option>USA</option>
                    <option>Saudi</option>
                    <option>Egypte</option>
                    <option>UK</option>
                </select>

            </div>
            <div class="form-groupe">
                <label>Gender</label>
                <select class="form-control" name="user_gender"required>
                    <option disabled="">Select your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

            </div>
            <div class="form-groupe">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a>&amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-groupe">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
            </div>
        </form>
        <div class="text-center small" style="color:#ffffff;">Already have an Account? <a href="signin.php">Signin here</a></div>

    </div>

</body>
</html>
