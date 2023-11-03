@extends('layout.main')

@section ('container')
<style>
    .button1 {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
</style>
<form role="form" action="{{ url('/cast' .$cast->id ) }}" method="POST">
    @method('patch')
    @csrf
    <div class="button1 card-body">
        <div class="text-right new">
            <a href="/cast" class="btn button1 btn-primary btn-warning"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
    <div class="form-group">
    <label for="exampleInputtext1">Nama edit</label>
    <input type="text" id="nama" name="nama" value="{{ $cast->nama }}" class="form-control"  placeholder="Enter text">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputtext1">Umur</label>
    <input type="number" id="umur" name="umur" value="{{ $cast->umur }}" class="form-control"  placeholder="Enter number">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputtext2">Bio</label>
    <input type="text" id="bio" name="bio" value="{{ $cast->bio }}" class="form-control"  placeholder="Enter text">
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="">
    <button type="submit" class="btn button1 btn-primary">Submit</button>
    </div>
    </form>
@endsection
<script src="https://kit.fontawesome.com/e943d7506e.js" crossorigin="anonymous"></script>