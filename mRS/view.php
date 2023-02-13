<?php include "header.php" ?>
<div class = "container">
    <div class = "header">Music Reviews</div>
    <a href = "index.php" class = "backBtn2">Back</a>
    <table class = "homeTable2">
        <thead class = "whtBc">
            <tr class = "whtBc1">
                <th scope = "col" class = "whtBc1">id</th>
                <th scope = "col" class = "whtBc1">Artist</th>
                <th scope = "col" class = "whtBc1">Album/Song</th>
                <th scope = "col" class = "whtBc1">Comments</th>
                <th scope = "col" class = "whtBc1">Out of 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    if ( isset( $_GET[ 'users_id' ] ) ) {
                        $users_id = $_GET[ 'users_id' ];
                        $query = "SELECT * FROM users WHERE id = {$users_id}";
                        $view_review = mysqli_query( $conn , $query);

                        while( $row = mysqli_fetch_assoc( $view_review ) ) {
                            $id = $row[ 'id' ];
                            $artist = $row[ 'artist' ];
                            $content = $row[ 'content' ];
                            $comm = $row[ 'comm' ];
                            $score = $row[ 'score' ];

                            echo "<tr >";
                            echo " <th scope = 'row' class = 'rBc'>{$id}</th>";
                            echo " <td class = 'rBc' >{$artist}</td>";
                            echo " <td class = 'rBc' >{$content}</td>";
                            echo " <td class = 'rBc' >{$comm}</td>";
                            echo " <td class = 'rBc' >{$score} </td>"; 
                            echo " </tr> ";
                        }
                    } 
                ?>
            </tr>  
        </tbody>
    </table>
</div>