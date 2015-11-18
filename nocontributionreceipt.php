<?php
function nocontributionreceipt_civicrm_buildForm( $formName, &$form ) {
  if ("CRM_Contribute_Form_Contribution" == $formName) {
    $defaults = array ("is_email_receipt" => false);
    $form->setDefaults($defaults);
  }
}
?>
