<?php
// Include config file
require_once "config1.php";

// Define variables and initialize with empty values
$firstname = $lastname = $subcounty = $parish = $village = $contact = "";
$firstname_err = $lastname_err = $subcounty_err = $parish_err = $village_err = $contact_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["firstname"]);
    if (empty($input_name)) {
        $firstname_err = "Please enter firstname.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $firstname_err = "Please enter a valid name.";
    } else {
        $firstname = $input_name;
    }

    // Validate lastname
    $input_lastname = trim($_POST["lastname"]);
    if (empty($input_lastname)) {
        $lastname_err = "Please enter a lastname.";
    } else {
        $lastname = $input_lastname;
    }

    // Validate subcounty
    $input_subcounty = trim($_POST["subcounty"]);
    if (empty($input_subcounty)) {
        $subcounty_err = "Please enter the Subcounty.";
    } else {
        $subcounty = $input_subcounty;
    }

    // Validate parish
    $input_parish = trim($_POST["parish"]);
    if (empty($input_parish)) {
        $parish_err = "Please enter the Parish.";
    } else {
        $parish = $input_parish;
    }

    // Validate village
    $input_village = trim($_POST["village"]);
    if (empty($input_village)) {
        $village_err = "Please enter the Village.";
    } else {
        $village = $input_village;
    }

    // Validate contact
    $input_contact = trim($_POST["contact"]);
    if (empty($input_contact)) {
        $contact_err = "Please enter the Contact.";
    } else {
        $contact = $input_contact;
    }

    // Check input errors before inserting in database
    if (empty($firstname_err) && empty($lastname_err) && empty($subcounty_err) && empty($parish_err) && empty($village_err) && empty($contact_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO emp (firstname, lastname, subcounty, parish, village, contact) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_firstname, $param_lastname, $param_subcounty, $param_parish, $param_village, $param_contact);

            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_subcounty = $subcounty;
            $param_parish = $parish;
            $param_village = $village;
            $param_contact = $contact;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page with success message
                echo "<script>alert('Data has been submitted. Thank you Supporting Hon Rwakimari.'); window.location.href='index.php';</script>";
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            max-width: 600px;
            margin: 20px auto;
        }
        .form-control {
            box-shadow: none; /* Remove default shadow for consistency */
        }
        .invalid-feedback {
            display: block; /* Ensure error messages are visible */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Thank You Supporting Hon Beatrice Rwakimari</h2>
                    <p>Please fill this form for the love of Hon Beatrice Rwakimari.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($firstname); ?>">
                            <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($lastname); ?>">
                            <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Subcounty</label>
                            <input type="text" name="subcounty" class="form-control <?php echo (!empty($subcounty_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($subcounty); ?>">
                            <span class="invalid-feedback"><?php echo $subcounty_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Parish</label>
                            <input type="text" name="parish" class="form-control <?php echo (!empty($parish_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($parish); ?>">
                            <span class="invalid-feedback"><?php echo $parish_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Village</label>
                            <input type="text" name="village" class="form-control <?php echo (!empty($village_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($village); ?>">
                            <span class="invalid-feedback"><?php echo $village_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="contact" class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($contact); ?>">
                            <span class="invalid-feedback"><?php echo $contact_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <!-- <a href="index.php" class="btn btn-secondary ml-2">Cancel</a> -->
                    </form>
                    <p class="mt-3">Feel free to fill this form for the love of <a href="login.php">Hon Rwakimari</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
