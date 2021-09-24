<?php
if (!function_exists('hashIdsEncode')) {
    /**
     * Function hashIdsEncode
     *
     * @param $id
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/24/2021 45:14
     */
    function hashIdsEncode($id)
    {
        return (new nguyenanhung\Libraries\Hashids\HashIds())->encodeId($id);
    }

}
if (!function_exists('hashIdsDecode')) {
    /**
     * Function hashIdsDecode
     *
     * @param $string
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/24/2021 45:14
     */
    function hashIdsDecode($string)
    {
        return (new nguyenanhung\Libraries\Hashids\HashIds())->decodeId($string);
    }
}
