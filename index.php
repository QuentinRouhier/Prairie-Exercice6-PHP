<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function tableau($array){
      sort($array);
      return $array;
    }

    $chameau = array("HTML","CSS","Javascript","PHP");
    print_r (tableau($chameau));

    function toto($arra){
      $titi = implode($arra, ",");
      return $titi;
    }
    $amen = array("HTML","CSS","Javascript","PHP");
    echo toto ($amen);
    ?>
  </body>
</html>
