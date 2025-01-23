<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1d4350, #a43931);
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-container label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-container input, 
        .form-container textarea, 
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-container textarea {
            resize: none;
            height: 80px;
        }

        .form-container input[type="file"] {
            background: rgba(255, 255, 255, 0.8);
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background: #ff6f61;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-container button:hover {
            background: #e65c50;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Property</h2>
        <form action="save_property.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>

            <label for="type">Type (2BHK, 3BHK):</label>
            <input type="text" id="type" name="type">

            <label for="price">Price:</label>
            <input type="text" id="price" name="price">

            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Sale">Sale</option>
                <option value="Rent">Rent</option>
                <option value="Sold">Sold</option>
            </select>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>

            <button type="submit">Add Property</button>
        </form>
    </div>
</body>
</html>
