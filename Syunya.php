<?php

require_once('Human.php');


class Shunya extends Human
{

    public function cry()
    {
       echo 'トリミングしちゃお';
       echo '<br>';
    }

    public function buy()
    {
        echo '300ペソで';
        echo '<br>';
    }
}