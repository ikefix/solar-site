<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Website Feedback</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; line-height: 1.5;">
    <h2 style="margin: 0 0 12px;">New Feedback / Quote Request</h2>

    <table role="presentation" cellpadding="6" cellspacing="0" border="0" style="border-collapse: collapse; width: 100%; max-width: 600px;">
        <tr>
            <td style="font-weight: 700; width: 180px;">Full Name:</td>
            <td>{{ $fullname }}</td>
        </tr>
        <tr>
            <td style="font-weight: 700;">Email:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td style="font-weight: 700;">Phone:</td>
            <td>{{ $phone }}</td>
        </tr>
        <tr>
            <td style="font-weight: 700;">Location:</td>
            <td>{{ $location }}</td>
        </tr>
        <tr>
            <td style="font-weight: 700;">Preferred Contact:</td>
            <td>{{ $contact_method ?? 'N/A' }}</td>
        </tr>
    </table>

    <h3 style="margin: 20px 0 8px;">Message</h3>
    <div>{!! nl2br(e($details)) !!}</div>
</body>
</html>
