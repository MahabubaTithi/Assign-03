<?php
@include 'connect.php';

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


?>


<?php
@include 'connect.php';

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result) > 0) {
        // Output table header
        echo "<table border='1'>
                <tr>
                    
               
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                </tr>";

        // Output data rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    
                    <td>{$row['name']}</td>
                    
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['text']}</td>
                </tr>";
        }

        // Close the table
        echo "</table>";
    } else {
        // If no rows are returned
        echo "No records found.";
    }

    // Free result set
    mysqli_free_result($result);
} else {
    // If the query fails
    echo "Query Failed: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
