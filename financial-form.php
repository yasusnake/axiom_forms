<?php
$today = date('Y-m-d');

$firm_date = isset($_POST['firm-date']) ? $_POST['firm-date'] : $today; 

if (isset($_POST['submit'])) {
  $legal_name = $_POST['legal-name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $telephone = $_POST['telephone'];
  $fax = $_POST['fax'];
  $ein = $_POST['ein'];
  $web = $_POST['web'];
  $entity = $_POST['entity'];
  $partnership = $_POST['partnership'];
  $corporation = $_POST['corporation'];
  $llc = $_POST['llc'];
  $other = $_POST['other'];
  $type_business = $_POST['type-business'];
  $average_monthly = $_POST['average-monthly'];
  $owner_name = $_POST['owner-name'];
  $owner_title = $_POST['owner-title'];
  $owner_ownership = $_POST['owner-ownership'];
  $owner_address = $_POST['owner-address'];
  $owner_city = $_POST['owner-city'];
  $owner_state = $_POST['owner-state'];
  $owner_zip = $_POST['owner-zip'];
  $owner_ss = $_POST['owner-ss'];
  $owner_dob = $_POST['owner-dob'];
  $owner_phone = $_POST['owner-phone'];
  $owner_email = $_POST['owner-email'];
  $partner_name = $_POST['partner-name'];
  $partner_title = $_POST['partner-title'];
  $partner_ownership = $_POST['partner-ownership'];
  $partner_address = $_POST['partner-address'];
  $partner_city = $_POST['partner-city'];
  $partner_state = $_POST['partner-state'];
  $partner_zip = $_POST['partner-zip'];
  $partner_ss = $_POST['partner-ss'];
  $partner_dob = $_POST['partner-dob'];
  $partner_phone = $_POST['partner-phone'];
  $partner_email = $_POST['partner-email'];
  $partner_businees_commpany = $_POST['partner-businees-commpany'];
  $partner_businees_acct = $_POST['partner-businees-acct'];
  $partner_businees_phone = $_POST['partner-businees-phone'];
  $references_name_1 = $_POST['references-name-1'];
  $references_contact_1 = $_POST['references-contact-1'];
  $references_phone_1 = $_POST['references-phone-1'];
  $references_name_2 = $_POST['references-name-2'];
  $references_contact_2 = $_POST['references-contact-2'];
  $references_phone_2 = $_POST['references-phone-2'];
  $references_name_3 = $_POST['references-name-3'];
  $references_contact_3 = $_POST['references-contact-3'];
  $references_phone_3 = $_POST['references-phone-3'];
  $firm_name = $_POST['firm-name'];
  
  $template = file_get_contents('template-form-1.html');
  
  $template = str_replace('$legal_name$', $legal_name, $template);
  $template = str_replace('$address$', $address, $template);
  $template = str_replace('$city$', $city, $template);
  $template = str_replace('$state$', $state, $template);
  $template = str_replace('$zip$', $zip, $template);
  $template = str_replace('$telephone$', $telephone, $template);
  $template = str_replace('$fax$', $fax, $template);
  $template = str_replace('$ein$', $ein, $template);
  $template = str_replace('$web$', $web, $template);
  $template = str_replace('$entity$', $entity, $template);
  $template = str_replace('$partnership$', $partnership, $template);
  $template = str_replace('$corporation$', $corporation, $template);
  $template = str_replace('$llc$', $llc, $template);
  $template = str_replace('$other$', $other, $template);
  $template = str_replace('$type_business$', $type_business, $template);
  $template = str_replace('$average_monthly$', $average_monthly, $template);
  $template = str_replace('$owner_name$', $owner_name, $template);
  $template = str_replace('$owner_title$', $owner_title, $template);
  $template = str_replace('$owner_ownership$', $owner_ownership, $template);
  $template = str_replace('$owner_address$', $owner_address, $template);
  $template = str_replace('$owner_city$', $owner_city, $template);
  $template = str_replace('$owner_state$', $owner_state, $template);
  $template = str_replace('$owner_zip$', $owner_zip, $template);
  $template = str_replace('$owner_ss$', $owner_ss, $template);
  $template = str_replace('$owner_dob$', $owner_dob, $template);
  $template = str_replace('$owner_phone$', $owner_phone, $template);
  $template = str_replace('$owner_email$', $owner_email, $template);
  $template = str_replace('$partner_name$', $partner_name, $template);
  $template = str_replace('$partner_title$', $partner_title, $template);
  $template = str_replace('$partner_ownership$', $partner_ownership, $template);
  $template = str_replace('$partner_address$', $partner_address, $template);
  $template = str_replace('$partner_city$', $partner_city, $template);
  $template = str_replace('$partner_state$', $partner_state, $template);
  $template = str_replace('$partner_zip$', $partner_zip, $template);
  $template = str_replace('$partner_ss$', $partner_ss, $template);
  $template = str_replace('$partner_dob$', $partner_dob, $template);
  $template = str_replace('$partner_phone$', $partner_phone, $template);
  $template = str_replace('$partner_email$', $partner_email, $template);
  $template = str_replace('$partner_businees_commpany$', $partner_businees_commpany, $template);
  $template = str_replace('$partner_businees_acct$', $partner_businees_acct, $template);
  $template = str_replace('$partner_businees_phone$', $partner_businees_phone, $template);
  $template = str_replace('$references_name_1$', $references_name_1, $template);
  $template = str_replace('$references_contact_1$', $references_contact_1, $template);
  $template = str_replace('$references_phone_1$', $references_phone_1, $template);
  $template = str_replace('$references_name_2$', $references_name_2, $template);
  $template = str_replace('$references_contact_2$', $references_contact_2, $template);
  $template = str_replace('$references_phone_2$', $references_phone_2, $template);
  $template = str_replace('$references_name_3$', $references_name_3, $template);
  $template = str_replace('$references_contact_3$', $references_contact_3, $template);
  $template = str_replace('$references_phone_3$', $references_phone_3, $template);
  $template = str_replace('$firm_name$', $firm_name, $template);
  $template = str_replace('$firm_date$', $firm_date, $template);
  
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
    <h1 class="main-title">Axiom Financial LLC</h1>
    <h2 class="secondary-title">Business Loan Application</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Legal/Corporate Name
      <input type="text" value="<?php echo $legal_name; ?>" class="form-control" name="legal-name" required>
      <div class="row">
        <div class="col-md-4">
          Physical Address
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
      </div>
      <div class="row">
        <div class="col-md-4">
          Telephone
          <input type="text" name="telephone" value="<?php echo $telephone; ?>" class="form-control" required required>
        </div>
        <div class="col-md-4">
          Fax
          <input type="text" name="fax" value="<?php echo $fax; ?>" class="form-control">
        </div>
        <div class="col-md-4">
          EIN
          <input type="text" name="ein" value="<?php echo $ein; ?>" class="form-control">
        </div>
      </div>
      Website
      <input type="text" name="web" value="<?php echo $web; ?>" class="form-control">
      <div class="row">
        <div class="col-md-4">
          Type Of Entity: Sole Proprietorship
          <input type="text" name="entity" value="<?php echo $entity; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Partnership
          <input type="text" name="partnership" value="<?php echo $partnership; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Corporation
          <input type="text" name="corporation" value="<?php echo $corporation; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          LLC
          <input type="text" name="llc" value="<?php echo $llc; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Other
          <input type="text" name="other" value="<?php echo $other; ?>" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          Type of Business
          <input type="text" name="type-business" value="<?php echo $type_business; ?>" class="form-control">
        </div>
        <div class="col-md-6">
          Average Monthly Volume $
          <input type="text" name="average-monthly" value="<?php echo $average_monthly; ?>" class="form-control">
        </div>
      </div>
      <h2 class="secondary-title">Merchant/Owner Information</h2>
      <div class="row">
        <div class="col">
          Corp Officer/Owner Name
          <input type="text" name="owner-name" value="<?php echo $owner_name; ?>" class="form-control" required>
        </div>
        <div class="col" required>
          Title
          <input type="text" name="owner-title" value="<?php echo $owner_title; ?>" class="form-control">
        </div>
        <div class="col">
          Ownership %
          <input type="text" name="owner-ownership" value="<?php echo $owner_ownership; ?>" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          Home Address
          <input type="text" name="owner-address" value="<?php echo $owner_address; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="owner-city" value="<?php echo $owner_city; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="owner-state" value="<?php echo $owner_state; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="owner-zip" value="<?php echo $owner_zip; ?>" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          SS#
          <input type="text" name="owner-ss" value="<?php echo $owner_ss; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          DOB
          <input type="text" name="owner-dob" value="<?php echo $owner_dob; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Phone
          <input type="tel" name="owner-phone" value="<?php echo $owner_phone; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Email
          <input type="email" name="owner-email" value="<?php echo $owner_email; ?>" class="form-control">
        </div>
      </div>
      <h2 class="secondary-title">Partner Info if Applicable</h2>
      <div class="row">
        <div class="col">
          Corp Officer/Owner Name
          <input type="text" name="partner-name" value="<?php echo $partner_name; ?>" class="form-control" required>
        </div>
        <div class="col">
          Title
          <input type="text" name="partner-title" value="<?php echo $partner_title; ?>" class="form-control" required>
        </div>
        <div class="col">
          Ownership %
          <input type="text" name="partner-ownership" value="<?php echo $partner_ownership; ?>" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          Home Address
          <input type="text" name="partner-address" value="<?php echo $partner_address; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          City
          <input type="text" name="partner-city" value="<?php echo $partner_city; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          State
          <input type="text" name="partner-state" value="<?php echo $partner_state; ?>" class="form-control">
        </div>
        <div class="col-md-2">
          Zip
          <input type="text" name="partner-zip" value="<?php echo $partner_zip; ?>" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          SS#
          <input type="text" name="partner-ss" value="<?php echo $partner_ss; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          DOB
          <input type="text" name="partner-dob" value="<?php echo $partner_dob; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Phone
          <input type="tel" name="partner-phone" value="<?php echo $partner_phone; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Email
          <input type="email" name="partner-email" value="<?php echo $partner_email; ?>" class="form-control">
        </div>
      </div>
      <b>Business Information</b>
      <div class="row">
        <div class="col-md-6">
          Landlord/Mortgage Company
          <input type="text" name="partner-businees-commpany" value="<?php echo $partner_businees_commpany; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Acct #
          <input type="text" name="partner-businees-acct" value="<?php echo $partner_businees_acct; ?>" class="form-control">
        </div>
        <div class="col-md-3">
          Phone #
          <input type="tel" name="partner-businees-phone" value="<?php echo $partner_businees_phone; ?>" class="form-control">
        </div>
      </div>
      <b>Trade References</b>
      <div class="row">
        <div class="col">
          Business Name
          <input type="text" name="references-name-1" value="<?php echo $references_name_1; ?>" class="form-control">
        </div>
        <div class="col">
          Contact
          <input type="text" name="references-contact-1" value="<?php echo $references_contact_1; ?>" class="form-control">
        </div>
        <div class="col">
          Phone
          <input type="tel" name="references-phone-1" value="<?php echo $references_phone_1; ?>" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col">
          Business Name
          <input type="text" name="references-name-2" value="<?php echo $references_name_2; ?>" class="form-control">
        </div>
        <div class="col">
          Contact
          <input type="text" name="references-contact-2" value="<?php echo $references_contact_2; ?>" class="form-control">
        </div>
        <div class="col">
          Phone
          <input type="tel" name="references-phone-2" value="<?php echo $references_phone_2; ?>" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col">
          Business Name
          <input type="text" name="references-name-3" value="<?php echo $references_name_3; ?>" class="form-control">
        </div>
        <div class="col">
          Contact
          <input type="text" name="references-contact-3" value="<?php echo $references_contact_3; ?>" class="form-control">
        </div>
        <div class="col">
          Phone
          <input type="tel" name="references-phone-3" value="<?php echo $references_phone_3; ?>" class="form-control">
        </div>
      </div>
      <p>I hereby authorize Axiom Financial LLC or financial institutions to obtain an investigative or consumer report from a credit agency</p>
      <div class="row">
        <div class="col">
          Name
          <input type="text" name="firm-name" value="<?php echo $firm_name; ?>" class="form-control" required>
        </div>
        <div class="col">
          Date
          <input type="date" name="firm-date" value="<?php echo $firm_date; ?>" class="form-control" required>
        </div>
      </div>
      <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
  </div>
</body>

</html>