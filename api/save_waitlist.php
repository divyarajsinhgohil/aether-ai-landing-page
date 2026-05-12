<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Path to leads file
        $file = '../leads.json';
        
        // Ensure the directory exists (one level up since this is in api/ folder)
        // Actually, leads.json is in the root based on previous file listing
        
        $leads = [];
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $leads = json_decode($content, true) ?: [];
        }
        
        // Check for duplicate
        foreach ($leads as $lead) {
            if ($lead['email'] === $email) {
                echo json_encode(['success' => false, 'message' => 'You are already on the list!']);
                exit;
            }
        }
        
        // Add new lead
        $leads[] = [
            'email' => $email,
            'timestamp' => date('Y-m-d H:i:s'),
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
        ];
        
        // Save back to file
        if (file_put_contents($file, json_encode($leads, JSON_PRETTY_PRINT))) {
            echo json_encode(['success' => true, 'message' => 'Successfully joined the waitlist.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Server error. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
