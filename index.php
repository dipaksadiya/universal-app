<?php

echo 'Current PHP version: ' . phpversion();


?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>App</title>
   </head>
   <body>
      <div class="card" style="background-color: ;">
      <div class="card-body">
      <div class="container">
      <div class="row">
         <div class="col mb-3">
            <label>Select Inch / Feet<span class="text-danger">*</span></label>
            <select class="form-control" id="inchfeet" required="required">
               <option value="">~~SELECT~~</option>
               <option value="inch">inch</option>
               <option value="feet">feet</option>
            </select>
         </div>
      </div>
      <div class="row">
         <div class="col">
            <label>Width<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="value1"  id="width" required="required">
         </div>
         <div class="col mb-3">
            <label>Length<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="value1"  id="Length" required="required">
         </div>
      </div>
      <div class="row">
         <div class="col mb-3">
            <button type="button" onclick="width_length()" class="btn btn-info col-md-6">Submit</button>
         </div>
      </div>
      <div class="row">
         <div class="col">
            <label>Width Mtr<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="widthmtr"  id="widthmtr" required="required">
         </div>
         <div class="col mb-3">
            <label>Length Mtr<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="value1"  id="lengthmtr" required="required">
         </div>
      </div>
      <div class="row">
         <div class="col mb-3">
            <label>PP rate in KG<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="value1"  id="pprate" required="required">
         </div>
         <div class="col">
            <label>KG</label>
            <input type="number" class="form-control"  name="value1"  id="kg" required="required">
         </div>
      </div>
      <div class="row">
         <div class="col mb-3">
            <label>GSM<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="value1"  id="gms" required="required">
         </div>
      </div>
      <div class="row">
         <div class="col mb-3">
            <button type="button" onclick="price()" class="btn btn-info col-md-6">Submit</button>
         </div>
      </div>
      <div class="table-responsive">
         <table class="table table-bordered mb-3">
            <tr>
               <th></th>
               <th>Purchase</th>
               <th>Sales</th>
            </tr>
            <tr>
               <th>Basic Rate</th>
               <td><span id="purchase1"></span></td>
               <td><span id="sales1"></span></td>
            </tr>
            <tr>
               <th>SGST  (9%)</th>
               <td><span id="sgst1"></span></td>
               <td><span id="sgst2"></span></td>
            </tr>
            <tr>
               <th>CGST  (9%)</th>
               <td><span id="cgst1"></span></td>
               <td><span id="cgst2"></span></td>
            </tr>
            <tr>
               <th>Price</th>
               <td><span id="price1"></span></td>
               <td><span id="price2"></span></td>
            </tr>
         </table>
      </div>
      <script>
         function width_length() 
		 {
           //alert("I am an alert box!");
         	let width=document.getElementById('width').value;
         	let Length=document.getElementById('Length').value;
         	let inchfeet=document.getElementById('inchfeet').value;
         	var widthmtr = document.getElementById('widthmtr');
         	var lengthmtr = document.getElementById('lengthmtr');
         	
         	if(inchfeet=="inch")
         	{	
         		let width_mtr=width *25.4;
         		widthmtr.value = width_mtr;
         		let length_mtr=Length *25.4;
         		lengthmtr.value = length_mtr;
         	}
         	else
         	{
         	let feetwidthmrt=width *12*25.4;
				widthmtr.value = feetwidthmrt;
				let feetlengthmrt=Length *12*25.4;
				lengthmtr.value = feetlengthmrt;
         	}
         	
         }
         function price()
         {
         	var widthmtr = document.getElementById('widthmtr').value;
         	var lengthmtr = document.getElementById('lengthmtr').value;
         	var pprate = document.getElementById('pprate').value;
         	var kg = document.getElementById('kg').value;
         	var gms = document.getElementById('gms').value;
         	
         	//Basic Rate
         	let purchase = widthmtr * lengthmtr * pprate * gms;
             document.getElementById('purchase1').innerHTML = purchase;
         	let sales = widthmtr * lengthmtr * kg * gms;
             document.getElementById('sales1').innerHTML = sales;
         	// SGST
         	let sgst = 9*purchase/100;
         	document.getElementById('sgst1').innerHTML = sgst;
         	document.getElementById('sgst2').innerHTML = sgst;
         	document.getElementById('cgst1').innerHTML = sgst;
         	document.getElementById('cgst2').innerHTML = sgst;
         	//price
         	let price = purchase + sgst;
         	document.getElementById('price1').innerHTML = price;
         	let price1 = sales + sgst;
         	document.getElementById('price2').innerHTML = price1;
         	
         }
      </script>	  
   </body>
</html>