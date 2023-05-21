<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Match</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/petinfo.css">
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

<div class="container-box">
<?php
    // Include config file
    require_once "../login/config.php";

    // Establish database connection
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the pet name from the query string
    $petName = $_GET['name'];

    // Fetch the pet information from the database
    $sql = "SELECT * FROM information WHERE name = '" . mysqli_real_escape_string($con, $petName) . "'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Store the pet information in variables
        $image = $row['image'];
        $name = $row['name'];
        $breed = $row['breed'];
        $age = $row['age'];
        $sex = $row['sex'];
        $color = $row['color'];
        $weight = $row['weight'];
        $moreInfo = $row['pet'];
        $ownerInfo = $row['owner'];

        // Display the pet information
        echo '
            <div class="petimages">
                <img class="petimg" src="' . $image . '" />
            </div>
         
            <div class="product" style="font-size:90%;">
                <h4>' . $name . '</h4>
                <p>Unleash Love, One Adoption at a Time!</p>
                <p class="desc">Pet Information</p> 
                Name: ' . $name . '<br>
                Breed: ' . $breed . '<br>
                Age: ' . $age . '<br>
                Sex: ' . $sex . '<br>
                Color: ' . $color . '<br>
                Weight: ' . $weight . ' (lbs)<br><br>
                <p>More about ' . $name . ':</p>
                <p>' . $moreInfo . '</p>
                <br>
                <p class="ownerinfo">Owner Information</p>
                <p>' . $ownerInfo . '</p>
            
        ';
    } else {
        echo "Pet not found.";
    }

    // Close the database connection
    mysqli_close($con);
?>

    <div class="buttons">
      <button class="add" id="adopt-button">
        <span class="adopt">Adopt Now!</span></button>
      <button class="like"><span class="fav">♥</span></button>
    </div>
  </div>
</div>


<?php require_once "../components/footer.php"; ?>
<script>
  // Get the adopt button element
  const adoptButton = document.getElementById('adopt-button');

  // Add click event listener to the button
  adoptButton.addEventListener('click', () => {
    // Redirect the user to the specified link
    window.location.href = 'https://docs.google.com/forms/d/1d_qVYcFOFhDMYn8e1OYKvIV-XG7Qs_TsUvPI_wcQOlI/viewform?edit_requested=true';
  });
</script>
</body>
</html>