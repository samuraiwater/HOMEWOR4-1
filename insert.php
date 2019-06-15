<?php
include_once('config_database.php');
$Mysqli = new mysqli($host, $username, $password, $dbname);
if ($Mysqli->connect_error) {
    error_log($Mysqli->connect_error);
    exit;
}

//PDO 
// try {
//     $pdo = new PDO('mysql:host=$host;dbname=$dbname;charset=utf8','$username','$password',
//     array(PDO::ATTR_EMULATE_PREPARES => false));
//     } catch (PDOException $e) {
//      exit('データベース接続失敗。'.$e->getMessage());
//     }

$title = $_POST['title'];
$category = $_POST['category'];

$result = mysqli_query("INSERT ALL 
    INTO film(language_id,title) VALUES('3','$title')
    INTO category(name)VALUES('$category')")$Mysqli);

if (!$sql) {
    exit('データを登録できませんでした。');
    }
$Mysqli = mysql_close($Mysqli);
    if (!$Mysqli) {
    exit('データベースとの接続を閉じられませんでした。');
    }
?>
<?php
    header('Location: index.php');
    exit;
?>