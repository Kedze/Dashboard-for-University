<?php
include_once "database.php";

	

    $id = $_GET["id"];
    $sql = "SELECT * FROM registrations WHERE rid=$id";
    $res = $conn->query($sql);
    $row = mysqli_fetch_array($res);
    $FullName = $row["name"];
    $DOB = $row["date_of_birth"];
    $Email = $row["email"];
    $POB = $row["place_of_birth"];
    $Ip = $row["initial_program"];
    $Gender = $row["gender"];
    $marital = $row["marital_status"];
    $nation = $row["nationality"];
    $nid = $row["national_id"];
    $Num = $row["mobile"];
    $Presentadd = $row["present_address"];
    $Permanentadd = $row["permanent_address"];
    $redeno = $row["r_denomination"];
    $COP = $row["country_of_passport"];
    $COB = $row["country_of_birth"];
    $church = $row["church"];
    $chadd = $row["church_address"];
    $ministrytitle = $row["ministry_title"];
    $DOBdeno = $row["date_of_ordination"];
    $POO = $row["place_of_ordination"];
    $HE = $row["highest_education"];
    $frname = $row["first_reference"];
    $frcon = $row["fr_contact"];
    $fremail = $row["fr_email"];
    $srname = $row["second_reference"];
    $srcon = $row["sr_contact"];
    $sremail = $row["sr_email"];
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Registration</title>

    <meta charset='utf-8'>
   
   
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
</head>
<body>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css' integrity='sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=' crossorigin='anonymous' />

<div class='container'>
<div class='row'>
		<div class='col-12'>
			
			<div class='my-5'>
				<h3>James F. Cook</h3>
				<hr>
			</div>
			<form class='file-upload'>
				<div class='row mb-5 gx-5'>
					
					<div class='col-xxl-8 mb-5 mb-xxl-0'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='mb-4 mt-0'>Personal details</h4>
								
								<div class='col-md-6'>
									<label class='form-label'>Full Name </label>
									<input type='text' class='form-control' id='applicant_name'  aria-label='' value='<?php echo $FullName; ?>'>
									
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Date of Birth </label>
								<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $DOB; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Gender </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $Gender; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Mobile number </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $Num; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label for='inputEmail4' class='form-label'>Email </label>
									<input type='email' class='form-control' id='' value='<?php echo $Email; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Initial Program</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $Ip; ?>'>
								</div>
							</div> 
						</div>
					</div>
					
					<div class='col-xxl-4'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='mb-4 mt-0'>Documents</h4>
								<div class='text-center'>
									
									<div class='square position-relative display-2 mb-3'>
										<i class='fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary'></i>
									</div>
									
									<input type='file' id='customFile' name='file' hidden=''>
									<label class='btn btn-success-soft btn-block' for='customFile'>Download</label>
									<button type='button' class='btn btn-danger-soft'>Remove</button>
									
									
								</div>
							</div>
						</div>
					</div>
				</div> 

				
				<div class='row mb-5 gx-5'>
					<div class='col-xxl-6 mb-5 mb-xxl-0'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='mb-4 mt-0'></h4>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Marital Status</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $marital; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Present Address</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $Presentadd; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Permanent Address</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $Permanentadd; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Nationality</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $nation; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Country of Passport</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $COP; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Country of Birth </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $COB; ?>'>
								</div>
							</div> 
						</div>
					</div>

					
					<div class='col-xxl-6'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='my-4'></h4>
								
								<div class='col-md-6'>
									<label for='exampleInputPassword1' class='form-label'>Religious Denomination </label>
									<input type='text' class='form-control' id='' value='<?php echo $redeno; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label for='exampleInputPassword2' class='form-label'>Ministry (YES/NO)</label>
									<input type='text' class='form-control' id=''>
								</div>
								
								<div class='col-md-12'>
									<label for='exampleInputPassword3' class='form-label'>Name of Church/Ministry</label>
									<input type='text' class='form-control' id='' value= '<?php echo $church; ?>'>
								</div>
								<div class='col-md-6'>
									<label for='exampleInputPassword1' class='form-label'>Ministry Address </label>
									<input type='text' class='form-control' id='' value='<?php echo $chadd; ?>' >
								</div>
								
								<div class='col-md-6'>
									<label for='exampleInputPassword2' class='form-label'>Are you a full time minister?</label>
									<input type='text' class='form-control' id='' value=''>
								</div>
							</div>
						</div>
					</div>


					<div class='col-xxl-8 mb-5 mb-xxl-0'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='mb-4 mt-0'></h4>
								
								<div class='col-md-6'>
									<label class='form-label'>Are you an Ordained Minister</label>
									<input type='text' class='form-control' placeholder='' aria-label='First name' value=''>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Date of Ordination </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $DOBdeno; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Where were you Ordained?  </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $POO; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>By whom/Organisation </label>
									<input type='text' class='form-control' placeholder='' aria-label='' value=''>
								</div>
								
								<div class='col-md-6'>
									<label for='inputEmail4' class='form-label'>What is your highest level of education </label>
									<input type='email' class='form-control' id='' value='<?php echo $HE; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'>Current title in Ministry</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $ministrytitle; ?>'>
								</div>
							</div> 
						</div>
					</div>

					
				</div> 

				
				<div class='row mb-5 gx-5'>
					<div class='col-xxl-6 mb-5 mb-xxl-0'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='mb-4 mt-0'></h4>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Name of Reference (1)</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $frname; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Contact</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $frcon; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Email</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $fremail; ?>'>
								</div>
								
								
							</div> 
						</div>
					</div>

					
					<div class='col-xxl-6'>
						<div class='bg-secondary-soft px-4 py-5 rounded'>
							<div class='row g-3'>
								<h4 class='my-4'></h4>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Name of Reference (2)</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $srname; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Contact</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $srcon; ?>'>
								</div>
								
								<div class='col-md-6'>
									<label class='form-label'></i>Email</label>
									<input type='text' class='form-control' placeholder='' aria-label='' value='<?php echo $sremail; ?>'>
								</div>
								
							</div>
						</div>
					</div>

				
				<div class='gap-3 d-md-flex justify-content-md-end text-center'>
					<button type='button' class='btn btn-danger btn-lg'>Delete profile</button>
					<button type='button' class='btn btn-primary btn-lg'>Update profile</button>
				</div>
			</form> 
			<?php
			 if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            // echo 'Name: '. $row['name']. ' Other names: '. $row['other_names']. ' Church: ' . $row['church'];  
            echo ".['name'].
            
            ";
            
        }
    }

    $conn->close();
			?>
			
		</div>
	</div>
	</div>




<style type='text/css'>
body{margin-top:20px;
color: #9b9ca1;
}
.bg-secondary-soft {
    background-color: rgba(208, 212, 217, 0.1) !important;
}
.rounded {
    border-radius: 5px !important;
}
.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
.file-upload .square {
    height: 250px;
    width: 250px;
    margin: auto;
    vertical-align: middle;
    border: 1px solid #e5dfe4;
    background-color: #fff;
    border-radius: 5px;
}
.text-secondary {
    --bs-text-opacity: 1;
    color: rgba(208, 212, 217, 0.5) !important;
}
.btn-success-soft {
    color: #28a745;
    background-color: rgba(40, 167, 69, 0.1);
}
.btn-danger-soft {
    color: #dc3545;
    background-color: rgba(220, 53, 69, 0.1);
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.5rem 1rem;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 1.6;
    color: #29292e;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e5dfe4;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 5px;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
</style>

<script type='text/javascript'>

</script>

</body>
</html>