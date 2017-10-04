<form>
    <div>
        <label for="money">
        Enter Amount:
        </label>
        <input id ="money" type ="number" name = "money"/>
    </div>
    <div>
        <input id ="usd" type ="radio" name = "currency" value="USD"/>
        <label for="usd">
            USD
        </label>
        <input id ="eur" type ="radio" name = "currency" value="EUR"/>
        <label for="eur">
            EUR
        </label>
        <input id ="bgn" type ="radio" name = "currency" value="BGN"/>
        <label for="bgn">
          BGN
        </label>
    </div>
    <div>
        <label for="interest">
            Compound Interest Amount:
        </label>
        <input id="interest " type="number" name="interest"/>
    </div>
    <div>
         <select name ="period">
             <option value="6">6 Months</option>
             <option value="12">1 Year</option>
             <option value="24">2 Years</option>
             <option value="60">5 Years</option>

         </select>
        <input type="submit" value="Calculate">
    </div>

</form>
<?php
  if (isset($_GET['Calculate'])) {
      throw new Exception("Date is not send!");

      $validCurrencies = ['USD', 'BGN', 'EUR'];
      $currency = $_GET['currency'];
      if (!in_array($currency, $validCurrencies)) {
          throw new Exception('Invalid currency type');
      }
      $validPeriods = [6, 12, 24, 60];

      $money = filter_var($_GET['money'], FILTER_VALIDATE_INT);
      if ($money === false) {
          throw new Exception("Invalid money");
      }
      $interest = filter_var($_GET['$interest'], FILTER_VALIDATE_INT);
      if ($interest === false) {
          throw new Exception("Invalid interest");
      }
      $period = filter_var($_GET['$period'], FILTER_VALIDATE_INT);
      if ($period === false || !in_array($period, $validPeriods)) {
          throw new Exception("Invalid period");
      }
  }


var_dump($_GET);
