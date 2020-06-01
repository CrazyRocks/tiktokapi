<?php


namespace TikTokAPI\Models;

use EJM\MainMapper;

/**
 * Class RegisterDeviceResponse
 * @package TikTokAPI\Models
 * @method getServerTime()
 * @method getDeviceId()
 * @method getInstallId()
 * @method getDeviceIdStr()
 * @method getInstallIdStr()
 * @method getNewUser()
 * @method getOpenudid()
 * @method getDeviceBrand()
 * @method getDeviceType()
 * @method getUserAgent()
 */
class RegisterDeviceResponse extends MainMapper
{
    const MAP = [
        'server_time' => 'string',
        'device_id' => 'string',
        'install_id' => 'string',
        'device_id_str' => 'string',
        'install_id_str' => 'string',
        'new_user' => 'string',
        'user_agent' => 'string',
        'openudid' => 'string',
        'device_type' => 'string',
        'device_brand' => 'string'
    ];
}