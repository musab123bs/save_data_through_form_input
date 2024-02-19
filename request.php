<?php

// $_REQUEST['dummy'] = "test value";
if($_REQUEST){
    foreach ($_REQUEST as $key => $data) {
        echo "<strong>$key</strong> => <i>$data </i><br>";
    }
}


// $_REQUEST = $_SERVER['REQUEST_METHOD'] === 'POST'

if ($_REQUEST) {
    
    // Open the file for appending
    $file = fopen('form_data.txt', 'a');

    // Write the form data to the file
    foreach ($_REQUEST as $key => $value) {
        fwrite($file, "$key: $value\n");
    }
    // Write a separator for each entry
    fwrite($file, "-------------------------\n");

    // Close the file
    fclose($file);

    // Display success message
    $successMessage = "Form data has been stored in form_data.txt";

    // Execute JavaScript to show a popup modal
    echo "<script>
            alert('$successMessage');
          </script>";
}



?>

<a href ="index.php">Return to From</a>