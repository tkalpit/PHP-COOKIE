<?php
setcookie("user", "user1", time() + 3600, '/');

if(count($_COOKIE) > 0) {
    echo "Cookies enabled.";
} else {
    echo "Cookies disabled.";
}
?>
