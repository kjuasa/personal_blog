 <!-- Main Content -->
 <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      
        <?php echo form_open_multipart('users/register'); ?><br>
          <h2><?=$title; ?></h2><br>
          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Please enter your full name">
          </div>
          <div class="form-group">
            <label>Zipcode</label>
            <input type="text" class="form-control" name="zipcode" placeholder="Please enter your zipcode">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Please enter a valid email address">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Select a useranme">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Please enter your password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Confirm password">
          </div>
          
          <div class="form-group">
          <br><br><label>Upload Image</label><br>
            <input type="file" name="userfile" size="20"><br><br>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
        
</div>
<br><br>
</div>
