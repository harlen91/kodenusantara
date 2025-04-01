@extends('admin.layout.app')

@section('title', 'Admin - Data Bank')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bank</h4>
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
                                    <th>Nama Bank</th>
                                    <th>Rekening</th>
                                    <th>Atas Nama Tabungan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bank as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->rekening }}</td>
                                        <td>{{ $data->atas_nama }}</td>
                                        <td>
                                            <form action="{{ route('admin.bank.delete', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.bank.edit', $data->id) }}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('admin.bank.create') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-database-add"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
