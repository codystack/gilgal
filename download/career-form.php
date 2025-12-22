<?php
// Whitelisted files
$files = [
    'manager' => '../assets/documents/Gilgal_Manager_Care_Coordinator_Fillable_Application.pdf',
    'physiotherapist'    => '../assets/documents/Physiotherapist.pdf',
    'hca'     => '../assets/documents/Health Care Assistant.pdf'
];

// Get requested file key
$key = $_GET['file'] ?? '';

// Validate request
if (!isset($files[$key])) {
    http_response_code(404);
    exit('Invalid file request.');
}

$filePath = $files[$key];

// Check file existence
if (!file_exists($filePath)) {
    http_response_code(404);
    exit('File not found.');
}

// Prepare download
$filename = basename($filePath);
$filesize = filesize($filePath);

// Clear output buffer
if (ob_get_level()) {
    ob_end_clean();
}

// Headers
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . $filesize);
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Expires: 0');

// Output file
readfile($filePath);
exit;