@extends('layout.main')

@section('container')
    
        <div class="card">
            <div class="card-header">
                Detail Pemain Film
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="col-lg-12 grid-margin stretch-card">
                    
                      <div class="card-body">
                        
                          <div class="new">
                              <a href="emp/create" class="button1 btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Tambah</a>
                          </div></br>
                          <table id="example1" class="row table">
                                  <tr>
                                    <th style="text-align:center; width:10% ">
                                      Nama
                                    </th>
                                    <td>{{ $cast->nama }}</td>
                                  </tr>
                                  <tr>
                                    <th style="text-align:center; width:10% ">
                                        Judul
                                    </th>
                                    <td>{{ $film->judul }}</td>
                                </tr>
                          </table>
                        
                      </div>
                    
                </div>
      </div>
        </div>
    
@endsection