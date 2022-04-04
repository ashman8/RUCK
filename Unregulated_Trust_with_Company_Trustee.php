<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUCK_SANDBOX</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<?php
// Need to use sessions for login - always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
</head>

<body style="background-color:#dddddd;"><?php
//update query part 1
  include_once 'database.php';
  if (count($_POST)>0) {
$customer_ID = mysqli_real_escape_string($conn, $_POST['customer_ID']);
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$customer_type = mysqli_real_escape_string($conn, $_POST['customer_type']);
$partnership = mysqli_real_escape_string($conn, $_POST['partnership']);
$partner = mysqli_real_escape_string($conn, $_POST['partner']);
$customer_status = mysqli_real_escape_string($conn, $_POST['customer_status']);
$responsible = mysqli_real_escape_string($conn, $_POST['responsible']);
$updatedate = mysqli_real_escape_string($conn, $_POST['updatedate']);
$reviewdate = mysqli_real_escape_string($conn, $_POST['reviewdate']);
$internal_comments = mysqli_real_escape_string($conn, $_POST['internal_comments']);
$riskrating = mysqli_real_escape_string($conn, $_POST['riskrating']);
$customer_industry = mysqli_real_escape_string($conn, $_POST['customer_industry']);
$pep = mysqli_real_escape_string($conn, $_POST['pep']);
$media = mysqli_real_escape_string($conn, $_POST['media']);
$sanction = mysqli_real_escape_string($conn, $_POST['sanction']);
$entitymedia = mysqli_real_escape_string($conn, $_POST['entitymedia']);
$entitysanction = mysqli_real_escape_string($conn, $_POST['entitysanction']);
$smr = mysqli_real_escape_string($conn, $_POST['smr']);
$riskcomments = mysqli_real_escape_string($conn, $_POST['riskcomments']);
$sourceofwealth = mysqli_real_escape_string($conn, $_POST['sourceofwealth']);
$customer_phone = mysqli_real_escape_string($conn, $_POST['customer_phone']);
$customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
$cust_post_1 = mysqli_real_escape_string($conn, $_POST['cust_post_1']);
$cust_post_2 = mysqli_real_escape_string($conn, $_POST['cust_post_2']);
$cust_post_suburb = mysqli_real_escape_string($conn, $_POST['cust_post_suburb']);
$cust_post_state = mysqli_real_escape_string($conn, $_POST['cust_post_state']);
$cust_post_postcode = mysqli_real_escape_string($conn, $_POST['cust_post_postcode']);
$cust_post_country = mysqli_real_escape_string($conn, $_POST['cust_post_country']);

$trust_name = mysqli_real_escape_string($conn, $_POST['trust_name']);
$trust_type = mysqli_real_escape_string($conn, $_POST['trust_type']);
$trust_country = mysqli_real_escape_string($conn, $_POST['trust_country']);
$trust_abn = mysqli_real_escape_string($conn, $_POST['trust_abn']);
$beneficiary_class = mysqli_real_escape_string($conn, $_POST['beneficiary_class']);
$beneficiary_class_details = mysqli_real_escape_string($conn, $_POST['beneficiary_class_details']);

$company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
$company_acn = mysqli_real_escape_string($conn, $_POST['company_acn']);
$company_abn = mysqli_real_escape_string($conn, $_POST['company_abn']);
$company_type = mysqli_real_escape_string($conn, $_POST['company_type']);
$company_nature_business = mysqli_real_escape_string($conn, $_POST['company_nature_business']);
$regoffice_street_no = mysqli_real_escape_string($conn, $_POST['regoffice_street_no']);
$regoffice_street = mysqli_real_escape_string($conn, $_POST['regoffice_street']);
$regoffice_street_type = mysqli_real_escape_string($conn, $_POST['regoffice_street_type']);
$regoffice_suburb = mysqli_real_escape_string($conn, $_POST['regoffice_suburb']);
$regoffice_state = mysqli_real_escape_string($conn, $_POST['regoffice_state']);
$regoffice_postcode = mysqli_real_escape_string($conn, $_POST['regoffice_postcode']);
$regoffice_country = mysqli_real_escape_string($conn, $_POST['regoffice_country']);
$prinplace_street_no = mysqli_real_escape_string($conn, $_POST['prinplace_street_no']);
$prinplace_street = mysqli_real_escape_string($conn, $_POST['prinplace_street']);
$prinplace_street_type = mysqli_real_escape_string($conn, $_POST['prinplace_street_type']);
$prinplace_suburb = mysqli_real_escape_string($conn, $_POST['prinplace_suburb']);
$prinplace_state = mysqli_real_escape_string($conn, $_POST['prinplace_state']);
$prinplace_postcode = mysqli_real_escape_string($conn, $_POST['prinplace_postcode']);
$prinplace_country = mysqli_real_escape_string($conn, $_POST['prinplace_country']);

$tfn = mysqli_real_escape_string($conn, $_POST['tfn']);
$tfn_exempt = mysqli_real_escape_string($conn, $_POST['tfn_exempt']);
$taxentity = mysqli_real_escape_string($conn, $_POST['taxentity']);
$tax_fn_1 = mysqli_real_escape_string($conn, $_POST['tax_fn_1']);
$tax_ln_1 = mysqli_real_escape_string($conn, $_POST['tax_ln_1']);
$tax_fn_2 = mysqli_real_escape_string($conn, $_POST['tax_fn_2']);
$tax_ln_2 = mysqli_real_escape_string($conn, $_POST['tax_ln_2']);
$tax_fn_3 = mysqli_real_escape_string($conn, $_POST['tax_fn_3']);
$tax_ln_3 = mysqli_real_escape_string($conn, $_POST['tax_ln_3']);
$tax_fn_4 = mysqli_real_escape_string($conn, $_POST['tax_fn_4']);
$tax_ln_4 = mysqli_real_escape_string($conn, $_POST['tax_ln_4']);
$tax_fn_01 = mysqli_real_escape_string($conn, $_POST['tax_fn_01']);
$tax_ln_01 = mysqli_real_escape_string($conn, $_POST['tax_ln_01']);
$tax_fn_02 = mysqli_real_escape_string($conn, $_POST['tax_fn_02']);
$tax_ln_02 = mysqli_real_escape_string($conn, $_POST['tax_ln_02']);
$tax_fn_03 = mysqli_real_escape_string($conn, $_POST['tax_fn_03']);
$tax_ln_03 = mysqli_real_escape_string($conn, $_POST['tax_ln_03']);
$tax_fn_04 = mysqli_real_escape_string($conn, $_POST['tax_fn_04']);
$tax_ln_04 = mysqli_real_escape_string($conn, $_POST['tax_ln_04']);

$investment_entity = $_POST['investment_entity'];
if ($investment_entity == 1) {
$investment_entity = 1;
} else {
$investment_entity  = 0;
}

$other_investment_entity = $_POST['other_investment_entity'];
if ($other_investment_entity == 1) {
$other_investment_entity = 1;
} else {
$other_investment_entity  = 0;
}

$NFE_corp = $_POST['NFE_corp'];
if ($NFE_corp == 1) {
$NFE_corp = 1;
} else {
$NFE_corp  = 0;
}

$NFE_gov = $_POST['NFE_gov'];
if ($NFE_gov == 1) {
$NFE_gov = 1;
} else {
$NFE_gov  = 0;
}

$NFE_intorg = $_POST['NFE_intorg'];
if ($NFE_intorg == 1) {
$NFE_intorg = 1;
} else {
$NFE_intorg  = 0;
}

$NFE_other = $_POST['NFE_other'];
if ($NFE_other == 1) {
$NFE_other = 1;
} else {
$NFE_other  = 0;
}

$passive_NFE = $_POST['passive_NFE'];
if ($passive_NFE == 1) {
$passive_NFE = 1;
} else {
$passive_NFE  = 0;
}


//update query part 2
$customer = "update customer set 
	customer_name ='$customer_name',
	customer_type ='$customer_type',
	partnership ='$partnership',
	partner ='$partner',
	customer_status ='$customer_status',
	responsible ='$responsible',
	updatedate ='$updatedate',
	reviewdate ='$reviewdate',
	internal_comments ='$internal_comments',
	customer_phone ='$customer_phone',
	customer_email ='$customer_email',
	cust_post_1 ='$cust_post_1',
	cust_post_2 ='$cust_post_2',
	cust_post_suburb ='$cust_post_suburb',
	cust_post_state ='$cust_post_state',
	cust_post_postcode ='$cust_post_postcode',
	cust_post_country ='$cust_post_country',
	riskrating ='$riskrating',
	customer_industry ='$customer_industry',
	pep ='$pep',
	media ='$media',
	sanction ='$sanction',
	entitymedia ='$entitymedia',
	entitysanction ='$entitysanction',
	smr ='$smr',
	riskcomments ='$riskcomments',
	sourceofwealth ='$sourceofwealth',
	tfn ='$tfn',
	tfn_exempt ='$tfn_exempt',
	taxentity ='$taxentity',
	investment_entity ='$investment_entity',
	tax_fn_1 ='$tax_fn_1',
	tax_ln_1 ='$tax_ln_1',
	tax_fn_2 ='$tax_fn_2',
	tax_ln_2 ='$tax_ln_2',
	tax_fn_3 ='$tax_fn_3',
	tax_ln_3 ='$tax_ln_3',
	tax_fn_4 ='$tax_fn_4',
	tax_ln_4 ='$tax_ln_4',
	other_investment_entity ='$other_investment_entity',
	NFE_corp ='$NFE_corp',
	NFE_gov ='$NFE_gov',
	NFE_intorg ='$NFE_intorg',
	NFE_other ='$NFE_other',
	passive_NFE ='$passive_NFE',
	tax_fn_01 ='$tax_fn_01',
	tax_ln_01 ='$tax_ln_01',
	tax_fn_02 ='$tax_fn_02',
	tax_ln_02 ='$tax_ln_02',
	tax_fn_03 ='$tax_fn_03',
	tax_ln_03 ='$tax_ln_03',
	tax_fn_04 ='$tax_fn_04',
	tax_ln_04 ='$tax_ln_04'
	WHERE customer_ID='$customer_ID'";

$trust = "update trust set 
	trust_name ='$trust_name',
	trust_type ='$trust_type',
	trust_country ='$trust_country',
	trust_abn ='$trust_abn',
	beneficiary_class ='$beneficiary_class',
	beneficiary_class_details ='$beneficiary_class_details'
	WHERE customer_ID='$customer_ID'";

$company = "update company set 
	company_name ='$company_name',
	company_acn ='$company_acn',
	company_abn ='$company_abn',
	company_type ='$company_type',
	company_nature_business ='$company_nature_business',
	regoffice_street_no ='$regoffice_street_no',
	regoffice_street ='$regoffice_street',
	regoffice_street_type ='$regoffice_street_type',
	regoffice_suburb ='$regoffice_suburb',
	regoffice_state ='$regoffice_state',
	regoffice_postcode ='$regoffice_postcode',
	regoffice_country ='$regoffice_country',
	prinplace_street_no ='$prinplace_street_no',
	prinplace_street ='$prinplace_street',
	prinplace_street_type ='$prinplace_street_type',
	prinplace_suburb ='$prinplace_suburb',
	prinplace_state ='$prinplace_state',
	prinplace_postcode ='$prinplace_postcode',
	prinplace_country ='$prinplace_country'
	WHERE customer_ID='$customer_ID'";


//update query part 3
$exc1 = mysqli_query($conn, $customer);
$exc2 = mysqli_query($conn, $trust);
$exc3 = mysqli_query($conn, $company);


//update query part 4
if ($exc1 and $exc2 and $exc3) {
	$message = "<b>Record Modified Successfully</b><br>";
	} else {
	$message = "Error updating record, a customer with the same name may already exist. " . mysqli_error($conn);
	}
 }
?>


  <?php
//retreive query part 1
$customer_ID = $_GET['customer_ID'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE customer_ID='" . $customer_ID. "'");
$customer = mysqli_query($conn, "SELECT * FROM customer WHERE customer_ID='" . $customer_ID. "'");
$trust = mysqli_query($conn, "SELECT * FROM trust WHERE customer_ID='" . $customer_ID . "'");
$company = mysqli_query($conn, "SELECT * FROM company WHERE customer_ID='" . $customer_ID . "'");
$qa = mysqli_query($conn, "SELECT * FROM qa WHERE customer_ID='" . $customer_ID . "'");


//retreive query part 2
$row = mysqli_fetch_array($result);
$customer = mysqli_fetch_assoc($customer);
$trust = mysqli_fetch_assoc($trust);
$company = mysqli_fetch_assoc($company);
$qa = mysqli_fetch_assoc($qa);

  ?><?php

if(isset($_POST['submit']))
{   
 $reference = 'customer';
 $milliseconds = round(microtime(true));   
 $file = $milliseconds."_".$_FILES['customerfile']['name'];
 $file_loc = $_FILES['customerfile']['tmp_name'];
 $file_size = $_FILES['customerfile']['size'];
 $file_type = $_FILES['customerfile']['type'];
 $folder="uploads/";
 $customer_ID = $_POST['customer_ID'];

 
 /* new file size in KB */
 $new_size = $file_size/1024;
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO files(customer_ID,reference,file,type,size) VALUES('$customer_ID','$reference','$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "";
		
		}
	}
?>

<?php

if(isset($_POST['submit']))
{   
 $reference = 'trust';
 $milliseconds = round(microtime(true));   
 $file = $milliseconds."_".$_FILES['trustfile']['name'];
 $file_loc = $_FILES['trustfile']['tmp_name'];
 $file_size = $_FILES['trustfile']['size'];
 $file_type = $_FILES['trustfile']['type'];
 $folder="uploads/";
 $customer_ID = $_POST['customer_ID'];

 
 /* new file size in KB */
 $new_size = $file_size/1024;
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO files(customer_ID,reference,file,type,size) VALUES('$customer_ID','$reference','$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "";
		
		}
	}
?>

<?php

if(isset($_POST['submit']))
{   
 $reference = 'company';
 $milliseconds = round(microtime(true));   
 $file = $milliseconds."_".$_FILES['companyfile']['name'];
 $file_loc = $_FILES['companyfile']['tmp_name'];
 $file_size = $_FILES['companyfile']['size'];
 $file_type = $_FILES['companyfile']['type'];
 $folder="uploads/";
 $customer_ID = $_POST['customer_ID'];

 
 /* new file size in KB */
 $new_size = $file_size/1024;
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO files(customer_ID,reference,file,type,size) VALUES('$customer_ID','$reference','$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "";
		
		}
	}
?>
    <div class="container">
        <div class="row" style="background-color:#ffc107;">
            <div class="col">
                <p class="text-center text-white" style="margin:0px;"><strong>SANDBOX</strong></p>
            </div>
        </div>
        <div>
            <div class="row" style="background-color:#ffffff;">
                <div class="col" style="background-color:#444444;">
                    <nav class="navbar navbar-light navbar-expand-md">
                        <div class="container-fluid"><a class="navbar-brand text-white bg-danger" href="dashboards" style="font-family:'Archivo Black', sans-serif;font-size:23px;background-color:#dc3545;"><strong>&nbsp;RUCK Compliance&nbsp;</strong><br></a><button class="navbar-toggler"
                                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="customers"><strong>Customers</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="dashboards"><strong>Dashboards</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="new_customer"><strong>New Customer</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="clientportal"><strong>Client Portal</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="db_smr"><strong>SMR</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="logout">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:#ffffff;">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><b><?php echo $row['customer_name']; ?></b></div>
                </div>
                <div class="row">
                    <div class="col">
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><?php if(isset($message)) { echo $message; } ?></div>
                </div>
                <div>
                    <form action=""id="riskscore" method="post" enctype="multipart/form-data"><input type="hidden" name="customer_ID" value="<?php echo $row['customer_ID'] ?>">
                        <div>
                            <ul class="nav nav-tabs" style="color:rgb(255,255,255);">
                                <li class="nav-item"><a class="nav-link text-white bg-danger active" role="tab" data-toggle="tab" href="#tab-1"><strong>Customer Information</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-2"><strong>Trust Details</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-5"><strong>Company Trustee Details</strong><br></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-7"><strong>Signatory(s)</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-10"><strong>Risk Rating</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-3"><strong>Other Details</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-4"><strong>Notes</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-11"><strong>QA</strong></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-danger" role="tab" data-toggle="tab" href="#tab-6"><strong>KYC</strong></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <div class="container" style="padding:0px;">
                                        <div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Customer Information</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="Type the full name of the customer. ie ABC Pty Ltd ATF XYZ Family Trust">Customer name</label><input class="form-control" type="text" name="customer_name" value="<?php echo $customer['customer_name']; ?>" required=""></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-auto"><label class="col-form-label">Internal reference number</label><input class="form-control" type="text" name="customer_ID" value="<?php echo $customer['customer_ID']; ?>" readonly=""></div>
                                                <div class="col-8"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="If changing the customer type, please save this page then go to the 'Customer' page, find the customer and click edit to continue editing.">Customer type</label><div class="form-group">
<select class="form-control" id="customer_type" name="customer_type" required>
  <option value="<?php echo $customer['customer_type']?>"><?php echo $customer['customer_type'] ?></option>
  <option value="Individual">Individual</option>
  <option value="Sole_Trader">Sole_Trader</option>
  <option value="Regulated_Trust_with_Company_Trustee">Regulated_Trust_with_Company_Trustee</option>
  <option value="Regulated_Trust_with_Individual_Trustee">Regulated_Trust_with_Individual_Trustee</option>
  <option value="Unregulated_Trust_with_Company_Trustee">Unregulated_Trust_with_Company_Trustee</option>
  <option value="Unregulated_Trust_with_Individual_Trustee">Unregulated_Trust_with_Individual_Trustee</option>
  <option value="Company">Company</option>
  <option value="Association">Association</option>
  <option value="Partnership">Partnership</option>
</select>
  </div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-auto"><label class="col-form-label">Customer input date</label><input class="form-control" type="text" value="<?php echo $customer['inputdate']; ?>" readonly=""></div>
                                                <div class="col-auto"><label class="col-form-label">Is this customer part of a partnership?</label><div class="form-group">
<select class="form-control" id="partnership" name="partnership">
  <option value="<?php echo $customer['partnership'] ?>"><?php echo $customer['partnership'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option></select>
  </div></div>
                                                <div class="col-auto">
                                                    <div id="part"><label>Select partnership</label><div class="form-group">
<select class="form-control" id="partner" name="partner">
    <option value=""></option>
<?php
$sqli = "SELECT `customer_name` FROM customer WHERE `customer_type` = 'Partnership' order by customer_name";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['customer_name'].'</option>';
}
?>
</select>
</div></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-auto"><label class="col-form-label">Responsible team / Person</label><div class="form-group">
<select class="form-control" id="responsible" name="responsible">
  <option value="<?php echo $customer['responsible']?>"><?php echo $customer['responsible'] ?></option>
<?php
$sqli = "SELECT username FROM accounts order by username";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['username'].'</option>';
}
echo '</select>';
?>
</select>
  </div></div>
                                                <div class="col-auto"><label class="col-form-label">Customer status</label><div class="form-group">
<select class="form-control" id="customer_status" name="customer_status">
  <option value="<?php echo $customer['customer_status'] ?>"><?php echo $customer['customer_status'] ?></option>
  <option value="In progress">In progress</option>
  <option value="Pending information">Pending information</option>
  <option value="Active">Active</option>
  <option value="Inactive">Inactive</option>
</select>
  </div></div>
                                                <div class="col-auto"><label class="col-form-label">Last update date<br></label><input class="form-control" type="text" value="<?php echo $customer['updatedate']; ?>" readonly=""></div>
                                                <div class="col-auto"><label class="col-form-label">Next review date<br></label><input class="form-control" type="date" name="reviewdate" value="<?php echo $customer['reviewdate']; ?>"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><input class="form-control" type="hidden" name="updatedate" value="<?php echo date("d/m/Y"); ?>"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Contact Details</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label">Phone number</label><input class="form-control" type="text" name="customer_phone" value="<?php echo $customer['customer_phone']; ?>"></div>
                                                <div class="col"><label class="col-form-label">Email address</label><input class="form-control" type="email" name="customer_email" value="<?php echo $customer['customer_email']; ?>"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"><strong>Postal address</strong></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-2"><label class="col-form-label">Address line 1</label></div>
                                                <div class="col"><input class="form-control" type="text" name="cust_post_1" value="<?php echo $customer['cust_post_1']; ?>"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-2"><label class="col-form-label">Address line 2<br></label></div>
                                                <div class="col"><input class="form-control" type="text" name="cust_post_2" value="<?php echo $customer['cust_post_2']; ?>"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $customer['cust_post_suburb']?>" name="cust_post_suburb" class="form-control" id="cust_post_suburb" /></div>
                                                <div class="col-auto"><label class="col-form-label">State</label><select class="form-control" id="cust_post_state" name="cust_post_state">
  <option value="<?php echo $customer['cust_post_state'] ?>"><?php echo $customer['cust_post_state'] ?></option>
  <option value="VIC">VIC</option>
  <option value="NSW">NSW</option>
  <option value="ACT">ACT</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="WA">WA</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
</select></div>
                                                <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $customer['cust_post_postcode']?>" name="cust_post_postcode" maxlength="4" class="form-control" id="cust_post_postcode" /></div>
                                                <div class="col-auto"><label class="col-form-label">Country</label><select class="form-control" id="cust_post_country" name="cust_post_country">
<option value="<?php echo $customer['cust_post_country'] ?>"><?php echo $customer['cust_post_country'] ?></option>
<option value=""></option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Internal Comments</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><textarea name="internal_comments" class="form-control" style="height:200px" id="internal_comments"><?php echo $customer['internal_comments']?></textarea></div>
                                            </div>
                                            <div>
                                                <div class="form-row">
                                                    <div class="col" style="padding:5px 0px;">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col" style="padding:5px 0px;">
                                                        <p class="text-center text-white bg-danger"><strong>Customer file(s)</strong><br></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col"><a href="resources" target="_blank">Refer to the resources page for verification options.</a></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-auto"><input type="file" name="customerfile" value="customerfile"><small class="form-text text-muted">Only one file can be uploaded at a time.</small>
                                                        <p></p>
                                                    </div>
                                                    <div class="col"><div class="table-responsive">                   
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM files WHERE `customer_ID` = '$customer_ID' AND `reference` = 'customer'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Saved files</strong></td>
    <td><strong></strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["file"];?></td>
<td class="text-right"><a target="_blank" href="uploads/<?php echo $row["file"]; ?>">Download</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No files found";
}
?></div>
</div></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col"><input class="btn btn-danger" type="submit" value="Upload/Save" name="submit" style="width:120px;"><small class="form-text text-muted">When you click upload, any customer information entered will also be saved.</small></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col" style="padding:5px 0px;">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><input class="btn btn-danger" type="submit" value="Save" name="submit" style="width:80px;"></div>
                                            </div>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p class="text-center text-white bg-danger"><strong>Trust Details</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Full name of trust</label><input class="form-control" type="text" name="trust_name" value="<?php echo $trust['trust_name']; ?>"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto"><label class="col-form-label">Type of trust</label><div class="form-group">
<select class="form-control" id="trust_type" name="trust_type">
  <option value="<?php echo $trust['trust_type'] ?>"><?php echo $trust['trust_type'] ?></option>
  <option value="Discretionary / Family Trust">Discretionary / Family Trust</option>
  <option value="Unit / Fixed Trust">Unit / Fixed Trust</option>
  <option value="Charitable Trust">Charitable Trust</option>
  <option value="Testamentary Trust">Testamentary Trust</option>
</select>
  </div></div>
                                        <div class="col-auto"><label class="col-form-label">ABN</label><input class="form-control" type="text" name="trust_abn" value="<?php echo $trust['trust_abn']; ?>"></div>
                                        <div class="col-6"><label class="col-form-label">Country trust was established</label><div class="form-group">
<select class="form-control" id="trust_country" name="trust_country">
	<option value="<?php echo $trust['trust_country'] ?>"><?php echo $trust['trust_country'] ?></option><option value="Australia">Australia</option><option value="New Zealand">New Zealand</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cota D&#39;Ivoire">Cote d&#39;Ivoire</option><option value="Croatia">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option><option value="Holy See">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Democratic People&#39;s Republic of Korea">Korea, Democratic People&#39;s Republic of</option><option value="Korea">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao">Lao People&#39;s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia, Federated States of</option><option value="Moldova">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint LUCIA">Saint LUCIA</option><option value="Saint Vincent">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia (Slovak Republic)</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia">South Georgia and the South Sandwich Islands</option><option value="Span">Spain</option><option value="SriLanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syrian Arab Republic</option><option value="Taiwan">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Viet Nam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option><option value="Wallis and Futana Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Serbia">Serbia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></div></div>
                                    </div>
                                    <div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p class="text-center text-white bg-danger"><strong>Trust verification file(s)</strong><br></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><a href="resources" target="_blank">Refer to the resources page for verification options.</a></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-auto"><input type="file" name="trustfile" value="trustfile"><small class="form-text text-muted">Only one file can be uploaded at a time.</small>
                                                <p></p>
                                            </div>
                                            <div class="col"><div class="table-responsive">                   
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM files WHERE `customer_ID` = '$customer_ID' AND `reference` = 'trust'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Saved files</strong></td>
    <td><strong></strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["file"];?></td>
<td class="text-right"><a target="_blank" href="uploads/<?php echo $row["file"]; ?>">Download</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No files found";
}
?></div>
</div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><input class="btn btn-danger" type="submit" value="Upload/Save" name="submit" style="width:120px;"><small class="form-text text-muted">When you click upload, any customer information entered will also be saved.</small></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Settlor(s)</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted">Not required if the trust was established with less than $10,000 in assets.</small><small class="form-text text-muted" style="padding:10px 0px;">To add a settlor, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.<br></small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `settlor` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
      <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No settlors found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Beneficiaries</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Beneficiary membership class (if applicable)</label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Name of class</label><input class="form-control" type="text" name="beneficiary_class" value="<?php echo $trust['beneficiary_class']; ?>"></div>
                                        <div class="col-lg-8"><label class="col-form-label">Details</label><textarea name="beneficiary_class_details" id="beneficiary_class_details" class="form-control" style="height:50px;"><?php echo $trust['beneficiary_class_details']?></textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted" style="padding:10px 0px;">To add a beneficiary, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.</small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `beneficiary` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
      <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No beneficiaries found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Appointer(s)</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `appointer` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Address</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No appointers found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted" style="padding:10px 0px;">To add an appointer, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.</small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><input class="btn btn-danger" type="submit" value="Save" name="submit" style="width:80px;"></div>
                                        <div class="col"><a class="btn btn-danger" role="button" href="Person" target="_blank">Add person</a></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-5">
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p class="text-center text-white bg-danger"><strong>Company Trustee Details</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Full company name<br></label><input class="form-control" type="text" name="company_name" value="<?php echo $company['company_name']; ?>"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto"><label class="col-form-label">ACN</label><input class="form-control" type="text" name="company_acn" value="<?php echo $company['company_acn']; ?>"></div>
                                        <div class="col-auto"><label class="col-form-label">ABN</label><input class="form-control" type="text" name="company_abn" value="<?php echo $company['company_abn']; ?>"></div>
                                        <div class="col"><div class="form-group">
    <label for="company_type" class="col-form-label">Type of company</label>
<select class="form-control" id="company_type" name="company_type">
	<option value="<?php echo $company['company_type'] ?>"><?php echo $company['company_type'] ?></option>
	<option value="Proprietary">Proprietary</option>
	<option value="Public Listed">Public Listed</option>
	<option value="Public Unlisted">Public Unlisted</option>
	<option value="Registered Foreign">Registered Foreign</option>
	<option value="Unregistered Foreign">Unregistered Foreign</option>
</select></div></div>
                                        <div class="col-auto"><div class="form-group">
    <label for="company_nature_business" class="col-form-label">Nature of business activity</label>
<select class="form-control" id="company_nature_business" name="company_nature_business">
	<option value="<?php echo $company['company_nature_business'] ?>"><?php echo $company['company_nature_business'] ?></option>
	<option value="Administration">Administration</option>
	<option value="Charity">Charity</option>
	<option value="Education_Training">Education/Training</option>
	<option value="Engineering">Engineering</option>
	<option value="Financial_Service_Accounting">Financial Service / Accounting</option>
	<option value="Investment">Investment</option>
	<option value="Manufacturing">Manufacturing</option>
	<option value="Primary_Production_Services">Primary Production & Services</option>
	<option value="Professional_Services">Professional Services</option>
	<option value="Property_Real_Estate">Property / Real Estate</option>
	<option value="Consulting">Consulting</option>
	<option value="Technology_Services">Technology Services</option>
	<option value="Trade_Services">Trade Services</option>
	<option value="Trading_Share_Purchasing">Trading / Share Purchasing</option>
</select></div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"><strong>Registered office address</strong><br></label>
                                            <div class="form-row">
                                                <div class="col-2"><label class="col-form-label">Apt/Street no.<br></label><input type="text" name="regoffice_street_no" class="form-control" id="regoffice_street_no" value="<?php echo $company['regoffice_street_no']; ?>"/></div>
                                                <div class="col-auto"><label class="col-form-label">Street name</label><input type="text" value="<?php echo $company['regoffice_street']?>" name="regoffice_street" class="form-control" id="regoffice_street" /></div>
                                                <div class="col-auto"><label class="col-form-label">Street type</label><select class="form-control" id="regoffice_street_type" name="regoffice_street_type">
<option value="<?php echo $company['regoffice_street_type']?>"><?php echo $company['regoffice_street_type'] ?></option>
<option value=""></option>
<option value="Street">Street</option>
<option value="Road">Road</option>
<option value="Avenue">Avenue</option>
<option value="Drive">Drive</option>
<option value="Circuit">Circuit</option>
<option value="Crescent">Crescent</option>
<option value=""></option>
<option value="Alley">Alley</option>
<option value="Arcade">Arcade</option>
<option value="Avenue">Avenue</option>
<option value="Bend">Bend</option>
<option value="Boulevard">Boulevard</option>
<option value="Brace">Brace</option>
<option value="Bypass">Bypass</option>
<option value="Causeway">Causeway</option>
<option value="Centre">Centre</option>
<option value="Chase">Chase</option>
<option value="Circle">Circle</option>
<option value="Circuit">Circuit</option>
<option value="Circus">Circus</option>
<option value="Close">Close</option>
<option value="Concourse">Concourse</option>
<option value="Corner">Corner</option>
<option value="Corso">Corso</option>
<option value="Court">Court</option>
<option value="Cove">Cove</option>
<option value="Crescent">Crescent</option>
<option value="Crossing">Crossing</option>
<option value="Drive">Drive</option>
<option value="Driveway">Driveway</option>
<option value="Entrance">Entrance</option>
<option value="Esplanade">Esplanade</option>
<option value="Expressway">Expressway</option>
<option value="Fairway">Fairway</option>
<option value="Freeway">Freeway</option>
<option value="Frontage">Frontage</option>
<option value="Garden">Garden</option>
<option value="Gate">Gate</option>
<option value="Glade">Glade</option>
<option value="Glen">Glen</option>
<option value="Grange">Grange</option>
<option value="Green">Green</option>
<option value="Ground">Ground</option>
<option value="Grove">Grove</option>
<option value="Heights">Heights</option>
<option value="Highway">Highway</option>
<option value="Junction">Junction</option>
<option value="Key">Key</option>
<option value="Lane">Lane</option>
<option value="Link">Link</option>
<option value="Loop">Loop</option>
<option value="Mews">Mews</option>
<option value="Motorway">Motorway</option>
<option value="Nook">Nook</option>
<option value="Outlook">Outlook</option>
<option value="Parade">Parade</option>
<option value="Parkway">Parkway</option>
<option value="Pass">Pass</option>
<option value="Path">Path</option>
<option value="Place">Place</option>
<option value="Plaza">Plaza</option>
<option value="Point">Point</option>
<option value="Port">Port</option>
<option value="Promenade">Promenade</option>
<option value="Quadrangle">Quadrangle</option>
<option value="Quadrant">Quadrant</option>
<option value="Quay">Quay</option>
<option value="Reserve">Reserve</option>
<option value="Rest">Rest</option>
<option value="Retreat">Retreat</option>
<option value="Ridge">Ridge</option>
<option value="Right of Way">Right of Way</option>
<option value="Rise">Rise</option>
<option value="Road">Road</option>
<option value="Roadway">Roadway</option>
<option value="Round">Round</option>
<option value="Route">Route</option>
<option value="Row">Row</option>
<option value="Siding">Siding</option>
<option value="Square">Square</option>
<option value="Street">Street</option>
<option value="Terrace">Terrace</option>
<option value="Tollway">Tollway</option>
<option value="Track">Track</option>
<option value="Trail">Trail</option>
<option value="View">View</option>
<option value="Walk">Walk</option>
<option value="Walkway">Walkway</option>
<option value="Way">Way</option>
<option value="Wynd">Wynd</option>
</select></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $company['regoffice_suburb']?>" name="regoffice_suburb" class="form-control" id="regoffice_suburb" /></div>
                                                <div class="col-auto"><label class="col-form-label">State</label><select class="form-control" id="regoffice_state" name="regoffice_state">
  <option value="<?php echo $company['regoffice_state'] ?>"><?php echo $company['regoffice_state'] ?></option>
  <option value="VIC">VIC</option>
  <option value="NSW">NSW</option>
  <option value="ACT">ACT</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="WA">WA</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
</select></div>
                                                <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $company['regoffice_postcode']?>" name="regoffice_postcode" maxlength="4" class="form-control" id="regoffice_postcode" /></div>
                                                <div class="col-auto"><label class="col-form-label">Country</label><select class="form-control" id="regoffice_country" name="regoffice_country">
<option value="<?php echo $company['regoffice_country'] ?>"><?php echo $company['regoffice_country'] ?></option>
<option value=""></option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"><strong>Principal place of business</strong><br></label>
                                            <div class="form-row">
                                                <div class="col"><div class="form-check"><label><input type="checkbox" name="prinplace_sameas_regoffice" class="form-check-input" id="prinplace_sameas_regoffice" class="form-check-label">Same as registered office address</label></div>
                                                    <div class="form-row">
                                                        <div class="col-2"><label class="col-form-label">Apt/Street no.<br></label><input type="text" name="prinplace_street_no" class="form-control" id="prinplace_street_no" value="<?php echo $company['prinplace_street_no']; ?>"/></div>
                                                        <div class="col-auto"><label class="col-form-label">Street name</label><input type="text" value="<?php echo $company['prinplace_street']?>" name="prinplace_street" class="form-control" id="prinplace_street" /></div>
                                                        <div class="col-auto"><label class="col-form-label">Street type</label><select class="form-control" id="prinplace_street_type" name="prinplace_street_type">
<option value="<?php echo $company['prinplace_street_type']?>"><?php echo $company['prinplace_street_type'] ?></option>
<option value=""></option>
<option value="Street">Street</option>
<option value="Road">Road</option>
<option value="Avenue">Avenue</option>
<option value="Drive">Drive</option>
<option value="Circuit">Circuit</option>
<option value="Crescent">Crescent</option>
<option value=""></option>
<option value="Alley">Alley</option>
<option value="Arcade">Arcade</option>
<option value="Avenue">Avenue</option>
<option value="Bend">Bend</option>
<option value="Boulevard">Boulevard</option>
<option value="Brace">Brace</option>
<option value="Bypass">Bypass</option>
<option value="Causeway">Causeway</option>
<option value="Centre">Centre</option>
<option value="Chase">Chase</option>
<option value="Circle">Circle</option>
<option value="Circuit">Circuit</option>
<option value="Circus">Circus</option>
<option value="Close">Close</option>
<option value="Concourse">Concourse</option>
<option value="Corner">Corner</option>
<option value="Corso">Corso</option>
<option value="Court">Court</option>
<option value="Cove">Cove</option>
<option value="Crescent">Crescent</option>
<option value="Crossing">Crossing</option>
<option value="Drive">Drive</option>
<option value="Driveway">Driveway</option>
<option value="Entrance">Entrance</option>
<option value="Esplanade">Esplanade</option>
<option value="Expressway">Expressway</option>
<option value="Fairway">Fairway</option>
<option value="Freeway">Freeway</option>
<option value="Frontage">Frontage</option>
<option value="Garden">Garden</option>
<option value="Gate">Gate</option>
<option value="Glade">Glade</option>
<option value="Glen">Glen</option>
<option value="Grange">Grange</option>
<option value="Green">Green</option>
<option value="Ground">Ground</option>
<option value="Grove">Grove</option>
<option value="Heights">Heights</option>
<option value="Highway">Highway</option>
<option value="Junction">Junction</option>
<option value="Key">Key</option>
<option value="Lane">Lane</option>
<option value="Link">Link</option>
<option value="Loop">Loop</option>
<option value="Mews">Mews</option>
<option value="Motorway">Motorway</option>
<option value="Nook">Nook</option>
<option value="Outlook">Outlook</option>
<option value="Parade">Parade</option>
<option value="Parkway">Parkway</option>
<option value="Pass">Pass</option>
<option value="Path">Path</option>
<option value="Place">Place</option>
<option value="Plaza">Plaza</option>
<option value="Point">Point</option>
<option value="Port">Port</option>
<option value="Promenade">Promenade</option>
<option value="Quadrangle">Quadrangle</option>
<option value="Quadrant">Quadrant</option>
<option value="Quay">Quay</option>
<option value="Reserve">Reserve</option>
<option value="Rest">Rest</option>
<option value="Retreat">Retreat</option>
<option value="Ridge">Ridge</option>
<option value="Right of Way">Right of Way</option>
<option value="Rise">Rise</option>
<option value="Road">Road</option>
<option value="Roadway">Roadway</option>
<option value="Round">Round</option>
<option value="Route">Route</option>
<option value="Row">Row</option>
<option value="Siding">Siding</option>
<option value="Square">Square</option>
<option value="Street">Street</option>
<option value="Terrace">Terrace</option>
<option value="Tollway">Tollway</option>
<option value="Track">Track</option>
<option value="Trail">Trail</option>
<option value="View">View</option>
<option value="Walk">Walk</option>
<option value="Walkway">Walkway</option>
<option value="Way">Way</option>
<option value="Wynd">Wynd</option>
</select></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $company['prinplace_suburb']?>" name="prinplace_suburb" class="form-control" id="prinplace_suburb" /></div>
                                                        <div class="col-auto"><label class="col-form-label">State</label><select class="form-control" id="prinplace_state" name="prinplace_state">
  <option value="<?php echo $company['prinplace_state'] ?>"><?php echo $company['prinplace_state'] ?></option>
  <option value="VIC">VIC</option>
  <option value="NSW">NSW</option>
  <option value="ACT">ACT</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="WA">WA</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
</select></div>
                                                        <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $company['prinplace_postcode']?>" name="prinplace_postcode" maxlength="4" class="form-control" id="prinplace_postcode" /></div>
                                                        <div class="col-auto"><label class="col-form-label">Country</label><select class="form-control" id="prinplace_country" name="prinplace_country">
<option value="<?php echo $company['prinplace_country'] ?>"><?php echo $company['prinplace_country'] ?></option>
<option value=""></option>
<option value="Australia">Australia</option>
<option value="New Zealand">New Zealand</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p class="text-center text-white bg-danger"><strong>Company verification file(s)</strong><br></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><a href="resources" target="_blank">Refer to the resources page for verification options.</a></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-auto"><input type="file" name="companyfile" value="companyfile"><small class="form-text text-muted">Only one file can be uploaded at a time.</small>
                                                <p></p>
                                            </div>
                                            <div class="col"><div class="table-responsive">                   
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM files WHERE `customer_ID` = '$customer_ID' AND `reference` = 'company'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Saved files</strong></td>
    <td><strong></strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["file"];?></td>
<td class="text-right"><a target="_blank" href="uploads/<?php echo $row["file"]; ?>">Download</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No files found";
}
?></div>
</div></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><input class="btn btn-danger" type="submit" value="Upload/Save" name="submit" style="width:120px;"><small class="form-text text-muted">When you click upload, any customer information entered will also be saved.</small></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Director(s)</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted" style="padding:10px 0px;">To add a directors, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.</small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `director` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No directors found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Shareholder(s) and/or Controlling Persons</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="table-responsive">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `customer_ID` = '$customer_ID' AND `shareholder` = 'yes' OR `customer_ID` = '$customer_ID' AND `control` = 'yes'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ownership/Position&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
<td><?php echo $row["ownership"];?> / <?php echo $row["cp_position"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No shareholders or controlling persons found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted" style="padding:10px 0px;">To add an Shareholder or Contorlling Perosn, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.</small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><input class="btn btn-danger" type="submit" value="Save" name="submit" style="width:80px;"></div>
                                        <div class="col"><a class="btn btn-danger" role="button" href="Person" target="_blank">Add person</a></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-7">
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p class="text-center text-white bg-danger"><strong>Signatory(s)</strong></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><small class="form-text text-muted">To add a signatory, click the 'Add person' button at the bottom of this page. Refresh this page to show recently added persons.</small></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons  WHERE `signatory` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Address</strong></td>
    <td><strong>Relationship</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
<td><?php echo $row["sig_relationship"];?></td>
<td class="text-right"><a target="_blank" href="Person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No signatories found";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><a class="btn btn-danger" role="button" href="Person" target="_blank">Add person</a></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-10">
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col" style="padding:5px 0px;">
                                            <p class="text-center text-white bg-danger"><strong>Customer risk rating</strong><br></p><div id="suggested_riskrating"></div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-4"><label class="col-form-label">Risk Rating</label><div id="suggested_riskrating"></div>
<div class="form-group">
<select class="form-control" id="riskrating" name="riskrating">
  <option value="<?php echo $customer['riskrating'] ?>"><?php echo $customer['riskrating'] ?></option>
  <option value="Pending">Pending</option>
  <option value="Extreme">Extreme >1,000</option>
  <option value="High">High >100</option>
  <option value="Medium">Medium >10</option>
  <option value="Low">Low = 0</option>
</select>
  </div></div>
                                        <div class="col-8"><label class="col-form-label">Does the trust and/or company trustee operate in any of the below industries?</label><div class="form-group">
<select class="form-control" id="customerindustry" name="customer_industry" onchange="calculateTotal()">
  <option value="<?php echo $customer['customer_industry'] ?>"><?php echo $customer['customer_industry'] ?></option>
  <option value="Accountant">Accountant</option>
  <option value="Auditor">Auditor</option>
  <option value="Bullion or precious metal dealer">Bullion or precious metal dealer</option>
  <option value="Casinos and gambling service">Casinos and gambling service</option>
  <option value="Charity organisation">Charity organisation</option>
  <option value="Foreign Currency Exchange Dealer">Foreign Currency Exchange Dealer</option>
  <option value="Foreign Embassies and Consulates in Australia">Foreign Embassies and Consulates in Australia</option>
  <option value="Jeweller">Jeweller</option>
  <option value="Law firm">Law firm</option>
  <option value="Money changer">Money changer</option>
  <option value="Money Service Business (MSBs)">Money Service Business (MSBs)</option>
  <option value="Money transmitter">Money transmitter</option>
  <option value="Overseas legal entities not registered in Australia">Overseas entity</option>
  <option value="Pawn broker">Pawn broker</option>
  <option value="Real Estate">Real Estate</option>
  <option value="Tax advisor">Tax advisor</option>
  <option value="Weapon or firearm dealer or manufacturer">Weapon/firearm dealer/manufacturer</option>
  <option value="None">None</option>
</select>
  </div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="Refer to the SMR table below.">Have any SMRs been raised against this customer?<br /></label></div>
                                        <div class="col"><label class="col-form-label">Dose the&nbsp;trust and/or company trustee have any Adverse Media matches?<br></label></div>
                                        <div class="col"><label class="col-form-label">Dose the&nbsp;trust and/or company trustee have any Sanctions matches?<br></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="form-group">
<select class="form-control" id="smr" name="smr" onchange="calculateTotal()">
  <option value="<?php echo $customer['smr'] ?>"><?php echo $customer['smr'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select>
  </div></div>
                                        <div class="col"><div class="form-group">
<select class="form-control" id="entitymedia" name="entitymedia" onchange="calculateTotal()">
  <option value="<?php echo $customer['entitymedia'] ?>"><?php echo $customer['entitymedia'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select>
  </div></div>
                                        <div class="col"><div class="form-group">
<select class="form-control" id="entitysanction" name="entitysanction" onchange="calculateTotal()">
  <option value="<?php echo $customer['entitysanction'] ?>"><?php echo $customer['entitysanction'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select>
  </div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="Choose the highest PEP match. Highest = International PEP. Lowest = Domestic PEP.">Do any of the below individuals have a PEP match?<br /></label></div>
                                        <div class="col"><label class="col-form-label">Do any of the below individuals have a Adverse Media match?<br></label></div>
                                        <div class="col"><label class="col-form-label">Do any of the below individuals have a Sanctions match?<br></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="form-group">
<select class="form-control" id="pep" name="pep" onchange="calculateTotal()">
  <option value="<?php echo $customer['pep'] ?>"><?php echo $customer['pep'] ?></option>
  <option value="No">No</option>
  <option value="Yes - Domestic PEP Match">Yes - Domestic PEP Match</option>
  <option value="Yes - Foreign PEP Match">Yes - Foreign PEP Match</option>
  <option value="Yes - International PEP Match">Yes - International PEP Match</option>
</select>
  </div></div>
                                        <div class="col"><div class="form-group">
<select class="form-control" id="media" name="media" onchange="calculateTotal()">
  <option value="<?php echo $customer['media'] ?>"><?php echo $customer['media'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select>
  </div></div>
                                        <div class="col"><div class="form-group">
<select class="form-control" id="sanction" name="sanction" onchange="calculateTotal()">
  <option value="<?php echo $customer['sanction'] ?>"><?php echo $customer['sanction'] ?></option>
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select>
  </div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Comments:</label><textarea name="riskcomments" class="form-control" style="height:100px" id="riskcomments"><?php echo $customer['riskcomments']?></textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label">Source of wealth:</label><small class="form-text text-muted">Source of wealth refers to where the customer’s entire body of wealth and assets came from – not just what is involved in a transaction or business relationship. It describes the economic, business, or commercial activities that generated, or significantly contributed to, the customer’s overall net worth.</small>
                                            <input
                                                class="form-control" type="text" name="sourceofwealth" value="<?php echo $customer['sourceofwealth']; ?>"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><input class="btn btn-danger" type="submit" value="Save" name="submit" style="width:80px;"></div>
                                    </div>
                                    <p></p><a href="resources" target="_blank">Refer to the resources page for screening options.</a>
                                    <div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p class="text-center text-white bg-danger"><strong>Persons</strong></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons  WHERE `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
    <td><strong>PEP status</strong></td>
    <td><strong>Sanction status</strong></td>
    <td><strong>Adverse media status</strong></td>
    <td><strong>Comments</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td><?php echo $row["pep"]; ?></td>
<td><?php echo $row["sanction"]; ?></td>
<td><?php echo $row["adverse_media"]; ?></td>
<td><?php echo $row["screening_details"]; ?></td>
<td class="text-right"><a target="_blank" href="Association_person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No persons found";
}
?></div>
</div>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Suspicious matter reports (SMRs)</strong><br></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><small class="form-text text-muted">To add an SMR, click the 'Add SMR' button at the bottom of this page. Refresh this page to show a recently added&nbsp;SMRs.</small></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM smr WHERE `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Date created</strong></td>
    <td><strong>AUSTRAC submit date</strong></td>
    <td><strong>Comments</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["date_created"];?></td>
<td><?php echo $row["AUSTRAC submit date"]; ?></td>
<td><?php echo $row["suspicion_comment"]; ?></td>
<td class="text-right"><a target="_blank" href="smr_edit?smr_ID=<?php echo $row["smr_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No SMRs found";
}
?></div>
</div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><a class="btn btn-danger" role="button" href="smr" target="_blank">Add SMR</a></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p><br></p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" style="padding:5px 0px;">
                                                <p><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-3">
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div><a class="btn btn-danger" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" role="button" href="#collapse-1" style="width:100%;"><strong>Customer Taxation Information</strong></a>
                                        <div class="collapse"
                                            id="collapse-1">
                                            <div>
                                                <div class="form-row">
                                                    <div class="col-auto"><label class="col-form-label">Tax File Number (TFN)<br></label><input type="password" name="tfn" id="tfn" class="form-control" value="<?php echo $customer['tfn']; ?>">
<input type="checkbox" onclick="myFunction1()"> Show TFN</div>
                                                    <div class="col"><label class="col-form-label">Reason for exemption<br></label><input class="form-control" type="text" name="tfn_exempt" value="<?php echo $customer['tfn_exempt']; ?>"></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-6"><label class="col-form-label">Entity type</label><select class="form-control" id="taxentity" name="taxentity">
    <option value="<?php echo $customer['taxentity']?>"><?php echo $customer['taxentity'] ?></option>
    <option value="Financial Institution">Financial Institution</option>
    <option value="NFEs (Entities that are not a Financial Institution)">NFEs (Entities that are not a Financial Institution)</option></select></div>
                                                    <div class="col">
                                                        <div id="entitytypeFI"><div class="form-check">
<input class="form-check-input" type="checkbox" name="investment_entity" value="1" id="formCheck-1" <?php if ($customer['investment_entity'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">An Investment Entity located in a Non-Participating Jurisdiction and managed by another Financial Institution (If you tick this box you must select the Controlling Person(s) below):<br></label>
</div>
                                                            <p></p>
                                                            <div class="form-row">
                                                                <div class="col"><label class="col-form-label">First Name</label></div>
                                                                <div class="col"><label class="col-form-label">Last Name</label></div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col"><input class="form-control" type="text" name="tax_fn_1" value="<?php echo $customer['tax_fn_1']; ?>"></div>
                                                                <div class="col"><input class="form-control" type="text" name="tax_ln_1" value="<?php echo $customer['tax_ln_1']; ?>"></div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col"><input class="form-control" type="text" name="tax_fn_2" value="<?php echo $customer['tax_fn_2']; ?>"></div>
                                                                <div class="col"><input class="form-control" type="text" name="tax_ln_2" value="<?php echo $customer['tax_ln_2']; ?>"></div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col"><input class="form-control" type="text" name="tax_fn_3" value="<?php echo $customer['tax_fn_3']; ?>"></div>
                                                                <div class="col"><input class="form-control" type="text" name="tax_ln_3" value="<?php echo $customer['tax_ln_3']; ?>"></div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col"><input class="form-control" type="text" name="tax_fn_4" value="<?php echo $customer['tax_fn_4']; ?>"></div>
                                                                <div class="col"><input class="form-control" type="text" name="tax_ln_4" value="<?php echo $customer['tax_ln_4']; ?>"></div>
                                                            </div>
                                                            <p></p><div class="form-check">
<input class="form-check-input" type="checkbox" name="other_investment_entity" value="1" id="formCheck-1" <?php if ($customer['other_investment_entity'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Other Investment Entity Depository Institution, Custodial Institution or Specified Insurance Company</label>
</div></div>
                                                        <div id="entitytypeNFE">
                                                            <p></p><div class="form-check">
<input class="form-check-input" type="checkbox" name="NFE_corp" value="1" id="formCheck-1" <?php if ($customer['NFE_corp'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Active NFE – a corporation the stock of which is regularly traded on an established securities market or a corporation which is a related entity of such a corporation</label>
</div><div class="form-check">
<input class="form-check-input" type="checkbox" name="NFE_gov" value="1" id="formCheck-1" <?php if ($customer['NFE_gov'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Active NFE – a Government Entity or Central Bank</label>
</div><div class="form-check">
<input class="form-check-input" type="checkbox" name="NFE_intorg" value="1" id="formCheck-1" <?php if ($customer['NFE_intorg'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Active NFE – an International Organisation</label>
</div><div class="form-check">
<input class="form-check-input" type="checkbox" name="NFE_other" value="1" id="formCheck-1" <?php if ($customer['NFE_other'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Active NFE – other (for example a start-up NFE or a non-profit NFE)</label>
</div><div class="form-check">
<input class="form-check-input" type="checkbox" name="passive_NFE" value="1" id="formCheck-1" <?php if ($customer['passive_NFE'] == 1) { echo "checked='checked'"; } ?>
<label class="form-check-label" for="formCheck-1">Passive NFE (If you tick this box you must enter the Controlling Person(s) below)</label>
</div>
                                                            <div
                                                                class="form-row">
                                                                <div class="col"><label class="col-form-label">First Name</label></div>
                                                                <div class="col"><label class="col-form-label">Last Name</label></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col"><input class="form-control" type="text" name="tax_fn_01" value="<?php echo $customer['tax_fn_01']; ?>"></div>
                                                            <div class="col"><input class="form-control" type="text" name="tax_ln_01" value="<?php echo $customer['tax_ln_01']; ?>"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col"><input class="form-control" type="text" name="tax_fn_02" value="<?php echo $customer['tax_fn_02']; ?>"></div>
                                                            <div class="col"><input class="form-control" type="text" name="tax_ln_02" value="<?php echo $customer['tax_ln_02']; ?>"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col"><input class="form-control" type="text" name="tax_fn_03" value="<?php echo $customer['tax_fn_03']; ?>"></div>
                                                            <div class="col"><input class="form-control" type="text" name="tax_ln_03" value="<?php echo $customer['tax_ln_03']; ?>"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col"><input class="form-control" type="text" name="tax_fn_04" value="<?php echo $customer['tax_fn_04']; ?>"></div>
                                                            <div class="col"><input class="form-control" type="text" name="tax_ln_04" value="<?php echo $customer['tax_ln_04']; ?>"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><input class="btn btn-danger" type="submit" value="Save" name="submit" style="width:80px;"></div>
                                            </div>
                                            <div class="sr-only">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <p></p>
                                                        <p class="text-center text-white bg-danger"><strong>Related Individuals Taxation Information</strong></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col"><small class="form-text text-muted">The below table displays tax information added for persons related to the customer. Refresh this page to show a recently added details.</small></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons  WHERE `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Name</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?> <?php echo $row["last_name"];?></td>
<td class="text-right"><a target="_blank" href="unreg_trust_pty_person_edit?person_ID=<?php echo $row["person_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No persons found";
}
?></div>
</div></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col"><label class="col-form-label"></label></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div><a class="btn btn-danger" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" role="button" href="#collapse-2" style="width:100%;"><strong>Customer Fact Find(s)</strong><br></a>
                                    <div class="collapse"
                                        id="collapse-2">
                                        <div>
                                            <div class="form-row">
                                                <div class="col"><small class="form-text text-muted">To add a fact find, click the 'Add Fact Find' button at the bottom of this page. Refresh this page to show a recently added&nbsp;Fact Find.</small></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Date created</strong></td>
    <td><strong>Date last updated</strong></td>
    <td><strong>Status</strong></td>
    <td></td>
  </tr>

<tr>
<td>No results found</td>
<td></td>
<td></td>
<td class="text-right"><a target="_blank" href="">View/Edit</a></td>
</tr>

</table>
</div>
</div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><a class="btn btn-danger" role="button" href="factfind" target="_blank">Add Fact Find</a></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div><a class="btn btn-danger" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" role="button" href="#collapse-3" style="width:100%;"><strong>Real Estate</strong><br></a>
                                    <div class="collapse" id="collapse-3">
                                        <div class="form-row">
                                            <div class="col">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Real Estate Ownership</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><small class="form-text text-muted">To add Real Estate Property details, click the 'Add Real Estate Property' button at the bottom of this page. Refresh this page to show a recently added Property.</small></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Address</strong></td>
    <td></td>
  </tr>

<tr>
<td>No results found</td>
<td class="text-right"><a target="_blank" href="">View/Edit</a></td>
</tr>

</table>
</div>
</div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><a class="btn btn-danger" role="button" href="property" target="_blank">Add Property</a></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Real Estate Rent/Lease</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><small class="form-text text-muted">To add Real Estate Property details, click the 'Add Real Estate Property' button at the bottom of this page. Refresh this page to show a recently added Property.</small></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Address</strong></td>
    <td></td>
  </tr>

<tr>
<td>No results found</td>
<td class="text-right"><a target="_blank" href="">View/Edit</a></td>
</tr>

</table>
</div>
</div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><a class="btn btn-danger" role="button" href="property" target="_blank">Add Property</a></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <p class="text-center text-white bg-danger"><strong>Seller's&nbsp;Property&nbsp;Disclosure&nbsp;Details</strong></p>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><small class="form-text text-muted">To add Seller's Property Disclosure Details, click the 'Add Seller's Property Disclosure' button at the bottom of this page. Refresh this page to show a recently added details.</small></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Address</strong></td>
    <td></td>
  </tr>

<tr>
<td>No results found</td>
<td class="text-right"><a target="_blank" href="">View/Edit</a></td>
</tr>

</table>
</div>
</div></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><a class="btn btn-danger" role="button" href="seller_disclosure" target="_blank">Add&nbsp;Seller's Property Disclosure<br></a></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col"><label class="col-form-label"></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-4">
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Notes</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><small class="form-text text-muted">To add a note, click the 'Add note' button at the bottom of this page. Refresh this page to show recently added notes.</small></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM customer_note  WHERE `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Date posted</strong></td>
    <td><strong>Posted by</strong></td>
    <td><strong>Assigned to</strong></td>
    <td><strong>Action due by</strong></td>
    <td><strong>Note</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["dateposted"];?></td>
<td><?php echo $row["postby"];?></td>
<td><?php echo $row["assign"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["duedate"]));?></td>
<td><?php echo $row["note_comment"];?></td>
<td class="text-right"><a target="_blank" href="customer_note_edit?note_ID=<?php echo $row["note_ID"]; ?>">View/Edit</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No notes found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"></label></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><a class="btn btn-danger" role="button" href="customer_note" target="_blank">Add note</a></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"></label></div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-11">
                                <div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p class="text-center text-white bg-danger"><strong>Quality Assurance</strong><br></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM qa  WHERE `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>Date</strong></td>
    <td><strong>Overall result</strong></td>
    <td><strong>Comment</strong></td>
    <td></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo date('d-m-Y',strtotime($row["QAdate"]));?></td>
<td><?php echo $row["QAresult"];?></td>
<td><?php echo $row["QAcomment"];?></td>
<td class="text-right"><a target="_blank" href="QA_view?QA_ID=<?php echo $row["QA_ID"]; ?>">View</a></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No QA has been conducted";
}
?></div>
</div></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><label class="col-form-label"></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-6">
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center">To download is customer's information, right click and click print, then save as PDF.</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Customer Information</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="Type the full name of the customer. ie ABC Pty Ltd ATF XYZ Family Trust">Customer name</label><input class="form-control" type="text" value="<?php echo $customer['customer_name']; ?>" readonly="" required=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-8"><label class="col-form-label" data-toggle="tooltip" data-placement="bottom" title="If changing the customer type, please save this page then go to the 'Customer' page, find the customer and click edit to continue editing.">Customer type</label><input class="form-control" type="text" value="<?php echo $customer['customer_type']; ?>" readonly="" required=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Contact Details</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label">Phone number</label><input class="form-control" type="text" value="<?php echo $customer['customer_phone']; ?>" readonly=""></div>
                                    <div class="col"><label class="col-form-label">Email address</label><input class="form-control" type="email" value="<?php echo $customer['customer_email']; ?>" readonly=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"><strong>Postal address</strong></label></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-2"><label class="col-form-label">Address line 1</label></div>
                                    <div class="col"><input class="form-control" type="text" value="<?php echo $customer['cust_post_1']; ?>" readonly=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-2"><label class="col-form-label">Address line 2<br></label></div>
                                    <div class="col"><input class="form-control" type="text" value="<?php echo $customer['cust_post_2']; ?>" readonly=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $customer['cust_post_suburb']?>" class="form-control"  readonly/></div>
                                    <div class="col-auto"><label class="col-form-label">State</label><input type="text" value="<?php echo $customer['cust_post_state']?>" class="form-control" readonly/></div>
                                    <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $customer['cust_post_postcode']?>" class="form-control" readonly/></div>
                                    <div class="col-auto"><label class="col-form-label">Country</label><input type="text" value="<?php echo $customer['cust_post_country']?>" class="form-control" readonly/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Trust Details</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label">Full name of trust</label><input class="form-control" type="text" value="<?php echo $trust['trust_name']; ?>" readonly=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-auto"><label class="col-form-label">Type of trust</label><input type="text" value="<?php echo $trust['trust_type']?>" class="form-control" readonly/></div>
                                    <div class="col-auto"><label class="col-form-label">ABN</label><input class="form-control" type="text" value="<?php echo $trust['trust_abn']; ?>" readonly=""></div>
                                    <div class="col-6"><label class="col-form-label">Country trust was established</label><input type="text" value="<?php echo $trust['trust_country']?>" class="form-control" readonly/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col" style="padding:5px 0px;">
                                        <p class="text-center text-white bg-danger"><strong>Settlor(s)</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><small class="form-text text-muted">Not required if the trust was established with less than $10,000 in assets.</small></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `settlor` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No settlors found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col" style="padding:5px 0px;">
                                        <p class="text-center text-white bg-danger"><strong>Beneficiaries</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label">Beneficiary membership class (if applicable)</label></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label">Name of class</label><input class="form-control" type="text" value="<?php echo $trust['beneficiary_class']; ?>" readonly=""></div>
                                    <div class="col-lg-8"><label class="col-form-label">Details</label><textarea readonly class="form-control" style="height:50px;"><?php echo $trust['beneficiary_class_details']?></textarea></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `beneficiary` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No beneficiaries found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col" style="padding:5px 0px;">
                                        <p class="text-center text-white bg-danger"><strong>Appointer(s)</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `appointer` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Address</strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No appointers found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Company Trustee Details</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label">Full company name<br></label><input class="form-control" type="text" value="<?php echo $company['company_name']; ?>" readonly=""></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-auto"><label class="col-form-label">ACN</label><input class="form-control" type="text" value="<?php echo $company['company_acn']; ?>" readonly=""></div>
                                    <div class="col-auto"><label class="col-form-label">ABN</label><input class="form-control" type="text" value="<?php echo $company['company_abn']; ?>" readonly=""></div>
                                    <div class="col"><div class="form-group">
    <label for="company_nature_business" class="col-form-label">Type of company</label>
<input type="text" value="<?php echo $company['company_type']?>" class="form-control" readonly/></div></div>
                                    <div class="col-auto"><div class="form-group">
    <label for="company_nature_business" class="col-form-label">Nature of business activity</label>
<input type="text" value="<?php echo $company['company_nature_business']?>" class="form-control" readonly/></div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"><strong>Registered office address</strong><br></label>
                                        <div class="form-row">
                                            <div class="col-2"><label class="col-form-label">Apt/Street no.<br></label><input type="text" class="form-control" value="<?php echo $company['regoffice_street_no']; ?>" readonly/></div>
                                            <div class="col-auto"><label class="col-form-label">Street name</label><input type="text" value="<?php echo $company['regoffice_street']?>"  class="form-control"  readonly/></div>
                                            <div class="col-auto"><label class="col-form-label">Street type</label><input type="text" value="<?php echo $company['regoffice_street_type']?>" class="form-control" readonly/></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $company['regoffice_suburb']?>" class="form-control"  readonly/></div>
                                            <div class="col-auto"><label class="col-form-label">State</label><input type="text" value="<?php echo $company['regoffice_state']?>" class="form-control" readonly/></div>
                                            <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $company['regoffice_postcode']?>" class="form-control"  readonly/></div>
                                            <div class="col-auto"><label class="col-form-label">Country</label><input type="text" value="<?php echo $company['regoffice_country']?>" class="form-control" readonly/></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"><strong>Principal place of business</strong><br></label>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-row">
                                                    <div class="col-2"><label class="col-form-label">Apt/Street no.<br></label><input type="text" class="form-control" value="<?php echo $company['prinplace_street_no']; ?>" readonly/></div>
                                                    <div class="col-auto"><label class="col-form-label">Street name</label><input type="text" value="<?php echo $company['prinplace_street']?>"  class="form-control" readonly/></div>
                                                    <div class="col-auto"><label class="col-form-label">Street type</label><input type="text" value="<?php echo $company['prinplace_street_type']?>" class="form-control" readonly/></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-auto"><label class="col-form-label">Suburb</label><input type="text" value="<?php echo $company['prinplace_suburb']?>" class="form-control" readonly/></div>
                                                    <div class="col-auto"><label class="col-form-label">State</label><input type="text" value="<?php echo $company['prinplace_state']?>" class="form-control" readonly/></div>
                                                    <div class="col-2"><label class="col-form-label">Postcode</label><input type="text" value="<?php echo $company['prinplace_postcode']?>" class="form-control"  readonly/></div>
                                                    <div class="col-auto"><label class="col-form-label">Country</label><input type="text" value="<?php echo $company['prinplace_country']?>" class="form-control" readonly/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col" style="padding:5px 0px;">
                                        <p class="text-center text-white bg-danger"><strong>Director(s)</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `director` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No directors found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col" style="padding:5px 0px;">
                                        <p class="text-center text-white bg-danger"><strong>Shareholder(s) and/or Controlling Persons</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="table-responsive">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons WHERE `customer_ID` = '$customer_ID' AND `shareholder` = 'yes' OR `customer_ID` = '$customer_ID' AND `control` = 'yes'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>    
	<td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Address&nbsp</strong></td>
    <td><strong>Ownership/Position</strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
<td><?php echo $row["ownership"];?> / <?php echo $row["cp_position"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No shareholders or controlling persons found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <p class="text-center text-white bg-danger"><strong>Signatory(s)</strong></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><div class="table-responsive" class="row justify-content-center">                    
<div class="col-auto">
<?php
$customer_ID = $customer['customer_ID'];
$result = mysqli_query($conn,"SELECT * FROM persons  WHERE `signatory` = 'yes' AND `customer_ID` = '$customer_ID'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table table-striped table-sm" cellspacing="0" width="100%">
  <tr class="table-danger">
    <td><strong>First name</strong></td>
    <td><strong>Middle name(s)</strong></td>
    <td><strong>Last name</strong></td>
    <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Address</strong></td>
    <td><strong>Relationship</strong></td>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["first_name"];?></td>
<td><?php echo $row["middle_name"];?></td>
<td><?php echo $row["last_name"];?></td>
<td><?php echo date('d-m-Y',strtotime($row["dob"]));?></td>
<td><?php echo $row["r_street_no"];?> <?php echo $row["r_street_name"];?> <?php echo $row["r_st_type"];?>, <?php echo $row["r_suburb"];?>, <?php echo $row["r_state"];?>, <?php echo $row["r_postcode"];?>, <?php echo $row["r_country"];?></td>
<td><?php echo $row["sig_relationship"];?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
    echo "No signatories found";
}
?></div>
</div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><label class="col-form-label"></label></div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/change_function.js"></script>
    <script src="assets/js/customer.js"></script>
    <script src="assets/js/hide_tfn.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/person.js"></script>
    <script src="assets/js/riskscore.js"></script>
    <script src="assets/js/same_as.js"></script>
</body>

</html>