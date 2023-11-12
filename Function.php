<?php

function city(){
    global $db;
    $citys = $db->query("SELECT * FROM city", PDO::FETCH_ASSOC);
    if ( $citys->rowCount() ){
        foreach( $citys as $city ){
            echo '<option value="'.$city['city_key'].'">'.$city['city_title'].'</option>';
        }
    }
}

?>