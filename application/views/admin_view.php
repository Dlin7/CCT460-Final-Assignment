<h1><?php echo $Title; ?> | Admin</h1>
<?php echo form_open('admin/create') ?>


  <label>Title</label>
  <input type="text" name="Title">
  <br>
  <label>Content</label>
  <textarea name="Content"></textarea>
  <br>
  <label>Category</label>
  <input type="text" name="Category">
  <input type="submit" name="submit" value="Create">
  
</form>


<h2>Edit Posts</h2> 
    <ul> 
      <?php foreach($posts as $post): ?> 
        <li> Post # <?php echo $post['ID']; ?> <br> <span class="link"><a href="/~ccit1573/CodeIgniter/index.php/admin/update/<?php echo $post['ID']; ?>"><?php echo $post['Title']; ?></a> | <a href="/~ccit1573/CodeIgniter/index.php/admin/delete/<?php echo $post['ID']; ?>">delete post</a></li>
      <?php endforeach; ?> 
    </ul> 