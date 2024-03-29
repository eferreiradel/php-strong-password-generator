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
        <div class="row py-5 justify-content-center">
            <div class="col-5 border p-5">
                <form action="generate-password.php" method="GET">
                    <label for="passwordLength">Password length</label>
                    <input name="passwordLength" type="number" min="9" max="20" class="input form-control">
                    <button type="submit" class="btn btn-primary mt-3">Generate Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>