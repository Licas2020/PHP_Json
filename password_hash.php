<?php

// aplicando criptografia na string "rasmuslerdorf"
 
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

echo"<br>";

echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT);

?>