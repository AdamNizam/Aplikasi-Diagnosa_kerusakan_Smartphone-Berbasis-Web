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
              @if(session('success'))
                    <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                      <p>{{ session('success') }}</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                  @endif
                  @if(session('error'))
                    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg>
                        <p> {{ session('error') }}</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-secondary dark alert-dismissible fade show" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                  @endif
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Form Tambah Data Kerusakan</h5>
                  </div>
                  <form class="form theme-form" action="/form/kerusakan/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Kerusakan</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nama_kerusakan" type="text" placeholder="nama kerusakan">
                            </div>
                          </div>
                          <div class="row mb-2">
                            <label class="col-sm-3 col-form-label">keterangan / Deskripsi</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="keterangan" rows="5" cols="5" placeholder="Deskripsi solusi kerusakan yang dapat menyelesaikan masalah"></textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Upload Gambar</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="file" name="gambar">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" placeholder="Harga total perbaikan" name="harga">
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-3 col-form-label">Pilih Kronologi Kerusakan</label>
                            <div class="col-sm-9">
                              <select class="custom-select form-select"  name="kronologi_id">
                              <option selected="">Pilih Kronologi</option>
                              @foreach($kronologi as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kronologi }}</option>
                                @endforeach
                              </select>
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