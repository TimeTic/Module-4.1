<!DOCTYPE html>
<html>
  <head>
    <title>Ti-84 Plus Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>

  <div style="display: flex; justify-content: center; "><h1>Calculator</h1></div>

    <div class="calculator">
      <div class="screen">
        <div class="expression"></div>
        <div class="result"></div>
      </div>
      <div class="buttons">
        <div class="row">
          <button class="key" id="clear">Clear</button>
          <button class="key" id="sign">+/-</button>
          <button class="key" id="percent">%</button>
          <button class="key" id="divide">&divide;</button>
        </div>
        <div class="row">
          <button class="key" id="seven">7</button>
          <button class="key" id="eight">8</button>
          <button class="key" id="nine">9</button>
          <button class="key" id="multiply">&times;</button>
        </div>
        <div class="row">
          <button class="key" id="four">4</button>
          <button class="key" id="five">5</button>
          <button class="key" id="six">6</button>
          <button class="key" id="subtract">&minus;</button>
        </div>
        <div class="row">
          <button class="key" id="one">1</button>
          <button class="key" id="two">2</button>
          <button class="key" id="three">3</button>
          <button class="key" id="add">+</button>
        </div>
        <div class="row">
          <button class="key" id="zero">0</button>
          <button class="key" id="decimal">.</button>
          <button class="key" id="equals">=</button>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div style="display: flex; justify-content: center; "><h1>Do more math operation down below.</h1></div>
    <!-- function to check if the submit button has been pressed. If it has, we retrieve the values of num1 and num2 from the form using the $_POST superglobal variable.  -->
    <form action="function.php" method="get">
    <input type="text" name="num01" placeholder="Number 1">
    <select name="oper">
        <label>Choose operation:</label>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
        <option value="sqrt">Square root</option>
        <option value="pow">Power</option>
        <option value="sin">Sine</option>
        <option value="cos">Cosine</option>
        <option value="tan">Tangent</option>
        <option value="asin">Arcsine</option>
        <option value="acos">Arccosine</option>
        <option value="atan">Arctangent</option>
        <option value="log">Logarithm</option>
        <option value="ln">Natural logarithm</option>
        <option value="abs">Absolute value</option>
        <option value="floor">Floor</option>
        <option value="ceil">Ceiling</option>
    </select>
    <input type="text" name="num02" placeholder="Number 2">
    <button type="submit">Calculate</button>
</form>

<br>
<br>
<br>





    <script src="script.js"></script>
  </body>
</html>
