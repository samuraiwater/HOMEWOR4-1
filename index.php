<?php 
//①データ取得ロジックを呼び出す
include_once('model.php');
$filmData = getFilmData($_GET);
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHPの検索機能</title>
		<link rel="stylesheet" href="../filmsearch/css/style.css">	
	</head>
    <body>
		<div class="container">
			<div class="search_title">
				<h1>- 検索画面 -</h1>
				<h5>sakila database search app</h5>
			</div>			
		<?php //②検索フォーム ?>
			<form action="result.php?" method="get" >
				<div class="form-group">
					<label for="InputTitle"></label>
					<input name="title" type="text" class="form-control" id="FilmTitle" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" placeholder="検索キーワード" >
					<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>
				</div>	
				<button type="submit" class="btn btn-default" name="search">Search</button>
				<div class="clear-element"></div><!-- 空要素 -->
			</form>
		</div>
	</body>
  </html>