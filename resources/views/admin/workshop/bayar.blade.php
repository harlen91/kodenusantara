@extends('admin.layout.app')

@section('title', 'Admin - Data Pembayaran Workshop')

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pembayaran Workshop</h4>
                </div>
                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endsession
                    <div class="table-responsive">
                        <table id="example" class="display table" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Workshop</th>
                                    <th>Nominal Transfer</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bayar as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->workshop->nama }}</td>
                                        <td>@currency($data->nominal)</td>
                                        <td>
                                            <a href="{{ route('admin.workshop.detail', $data->id) }}"
                                                class="btn btn-info">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('admin.workshop.create') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-database-add"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
