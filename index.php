<?php 
//①データ取得ロジックを呼び出す
include_once('model.php');
$filmData = getFilmData($_GET);
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Search Function</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <h1 class="col-xs-6 col-xs-offset-3">Film Serch form</h1> -->
<h1>Film Serch</h1>
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
<div class="col-xs-6 col-xs-offset-3">
	<?php //③取得データを表示する　?>
	<?php if(isset($filmData) && count($filmData)): ?>
		<p class="alert alert-success"><?php echo count($filmData) ?>件見つかりました。</p>
		<table class="table">
			<thead>
				<tr>
					<th>Film title</th>
					<th>Category</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($filmData as $row): ?>
					<tr>
						<td><?php echo htmlspecialchars($row['title']) ?></td>
						<td><?php echo htmlspecialchars($row['category']) ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
	<?php endif; ?>

</div>
</body>
</html>