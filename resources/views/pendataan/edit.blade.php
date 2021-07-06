@extends('layouts.index')

@section('content')
  <div class="" id="dataBarangCollapse">
      <div class="card card-body">
        <form action="{{ url('/pendataan/' .$model->id ) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="form-group row">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaBarang" name="nama_barang" value="{{ $model->nama_barang }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlahBarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jumlahBarang" name="jumlah_barang" value="{{ $model->jumlah_barang }}">
                </div>
            </div>
            <div class="form-group row">
              <label for="satuanBarang" class="col-sm-2 col-form-label">Satuan Barang</label>
              <div class="col-sm-10">
                  <select name='satuan_barang' id="satuanBarang" class="form-control">
                    <option value="{{ $model->satuan_barang }}" selected>{{ $model->satuan_barang }}</option>
                    <option value='Lusin'>Lusin</option>
                    <option value='Gross'>Gross</option>
                    <option value="Kodi">Kodi</option>
                    <option value="Rim">Rim</option>
                  </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="jenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
              <div class="col-sm-10">
                  <select name='jenis_barang' id="jenisBarang" class="form-control">

                    @foreach($jenisBarang as $key=>$value)
                      @if ($value->id === $model->jenis_barang)
                        <option value="{{ $value->id }}" selected>{{ $value->jenis_barang }}</option>
                        @continue
                      @endif
                        <option value="{{ $value->id }}">{{ $value->jenis_barang }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <button class="btn btn-info" type="submit">Submit</button>
          </form>
    </div>
  </div>
@endsection
