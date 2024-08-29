<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid Input</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(6, 1fr); /* 6 columns grid */
            gap: 10px;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        .grid-item {
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
            border: 1px solid #ddd;
        }
        .grid-item input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <div class="grid-container">
        <div class="grid-item">
            <label for="cell1">Cell 1</label>
            <input type="text" id="cell1" name="cell1">
        </div>
        <div class="grid-item">
            <label for="cell2">Cell 2</label>
            <input type="text" id="cell2" name="cell2">
        </div>
        <div class="grid-item">
            <label for="cell3">Cell 3</label>
            <input type="text" id="cell3" name="cell3">
        </div>
        <div class="grid-item">
            <label for="cell4">Cell 4</label>
            <input type="text" id="cell4" name="cell4">
        </div>
        <div class="grid-item">
            <label for="cell5">Cell 5</label>
            <input type="text" id="cell5" name="cell5">
        </div>
        <div class="grid-item">
            <label for="cell6">Cell 6</label>
            <input type="text" id="cell6" name="cell6">
        </div>
    </div>

</body>
</html>
