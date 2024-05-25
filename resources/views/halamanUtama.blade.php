@include('Header')
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
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Kronologi Kerusakan</h5>
                  </div>
                  <div class="card-body">
                    <div class="default-according" id="accordionclose">
                      @foreach($kronologis as $kronologi)
                      <div class="card">
                        <div class="card-header" id="heading1">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapse{{ $kronologi->id }}" aria-expanded="true" aria-controls="heading1"><i class="fa fa-circle-o-notch"></i> {{ $kronologi->nama_kronologi }}</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapse{{ $kronologi->id }}" aria-labelledby="heading1" data-bs-parent="#accordionclose">
                        <div class="card-body">
                            @foreach($kronologi->kerusakan as $kerusakan)
                                <br/>
                                <h5 class="mt-4"><i class="fa fa-check"></i> Nama Kerusakan : {{ $kerusakan->nama_kerusakan }}</h5>
                                <br/>
                                <p><i class="fa fa-check"></i> Keterangan / Deksripsi : {{ $kerusakan->keterangan }}</p>
                                <br/>
                                <h5><i class="fa fa-check"></i> Harga Perbaikian Perangkat : {{ $kerusakan->harga }}</h5>
                                <br/>
                                @if($kerusakan->gambar)
                                <h5>Gambar / Foto</h5>
                                    <img class="img-thumbnail" src="{{ Storage::url($kerusakan->gambar) }}" itemprop="thumbnail" alt="Image description">
                                @else
                                    <p>No image available</p>
                                @endif

                            @endforeach
                        </div>
                    </div>

                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
@include('Footer')