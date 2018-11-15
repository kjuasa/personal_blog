<div class="col-lg-8 col-md-10 mx-auto">
    <?php echo form_open_multipart('admin/dashboard/create'); ?><br>
        <h2>Create New Post</h2><br>
        <?php echo validation_errors(); ?>
        <div class="form-group">
        <label>Add Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
        <label>Body</label>
        <textarea name="body" id="editor1" placeholder="Enter post content" class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group">
        <label>Select Category</label><br>
        <select class="form-control" name="category_id"><br><br>
            <?php foreach($categories as $category) : ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group">
        <br><br><label>Upload Image</label><br>
        <input type="file" name="userfile" size="20"><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>