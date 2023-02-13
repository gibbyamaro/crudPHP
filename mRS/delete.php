<?php  include "header.php" ?>
<?php 
    if( isset( $_GET[ 'delete' ] ) ) {
    $users_id = $_GET[ 'delete' ];
    $query = "DELETE FROM users WHERE id = {$users_id}"; 
    $delete_query = mysqli_query( $conn , $query );
    header( "Location: index.php" );
    }
?>