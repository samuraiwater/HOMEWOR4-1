<?php
function getFilmData($fdatas){
	//DBの接続情報
	include_once('config_database.php');
	//DBコネクタを生成
	$Mysqli = new mysqli($host, $username, $password, $dbname);
	if ($Mysqli->connect_error) {
		error_log($Mysqli->connect_error);
		exit;
	}
	
	//入力された検索条件からSQl文を生成	
	if (isset($_GET['title'])) {
		$title = htmlspecialchars($_GET['title']);
		$title_value = $title;
	  }else {
		$title = '';
		$title_value = '';
	}
	$sql = "SELECT film.title,category.name 
	FROM film 
	JOIN film_category ON film.film_id = film_category.film_id 
	JOIN category ON film_category.category_id = category.category_id
	WHERE film.title LIKE '%$title%'
	ORDER BY film.film_id";  

    //SQL文を実行する
	$filmDataSet = $Mysqli->query($sql);

	//扱いやすい形に変える
    $result = [];
    while($row = $filmDataSet->fetch_assoc()){
        $result[] = $row;
	}
	return $result;
}
?>