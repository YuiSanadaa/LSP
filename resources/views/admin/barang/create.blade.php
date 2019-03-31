@extends('layouts.master')
@section('content')
<div class="card col">
  <div class="card-body">
    <h1><center>Tambah Barang</center></h1>
    <hr>
    <br>
    <form class="form-sample" method="POST" action="{{route('barang.store')}}">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Barang</label>
            <div class="col-sm-9">
              <input type="text" name="nambar" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
              <input type="text" name="kodbar" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Unit</label>
            <div class="col-sm-9">
              <select class="form-control" name="id_unit">                
                @foreach($semuaunit as $unit)
                <option value="{{$unit->id}}">{{$unit->unit}}</option>
                @endforeach                
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Expired</label>
            <div class="col-sm-9">
              <input type="date" name="ekspayer" class="form-control" placeholder="dd/mm/yyyy">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-9">
              <select class="form-control" name="id_kategori">
                @foreach($semuakategori as $kategori)
                <option value="$kategori->id">{{$kategori->kategori}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">PPN</label>
            @foreach($semuappn as $ppn)
            <div class="col-sm-4">
              <div class="form-radio">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="id_ppn" id="membershipRadios1" value="{{$ppn->id}}" checked=""> {{$ppn->ppn}}
                  <i class="input-helper"></i>
                </label>
              </div>
            </div>
            @endforeach
          </div>
        </div>        
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">stock</label>
            <div class="col-sm-9">
              <input type="number" name="stok" class="form-control" style="width: 100px">
            </div>
          </div>
        </div>                
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Harga Awal</label>
            <div class="col-sm-9">
              <input type="text" name="hargaA" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Harga Akhir</label>
            <div class="col-sm-9">
              <input type="text" name="HargaB" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row justify-content-center">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>  
@endsection