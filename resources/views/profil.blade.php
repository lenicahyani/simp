@extends('main')

@section('title', 'Profil Saya')

@section('breadcrumbs')
<div class="breadcrumbs d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th> User Name</th>
                            <th>Email</th>
                        </tr>
                            @foreach($data_profil as $item)
                            <tr>
                                <td>{{$item['name']}} </td>
                                <td>{{$item['email']}} </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
