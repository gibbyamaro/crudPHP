<?php include "header.php" ?>
<?php
    if( isset( $_POST[ 'create' ] ) ) {
        $artist = $_POST[ 'artist' ];
        $content = $_POST[ 'content' ];
        $comm = $_POST[ 'comm' ];
        $score = $_POST[ 'score' ];
    
        $query = "INSERT INTO users( artist , content , comm , score ) VALUE (  '{$artist}' , '{$content}' , '{$comm}' , '{$score}' )";
        $add_review = mysqli_query( $conn , $query );
    

        if( !$add_review ) {
            echo "Something went wrong " . mysqli_error( $conn );
        } else {
            echo "<script type = 'text/javascript'>alert( 'Review added successfully!' )</script>";
        }
    }
?>

<div class = "addHeader">Add Review</div>

<div class = "formContainer">
    <form action = "" method = "post">
        <div class = "form-group">
            <label for = "artist" class = "form-label">
                Artist
            </label>
            <br/>
            <input type = "text" name = "artist" class = "form-control">
        </div>
        <br/>
        <br/>
        <div class = "form-group">
            <label for = "content" class = "form-label">
                Content
            </label>
            <br/>
            <input type = "text" name = "content" class = "form-control">
        </div>
        <br/>
        <br/>
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
            <input type = "submit" name = "create" class = "createBtn" value = "Submit Review">
        </div>
    </form>  
</div>
<div class = "backBtn">
    <a href = "index.php">Back</a>
<div>