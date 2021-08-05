<?php
  include "includes/db.php";
 
    
        $the_post_id= $_GET['p_id'];
    
      
    $insert_like = "INSERT INTO likes(post_id)";
     $insert_like .= "VALUES ('$the_post_id')";
     $insert_like_query = mysqli_query($connection,$insert_like);
     

    //header("Location:index.php");
    header("Location:post.php?p_id=$the_post_id");
    

    ?>
