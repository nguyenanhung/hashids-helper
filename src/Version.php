<?php
/**
 * Project hashids-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/24/2021
 * Time: 15:20
 */

namespace nguyenanhung\Libraries\Hashids;

/**
 * Trait Version
 *
 * @package   nguyenanhung\Libraries\Hashids
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait Version
{
    /**
     * Function getVersion
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-31 01:39
     *
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }
}