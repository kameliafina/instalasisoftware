<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
        <?php
            if(session()->getFlashdata('pesan')){ //menambil pesan error dari session yang ada di login ctrl
                echo '<p style="color:red">'.session()->getflashdata('pesan').'</p>';
            }
        ?>
    <h1>ini halaman admin</h1>
    <hr>
    <h2>halo <?php echo session()->get('name'); ?></h2> //mengambil dari session yang ada di controller
    <hr>
    <h2>kamu adalah <?php echo session()->get('level'); ?></h2>

    <hr>
    <a href="<?php echo base_url('login/logout')?>">logout</a>
</body>
</html>