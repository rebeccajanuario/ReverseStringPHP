<?php

  function myFunc($str)
  {
    $saida = '';
    $arr_str = str_split($str);
    for ($i = strlen($str)-1;$i >=0; $i--)
    {
      
      $saida.=$arr_str[$i];
    }
    return $saida;
  }
  echo myFunc("tecnologia");
?>