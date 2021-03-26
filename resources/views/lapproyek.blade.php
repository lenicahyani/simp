@extends('main')

@section('title', 'Costumer')

@section('breadcrumbs')
@endsection

@section('content')
<!-- BORDERED TABLE -->

<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Laporan Proyek</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
                <th>No</th>
				<th>Kode Proyek</th>
				<th>Nama Proyek</th>
				<th>Anggota Tim</th>
				<th>Posisi</th>
				<th>Nilai Proyek</th>
                <th>Progres</th>
				<th>Pembayaran</th>
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
