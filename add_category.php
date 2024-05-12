<?php
include 'partials/_dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['category_name'];
    $category_description = $_POST['category_description'];

    // Insert category into the database
    $sql = "INSERT INTO `categories` (`category_name`, `category_description`) VALUES ('$category_name', '$category_description')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Category added successfully
        echo '<script>
    alert("Category Added Successfully.");
    window.location="./index.php";
    </script>';
    } else {
        // Error adding category
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error adding category: ' . mysqli_error($conn) . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}
?>
