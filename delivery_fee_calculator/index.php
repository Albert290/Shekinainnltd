<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Fee Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="text"], button {
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Delivery Fee Calculator</h1>
    <form id="feeCalculator">
        <label for="address">Enter Delivery Address:</label>
        <input type="text" id="address" placeholder="Enter address here" required>
        <button type="submit">Calculate Delivery Fee</button>
    </form>
    <div id="result"></div>

    <script>
        document.getElementById('feeCalculator').onsubmit = async function(event) {
            event.preventDefault();
            const address = document.getElementById('address').value;
            const response = await fetch('calculate_fee.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'address=' + encodeURIComponent(address),
            });
            const result = await response.text();
            document.getElementById('result').innerHTML = result;
        }
    </script>
</body>
</html>
