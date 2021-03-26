@extends('main')

@section('title', 'Costumer')

@section('breadcrumbs')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
+ Tambah Proyek
</button>
<!-- <a class="nav-link" href="/createworker">
<button type="button" class="btn btn-success">+ Tambah Anggota</button> -->
@endsection

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Proyek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Kode Proyek</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Customer</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Wiwik</option>
        <option>Agus</option>
        <option>Reni</option>
        <option>Dani</option>
        </select>
    </div>  
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Proyek</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tanggal Proyek</label>
        <input type="date" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tanggal Estimasi</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nilai Proyek</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Termin</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div>     
    <div class="form-group">
        <label for="exampleFormControlInput1">Pimpinan Proyek</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="formControlRange">Progres</label>
        <input type="range" class="form-control-range" id="formControlRange">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Belum Diproses</option>
        <option>Sedang Diproses</option>
        <option>Selesai</option>
        <option>Close</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Total Pembayaran</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Total Gaji</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    </form>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- BORDERED TABLE -->
<div class="panel">
	<div class="panel-body">
		<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
                <th>No</th>
				<th>Kode Proyek</th>
				<th>Tanggal Proyek</th>
				<th>Costumer</th>
				<th>Nama Proyek</th>
                <th>Nilai Proyek</th>
                <th>Termin</th>
                <th>Tanggal Estimasi</th>
				<th>Pimpinan Proyek</th>
				<th>Progres</th>
				<th>Status</th>		
                <th>Total Pembayaran</th>	
                <th>Total Gaji</th>
				</tr>
		</thead>	
		<tbody>
            <tr>
            <th scope="row">1</th>
            <td>SIA001</td>
            <td>11 Januari 2021</td>
			<td>Wiwik</td>
            <td>SI Akuntansi</td>
            <td>10.000.000</td>
            <td>3</td>
            <td>11 April 2021</td>
            <td>Tiar</td>
            <td>30%</td>
            <td>Dalam Proses</td>
            <td>10.000.000</td>
            <td>5.000.000</td>
            </tr>
            <tr>
            <th scope="row">1</th>
            <td>SIA001</td>
            <td>11 Januari 2021</td>
			<td>Wiwik</td>
            <td>SI Akuntansi</td>
            <td>10.000.000</td>
            <td>3</td>
            <td>11 April 2021</td>
            <td>Tiar</td>
            <td>30%</td>
            <td>Dalam Proses</td>
            <td>10.000.000</td>
            <td>5.000.000</td>
            </tr>
        </tbody>						
		</table>
	</div>
	</div>
<!-- END BORDERED TABLE -->
</div>
<div class="col-md-6">                    
@endsection
