<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pet Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/crudindex.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<header>
        <a href="#" class="logo">
            <img src="../home/img/PM-transparent green-logo.png" alt="Pawfect Match Logo" class="Logo" width="125" height="125">
            <span class="brand-name">Pawfect Match</span>
        </a>
       
        <ul class="navbar">
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../about/ourstory.php">Our Story</a></li>
            <li><a href="../gallery/petlist.php">Meet Your Furbaby</a></li>
            <li><a href="../article/article.php">Help</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
</header>
<br><br><br>

<body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2>Pet Information <a href="create.php" class="btn"><i class="fa fa-address-book-o"></i> Add New Pet</a> </h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM information";
                    if ($result = $mysqli->query($sql)) {
                        if ($result->num_rows > 0) {
                            echo '<table class="table table-bordered table-striped table-hover">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Breed</th>";
                            echo "<th>Age</th>";
                            echo "<th>Sex</th>";
                            echo "<th>Color</th>";
                            echo "<th>Weight</th>";
                            echo "<th>Pet Information</th>";
                            echo "<th>Owner Information</th>";
                            echo "<th>Image</th>"; // Add new column for image
                            echo "<th>Edit Information</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = $result->fetch_array()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['breed'] . "</td>";
                                echo "<td>" . $row['age'] . "</td>";
                                echo "<td>" . $row['sex'] . "</td>";
                                echo "<td>" . $row['color'] . "</td>";
                                echo "<td>" . $row['weight'] . "</td>";
                                echo "<td>" . $row['pet'] . "</td>";
                                echo "<td>" . $row['owner'] . "</td>";
                                echo "<td><img src='" . $row['image'] . "' alt='Pet Image' style='width: 100px; height: auto;'></td>"; // Display image using img tag
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="icon" title="View Record" data-toggle="tooltip"><span class="fa fa-id-card"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="icon" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-square-o"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" class="icon" title="Delete Record" data-toggle="tooltip"><span class="fa fa-minus-square"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    $mysqli->close();
                    ?>

                </div>
        </div>
    </div>
</body>

</html>