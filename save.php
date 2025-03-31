<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    // डेटा को सही फॉर्मेट में सेट करें
    $data = "Name: $name, Email: $email\n";

    // फाइल खोलें और डेटा ऐड करें
    $file = fopen("userdata.txt", "a"); // "a" का मतलब है **Append Mode**
    fwrite($file, $data);
    fclose($file);

    echo "Data saved successfully in userdata.txt!";
}
?>
