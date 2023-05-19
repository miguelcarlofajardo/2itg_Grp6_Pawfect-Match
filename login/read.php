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
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
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
                    <div class="form-group">
                        <label>Image</label>
                        <p><img src="<?php echo $row["image"]; ?>" alt="Pet Image"></p>
                    </div>
                    <p><a href="curdindex.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>