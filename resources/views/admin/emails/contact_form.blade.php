<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0f2f7, #b3e5fc);
            /* Subtle gradient background */
            padding: 30px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container-custom {
            margin-top: 0px;
            background-color: #ffffff;
            border-radius: 12px;
            /* More rounded corners */
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            /* More pronounced shadow */
            overflow: hidden;
            /* Ensures rounded corners are visible */
        }

        .header-custom {
            display: flex;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e1e1e1;
            margin-bottom: 20px;
        }

        .header-custom .icon {
            width: 60px;
            /* Slightly larger icon */
            height: 60px;
            margin-right: 15px;
        }

        .header-custom h2 {
            color: #1976d2;
            /* Darker blue for heading */
            margin: 0;
            font-size: 1.8rem;
            /* Larger font size */
            font-weight: 600;
        }

        .content-custom .row-data {
            margin-bottom: 15px;
            padding: 12px 15px;
            /* Increased padding */
            background-color: #f9f9f9;
            /* Subtle background for each row */
            border-radius: 8px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .content-custom .row-data:hover {
            background-color: #f0f8ff;
            border-color: #d0e8f7;
        }

        .content-custom .label-data {
            font-weight: 600;
            /* Bolder label */
            color: #4a4a4a;
            /* Darker gray for labels */
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        .content-custom .value-data {
            color: #333;
            /* Slightly lighter gray for values */
            font-size: 1.05rem;
            word-wrap: break-word;
            /* Ensures long text wraps */
        }

        .footer-custom {
            margin-top: 30px;
            font-size: 14px;
            /* Slightly larger footer text */
            color: #757575;
            /* Darker footer text */
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e1e1e1;
        }
    </style>
</head>

<body>
    <div class="container-custom">
        <div class="header-custom">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" class="icon" alt="Mail Icon">
            <h2>New Contact Form Submission</h2>
        </div>
        <div class="content-custom">
            <div class="row-data">
                <div class="label-data">Full Name</div>
                <div class="value-data">{{ $data['name'] }}</div>
            </div>
            <div class="row-data">
                <div class="label-data">Email Address</div>
                <div class="value-data">{{ $data['email'] }}</div>
            </div>
            @if (!empty($data['phone']))
            <div class="row-data">
                <div class="label-data">Phone Number</div>
                <div class="value-data">{{ $data['phone'] }}</div>
            </div>
            @endif
            <div class="row-data">
                <div class="label-data">Subject</div>
                <div class="value-data">{{ $data['subject'] }}</div>
            </div>
            <div class="row-data">
                <div class="label-data">Message</div>
                <div class="value-data">{{ $data['message'] }}</div>
            </div>
        </div>
        <div class="footer-custom">
            This message was sent from the contact form on your website.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>