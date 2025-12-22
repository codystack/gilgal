<?php
$file = '../assets/documents/Enquiry Form.pdf';

// Check if file exists
if (!file_exists($file)) {
    http_response_code(404);
    exit('File not found.');
}

// Get file info
$filename = basename($file);
$filesize = filesize($file);

// Clear output buffer
if (ob_get_level()) {
    ob_end_clean();
}

// Set headers
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . $filesize);
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Expires: 0');

// Read the file
readfile($file);
exit;