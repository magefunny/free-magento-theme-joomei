<?php
/**
 * ThemeFunny
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the themefunny.com license that is
 * available through the world-wide-web at this URL:
 * https://www.themefunny.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    ThemeFunny
 * @package     ThemeFunny_PopupLogin
 * @copyright   Copyright (c) ThemeFunny (https://www.themefunny.com/)
 * @license     https://www.themefunny.com/LICENSE.txt
 */


namespace ThemeFunny\PopupLogin\Block;

use Magento\Customer\Api\CustomerRepositoryInterface;

class PopupLogin extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    protected $customerRepository;

    /**
     * @var \Magento\Customer\Helper\View
     */
    protected $_viewHelper;

    /**
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->httpContext = $httpContext;
    }

    /**
     * Checking customer login status
     *
     * @return bool
     */
    public function customerLoggedIn()
    {
        return (bool)$this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
    }
}
