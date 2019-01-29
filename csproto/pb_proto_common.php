<?php
/**
 * Auto generated from common.proto at 2015-01-28 02:10:03
 *
 * Msg package
 */

/**
 * result enum
 */
final class Msg_Result
{
    const success = 0;
    const fail = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'success' => self::success,
            'fail' => self::fail,
        );
    }
}

/**
 * battle_result enum
 */
final class Msg_BattleResult
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
 * money_type enum
 */
final class Msg_MoneyType
{
    const gold = 1;
    const diamond = 2;
    const tbc_point = 3;
    const ladder_point = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'gold' => self::gold,
            'diamond' => self::diamond,
            'tbc_point' => self::tbc_point,
            'ladder_point' => self::ladder_point,
        );
    }
}

/**
 * hero_status enum
 */
final class Msg_HeroStatus
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
 * server_opt_result enum
 */
final class Msg_ServerOptResult
{
    const get_ok = 0;
    const change_ok = 1;
    const opt_fail = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'get_ok' => self::get_ok,
            'change_ok' => self::change_ok,
            'opt_fail' => self::opt_fail,
        );
    }
}

/**
 * hero message
 */
class Msg_Hero extends \ProtobufMessage
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
    const _FASHION = 11;

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
            'type' => 'Msg_HeroEquip'
        ),
        self::_AROUSAL => array(
            'name' => '_arousal',
            'required' => false,
            'type' => 'Msg_HeroArousal'
        ),
        self::_FASHION => array(
            'name' => '_fashion',
            'required' => false,
            'type' => 'Msg_Fashion'
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
        $this->values[self::_FASHION] = null;
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
     * @param Msg_HeroEquip $value Value to append
     *
     * @return null
     */
    public function appendItems(Msg_HeroEquip $value)
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
     * @return Msg_HeroEquip[]
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
     * @return Msg_HeroEquip
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
     * @param Msg_HeroArousal $value Property value
     *
     * @return null
     */
    public function setArousal(Msg_HeroArousal $value)
    {
        return $this->set(self::_AROUSAL, $value);
    }

    /**
     * Returns value of '_arousal' property
     *
     * @return Msg_HeroArousal
     */
    public function getArousal()
    {
        return $this->get(self::_AROUSAL);
    }

    /**
     * Sets value of '_fashion' property
     *
     * @param Msg_Fashion $value Property value
     *
     * @return null
     */
    public function setFashion(Msg_Fashion $value)
    {
        return $this->set(self::_FASHION, $value);
    }

    /**
     * Returns value of '_fashion' property
     *
     * @return Msg_Fashion
     */
    public function getFashion()
    {
        return $this->get(self::_FASHION);
    }
}

/**
 * hero_dyna message
 */
class Msg_HeroDyna extends \ProtobufMessage
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
 * hero_equip message
 */
class Msg_HeroEquip extends \ProtobufMessage
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
class Msg_HeroArousal extends \ProtobufMessage
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
 * fashion message
 */
class Msg_Fashion extends \ProtobufMessage
{
    /* Field index constants */
    const _CURRENT_FASHION = 1;
    const _FASHION_LIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CURRENT_FASHION => array(
            'name' => '_current_fashion',
            'required' => false,
            'type' => 5,
        ),
        self::_FASHION_LIST => array(
            'name' => '_fashion_list',
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
        $this->values[self::_CURRENT_FASHION] = null;
        $this->values[self::_FASHION_LIST] = array();
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
     * Sets value of '_current_fashion' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCurrentFashion($value)
    {
        return $this->set(self::_CURRENT_FASHION, $value);
    }

    /**
     * Returns value of '_current_fashion' property
     *
     * @return int
     */
    public function getCurrentFashion()
    {
        return $this->get(self::_CURRENT_FASHION);
    }

    /**
     * Appends value to '_fashion_list' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendFashionList($value)
    {
        return $this->append(self::_FASHION_LIST, $value);
    }

    /**
     * Clears '_fashion_list' list
     *
     * @return null
     */
    public function clearFashionList()
    {
        return $this->clear(self::_FASHION_LIST);
    }

    /**
     * Returns '_fashion_list' list
     *
     * @return int[]
     */
    public function getFashionList()
    {
        return $this->get(self::_FASHION_LIST);
    }

    /**
     * Returns '_fashion_list' iterator
     *
     * @return ArrayIterator
     */
    public function getFashionListIterator()
    {
        return new \ArrayIterator($this->get(self::_FASHION_LIST));
    }

    /**
     * Returns element from '_fashion_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getFashionListAt($offset)
    {
        return $this->get(self::_FASHION_LIST, $offset);
    }

    /**
     * Returns count of '_fashion_list' list
     *
     * @return int
     */
    public function getFashionListCount()
    {
        return $this->count(self::_FASHION_LIST);
    }
}

/**
 * hire_data message
 */
class Msg_HireData extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _NAME = 2;
    const _HERO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_NAME => array(
            'name' => '_name',
            'required' => true,
            'type' => 7,
        ),
        self::_HERO => array(
            'name' => '_hero',
            'required' => true,
            'type' => 'Msg_HireHero'
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
        $this->values[self::_UID] = null;
        $this->values[self::_NAME] = null;
        $this->values[self::_HERO] = null;
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
     * Sets value of '_uid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::_UID, $value);
    }

    /**
     * Returns value of '_uid' property
     *
     * @return int
     */
    public function getUid()
    {
        return $this->get(self::_UID);
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
     * Sets value of '_hero' property
     *
     * @param Msg_HireHero $value Property value
     *
     * @return null
     */
    public function setHero(Msg_HireHero $value)
    {
        return $this->set(self::_HERO, $value);
    }

    /**
     * Returns value of '_hero' property
     *
     * @return Msg_HireHero
     */
    public function getHero()
    {
        return $this->get(self::_HERO);
    }
}

/**
 * hire_hero message
 */
class Msg_HireHero extends \ProtobufMessage
{
    /* Field index constants */
    const _BASE = 1;
    const _DYNA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_BASE => array(
            'name' => '_base',
            'required' => true,
            'type' => 'Msg_Hero'
        ),
        self::_DYNA => array(
            'name' => '_dyna',
            'required' => true,
            'type' => 'Msg_HeroDyna'
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
        $this->values[self::_BASE] = null;
        $this->values[self::_DYNA] = null;
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
     * Sets value of '_base' property
     *
     * @param Msg_Hero $value Property value
     *
     * @return null
     */
    public function setBase(Msg_Hero $value)
    {
        return $this->set(self::_BASE, $value);
    }

    /**
     * Returns value of '_base' property
     *
     * @return Msg_Hero
     */
    public function getBase()
    {
        return $this->get(self::_BASE);
    }

    /**
     * Sets value of '_dyna' property
     *
     * @param Msg_HeroDyna $value Property value
     *
     * @return null
     */
    public function setDyna(Msg_HeroDyna $value)
    {
        return $this->set(self::_DYNA, $value);
    }

    /**
     * Returns value of '_dyna' property
     *
     * @return Msg_HeroDyna
     */
    public function getDyna()
    {
        return $this->get(self::_DYNA);
    }
}
