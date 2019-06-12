<?php 
// ①DB接続しSQLを発行してデータを取得
include_once('config_database.php');
$Mysqli = new mysqli($host, $username, $password, $dbname);
if ($Mysqli->connect_error) {
    error_log($Mysqli->connect_error);
    exit;
}	
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">	
    <title>新規登録</title>
    <link rel="stylesheet" href="../filmsearch/css/style.css">
</head>
<body>
    <div class="container" >
        <div class="page_title">
	        <h1>- 新規登録画面 -</h1>
	        <h5>sakila database search app</h5>
        </div>
        <div class="input_area">
            <form method="post" action='test.php'>
                <div class="movie_title" >Title<input class="title_input" type="text" name="title"></div>
                <div class="category_name">Category</div>
                <?php 
                    $resultSet = $Mysqli->query('SELECT * FROM category');
                    $color1 = "#e6e6e6";
                    $color2 = "blue";
                    $color = $color1;
                ?>
                <select name = "category" class = "pulldown">
                    <?php 
                        while($rows = $resultSet -> fetch_assoc()){
                            $color === $color1 ? $color = $color2 : $color = $color1;
                            $name = $rows['name'];
                            echo "<option value='$name'>$name</option>";
                        }
                    ?>
                </select>                           
            </form>
            <form method="post" action="index.php">
                <input type="submit" class="bt_register" name="add" value="登録">
            </form>
            <form method="post" action="index.php">
                <button type="submit" class="bt_cancel" name="cancel">キャンセル</button>
            </form>
        </div>
	</div>		    
</body>
</html>



 
