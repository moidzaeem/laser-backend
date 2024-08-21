<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    <p>Dear {{ $booking->first_name }} {{ $booking->last_name }},</p>
    <p>Your appointment has been successfully booked.</p>
    <ul>
        <li><strong>Center:</strong> {{ $booking->center_id }}</li>
        <li><strong>Email:</strong> {{ $booking->email }}</li>
        <li><strong>Phone Number:</strong> {{ $booking->phone_no }}</li>
        <li><strong>Date of Birth:</strong> {{ $booking->dob }}</li>
        <li><strong>Gender:</strong> {{ $booking->gender }}</li>
        <li><strong>Service:</strong> {{ $booking->service_id }}</li>
        <li><strong>Appointment Date and Time:</strong> {{ $booking->appointment_datetime }}</li>
    </ul>
    <p>Thank you for booking with us.</p>
</body>
</html>
