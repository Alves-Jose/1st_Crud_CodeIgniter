<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Users</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>users/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i>New</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Adress</th>
					<th>Class</th>
					<th>Date Of Birth</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($users as $user) : ?>
                <tr>
				<td><?= $user['id'] ?></td>
				<td><?= $user['nome'] ?></td>
				<td><?= $user['endereco'] ?></td>
				<td><?= $user['id_turma'] ?></td>
				<td><?= $user['data_nasc'] ?></td>
				<td>
                    <a href="<?= base_url()?>users/edit">
                    <button>
                    <i class="fa fa-address-book"></i>

                    </button>
                    </a>
                </td>
          </tr>
            <?php endforeach; ?>
            
			</tbody>
		</table>
	</div>
</main>