<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
</head>

<body>

<form action="" method="POST" id="checkout-form">
  
  <div>
	  <label for="creditCard">Card Number</label>
	  <input type="text" name="creditCard" id="creditCard">
  </div>
 
  <div>
	  <label for="cvv">Security Code</label>
	  <input type="text" name="cvv" id="cvv">
  </div>
  
  <div>
    <label for="Expiration">Exp. (MM/YYYY)</label>
      <input type="text" name="exp-month" id="exp-month" size="2">
      <span> / </span>
      <input type="text" name="exp-year" id="exp-year" size="4">
  </div>

  <button type="submit" id="submit-button">Buy Now</button>
  
</form>
</body>

</html>


