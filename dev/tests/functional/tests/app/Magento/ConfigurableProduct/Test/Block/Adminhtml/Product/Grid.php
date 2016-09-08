<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\ConfigurableProduct\Test\Block\Adminhtml\Product;

use Magento\Ui\Test\Block\Adminhtml\DataGrid;
use Magento\ConfigurableProduct\Test\Fixture\ConfigurableProduct;

/**
 * Backend catalog product grid.
 */
class Grid extends DataGrid
{
    /**
     * Prepare data.
     *
     * @param ConfigurableProduct $product
     * @return array
     */
    public function prepareData($product)
    {
        $configurableAttributesData = $product->getConfigurableAttributesData();
        $productItems[] = ['sku' => $product->getSku()];
        foreach ($configurableAttributesData['matrix'] as $variation) {
            $productItems[] = ['sku' => $variation['sku']];
        }

        return $productItems;
    }
}
