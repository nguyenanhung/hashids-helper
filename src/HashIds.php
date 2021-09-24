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

use Exception;
use Hashids\Hashids as BaseHashIds;

/**
 * Class HashIds
 *
 * @package   nguyenanhung\Libraries\Hashids
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class HashIds implements Project
{
    use Version;

    const SALT       = 'w40):pc6cwS{mn9I_O=B$2Cr;=YXA#';
    const MIN_LENGTH = 8;
    const ALPHABET   = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; // alphabet

    /**
     * @var array HashIds Config
     * @example https://github.com/nguyenanhung/hashids-helper/blob/main/test/test.php
     * @see     https://github.com/nguyenanhung/hashids-helper/blob/main/test/test.php
     */
    protected $config;

    /**
     * Function setConfig
     *
     * @param $config
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/24/2021 22:12
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Function getConfig
     *
     * @return array
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/24/2021 27:37
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Function prepareConfig
     *
     * @param array $config
     *
     * @return array
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/24/2021 38:44
     */
    protected function prepareConfig($config = array())
    {
        $salt          = isset($config['salt']) ? $config['salt'] : self::SALT;
        $minHashLength = isset($config['minHashLength']) ? $config['minHashLength'] : self::MIN_LENGTH;
        $alphabet      = isset($config['alphabet']) ? $config['alphabet'] : self::ALPHABET;

        return array(
            'salt'          => $salt,
            'minHashLength' => $minHashLength,
            'alphabet'      => $alphabet
        );
    }

    /**
     * Function encodeId
     *
     * @param $id
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/15/2021 28:40
     */
    public function encodeId($id)
    {
        try {
            $config = $this->prepareConfig($this->config);
            $hash   = new BaseHashIds($config['salt'], $config['minHashLength'], $config['alphabet']);

            return $hash->encode($id);
        } catch (Exception $e) {
            if (function_exists('log_message')) {
                log_message('error', $e->getMessage());
                log_message('error', $e->getTraceAsString());
            }

            return $id;
        }
    }

    /**
     * Function decodeId
     *
     * @param $string
     *
     * @return array|mixed
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/15/2021 28:47
     */
    public function decodeId($string)
    {
        try {
            $config = $this->prepareConfig($this->config);
            $hash   = new BaseHashIds($config['salt'], $config['minHashLength'], $config['alphabet']);
            $decode = $hash->decode($string);
            if (empty($decode)) {
                return $string;
            }
            if (count($decode) > 1) {
                return $decode;
            }

            return $decode[0];
        } catch (Exception $e) {
            if (function_exists('log_message')) {
                log_message('error', $e->getMessage());
                log_message('error', $e->getTraceAsString());
            }

            return $string;
        }
    }

    /**
     * Function randomId
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/15/2021 43:30
     */
    public function randomId()
    {
        return uniqid('HungNG_', true);
    }
}
