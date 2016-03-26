<?php
  echo 'Hello, world!';
  $memcache = new Memcache;
  $key = "test";
  $data = $memcache->get($key);
  if ($data === false) {
  	$data = "ttttttttttttttttt";
  	$memcache->set($key, $data);
  }else{
  	echo $data;
  }
?>
