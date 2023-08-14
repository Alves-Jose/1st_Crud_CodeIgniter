<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title?></h1>
      </div>

			<div class="col-md-12">
					
					<form action="<?= base_url() ?>users/store" method="post">
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Name" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="adress">Adress</label>
							<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Adress" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="class">Class</label> <br>
							<select id="id_turma" name="id_turma" class="form-control">
							<option id="null" value=""></option>
							<option id="class1Option" value="1">Class 1</option>
							<option id="class2Option" value="2">Class 2</option>
							</select>
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="date">Date of Birth</label>
							<input type="text" class="form-control" name="data_nasc" id="data_nasc" placeholder="Date of Birth" value="" required>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
