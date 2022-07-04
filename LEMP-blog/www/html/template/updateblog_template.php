<!DOCTYPE html>
<html>
<head>
  <title>Coke Blog</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/static/css/updateblog.css">
</head>

<body>
  <div class = "header-inner">
    <<div class = "blog-title"> <h1> <a href="/index.php">Coke Blog </a> </h1> </div>
    <div class="blog-desc"> <h6> Hello, I am Coke, that made by coke-cola company. I like to be drinked :). </h6> </div>
  </div>
  <br><br>
  <div class = "blog-posts">
    <h4 style="text-align:center"> Blog Posts </h4>
    <?php if ($data->num_rows > 0) { 
      while($row = $data->fetch_assoc()) { ?>
      <li>
        <form method="post" action="/controller/updatedeletepost.php">
         <textarea name = "blog_title" rows="1" cols="50" class = "blog-post-title" required ><?php print_r($row['post_title']); ?></textarea>
         <input type="hidden" name = "id" value=<?php echo $row['id']?>>
         <div class="blog-post-details">
          <h6>Last Modified Date : <?php echo date('F , j , Y',strtotime($row['data'])); echo " Author : " . $row['author']; ?></h6>
          <textarea type="text" rows="10" cols="50" name = "post_body" class = "post-body" required><?php echo $row['post_body']; ?></textarea>
        </div>
        <input type="submit" name = "action" value="UpdatePost"/>
      </form>
    </li>  
    <?php } 
  }?>

</div>
</body>
</html>