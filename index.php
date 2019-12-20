<?php
    include_once("includes/functions.php");
    if($_POST)
        $insert_user_result = insert_user($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Albums of 2019</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Kenny Williams</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                <a class="nav-item nav-link" target="_blank" href="https://github.com/kennywilliams07">My GitHub <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" target="_blank" href="https://www.facebook.com/P.h33n0.m">Facebook</a>
                <a class="nav-item nav-link" target="_blank" href="https://twitter.com/ObliviousPhenom">Twitter</a>
             </div>
            </div>
        </nav>
            <h1 id="main-title">Top Albums of 2019</h1>
            <h2 id="main-title">Feel Free to Add Your Own!</h2>
        </header>
<body>
    
                <!-- Modal to Add Records -->
    <div class="modal fade" id="recordaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Artist</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

            <form id="addUser" action="" method="post">

        <div class="modal-body">

                <div class="form-group">
                    <label>Artist Name</label>
                    <input type="text" class="form-control" name="artist_name" required>
                </div>
                <div class="form-group">
                    <label>Album Name</label>
                    <input type="text" class="form-control" name="album_name" required>
                </div>
                <div class="form-group">
                    <label>Favorite Song</label>
                    <input type="text" class="form-control" name="favorite_song" required>
                </div>
                <div class="form-group">
                    <label>Release Date</label>
                    <input type="text" class="form-control" name="release_date" placeholder="YYYY/MM/DD" required>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
            </form>
        </div>
        </div>
    </div>



    <!-- ###################################################################################### -->

    <!-- EDIT FORM -->

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Artist</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

            <form action="update.php" method="POST">

        <div class="modal-body">

        <!-- <input type="hidden" name="update_id" id="update_id"> -->

                <div class="form-group">
                    <label>Artist Name</label>
                    <input type="hidden" class="form-control" name="update_id" id="update_id">
                    <input type="text" class="form-control" name="artist_name" id="artist_name" required>
                </div>

                <div class="form-group">
                    <label>Album Name</label>
                    <input type="text" class="form-control" name="album_name" id="album_name" required>
                </div>

                <div class="form-group">
                    <label>Favorite Song</label>
                    <input type="text" class="form-control" name="favorite_song" id="favorite_song" required>
                </div>

                <div class="form-group">
                    <label>Release Date</label>
                    <input type="text" class="form-control" name="release_date" id="release_date" placeholder="YYYY/MM/DD" required>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
            <button type="submit" name="updatedata" class="btn btn-primary">Save</button>    
        </div>
            </form>
        </div>
        </div>
    </div>


    <!-- ###################################################################################### -->





    <!-- ###################################################################################### -->

    <!-- DELETE FORM -->

    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

            <form action="delete.php" method="POST">

        <div class="modal-body">

        <input type="hidden" name="delete_id" id="delete_id">

            <h4>Do You Want To Delete This Data?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, don't delete.</button>
            <button type="submit" name="deletedata" class="btn btn-primary">Yes, delete.</button>    
        </div>
            </form>
        </div>
        </div>
    </div>


    <!-- ###################################################################################### -->


                <!-- DISPLAYING DATA IN TABLE -->


    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2 id="add">Add Your Album!</h2>
            </div>
            <div class="card">
                <div class="card-body">
                <button type="button" class="btn btn-primary" id="add-btn" data-toggle="modal" data-target="#recordaddmodal">Add Your Own Album!</button>                
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    
            <?php
                $query = "SELECT * FROM albums_2019";
                $query_run = mysqli_query($conn, $query);
            ?>
               <div class="table-responsive"> 
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Artist Name</th>
                            <th scope="col">Album Name</th>
                            <th scope="col">Favorite Song</th>
                            <th scope="col">Release Date</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
            <?php
                if($query_run) {
                    foreach($query_run as $row) {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['artist_name']; ?> </td>
                            <td> <?php echo $row['album_name']; ?> </td>
                            <td> <?php echo $row['favorite_song']; ?> </td>
                            <td> <?php echo $row['release_date']; ?> </td>
                            <td> 
                                <button type="button" class="btn btn-success editbtn">EDIT</button>
                            </td>
                            <td> 
                                <button type="button" class="btn btn-danger deletebtn">DELETE</button>
                            </td>
                        </tr>
                    </tbody>
            <?php
                    }
                } else {
                    echo "No Records Found";
            } ?>
                </table>
               </div> 
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
<script src="app.js"></script>

</body>
</html>