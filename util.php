<?php


//Iterando hasta encontrar la clave
function existe_usuario(string $user, array $usuarios): bool {   
    foreach ($usuarios as $key => $value) {
          if ($key === $user)
              return true;
    }
      return false;
  }
  
  // Con array_key_exists
  // function existeUser(string $user, array $usuarios): bool
  // {
  //     return array_key_exists($user, $usuarios);
  // }

  
  function es_pwd_correcta(string $user, string $pwd, array $usuarios): bool
{
    return ($usuarios[$user]["pwd1"] === $pwd) || ($usuarios[$user]["pwd2"] === $pwd);
}