<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Error 500 - Server Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .error-container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        .error-code {
            font-size: 5rem;
            font-weight: bold;
            color: #e74c3c;
            margin: 0;
        }
        .error-message {
            font-size: 1.5rem;
            color: #555;
            margin: 1rem 0;
        }
        .error-description {
            color: #777;
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-code">500</h1>
        <p class="error-message">Internal Server Error</p>
        <p class="error-description">
            Something went wrong on our end. We've logged the error and are working to fix it.
        </p>
        <a href="{{ route('welcome') }}" class="btn btn-primary mt-3">Go to Homepage</a>
    </div>
</body>
</html>
