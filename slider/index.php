
<!DOCTYPE html>
<html>
<head>
	<title> Sldier </title>

	<link href="css/mainstyle.css" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.js"></script>

</head>
<body>

	<input type="hidden" id="tax_debt" name="tax_debt" value="10000"/>

<p class="price-picker">$10,000 - $19,999</p>
<div class="range-slider">
	<div id="slider"></div>
	<input type="hidden" class="taxval">
	<div class="range-value">
		<span class="left-val">$0</span>
		<span class="right-val">$100k +</span>
	</div>
</div>


<script>
    var displayText = ["UNDER $7,500",
    "$7,500 - $9,999", "$10,000 - $19,999", "$20,000 - $49,999", "$50,000 - $99,999", "$100,000 OR MORE"];
    var taxVal = ["5000", "7500", "10000", "20000", "50000", "100000"];
    $("#slider").slider({
        min: 0,
        max: taxVal.length - 1,
        step: 1,
        slide: function(event, ui) {
            $(".price-picker").text(displayText[ui.value]);
            $("#tax_debt").val(taxVal[ui.value]);
        },
        create: function(event, ui) {
            $(this).slider('value', '2');
        }
    });
</script>

</body>
</html>


