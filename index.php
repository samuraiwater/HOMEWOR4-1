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
		<link rel="stylesheet" href="style.css">
		<!-- Bootstrap読み込み（スタイリングのため） -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	</head>
    <body>
		<!-- <h1 class="col-xs-6 col-xs-offset-3">Film Serch form</h1> -->
		<h1>検索画面</h1>
		<h4>sakila database serch app</h4>
		<!-- <div class="col-xs-6 col-xs-offset-3 well"> -->
		<div class="container">
			<?php //②検索フォーム ?>
				<form method="get">
					<div class="form-group">
						<label for="InputName">Title</label>
						<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>">
					</div>	
				<button type="submit" class="btn btn-default" name="search">Search</button>
				</form>
		</div>
        <!-- <div class="col-xs-6 col-xs-offset-3"> -->
		<?php //③取得データを表示する　?>
		<?php $result .= "<td><a href='result.php?id=" . $row[0] . "'>" . htmlspecialchars( $row[1], ENT_QUOTES) . "</a></td>\n";?>
    </body>
  </html>
