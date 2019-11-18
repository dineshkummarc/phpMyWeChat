<?php
/**
 * Auto generated from x.proto at 2019-11-13 06:31:09
 */

namespace {
/**
 * SKBuiltinBuffer_t message
 */
class SKBuiltinBuffer_t extends \ProtobufMessage
{
    /* Field index constants */
    const ILEN = 1;
    const BUFFER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ILEN => array(
            'name' => 'iLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUFFER => array(
            'name' => 'Buffer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ILEN] = null;
        $this->values[self::BUFFER] = null;
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
     * Sets value of 'iLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setILen($value)
    {
        return $this->set(self::ILEN, $value);
    }

    /**
     * Returns value of 'iLen' property
     *
     * @return integer
     */
    public function getILen()
    {
        $value = $this->get(self::ILEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'iLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasILen()
    {
        return $this->get(self::ILEN) !== null;
    }

    /**
     * Sets value of 'Buffer' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuffer($value)
    {
        return $this->set(self::BUFFER, $value);
    }

    /**
     * Returns value of 'Buffer' property
     *
     * @return string
     */
    public function getBuffer()
    {
        $value = $this->get(self::BUFFER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Buffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuffer()
    {
        return $this->get(self::BUFFER) !== null;
    }
}
}