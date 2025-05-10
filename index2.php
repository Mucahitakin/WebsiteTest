<?php
// Work test.php or about.php or contact.php file 
$page = base64_decode($_GET['page']);
$allowed_pages = ['test.php', 'about.php', 'contact.php']; 

if (preg_match('/^[a-zA-Z0-9-_]+\.php$/', $page) && in_array($page, $allowed_pages)) {
    include($_SERVER['DOCUMENT_ROOT'] . '/test/' . $page);
} else {
    echo "Geçersiz sayfa.";
}
?>


