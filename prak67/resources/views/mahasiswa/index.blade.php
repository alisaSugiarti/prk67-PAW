@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>praktikum 6 & 7</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NRP</th>
            <th width="280px"class="text-center">Nama Mahasiswa</th>
            <th width="280px"class="text-center">Email</th>
            <th width="280px"class="text-center">alamat</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($mahasiswa as $row)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $row->NRP }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->alamat }}</td>
            <td class="text-center">
                <form action="{{ route('mahasiswa.destroy',$row->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('mahasiswa.show',$row->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit',$row->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $mahasiswa->links() !!}

@endsection