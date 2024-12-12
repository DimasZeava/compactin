<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
        }

        .header {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .content p {
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Hello, you have received a new order!</div>
        <div class="content">
            <p><strong>Name:</strong> {{ $orderData['name'] }}</p>
            <p><strong>Email:</strong> {{ $orderData['email'] }}</p>
            <p><strong>Template:</strong> {{ $orderData['template'] }}</p>
            <p><strong>Message:</strong> {{ $orderData['message'] }}</p>
        </div>
        <div class="footer">
            &copy; 2024 Your Company. All rights reserved.
        </div>
    </div>
</body>

</html>
