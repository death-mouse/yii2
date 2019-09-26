<h1>Обзор событий</h1>
<table class="table table-dark">
	<thead>
		<tr>
			<th scope="col">Название</th>
			<th scope="col">Описание</th>
			<th scope="col">Дата начала</th>
			<th scope="col">Дата окончания</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($events as $event):?>
		<tr>
			<td><?= $event['title'] ?></td>
			<td><?= $event['description'] ?></td>
			<td><?= date('d.m.y',$event['dayStart']) ?></td>
			<td><?= date('d.m.y', $event['dayEnd']) ?></td>
		</tr>
<?php endforeach?>
	</tbody>
</table>