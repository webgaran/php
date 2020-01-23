<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" href="../phplearn/public/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="index.php" method="get">
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="family">Family :</label>
                        <input type="text" name="family" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../phplearn/public/js/jquery-1.11.3.min.js"></script>
    <script src="../phplearn/public/js/bootstrap.min.js"></script>
</body>
</html>
