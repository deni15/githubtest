<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/linearicons/style.css">
    <title>
        <?= $title; ?>
    </title>
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card shadow p-4">
            <h2>Lupa Password</h2>
            <p>Untuk melakukan reset password, silakan masukkan alamat email anda. </p>
            <?php echo form_open('lupa_password'); ?>
            <p>Email:</p>
            <p>
                <input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>" />
            </p>
            <p> <?php echo form_error('email'); ?> </p>
            <p>
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Submit" />
            </p>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>