<?php
include_once('config_database.php');
$Mysqli = new mysqli($host, $username, $password, $dbname);
if ($Mysqli->connect_error) {
    error_log($Mysqli->connect_error);
    exit;
}	

$title   = $_REQUEST['titel'];
$category = $_REQUEST['name'];

$result = mysql_query("INSERT INTO film(title, name) VALUES('$title', '$name')", $con);
if (!$result) {
   exit('データを登録できませんでした。');
    }
$con = mysql_close($con);
if (!$con) {
   exit('データベースとの接続を閉じられませんでした。');
    }
?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>





// $title = $_POST['title'];
// $category = $_POST['category'];

// $sql = "INSERT INTO contents (title, category) VALUES (:title, :category)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
// $stmt = $Mysqli->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
// $params = array(':title' => $title, ':category' => $category); // 挿入する値を配列に格納する
// $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

// echo "<p>title: ".$title."</p>";
// echo "<p>category: ".$category."</p>";
// echo '<p>で登録しました。</p>'; // 登録完了のメッセージ
?>
