<?php
session_start();
session_unset();
session_destroy();

header("Location:\codershiyar\Squadfree\php-chat-app-main\signup.php ");
exit();
?>

