@extends('layout.main')

@section ('container')
<html>
    <head>
        
    <style>
    body {
     background-color: #f9f9fa
    }

    .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
    }

    @media (max-width:991.98px) {
        .padding {
            padding: 1.5rem
        }
    }

    @media (max-width:767.98px) {
        .padding {
            padding: 1rem
        }
    }

    .padding {
        padding: 5rem
    }

    .card {
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 0
    }

    .card .card-title {
        color: #000000;
        margin-bottom: 0.625rem;
        text-transform: capitalize;
        font-size: 0.875rem;
        font-weight: 500
    }

    .card .card-description {
        margin-bottom: .875rem;
        font-weight: 400;
        color: #76838f
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table,
    .jsgrid .jsgrid-table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    .table thead th,
    .jsgrid .jsgrid-table thead th {
        border-top: 0;
        border-bottom-width: 1px;
        font-weight: 500;
        font-size: .875rem;
        text-transform: uppercase
    }

    .table td,
    .jsgrid .jsgrid-table td {
        font-size: 0.875rem;
        padding: .875rem 0.9375rem
    }

    .badge {
        border-radius: 0;
        font-size: 12px;
        line-height: 1;
        padding: .375rem .5625rem;
        font-weight: normal
    }
    
    .progress {
        border-radius: 3px;
        height: 8px;
        margin-top:7px;
    }

    .button1 {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

    </style>
    </head>
    <body>
        <div class="body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <div class="page-content page-container" id="page-content">
                  <div class="col-lg-12 grid-margin stretch-card">
                      <div class="button1 card">
                        <div class="card-body">
                          <div class="">
                            <div class="new">
                                <a href="emp/create" class="button1 btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Tambah</a>
                            </div></br>
                            <table id="example1" class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align:center; width:10% ">
                                            No
                                        </th>
                                        <th style="text-align:center; width:20% ">
                                            Nama
                                        </th>
                                        <th style="text-align:center; width:10% ">
                                            Umur
                                        </th>
                                        <th style="text-align:center; width:40% ">
                                            Bio
                                        </th>
                                        <th style="text-align:center; width:20% ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @forelse ($cast as $key => $value)
                                    <tr>
                                        <td style="font-weight: bold; text-align:center; ">{{ $key+1 }}</td>
                                        <td style="font-weight: bold; text-align:center; ">{{ $value->nama }}</td>
                                        <td style="font-weight: bold; text-align:center; ">{{ $value->umur }}</td>
                                        <td style="font-weight: bold; text-align:center; ">{{ $value->bio }}</td>
                                        <td style="font-weight: bold; text-align:center; ">
                                            <a href="" data-toggle="modal" data-target="#modalLoginForm" class="button1 btn btn-default btn-sm"><i class="fa-solid fa-building-user"></i></i></a>
                                            <a href="{{ url('emp/edit/' . $value->id) }}" class="d-inline button1 btn btn-info btn-sm"><i class="fa-solid fa-pen fa-fade"></i></i></a>
                                            <form action="{{ url('/cast' . $value->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="button1 btn btn-danger btn-sm"><i class="fa-solid fa-eraser fa-fade"></i></button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Data pengguna</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            
                                            <div class="ml-3 modal-body">
                                                <h5>Nama</h5>
                                                <p > {{ $value->nama }}</p>
                                                <hr>
                                                <h5>Umur</h5>
                                                <p > {{ $value->umur }}</p>
                                                <hr>
                                                <h5>Bio</h5>
                                                <p > {{ $value->bio }}</p>
                                                <hr>
                                            </div>
                                        </div>
                                        
                                    </div>
        
                                    @empty
                                    <tr>
                                        <td colspan="4">no data</td>
                                    </tr>
                                    @endforelse
                                </tbody> 
                                
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
        </div>
    </body>
                            
                        

@endsection
@push('scripts')
<script src="{{asset('adminLTE')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="https://kit.fontawesome.com/e943d7506e.js" crossorigin="anonymous"></script>
<script>
$(function () {
$("#example1").DataTable();
});
</script>
@endpush
