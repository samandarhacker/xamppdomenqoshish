<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="row row-grid">
        <div class="col-3"></div>
        <div class="col-5">

            <form action="./add.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Xampp o'rnatilgan papkani Kiriting</span>
                    <input type="text" name="folder" class="form-control" placeholder="D://dasturlar/xampp/" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Domen</span>
                    <input type="text" name="domen" class="form-control" placeholder=" example.com" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Project manzili</span>
                    <input type="text" name="project" class="form-control" placeholder=" D://dasturlar/xampp/htdocs/myapp/example/" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <button type="submit" name="sub" class="btn btn-outline-success">Success</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>