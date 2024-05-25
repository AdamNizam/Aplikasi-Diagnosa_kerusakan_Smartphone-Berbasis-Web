@include('Header')
<div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('PageHeader')
      <!-- Page Header Ends                              -->
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
              @if (session('success'))
                <div class="alert alert-success inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-up alert-center"></i>
                   <p><b> Succesfully! </b>{{ session('success') }}</p>
                   <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                 @endif
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Form Tambah Data Kronologi Kerusakan</h5>
                  </div>
                  <form class="form theme-form" method="POST" action="/form/kronologi/create">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                        @if (session('success'))
                        <div class="alert alert-success inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-up alert-center"></i>
                          <p><b> Succesfully! </b>{{ session('success') }}</p>
                          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Kronologi</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nama_kronologi" type="text" placeholder="masukkan nama Kronologi" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-start">
                      <div class="col-sm-9">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
@include('Footer')