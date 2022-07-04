<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Coke Notes</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../static/css/blog.css">
</head>

<body>
    <div class = "header-inner">
    <a href="/template/newpost_template.php"> Post </a>
    
    <div class = "blog-title"> <h1> <a href="../index.php"> Заметки чата БПФ </a> </h1> </div>
        <div class="blog-desc"> <h6> Это заметки участников телеграм чата БПФ, расшифровывается как Быстрое Преобразование Фурье. </h6> </div>
    </div>
    <br><br>
    <div class = "blog-posts">
        <h4 style="text-align:center"> Заметки и мылси </h4>
        
        <?php if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) { ?>
           <li id="blog-post-list">
               <input type="hidden" name = "blog_title" class = "blog-post-title"><h3><?php echo $row['post_title'] ?></h3></input>
               <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               <div class="blog-post-details">
                <input type="hidden" name = "data" class="posted-date" style="display:inline-block"><h6>Date : <?php echo date('F , j , Y',strtotime($row['data'])); ?></h6></input>
                <input type="hidden" name = "author" class = "author" style="display:inline-block"><h5>Author : <?php echo $row['author']; ?></h5></input>
                <input type="hidden" name = "post_body" class = "post-body"><p><?php echo $row['post_body']; ?></p></input>
                </div>
                </form>
            </li><br>
            <?php } ?>
        <?php
    //echo "End";
}
else {
    //echo "0 results";
}
?>
<script>
    function confirm_submit () {
        return confirm(" Continue ");
    }
</script>
</div>
</body>
</html>