<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

try {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Validate inputs
    if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid input data');
    }

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'generic.tribalsand@gmail.com';
    // $mail->Password = 'cpozxrtucvldttmc';
    $mail->Password = 'rarosgycpirkjmoa';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Send email to admin
    $mail->setFrom($email, $name);
    $mail->addAddress('generic.tribalsand@gmail.com');
    $mail->addAddress('reservations@tribalsand.com');
    $mail->addAddress('valentina@tribalsand.com');
    $mail->addAddress('federico@tribalsand.com');
    $mail->isHTML(true);
    $mail->Subject = 'New Agent Registration';
    $mail->Body = "
   <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New Agent Registration</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: #333333;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .email-header {
                background-color: #4a6fa5;
                color: white;
                padding: 20px;
                text-align: center;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
            }
            .email-header h2 {
                margin: 0;
                font-weight: 500;
            }
            .content {
                background-color: #ffffff;
                padding: 30px;
                border-bottom-left-radius: 6px;
                border-bottom-right-radius: 6px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            .info-item {
                margin-bottom: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #eeeeee;
            }
            .info-item:last-child {
                margin-bottom: 0;
                padding-bottom: 0;
                border-bottom: none;
            }
            .info-label {
                font-weight: 600;
                display: block;
                margin-bottom: 5px;
                color: #4a6fa5;
            }
            .info-value {
                display: block;
                font-size: 16px;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                font-size: 12px;
                color: #999999;
            }
            @media only screen and (max-width: 480px) {
                .container {
                    width: 100%;
                    padding: 10px;
                }
                .email-header {
                    padding: 15px;
                }
                .content {
                    padding: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='email-header'>
                <h2>New Agent Registration Interest</h2>
            </div>
            <div class='content'>
                <div class='info-item'>
                    <span class='info-label'>Name</span>
                    <span class='info-value'>{$name}</span>
                </div>
                <div class='info-item'>
                    <span class='info-label'>Email Address</span>
                    <span class='info-value'>{$email}</span>
                </div>
            </div>
            <div class='footer'>
                This is an automated notification. Please do not reply to this email.
            </div>
        </div>
    </body>
    </html>
    ";
    $mail->send();

    // Send confirmation email to user
    $mail->clearAddresses();
    $mail->setFrom('generic.tribalsand@gmail.com', 'Tribal Sand');
    $mail->addAddress($email, $name);
    $mail->addReplyTo('reservations@tribalsand.com');
    $mail->Subject = 'Thank You for Your Interest in Tribal Sand';
    $mail->Body = "
   <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Thank You for Your Interest in TribalSand</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .email-header {
            background-color: #1a3b5d;
            text-align: center;
            padding: 20px;
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }
        .company-name {
            color: #ffffff;
            font-size: 22px;
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .greeting {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .message {
            margin-bottom: 20px;
        }
        .documents {
            background-color: #f9f9f9;
            padding: 15px;
            margin: 20px 0;
            border-left: 4px solid #1a3b5d;
            border-radius: 4px;
        }
        .documents ul {
            margin: 10px 0 10px 20px;
            padding: 0;
        }
        .documents li {
            margin-bottom: 5px;
        }
        .signature {
            margin-top: 30px;
        }
        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
        }
        .footer p {
            margin: 5px 0;
            color: #555555;
        }
        .team-name {
            font-weight: bold;
            color: #1a3b5d;
            font-size: 16px;
        }
        .auto-note {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #999999;
            font-style: italic;
        }
        @media only screen and (max-width: 480px) {
            .container {
                width: 100%;
                padding: 10px;
            }
            .content {
                padding: 20px;
            }
            .documents {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='email-header'>
            <h1 class='company-name'>Tribal Sand</h1>
        </div>
        <div class='content'>
            <div class='greeting'>
                <p>Dear Travel Agent,</p>
            </div>
            <div class='message'>
                <p>Thank you for your interest in partnering with TribalSand. We're excited about the possibility of working together.</p>
            </div>
            <div class='documents'>
                <p>To proceed with your registration, please provide us with the following documents:</p>
                <ul>
                    <li>Single Business License</li>
                    <li>Certificate of Incorporation</li>
                    <li>PIN Certificate</li>
                </ul>
            </div>
            <div class='message'>
                <p>Once we receive these documents, we will be happy to answer all your questions and discuss collaboration opportunities.</p>
            </div>
             <div class='message'>
                <p>Please send the above documents and any queries to reservations@tribalsand.com and federico@tribalsand.com.</p>
            </div>
            <div class='signature'>
                <p>Best regards,</p>
                <div class='footer'>
                    <p class='team-name'>Team TribalSand</p>
                </div>
            </div>
        </div>
        <div class='auto-note'>
            <p>This is an automated message from our website.</p>
        </div>
    </div>
</body>
</html>
    ";
    $mail->send();

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
