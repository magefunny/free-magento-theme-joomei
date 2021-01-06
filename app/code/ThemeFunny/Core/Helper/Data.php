<?php

namespace ThemeFunny\Core\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    protected $storeManager;
    protected $objectManager;
    protected $_logo;

    /**
     * Data constructor.
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager,
        \Magento\Theme\Block\Html\Header\Logo $logo
    )
    {
        $this->storeManager  = $storeManager;
        $this->objectManager = $objectManager;
        $this->_logo         = $logo;
        parent::__construct($context);
    }

    public function isHomePage()
    {
        return $this->_logo->isHomePage();
    }

}
