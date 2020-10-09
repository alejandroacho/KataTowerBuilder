<?php
namespace App;

final class TowerBuilder
{
    function builder(int $number): array {
        $array=array();
        for ($i=0; $i<$number; $i++){
              $asteriks=($i*2+1);
              $array[$i]=str_repeat(' ',($number-($i+1))).str_repeat('*',$asteriks).str_repeat(' ',($number-($i+1)));
        }
        return $array;
      }
}