<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Match</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/petlist.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
</head>
<body>

<?php require_once "../components/navbar.php"; ?>
<p class="space">

</p>
<div class="imgGallery p-2">
<div class="row">
<?php

    // Include config file
    require_once "../login/config.php";

    // Establish database connection
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Function to read posts
    function readPosts($con) {
        $sql = "SELECT image, name FROM information";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $image = $row['image'];
                $name = $row['name'];

                echo '<div class="col-md-3 pt-2 pb-3">
                                    <div class="thumbnail" style="background-color:black">
                                    <a href="petinfo.php?name=' . urlencode($name) . '">
                                            <img src="' . $image . '" alt="' . $name . '" style="width:100%">
                                        </a>
                                        <div class="middle">
                                            <div class="text">' . $name . '</div>
                                        </div>
                                    </div>
                                </div>';
            }
        } else {
            echo '
                <div class="container">
                    <div class="cards">
                    <div class="card color">
                        <h1 class="tip">No posts found.</h1>
                        <p class="second-text">Add to profile</p>
                        </div>
                    </div>
                </div>
                ';
        }
    }

    // Call the readPosts() function
    readPosts($con);

    // Close the database connection
    mysqli_close($con);
    ?>

    <?php require_once "../components/footer.php"; ?>

</body>
</html>