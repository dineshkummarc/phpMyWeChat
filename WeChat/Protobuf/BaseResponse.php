<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BaseResponse message
 */
class BaseResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RET = 1;
    const ERRMSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RET => array(
            'name' => 'ret',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERRMSG => array(
            'name' => 'errMsg',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RET] = null;
        $this->values[self::ERRMSG] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'ret' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRet($value)
    {
        return $this->set(self::RET, $value);
    }

    /**
     * Returns value of 'ret' property
     *
     * @return integer
     */
    public function getRet()
    {
        $value = $this->get(self::RET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRet()
    {
        return $this->get(self::RET) !== null;
    }

    /**
     * Sets value of 'errMsg' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setErrMsg(\SKBuiltinString $value=null)
    {
        return $this->set(self::ERRMSG, $value);
    }

    /**
     * Returns value of 'errMsg' property
     *
     * @return \SKBuiltinString
     */
    public function getErrMsg()
    {
        return $this->get(self::ERRMSG);
    }

    /**
     * Returns true if 'errMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrMsg()
    {
        return $this->get(self::ERRMSG) !== null;
    }
}
}