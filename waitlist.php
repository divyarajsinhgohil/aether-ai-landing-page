<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = 'leads.json';
        
        // Load existing leads
        $leads = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
        
        // Add new lead
        $leads[] = [
            'email' => $email,
            'timestamp' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR']
        ];
        
        // Save back to file
        file_put_contents($file, json_encode($leads, JSON_PRETTY_PRINT));
        
        // Success redirect with message
        echo "<script>
            alert('Welcome to the Future! You are on the waitlist.');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Invalid email address.');
            window.location.href = 'index.php';
        </script>";
    }
} else {
    header("Location: index.php");
}
?>
