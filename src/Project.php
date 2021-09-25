<?php
/**
 * Project hashids-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/24/2021
 * Time: 15:18
 */

namespace nguyenanhung\Libraries\Hashids;

/**
 * Interface Project
 *
 * @package   nguyenanhung\Libraries\Hashids
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface Project
{
    const VERSION       = '1.0.1';
    const LAST_MODIFIED = '2021-09-25';
    const AUTHOR_NAME   = 'Hung Nguyen';
    const AUTHOR_EMAIL  = 'dev@nguyenanhung.com';
    const AUTHOR_URL    = 'https://nguyenanhung.com';
    const PROJECT_NAME  = 'HashIds Helper';
    const USE_BENCHMARK = false;
    const USE_DEBUG     = false;

    /**
     * Hàm lấy thông tin phiên bản Package
     *
     * @author  : 713uk13m <dev@nguyenanhung.com>
     * @time    : 10/13/18 15:12
     *
     * @return string Current Project Version, VD: 0.1.0
     */
    public function getVersion();
}