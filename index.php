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

        case 'noel':
            build('try404.php', 'header1.php', 'footer1.php');
            break;

        default:
            build('404.php', 'header1.php', 'footer1.php');
    }
} else {
    build('login.php', 'header1.php', 'footer1.php');
}
    ?>