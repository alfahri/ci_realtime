<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: 	 #ecf9ec">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" style="background-color: white;">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo"><a href="<?php echo base_url('home') ?>">Brand </a></div>

                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li>

                                  <form class="form-inline my-2 my-lg-0 col-sm-12" style="margin-right:300px;">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;height:40px;border-radius:5px;">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> Search</button>
                                  </form>
                                </li>
                                <?php if($this->session->userdata('username') == "") { ?>
                                <li><a href="#" class="nav-link" id="masuk" style="color: #264d00;"><i class="icon-key"></i> Masuk</a></li> 
                                <li><a href="#" class="nav-link text-danger" id="daftar"><i class="icon-edit"></i> Daftar</a></li> 
                              <?php } ?>
                              <?php if($this->session->userdata('username') != "") { ?>
                                <li><a href="#" class="nav-link" id="masuk" style="color: #264d00;"><i class="icon-key"></i> Lihat Profile</a></li> 
                                <li><a href="#" class="nav-link text-danger" id="keluar"><i class="icon-edit"></i> Keluar</a></li> 
                              <?php } ?>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>

        </header>
    </div>

  <!-- Modal Login -->
  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body">
          <form id="formLogin">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnLogin" name="btnLogin" class="btn btn-default">Login</button>
        </div>
      </div>

    </div>
  </div>
  <!-- Modal Daftar -->
  <div id="daftarModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <form id="formDaftar">
          <div class="modal-body">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="password" id="password" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnDaftar" name="btnDaftar" class="btn btn-default">Daftar</button>
          </div>
        </form>
      </div>

    </div>
  </div>