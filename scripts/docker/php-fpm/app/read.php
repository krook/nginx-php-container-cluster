<?php
require('init.php');

$result = $mysqli->query('SELECT * FROM `cats`');
if ($result) {
  print_r($result);
  while ($row = $result->fetch_object()) {
    echo $row->name . ': ' . $row->color . '<br />';
  }
}

if ($redis->get('Cat') == 'Tarball!') {
  echo 'Redis connection success... <br />';
  echo $redis->get('Cat') . '<br />';
}

$keys = $memcached->getAllKeys();
foreach($keys as $item) {
  echo $item . '<br />';
}

echo file_get_contents('/content/uploads/file.txt') . '<br />';
