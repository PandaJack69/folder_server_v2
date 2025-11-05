<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #276ef1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background-color: #f7f8fa;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .welcome-text {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .details {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Cloud Computing 2025</h1>
        <p>Registration Confirmation</p>
    </div>
    
    <div class="content">
        <div class="welcome-text">
            Hello <strong>{{ $name }}</strong>,
        </div>
        
        <p>Thank you for registering for Cloud Computing 2025! Your registration has been received and confirmed.</p>
        
        <div class="details">
            <h3>Registration Details:</h3>
            <div class="detail-item">
                <strong>Full Name:</strong> {{ $name }}
            </div>
            <div class="detail-item">
                <strong>Email:</strong> {{ $email }}
            </div>
            <div class="detail-item">
                <strong>Birthdate:</strong> {{ \Carbon\Carbon::parse($birthdate)->format('F d, Y') }}
            </div>
        </div>
        
        <p>We're excited to have you join us for Cloud Computing 2025. You'll receive further updates about the program schedule and materials soon.</p>
        
        <div class="footer">
            <p>Best regards,<br>Cloud Computing 2025 Team</p>
            <p>If you have any questions, please contact us at admin@artan.khufra.my.id</p>
        </div>
    </div>
</body>
</html>