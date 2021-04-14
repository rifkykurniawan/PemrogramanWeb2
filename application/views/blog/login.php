  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/')?>img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                  <div class="page-heading">
                      <h1>Login</h1>
                      <span class="subheading">Login With Your Account</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- Main Content -->
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <?php if ($this->session->flashdata('notifikasi')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> <?php echo $this->session->flashdata('notifikasi'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php endif ; ?>

              <!-- form login -->

              <form method="POST" action="<?php echo site_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" value="<?php echo set_value('email'); ?>" type="email" class="form-control <?php echo (form_error('email'))? 'is-invalid': '' ?>" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo form_error('email'); ?>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" value="<?php echo set_value('password'); ?>" type="password" class="form-control <?php echo (form_error('password'))? 'is-invalid': '' ?>" 
                            id="exampleInputPassword">
                    <?php echo form_error('password'); ?>
                  </div>
                  
                  <button type="submit" class="btn btn-primary btn-block mt-5">Login</button>
              </form>

          </div>
      </div>
  </div>