<?php

namespace Nanziok\TencentIMSDK;

use Illuminate\Support\Facades\Facade as LaravelFacade;
use Nanziok\TencentIM\Api\Account;
use Nanziok\TencentIM\Crypt\TLSSigAPIv2;

class TencentCloudSdkIm extends LaravelFacade
{
    public static function getFacadeAccessor()
    {
        return new Tim(config('tencentsdkim'));
    }

    /**
     * 帐号
     * @return Account
     */
    public static function Account()
    {
        return self::getFacadeRoot()->Account();
    }

    /**
     *资料管理
     * @return \Nanziok\TencentIM\Api\Profile
     */
    public static function Profile()
    {
        return self::getFacadeRoot()->Profile();
    }

    /**
     * 朋友
     * @return \Nanziok\TencentIM\Api\Friend
     */
    public static function Friend()
    {
        return self::getFacadeRoot()->Friend();
    }

    /**
     * 关系链管理(好友黑名单)
     * @return \Nanziok\TencentIM\Api\FriendBlacklist
     */
    public static function FriendBlacklist()
    {
        return self::getFacadeRoot()->FriendBlacklist();
    }

    /**
     * 群组管理
     * @return \Nanziok\TencentIM\Api\Group
     */
    public static function Group()
    {
        return self::getFacadeRoot()->Group();
    }

    /**
     * 群组管理(消息)
     * @return \Nanziok\TencentIM\Api\GroupMessage
     */
    public static function GroupMessage()
    {
        return self::getFacadeRoot()->GroupMessage();
    }

    /**
     * 单聊管理
     * @return \Nanziok\TencentIM\Api\ChatMessage
     */
    public static function ChatMessage()
    {
        return self::getFacadeRoot()->ChatMessage();
    }

    /**
     * 群组管理(导入相关)
     * @return \Nanziok\TencentIM\Api\ImportGroup
     */
    public static function ImportGroup()
    {
        return self::getFacadeRoot()->ImportGroup();
    }

    /**
     * 全局管理
     * @return \Nanziok\TencentIM\Api\GlobalConfig
     */
    public static function GlobalConfig()
    {
        return self::getFacadeRoot()->GlobalConfig();
    }

    /**
     * 获取 user sig
     * @param int $user_id 用户id
     * @param int $expire 有效时间(s)
     * @return string
     */
    public static function GenUserSig($user_id,$expire=24*60*60)
    {
        $config = config('tencentsdkim');
        $m = new TLSSigAPIv2($config['sdkappid'], $config['secret']);
        // 有效期一天
        return $m->genSig($user_id, $expire);
    }
}
