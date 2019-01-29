<?php
/**
 * Auto generated from bcdown.proto at 2015-01-28 02:10:03
 *
 * MsgBDown package
 */

/**
 * battlecheck message
 */
class MsgBDown_Battlecheck extends \ProtobufMessage
{
    /* Field index constants */
    const _PVE_MSG = 1;
    const _PVP_MSG = 2;
    const _TBC_MSG = 3;
    const _EXCAV_MSG = 4;
    const _GUILD_MSG = 5;
    const _RTPVP_MSG = 6;
    const _TOPPVP_MSG = 7;
    const _ANCIENTS_MSG = 8;
    const _GVG_CHECK_MSG = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_PVE_MSG => array(
            'name' => '_pve_msg',
            'repeated' => true,
            'type' => 'MsgBDown_PveCheckMsg'
        ),
        self::_PVP_MSG => array(
            'name' => '_pvp_msg',
            'repeated' => true,
            'type' => 'MsgBDown_PvpCheckMsg'
        ),
        self::_TBC_MSG => array(
            'name' => '_tbc_msg',
            'repeated' => true,
            'type' => 'MsgBDown_TbcCheckMsg'
        ),
        self::_EXCAV_MSG => array(
            'name' => '_excav_msg',
            'repeated' => true,
            'type' => 'MsgBDown_ExcavCheckMsg'
        ),
        self::_GUILD_MSG => array(
            'name' => '_guild_msg',
            'repeated' => true,
            'type' => 'MsgBDown_GuildPveCheckMsg'
        ),
        self::_RTPVP_MSG => array(
            'name' => '_rtpvp_msg',
            'repeated' => true,
            'type' => 'MsgBDown_RtpvpCheckMsg'
        ),
        self::_TOPPVP_MSG => array(
            'name' => '_toppvp_msg',
            'repeated' => true,
            'type' => 'MsgBDown_ToppvpCheckMsg'
        ),
        self::_ANCIENTS_MSG => array(
            'name' => '_ancients_msg',
            'repeated' => true,
            'type' => 'MsgBDown_AncientsCheckMsg'
        ),
        self::_GVG_CHECK_MSG => array(
            'name' => '_gvg_check_msg',
            'repeated' => true,
            'type' => 'MsgBDown_GvgCheckMsg'
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
        $this->values[self::_ANCIENTS_MSG] = array();
        $this->values[self::_GVG_CHECK_MSG] = array();
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
     * @param MsgBDown_PveCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendPveMsg(MsgBDown_PveCheckMsg $value)
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
     * @return MsgBDown_PveCheckMsg[]
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
     * @return MsgBDown_PveCheckMsg
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
     * @param MsgBDown_PvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendPvpMsg(MsgBDown_PvpCheckMsg $value)
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
     * @return MsgBDown_PvpCheckMsg[]
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
     * @return MsgBDown_PvpCheckMsg
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
     * @param MsgBDown_TbcCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendTbcMsg(MsgBDown_TbcCheckMsg $value)
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
     * @return MsgBDown_TbcCheckMsg[]
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
     * @return MsgBDown_TbcCheckMsg
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
     * @param MsgBDown_ExcavCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendExcavMsg(MsgBDown_ExcavCheckMsg $value)
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
     * @return MsgBDown_ExcavCheckMsg[]
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
     * @return MsgBDown_ExcavCheckMsg
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
     * @param MsgBDown_GuildPveCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendGuildMsg(MsgBDown_GuildPveCheckMsg $value)
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
     * @return MsgBDown_GuildPveCheckMsg[]
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
     * @return MsgBDown_GuildPveCheckMsg
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
     * @param MsgBDown_RtpvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendRtpvpMsg(MsgBDown_RtpvpCheckMsg $value)
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
     * @return MsgBDown_RtpvpCheckMsg[]
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
     * @return MsgBDown_RtpvpCheckMsg
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
     * @param MsgBDown_ToppvpCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendToppvpMsg(MsgBDown_ToppvpCheckMsg $value)
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
     * @return MsgBDown_ToppvpCheckMsg[]
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
     * @return MsgBDown_ToppvpCheckMsg
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

    /**
     * Appends value to '_ancients_msg' list
     *
     * @param MsgBDown_AncientsCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendAncientsMsg(MsgBDown_AncientsCheckMsg $value)
    {
        return $this->append(self::_ANCIENTS_MSG, $value);
    }

    /**
     * Clears '_ancients_msg' list
     *
     * @return null
     */
    public function clearAncientsMsg()
    {
        return $this->clear(self::_ANCIENTS_MSG);
    }

    /**
     * Returns '_ancients_msg' list
     *
     * @return MsgBDown_AncientsCheckMsg[]
     */
    public function getAncientsMsg()
    {
        return $this->get(self::_ANCIENTS_MSG);
    }

    /**
     * Returns '_ancients_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getAncientsMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_ANCIENTS_MSG));
    }

    /**
     * Returns element from '_ancients_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgBDown_AncientsCheckMsg
     */
    public function getAncientsMsgAt($offset)
    {
        return $this->get(self::_ANCIENTS_MSG, $offset);
    }

    /**
     * Returns count of '_ancients_msg' list
     *
     * @return int
     */
    public function getAncientsMsgCount()
    {
        return $this->count(self::_ANCIENTS_MSG);
    }

    /**
     * Appends value to '_gvg_check_msg' list
     *
     * @param MsgBDown_GvgCheckMsg $value Value to append
     *
     * @return null
     */
    public function appendGvgCheckMsg(MsgBDown_GvgCheckMsg $value)
    {
        return $this->append(self::_GVG_CHECK_MSG, $value);
    }

    /**
     * Clears '_gvg_check_msg' list
     *
     * @return null
     */
    public function clearGvgCheckMsg()
    {
        return $this->clear(self::_GVG_CHECK_MSG);
    }

    /**
     * Returns '_gvg_check_msg' list
     *
     * @return MsgBDown_GvgCheckMsg[]
     */
    public function getGvgCheckMsg()
    {
        return $this->get(self::_GVG_CHECK_MSG);
    }

    /**
     * Returns '_gvg_check_msg' iterator
     *
     * @return ArrayIterator
     */
    public function getGvgCheckMsgIterator()
    {
        return new \ArrayIterator($this->get(self::_GVG_CHECK_MSG));
    }

    /**
     * Returns element from '_gvg_check_msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgBDown_GvgCheckMsg
     */
    public function getGvgCheckMsgAt($offset)
    {
        return $this->get(self::_GVG_CHECK_MSG, $offset);
    }

    /**
     * Returns count of '_gvg_check_msg' list
     *
     * @return int
     */
    public function getGvgCheckMsgCount()
    {
        return $this->count(self::_GVG_CHECK_MSG);
    }
}

/**
 * pve_check_msg message
 */
class MsgBDown_PveCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
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
            'type' => 'Msg_Hero'
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
            'type' => 'MsgBDown_UnitBattleData'
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param MsgBDown_UnitBattleData $value Value to append
     *
     * @return null
     */
    public function appendUnitBattleData(MsgBDown_UnitBattleData $value)
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
     * @return MsgBDown_UnitBattleData[]
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
     * @return MsgBDown_UnitBattleData
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
class MsgBDown_UnitBattleData extends \ProtobufMessage
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
class MsgBDown_PvpCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
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
        $this->values[self::_RESULT] = Msg_BattleResult::victory;
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
 * user_summary message
 */
class MsgBDown_UserSummary extends \ProtobufMessage
{
    /* Field index constants */
    const _AVATAR = 1;
    const _NAME = 2;
    const _VIP = 3;
    const _LEVEL = 4;
    const _GUILD_NAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => true,
            'type' => 5,
        ),
        self::_NAME => array(
            'name' => '_name',
            'required' => true,
            'type' => 7,
        ),
        self::_VIP => array(
            'name' => '_vip',
            'required' => true,
            'type' => 5,
        ),
        self::_LEVEL => array(
            'name' => '_level',
            'required' => true,
            'type' => 5,
        ),
        self::_GUILD_NAME => array(
            'name' => '_guild_name',
            'required' => false,
            'type' => 7,
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
        $this->values[self::_AVATAR] = null;
        $this->values[self::_NAME] = null;
        $this->values[self::_VIP] = null;
        $this->values[self::_LEVEL] = null;
        $this->values[self::_GUILD_NAME] = null;
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
     * Sets value of '_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::_NAME, $value);
    }

    /**
     * Returns value of '_name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::_NAME);
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
     * Sets value of '_guild_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildName($value)
    {
        return $this->set(self::_GUILD_NAME, $value);
    }

    /**
     * Returns value of '_guild_name' property
     *
     * @return string
     */
    public function getGuildName()
    {
        return $this->get(self::_GUILD_NAME);
    }
}

/**
 * gvg_check_msg message
 */
class MsgBDown_GvgCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USER_SUMMARY = 3;
    const _OPPO_SUMMARY = 4;
    const _SELF_HEROES = 5;
    const _OPPO_HEROES = 6;
    const _RSEED = 7;
    const _CLI_BATTLE_TIME = 8;
    const _SELF_GVG_HEROES = 9;
    const _OPPO_GVG_HEROES = 10;
    const _OPPO_USERID = 11;

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
        self::_USER_SUMMARY => array(
            'name' => '_user_summary',
            'required' => true,
            'type' => 'MsgBDown_UserSummary'
        ),
        self::_OPPO_SUMMARY => array(
            'name' => '_oppo_summary',
            'required' => true,
            'type' => 'MsgBDown_UserSummary'
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
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
        self::_SELF_GVG_HEROES => array(
            'name' => '_self_gvg_heroes',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_GVG_HEROES => array(
            'name' => '_oppo_gvg_heroes',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_USERID => array(
            'name' => '_oppo_userid',
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
        $this->values[self::_USER_SUMMARY] = null;
        $this->values[self::_OPPO_SUMMARY] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_CLI_BATTLE_TIME] = null;
        $this->values[self::_SELF_GVG_HEROES] = array();
        $this->values[self::_OPPO_GVG_HEROES] = array();
        $this->values[self::_OPPO_USERID] = null;
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
     * Sets value of '_user_summary' property
     *
     * @param MsgBDown_UserSummary $value Property value
     *
     * @return null
     */
    public function setUserSummary(MsgBDown_UserSummary $value)
    {
        return $this->set(self::_USER_SUMMARY, $value);
    }

    /**
     * Returns value of '_user_summary' property
     *
     * @return MsgBDown_UserSummary
     */
    public function getUserSummary()
    {
        return $this->get(self::_USER_SUMMARY);
    }

    /**
     * Sets value of '_oppo_summary' property
     *
     * @param MsgBDown_UserSummary $value Property value
     *
     * @return null
     */
    public function setOppoSummary(MsgBDown_UserSummary $value)
    {
        return $this->set(self::_OPPO_SUMMARY, $value);
    }

    /**
     * Returns value of '_oppo_summary' property
     *
     * @return MsgBDown_UserSummary
     */
    public function getOppoSummary()
    {
        return $this->get(self::_OPPO_SUMMARY);
    }

    /**
     * Appends value to '_self_heroes' list
     *
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * Appends value to '_self_gvg_heroes' list
     *
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfGvgHeroes(Msg_HeroDyna $value)
    {
        return $this->append(self::_SELF_GVG_HEROES, $value);
    }

    /**
     * Clears '_self_gvg_heroes' list
     *
     * @return null
     */
    public function clearSelfGvgHeroes()
    {
        return $this->clear(self::_SELF_GVG_HEROES);
    }

    /**
     * Returns '_self_gvg_heroes' list
     *
     * @return Msg_HeroDyna[]
     */
    public function getSelfGvgHeroes()
    {
        return $this->get(self::_SELF_GVG_HEROES);
    }

    /**
     * Returns '_self_gvg_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfGvgHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_GVG_HEROES));
    }

    /**
     * Returns element from '_self_gvg_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msg_HeroDyna
     */
    public function getSelfGvgHeroesAt($offset)
    {
        return $this->get(self::_SELF_GVG_HEROES, $offset);
    }

    /**
     * Returns count of '_self_gvg_heroes' list
     *
     * @return int
     */
    public function getSelfGvgHeroesCount()
    {
        return $this->count(self::_SELF_GVG_HEROES);
    }

    /**
     * Appends value to '_oppo_gvg_heroes' list
     *
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoGvgHeroes(Msg_HeroDyna $value)
    {
        return $this->append(self::_OPPO_GVG_HEROES, $value);
    }

    /**
     * Clears '_oppo_gvg_heroes' list
     *
     * @return null
     */
    public function clearOppoGvgHeroes()
    {
        return $this->clear(self::_OPPO_GVG_HEROES);
    }

    /**
     * Returns '_oppo_gvg_heroes' list
     *
     * @return Msg_HeroDyna[]
     */
    public function getOppoGvgHeroes()
    {
        return $this->get(self::_OPPO_GVG_HEROES);
    }

    /**
     * Returns '_oppo_gvg_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoGvgHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_GVG_HEROES));
    }

    /**
     * Returns element from '_oppo_gvg_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msg_HeroDyna
     */
    public function getOppoGvgHeroesAt($offset)
    {
        return $this->get(self::_OPPO_GVG_HEROES, $offset);
    }

    /**
     * Returns count of '_oppo_gvg_heroes' list
     *
     * @return int
     */
    public function getOppoGvgHeroesCount()
    {
        return $this->count(self::_OPPO_GVG_HEROES);
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
}

/**
 * tbc_check_msg message
 */
class MsgBDown_TbcCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
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
            'type' => 'Msg_HeroDyna'
        ),
        self::_SELF_DYNA_END => array(
            'name' => '_self_dyna_end',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_DYNA_START => array(
            'name' => '_oppo_dyna_start',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_DYNA_END => array(
            'name' => '_oppo_dyna_end',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
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
        $this->values[self::_RESULT] = Msg_BattleResult::victory;
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaStart(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaEnd(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaStart(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaEnd(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
final class MsgBDown_ExcavCheckMsg_OppoType
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
class MsgBDown_ExcavCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => false,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_RSEED => array(
            'name' => '_rseed',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_DYNA_START => array(
            'name' => '_self_dyna_start',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_SELF_DYNA_END => array(
            'name' => '_self_dyna_end',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_DYNA_START => array(
            'name' => '_oppo_dyna_start',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_DYNA_END => array(
            'name' => '_oppo_dyna_end',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
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
        $this->values[self::_RESULT] = Msg_BattleResult::victory;
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaStart(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynaEnd(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaStart(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynaEnd(Msg_HeroDyna $value)
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
     * @return Msg_HeroDyna[]
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
     * @return Msg_HeroDyna
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
class MsgBDown_GuildPveCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
class MsgBDown_RtpvpCheckMsg extends \ProtobufMessage
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
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_SELF_OPERATION => array(
            'name' => '_self_operation',
            'repeated' => true,
            'type' => 'MsgBDown_SyncOperation'
        ),
        self::_OPPO_OPERATION => array(
            'name' => '_oppo_operation',
            'repeated' => true,
            'type' => 'MsgBDown_SyncOperation'
        ),
        self::_RESULT => array(
            'default' => Msg_BattleResult::victory, 
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * @param MsgBDown_SyncOperation $value Value to append
     *
     * @return null
     */
    public function appendSelfOperation(MsgBDown_SyncOperation $value)
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
     * @return MsgBDown_SyncOperation[]
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
     * @return MsgBDown_SyncOperation
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
     * @param MsgBDown_SyncOperation $value Value to append
     *
     * @return null
     */
    public function appendOppoOperation(MsgBDown_SyncOperation $value)
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
     * @return MsgBDown_SyncOperation[]
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
     * @return MsgBDown_SyncOperation
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
class MsgBDown_ToppvpCheckMsg extends \ProtobufMessage
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
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'MsgBDown_ArenaTeam'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'MsgBDown_ArenaTeam'
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
        $this->values[self::_RESULT] = null;
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
     * @param MsgBDown_ArenaTeam $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(MsgBDown_ArenaTeam $value)
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
     * @return MsgBDown_ArenaTeam[]
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
     * @return MsgBDown_ArenaTeam
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
     * @param MsgBDown_ArenaTeam $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(MsgBDown_ArenaTeam $value)
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
     * @return MsgBDown_ArenaTeam[]
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
     * @return MsgBDown_ArenaTeam
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
 * ancients_check_msg message
 */
class MsgBDown_AncientsCheckMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _CHECKID = 1;
    const _USERID = 2;
    const _USERNAME = 3;
    const _LEVEL = 4;
    const _AVATAR = 5;
    const _VIP = 6;
    const _RESULT = 7;
    const _SELF_HEROES = 8;
    const _DIFFICULTY = 9;
    const _RSEED = 10;
    const _HP_START = 11;
    const _HP_END = 12;
    const _OPERATIONS = 13;
    const _CLI_BATTLE_TIME = 14;
    const _TARGET_ID = 15;

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
        self::_RESULT => array(
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_DIFFICULTY => array(
            'name' => '_difficulty',
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
        self::_OPERATIONS => array(
            'name' => '_operations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_CLI_BATTLE_TIME => array(
            'name' => '_cli_battle_time',
            'required' => false,
            'type' => 5,
        ),
        self::_TARGET_ID => array(
            'name' => '_target_id',
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_DIFFICULTY] = null;
        $this->values[self::_RSEED] = null;
        $this->values[self::_HP_START] = array();
        $this->values[self::_HP_END] = array();
        $this->values[self::_OPERATIONS] = array();
        $this->values[self::_CLI_BATTLE_TIME] = null;
        $this->values[self::_TARGET_ID] = null;
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
     * Sets value of '_difficulty' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDifficulty($value)
    {
        return $this->set(self::_DIFFICULTY, $value);
    }

    /**
     * Returns value of '_difficulty' property
     *
     * @return int
     */
    public function getDifficulty()
    {
        return $this->get(self::_DIFFICULTY);
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
     * Appends value to '_operations' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOperations($value)
    {
        return $this->append(self::_OPERATIONS, $value);
    }

    /**
     * Clears '_operations' list
     *
     * @return null
     */
    public function clearOperations()
    {
        return $this->clear(self::_OPERATIONS);
    }

    /**
     * Returns '_operations' list
     *
     * @return int[]
     */
    public function getOperations()
    {
        return $this->get(self::_OPERATIONS);
    }

    /**
     * Returns '_operations' iterator
     *
     * @return ArrayIterator
     */
    public function getOperationsIterator()
    {
        return new \ArrayIterator($this->get(self::_OPERATIONS));
    }

    /**
     * Returns element from '_operations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOperationsAt($offset)
    {
        return $this->get(self::_OPERATIONS, $offset);
    }

    /**
     * Returns count of '_operations' list
     *
     * @return int
     */
    public function getOperationsCount()
    {
        return $this->count(self::_OPERATIONS);
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
     * Sets value of '_target_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTargetId($value)
    {
        return $this->set(self::_TARGET_ID, $value);
    }

    /**
     * Returns value of '_target_id' property
     *
     * @return int
     */
    public function getTargetId()
    {
        return $this->get(self::_TARGET_ID);
    }
}

/**
 * arena_team message
 */
class MsgBDown_ArenaTeam extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROES => array(
            'name' => '_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
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
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendHeroes(Msg_Hero $value)
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
     * @return Msg_Hero[]
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
     * @return Msg_Hero
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
class MsgBDown_SyncOperation extends \ProtobufMessage
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
require_once 'pb_proto_common.php';