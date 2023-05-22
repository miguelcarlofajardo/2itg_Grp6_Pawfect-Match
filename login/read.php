<?php
// Include config file
require_once "config.php";

// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Prepare a select statement
    $sql = "SELECT * FROM information WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row["name"];
                $breed = $row["breed"];
                $age = $row["age"];
                $sex = $row["sex"];
                $color = $row["color"];
                $weight = $row["weight"];
                $pet = $row["pet"];
                $owner = $row["owner"];
                $image = $row["image"];

            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();

} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/read.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>View Pet Record</title>
</head>

<body>

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
            <li><a href="../profile/logindex.php">Logout</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
</header>

<body>
        <div class="container">
            <div class="row">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <p><img src="<?php echo $row["image"]; ?>"  id="image" alt="Pet Image"></p>
                    </div>
                    <div class="inner-container">
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Breed</label>
                        <p><b><?php echo $row["breed"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <p><b><?php echo $row["age"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Sex</label>
                        <p><b><?php echo $row["sex"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <p><b><?php echo $row["color"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <p><b><?php echo $row["weight"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Pet Information</label>
                        <p><b><?php echo $row["pet"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Owner Information</label>
                        <p><b><?php echo $row["owner"]; ?></b></p>
                    </div>
                    </div>
                    <p><a href="profilehome.php" class="btn1"> <i class="fa fa-regular fa-arrow-left"> </i> Go Back</a></p>
                </div>
            </div>
</body>

</html>
