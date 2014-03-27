<h1><?php echo $Title; ?> | Admin</h1>
<?php foreach($post as $p): ?>
  <?php echo form_open('admin/update_post/' . $p['ID']) ?>
    <label>Title123</label>
    <input type="text" name="Title" value="<?php echo $p['Title']; ?>">
    <label>Content</label>
    <textarea name="Content"><?php echo $p['Content']; ?></textarea>
    <label>Category</label>
    <textarea name="Category"><?php echo $p['Category']; ?></textarea>
    
    <input type="submit" name="submit" value="Save">
    

  </form>
 <?php endforeach; ?>

