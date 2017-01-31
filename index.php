<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function nunu($array){
      sort($array);
      return $array;
    }
    $chameau = array("HTML","CSS","Javascript","PHP");
    foreach($chameau as $array)
    {
   echo $array ,'<br/>';
  }


    function toto($arra){
      $titi = implode($arra, ",");
      return $titi;
    }
    $amen = array("HTML","CSS","Javascript","PHP");
    echo toto ($amen);
    ?>
  </body>
</html>

