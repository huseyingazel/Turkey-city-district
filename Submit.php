<?php
require_once("Config/Config.php");
require_once("Function.php");



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Submit</title>
</head>
<body>
    <div class="container">
        <div class="form-group">
            <label>Select City:</label>
            <select class="form-control" id="city" name="city">
                <option value="0">Select City Please</option>
                <?php
                city();
                ?>
            </select>

            <label>Select District:</label>
            <select class="form-control" id="district" name="district">
            </select>


        </div>
    </div>

    <script src="AjaxSubmit.js"></script>
</body>
</html>
