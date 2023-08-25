<!DOCTYPE html>
<html>
<head>
    <title>Stripe Payment</title>
</head>
<body>
    
    <form action="charge.php" method="post">
        <label for="card_number">Card Number</label>
        <input type="text" id="card_number" name="card_number" required><br>

        <label for="exp_month">Expiration Month</label>
        <input type="text" id="exp_month" name="exp_month" required><br>

        <label for="exp_year">Expiration Year</label>
        <input type="text" id="exp_year" name="exp_year" required><br>

        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" required><br>

        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
