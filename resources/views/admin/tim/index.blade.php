@extends('admin.layout.app')

@section('title', 'Admin - Data Tim')

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tim</h4>
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
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tim as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td><img src="{{ asset('tim/' . $data->foto) }}" class="img-fluid d-block mx-auto"
                                                style="width: 100%;  max-width: 75px; height:auto;" alt=""
                                                srcset="">
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.tim.delete', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.tim.edit', $data->id) }}"
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
                    <a href="{{ route('admin.tim.create') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-database-add"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
