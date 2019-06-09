<?php 
//①データ取得ロジックを呼び出す
include_once('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索結果</title>
</head>
<body>
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