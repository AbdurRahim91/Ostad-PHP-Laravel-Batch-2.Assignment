<?php include("db_connection.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module_6 Assignment</title>
    <link rel="stylesheet" href="custom.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            width: 200px;
            height: 100%;
            overflow-y: auto;
        }

        .menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
        }

        .menu a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="menu">
        <img src="logo.png" alt="Logo" style="width:150px;height:50px;"><hr>
        <a href="#section1">Customer Orders</a><hr>
        <a href="#section2">Order List</a><hr>
        <a href="#section3">Total Revenue</a><hr>
        <a href="#section4">Top 5 Customer</a><hr>
    </div>
    <div class="content">
        <section id="section1" style="height: 400px;">
            <?php include("customer.php")?>
        </section>
        <section id="section2" class="hidden" style="height: 400px;">
            <?php include("order_items.php")?>
        </section>
        <section id="section3" class="hidden" style="height: 400px;">
            <?php include("total_revenue.php")?>
        </section>
        <section id="section4" class="hidden" style="height: 400px;">
            <?php include("top_5_customers.php")?>
        </section>
        <h3 style="text-align:center">Developed by: Abdur Rahim</h3>
    </div>


    <script>
            const menuLinks = document.querySelectorAll(".menu a");
            const sections = document.querySelectorAll(".content section");

            menuLinks.forEach((link, index) => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    sections.forEach(section => section.classList.add("hidden"));
                    sections[index].classList.remove("hidden");
                });
            });

    </script>
</body>
</html>
