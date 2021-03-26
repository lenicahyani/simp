@extends('main')

@section('title', 'Laporan Progres')

@section('breadcrumbs')
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
				<th>No</th>
				<th>Kode Tugas</th>
				<th>Kode Proyek</th>
				<th>Nama Proyek</th>
				<th>Nama Tugas</th>
                <th>Deskripsi</th>
				<th>Tim</th>
				<th>Status</th>					
				<th>Progres</th>	
				</tr>
		</thead>	
		<tbody>
            <tr>
            <th scope="row">1</th>			
            <td>TS001</td>
            <td>SIA001</td>
            <td>SI Akuntansi</td>
			<td>Analisa Lapangan</td>
			<td>-</td>
			<td>Ivan, Bowo</td>
			<td>Dalam Proses</td>
			<td>30%</td>
            </tr>
            <tr>
            <th scope="row">1</th>			
            <td>TS002</td>
            <td>SIA002</td>
            <td>SI Akuntansi</td>
			<td>Analisa Lapangan</td>
			<td>-</td>
			<td>Ivan, Rudi</td>
			<td>Dalam Proses</td>
			<td>60%</td>
            </tr>
        </tbody>						
		</table>
	</div>
	</div>
<!-- END BORDERED TABLE -->
</div>
<div class="col-md-6">                    
@endsection
