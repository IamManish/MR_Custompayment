<?php
class MR_Custompayment_Helper_Data extends Mage_Core_Helper_Abstract
{
	function getPaymentGatewayUrl() 
	  {
	    return Mage::getUrl('custompayment/payment/gateway', array('_secure' => false));
	  }
}
	 