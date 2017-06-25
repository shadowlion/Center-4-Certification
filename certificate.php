<?php
// include 'lib/emailAdmin.php';
include 'layouts/head.php';
?>

<body>
    <div class="certificateArea">
        <img src="assets/images/C4C-<?php echo $_POST['certColor']; ?>.png">
        <div class="certificateContent Klarissa">
            <h3><?php echo date("F j, Y"); ?></h3>
            <h2><?php echo $_POST['certTitle']; ?></h2>
            <h1><?php echo  $_POST['fullName']; ?></h1>
        </div>
    </div>
</body>

<?php include 'layouts/footer.php'; ?>