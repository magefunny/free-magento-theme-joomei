<?php

namespace ThemeFunny\Joomei\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Cms\Model\ResourceModel\Block\CollectionFactory;

/**
 * Class CmsBlocks
 *
 * @package ThemeFunny\Joomei\Model\Config\Source
 */
class CmsBlocks implements ArrayInterface
{
	/**
	 * @var CollectionFactory
	 */
	protected $blockCollection;

	/**
	 * CmsBlocks constructor.
	 *
	 * @param CollectionFactory $blockCollection
	 */
	public function __construct
	(
		CollectionFactory $blockCollection
	)
	{
		$this->blockCollection = $blockCollection;
	}

	/**
	 * @return array
	 */
	public function toOptionArray()
	{
		$blocks  = $this->blockCollection->create();
		$options = [];
		foreach ($blocks as $item) {
			$options[] = ['value' => $item->getIdentifier(), 'label' => $item->getTitle()];
		}

		return $options;
	}
}