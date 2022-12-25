<?php include('header.php'); ?>
<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Customer Order</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<style type="text/css">
		label{
			font-weight: bold;
		}
	</style>
	<div class="container jumbotron bg-light">
		<div class="row">
			<div class="col-xl-12 jumbotron">
				<form id="orderForm">
					<h2 class="alert">Food Details</h2>
					<div class="form-row">
						<div class="form-group col-xl-6 col-12">
						<label for="foodType">Food Type *</label>
						<select name="foodType" id="foodType" class="form-control" onchange="able_fnameFun()">
							<option value="">Select Type of Food</option>
							<option value="Breakfast">Breakfast</option>
							<option value="Lunch">Lunch</option>
							<option value="Dinner">Dinner</option>
							<option value="Drinks">Drinks</option>
							
						</select>
					    </div>
					    <div class="form-group col-xl-6 col-12">
						<label for="foodName">Food Name *</label>
						<select name="foodName" id="foodName" class="form-control" disabled="true" onchange="cal_rtFun(this.value)">
							<option value="">Select what type of food you want</option>
							<option value="Burgar">Burgar</option>
							<option value="Burgar King">Burgar King</option>
							<option value="Cheese Burger">Cheese Burger</option>
							<option value="Sandwich">Sandwich</option>
							<option value="Milk Shake">Milk Shake</option>
							<option value="Hot Dog">Hot Dog</option>
							<option value="Soft Drink">Soft Drink</option>
							<option value="Pizza">Pizza</option>
							<option value="Noodle">Noodle</option>
							
						</select>
					    </div>
					</div>
					<!-- form row -->
					<div class="form-row">
						<div class="form-group col-xl-3 col-4">
						<label for="qty">Quantity *</label>
						<p>
							<button type="button" id="minus_btn" class=" bg-danger rounded-circle text-light" onclick="sub_minus()" disabled="true">--</button>
							<span style="margin-left:5px;margin-right:5px;font-size:25px;" id="qty">1</span>
							<button type="button" id="plus_btn" class="bg-success rounded-circle text-light" onclick="add_plus()" disabled="true">+</button>
						</p>
						
					    </div>
					    <div class="form-group col-xl-3 col-4">
						<label for="rate">Rate *</label>
						<input type="text" name="rate" id="rate" class="form-control" readonly>
						<input type="hidden" name="rate2" id="rate2" class="form-control" readonly>

					    </div>
					    <div class="form-group col-xl-6 col-4">
						<label for="total_amount">Total Amount *</label>
						<input type="text" name="total_amount" id="total_amount" class="form-control" readonly>
					    </div>
					</div>
					<!-- form row -->
					<div class="card jumbotron">
						<h1 class="card-title">Personal Information</h1>
							<div class="form-row">
						<div class="form-group col-xl-6 col-12">
						<label for="customer_name">Your Name *</label>
						<input type="text" name="customer_name" id="customer_name" class="form-control">
						
					    </div>
					    <div class="form-group col-xl-6 col-12">
						<label for="phone">Phone Number*</label>
						<input type="text" name="phone" id="phone" class="form-control">
					    </div>
					</div>
					<!-- form row -->

					<div class="form-group">
						<label for="email">Email Id</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<!-- form group -->

					<div class="form-row">
						<div class="form-group col-xl-6 col-12">
						<label for="landmark">Landmark / Locality *</label>
						<input type="text" name="landmark" id="landmark" class="form-control">
						
					    </div>
					    <div class="form-group col-xl-6 col-12">
						<label for="pincode">Pincode *</label>
						<input type="text" name="pincode" id="pincode" class="form-control">
					    </div>
					</div>
					<!-- form row -->

					<div class="form-group">
						<label for="address">Address *</label>
						<input type="text" name="address" id="address" class="form-control">
					</div>
					<!-- form group -->
					<div class="form-row">
						<div class="form-group col-xl-6 col-12">
						<label for="city">City *</label>
						<select name="city" id="city" class="form-control" >
							<option value="">Select Your Distict</option>
							<option value="Breakfast">Gorakhpur</option>
							
							
						</select>
					    </div>
					    <div class="form-group col-xl-6 col-12">
						<label for="state">State *</label>
						<select name="state" id="state" class="form-control" >
							<option value="">Select Your state</option>
							<option value="Burgar">Uttar Pradesh</option>
							
							
						</select>
					    </div>
					</div>
					<!-- form row -->



					<!-- button -->

					<div class="form-group text-center my-5">
						<button type="button" class="btn btn-danger">Order Placed</button>
					</div>
						
					</div>
					<!-- card -->





				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">		

		function add_plus()
		{
		   var qty = parseInt($('#qty').html());
		   var rate = parseInt($('#rate2').val());

		   var newqty = parseInt(qty+1);
		   $('#qty').html(newqty);
		   $('#total_amount').val(newqty*rate);


		}//function close

		function sub_minus()
		{
           var qty = parseInt($('#qty').html());
           var rate = parseInt($('#rate2').val());


           if(qty <= 1)
           {

           	  $('#qty').html('1');
           	  $('#total_amount').val(1*rate);

           }else{
           		var newqty = parseInt(qty-1);
           		$('#qty').html(newqty);
           	$('#total_amount').val(newqty*rate);
		

           }
		}// function close

		function able_fnameFun()
		{
			//alert('okk')
			$('#foodName').attr('disabled',false)
						

		}// function close

		function cal_rtFun(val)
		{
			$('#plus_btn').attr('disabled',false)
			$('#minus_btn').attr('disabled',false)
			var rt = 0;
		   if(val == 'Burgar')
		   {
		   	  //alert(rt)
		   	  rt = parseInt(15);
		   }

		   var qty = parseInt($('#qty').html());

		   $('#rate').val(rt);
		   $('#rate2').val(rt);
		   		   $('#total_amount').val(rt*qty);



		}



		
	</script>


<?php include('customer-review.php'); ?>

<?php include('footer.php'); ?>