<?php
class MR_Custompayment_Block_Form_Custompayment extends Mage_Payment_Block_Form
{
  protected function _construct()
  {
    parent::_construct();
    $this->setTemplate('custompayment/form/custompayment.phtml');
  }
}