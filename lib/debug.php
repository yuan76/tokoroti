<?php
  function pr($par){
    echo '<pre>';
      print_r($par);
    echo'</pre>';
    exit();
  }
  function vd($par){
    echo '<pre>';
      var_dump($par);
    echo'</pre>';
    exit();
  }

?>
