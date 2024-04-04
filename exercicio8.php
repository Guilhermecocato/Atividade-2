<?php

function dogsay($message)
{
    $dog = "
           |\_/|                  
           | @ @   Woof!  $message
           |   <>              _  
           |  _/\------____ ((| |))
           |               `--' |   
       ____|_       ___|   |___.' 
      /_/_____/____/_______|
  ";

    echo $dog;
}

dogsay("Cai Fora!");