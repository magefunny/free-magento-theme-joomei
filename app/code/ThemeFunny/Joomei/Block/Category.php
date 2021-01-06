<?php

namespace ThemeFunny\Joomei\Block;

use Magento\Framework\View\Element\Template as CT;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;

class Category extends CT
{
    /**
     * @var Registry
     */
    public $_coreRegistry;
    protected $helperTheme;

    /**
     * TitleCategory constructor.
     * @param Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    )
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->_coreRegistry->registry('current_category');
    }
}
