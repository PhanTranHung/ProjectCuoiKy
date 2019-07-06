<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../../picture/huzz.gif">
    <title>Checkout example for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
	<script src="index.js"></script>
	
	
</head>

<body class="bg-light">
	
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2 class="text-uppercase">Order form</h2>
            <p class="lead">* Please complete the form below</p>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3"></h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="text-muted">
							<h5>Product you has choose</h5>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img class="img-selected" src="../../../../../picture/productDISCOVERY SPORT.jpg" alt="">
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">RANGE ROVER</h6>
                        </div>
                        <span class="text-muted">VOGUE</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed" style="padding: 0px;">
                        <div class="text-muted" style="padding: 0.55rem 1.25rem;">
                            Color
                        </div>
						<span class="text-muted">
							<select class="custom-select d-block w-100">
								<option>Blue</option>
								<option>Blue</option>
								<option>Blue</option>
								<option>Blue</option>
								<option>Blue</option>
							</select>
						</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between text-success">
                        <span>Price (USD)</span>
                        <strong id="price">$200.000</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name*</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name*</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
					<div class="mb-3">
                        <label for="phone">Phone number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="padding: 0px;">
									<select class="custom-select d-block w-100">
										<option>+84</option>
										<option>+84</option>
										<option>+84</option>
										<option>+84</option>
									</select>
								</span>
                            </div>
                            <input type="tel" class="form-control" id="phone" placeholder="Viet Nam" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="Google, Microsoft, ..." required>
                        <div class="invalid-feedback" style="width: 100%;">
							Email is required.
						</div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address*</label>
                        <input type="text" class="form-control" id="address" placeholder="Your address" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country*</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Viet Nam">Viet Nam</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State*</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="ahihi	">Ha Hoi</option>
                                <option value="ahihi	">Tp.Ho Chi Minh</option>
                                <option value="ahihi	">Gia Lai</option>
                                <option value="ahihi	">Da Nang</option>
                                <option value="ahihi	">Ninh Thuan</option>
                                <option value="ahihi	">Nhà Bạn Hùng</option>
                                <option value="ahihi	">Ca Mau</option>
                                <option value="ahihi	">Bac Lieu</option>
                                <option value="ahihi	">Quang Nam</option>
                                <option value="ahihi	">Hue</option>
                                <option value="ahihi	">Viet Tri</option>
                                <option value="ahihi	">Vung Tau</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
					<hr class="mb-4">
					<h4 class="mb-3">Payment Method</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="installment" name="paymentMethod" type="radio" class="custom-control-input" required onClick="payMentOn()" checked>
                            <label class="custom-control-label" for="installment">Installment</label>
                        </div>
						<div class="custom-control custom-radio">
                            <input id="payOff" name="paymentMethod" type="radio" class="custom-control-input" required onClick="payMentOff()">
                            <label class="custom-control-label" for="payOff">Pay Off</label>
                        </div>
                    </div>
					<hr class="mb-4">
					<h4 class="mb-3">Payment</h4>
					<div class="d-block my-3">
						<div class="custom-control custom-radio">
							<input id="credit" name="nameCard" type="radio" class="custom-control-input" onClick="CardOn()" checked required>
							<label class="custom-control-label" for="credit">Credit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="debit" name="nameCard" type="radio" class="custom-control-input" onClick="CardOn()" required>
							<label class="custom-control-label" for="debit">Debit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="paypal" name="nameCard" type="radio" class="custom-control-input" onClick="CardOn()" required>
							<label class="custom-control-label" for="paypal">Paypal</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="payCashs" name="nameCard" type="radio" class="custom-control-input" onClick="CardOff()" required>
							<label class="custom-control-label" for="payCashs">Pay cash</label>
						</div>
					</div>
					<div id="card">
						<hr class="mb-4">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="cc-name">Name on card</label>
								<input type="text" class="form-control" id="cc-name" placeholder="" required>
								<small class="text-muted">Full name as displayed on card</small>
								<div class="invalid-feedback">
									Name on card is required
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="cc-number">Credit card number</label>
								<input type="text" class="form-control" id="cc-number" placeholder="" required>
								<div class="invalid-feedback">
									Credit card number is required
								</div>
							</div>
						</div>
						<hr class="mb-4">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="perpay">Prepay</label>
								<select class="custom-select d-block w-100" name="" id="perpay" onChange="perPay()">
									<option value="10">10%</option>
									<option value="15">15%</option>
									<option value="20" selected>20%</option>
									<option value="25">25%</option>
									<option value="30">30%</option>
									<option value="50">50%</option>
								</select>
								<div class="invalid-feedback">
									Name on card is required
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="amount">Amount of money</label>
								<input type="text" class="form-control" id="amount" value="$40000" placeholder="" required disabled>
								<div class="invalid-feedback">
									Credit card number is required
								</div>
							</div>
						</div>
					</div>
					<div id="time">
						<hr class="mb-4">
						<div class="row">
							<div class="col-md-5 mb-3">
								<label for="">Name on card</label>
								<select class="custom-select d-block w-100" name="" id="month" onChange="myFunction()">
									<option value="6">6 month</option>
									<option value="10">10 month</option>
									<option value="12" selected>1 year</option>
									<option value="18">1.5 year</option>
									<option value="24">2 year</option>
									<option value="36">3 year</option>
								</select>
								<small class="text-muted">Full name as displayed on card</small>
							</div>
							<div class="col-md-4 mb-3">
								<label for="">Credit card number</label>
								<input type="number" class="form-control" id="money" placeholder="" required value="0" min="0" disabled>
							</div>
							<div class="col-md-3 mb-3">
								<label for="">Interest rate</label>
								<input type="text" class="form-control" id="interest" placeholder="" required value="2%" min="0" disabled>
							</div>
						</div>
					</div>
					<hr class="mb-4">
                    <button class="btn btn-lg btn-pa" type="submit">Accept</button>
                </form>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>