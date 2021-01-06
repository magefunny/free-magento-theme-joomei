<?php

namespace ThemeFunny\PopupContent\Model\Config\Source;

class Width implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '10%', 'label' => __('10%')],
            ['value' => '15%', 'label' => __('15%')],
            ['value' => '20%', 'label' => __('20%')],
            ['value' => '25%', 'label' => __('25%')],
            ['value' => '30%', 'label' => __('30%')],
            ['value' => '33.333333%', 'label' => __('33.333333%')],
            ['value' => '35%', 'label' => __('35%')],
            ['value' => '40%', 'label' => __('40%')],
            ['value' => '45%', 'label' => __('45%')],
            ['value' => '50%', 'label' => __('50%')],
            ['value' => '55%', 'label' => __('55%')],
            ['value' => '60%', 'label' => __('60%')],
            ['value' => '65%', 'label' => __('65%')],
            ['value' => '70%', 'label' => __('70%')],
            ['value' => '75%', 'label' => __('75%')],
            ['value' => '80%', 'label' => __('80%')],
            ['value' => '85%', 'label' => __('85%')],
            ['value' => '90%', 'label' => __('90%')],
            ['value' => '95%', 'label' => __('95%')],
            ['value' => '100%', 'label' => __('100%')],
        ];
    }
}