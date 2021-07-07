    <?php
include_once './resources/builder.php';
$trim = trim($_SERVER['REQUEST_URI'], '/');
$url = explode('/', $trim);

if (!empty($url[1])) {
    $url[1] = strtolower($url[1]);
    switch ($url[1]) {

        case 'login':
            build('login.php', 'header1.php', 'footer1.php');
            break;

        case 'bitcoin':
            build('bitcoin.php', 'header1.php', 'footer1.php');
            break;

        case 'home':
            build('home.php', 'header1.php', 'footer1.php');
            break;

        default:
            build('404.php', 'header1.php', 'footer1.php');
    }
} else {
    build('home.php', 'header1.php', 'footer1.php');
}
    ?>