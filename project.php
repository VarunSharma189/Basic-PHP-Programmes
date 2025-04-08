<?php
// Function to calculate the factorial of a number
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $factorialResult = factorial($number);
    $primeResult = isPrime($number) ? "Prime" : "Not Prime";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #007BFF;
        }
        input[type="number"] {
            padding: 10px;
            width: 80%;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result h3 {
            color: #28a745;
        }
        .result p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Advanced PHP Calculator</h1>
        <form method="POST" action="">
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Calculate</button>
        </form>

        <?php if (isset($number)): ?>
        <div class="result">
            <h3>Results for <?= htmlspecialchars($number) ?>:</h3>
            <p><strong>Factorial:</strong> <?= $factorialResult ?></p>
            <p><strong>Prime Check:</strong> <?= $primeResult ?></p>
        </div>
        <?php endif; ?>
    </div>

    <script>
        // JavaScript to add interactivity for future enhancements
        // For example, validating the number or dynamically updating results
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const numberInput = document.querySelector('input[name="number"]');
            if (numberInput.value < 0) {
                alert("Please enter a non-negative number.");
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
