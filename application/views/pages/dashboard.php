<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Games</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Developer</th>
					<th>Release Date</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php// var_dump($games) ?>
				<?php foreach($games as $game) : ?>
          <tr>
				<td><?= $game['id'] ?></td>
				<td><?= $game['name'] ?></td>
				<td><?= $game['price'] ?></td>
				<td><?= $game['developer'] ?></td>
				<td><?= $game['release_date'] ?></td>
				<td></td>
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Users</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Adress</th>
					<th>Class</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
		<?php foreach($users as $user):?>
			<tr>
				<td><?=$user["id"]?></td>
				<td><?=$user["nome"]?></td>
				<td><?=$user["endereco"]?></td>
				<td><?=$user["id_turma"]?></td>
				<td><?=$user["data_nasc"]?></td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

