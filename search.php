<?php
$title = 'Search Products';
require 'include/config.php';
require 'include/header.php'; ?>


<div class="row">
    <div class="col-md-12 bg-dark text-center rounded-3 text-white">
        <h1>Search Products</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6 offset-3 my-4">
        <form action="">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search Here">
        </form>
    </div>
</div>

<div id="searchresult" class="row">

</div>

<?php
require 'include/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            var value = $(this).val();
            if (value != "") {
                $.ajax({
                    url: 'include/fetch_data.php',
                    method: 'POST',
                    data: {
                        value: value
                    },
                    success: function(data) {
                        $('#searchresult').html(data);
                        $('#searchresult').show();
                        $('#oldresult').hide();
                    }
                });
            } else {
                $('#searchresult').hide();
                $('#oldresult').show();
            }
        })
    })
</script>