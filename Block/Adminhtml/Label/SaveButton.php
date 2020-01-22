<?php

namespace DTN\Label\Block\Adminhtml\Label;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton extends GenericButton implements ButtonProviderInterface
{
 
    public function getButtonData(): array 
    {
       $data = [];
       $data = [
                'label' => __('Save'),
                'class' => 'save primary',
                'on_click' => '',
            ];
        return $data;
    }
}
