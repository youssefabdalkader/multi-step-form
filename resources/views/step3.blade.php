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
        <form action="{{route('step3')}}" method="POST">
            @csrf
            <h2>Step 3</h2>
            <div class="input-container">
                <label for="city">city</label>
                <input type="text" id="city" name="city" placeholder="city" value="{{ old('city' , session('step1.city')) }}" required>
                @error('city')
                    
                @enderror
            </div>
           
            <div class="input-container">
                <a href="{{ route('step2') }}" class="btn btn-secondary">Back</a>
                <button type="submit">next</button>
            </div>
                </form>
    </div>
</body>
</html>
