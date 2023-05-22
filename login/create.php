<?php
// Include config file
require_once "config.php";

// Create a new mysqli connection
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Define variables and initialize with empty values
$name = $breed = $age = $sex = $color = $weight = $pet = $owner = "";
$name_err = $breed_err = $age_err = $sex_err = $color_err = $weight_err = $pet_err = $owner_err = $image_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate breed
    $input_breed = trim($_POST["breed"]);
    if (empty($input_breed)) {
        $breed_err = "Please enter a breed.";
    } else {
        $breed = $input_breed;
    }

    // Validate age
    $input_age = trim($_POST["age"]);
    if (empty($input_age)) {
        $age_err = "Please enter the age.";
    } elseif (!ctype_digit($input_age)) {
        $age_err = "Please enter a positive integer value.";
    } else {
        $age = $input_age;
    }

    // Validate sex
    $input_sex = trim($_POST["sex"]);
    if (empty($input_sex)) {
        $sex_err = "Please enter sex.";
    } else {
        $sex = $input_sex;
    }

    // Validate color
    $input_color = trim($_POST["color"]);
    if (empty($input_color)) {
        $color_err = "Please enter a color.";
    } else {
        $color = $input_color;
    }

    // Validate weight
    $input_weight = trim($_POST["weight"]);
    if (empty($input_weight)) {
        $weight_err = "Please enter the weight.";
    } elseif (!ctype_digit($input_weight)) {
        $weight_err = "Please enter a positive integer value.";
    } else {
        $weight = $input_weight;
    }

    // Validate pet information
    $input_pet = trim($_POST["pet"]);
    if (empty($input_pet)) {
        $pet_err = "Please enter pet information.";
    } else {
        $pet = $input_pet;
    }

    // Validate owner information
    $input_owner = trim($_POST["owner"]);
    if (empty($input_owner)) {
        $owner_err = "Please enter owner information.";
    } else {
        $owner = $input_owner;
    }

    // Validate and handle image upload
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imagefilename = $image['name'];
        $imagefileerror = $image['error'];
        $imagefiletemp = $image['tmp_name'];

        $filename_separate = explode('.', $imagefilename);
        $file_extension = strtolower(end($filename_separate));
        $allowed_extensions = array('jpeg', 'jpg', 'png');

        if (in_array($file_extension, $allowed_extensions)) {
            $upload_image = '../gallery/images/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
        } else {
            $image_err = "Invalid file extension. Only JPEG, JPG, and PNG files are allowed.";
        }
    }

    // Check input errors before inserting into the database
    if (empty($name_err) && empty($breed_err) && empty($age_err) && empty($sex_err) && empty($color_err) && empty($weight_err) && empty($pet_err) && empty($owner_err) && empty($image_err)) {
        
        $sql = "INSERT INTO information (name, breed, age, sex, color, weight, pet, owner, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssssss", $param_name, $param_breed, $param_age, $param_sex, $param_color, $param_weight, $param_pet, $param_owner, $param_image);

            // Set parameters
            $param_name = $name;
            $param_breed = $breed;
            $param_age = $age;
            $param_sex = $sex;
            $param_color = $color;
            $param_weight = $weight;
            $param_pet = $pet;
            $param_owner = $owner;
            $param_image = $upload_image;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to the landing page
                $last_id = $mysqli->insert_id;
                header("location: read.php?id=$last_id");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close the database connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <title>Create Pet Record</title>
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
<br><br><br>

        <div class="container">
            <div class="row">
                    <form class="form" action="create.php" method="post" enctype="multipart/form-data">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add pet record to the database.</p>
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Breed" name="breed" class="form-control <?php echo (!empty($breed_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $breed; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $breed_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Age" name="age" class="form-control <?php echo (!empty($age_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $age; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $age_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Sex" name="sex" class="form-control <?php echo (!empty($sex_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sex; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $sex_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Color" name="color" class="form-control <?php echo (!empty($color_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $color; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $color_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Weight (lbs)" name="weight" class="form-control <?php echo (!empty($weight_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $weight; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $weight_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Pet Information" name="pet" class="form-control <?php echo (!empty($pet_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pet; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $pet_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Owner Information" name="owner" class="form-control <?php echo (!empty($owner_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $owner; ?>" autocomplete="off">
                            <span class="invalid-feedback"><?php echo $owner_err; ?></span>
                        </div>

                        <br>
                        <div class="form-group">
                            <label>Please Attach Image of Pet</label><br>
                        </div>

                        <div class="file-input">
                            <input type="file" id="file" class="file-input__input" name="image">
                            <label for="file" class="file-input__label">Choose File</label>
                        </div>

                        <div class="btn">
                        <input type="submit" name="submit" class="btn1" value="Submit">
                        <a href="profilehome.php" class="btn2">Cancel</a>
                        </div>
                    </form>
            </div>
        </div>
</body>

</html>
