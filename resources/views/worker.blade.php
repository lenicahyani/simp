@extends('main')

@section('title', 'Costumer')

@section('breadcrumbs')
<a class="nav-link" href="/lapgaji">
<button type="button" class="btn btn-success">+ Tambah Anggota</button>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class= "box box-primary">            
            <table class="table" >
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Posisi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
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
            </table>
        </div>
    </div>
</div>
@endsection