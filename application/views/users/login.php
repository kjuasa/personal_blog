<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo form_open_multipart('users/login'); ?><br>
          <h2><?=$title; ?></h2><br>
        <?php if($this->session->flashdata('user_login_fail')) :?>
            <?php echo '<p class="alert alert-danger">'. $this->session->flashdata('user_login_fail').'</p>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('user_login_out')) :?>
            <?php echo '<p class="alert alert-success">'. $this->session->flashdata('user_login_out').'</p>'; ?>
        <?php endif; ?>
          <?php echo validation_errors(); ?>
          
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Please enter your password">
          </div>
          
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
  </div>
</div><br><br><br><br>