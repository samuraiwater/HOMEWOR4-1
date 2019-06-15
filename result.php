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
    <title>検索結果</title>
    <link rel="stylesheet" href="../filmsearch/css/style.css">
</head>
<body>
    <div class="container">
        <div class="page_title">
	        <h1>- 検索結果画面 -</h1>
	        <h5>sakila database search app</h5>
        </div>
	</div>		
    <form action="index.php" method="get" >
        <button type="submit" class="bt_back" name="search">戻る</button>
    </form>
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
                <td><p class="edit">編集</p></td>
            </tr>
            <?php endforeach; ?>
        </tbody>	
    </table>
    <?php else: ?>
    <p class="alert alert-danger">検索対象は見つかりませんでした。</p>
    <?php endif; ?>	
</body>
</html>