<?php
if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    // Xoá biến session sau khi hiển thị thông báo
    unset($_SESSION['success_message']);
}
?>
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <!-- Bao gồm Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rbs5zfK5trSEH08Nl1DvPw7qim5cPb7N7RrpfyNMkRiqV86ADK2LOhU5WsU/PuoJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/vector-map/jqvmap.css">
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="../../../Du_an_1/View/Admin/bieu_do/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    

    <link rel="icon" type="image/x-icon" href="images_giao_dien/admin.png">
    <title>Admin</title>
    <style>

    </style>
</head>
<body>
