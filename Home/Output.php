<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index_number = $_POST['index_number'];
    $registered_name = $_POST['registered_name'];

    // URL to send the POST request
    $url = "https://results.knec.ac.ke/Home/CheckResults";

    // Data to send
    $postData = [
        'IndexNumber' => $index_number,
        'Name' => $registered_name,
    ];

    // Initialize cURL
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_HEADER, false);

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "Error: " . curl_error($ch);
    } else {
        // Display the HTML response
        echo $response;
    }

    // Close the cURL session
    curl_close($ch);
} else {
    echo "Invalid Request.";
}
?>
