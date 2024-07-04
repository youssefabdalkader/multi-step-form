<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>/* Reset some default browser styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        
        .input-container {
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #666;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        input[type="password"]:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }
        
        textarea {
            resize: vertical;
        }
        
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 25px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        button:active {
            background-color: #0056b3;
            transform: translateY(1px);
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="container">
            <h2>Summary</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personal Information</h5>
                    <p class="card-text"><strong>Name:</strong> {{ $data['name'] }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $data['email'] }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">job_title and age Information</h5>
                    <p class="card-text"><strong>age:</strong> {{ $data['age'] }}</p>
                    <p class="card-text"><strong>job_title:</strong> {{ $data['job_title'] }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">city Information</h5>
                    <p class="card-text"><strong>city:</strong> {{ $data['city'] }}</p>
                </div>
            </div>
            <form method="post" action="{{ route('submit') }}" class="mt-4">
                @csrf
                <a href="{{ route('step3') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
</body>
</html>
