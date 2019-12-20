$(document).ready(function() {

    $('.deletebtn').on('click', function() {

        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

    });
});

$(document).ready(function() {
    $('.editbtn').on('click', function() {

        $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#artist_name').val(data[1]);
            $('#album_name').val(data[2]);
            $('#favorite_song').val(data[3]);
            $('#release_date').val(data[4]);

    });
});