@include('Header')
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" method="POST" action="/login/post">
                @csrf
                <h4>Login</h4>
                <h6>Welcome! Silakan Masuk kedalam System </h6>
                <div class="form-group">
                  <label>username</label>
                  <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o"></i></span>
                    <input class="form-control" id="username" name="username" required autofocus>
                    @error('username')
                      <span>{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group">
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
@include('Footer')