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
			<div class="page_title">
				<h1>- 検索画面 -</h1>
				<h5>sakila database search app</h5>
			</div>			
		<?php //②検索フォーム ?>
			<form action="result.php" method="get" >
				<div class="form-group">
					<label for="InputTitle"></label>
					<input name="title" type="text" class="form-control" id="FilmTitle" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" placeholder="検索キーワード" >
					<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>
				</div>	
				<button type="submit" class="bt_search" name="search">検索</button>
			</form>
			<form action="add_movies.php" >
				<button type="submit" class="bt_new_add" name="new_add">新規登録</button>
			</form>
		</div>
	</body>
  </html>