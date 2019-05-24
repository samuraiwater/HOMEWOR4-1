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
	
	$where = [];
	if(!empty($fdatas['title'])){
		$where[] = "title like '%{$fdatas['title']}%'";
	}
	if(!empty($params['name'])){
		$where[] = 'name = ' . $params['name'];
	}
	if($where){
		 $whereSql = implode(' AND ', $where);
			$sql="SELECT film.title,category.name 
			FROM film 
			JOIN film_category ON film.film_id = film_category.film_id 
			JOIN category ON film_category.category_id = category.category_id 
			ORDER BY film.film_id ";
	}
	
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select * from film where ' . $whereSql ;
	// }else{
	// 	$sql = 'select * from film';
	// }

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

    
   