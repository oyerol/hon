<?php
// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "../config1.php";

    // Prepare a select statement
    $sql = "SELECT * FROM emp WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                // Fetch result row as an associative array
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field values
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $subcounty = $row["subcounty"];
                $parish = $row["parish"];
                $village = $row["village"];
                $contact = $row["contact"];
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
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            max-width: 600px; /* Set max width to ensure responsiveness */
            margin: 20px auto;
            padding: 20px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }
        .form-group p {
            margin: 0; /* Remove margin for better alignment */
        }
        .btn-primary {
            margin-top: 20px; /* Add margin for spacing */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <h1 class="mb-3">View Record</h1>
            <div class="form-group">
                <label>First Name</label>
                <p><b><?php echo htmlspecialchars($firstname); ?></b></p>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <p><b><?php echo htmlspecialchars($lastname); ?></b></p>
            </div>
            <div class="form-group">
                <label>Subcounty</label>
                <p><b><?php echo htmlspecialchars($subcounty); ?></b></p>
            </div>
            <div class="form-group">
                <label>Parish</label>
                <p><b><?php echo htmlspecialchars($parish); ?></b></p>
            </div>
            <div class="form-group">
                <label>Village</label>
                <p><b><?php echo htmlspecialchars($village); ?></b></p>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <p><b><?php echo htmlspecialchars($contact); ?></b></p>
            </div>
            <a href="create.php" class="btn btn-primary">Back</a>
        </div>
    </div>

    <!-- Scripts for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
