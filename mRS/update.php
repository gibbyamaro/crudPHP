<?php include "header.php"?>
<?php
    if( isset( $_GET[ 'users_id' ] ) ) {
      $users_id = $_GET[ 'users_id' ]; 
    }

    $query = "SELECT * FROM users WHERE id = $users_id";
    $view_review = mysqli_query( $conn , $query );

    while( $row = mysqli_fetch_assoc( $view_review ) ) {
        $id= $row['id'];
        $comm = $row[ 'comm' ];
        $score = $row[ 'score' ];
    }

    if( isset( $_POST[ 'update' ] ) ) {
      $comm = $_POST[ 'comm' ];
      $score = $_POST[ 'score' ];
    
      $query = "UPDATE users SET comm = '{$comm}' , score = '{$score}' WHERE id = $users_id";
      $update_review = mysqli_query( $conn , $query );
      echo "<script type = 'text/javascript'>alert( 'Review Updated' )</script>";
    }             
?>

<div class = "upHeader">Change Review</div>

<div class = "formContainer">
    <form action = "" method = "post">
        <div class = "form-group">
            <label for = "comm" class = "form-label">
                Comments
            </label>
            <br/>
            <input type = "text" name = "comm" class = "form-control">
        </div>
        <br/>
        <br/>
        <div class = "form-group">
            <label for = "score" class = "form-label">
                Out of 5
            </label>
            <br/>
            <input type = "number" name = "score" class = "form-control">
        </div>
        <div class = "form-group">
            <input type = "submit" name = "update" class = "createBtn" value = "Submit Review">
        </div>
    </form>  
</div>
<div class = "backBtn">
    <a href = "index.php">Back</a>
<div>