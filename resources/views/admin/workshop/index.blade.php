@extends('admin.layout.app')

@section('title', 'Admin - Data Workshop')

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Workshop</h4>
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
                                    <th>Workshop</th>
                                    <th>Harga</th>
                                    <th>Thumbnail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workshop as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>@currency($data->harga)</td>
                                        <td><img src="{{ asset('thumbnail/' . $data->thumbnail) }}"
                                                class="img-fluid d-block mx-auto"
                                                style="width: 100%;  max-width: 75px; height:auto;" alt=""
                                                srcset="">
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.workshop.delete', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.workshop.edit', $data->id) }}"
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
                    <a href="{{ route('admin.workshop.create') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-database-add"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
