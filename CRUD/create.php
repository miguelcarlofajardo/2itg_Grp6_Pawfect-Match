<?php
// Include config file
require_once "config.php";

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
            $upload_image = 'images/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
        } else {
            $image_err = "Invalid file extension. Only JPEG, JPG, and PNG files are allowed.";
        }
    }

    // Check input errors before inserting into the database
    if (empty($name_err) && empty($breed_err) && empty($age_err) && empty($sex_err) && empty($color_err) && empty($weight_err) && empty($pet_err) && empty($owner_err) && empty($image_err)) {
        // Prepare an insert statement
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
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add pet record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Breed</label>
                            <input type="text" name="breed" class="form-control <?php echo (!empty($breed_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $breed; ?>">
                            <span class="invalid-feedback"><?php echo $breed_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control <?php echo (!empty($age_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $age; ?>">
                            <span class="invalid-feedback"><?php echo $age_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Sex</label>
                            <input type="text" name="sex" class="form-control <?php echo (!empty($sex_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sex; ?>">
                            <span class="invalid-feedback"><?php echo $sex_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" name="color" class="form-control <?php echo (!empty($color_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $color; ?>">
                            <span class="invalid-feedback"><?php echo $color_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight" class="form-control <?php echo (!empty($weight_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $weight; ?>">
                            <span class="invalid-feedback"><?php echo $weight_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Pet Information</label>
                            <input type="text" name="pet" class="form-control <?php echo (!empty($pet_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pet; ?>">
                            <span class="invalid-feedback"><?php echo $pet_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Owner Information</label>
                            <input type="text" name="owner" class="form-control <?php echo (!empty($owner_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $owner; ?>">
                            <span class="invalid-feedback"><?php echo $owner_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
