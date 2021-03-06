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
 * Useful for defining custom time
 */
class modOxUtilsDate extends oxUtilsDate
{

    /** @var string */
    protected $_sTime = null;

    /**
     * Returns instance of oxUtilsDate.
     *
     * @return oxUtilsDate
     */
    public static function getInstance()
    {
        return oxRegistry::get("oxUtilsDate");
    }

    /**
     * @param string $sTime
     */
    public function UNITSetTime($sTime)
    {
        $this->_sTime = $sTime;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        if (!is_null($this->_sTime)) {
            return $this->_sTime;
        }

        return parent::getTime();
    }
}
