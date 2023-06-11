<?php
session_start();
$password = $_SESSION['generated_password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row py-5 justify-content-center">
                <div class="col-5 border p-5">
                    <h2>Generated Password:</h2>
                    <p><?php echo $password; ?></p>
                    <a class="btn btn-primary" href="index.php">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
</body>
</div>
