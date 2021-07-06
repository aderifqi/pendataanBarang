@extends('layouts.index')

@section('content')
  <div class="" id="dataBarangCollapse">
      <div class="card card-body">
        <form action="{{ url('pendataan/jenis-barang/' . $model->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group row">
                    <label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputJenisBarang" name="jenis_barang" value="{{ $model->jenis_barang }}">
                    </div>
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
    </div>
  </div>
@endsection
