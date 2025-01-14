<?php
/**
 * OpenMage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (http://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Log Levels Source Model
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_Adminhtml_Model_System_Config_Source_Log_Level
{
    public function toOptionArray()
    {
        $helper = Mage::helper('adminhtml');

        return [
            Zend_Log::EMERG  => $helper->__('Emergency'),
            Zend_Log::ALERT  => $helper->__('Alert'),
            Zend_Log::CRIT   => $helper->__('Critical'),
            Zend_Log::ERR    => $helper->__('Error'),
            Zend_Log::WARN   => $helper->__('Warning'),
            Zend_Log::NOTICE => $helper->__('Notice'),
            Zend_Log::INFO   => $helper->__('Informational'),
            Zend_Log::DEBUG  => $helper->__('Debug'),
        ];
    }
}
