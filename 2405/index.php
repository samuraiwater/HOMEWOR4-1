<?php 
//①データ取得ロジックを呼び出す
include_once('model.php');
$filmData = getFilmData($_GET);
?>

<!DOCTYPE html>
  <html lang="ja">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title>PHP Search Function</title>
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
					</tr>
				<?php endforeach; ?>
				<?php foreach($category as $row): ?>
					<tr>
						<td><?php echo htmlspecialchars($row['category']) ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
			<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
		<?php endif; ?>
	  <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
