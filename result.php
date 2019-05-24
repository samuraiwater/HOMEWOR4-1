<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索結果</title>
</head>
<body>
        <td><a href='result.html?id=2'>検索結果</a></td>

		<?php if(isset($filmData) && count($filmData)): ?>
		<p class="alert alert-success"><?php echo count($filmData) ?>件見つかりました。</p>		
		<table class="table">
			<thead>
				<tr>
					<th>Film.title</th>
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