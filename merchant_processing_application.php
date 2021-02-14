<?php
$today = date('Y-m-d');

$firm_date = isset($_POST['firm-date']) ? $_POST['firm-date'] : $today; 

if (isset($_POST['submit'])) {
  $legal_name = $_POST['legal-name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $dba = $_POST['dba'];
  $llc_corp = $_POST['llc-corp'];
  $business_year = $_POST['business-year'];
  $ein = $_POST['ein'];
  $business_phone = $_POST['business-phone'];
  $web = $_POST['web'];
  $legal_name_1 = $_POST['owner-name-1'];
  $job_title_1 = $_POST['job-title-1'];
  $dob_1 = $_POST['dob-1'];
  $ss_1 = $_POST['ss-1'];
  $address_1 = $_POST['address_1'];
  $city_1 = $_POST['city_1'];
  $state_1 = $_POST['state_1'];
  $zip_1 = $_POST['zip_1'];
  $phone_1 = $_POST['phone_1'];
  $email_1 = $_POST['email_1'];
  $legal_name_2 = $_POST['owner-name-2'];
  $job_title_2 = $_POST['job-title-2'];
  $dob_2 = $_POST['dob-2'];
  $ss_2 = $_POST['ss-2'];
  $address_2 = $_POST['address_2'];
  $city_2 = $_POST['city_2'];
  $state_2 = $_POST['state_2'];
  $zip_2 = $_POST['zip_2'];
  $phone_2 = $_POST['phone_2'];
  $email_2 = $_POST['email_2'];
  $legal_name_3 = $_POST['owner-name-3'];
  $job_title_3 = $_POST['job-title-3'];
  $dob_3 = $_POST['dob-3'];
  $ss_3 = $_POST['ss-3'];
  $address_3 = $_POST['address_3'];
  $city_3 = $_POST['city_3'];
  $state_3 = $_POST['state_3'];
  $zip_3 = $_POST['zip_3'];
  $phone_3 = $_POST['phone_3'];
  $email_3 = $_POST['email_3'];
  $history = $_POST['history'];
  $long_time = $_POST['long_time'];
  $previous_name = $_POST['previous_name'];
  $ticket_amount = $_POST['ticket_amount'];
  $monthly_salary = $_POST['monthly_salary'];
  
  $arHistory[$history] = 'selected';
  
  $template = file_get_contents('template-form-2.html');
  
  $template = str_replace('$legal_name$', $legal_name, $template);
  $template = str_replace('$address$', $address, $template);
  $template = str_replace('$city$', $city, $template);
  $template = str_replace('$state$', $state, $template);
  $template = str_replace('$zip$', $zip, $template);
  $template = str_replace('$dba$', $dba, $template);
  $template = str_replace('$llc_corp$', $llc_corp, $template);
  $template = str_replace('$business_year$', $business_year, $template);
  $template = str_replace('$ein$', $ein, $template);
  $template = str_replace('$business_phone$', $business_phone, $template);
  $template = str_replace('$web$', $web, $template);
  $template = str_replace('$legal_name_1$', $legal_name_1, $template);
  $template = str_replace('$job_title_1$', $job_title_1, $template);
  $template = str_replace('$dob_1$', $dob_1, $template);
  $template = str_replace('$ss_1$', $ss_1, $template);
  $template = str_replace('$address_1$', $address_1, $template);
  $template = str_replace('$city_1$', $city_1, $template);
  $template = str_replace('$state_1$', $state_1, $template);
  $template = str_replace('$zip_1$', $zip_1, $template);
  $template = str_replace('$phone_1$', $phone_1, $template);
  $template = str_replace('$email_1$', $email_1, $template);
  $template = str_replace('$legal_name_2$', $legal_name_2, $template);
  $template = str_replace('$job_title_2$', $job_title_2, $template);
  $template = str_replace('$dob_2$', $dob_2, $template);
  $template = str_replace('$ss_2$', $ss_2, $template);
  $template = str_replace('$address_2$', $address_2, $template);
  $template = str_replace('$city_2$', $city_2, $template);
  $template = str_replace('$state_2$', $state_2, $template);
  $template = str_replace('$zip_2$', $zip_2, $template);
  $template = str_replace('$phone_2$', $phone_2, $template);
  $template = str_replace('$email_2$', $email_2, $template);
  $template = str_replace('$legal_name_3$', $legal_name_3, $template);
  $template = str_replace('$job_title_3$', $job_title_3, $template);
  $template = str_replace('$dob_3$', $dob_3, $template);
  $template = str_replace('$ss_3$', $ss_3, $template);
  $template = str_replace('$address_3$', $address_3, $template);
  $template = str_replace('$city_3$', $city_3, $template);
  $template = str_replace('$state_3$', $state_3, $template);
  $template = str_replace('$zip_3$', $zip_3, $template);
  $template = str_replace('$phone_3$', $phone_3, $template);
  $template = str_replace('$email_3$', $email_3, $template);
  $template = str_replace('$history$', $history, $template);
  $template = str_replace('$long_time$', $long_time, $template);
  $template = str_replace('$previous_name$', $previous_name, $template);
  $template = str_replace('$ticket_amount$', $ticket_amount, $template);
  $template = str_replace('$monthly_salary$', $monthly_salary, $template);
  
  $to = "crimgt2@gmail.com";
  $subject = "Request from Axiom Financial Form";
  
  // Always set content-type when sending HTML email
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <crimgt2@gmail.com>' . "\r\n";

  mail($to, $subject, $template, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Axiom Financial LLC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <header class="row main-header">
      <div class="col-md-6">
        <img src="images/logo.png" class="logo" alt="logo">
      </div>
      <div class="col-md-6"></div>
    </header>
    <h1 class="main-title">Merchant Processing Application</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Legal Business Name 
      <input type="text" value="<?php echo $legal_name; ?>" class="form-control" name="legal-name" required>
      <div class="row">
        <div class="col-md-4">
          Lecal Address
          <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" required>
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" required>
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="state" value="<?php echo $state; ?>" class="form-control" required>
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="zip" value="<?php echo $zip; ?>" class="form-control" required>
        </div>
        <div class="col-md-12">
          DBA
          <input type="text" name="dba" value="<?php echo $dba; ?>" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          LLC,Corp, etc 
          <input type="text" name="llc-corp" value="<?php echo $llc_corp; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Years in Business 
          <input type="number" name="business-year" value="<?php echo $business_year; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          EIN
          <input type="text" name="ein" value="<?php echo $ein; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Business Phone
          <input type="text" name="business-phone" value="<?php echo $business_phone; ?>" class="form-control">
        </div>
        <div class="col-md-12">
          Website
          <input type="text" name="web" value="<?php echo $web; ?>" class="form-control">
        </div>
      </div>
      <!--   1   -->
      <div class="row form-border">
        <div class="col-md-12">
          Legal Name of Owner #1 
          <input type="text" value="<?php echo $legal_name_1; ?>" class="form-control" name="owner-name-1">
        </div>
        <div class="col-md-4">
          Job Title 
          <input type="text" value="<?php echo $job_title_1; ?>" name="job-title-1" class="form-control">
        </div>
        <div class="col-md-4">
          DOB 
          <input type="text" value="<?php echo $dob_1; ?>" name="dob-1" class="form-control">
        </div>
        <div class="col-md-4">
          SS # 
          <input type="text" value="<?php echo $ss_1; ?>" name="ss-1" class="form-control">
        </div>
        <div class="col-md-4">
          Home Address
          <input type="text" name="address_1" value="<?php echo $address_1; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="city_1" value="<?php echo $city_1; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="state_1" value="<?php echo $state_1; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="zip_1" value="<?php echo $zip_1; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Home/Cel Phone
          <input type="text" name="phone_1" value="<?php echo $phone_1; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Email
          <input type="text" name="email_1" value="<?php echo $email_1; ?>" class="form-control">
        </div>
      </div>
      <!--   2   -->
      <div class="row form-border">
        <div class="col-md-12">
          Legal Name of Owner #2 
          <input type="text" value="<?php echo $legal_name_2; ?>" class="form-control" name="owner-name-2">
        </div>
        <div class="col-md-4">
          Job Title 
          <input type="text" value="<?php echo $job_title_2; ?>" name="job-title-2" class="form-control">
        </div>
        <div class="col-md-4">
          DOB 
          <input type="text" value="<?php echo $dob_2; ?>" name="dob-2" class="form-control">
        </div>
        <div class="col-md-4">
          SS # 
          <input type="text" value="<?php echo $ss_2; ?>" name="ss-2" class="form-control">
        </div>
        <div class="col-md-4">
          Home Address
          <input type="text" name="address_2" value="<?php echo $address_2; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="city_2" value="<?php echo $city_2; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="state_2" value="<?php echo $state_2; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="zip_2" value="<?php echo $zip_2; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Home/Cel Phone
          <input type="text" name="phone_2" value="<?php echo $phone_2; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Email
          <input type="text" name="email_2" value="<?php echo $email_2; ?>" class="form-control">
        </div>
      </div>
      <!--   3   -->
      <div class="row form-border">
        <div class="col-md-12">
          Legal Name of Owner #3 
          <input type="text" value="<?php echo $legal_name_3; ?>" class="form-control" name="owner-name-3">
        </div>
        <div class="col-md-4">
          Job Title 
          <input type="text" value="<?php echo $job_title_3; ?>" name="job-title-3" class="form-control">
        </div>
        <div class="col-md-4">
          DOB 
          <input type="text" value="<?php echo $dob_3; ?>" name="dob-3" class="form-control">
        </div>
        <div class="col-md-4">
          SS # 
          <input type="text" value="<?php echo $ss_3; ?>" name="ss-3" class="form-control">
        </div>
        <div class="col-md-4">
          Home Address
          <input type="text" name="addres_3" value="<?php echo $address_3; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="city_3" value="<?php echo $city_3; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="state_3" value="<?php echo $state_3; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="zip_3" value="<?php echo $zip_3; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Home/Cel Phone
          <input type="text" name="phone_3" value="<?php echo $phone_3; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Email
          <input type="text" name="email_3" value="<?php echo $email_3; ?>" class="form-control">
        </div>
      </div>
      
      <div class="row form-border">
        <div class="col-md-4">
          Previous Processing History
          <select name="history" class="form-control" required> 
            <option value="">-----</option>
            <option value="Yes" <?php echo $arHistory['Yes']; ?>>Yes</option>
            <option value="No" <?php echo $arHistory['No']; ?>>No</option>
          </select>
        </div>
        <div class="col-md-4">
          If yes, how long 
          <input type="text" name="long_time" value="<?php echo $long_time; ?>" class="form-control">
        </div>
        <div class="col-md-4">
          Previous Processor’s Name 
          <input type="text" name="previous_name" value="<?php echo $previous_name; ?>" class="form-control" required>
        </div>
        <div class="col-md-6">
          Ave Ticket Amount $
          <input type="text" name="ticket_amount" value="<?php echo $ticket_amount; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Ave Monthly Volume $
          <input type="text" name="monthly_salary" value="<?php echo $monthly_salary; ?>" class="form-control">
        </div>
      </div>
      <p>Please attach copy of voided check, copy of driver’s license(s) for all owners, and 3 months processing history statements </p>
      
      <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
  </div>
</body>

</html>