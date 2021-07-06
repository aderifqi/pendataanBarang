@extends('layouts.index')

@section('content')
    <div class="text-center">
        <p>
          <button class="btn btn-primary"  type="button" data-toggle="collapse" data-target="#dataBarangCollapse" aria-expanded="false" aria-controls="collapseExample">
            Form Tambah Data Barang
          </button>
          <button class="btn btn-primary"  type="button" data-toggle="collapse" data-target="#jenisBarangCollapse" aria-expanded="false" aria-controls="collapseExample">
            Form Tambah Jenis Barang
          </button>
        </p>
    </div>

    <div class="collapse" id="dataBarangCollapse">
        <div class="card card-body">
            <form action="{{ url('pendataan') }}" method="POST">
                @csrf
                    <div class="form-group row">
                        <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="namaBarang" name="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlahBarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="jumlahBarang" name="jumlah_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="satuanBarang" class="col-sm-2 col-form-label">Satuan Barang</label>
                      <div class="col-sm-10">
                          <select name='satuan_barang' id="satuanBarang" class="form-control">
                            <option selected>Pilihan...</option>
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
                            <option selected>Pilihan...</option>
                            @foreach($jenisBarang as $key=>$value)
                                <option value="{{ $value->id }}">{{ $value->jenis_barang }}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <input type="hidden" name="submit" value="data_barang">
                    <button class="btn btn-info" type="submit">Submit</button>
            </form>
      </div>
    </div>

    <div class="collapse" id="jenisBarangCollapse" >
        <div class="card card-body">
            <form action="{{ url('pendataan/jenis-barang') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputJenisBarang" name="jenis_barang">
                    </div>
                </div>
                <input type="hidden" name="submit" value="jenis_barang">
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
