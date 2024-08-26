<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Appointment Confirmation')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #3fa087, #27685f);
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .header .icon {
            margin-left: 8px;
        }

        .header p {
            font-weight: 600;
        }

        .logo{
            margin-left: 50px;
            margin-top: 20px;
        }

        .confirmation-container {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 40px;
            max-width: 500px;
            margin: 100px auto;
            text-align: center;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .confirmation-container .icon {
            width: 80px;
            height: 80px;
            margin: 20px auto;
            background-color: #e6ffe6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .confirmation-container .icon img {
            width: 40px;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border: none;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="header">
        <p> Free yourself from your addictions quickly <span class="icon">👇</span></p>
    </div>

    <div class="logo">
        <img src="./icons/logo.svg" alt="LaserAddict Logo" class="img-fluid mb-3" />
    </div>

    <div class="confirmation-container">
        <h3>{{__('Appointment confirmed')}}</h3>
        <p>{{__('Thank you for making an appointment with your LaserAddict center. Your appointment is now confirmed.')}}</p>
        <p>{{__('You will receive an e-mail with the details of your appointment and a link to modify or cancel it.')}}</p>
        <div class="icon">
            <img src="./icons/done.svg" alt="Confirmed">
        </div>
        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button class="btn btn-custom me-md-2" type="button">Download PDF</button>
            <button class="btn btn-custom" type="button">Add it to my calendar</button>
        </div> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>