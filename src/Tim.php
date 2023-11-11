<?php


namespace Nanziok\TencentIMSDK;

use Nanziok\TencentIM\App;
use Nanziok\TencentIM\Api;

class Tim
{
    private $app;

    public function __construct($config)
    {
        $this->app = new App($config);
    }

    /**
     * @return Api\Account
     */
    public function Account()
    {
        return $this->app->get('Account');
    }

    /**
     * @return Api\Profile
     */
    public function Profile()
    {
        return $this->app->get('Profile');
    }

    /**
     * @return Api\Friend
     */
    public function Friend()
    {
        return $this->app->get('Friend');
    }

    /**
     * @return Api\FriendBlacklist
     */
    public function FriendBlacklist()
    {
        return $this->app->get('FriendBlacklist');
    }

    /**
     * @return Api\Group
     */
    public function Group()
    {
        return $this->app->get('Group');
    }

    /**
     * @return Api\GroupMessage
     */
    public function GroupMessage()
    {
        return $this->app->get('GroupMessage');
    }

    /**
     * @return Api\ChatMessage
     */
    public function ChatMessage()
    {
        return $this->app->get('ChatMessage');
    }

    /**
     * @return Api\ImportGroup
     */
    public function ImportGroup()
    {
        return $this->app->get('ImportGroup');
    }

    /**
     * @return Api\GlobalConfig
     */
    public function GlobalConfig()
    {
        return $this->app->get('GlobalConfig');
    }
}
