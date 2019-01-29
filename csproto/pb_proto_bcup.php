<?php
/**
 * Auto generated from bcup.proto at 2015-01-28 02:10:02
 *
 * MsgBUp package
 */

/**
 * battlecheck_reply message
 */
class MsgBUp_BattlecheckReply extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
            'repeated' => true,
            'type' => 'MsgBUp_CheckResult'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
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
        $this->values[self::_RESULT] = array();
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
     * Appends value to '_result' list
     *
     * @param MsgBUp_CheckResult $value Value to append
     *
     * @return null
     */
    public function appendResult(MsgBUp_CheckResult $value)
    {
        return $this->append(self::_RESULT, $value);
    }

    /**
     * Clears '_result' list
     *
     * @return null
     */
    public function clearResult()
    {
        return $this->clear(self::_RESULT);
    }

    /**
     * Returns '_result' list
     *
     * @return MsgBUp_CheckResult[]
     */
    public function getResult()
    {
        return $this->get(self::_RESULT);
    }

    /**
     * Returns '_result' iterator
     *
     * @return ArrayIterator
     */
    public function getResultIterator()
    {
        return new \ArrayIterator($this->get(self::_RESULT));
    }

    /**
     * Returns element from '_result' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgBUp_CheckResult
     */
    public function getResultAt($offset)
    {
        return $this->get(self::_RESULT, $offset);
    }

    /**
     * Returns count of '_result' list
     *
     * @return int
     */
    public function getResultCount()
    {
        return $this->count(self::_RESULT);
    }
}

/**
 * result enum embedded in check_result message
 */
final class MsgBUp_CheckResult_Result
{
    const honest = 1;
    const cheat = 2;
    const victory = 3;
    const defeat = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'honest' => self::honest,
            'cheat' => self::cheat,
            'victory' => self::victory,
            'defeat' => self::defeat,
        );
    }
}

/**
 * check_result message
 */
class MsgBUp_CheckResult extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _RESULT = 3;
    const _IS_PLUGIN = 4;
    const _ROUND_RESULT = 5;
    const _GVG_RESULT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHECKID => array(
            'name' => '_checkid',
            'required' => true,
            'type' => 5,
        ),
        self::_USERID => array(
            'name' => '_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => MsgBUp_CheckResult_Result::honest, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_IS_PLUGIN => array(
            'name' => '_is_plugin',
            'required' => true,
            'type' => 5,
        ),
        self::_ROUND_RESULT => array(
            'name' => '_round_result',
            'repeated' => true,
            'type' => 5,
        ),
        self::_GVG_RESULT => array(
            'name' => '_gvg_result',
            'required' => false,
            'type' => 'MsgBUp_GvgResult'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_RESULT] = null;
        $this->values[self::_IS_PLUGIN] = null;
        $this->values[self::_ROUND_RESULT] = array();
        $this->values[self::_GVG_RESULT] = null;
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
     * Sets value of '_checkid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCheckid($value)
    {
        return $this->set(self::_CHECKID, $value);
    }

    /**
     * Returns value of '_checkid' property
     *
     * @return int
     */
    public function getCheckid()
    {
        return $this->get(self::_CHECKID);
    }

    /**
     * Sets value of '_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserid($value)
    {
        return $this->set(self::_USERID, $value);
    }

    /**
     * Returns value of '_userid' property
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->get(self::_USERID);
    }

    /**
     * Sets value of '_result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::_RESULT, $value);
    }

    /**
     * Returns value of '_result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::_RESULT);
    }

    /**
     * Sets value of '_is_plugin' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsPlugin($value)
    {
        return $this->set(self::_IS_PLUGIN, $value);
    }

    /**
     * Returns value of '_is_plugin' property
     *
     * @return int
     */
    public function getIsPlugin()
    {
        return $this->get(self::_IS_PLUGIN);
    }

    /**
     * Appends value to '_round_result' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendRoundResult($value)
    {
        return $this->append(self::_ROUND_RESULT, $value);
    }

    /**
     * Clears '_round_result' list
     *
     * @return null
     */
    public function clearRoundResult()
    {
        return $this->clear(self::_ROUND_RESULT);
    }

    /**
     * Returns '_round_result' list
     *
     * @return int[]
     */
    public function getRoundResult()
    {
        return $this->get(self::_ROUND_RESULT);
    }

    /**
     * Returns '_round_result' iterator
     *
     * @return ArrayIterator
     */
    public function getRoundResultIterator()
    {
        return new \ArrayIterator($this->get(self::_ROUND_RESULT));
    }

    /**
     * Returns element from '_round_result' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getRoundResultAt($offset)
    {
        return $this->get(self::_ROUND_RESULT, $offset);
    }

    /**
     * Returns count of '_round_result' list
     *
     * @return int
     */
    public function getRoundResultCount()
    {
        return $this->count(self::_ROUND_RESULT);
    }

    /**
     * Sets value of '_gvg_result' property
     *
     * @param MsgBUp_GvgResult $value Property value
     *
     * @return null
     */
    public function setGvgResult(MsgBUp_GvgResult $value)
    {
        return $this->set(self::_GVG_RESULT, $value);
    }

    /**
     * Returns value of '_gvg_result' property
     *
     * @return MsgBUp_GvgResult
     */
    public function getGvgResult()
    {
        return $this->get(self::_GVG_RESULT);
    }
}

/**
 * gvg_result message
 */
class MsgBUp_GvgResult extends \ProtobufMessage
{
    /* Field index constants */
    const _SELF_HEROS = 1;
    const _OPPO_HEROS = 2;
    const _BATTLE_LENGTH = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SELF_HEROS => array(
            'name' => '_self_heros',
            'repeated' => true,
            'type' => 'MsgBUp_GvgHero'
        ),
        self::_OPPO_HEROS => array(
            'name' => '_oppo_heros',
            'repeated' => true,
            'type' => 'MsgBUp_GvgHero'
        ),
        self::_BATTLE_LENGTH => array(
            'name' => '_battle_length',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
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
        $this->values[self::_SELF_HEROS] = array();
        $this->values[self::_OPPO_HEROS] = array();
        $this->values[self::_BATTLE_LENGTH] = null;
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
     * Appends value to '_self_heros' list
     *
     * @param MsgBUp_GvgHero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeros(MsgBUp_GvgHero $value)
    {
        return $this->append(self::_SELF_HEROS, $value);
    }

    /**
     * Clears '_self_heros' list
     *
     * @return null
     */
    public function clearSelfHeros()
    {
        return $this->clear(self::_SELF_HEROS);
    }

    /**
     * Returns '_self_heros' list
     *
     * @return MsgBUp_GvgHero[]
     */
    public function getSelfHeros()
    {
        return $this->get(self::_SELF_HEROS);
    }

    /**
     * Returns '_self_heros' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHerosIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROS));
    }

    /**
     * Returns element from '_self_heros' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgBUp_GvgHero
     */
    public function getSelfHerosAt($offset)
    {
        return $this->get(self::_SELF_HEROS, $offset);
    }

    /**
     * Returns count of '_self_heros' list
     *
     * @return int
     */
    public function getSelfHerosCount()
    {
        return $this->count(self::_SELF_HEROS);
    }

    /**
     * Appends value to '_oppo_heros' list
     *
     * @param MsgBUp_GvgHero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeros(MsgBUp_GvgHero $value)
    {
        return $this->append(self::_OPPO_HEROS, $value);
    }

    /**
     * Clears '_oppo_heros' list
     *
     * @return null
     */
    public function clearOppoHeros()
    {
        return $this->clear(self::_OPPO_HEROS);
    }

    /**
     * Returns '_oppo_heros' list
     *
     * @return MsgBUp_GvgHero[]
     */
    public function getOppoHeros()
    {
        return $this->get(self::_OPPO_HEROS);
    }

    /**
     * Returns '_oppo_heros' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHerosIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROS));
    }

    /**
     * Returns element from '_oppo_heros' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgBUp_GvgHero
     */
    public function getOppoHerosAt($offset)
    {
        return $this->get(self::_OPPO_HEROS, $offset);
    }

    /**
     * Returns count of '_oppo_heros' list
     *
     * @return int
     */
    public function getOppoHerosCount()
    {
        return $this->count(self::_OPPO_HEROS);
    }

    /**
     * Sets value of '_battle_length' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBattleLength($value)
    {
        return $this->set(self::_BATTLE_LENGTH, $value);
    }

    /**
     * Returns value of '_battle_length' property
     *
     * @return int
     */
    public function getBattleLength()
    {
        return $this->get(self::_BATTLE_LENGTH);
    }
}

/**
 * gvg_hero message
 */
class MsgBUp_GvgHero extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROID = 1;
    const _HP_PERC = 2;
    const _MP_PERC = 3;
    const _CUSTOM_DATA = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROID => array(
            'name' => '_heroid',
            'required' => true,
            'type' => 5,
        ),
        self::_HP_PERC => array(
            'name' => '_hp_perc',
            'required' => true,
            'type' => 5,
        ),
        self::_MP_PERC => array(
            'name' => '_mp_perc',
            'required' => true,
            'type' => 5,
        ),
        self::_CUSTOM_DATA => array(
            'name' => '_custom_data',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
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
        $this->values[self::_HEROID] = null;
        $this->values[self::_HP_PERC] = null;
        $this->values[self::_MP_PERC] = null;
        $this->values[self::_CUSTOM_DATA] = null;
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
     * Sets value of '_heroid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroid($value)
    {
        return $this->set(self::_HEROID, $value);
    }

    /**
     * Returns value of '_heroid' property
     *
     * @return int
     */
    public function getHeroid()
    {
        return $this->get(self::_HEROID);
    }

    /**
     * Sets value of '_hp_perc' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHpPerc($value)
    {
        return $this->set(self::_HP_PERC, $value);
    }

    /**
     * Returns value of '_hp_perc' property
     *
     * @return int
     */
    public function getHpPerc()
    {
        return $this->get(self::_HP_PERC);
    }

    /**
     * Sets value of '_mp_perc' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMpPerc($value)
    {
        return $this->set(self::_MP_PERC, $value);
    }

    /**
     * Returns value of '_mp_perc' property
     *
     * @return int
     */
    public function getMpPerc()
    {
        return $this->get(self::_MP_PERC);
    }

    /**
     * Sets value of '_custom_data' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCustomData($value)
    {
        return $this->set(self::_CUSTOM_DATA, $value);
    }

    /**
     * Returns value of '_custom_data' property
     *
     * @return int
     */
    public function getCustomData()
    {
        return $this->get(self::_CUSTOM_DATA);
    }
}
require_once 'pb_proto_common.php';