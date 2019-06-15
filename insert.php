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

echo '$title= '.$title .'<br />';
echo '$category= '.$category .'<br />';

$result = mysqli_query("INSERT INTO film(title), category(name) VALUES('$title', '$name')", $Mysqli);

if (!$sql) {
    exit('データを登録できませんでした。');
    }
$con = mysql_close($con);
    if (!$con) {
    exit('データベースとの接続を閉じられませんでした。');
    }
?>
<?php
    header('Location: index.php');
    exit;
?>

<!-- // $title = $_POST['title'];
// $category = $_POST['category'];
// $sql = "INSERT INTO contents (title, category) VALUES (:title, :category)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
// $stmt = $Mysqli->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
// $params = array(':title' => $title, ':category' => $category); // 挿入する値を配列に格納する
// $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

// echo "<p>title: ".$title."</p>";
// echo "<p>category: ".$category."</p>";
// echo '<p>で登録しました。</p>'; // 登録完了のメッセージ
//?> -->