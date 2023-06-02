<?php
// Fetch the image data from the database
$query = "SELECT image_data FROM nid WHERE id = $imageId"; // Replace $imageId with the actual ID of the image
$result = mysqli_query($dbCon, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $imageData = $row['image_data'];

    // Set the appropriate content-type header for the image
    header("Content-type: image/jpeg");

    // Output the image data
    echo $imageData;
} else {
    // Image not found
    echo "Image not found.";
}
?>
