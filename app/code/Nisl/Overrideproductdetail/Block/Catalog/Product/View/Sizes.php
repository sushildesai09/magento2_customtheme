<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Product description block
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
//namespace Magento\Catalog\Block\Product\View;
namespace Nisl\Overrideproductdetail\Block\Catalog\Product\View;


class Sizes extends \Magento\Catalog\Block\Product\View\Sizes
{
    
    /**
     * $excludeAttr is optional array of attribute codes to
     * exclude them from additional data array
     *
     * @param array $excludeAttr
     * @return array
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function getItems($order = 'wheel_size', $dir = 'ASC', $sizes = [], $bolt_pattern = null, $offsetmm_max = null, $center_bore_min = null)
    {
        $data = [];
        $product = $this->getProduct();
        if($product->getTypeID() != 'configurable') return false;


        /*
         * $productIds = $product->getTypeInstance()->getUsedProductIds($product);
         * */

        $_products = [];
        $_collection = [];
        $excludeAttr =  [];
        $attributeSetName = $this->getAttributeSetName();
        $_collection = $product->getTypeInstance()->getUsedProductCollection($product);

        $attributeSetName = $this->getAttributeSetName();


        if( count($_collection) == 0 ) return false;

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        $ids = array_map(function($p) { return $p->getID(); }, iterator_to_array($_collection));
        $collection = $objectManager->get('Magento\Catalog\Model\Product')
            ->getCollection()
            ->addAttributeToFilter('entity_id', array('in' => $ids))            
            ->joinField('stock_item', 'cataloginventory_stock_item', 'qty', 'product_id=entity_id', 'qty!=0')
            ->addAttributeToSelect('*');
            

        foreach ($collection as $product){
            $temp_prod = $this->getAdditionalData($product, $excludeAttr);
            if ($bolt_pattern!=null){
                if (strpos($temp_prod['bolt_pattern']['value'],$bolt_pattern) === false){
                    continue;
                }
            }
            if ($offsetmm_max!=null){
                if (floatval($temp_prod['offsetmm']['value'])>$offsetmm_max)
                    continue;
            }
            if ($center_bore_min!=null){
                if (!isset($temp_prod['center_bore']) ||
                    floatval($temp_prod['center_bore']['value'])< $center_bore_min)
                    continue;
            }
            if (count($sizes)==0){
                $_products[$product->getID()] = $temp_prod;
            }else{
                if(in_array($temp_prod['wheel_size']['value'],$sizes)){
                    $_products[$product->getID()] = $temp_prod;
                }
            }
        }
        return  $_products ;

    }
}
