<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/21/19
 * Time: 21:52
 */

namespace Instagram\SDK\DTO\Messages\User;

use Instagram\SDK\DTO\Envelope;
use Instagram\SDK\Responses\Serializers\Traits\OnPropagateDecodeEventTrait;

/**
 * Class LogoutMessage
 *
 * @package Instagram\SDK\DTO\Messages\User
 */
class InfoMessage extends Envelope
{
    protected $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}
