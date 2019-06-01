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
				<form method="get">
					<div class="form-group">
						<label for="InputTitle"></label>
						<input name="title" type="text" class="form-control" id="FilmTitle" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" placeholder="検索キーワード" >
					</div>	
					<div class="form-group">
						<!-- <label for="InputName"></label> -->
						<!-- <input name="name" type="text" class="form-control" id="CategoryName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>"> -->
					</div>	
					<button type="submit" class="btn btn-default" name="search">Search</button>
					<div class="clear-element"></div><!-- 空要素 -->
				</form>
			</div>
			<?php //③取得データを表示する　?>
			<?php if(isset($filmData) && count($filmData)): ?>
			<p class="alert alert-success"><?php echo count($filmData) ?>件見つかりました。</p>		
			<table class="table">
	  		<thead>
	   		  <tr>
		 			  <th>Film.title</th>
		  	  	<th>Category.name</th>
				  </tr>
				</thead>				
				<tbody>
				  <?php foreach($filmData as $row): ?>
						<tr>
							<td><?php echo htmlspecialchars($row['title']) ?></td>
							<td><?php echo htmlspecialchars($row['name']) ?></td>
						</tr>
					<?php endforeach; ?>
			  </tbody>	
			</table>		
			<?php else: ?>
	  	<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
			<?php endif; ?>	
		</body>
  </html>