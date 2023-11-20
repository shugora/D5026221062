<form action="/submitform" method="POST">
    <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type="text" name="Nama" placeholder="Nama">
    <input type="text" name="NRP" placeholder="NRP">
    <input type="submit" value="Submit">
</form>

