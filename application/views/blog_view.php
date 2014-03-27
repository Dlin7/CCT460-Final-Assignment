<!DOCTYPE html>

<html>
  <head>
    <title>Blog</title>
  </head>

  <body>
    <h1><?php echo $title; ?></h1>
    <?php foreach($posts as $post): ?>
      <h2><?php echo $post['title']; ?></h2>
      <p><?php echo $post['content']; ?></p>
    <?php endforeach; ?>
  </body>
</html>