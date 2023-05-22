<?php
// Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Include config file
    require_once "config.php";

    // Prepare a delete statement
    $sql = "DELETE FROM information WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);

        // Set parameters
        $param_id = trim($_POST["id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Records deleted successfully. Redirect to landing page
            header("location: profilehome.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Pet Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delete.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
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
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
</header>
<br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Pet Record?</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-primary" role="alert">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>You cannot retrieve your data once it is deleted!</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="profilehome.php" class="btn btn-secondary ml-2">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>