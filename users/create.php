<?php
include"includes/header.php";
?>

    <style>
        .wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="float-left">Supporters and their Location</h2>
                    </div>
                    <?php
                    // Include config file
                    require_once "../config1.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM emp";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<div class="table-responsive">';
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";
                            echo "<th>Subcounty</th>";
                            echo "<th>Parish</th>";
                            echo "<th>Village</th>";
                            echo "<th>Contact</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['subcounty'] . "</td>";
                                echo "<td>" . $row['parish'] . "</td>";
                                echo "<td>" . $row['village'] . "</td>";
                                echo "<td>" . $row['contact'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-2" title="View Record" data-toggle="tooltip"><button class="btn btn-primary btn-sm">View</button></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><button class="btn btn-danger btn-sm">Delete</button></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo '</div>';
                            // Free result set
                            mysqli_free_result($result);
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
            </div>
        </div>
    </div>
</body>
</html>
