@extends('main')

@section('title', 'Laporan Progres')

@section('breadcrumbs')
<div class="breadcrumbs d-sm-flex align-items-center justify-content-between mb-4">
 
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection

@section('content')
<!-- BORDERED TABLE -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Laporan Progres</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>Kode Tugas</th>
				<th>Kode Proyek</th>
				<th>Nama Proyek</th>
                <th>Deskripsi</th>
				<th>Tim</th>
				<th>Status</th>					
				<th>Progres</th>	
				</tr>
		</thead>	
		<tbody>
            <tr>
            <th scope="row">1</th>
            <td>23-03-2021</td>
            <td>Otto</td>
			<td>Otto</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            </tr>
        </tbody>						
		</table>
	</div>
	</div>
<!-- END BORDERED TABLE -->
</div>
<div class="col-md-6">                    
@endsection
