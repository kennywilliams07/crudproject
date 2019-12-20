<?php
include_once("includes/db_connection.php");

    if(isset($_POST['updatedata'])) {
       
        $id = $_POST['update_id'];

        $artist_name = $_POST['artist_name'];
        $album_name = $_POST['album_name'];
        $favorite_song = $_POST['favorite_song'];
        $release_date = $_POST['release_date'];
    
        $query = "UPDATE albums_2019 SET artist_name='$artist_name', album_name='$album_name',
                favorite_song='$favorite_song', release_date='$release_date' WHERE id= '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            echo '<script alert("Data Updated"); </script>';
            header("Location:index.php");
        } else {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
