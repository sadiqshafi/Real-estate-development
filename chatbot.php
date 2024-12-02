<?php
// chatbot.php

header('Content-Type: application/json');

// Replace with your OpenAI or other chatbot service API key
$apiKey = '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';

$input = json_decode(file_get_contents('php://input'), true);
$query = $input['query'] ?? '';

if (empty($query)) {
    echo json_encode(['response' => 'Please enter a query.']);
    exit;
}

// API call to OpenAI or another service
$apiUrl = 'https://api.openai.com/v1/chat/completions';
$data = [
    'model' => 'gpt-3.5-turbo', // Adjust the model based on your API
    'messages' => [
        ['role' => 'user', 'content' => $query]
    ]
];

$options = [
    'http' => [
        'header' => "Content-Type: application/json\r\nAuthorization: Bearer $apiKey\r\n",
        'method' => 'POST',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);

if ($response === FALSE) {
    echo json_encode(['response' => 'Error contacting the chatbot service.']);
    exit;
}

$responseData = json_decode($response, true);
$botReply = $responseData['choices'][0]['message']['content'] ?? 'I have no response at the moment.';

echo json_encode(['response' => $botReply]);