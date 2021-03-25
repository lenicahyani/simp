@extends('main')

@section('title', 'Costumer')

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
									<h3 class="panel-title">Laporan Costumer</h3>
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Kode Proyek</th>
												<th>Tanggal Proyek</th>
												<th>Nama Costumer</th>
												<th>Nama Proyek</th>
											
											</tr>
										</thead>
									
									</table>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
						</div>
						<div class="col-md-6">

                    
@endsection
