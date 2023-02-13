<?php include "header.php" ?>
<div class = "container">
    <div class = "header">Music Reviews</div>
    <a href = "create.php" class = 'addBtn'>Add Review</a>
    <table class = "homeTable">
        <thead class = "whtBc">
            <tr class = "whtBc1">
                <th scope = "col" class = "whtBc1">Id#</th>
                <th scope = "col" class = "whtBc1">Artist</th>
                <th scope = "col" class = "whtBc1">Album/Song</th>
                <th scope = "col" class = "whtBc1">Comments</th>
                <th scope = "col" class = "whtBc1">Out of 5</th>
                <th scope = "col" colspan = "3" class = "whtBc1">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    $query = "SELECT * FROM users";
                    $view_review = mysqli_query( $conn , $query );

                    while( $row = mysqli_fetch_assoc( $view_review ) ) {
                        $id = $row[ 'id' ];
                        $artist = $row[ 'artist' ];
                        $content = $row[ 'content' ];
                        $comm = $row[ 'comm' ];
                        $score = $row[ 'score' ];

                        echo "<tr >";
                        echo " <th scope = 'row' class = 'rBc'>{$id}</th>";
                        echo " <td class = 'rBc'>{$artist}</td>";
                        echo " <td class = 'rBc'>{$content}</td>";
                        echo " <td class = 'rBc'>{$comm}</td>";
                        echo " <td class = 'rBc'>{$score}</td>";
                        echo " <td class = 'crud'><a href = 'view.php?users_id={$id}'></i>View</a></td>";
                        echo " <td class = 'crud'><a href = 'update.php?edit&users_id={$id}'>Edit</a></td>";
                        echo " <td class = 'crud'><a href = 'delete.php?delete={$id}'></i>Delete</a></td>"; 
                    }
                ?>
            </tr>
        </tbody>
    </table>
</div>