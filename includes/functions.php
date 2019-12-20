<?php            
    include_once("includes/db_connection.php");

            // INSERTING DATA INTO TABLE ON THE BACK END 

    function insert_user($row) {
        global $host, $username, $password, $port, $db, $conn;
        
        $artist_name = $row['artist_name'];
        $album_name = $row['album_name'];
        $favorite_song = $row['favorite_song'];
        $release_date = $row['release_date'];
    
        $sql = "INSERT INTO albums_2019 (artist_name, album_name, favorite_song, release_date) VALUES 
        ('$artist_name', '$album_name', '$favorite_song', '$release_date')";
    
        if(mysqli_query($conn, $sql)) {
            $result='<div class="alert alert-success alert-dismissable" role="alert">
                     New record created successfully
                     <button type="button" class="close" data-dismiss="alert" aria-labble="Close"
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
    
        } else {
            $result='<div class="alert alert-success alert-dismissable" role="alert">
            Error ' . $sql . '<br>' . mysqli_error($conn) . '
            <button type="button" class="close" data-dismiss="alert" aria-labble="Close"
               <span aria-hidden="true">&times;</span>
             </button>
           </div>';
        }
          return $result;
      }

      function editUser($row) {
          global $host, $username, $password, $port, $db, $conn;

          $debug = (isset($_REQUEST['debug']) ? 1 : 0);
          check_db_connection($debug);
          $conn = mysqli_connect($host, $username, $password, $db);

          $id = $row['id'];
          $artist_name = $row['artist_name'];
          $album_name = $row['album_name'];
          $favorite_song = $row['favorite_song'];
          $release_date = $row['release_date'];

        
          $sql = "UPDATE albums_2019 SET artist_name='$artist_name', album_name='$album_name',
          favorite_song='$favorite_song', release_date='$release_date' WHERE id=$id";
        
          if (mysqli_query($conn,$sql)){
            return "Record Updated Successfully";
          } else {
            return "ERROR Updating Record: " . mysqli_error($conn);
          }
      }

?>