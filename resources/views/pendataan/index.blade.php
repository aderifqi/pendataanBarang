@extends('layouts.index')

@section('content')

    <a class="btn btn-info" href="{{ url('/pendataan/create') }}">Create</a>
    <table class="table mt-3">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah Barang</th>
              <th scope="col">Satuan Barang</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php $i=1?>
        @foreach($datas as $key=>$data)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->jumlah_barang }}</td>
                <td>{{ $data->satuan_barang }}</td>
            @foreach($jenisBarang as $jb)
                @if ($data->jenis_barang === $jb)
                    <td>{{ $jb->jenis_barang}}</td>
                @endif
            @endforeach
                <td><a class="btn btn-success" href="{{ url('/pendataan/'. $data->id .'/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('/pendataan/' . $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php $i++?>
        @endforeach
        </tbody>
    </table>

@endsection
