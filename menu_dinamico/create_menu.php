<?php
    include_once "function/push_menu.php";
    $res = main_menu();
?>
    <ul>
    <?php
        for($i=0; $i<sizeof($res); $i++){
            ?>
                <li>
                    <a href=""><?=$res[$i]['cat_name']?></a>
                    <?=submenu($res[$i]['menu_id'])?>
                </li>
            <?php
        }
    ?>
    </ul>
