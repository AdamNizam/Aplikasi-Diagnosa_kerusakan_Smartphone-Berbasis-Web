<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Data</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('PageHeader')
      <!-- Page Header Ends-->
      
        <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
       @include('Sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
            <div class="col-sm-12">
            @if(session('success'))
                    <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                      <p>{{ session('success') }}</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                  @endif
                <div class="card">
                  <div class="card-header">
                    <h5>Data Kerusakan & Kronologi</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>No</th>
                            <th>Kronologi</th>
                            <th>Gambar</th>
                            <th>Nama Kerusakan</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Created</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                            use Illuminate\Support\Str;
                        @endphp
                          @foreach($kerusakans as $krs )
                          <tr>
                          <td>
                          <button class="btn btn-outline-secondary-2x rounded-pill m-1" type="button" data-bs-toggle="modal" data-bs-target="#editModal{{ $krs->id }}">
                              <i class="icofont icofont-pencil-alt-5"></i>
                          </button>
                            <form action="{{ route('kerusakan.destroy', $krs->id) }}" method="POST">
                               @csrf
                               @method('DELETE')
                                <button class="btn btn-outline-danger-2x rounded-pill m-1" type="submit">
                                  <i class="icofont icofont-file-excel"></i>
                                </button>
                            </form>
                          </td>
                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $krs->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ route('kerusakan.update', $krs->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body"> 
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-3 col-form-label">Nama Kerusakan</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" name="nama_kerusakan" type="text" value="{{ $krs->nama_kerusakan }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label class="col-sm-3 col-form-label">Keterangan / Deskripsi</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="keterangan" rows="5" required>{{ $krs->keterangan }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-3 col-form-label">Upload Gambar</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="file" name="gambar">
                                                                <img src="{{ Storage::url($krs->gambar) }}" alt="" height="50" class="mt-2">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-3 col-form-label">Harga</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" value="{{ $krs->harga }}" name="harga" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label">Pilih Kronologi Kerusakan</label>
                                                            <div class="col-sm-9">
                                                                <select class="custom-select form-select" name="kronologi_id" required>
                                                                    <option value="" disabled>Pilih Kronologi</option>
                                                                    @foreach($kerusakans as $item)
                                                                        <option value="{{ $item->id }}" {{ $krs->kronologi_id == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->kronologi->nama_kronologi }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-secondary" type="submit">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <td>{{$krs->id}}</td>
                            <td>{{$krs->kronologi->nama_kronologi }}</td>
                            <td>
                                <img class="img-50 rounded-circle" src="{{ Storage::url($krs->gambar) }}" height="50px">
                            </td>
                            <td>{{ $krs->nama_kerusakan}}</td>
                            <td>{{ Str::limit($krs->keterangan, 25) }}</td>
                            <td>{{ $krs->harga}}</td>
                            <td>{{$krs->updated_at}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>