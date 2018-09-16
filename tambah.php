<section class="content-header">
  <h1>
    Tambah Admin
  </h1>
</section>

<section class="content">
  <div class="row">
	<section class="col-lg-11 connectedSortable">
    <div class="box box-info">
      <div class="box-header">
        <i class="fa fa-users"></i>
        <h3 class="box-title">Form Tambah Admin</h3>
      </div>
      <div class="box-body">
        <form action="?page=prosAdmin" method="post" id="FormTambah">
		<div class="form-group row">
			<label for="nama" class="col-sm-3 col-form-label">Nama</label>
			<div class="col-sm-9">
			    <input class="form-control" placeholder="Masukkan Nama" name="nama" type="text" autofocus required>
			</div>
		</div>
		<div class="form-group row">
			<label for="pass" class="col-sm-3 col-form-label">Password</label>
			<div class="col-sm-9">
			    <input class="form-control" placeholder="Masukkan Password" name="pass" type="password" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="passCek" class="col-sm-3 col-form-label">Ulangi Password</label>
			<div class="col-sm-9">
			    <input class="form-control" placeholder="Ulangi Password" name="passCek" type="password" required>
			</div>
		</div>
        <div class="box-footer clearfix">
			<button type="submit" class="pull-right btn btn-primary" id="tambah">Tambah</button>
        </div>
        </form>
      </div>
    </div>
	</section>
  </div>

</section>

