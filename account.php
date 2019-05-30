<?php 
	session_start();

	include 'HF/header.php';

?>


	<div class="container my-account">
		<div class="row">
			<div class="col-sm-6">
				<h1>Account Information</h1>
			</div>
			<div class="col-sm-6">
				<form>
					<input type="text" hidden readonly>
					<div class="form-group">
					    <label >Name</label>
					    <input type="text" class="form-control">
				  	</div>
					<div class="form-group">
					    <label >Email</label>
					    <input type="email" class="form-control">
				  	</div>
				  	<div class="form-group">
					    <label >Phone</label>
					    <input type="text" class="form-control">
				  	</div>
				  	<div class="form-group">
					    <label >Address</label>
					    <input type="text" class="form-control">
				  	</div>
				  	<div class="form-group">
					    <label >Password</label>
				    	<input type="password" class="form-control">
				  	</div>
				  	<div class="form-group">
					    <label >RePassword</label>
				    	<input type="password" class="form-control">
				  	</div>
				</form>
			</div>
		</div>
	</div>


	<style>
		div.my-account {
			margin-top: 150px;
			padding: 100px 0;

		}

		div.my-account div.col-sm-6:nth-child(1) {
			border-right: 1px solid black;
		}
	</style>

<?php 

	include('HF/footer.php');

?>