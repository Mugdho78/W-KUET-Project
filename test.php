<?php
$key = 'IICT_KUET';
$Pwd_peppered = Hash_hmac("Sha256", "superadmin1", $key);
$Pwd_hashed = Password_hash($Pwd_peppered, PASSWORD_ARGON2ID);
echo $Pwd_hashed;