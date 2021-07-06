@extends('layouts.index')

@section('content')

    <a class="btn btn-info" href="{{ url('/pendataan/create') }}">Create</a>
    <table class="table mt-3">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php $i=1?>
        @foreach($datas as $key=>$data)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->jenis_barang }}</td>
                <td><a class="btn btn-success" href="{{ url('/pendataan/jenis-barang/'. $data->id .'/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('/pendataan/jenis-barang/' . $data->id) }}" method="post">
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
