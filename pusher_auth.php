<?php
include_once 'Pusher.php';

$pusher = new Pusher(
  '39a9a0e004333a66821f',
  '0b1b84b2dd5bb6994919',
  '502250'
);

$id = time();

$presence_data = array(
  'id' => $id
);

echo $pusher->presence_auth(
  $_POST['channel_name'],
  $_POST['socket_id'],
  $id,
  $presence_data
);

exit();
?>
