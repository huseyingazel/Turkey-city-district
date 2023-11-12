<?php
require_once("Config/Config.php");
require_once("Function.php");

$example = $db->query("SELECT * FROM example WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
if(!$example){
    die();
}

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
    <title>Edit</title>
</head>
<body>

<input type="hidden" id="cityDB" value="<?=$example['city']?>"/>
<input type="hidden" id="districtDB" value="<?=$example['district']?>"/>

<div class="container">
    <div class="form-group">
        <label>Select City:</label>
        <select class="form-control" id="cityedit" name="city">
            <option value="0">Select City Please</option>
            <?php
            city();
            ?>
        </select>

        <label>Select District:</label>
        <select class="form-control" id="districtedit" name="district">
        </select>


    </div>
</div>

<script src="AjaxEdit.js"></script>

</body>
</html>
