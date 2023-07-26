<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <style>
        body {
            align-items: center;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f2f7ff;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #cce5ff;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #0056b3;
        }

        form {
            display: inline-block;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #99c2ff;
            border-radius: 5px;
            background-color: #f0f5ff;
        }

        textarea {
            resize: vertical;
        }

        .btn-group {
            display: inline-block;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .task-details {
            border-left: 5px solid #007bff;
            padding-left: 15px;
            margin-top: 15px;
        }

        .task-details h2 {
            margin-top: 0;
        }

        .task-details p {
            margin-bottom: 0;
            color: #444;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-outline-primary {
            border: 1px solid #007bff;
            color: #007bff;
            background-color: transparent;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }

        .btn-outline-danger {
            border: 1px solid #dc3545;
            color: #dc3545;
            background-color: transparent;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-outline-warning {
            border: 1px solid #ffc107;
            color: #ffc107;
            background-color: transparent;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-outline-success {
            border: 1px solid #28a745;
            color: #28a745;
            background-color: transparent;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }

        .btn-outline-info {
            border: 1px solid #17a2b8;
            color: #17a2b8;
            background-color: transparent;
        }

        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: #fff;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
