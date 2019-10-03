<?php
function  enctriptarpassword($password){
  return password_hash ($password, PASSWORD_DEFAULT);
};


?>
