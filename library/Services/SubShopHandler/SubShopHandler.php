<?php
/**
 * This file is part of OXID eSales Testing Library.
 *
 * OXID eSales Testing Library is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Testing Library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Testing Library. If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 */

/**
 * Assigns items to subshop
 */
class SubShopHandler implements ShopServiceInterface
{
    /**
     * @param ServiceConfig $config
     */
    public function __construct($config) {}

    /**
     * Assigns element to subshop
     *
     * @param Request $request
     *
     * @return null
     */
    public function init($request)
    {
        $sElementTable = $request->getParameter("elementtable");
        $sShopId = $request->getParameter("shopid");
        $sParentShopId = $request->getParameter("parentshopid");
        $sElementId = $request->getParameter("elementid");
        if ($sElementId) {
            $this->assignElementToSubShop($sElementTable, $sShopId, $sElementId);
        } else {
            $this->assignAllElementsToSubShop($sElementTable, $sShopId, $sParentShopId);
        }
    }

    /**
     * Assigns element to subshop
     *
     * @param string  $sElementTable Name of element table
     * @param integer $sShopId       Subshop id
     * @param integer $sElementId    Element id
     *
     * @return null
     */
    public function assignElementToSubShop($sElementTable, $sShopId, $sElementId)
    {
        /** @var oxBase $oBase */
        $oBase = oxNew('oxBase');
        $oBase->init($sElementTable);
        if ( $oBase->load($sElementId) ) {
            /** @var oxElement2ShopRelations $oElement2ShopRelations */
            $oElement2ShopRelations = oxNew('oxElement2ShopRelations', $sElementTable);
            $oElement2ShopRelations->setShopIds($sShopId);
            $oElement2ShopRelations->addToShop($oBase->getId());
        }
    }

    /**
     * Assigns element to subshop
     *
     * @param string  $sElementTable Name of element table
     * @param integer $sShopId       Subshop id
     * @param integer $sParentShopId Parent subshop id
     *
     * @return null
     */
    public function assignAllElementsToSubShop($sElementTable, $sShopId, $sParentShopId = 1)
    {
        /** @var oxElement2ShopRelations $oElement2ShopRelations */
        $oElement2ShopRelations = oxNew('oxElement2ShopRelations', $sElementTable);
        $oElement2ShopRelations->setShopIds($sShopId);
        $oElement2ShopRelations->inheritFromShop($sParentShopId);
    }


}


