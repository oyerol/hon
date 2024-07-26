<?php
include"includes/header.php";
?>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Hi, welcome! <span class="h6 text-muted">To Hon Rwakimari Users Panel</span></h3>
    <a href="user-create.php" class="btn btn-primary">Add New Users</a>
  </div>
  <p>Only admins are allowed to access this</p>

  <?php
    // Include config file
    require_once "../config1.php";

    // Attempt select query execution
    $sql = "SELECT * FROM user";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_array($result)) {
                $dt = date('d-m-Y h:i:s', strtotime($row['created_at']));
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>";
                echo '<a href="user-update.php?id=' . $row['id'] . '" class="btn btn-success btn-sm">Edit</a>';
                echo '<a href="user-delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm mx-2">Delete</a>';
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo '</div>';
            // Free result set
        } else {
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close connection
    mysqli_close($conn);
  ?>
</div>

</body>
</html>
