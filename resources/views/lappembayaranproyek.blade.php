@extends('main')

@section('title', 'Laporan Pembayaran Proyek')

@section('breadcrumbs')
@endsection

@section('content')
<!-- BORDERED TABLE -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Laporan Pembayaran Proyek</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Proyek</th>
				<th>Tanggal</th>
				<th>Customer</th>
                <th>Nama Proyek</th>
                <th>Nilai Proyek</th>
				<th>Termin Ke</th>
				<th>Tanggal Bayar</th>					
				<th>Total Bayar</th>                              	
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
			<td>1</td>
			<td>12 Januari 2021</td>
			<td>2.000.000</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
            <th scope="row">2</th>	
            <td>SIA001</td>            		
            <td>11 Januari 2021</td>
            <td>Wiwik</td>
			<td>SI Akuntansi</td>
			<td>10.000.000</td>
			<td>2</td>
			<td>22 Januari 2021</td>
			<td>3.000.000</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
            <th scope="row">3</th>	
            <td>SIA001</td>            		
            <td>11 Januari 2021</td>
            <td>Wiwik</td>
			<td>SI Akuntansi</td>
			<td>10.000.000</td>
			<td>3</td>
			<td>2 Februari 2021</td>
			<td>5.000.000</td>
            </tr>
        </tbody>
        <thead >
			<tr>
            <th><th><th><th><th><th><th><th>Total Pembayaran</th></th></th></th></th></th>  
            <td>10.000.000</td> -->
            </tr>
        </thead>						
		</table>
	</div>
	</div>
<!-- END BORDERED TABLE -->
</div>
<div class="col-md-6">                    
@endsection
