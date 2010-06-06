<?php
/**
 * phpMyFAQ database based search classes
 *
 * PHP Version 5.2
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * @category  phpMyFAQ
 * @package   PMF_Search
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2010-06-06
 */

/**
 * PMF_Search_Database
 *
 * @category  phpMyFAQ
 * @package   PMF_Search
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2010-06-06
 */
class PMF_Search_Database
{
    /**
     * Database connection handle
     * 
     * @var PMF_DB_Driver
     */
    private $dbHandle = null;
    
    /**
     * Setter for the database handle
     * 
     * @param PMF_DB_Driver $dbHandle Database Handle
     * 
     * @return void
     */
    public function setDatabaseHandle(PMF_DB_Driver $dbHandle)
    {
        $this->dbHandle = $dbHandle;
    }
    /**
     * Getter for the database handle
     * 
     * @return PMF_DB_Driver
     */
    public function getDatabaseHandle()
    {
        return $this->dbHandle;
    }
}