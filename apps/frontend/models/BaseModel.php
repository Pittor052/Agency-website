<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:31
 */

namespace Bolar\Frontend\Models;

use Phalcon\Mvc\Model;

class BaseModel extends Model
{
    /**
     * Array with error messages
     * @var array
     */
    public static $messages = array();

    /**
     * Pass True ,to see the messages through the static method $message.
     * (this method keeps all msg's at array self::$message)
     * @param bool $backup
     */
    public function setErr($backup = false)
    {
        $p = $this->getMessages();
        foreach ($p as $obj) {
            if ($backup == true) {
                self::$messages[] = $obj->getMessage();
            }
            $this->getDi()->getFlashSession()->error($obj->getMessage());
        }
    }

}
