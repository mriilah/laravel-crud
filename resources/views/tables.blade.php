@extends('layout.main')

@section('container')
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

        </style>
    </head>
    <body>
        <div class="page-content page-container" id="page-content">
                  <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Basic Striped Table</h4>
                          <p class="card-description">
                            
                          </p>
                          <div class="table-responsive">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>
                                    User
                                  </th>
                                  <th>
                                    First name
                                  </th>
                                  <th>
                                    Progress
                                  </th>
                                  <th>
                                    Amount
                                  </th>
                                  <th>
                                    Deadline
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="image">
                                  </td>
                                  <td>
                                    Herman Beck
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $ 77.99
                                  </td>
                                  <td>
                                    May 15, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/office/36/000000/person-female.png" alt="image">
                                  </td>
                                  <td>
                                    Messsy Adam
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $245.30
                                  </td>
                                  <td>
                                    July 1, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/color/36/000000/guest-male.png" alt="image">
                                  </td>
                                  <td>
                                    John Richards
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $138.00
                                  </td>
                                  <td>
                                    Apr 12, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/office/36/000000/person-female.png" alt="image">
                                  </td>
                                  <td>
                                    Peter Meggik
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $ 77.99
                                  </td>
                                  <td>
                                    May 15, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/color/36/000000/person-male.png" alt="image">
                                  </td>
                                  <td>
                                    Edward
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $ 160.25
                                  </td>
                                  <td>
                                    May 03, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/office/36/000000/guest-male.png" alt="image">
                                  </td>
                                  <td>
                                    John Doe
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $ 123.21
                                  </td>
                                  <td>
                                    April 05, 2015
                                  </td>
                                </tr>
                                <tr>
                                  <td class="py-1">
                                    <img src="https://img.icons8.com/color/36/000000/guest-male.png" alt="image">
                                  </td>
                                  <td>
                                    Henry Tom
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    $ 150.00
                                  </td>
                                  <td>
                                    June 16, 2015
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </body>
</html>
@endsection