<?php
/**
 * Auto generated from bcdown.proto at 2015-01-14 07:09:06
 *
 * bcdown package
 */

/**
 * result enum
 */
final class Bcdown_Result
{
    const victory = 0;
    const defeat = 1;
    const canceled = 2;
    const timeout = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'victory' => self::victory,
            'defeat' => self::defeat,
            'canceled' => self::canceled,
            'timeout' => self::timeout,
        );
    }
}

/**
 * battlecheck message
 */
class Bcdown_Battlecheck extends \ProtobufMessage
{
    /* Field index constants */
    const _PVE_MSG = 1;
    const _PVP_MSG = 2;
    const _TBC_MSG = 3;
    const _EXCAV_MSG = 4;
    const _GUILD_MSG = 5;
    const _RTPVP_MSG = 6;
    const _TOPPVP_MSG = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_PVE_MSG => array(
            'name' => '_pve_msg',
            'repeated' => true,
            'type' => 'Bcdown_PveCheckMsg'
        ),
        self::_PVP_MSG => array(
            'name' => '_pvp_msg',
            'repeated' => true,
            'type' => 'Bcdown_PvpCheckMsg'
        ),
        self::_TBC_MSG => array(
            'name' => '_tbc_msg',
            'repeated' => true,
            'type' => 'Bcdown_TbcCheckMsg'
        ),
        self::_EXCAV_MSG => array(
            'name' => '_excav_msg',
            'repeated' => true,
            'type' => 'Bcdown_ExcavCheckMsg'
        ),
        self::_GUILD_MSG => array(
            'name' => '_guild_msg',
            'repeated' => true,
            'type' => 'Bcdown_GuildPveCheckMsg'
        ),
        self::_RTPVP_MSG => array(
            'name' => '_rtpvp_msg',
            'repeated' => true,
            'type' => 'Bcdown_RtpvpCheckMsg'
        ),
        self::_TOPPVP_MSG => array(
            'name' => '_toppvp_msg',
            'repeated' => true,
            'type' => 'Bcdown_ToppvpCheckMsg'
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
        $this->values[self::_PVE_MSG] = array();
        $this->values[self::_PVP_MSG] = array();
        $this->values[self::_TBC_MSG] = array();
        $this->values[self::_EXCAV_MSG] = array();
        $this->values[self::_GUILD_MSG] = array();
        $this->values[self::_RTPVP_MSG] = array();
        $this->values[self::_TOPPVP_MSG] = array();
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
     * Appends value to '_pve_msg' list
     *
     * @param Bcdown_PveCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendPveMsg(Bcdown_PveCheckMsg $value)
    {
        return $this->append(self::_PVE_MSG, $value);
    }

    /**
     * Clears '_pve_msg' list
     *
     * @return null
     */
    public function clearPveMsg()
    {
        return $this->clear(self::_PVE_MSG);
    }

    /**
     * Returns '_pve_msg' list
     *
     * @return Bcdown_PveCheckMsg[]
     */
    public function getPveMsg()
    {
        return $this->get(self::_PVE_MSG);
    }

    /**
     * Returns '_pve_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getPveMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_PVE_MSG));
    }

    /**
     * Returns element from '_pve_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_PveCheckMsg
     */
    public function getPveMsgAt($offset)
    {
        return $this->get(self::_PVE_MSG, $offset);
    }

    /**
     * Returns count of '_pve_msg' list
     *
     * @return int
     */
    public function getPveMsgCount()
    {
        return $this->count(self::_PVE_MSG);
    }

    /**
     * Appends value to '_pvp_msg' list
     *
     * @param Bcdown_PvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendPvpMsg(Bcdown_PvpCheckMsg $value)
    {
        return $this->append(self::_PVP_MSG, $value);
    }

    /**
     * Clears '_pvp_msg' list
     *
     * @return null
     */
    public function clearPvpMsg()
    {
        return $this->clear(self::_PVP_MSG);
    }

    /**
     * Returns '_pvp_msg' list
     *
     * @return Bcdown_PvpCheckMsg[]
     */
    public function getPvpMsg()
    {
        return $this->get(self::_PVP_MSG);
    }

    /**
     * Returns '_pvp_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getPvpMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_PVP_MSG));
    }

    /**
     * Returns element from '_pvp_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_PvpCheckMsg
     */
    public function getPvpMsgAt($offset)
    {
        return $this->get(self::_PVP_MSG, $offset);
    }

    /**
     * Returns count of '_pvp_msg' list
     *
     * @return int
     */
    public function getPvpMsgCount()
    {
        return $this->count(self::_PVP_MSG);
    }

    /**
     * Appends value to '_tbc_msg' list
     *
     * @param Bcdown_TbcCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendTbcMsg(Bcdown_TbcCheckMsg $value)
    {
        return $this->append(self::_TBC_MSG, $value);
    }

    /**
     * Clears '_tbc_msg' list
     *
     * @return null
     */
    public function clearTbcMsg()
    {
        return $this->clear(self::_TBC_MSG);
    }

    /**
     * Returns '_tbc_msg' list
     *
     * @return Bcdown_TbcCheckMsg[]
     */
    public function getTbcMsg()
    {
        return $this->get(self::_TBC_MSG);
    }

    /**
     * Returns '_tbc_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getTbcMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_TBC_MSG));
    }

    /**
     * Returns element from '_tbc_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_TbcCheckMsg
     */
    public function getTbcMsgAt($offset)
    {
        return $this->get(self::_TBC_MSG, $offset);
    }

    /**
     * Returns count of '_tbc_msg' list
     *
     * @return int
     */
    public function getTbcMsgCount()
    {
        return $this->count(self::_TBC_MSG);
    }

    /**
     * Appends value to '_excav_msg' list
     *
     * @param Bcdown_ExcavCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendExcavMsg(Bcdown_ExcavCheckMsg $value)
    {
        return $this->append(self::_EXCAV_MSG, $value);
    }

    /**
     * Clears '_excav_msg' list
     *
     * @return null
     */
    public function clearExcavMsg()
    {
        return $this->clear(self::_EXCAV_MSG);
    }

    /**
     * Returns '_excav_msg' list
     *
     * @return Bcdown_ExcavCheckMsg[]
     */
    public function getExcavMsg()
    {
        return $this->get(self::_EXCAV_MSG);
    }

    /**
     * Returns '_excav_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getExcavMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_EXCAV_MSG));
    }

    /**
     * Returns element from '_excav_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_ExcavCheckMsg
     */
    public function getExcavMsgAt($offset)
    {
        return $this->get(self::_EXCAV_MSG, $offset);
    }

    /**
     * Returns count of '_excav_msg' list
     *
     * @return int
     */
    public function getExcavMsgCount()
    {
        return $this->count(self::_EXCAV_MSG);
    }

    /**
     * Appends value to '_guild_msg' list
     *
     * @param Bcdown_GuildPveCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendGuildMsg(Bcdown_GuildPveCheckMsg $value)
    {
        return $this->append(self::_GUILD_MSG, $value);
    }

    /**
     * Clears '_guild_msg' list
     *
     * @return null
     */
    public function clearGuildMsg()
    {
        return $this->clear(self::_GUILD_MSG);
    }

    /**
     * Returns '_guild_msg' list
     *
     * @return Bcdown_GuildPveCheckMsg[]
     */
    public function getGuildMsg()
    {
        return $this->get(self::_GUILD_MSG);
    }

    /**
     * Returns '_guild_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getGuildMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_GUILD_MSG));
    }

    /**
     * Returns element from '_guild_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_GuildPveCheckMsg
     */
    public function getGuildMsgAt($offset)
    {
        return $this->get(self::_GUILD_MSG, $offset);
    }

    /**
     * Returns count of '_guild_msg' list
     *
     * @return int
     */
    public function getGuildMsgCount()
    {
        return $this->count(self::_GUILD_MSG);
    }

    /**
     * Appends value to '_rtpvp_msg' list
     *
     * @param Bcdown_RtpvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendRtpvpMsg(Bcdown_RtpvpCheckMsg $value)
    {
        return $this->append(self::_RTPVP_MSG, $value);
    }

    /**
     * Clears '_rtpvp_msg' list
     *
     * @return null
     */
    public function clearRtpvpMsg()
    {
        return $this->clear(self::_RTPVP_MSG);
    }

    /**
     * Returns '_rtpvp_msg' list
     *
     * @return Bcdown_RtpvpCheckMsg[]
     */
    public function getRtpvpMsg()
    {
        return $this->get(self::_RTPVP_MSG);
    }

    /**
     * Returns '_rtpvp_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getRtpvpMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_RTPVP_MSG));
    }

    /**
     * Returns element from '_rtpvp_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_RtpvpCheckMsg
     */
    public function getRtpvpMsgAt($offset)
    {
        return $this->get(self::_RTPVP_MSG, $offset);
    }

    /**
     * Returns count of '_rtpvp_msg' list
     *
     * @return int
     */
    public function getRtpvpMsgCount()
    {
        return $this->count(self::_RTPVP_MSG);
    }

    /**
     * Appends value to '_toppvp_msg' list
     *
     * @param Bcdown_ToppvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendToppvpMsg(Bcdown_ToppvpCheckMsg $value)
    {
        return $this->append(self::_TOPPVP_MSG, $value);
    }

    /**
     * Clears '_toppvp_msg' list
     *
     * @return null
     */
    public function clearToppvpMsg()
    {
        return $this->clear(self::_TOPPVP_MSG);
    }

    /**
     * Returns '_toppvp_msg' list
     *
     * @return Bcdown_ToppvpCheckMsg[]
     */
    public function getToppvpMsg()
    {
        return $this->get(self::_TOPPVP_MSG);
    }

    /**
     * Returns '_toppvp_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getToppvpMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_TOPPVP_MSG));
    }

    /**
     * Returns element from '_toppvp_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_ToppvpCheckMsg
     */
    public function getToppvpMsgAt($offset)
    {
        return $this->get(self::_TOPPVP_MSG, $offset);
    }

    /**
     * Returns count of '_toppvp_msg' list
     *
     * @return int
     */
    public function getToppvpMsgCount()
    {
        return $this->count(self::_TOPPVP_MSG);
    }
}

/**
 * pve_check_msg message
 */
class Bcdown_PveCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _STAGEID = 3;
    const _RESULT = 4;
    const _STARS = 5;
    const _HEROES = 6;
    const _OPRATIONS = 7;
    const _RSEED = 8;
    const _CLI_BATTLE_TIME = 9;
    const _UNIT_BATTLE_DATA = 10;

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
        self::_STAGEID => array(
            'name' => '_stageid',
            'required' => true,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_STARS => array(
            'name' => '_stars',
            'required' => true,
            'type' => 5,
        ),
        self::_HEROES => array(
            'name' => '_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_CLI_BATTLE_TIME => array(
            'name' => '_cli_battle_time',
            'required' => false,
            'type' => 5,
        ),
        self::_UNIT_BATTLE_DATA => array(
            'name' => '_unit_battle_data',
            'repeated' => true,
            'type' => 'Bcdown_UnitBattleData'
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
        $this->values[self::_STAGEID] = null;
        $this->values[self::_RESULT] = null;
        $this->values[self::_STARS] = null;
        $this->values[self::_HEROES] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_CLI_BATTLE_TIME] = null;
        $this->values[self::_UNIT_BATTLE_DATA] = array();
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
     * Sets value of '_stageid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageid($value)
    {
        return $this->set(self::_STAGEID, $value);
    }

    /**
     * Returns value of '_stageid' property
     *
     * @return int
     */
    public function getStageid()
    {
        return $this->get(self::_STAGEID);
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
     * Sets value of '_stars' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStars($value)
    {
        return $this->set(self::_STARS, $value);
    }

    /**
     * Returns value of '_stars' property
     *
     * @return int
     */
    public function getStars()
    {
        return $this->get(self::_STARS);
    }

    /**
     * Appends value to '_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_HEROES, $value);
    }

    /**
     * Clears '_heroes' list
     *
     * @return null
     */
    public function clearHeroes()
    {
        return $this->clear(self::_HEROES);
    }

    /**
     * Returns '_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getHeroes()
    {
        return $this->get(self::_HEROES);
    }

    /**
     * Returns '_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_HEROES));
    }

    /**
     * Returns element from '_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getHeroesAt($offset)
    {
        return $this->get(self::_HEROES, $offset);
    }

    /**
     * Returns count of '_heroes' list
     *
     * @return int
     */
    public function getHeroesCount()
    {
        return $this->count(self::_HEROES);
    }

    /**
     * Appends value to '_oprations' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOprations($value)
    {
        return $this->append(self::_OPRATIONS, $value);
    }

    /**
     * Clears '_oprations' list
     *
     * @return null
     */
    public function clearOprations()
    {
        return $this->clear(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' list
     *
     * @return int[]
     */
    public function getOprations()
    {
        return $this->get(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' iterator
     *
     * @return ArrayIterator
     */
    public function getOprationsIterator()
    {
        return new \ArrayIterator($this->get(self::_OPRATIONS));
    }

    /**
     * Returns element from '_oprations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOprationsAt($offset)
    {
        return $this->get(self::_OPRATIONS, $offset);
    }

    /**
     * Returns count of '_oprations' list
     *
     * @return int
     */
    public function getOprationsCount()
    {
        return $this->count(self::_OPRATIONS);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Sets value of '_cli_battle_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCliBattleTime($value)
    {
        return $this->set(self::_CLI_BATTLE_TIME, $value);
    }

    /**
     * Returns value of '_cli_battle_time' property
     *
     * @return int
     */
    public function getCliBattleTime()
    {
        return $this->get(self::_CLI_BATTLE_TIME);
    }

    /**
     * Appends value to '_unit_battle_data' list
     *
     * @param Bcdown_UnitBattleData $value Value to append
     *
     * @return null
     */
    public function appendUnitBattleData(Bcdown_UnitBattleData $value)
    {
        return $this->append(self::_UNIT_BATTLE_DATA, $value);
    }

    /**
     * Clears '_unit_battle_data' list
     *
     * @return null
     */
    public function clearUnitBattleData()
    {
        return $this->clear(self::_UNIT_BATTLE_DATA);
    }

    /**
     * Returns '_unit_battle_data' list
     *
     * @return Bcdown_UnitBattleData[]
     */
    public function getUnitBattleData()
    {
        return $this->get(self::_UNIT_BATTLE_DATA);
    }

    /**
     * Returns '_unit_battle_data' iterator
     *
     * @return ArrayIterator
     */
    public function getUnitBattleDataIterator()
    {
        return new \ArrayIterator($this->get(self::_UNIT_BATTLE_DATA));
    }

    /**
     * Returns element from '_unit_battle_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_UnitBattleData
     */
    public function getUnitBattleDataAt($offset)
    {
        return $this->get(self::_UNIT_BATTLE_DATA, $offset);
    }

    /**
     * Returns count of '_unit_battle_data' list
     *
     * @return int
     */
    public function getUnitBattleDataCount()
    {
        return $this->count(self::_UNIT_BATTLE_DATA);
    }
}

/**
 * unit_battle_data message
 */
class Bcdown_UnitBattleData extends \ProtobufMessage
{
    /* Field index constants */
    const _UNIT_MAX_DAMAGE = 1;
    const _UNIT_KILL_LIST = 2;
    const _UNIT_HID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UNIT_MAX_DAMAGE => array(
            'name' => '_unit_max_damage',
            'required' => false,
            'type' => 5,
        ),
        self::_UNIT_KILL_LIST => array(
            'name' => '_unit_kill_list',
            'repeated' => true,
            'type' => 5,
        ),
        self::_UNIT_HID => array(
            'name' => '_unit_hid',
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
        $this->values[self::_UNIT_MAX_DAMAGE] = null;
        $this->values[self::_UNIT_KILL_LIST] = array();
        $this->values[self::_UNIT_HID] = null;
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
     * Sets value of '_unit_max_damage' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUnitMaxDamage($value)
    {
        return $this->set(self::_UNIT_MAX_DAMAGE, $value);
    }

    /**
     * Returns value of '_unit_max_damage' property
     *
     * @return int
     */
    public function getUnitMaxDamage()
    {
        return $this->get(self::_UNIT_MAX_DAMAGE);
    }

    /**
     * Appends value to '_unit_kill_list' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendUnitKillList($value)
    {
        return $this->append(self::_UNIT_KILL_LIST, $value);
    }

    /**
     * Clears '_unit_kill_list' list
     *
     * @return null
     */
    public function clearUnitKillList()
    {
        return $this->clear(self::_UNIT_KILL_LIST);
    }

    /**
     * Returns '_unit_kill_list' list
     *
     * @return int[]
     */
    public function getUnitKillList()
    {
        return $this->get(self::_UNIT_KILL_LIST);
    }

    /**
     * Returns '_unit_kill_list' iterator
     *
     * @return ArrayIterator
     */
    public function getUnitKillListIterator()
    {
        return new \ArrayIterator($this->get(self::_UNIT_KILL_LIST));
    }

    /**
     * Returns element from '_unit_kill_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getUnitKillListAt($offset)
    {
        return $this->get(self::_UNIT_KILL_LIST, $offset);
    }

    /**
     * Returns count of '_unit_kill_list' list
     *
     * @return int
     */
    public function getUnitKillListCount()
    {
        return $this->count(self::_UNIT_KILL_LIST);
    }

    /**
     * Sets value of '_unit_hid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUnitHid($value)
    {
        return $this->set(self::_UNIT_HID, $value);
    }

    /**
     * Returns value of '_unit_hid' property
     *
     * @return int
     */
    public function getUnitHid()
    {
        return $this->get(self::_UNIT_HID);
    }
}

/**
 * pvp_check_msg message
 */
class Bcdown_PvpCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _LEVEL = 4;
    const _AVATAR = 5;
    const _VIP = 6;
    const _OPPO_USERID = 7;
    const _OPPO_NAME = 8;
    const _OPPO_LEVEL = 9;
    const _OPPO_AVATAR = 10;
    const _OPPO_VIP = 11;
    const _OPPO_ROBOT = 12;
    const _RESULT = 13;
    const _SELF_HEROES = 14;
    const _OPPO_HEROES = 15;
    const _RSEED = 16;
    const _SELF_ROBOT = 17;

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
        self::_USERNAME => array(
            'name' => '_username',
            'required' => false,
            'type' => 7,
        ),
        self::_LEVEL => array(
            'name' => '_level',
            'required' => false,
            'type' => 5,
        ),
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_VIP => array(
            'name' => '_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_OPPO_NAME => array(
            'name' => '_oppo_name',
            'required' => false,
            'type' => 7,
        ),
        self::_OPPO_LEVEL => array(
            'name' => '_oppo_level',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_AVATAR => array(
            'name' => '_oppo_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_VIP => array(
            'name' => '_oppo_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_ROBOT => array(
            'name' => '_oppo_robot',
            'required' => false,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_ROBOT => array(
            'name' => '_self_robot',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_USERNAME] = null;
        $this->values[self::_LEVEL] = null;
        $this->values[self::_AVATAR] = null;
        $this->values[self::_VIP] = null;
        $this->values[self::_OPPO_USERID] = null;
        $this->values[self::_OPPO_NAME] = null;
        $this->values[self::_OPPO_LEVEL] = null;
        $this->values[self::_OPPO_AVATAR] = null;
        $this->values[self::_OPPO_VIP] = null;
        $this->values[self::_OPPO_ROBOT] = null;
        $this->values[self::_RESULT] = Bcdown_Result::victory;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_SELF_ROBOT] = null;
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
     * Sets value of '_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::_USERNAME, $value);
    }

    /**
     * Returns value of '_username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::_USERNAME);
    }

    /**
     * Sets value of '_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::_LEVEL, $value);
    }

    /**
     * Returns value of '_level' property
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->get(self::_LEVEL);
    }

    /**
     * Sets value of '_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAvatar($value)
    {
        return $this->set(self::_AVATAR, $value);
    }

    /**
     * Returns value of '_avatar' property
     *
     * @return int
     */
    public function getAvatar()
    {
        return $this->get(self::_AVATAR);
    }

    /**
     * Sets value of '_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVip($value)
    {
        return $this->set(self::_VIP, $value);
    }

    /**
     * Returns value of '_vip' property
     *
     * @return int
     */
    public function getVip()
    {
        return $this->get(self::_VIP);
    }

    /**
     * Sets value of '_oppo_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserid($value)
    {
        return $this->set(self::_OPPO_USERID, $value);
    }

    /**
     * Returns value of '_oppo_userid' property
     *
     * @return int
     */
    public function getOppoUserid()
    {
        return $this->get(self::_OPPO_USERID);
    }

    /**
     * Sets value of '_oppo_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOppoName($value)
    {
        return $this->set(self::_OPPO_NAME, $value);
    }

    /**
     * Returns value of '_oppo_name' property
     *
     * @return string
     */
    public function getOppoName()
    {
        return $this->get(self::_OPPO_NAME);
    }

    /**
     * Sets value of '_oppo_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoLevel($value)
    {
        return $this->set(self::_OPPO_LEVEL, $value);
    }

    /**
     * Returns value of '_oppo_level' property
     *
     * @return int
     */
    public function getOppoLevel()
    {
        return $this->get(self::_OPPO_LEVEL);
    }

    /**
     * Sets value of '_oppo_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoAvatar($value)
    {
        return $this->set(self::_OPPO_AVATAR, $value);
    }

    /**
     * Returns value of '_oppo_avatar' property
     *
     * @return int
     */
    public function getOppoAvatar()
    {
        return $this->get(self::_OPPO_AVATAR);
    }

    /**
     * Sets value of '_oppo_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoVip($value)
    {
        return $this->set(self::_OPPO_VIP, $value);
    }

    /**
     * Returns value of '_oppo_vip' property
     *
     * @return int
     */
    public function getOppoVip()
    {
        return $this->get(self::_OPPO_VIP);
    }

    /**
     * Sets value of '_oppo_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoRobot($value)
    {
        return $this->set(self::_OPPO_ROBOT, $value);
    }

    /**
     * Returns value of '_oppo_robot' property
     *
     * @return int
     */
    public function getOppoRobot()
    {
        return $this->get(self::_OPPO_ROBOT);
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
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Appends value to '_oppo_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_OPPO_HEROES, $value);
    }

    /**
     * Clears '_oppo_heroes' list
     *
     * @return null
     */
    public function clearOppoHeroes()
    {
        return $this->clear(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getOppoHeroes()
    {
        return $this->get(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROES));
    }

    /**
     * Returns element from '_oppo_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getOppoHeroesAt($offset)
    {
        return $this->get(self::_OPPO_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_heroes' list
     *
     * @return int
     */
    public function getOppoHeroesCount()
    {
        return $this->count(self::_OPPO_HEROES);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Sets value of '_self_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSelfRobot($value)
    {
        return $this->set(self::_SELF_ROBOT, $value);
    }

    /**
     * Returns value of '_self_robot' property
     *
     * @return int
     */
    public function getSelfRobot()
    {
        return $this->get(self::_SELF_ROBOT);
    }
}

/**
 * tbc_check_msg message
 */
class Bcdown_TbcCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _OPPO_USERID = 4;
    const _OPPO_NAME = 5;
    const _OPPO_ROBOT = 6;
    const _RESULT = 7;
    const _SELF_HEROES = 8;
    const _OPPO_HEROES = 9;
    const _RSEED = 10;
    const _SELF_ROBOT = 11;
    const _SELF_DYNA_START = 12;
    const _SELF_DYNA_END = 13;
    const _OPPO_DYNA_START = 14;
    const _OPPO_DYNA_END = 15;
    const _OPRATIONS = 16;
    const _CLI_BATTLE_TIME = 17;

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
        self::_USERNAME => array(
            'name' => '_username',
            'required' => false,
            'type' => 7,
        ),
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_OPPO_NAME => array(
            'name' => '_oppo_name',
            'required' => false,
            'type' => 7,
        ),
        self::_OPPO_ROBOT => array(
            'name' => '_oppo_robot',
            'required' => false,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_ROBOT => array(
            'name' => '_self_robot',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_DYNA_START => array(
            'name' => '_self_dyna_start',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_SELF_DYNA_END => array(
            'name' => '_self_dyna_end',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_OPPO_DYNA_START => array(
            'name' => '_oppo_dyna_start',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_OPPO_DYNA_END => array(
            'name' => '_oppo_dyna_end',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_CLI_BATTLE_TIME => array(
            'name' => '_cli_battle_time',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_USERNAME] = null;
        $this->values[self::_OPPO_USERID] = null;
        $this->values[self::_OPPO_NAME] = null;
        $this->values[self::_OPPO_ROBOT] = null;
        $this->values[self::_RESULT] = Bcdown_Result::victory;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_SELF_ROBOT] = null;
        $this->values[self::_SELF_DYNA_START] = array();
        $this->values[self::_SELF_DYNA_END] = array();
        $this->values[self::_OPPO_DYNA_START] = array();
        $this->values[self::_OPPO_DYNA_END] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_CLI_BATTLE_TIME] = null;
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
     * Sets value of '_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::_USERNAME, $value);
    }

    /**
     * Returns value of '_username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::_USERNAME);
    }

    /**
     * Sets value of '_oppo_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserid($value)
    {
        return $this->set(self::_OPPO_USERID, $value);
    }

    /**
     * Returns value of '_oppo_userid' property
     *
     * @return int
     */
    public function getOppoUserid()
    {
        return $this->get(self::_OPPO_USERID);
    }

    /**
     * Sets value of '_oppo_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOppoName($value)
    {
        return $this->set(self::_OPPO_NAME, $value);
    }

    /**
     * Returns value of '_oppo_name' property
     *
     * @return string
     */
    public function getOppoName()
    {
        return $this->get(self::_OPPO_NAME);
    }

    /**
     * Sets value of '_oppo_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoRobot($value)
    {
        return $this->set(self::_OPPO_ROBOT, $value);
    }

    /**
     * Returns value of '_oppo_robot' property
     *
     * @return int
     */
    public function getOppoRobot()
    {
        return $this->get(self::_OPPO_ROBOT);
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
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Appends value to '_oppo_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_OPPO_HEROES, $value);
    }

    /**
     * Clears '_oppo_heroes' list
     *
     * @return null
     */
    public function clearOppoHeroes()
    {
        return $this->clear(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getOppoHeroes()
    {
        return $this->get(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROES));
    }

    /**
     * Returns element from '_oppo_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getOppoHeroesAt($offset)
    {
        return $this->get(self::_OPPO_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_heroes' list
     *
     * @return int
     */
    public function getOppoHeroesCount()
    {
        return $this->count(self::_OPPO_HEROES);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Sets value of '_self_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSelfRobot($value)
    {
        return $this->set(self::_SELF_ROBOT, $value);
    }

    /**
     * Returns value of '_self_robot' property
     *
     * @return int
     */
    public function getSelfRobot()
    {
        return $this->get(self::_SELF_ROBOT);
    }

    /**
     * Appends value to '_self_dyna_start' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaStart(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_SELF_DYNA_START, $value);
    }

    /**
     * Clears '_self_dyna_start' list
     *
     * @return null
     */
    public function clearSelfDynaStart()
    {
        return $this->clear(self::_SELF_DYNA_START);
    }

    /**
     * Returns '_self_dyna_start' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getSelfDynaStart()
    {
        return $this->get(self::_SELF_DYNA_START);
    }

    /**
     * Returns '_self_dyna_start' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDynaStartIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DYNA_START));
    }

    /**
     * Returns element from '_self_dyna_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getSelfDynaStartAt($offset)
    {
        return $this->get(self::_SELF_DYNA_START, $offset);
    }

    /**
     * Returns count of '_self_dyna_start' list
     *
     * @return int
     */
    public function getSelfDynaStartCount()
    {
        return $this->count(self::_SELF_DYNA_START);
    }

    /**
     * Appends value to '_self_dyna_end' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaEnd(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_SELF_DYNA_END, $value);
    }

    /**
     * Clears '_self_dyna_end' list
     *
     * @return null
     */
    public function clearSelfDynaEnd()
    {
        return $this->clear(self::_SELF_DYNA_END);
    }

    /**
     * Returns '_self_dyna_end' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getSelfDynaEnd()
    {
        return $this->get(self::_SELF_DYNA_END);
    }

    /**
     * Returns '_self_dyna_end' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDynaEndIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DYNA_END));
    }

    /**
     * Returns element from '_self_dyna_end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getSelfDynaEndAt($offset)
    {
        return $this->get(self::_SELF_DYNA_END, $offset);
    }

    /**
     * Returns count of '_self_dyna_end' list
     *
     * @return int
     */
    public function getSelfDynaEndCount()
    {
        return $this->count(self::_SELF_DYNA_END);
    }

    /**
     * Appends value to '_oppo_dyna_start' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaStart(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_OPPO_DYNA_START, $value);
    }

    /**
     * Clears '_oppo_dyna_start' list
     *
     * @return null
     */
    public function clearOppoDynaStart()
    {
        return $this->clear(self::_OPPO_DYNA_START);
    }

    /**
     * Returns '_oppo_dyna_start' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getOppoDynaStart()
    {
        return $this->get(self::_OPPO_DYNA_START);
    }

    /**
     * Returns '_oppo_dyna_start' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoDynaStartIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_DYNA_START));
    }

    /**
     * Returns element from '_oppo_dyna_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getOppoDynaStartAt($offset)
    {
        return $this->get(self::_OPPO_DYNA_START, $offset);
    }

    /**
     * Returns count of '_oppo_dyna_start' list
     *
     * @return int
     */
    public function getOppoDynaStartCount()
    {
        return $this->count(self::_OPPO_DYNA_START);
    }

    /**
     * Appends value to '_oppo_dyna_end' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaEnd(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_OPPO_DYNA_END, $value);
    }

    /**
     * Clears '_oppo_dyna_end' list
     *
     * @return null
     */
    public function clearOppoDynaEnd()
    {
        return $this->clear(self::_OPPO_DYNA_END);
    }

    /**
     * Returns '_oppo_dyna_end' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getOppoDynaEnd()
    {
        return $this->get(self::_OPPO_DYNA_END);
    }

    /**
     * Returns '_oppo_dyna_end' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoDynaEndIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_DYNA_END));
    }

    /**
     * Returns element from '_oppo_dyna_end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getOppoDynaEndAt($offset)
    {
        return $this->get(self::_OPPO_DYNA_END, $offset);
    }

    /**
     * Returns count of '_oppo_dyna_end' list
     *
     * @return int
     */
    public function getOppoDynaEndCount()
    {
        return $this->count(self::_OPPO_DYNA_END);
    }

    /**
     * Appends value to '_oprations' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOprations($value)
    {
        return $this->append(self::_OPRATIONS, $value);
    }

    /**
     * Clears '_oprations' list
     *
     * @return null
     */
    public function clearOprations()
    {
        return $this->clear(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' list
     *
     * @return int[]
     */
    public function getOprations()
    {
        return $this->get(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' iterator
     *
     * @return ArrayIterator
     */
    public function getOprationsIterator()
    {
        return new \ArrayIterator($this->get(self::_OPRATIONS));
    }

    /**
     * Returns element from '_oprations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOprationsAt($offset)
    {
        return $this->get(self::_OPRATIONS, $offset);
    }

    /**
     * Returns count of '_oprations' list
     *
     * @return int
     */
    public function getOprationsCount()
    {
        return $this->count(self::_OPRATIONS);
    }

    /**
     * Sets value of '_cli_battle_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCliBattleTime($value)
    {
        return $this->set(self::_CLI_BATTLE_TIME, $value);
    }

    /**
     * Returns value of '_cli_battle_time' property
     *
     * @return int
     */
    public function getCliBattleTime()
    {
        return $this->get(self::_CLI_BATTLE_TIME);
    }
}

/**
 * oppo_type enum embedded in excav_check_msg message
 */
final class Bcdown_ExcavCheckMsg_OppoType
{
    const monster = 1;
    const player = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'monster' => self::monster,
            'player' => self::player,
        );
    }
}

/**
 * excav_check_msg message
 */
class Bcdown_ExcavCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _LEVEL = 4;
    const _AVATAR = 5;
    const _ROBOT = 6;
    const _VIP = 7;
    const _OPPO_USERID = 8;
    const _OPPO_USERNAME = 9;
    const _OPPO_LEVEL = 10;
    const _OPPO_AVATAR = 11;
    const _OPPO_VIP = 12;
    const _OPPO_ROBOTO = 13;
    const _OPPO_TYPE = 14;
    const _RESULT = 15;
    const _SELF_HEROES = 16;
    const _OPPO_HEROES = 17;
    const _RSEED = 18;
    const _SELF_DYNA_START = 19;
    const _SELF_DYNA_END = 20;
    const _OPPO_DYNA_START = 21;
    const _OPPO_DYNA_END = 22;
    const _PARAM1 = 23;
    const _OPRATIONS = 24;
    const _CLI_BATTLE_TIME = 25;

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
        self::_USERNAME => array(
            'name' => '_username',
            'required' => false,
            'type' => 7,
        ),
        self::_LEVEL => array(
            'name' => '_level',
            'required' => false,
            'type' => 5,
        ),
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_ROBOT => array(
            'name' => '_robot',
            'required' => false,
            'type' => 5,
        ),
        self::_VIP => array(
            'name' => '_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_OPPO_USERNAME => array(
            'name' => '_oppo_username',
            'required' => false,
            'type' => 7,
        ),
        self::_OPPO_LEVEL => array(
            'name' => '_oppo_level',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_AVATAR => array(
            'name' => '_oppo_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_VIP => array(
            'name' => '_oppo_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_ROBOTO => array(
            'name' => '_oppo_roboto',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_TYPE => array(
            'name' => '_oppo_type',
            'required' => true,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_DYNA_START => array(
            'name' => '_self_dyna_start',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_SELF_DYNA_END => array(
            'name' => '_self_dyna_end',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_OPPO_DYNA_START => array(
            'name' => '_oppo_dyna_start',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_OPPO_DYNA_END => array(
            'name' => '_oppo_dyna_end',
            'repeated' => true,
            'type' => 'Bcdown_HeroDyna'
        ),
        self::_PARAM1 => array(
            'name' => '_param1',
            'required' => false,
            'type' => 5,
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_CLI_BATTLE_TIME => array(
            'name' => '_cli_battle_time',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_USERNAME] = null;
        $this->values[self::_LEVEL] = null;
        $this->values[self::_AVATAR] = null;
        $this->values[self::_ROBOT] = null;
        $this->values[self::_VIP] = null;
        $this->values[self::_OPPO_USERID] = null;
        $this->values[self::_OPPO_USERNAME] = null;
        $this->values[self::_OPPO_LEVEL] = null;
        $this->values[self::_OPPO_AVATAR] = null;
        $this->values[self::_OPPO_VIP] = null;
        $this->values[self::_OPPO_ROBOTO] = null;
        $this->values[self::_OPPO_TYPE] = null;
        $this->values[self::_RESULT] = Bcdown_Result::victory;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_SELF_DYNA_START] = array();
        $this->values[self::_SELF_DYNA_END] = array();
        $this->values[self::_OPPO_DYNA_START] = array();
        $this->values[self::_OPPO_DYNA_END] = array();
        $this->values[self::_PARAM1] = null;
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_CLI_BATTLE_TIME] = null;
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
     * Sets value of '_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::_USERNAME, $value);
    }

    /**
     * Returns value of '_username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::_USERNAME);
    }

    /**
     * Sets value of '_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::_LEVEL, $value);
    }

    /**
     * Returns value of '_level' property
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->get(self::_LEVEL);
    }

    /**
     * Sets value of '_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAvatar($value)
    {
        return $this->set(self::_AVATAR, $value);
    }

    /**
     * Returns value of '_avatar' property
     *
     * @return int
     */
    public function getAvatar()
    {
        return $this->get(self::_AVATAR);
    }

    /**
     * Sets value of '_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRobot($value)
    {
        return $this->set(self::_ROBOT, $value);
    }

    /**
     * Returns value of '_robot' property
     *
     * @return int
     */
    public function getRobot()
    {
        return $this->get(self::_ROBOT);
    }

    /**
     * Sets value of '_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVip($value)
    {
        return $this->set(self::_VIP, $value);
    }

    /**
     * Returns value of '_vip' property
     *
     * @return int
     */
    public function getVip()
    {
        return $this->get(self::_VIP);
    }

    /**
     * Sets value of '_oppo_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserid($value)
    {
        return $this->set(self::_OPPO_USERID, $value);
    }

    /**
     * Returns value of '_oppo_userid' property
     *
     * @return int
     */
    public function getOppoUserid()
    {
        return $this->get(self::_OPPO_USERID);
    }

    /**
     * Sets value of '_oppo_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOppoUsername($value)
    {
        return $this->set(self::_OPPO_USERNAME, $value);
    }

    /**
     * Returns value of '_oppo_username' property
     *
     * @return string
     */
    public function getOppoUsername()
    {
        return $this->get(self::_OPPO_USERNAME);
    }

    /**
     * Sets value of '_oppo_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoLevel($value)
    {
        return $this->set(self::_OPPO_LEVEL, $value);
    }

    /**
     * Returns value of '_oppo_level' property
     *
     * @return int
     */
    public function getOppoLevel()
    {
        return $this->get(self::_OPPO_LEVEL);
    }

    /**
     * Sets value of '_oppo_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoAvatar($value)
    {
        return $this->set(self::_OPPO_AVATAR, $value);
    }

    /**
     * Returns value of '_oppo_avatar' property
     *
     * @return int
     */
    public function getOppoAvatar()
    {
        return $this->get(self::_OPPO_AVATAR);
    }

    /**
     * Sets value of '_oppo_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoVip($value)
    {
        return $this->set(self::_OPPO_VIP, $value);
    }

    /**
     * Returns value of '_oppo_vip' property
     *
     * @return int
     */
    public function getOppoVip()
    {
        return $this->get(self::_OPPO_VIP);
    }

    /**
     * Sets value of '_oppo_roboto' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoRoboto($value)
    {
        return $this->set(self::_OPPO_ROBOTO, $value);
    }

    /**
     * Returns value of '_oppo_roboto' property
     *
     * @return int
     */
    public function getOppoRoboto()
    {
        return $this->get(self::_OPPO_ROBOTO);
    }

    /**
     * Sets value of '_oppo_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoType($value)
    {
        return $this->set(self::_OPPO_TYPE, $value);
    }

    /**
     * Returns value of '_oppo_type' property
     *
     * @return int
     */
    public function getOppoType()
    {
        return $this->get(self::_OPPO_TYPE);
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
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Appends value to '_oppo_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_OPPO_HEROES, $value);
    }

    /**
     * Clears '_oppo_heroes' list
     *
     * @return null
     */
    public function clearOppoHeroes()
    {
        return $this->clear(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getOppoHeroes()
    {
        return $this->get(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROES));
    }

    /**
     * Returns element from '_oppo_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getOppoHeroesAt($offset)
    {
        return $this->get(self::_OPPO_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_heroes' list
     *
     * @return int
     */
    public function getOppoHeroesCount()
    {
        return $this->count(self::_OPPO_HEROES);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Appends value to '_self_dyna_start' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaStart(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_SELF_DYNA_START, $value);
    }

    /**
     * Clears '_self_dyna_start' list
     *
     * @return null
     */
    public function clearSelfDynaStart()
    {
        return $this->clear(self::_SELF_DYNA_START);
    }

    /**
     * Returns '_self_dyna_start' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getSelfDynaStart()
    {
        return $this->get(self::_SELF_DYNA_START);
    }

    /**
     * Returns '_self_dyna_start' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDynaStartIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DYNA_START));
    }

    /**
     * Returns element from '_self_dyna_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getSelfDynaStartAt($offset)
    {
        return $this->get(self::_SELF_DYNA_START, $offset);
    }

    /**
     * Returns count of '_self_dyna_start' list
     *
     * @return int
     */
    public function getSelfDynaStartCount()
    {
        return $this->count(self::_SELF_DYNA_START);
    }

    /**
     * Appends value to '_self_dyna_end' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaEnd(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_SELF_DYNA_END, $value);
    }

    /**
     * Clears '_self_dyna_end' list
     *
     * @return null
     */
    public function clearSelfDynaEnd()
    {
        return $this->clear(self::_SELF_DYNA_END);
    }

    /**
     * Returns '_self_dyna_end' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getSelfDynaEnd()
    {
        return $this->get(self::_SELF_DYNA_END);
    }

    /**
     * Returns '_self_dyna_end' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDynaEndIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DYNA_END));
    }

    /**
     * Returns element from '_self_dyna_end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getSelfDynaEndAt($offset)
    {
        return $this->get(self::_SELF_DYNA_END, $offset);
    }

    /**
     * Returns count of '_self_dyna_end' list
     *
     * @return int
     */
    public function getSelfDynaEndCount()
    {
        return $this->count(self::_SELF_DYNA_END);
    }

    /**
     * Appends value to '_oppo_dyna_start' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaStart(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_OPPO_DYNA_START, $value);
    }

    /**
     * Clears '_oppo_dyna_start' list
     *
     * @return null
     */
    public function clearOppoDynaStart()
    {
        return $this->clear(self::_OPPO_DYNA_START);
    }

    /**
     * Returns '_oppo_dyna_start' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getOppoDynaStart()
    {
        return $this->get(self::_OPPO_DYNA_START);
    }

    /**
     * Returns '_oppo_dyna_start' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoDynaStartIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_DYNA_START));
    }

    /**
     * Returns element from '_oppo_dyna_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getOppoDynaStartAt($offset)
    {
        return $this->get(self::_OPPO_DYNA_START, $offset);
    }

    /**
     * Returns count of '_oppo_dyna_start' list
     *
     * @return int
     */
    public function getOppoDynaStartCount()
    {
        return $this->count(self::_OPPO_DYNA_START);
    }

    /**
     * Appends value to '_oppo_dyna_end' list
     *
     * @param Bcdown_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaEnd(Bcdown_HeroDyna $value)
    {
        return $this->append(self::_OPPO_DYNA_END, $value);
    }

    /**
     * Clears '_oppo_dyna_end' list
     *
     * @return null
     */
    public function clearOppoDynaEnd()
    {
        return $this->clear(self::_OPPO_DYNA_END);
    }

    /**
     * Returns '_oppo_dyna_end' list
     *
     * @return Bcdown_HeroDyna[]
     */
    public function getOppoDynaEnd()
    {
        return $this->get(self::_OPPO_DYNA_END);
    }

    /**
     * Returns '_oppo_dyna_end' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoDynaEndIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_DYNA_END));
    }

    /**
     * Returns element from '_oppo_dyna_end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroDyna
     */
    public function getOppoDynaEndAt($offset)
    {
        return $this->get(self::_OPPO_DYNA_END, $offset);
    }

    /**
     * Returns count of '_oppo_dyna_end' list
     *
     * @return int
     */
    public function getOppoDynaEndCount()
    {
        return $this->count(self::_OPPO_DYNA_END);
    }

    /**
     * Sets value of '_param1' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setParam1($value)
    {
        return $this->set(self::_PARAM1, $value);
    }

    /**
     * Returns value of '_param1' property
     *
     * @return int
     */
    public function getParam1()
    {
        return $this->get(self::_PARAM1);
    }

    /**
     * Appends value to '_oprations' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOprations($value)
    {
        return $this->append(self::_OPRATIONS, $value);
    }

    /**
     * Clears '_oprations' list
     *
     * @return null
     */
    public function clearOprations()
    {
        return $this->clear(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' list
     *
     * @return int[]
     */
    public function getOprations()
    {
        return $this->get(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' iterator
     *
     * @return ArrayIterator
     */
    public function getOprationsIterator()
    {
        return new \ArrayIterator($this->get(self::_OPRATIONS));
    }

    /**
     * Returns element from '_oprations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOprationsAt($offset)
    {
        return $this->get(self::_OPRATIONS, $offset);
    }

    /**
     * Returns count of '_oprations' list
     *
     * @return int
     */
    public function getOprationsCount()
    {
        return $this->count(self::_OPRATIONS);
    }

    /**
     * Sets value of '_cli_battle_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCliBattleTime($value)
    {
        return $this->set(self::_CLI_BATTLE_TIME, $value);
    }

    /**
     * Returns value of '_cli_battle_time' property
     *
     * @return int
     */
    public function getCliBattleTime()
    {
        return $this->get(self::_CLI_BATTLE_TIME);
    }
}

/**
 * guild_pve_check_msg message
 */
class Bcdown_GuildPveCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _RESULT = 4;
    const _SELF_HEROES = 5;
    const _STAGEID = 6;
    const _START_WAVE = 7;
    const _END_WAVE = 8;
    const _RSEED = 9;
    const _HP_START = 10;
    const _HP_END = 11;
    const _OPRATIONS = 12;
    const _CLI_BATTLE_TIME = 13;
    const _DPS = 14;

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
        self::_USERNAME => array(
            'name' => '_username',
            'required' => true,
            'type' => 7,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_STAGEID => array(
            'name' => '_stageid',
            'required' => true,
            'type' => 5,
        ),
        self::_START_WAVE => array(
            'name' => '_start_wave',
            'required' => true,
            'type' => 5,
        ),
        self::_END_WAVE => array(
            'name' => '_end_wave',
            'required' => true,
            'type' => 5,
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_HP_START => array(
            'name' => '_hp_start',
            'repeated' => true,
            'type' => 5,
        ),
        self::_HP_END => array(
            'name' => '_hp_end',
            'repeated' => true,
            'type' => 5,
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_CLI_BATTLE_TIME => array(
            'name' => '_cli_battle_time',
            'required' => false,
            'type' => 5,
        ),
        self::_DPS => array(
            'name' => '_dps',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_USERNAME] = null;
        $this->values[self::_RESULT] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_STAGEID] = null;
        $this->values[self::_START_WAVE] = null;
        $this->values[self::_END_WAVE] = null;
        $this->values[self::_RSEED] = null;
        $this->values[self::_HP_START] = array();
        $this->values[self::_HP_END] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_CLI_BATTLE_TIME] = null;
        $this->values[self::_DPS] = null;
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
     * Sets value of '_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::_USERNAME, $value);
    }

    /**
     * Returns value of '_username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::_USERNAME);
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
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Sets value of '_stageid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageid($value)
    {
        return $this->set(self::_STAGEID, $value);
    }

    /**
     * Returns value of '_stageid' property
     *
     * @return int
     */
    public function getStageid()
    {
        return $this->get(self::_STAGEID);
    }

    /**
     * Sets value of '_start_wave' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStartWave($value)
    {
        return $this->set(self::_START_WAVE, $value);
    }

    /**
     * Returns value of '_start_wave' property
     *
     * @return int
     */
    public function getStartWave()
    {
        return $this->get(self::_START_WAVE);
    }

    /**
     * Sets value of '_end_wave' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEndWave($value)
    {
        return $this->set(self::_END_WAVE, $value);
    }

    /**
     * Returns value of '_end_wave' property
     *
     * @return int
     */
    public function getEndWave()
    {
        return $this->get(self::_END_WAVE);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Appends value to '_hp_start' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHpStart($value)
    {
        return $this->append(self::_HP_START, $value);
    }

    /**
     * Clears '_hp_start' list
     *
     * @return null
     */
    public function clearHpStart()
    {
        return $this->clear(self::_HP_START);
    }

    /**
     * Returns '_hp_start' list
     *
     * @return int[]
     */
    public function getHpStart()
    {
        return $this->get(self::_HP_START);
    }

    /**
     * Returns '_hp_start' iterator
     *
     * @return ArrayIterator
     */
    public function getHpStartIterator()
    {
        return new \ArrayIterator($this->get(self::_HP_START));
    }

    /**
     * Returns element from '_hp_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHpStartAt($offset)
    {
        return $this->get(self::_HP_START, $offset);
    }

    /**
     * Returns count of '_hp_start' list
     *
     * @return int
     */
    public function getHpStartCount()
    {
        return $this->count(self::_HP_START);
    }

    /**
     * Appends value to '_hp_end' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHpEnd($value)
    {
        return $this->append(self::_HP_END, $value);
    }

    /**
     * Clears '_hp_end' list
     *
     * @return null
     */
    public function clearHpEnd()
    {
        return $this->clear(self::_HP_END);
    }

    /**
     * Returns '_hp_end' list
     *
     * @return int[]
     */
    public function getHpEnd()
    {
        return $this->get(self::_HP_END);
    }

    /**
     * Returns '_hp_end' iterator
     *
     * @return ArrayIterator
     */
    public function getHpEndIterator()
    {
        return new \ArrayIterator($this->get(self::_HP_END));
    }

    /**
     * Returns element from '_hp_end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHpEndAt($offset)
    {
        return $this->get(self::_HP_END, $offset);
    }

    /**
     * Returns count of '_hp_end' list
     *
     * @return int
     */
    public function getHpEndCount()
    {
        return $this->count(self::_HP_END);
    }

    /**
     * Appends value to '_oprations' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOprations($value)
    {
        return $this->append(self::_OPRATIONS, $value);
    }

    /**
     * Clears '_oprations' list
     *
     * @return null
     */
    public function clearOprations()
    {
        return $this->clear(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' list
     *
     * @return int[]
     */
    public function getOprations()
    {
        return $this->get(self::_OPRATIONS);
    }

    /**
     * Returns '_oprations' iterator
     *
     * @return ArrayIterator
     */
    public function getOprationsIterator()
    {
        return new \ArrayIterator($this->get(self::_OPRATIONS));
    }

    /**
     * Returns element from '_oprations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOprationsAt($offset)
    {
        return $this->get(self::_OPRATIONS, $offset);
    }

    /**
     * Returns count of '_oprations' list
     *
     * @return int
     */
    public function getOprationsCount()
    {
        return $this->count(self::_OPRATIONS);
    }

    /**
     * Sets value of '_cli_battle_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCliBattleTime($value)
    {
        return $this->set(self::_CLI_BATTLE_TIME, $value);
    }

    /**
     * Returns value of '_cli_battle_time' property
     *
     * @return int
     */
    public function getCliBattleTime()
    {
        return $this->get(self::_CLI_BATTLE_TIME);
    }

    /**
     * Sets value of '_dps' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDps($value)
    {
        return $this->set(self::_DPS, $value);
    }

    /**
     * Returns value of '_dps' property
     *
     * @return int
     */
    public function getDps()
    {
        return $this->get(self::_DPS);
    }
}

/**
 * rtpvp_check_msg message
 */
class Bcdown_RtpvpCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _OPPO_USERID = 3;
    const _SELF_HEROES = 4;
    const _OPPO_HEROES = 5;
    const _SELF_OPERATION = 6;
    const _OPPO_OPERATION = 7;
    const _RESULT = 8;
    const _RSEED = 9;

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
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
        ),
        self::_SELF_OPERATION => array(
            'name' => '_self_operation',
            'repeated' => true,
            'type' => 'Bcdown_SyncOperation'
        ),
        self::_OPPO_OPERATION => array(
            'name' => '_oppo_operation',
            'repeated' => true,
            'type' => 'Bcdown_SyncOperation'
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_RSEED => array(
            'name' => '_rseed',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_OPPO_USERID] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_SELF_OPERATION] = array();
        $this->values[self::_OPPO_OPERATION] = array();
        $this->values[self::_RESULT] = null;
        $this->values[self::_RSEED] = null;
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
     * Sets value of '_oppo_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserid($value)
    {
        return $this->set(self::_OPPO_USERID, $value);
    }

    /**
     * Returns value of '_oppo_userid' property
     *
     * @return int
     */
    public function getOppoUserid()
    {
        return $this->get(self::_OPPO_USERID);
    }

    /**
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Appends value to '_oppo_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_OPPO_HEROES, $value);
    }

    /**
     * Clears '_oppo_heroes' list
     *
     * @return null
     */
    public function clearOppoHeroes()
    {
        return $this->clear(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getOppoHeroes()
    {
        return $this->get(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROES));
    }

    /**
     * Returns element from '_oppo_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getOppoHeroesAt($offset)
    {
        return $this->get(self::_OPPO_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_heroes' list
     *
     * @return int
     */
    public function getOppoHeroesCount()
    {
        return $this->count(self::_OPPO_HEROES);
    }

    /**
     * Appends value to '_self_operation' list
     *
     * @param Bcdown_SyncOperation $value Value to append
     *
     * @return null
     */
    public function appendSelfOperation(Bcdown_SyncOperation $value)
    {
        return $this->append(self::_SELF_OPERATION, $value);
    }

    /**
     * Clears '_self_operation' list
     *
     * @return null
     */
    public function clearSelfOperation()
    {
        return $this->clear(self::_SELF_OPERATION);
    }

    /**
     * Returns '_self_operation' list
     *
     * @return Bcdown_SyncOperation[]
     */
    public function getSelfOperation()
    {
        return $this->get(self::_SELF_OPERATION);
    }

    /**
     * Returns '_self_operation' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfOperationIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_OPERATION));
    }

    /**
     * Returns element from '_self_operation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_SyncOperation
     */
    public function getSelfOperationAt($offset)
    {
        return $this->get(self::_SELF_OPERATION, $offset);
    }

    /**
     * Returns count of '_self_operation' list
     *
     * @return int
     */
    public function getSelfOperationCount()
    {
        return $this->count(self::_SELF_OPERATION);
    }

    /**
     * Appends value to '_oppo_operation' list
     *
     * @param Bcdown_SyncOperation $value Value to append
     *
     * @return null
     */
    public function appendOppoOperation(Bcdown_SyncOperation $value)
    {
        return $this->append(self::_OPPO_OPERATION, $value);
    }

    /**
     * Clears '_oppo_operation' list
     *
     * @return null
     */
    public function clearOppoOperation()
    {
        return $this->clear(self::_OPPO_OPERATION);
    }

    /**
     * Returns '_oppo_operation' list
     *
     * @return Bcdown_SyncOperation[]
     */
    public function getOppoOperation()
    {
        return $this->get(self::_OPPO_OPERATION);
    }

    /**
     * Returns '_oppo_operation' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoOperationIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_OPERATION));
    }

    /**
     * Returns element from '_oppo_operation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_SyncOperation
     */
    public function getOppoOperationAt($offset)
    {
        return $this->get(self::_OPPO_OPERATION, $offset);
    }

    /**
     * Returns count of '_oppo_operation' list
     *
     * @return int
     */
    public function getOppoOperationCount()
    {
        return $this->count(self::_OPPO_OPERATION);
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
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }
}

/**
 * toppvp_check_msg message
 */
class Bcdown_ToppvpCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _LEVEL = 4;
    const _AVATAR = 5;
    const _VIP = 6;
    const _OPPO_USERID = 7;
    const _OPPO_NAME = 8;
    const _OPPO_LEVEL = 9;
    const _OPPO_AVATAR = 10;
    const _OPPO_VIP = 11;
    const _OPPO_ROBOT = 12;
    const _RESULT = 13;
    const _SELF_HEROES = 14;
    const _OPPO_HEROES = 15;
    const _RSEED = 16;
    const _SELF_ROBOT = 17;

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
        self::_USERNAME => array(
            'name' => '_username',
            'required' => false,
            'type' => 7,
        ),
        self::_LEVEL => array(
            'name' => '_level',
            'required' => false,
            'type' => 5,
        ),
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_VIP => array(
            'name' => '_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
            'required' => true,
            'type' => 5,
        ),
        self::_OPPO_NAME => array(
            'name' => '_oppo_name',
            'required' => false,
            'type' => 7,
        ),
        self::_OPPO_LEVEL => array(
            'name' => '_oppo_level',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_AVATAR => array(
            'name' => '_oppo_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_VIP => array(
            'name' => '_oppo_vip',
            'required' => false,
            'type' => 5,
        ),
        self::_OPPO_ROBOT => array(
            'name' => '_oppo_robot',
            'required' => false,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Bcdown_Result::victory, 
            'name' => '_result',
            'repeated' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Bcdown_ArenaTeam'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Bcdown_ArenaTeam'
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_ROBOT => array(
            'name' => '_self_robot',
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
        $this->values[self::_CHECKID] = null;
        $this->values[self::_USERID] = null;
        $this->values[self::_USERNAME] = null;
        $this->values[self::_LEVEL] = null;
        $this->values[self::_AVATAR] = null;
        $this->values[self::_VIP] = null;
        $this->values[self::_OPPO_USERID] = null;
        $this->values[self::_OPPO_NAME] = null;
        $this->values[self::_OPPO_LEVEL] = null;
        $this->values[self::_OPPO_AVATAR] = null;
        $this->values[self::_OPPO_VIP] = null;
        $this->values[self::_OPPO_ROBOT] = null;
        $this->values[self::_RESULT] = array();
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_SELF_ROBOT] = null;
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
     * Sets value of '_username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::_USERNAME, $value);
    }

    /**
     * Returns value of '_username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::_USERNAME);
    }

    /**
     * Sets value of '_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::_LEVEL, $value);
    }

    /**
     * Returns value of '_level' property
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->get(self::_LEVEL);
    }

    /**
     * Sets value of '_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAvatar($value)
    {
        return $this->set(self::_AVATAR, $value);
    }

    /**
     * Returns value of '_avatar' property
     *
     * @return int
     */
    public function getAvatar()
    {
        return $this->get(self::_AVATAR);
    }

    /**
     * Sets value of '_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVip($value)
    {
        return $this->set(self::_VIP, $value);
    }

    /**
     * Returns value of '_vip' property
     *
     * @return int
     */
    public function getVip()
    {
        return $this->get(self::_VIP);
    }

    /**
     * Sets value of '_oppo_userid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserid($value)
    {
        return $this->set(self::_OPPO_USERID, $value);
    }

    /**
     * Returns value of '_oppo_userid' property
     *
     * @return int
     */
    public function getOppoUserid()
    {
        return $this->get(self::_OPPO_USERID);
    }

    /**
     * Sets value of '_oppo_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOppoName($value)
    {
        return $this->set(self::_OPPO_NAME, $value);
    }

    /**
     * Returns value of '_oppo_name' property
     *
     * @return string
     */
    public function getOppoName()
    {
        return $this->get(self::_OPPO_NAME);
    }

    /**
     * Sets value of '_oppo_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoLevel($value)
    {
        return $this->set(self::_OPPO_LEVEL, $value);
    }

    /**
     * Returns value of '_oppo_level' property
     *
     * @return int
     */
    public function getOppoLevel()
    {
        return $this->get(self::_OPPO_LEVEL);
    }

    /**
     * Sets value of '_oppo_avatar' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoAvatar($value)
    {
        return $this->set(self::_OPPO_AVATAR, $value);
    }

    /**
     * Returns value of '_oppo_avatar' property
     *
     * @return int
     */
    public function getOppoAvatar()
    {
        return $this->get(self::_OPPO_AVATAR);
    }

    /**
     * Sets value of '_oppo_vip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoVip($value)
    {
        return $this->set(self::_OPPO_VIP, $value);
    }

    /**
     * Returns value of '_oppo_vip' property
     *
     * @return int
     */
    public function getOppoVip()
    {
        return $this->get(self::_OPPO_VIP);
    }

    /**
     * Sets value of '_oppo_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoRobot($value)
    {
        return $this->set(self::_OPPO_ROBOT, $value);
    }

    /**
     * Returns value of '_oppo_robot' property
     *
     * @return int
     */
    public function getOppoRobot()
    {
        return $this->get(self::_OPPO_ROBOT);
    }

    /**
     * Appends value to '_result' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendResult($value)
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
     * @return int[]
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
     * @return int
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

    /**
     * Appends value to '_self_heroes' list
     *
     * @param Bcdown_ArenaTeam $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Bcdown_ArenaTeam $value)
    {
        return $this->append(self::_SELF_HEROES, $value);
    }

    /**
     * Clears '_self_heroes' list
     *
     * @return null
     */
    public function clearSelfHeroes()
    {
        return $this->clear(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' list
     *
     * @return Bcdown_ArenaTeam[]
     */
    public function getSelfHeroes()
    {
        return $this->get(self::_SELF_HEROES);
    }

    /**
     * Returns '_self_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_HEROES));
    }

    /**
     * Returns element from '_self_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_ArenaTeam
     */
    public function getSelfHeroesAt($offset)
    {
        return $this->get(self::_SELF_HEROES, $offset);
    }

    /**
     * Returns count of '_self_heroes' list
     *
     * @return int
     */
    public function getSelfHeroesCount()
    {
        return $this->count(self::_SELF_HEROES);
    }

    /**
     * Appends value to '_oppo_heroes' list
     *
     * @param Bcdown_ArenaTeam $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Bcdown_ArenaTeam $value)
    {
        return $this->append(self::_OPPO_HEROES, $value);
    }

    /**
     * Clears '_oppo_heroes' list
     *
     * @return null
     */
    public function clearOppoHeroes()
    {
        return $this->clear(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' list
     *
     * @return Bcdown_ArenaTeam[]
     */
    public function getOppoHeroes()
    {
        return $this->get(self::_OPPO_HEROES);
    }

    /**
     * Returns '_oppo_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_HEROES));
    }

    /**
     * Returns element from '_oppo_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_ArenaTeam
     */
    public function getOppoHeroesAt($offset)
    {
        return $this->get(self::_OPPO_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_heroes' list
     *
     * @return int
     */
    public function getOppoHeroesCount()
    {
        return $this->count(self::_OPPO_HEROES);
    }

    /**
     * Sets value of '_rseed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRseed($value)
    {
        return $this->set(self::_RSEED, $value);
    }

    /**
     * Returns value of '_rseed' property
     *
     * @return int
     */
    public function getRseed()
    {
        return $this->get(self::_RSEED);
    }

    /**
     * Sets value of '_self_robot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSelfRobot($value)
    {
        return $this->set(self::_SELF_ROBOT, $value);
    }

    /**
     * Returns value of '_self_robot' property
     *
     * @return int
     */
    public function getSelfRobot()
    {
        return $this->get(self::_SELF_ROBOT);
    }
}

/**
 * hero_equip message
 */
class Bcdown_HeroEquip extends \ProtobufMessage
{
    /* Field index constants */
    const _INDEX = 1;
    const _ITEM_ID = 2;
    const _EXP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_INDEX => array(
            'name' => '_index',
            'required' => true,
            'type' => 5,
        ),
        self::_ITEM_ID => array(
            'name' => '_item_id',
            'required' => true,
            'type' => 5,
        ),
        self::_EXP => array(
            'name' => '_exp',
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
        $this->values[self::_INDEX] = null;
        $this->values[self::_ITEM_ID] = null;
        $this->values[self::_EXP] = null;
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
     * Sets value of '_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::_INDEX, $value);
    }

    /**
     * Returns value of '_index' property
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->get(self::_INDEX);
    }

    /**
     * Sets value of '_item_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::_ITEM_ID, $value);
    }

    /**
     * Returns value of '_item_id' property
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->get(self::_ITEM_ID);
    }

    /**
     * Sets value of '_exp' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExp($value)
    {
        return $this->set(self::_EXP, $value);
    }

    /**
     * Returns value of '_exp' property
     *
     * @return int
     */
    public function getExp()
    {
        return $this->get(self::_EXP);
    }
}

/**
 * hero_arousal message
 */
class Bcdown_HeroArousal extends \ProtobufMessage
{
    /* Field index constants */
    const _STATUS = 1;
    const _STR = 2;
    const _AGI = 3;
    const _INT = 4;
    const _STR_VAR = 5;
    const _AGI_VAR = 6;
    const _INT_VAR = 7;
    const _COST_GOLD = 8;
    const _COST_DIAMOND = 9;
    const _ARO_EXP = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STATUS => array(
            'name' => '_status',
            'required' => true,
            'type' => 5,
        ),
        self::_STR => array(
            'name' => '_str',
            'required' => true,
            'type' => 5,
        ),
        self::_AGI => array(
            'name' => '_agi',
            'required' => true,
            'type' => 5,
        ),
        self::_INT => array(
            'name' => '_int',
            'required' => true,
            'type' => 5,
        ),
        self::_STR_VAR => array(
            'name' => '_str_var',
            'required' => true,
            'type' => 5,
        ),
        self::_AGI_VAR => array(
            'name' => '_agi_var',
            'required' => true,
            'type' => 5,
        ),
        self::_INT_VAR => array(
            'name' => '_int_var',
            'required' => true,
            'type' => 5,
        ),
        self::_COST_GOLD => array(
            'name' => '_cost_gold',
            'required' => true,
            'type' => 5,
        ),
        self::_COST_DIAMOND => array(
            'name' => '_cost_diamond',
            'required' => true,
            'type' => 5,
        ),
        self::_ARO_EXP => array(
            'name' => '_aro_exp',
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
        $this->values[self::_STATUS] = null;
        $this->values[self::_STR] = null;
        $this->values[self::_AGI] = null;
        $this->values[self::_INT] = null;
        $this->values[self::_STR_VAR] = null;
        $this->values[self::_AGI_VAR] = null;
        $this->values[self::_INT_VAR] = null;
        $this->values[self::_COST_GOLD] = null;
        $this->values[self::_COST_DIAMOND] = null;
        $this->values[self::_ARO_EXP] = null;
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
     * Sets value of '_status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::_STATUS, $value);
    }

    /**
     * Returns value of '_status' property
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->get(self::_STATUS);
    }

    /**
     * Sets value of '_str' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStr($value)
    {
        return $this->set(self::_STR, $value);
    }

    /**
     * Returns value of '_str' property
     *
     * @return int
     */
    public function getStr()
    {
        return $this->get(self::_STR);
    }

    /**
     * Sets value of '_agi' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAgi($value)
    {
        return $this->set(self::_AGI, $value);
    }

    /**
     * Returns value of '_agi' property
     *
     * @return int
     */
    public function getAgi()
    {
        return $this->get(self::_AGI);
    }

    /**
     * Sets value of '_int' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInt($value)
    {
        return $this->set(self::_INT, $value);
    }

    /**
     * Returns value of '_int' property
     *
     * @return int
     */
    public function getInt()
    {
        return $this->get(self::_INT);
    }

    /**
     * Sets value of '_str_var' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStrVar($value)
    {
        return $this->set(self::_STR_VAR, $value);
    }

    /**
     * Returns value of '_str_var' property
     *
     * @return int
     */
    public function getStrVar()
    {
        return $this->get(self::_STR_VAR);
    }

    /**
     * Sets value of '_agi_var' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAgiVar($value)
    {
        return $this->set(self::_AGI_VAR, $value);
    }

    /**
     * Returns value of '_agi_var' property
     *
     * @return int
     */
    public function getAgiVar()
    {
        return $this->get(self::_AGI_VAR);
    }

    /**
     * Sets value of '_int_var' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntVar($value)
    {
        return $this->set(self::_INT_VAR, $value);
    }

    /**
     * Returns value of '_int_var' property
     *
     * @return int
     */
    public function getIntVar()
    {
        return $this->get(self::_INT_VAR);
    }

    /**
     * Sets value of '_cost_gold' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCostGold($value)
    {
        return $this->set(self::_COST_GOLD, $value);
    }

    /**
     * Returns value of '_cost_gold' property
     *
     * @return int
     */
    public function getCostGold()
    {
        return $this->get(self::_COST_GOLD);
    }

    /**
     * Sets value of '_cost_diamond' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCostDiamond($value)
    {
        return $this->set(self::_COST_DIAMOND, $value);
    }

    /**
     * Returns value of '_cost_diamond' property
     *
     * @return int
     */
    public function getCostDiamond()
    {
        return $this->get(self::_COST_DIAMOND);
    }

    /**
     * Sets value of '_aro_exp' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAroExp($value)
    {
        return $this->set(self::_ARO_EXP, $value);
    }

    /**
     * Returns value of '_aro_exp' property
     *
     * @return int
     */
    public function getAroExp()
    {
        return $this->get(self::_ARO_EXP);
    }
}

/**
 * status enum embedded in hero message
 */
final class Bcdown_Hero_Status
{
    const idle = 0;
    const hire = 1;
    const mining = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'idle' => self::idle,
            'hire' => self::hire,
            'mining' => self::mining,
        );
    }
}

/**
 * hero message
 */
class Bcdown_Hero extends \ProtobufMessage
{
    /* Field index constants */
    const _TID = 1;
    const _RANK = 2;
    const _LEVEL = 3;
    const _STARS = 4;
    const _EXP = 5;
    const _GS = 6;
    const _STATE = 7;
    const _SKILL_LEVELS = 8;
    const _ITEMS = 9;
    const _AROUSAL = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TID => array(
            'name' => '_tid',
            'required' => true,
            'type' => 5,
        ),
        self::_RANK => array(
            'name' => '_rank',
            'required' => false,
            'type' => 5,
        ),
        self::_LEVEL => array(
            'name' => '_level',
            'required' => true,
            'type' => 5,
        ),
        self::_STARS => array(
            'name' => '_stars',
            'required' => true,
            'type' => 5,
        ),
        self::_EXP => array(
            'name' => '_exp',
            'required' => true,
            'type' => 5,
        ),
        self::_GS => array(
            'name' => '_gs',
            'required' => true,
            'type' => 5,
        ),
        self::_STATE => array(
            'name' => '_state',
            'required' => true,
            'type' => 5,
        ),
        self::_SKILL_LEVELS => array(
            'name' => '_skill_levels',
            'repeated' => true,
            'type' => 5,
        ),
        self::_ITEMS => array(
            'name' => '_items',
            'repeated' => true,
            'type' => 'Bcdown_HeroEquip'
        ),
        self::_AROUSAL => array(
            'name' => '_arousal',
            'required' => false,
            'type' => 'Bcdown_HeroArousal'
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
        $this->values[self::_TID] = null;
        $this->values[self::_RANK] = null;
        $this->values[self::_LEVEL] = null;
        $this->values[self::_STARS] = null;
        $this->values[self::_EXP] = null;
        $this->values[self::_GS] = null;
        $this->values[self::_STATE] = null;
        $this->values[self::_SKILL_LEVELS] = array();
        $this->values[self::_ITEMS] = array();
        $this->values[self::_AROUSAL] = null;
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
     * Sets value of '_tid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTid($value)
    {
        return $this->set(self::_TID, $value);
    }

    /**
     * Returns value of '_tid' property
     *
     * @return int
     */
    public function getTid()
    {
        return $this->get(self::_TID);
    }

    /**
     * Sets value of '_rank' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::_RANK, $value);
    }

    /**
     * Returns value of '_rank' property
     *
     * @return int
     */
    public function getRank()
    {
        return $this->get(self::_RANK);
    }

    /**
     * Sets value of '_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::_LEVEL, $value);
    }

    /**
     * Returns value of '_level' property
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->get(self::_LEVEL);
    }

    /**
     * Sets value of '_stars' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStars($value)
    {
        return $this->set(self::_STARS, $value);
    }

    /**
     * Returns value of '_stars' property
     *
     * @return int
     */
    public function getStars()
    {
        return $this->get(self::_STARS);
    }

    /**
     * Sets value of '_exp' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExp($value)
    {
        return $this->set(self::_EXP, $value);
    }

    /**
     * Returns value of '_exp' property
     *
     * @return int
     */
    public function getExp()
    {
        return $this->get(self::_EXP);
    }

    /**
     * Sets value of '_gs' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGs($value)
    {
        return $this->set(self::_GS, $value);
    }

    /**
     * Returns value of '_gs' property
     *
     * @return int
     */
    public function getGs()
    {
        return $this->get(self::_GS);
    }

    /**
     * Sets value of '_state' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::_STATE, $value);
    }

    /**
     * Returns value of '_state' property
     *
     * @return int
     */
    public function getState()
    {
        return $this->get(self::_STATE);
    }

    /**
     * Appends value to '_skill_levels' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSkillLevels($value)
    {
        return $this->append(self::_SKILL_LEVELS, $value);
    }

    /**
     * Clears '_skill_levels' list
     *
     * @return null
     */
    public function clearSkillLevels()
    {
        return $this->clear(self::_SKILL_LEVELS);
    }

    /**
     * Returns '_skill_levels' list
     *
     * @return int[]
     */
    public function getSkillLevels()
    {
        return $this->get(self::_SKILL_LEVELS);
    }

    /**
     * Returns '_skill_levels' iterator
     *
     * @return ArrayIterator
     */
    public function getSkillLevelsIterator()
    {
        return new \ArrayIterator($this->get(self::_SKILL_LEVELS));
    }

    /**
     * Returns element from '_skill_levels' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSkillLevelsAt($offset)
    {
        return $this->get(self::_SKILL_LEVELS, $offset);
    }

    /**
     * Returns count of '_skill_levels' list
     *
     * @return int
     */
    public function getSkillLevelsCount()
    {
        return $this->count(self::_SKILL_LEVELS);
    }

    /**
     * Appends value to '_items' list
     *
     * @param Bcdown_HeroEquip $value Value to append
     *
     * @return null
     */
    public function appendItems(Bcdown_HeroEquip $value)
    {
        return $this->append(self::_ITEMS, $value);
    }

    /**
     * Clears '_items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::_ITEMS);
    }

    /**
     * Returns '_items' list
     *
     * @return Bcdown_HeroEquip[]
     */
    public function getItems()
    {
        return $this->get(self::_ITEMS);
    }

    /**
     * Returns '_items' iterator
     *
     * @return ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::_ITEMS));
    }

    /**
     * Returns element from '_items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_HeroEquip
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::_ITEMS, $offset);
    }

    /**
     * Returns count of '_items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::_ITEMS);
    }

    /**
     * Sets value of '_arousal' property
     *
     * @param Bcdown_HeroArousal $value Property value
     *
     * @return null
     */
    public function setArousal(Bcdown_HeroArousal $value)
    {
        return $this->set(self::_AROUSAL, $value);
    }

    /**
     * Returns value of '_arousal' property
     *
     * @return Bcdown_HeroArousal
     */
    public function getArousal()
    {
        return $this->get(self::_AROUSAL);
    }
}

/**
 * hero_dyna message
 */
class Bcdown_HeroDyna extends \ProtobufMessage
{
    /* Field index constants */
    const _HP_PERC = 1;
    const _MP_PERC = 2;
    const _CUSTOM_DATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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

/**
 * arena_team message
 */
class Bcdown_ArenaTeam extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROES => array(
            'name' => '_heroes',
            'repeated' => true,
            'type' => 'Bcdown_Hero'
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
        $this->values[self::_HEROES] = array();
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
     * Appends value to '_heroes' list
     *
     * @param Bcdown_Hero $value Value to append
     *
     * @return null
     */
    public function appendHeroes(Bcdown_Hero $value)
    {
        return $this->append(self::_HEROES, $value);
    }

    /**
     * Clears '_heroes' list
     *
     * @return null
     */
    public function clearHeroes()
    {
        return $this->clear(self::_HEROES);
    }

    /**
     * Returns '_heroes' list
     *
     * @return Bcdown_Hero[]
     */
    public function getHeroes()
    {
        return $this->get(self::_HEROES);
    }

    /**
     * Returns '_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_HEROES));
    }

    /**
     * Returns element from '_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Bcdown_Hero
     */
    public function getHeroesAt($offset)
    {
        return $this->get(self::_HEROES, $offset);
    }

    /**
     * Returns count of '_heroes' list
     *
     * @return int
     */
    public function getHeroesCount()
    {
        return $this->count(self::_HEROES);
    }
}

/**
 * sync_operation message
 */
class Bcdown_SyncOperation extends \ProtobufMessage
{
    /* Field index constants */
    const _TICK = 1;
    const _OPERATION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TICK => array(
            'name' => '_tick',
            'required' => true,
            'type' => 5,
        ),
        self::_OPERATION => array(
            'name' => '_operation',
            'repeated' => true,
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
        $this->values[self::_TICK] = null;
        $this->values[self::_OPERATION] = array();
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
     * Sets value of '_tick' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTick($value)
    {
        return $this->set(self::_TICK, $value);
    }

    /**
     * Returns value of '_tick' property
     *
     * @return int
     */
    public function getTick()
    {
        return $this->get(self::_TICK);
    }

    /**
     * Appends value to '_operation' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOperation($value)
    {
        return $this->append(self::_OPERATION, $value);
    }

    /**
     * Clears '_operation' list
     *
     * @return null
     */
    public function clearOperation()
    {
        return $this->clear(self::_OPERATION);
    }

    /**
     * Returns '_operation' list
     *
     * @return int[]
     */
    public function getOperation()
    {
        return $this->get(self::_OPERATION);
    }

    /**
     * Returns '_operation' iterator
     *
     * @return ArrayIterator
     */
    public function getOperationIterator()
    {
        return new \ArrayIterator($this->get(self::_OPERATION));
    }

    /**
     * Returns element from '_operation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOperationAt($offset)
    {
        return $this->get(self::_OPERATION, $offset);
    }

    /**
     * Returns count of '_operation' list
     *
     * @return int
     */
    public function getOperationCount()
    {
        return $this->count(self::_OPERATION);
    }
}
