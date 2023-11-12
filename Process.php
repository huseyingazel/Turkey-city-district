<?php
require_once("Config/Config.php");
require_once("Function.php");

if(isset($_POST['districts'])){

    $dists = $db->query("SELECT * FROM district WHERE dis_citykey='{$_POST['districts']}'", PDO::FETCH_ASSOC);
    if ( $dists->rowCount() ){
        foreach( $dists as $dist ){
            ?>
            <option value="<?=$dist['dis_key']?>"><?=$dist['dis_title']?></option>
            <?php
        }
    }

}

?>