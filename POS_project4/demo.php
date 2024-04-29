
Conversation opened. 1 unread message.

Skip to content
Using Gmail with screen readers
1 of 131
(no subject)
Inbox

mdshaheen 58
3:58 PM (0 minutes ago)
to me

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dhaka-Martt</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- custom css file -->
    <style>
        <?php include "style.css" ?>
    </style>


</head>
<body>


    <?php require("./Shared/Navbar.php"); ?>
    <div class="flex">

        <?php require("./Shared/Sidebar.php") ?>
        <div class="w-full">
            <?php
            if (isset($_GET["page"])) {
                if ($_GET["page"] === "dashboard") {
                    require("./Pages/Dashboard.php");
                } elseif ($_GET["page"] === "viewproduct") {
                    require("./Pages/ViewProduct.php");
                } elseif ($_GET["page"] === "viewdetails") {
                    require("./Pages/ProductDetails.php");
                } elseif ($_GET["page"] === "edit") {
                    require("./Pages/EditProduct.php");
                }
                 elseif ($_GET["page"] === "user") {
                    require("./Pages/user.php");
                }
            } else {
                require("./Pages/Dashboard.php");
            }
            ?>
        </div>
    </div>

</body>

<script src="index.js"></script>

</html>
