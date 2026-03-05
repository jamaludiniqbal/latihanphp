<?php

    $array = [];

    for($i=1;$i<=50;$i++){
        if($i%3===0) {


            echo <<<HTML
                <span style="color: green; font-size: 18px;">{$i} </span>
            HTML;
         
        }   
                        if($i%5===0){
                    echo <<<HTML
                        <span style="color: red; font-size: 18px">{$i} </span>
                    HTML;
                }


    }


?>