<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Editor</title>
</head>
<body>
    <form action="/update-pdf" method="post">
        @csrf
        <label for="text">Text:</label>
        <input type="text" name="text" required><br>
        <label for="x">X Coordinate:</label>
        <input type="number" name="x" required><br>
        <label for="y">Y Coordinate:</label>
        <input type="number" name="y" required><br>
        <button type="submit">Update PDF</button>
    </form>
</body>
</html>
