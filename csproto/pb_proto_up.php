<?php
/**
 * Auto generated from up.proto at 2015-01-28 02:09:56
 *
 * MsgUp package
 */

/**
 * platform_type enum
 */
final class MsgUp_PlatformType
{
    const self = 0;
    const s91 = 1;
    const tbt = 2;
    const pp = 3;
    const lemon = 4;
    const itools = 5;
    const kuaiyong = 6;
    const tuyoo = 7;
    const lemonyueyu = 8;
    const itools2 = 9;
    const lemontw_ios = 10;
    const southeast = 12;
    const vietnam = 13;
    const aisi = 14;
    const ky_android = 101;
    const xm_android = 102;
    const lemon_android = 103;
    const s360_android = 104;
    const uc_android = 105;
    const duoku_android = 106;
    const s91_android = 107;
    const wandoujia_android = 108;
    const pps_android = 109;
    const dangle_android = 110;
    const oppo_android = 111;
    const anzhi_android = 112;
    const s37wan_android = 113;
    const huawei_android = 114;
    const lianxiang_android = 115;
    const pptv_android = 116;
    const vivo_android = 117;
    const s49app_android = 118;
    const jinshan_android = 119;
    const yiwan_android = 120;
    const yingyonghui_android = 122;
    const kugou_android = 121;
    const alibaba_android = 123;
    const letv_android = 124;
    const lemontw_android = 125;
    const yidongjidi_android = 126;
    const yidongmm_android = 127;
    const southeast_android = 128;
    const liantongwo_android = 129;
    const ledou_android = 130;
    const momo_android = 131;
    const kuwo_android = 132;
    const putao_android = 133;
    const ayx_android = 134;
    const ouwan_android = 135;
    const winphone = 301;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'self' => self::self,
            's91' => self::s91,
            'tbt' => self::tbt,
            'pp' => self::pp,
            'lemon' => self::lemon,
            'itools' => self::itools,
            'kuaiyong' => self::kuaiyong,
            'tuyoo' => self::tuyoo,
            'lemonyueyu' => self::lemonyueyu,
            'itools2' => self::itools2,
            'lemontw_ios' => self::lemontw_ios,
            'southeast' => self::southeast,
            'vietnam' => self::vietnam,
            'aisi' => self::aisi,
            'ky_android' => self::ky_android,
            'xm_android' => self::xm_android,
            'lemon_android' => self::lemon_android,
            's360_android' => self::s360_android,
            'uc_android' => self::uc_android,
            'duoku_android' => self::duoku_android,
            's91_android' => self::s91_android,
            'wandoujia_android' => self::wandoujia_android,
            'pps_android' => self::pps_android,
            'dangle_android' => self::dangle_android,
            'oppo_android' => self::oppo_android,
            'anzhi_android' => self::anzhi_android,
            's37wan_android' => self::s37wan_android,
            'huawei_android' => self::huawei_android,
            'lianxiang_android' => self::lianxiang_android,
            'pptv_android' => self::pptv_android,
            'vivo_android' => self::vivo_android,
            's49app_android' => self::s49app_android,
            'jinshan_android' => self::jinshan_android,
            'yiwan_android' => self::yiwan_android,
            'yingyonghui_android' => self::yingyonghui_android,
            'kugou_android' => self::kugou_android,
            'alibaba_android' => self::alibaba_android,
            'letv_android' => self::letv_android,
            'lemontw_android' => self::lemontw_android,
            'yidongjidi_android' => self::yidongjidi_android,
            'yidongmm_android' => self::yidongmm_android,
            'southeast_android' => self::southeast_android,
            'liantongwo_android' => self::liantongwo_android,
            'ledou_android' => self::ledou_android,
            'momo_android' => self::momo_android,
            'kuwo_android' => self::kuwo_android,
            'putao_android' => self::putao_android,
            'ayx_android' => self::ayx_android,
            'ouwan_android' => self::ouwan_android,
            'winphone' => self::winphone,
        );
    }
}

/**
 * guild_job_t enum
 */
final class MsgUp_GuildJobT
{
    const chairman = 1;
    const member = 2;
    const elder = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'chairman' => self::chairman,
            'member' => self::member,
            'elder' => self::elder,
        );
    }
}

/**
 * hire_from enum
 */
final class MsgUp_HireFrom
{
    const from_guild = 0;
    const from_tbc = 1;
    const from_stage = 2;
    const from_excav = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'from_guild' => self::from_guild,
            'from_tbc' => self::from_tbc,
            'from_stage' => self::from_stage,
            'from_excav' => self::from_excav,
        );
    }
}

/**
 * chat_channel enum
 */
final class MsgUp_ChatChannel
{
    const world_channel = 1;
    const guild_channel = 2;
    const personal_channel = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'world_channel' => self::world_channel,
            'guild_channel' => self::guild_channel,
            'personal_channel' => self::personal_channel,
        );
    }
}

/**
 * server_opt_type enum
 */
final class MsgUp_ServerOptType
{
    const get = 0;
    const change = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'get' => self::get,
            'change' => self::change,
        );
    }
}

/**
 * pvp_rule enum
 */
final class MsgUp_PvpRule
{
    const bo1 = 1;
    const bo3 = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'bo1' => self::bo1,
            'bo3' => self::bo3,
        );
    }
}

/**
 * up_msg message
 */
class MsgUp_UpMsg extends \ProtobufMessage
{
    /* Field index constants */
    const _REPEAT = 1;
    const _USER_ID = 2;
    const _LOGIN = 3;
    const _REQUEST_USERINFO = 4;
    const _ENTER_STAGE = 5;
    const _EXIT_STAGE = 6;
    const _GM_CMD = 7;
    const _HERO_UPGRADE = 8;
    const _EQUIP_SYNTHESIS = 9;
    const _WEAR_EQUIP = 10;
    const _CONSUME_ITEM = 11;
    const _SHOP_REFRESH = 12;
    const _SHOP_CONSUME = 13;
    const _SKILL_LEVELUP = 14;
    const _SELL_ITEM = 15;
    const _FRAGMENT_COMPOSE = 16;
    const _HERO_EQUIP_UPGRADE = 17;
    const _TRIGGER_TASK = 18;
    const _REQUIRE_REWARDS = 19;
    const _TRIGGER_JOB = 20;
    const _JOB_REWARDS = 21;
    const _RESET_ELITE = 22;
    const _SWEEP_STAGE = 23;
    const _BUY_VITALITY = 24;
    const _BUY_SKILL_STREN_POINT = 25;
    const _TAVERN_DRAW = 26;
    const _QUERY_DATA = 27;
    const _HERO_EVOLVE = 28;
    const _ENTER_ACT_STAGE = 29;
    const _SYNC_VITALITY = 30;
    const _SUSPEND_REPORT = 31;
    const _TUTORIAL = 32;
    const _LADDER = 33;
    const _SET_NAME = 34;
    const _MIDAS = 35;
    const _OPEN_SHOP = 36;
    const _CHARGE = 37;
    const _SDK_LOGIN = 38;
    const _SET_AVATAR = 39;
    const _ASK_DAILY_LOGIN = 40;
    const _TBC = 41;
    const _GET_MAILLIST = 42;
    const _READ_MAIL = 43;
    const _GET_SVR_TIME = 44;
    const _GET_VIP_GIFT = 45;
    const _IMPORTANT_DATA_MD5 = 46;
    const _CHAT = 47;
    const _CDKEY_GIFT = 48;
    const _GUILD = 49;
    const _ASK_MAGICSOUL = 50;
    const _ASK_ACTIVITY_INFO = 51;
    const _EXCAVATE = 52;
    const _PUSH_NOTIFY = 53;
    const _SYSTEM_SETTING = 54;
    const _QUERY_SPLIT_DATA = 55;
    const _QUERY_SPLIT_RETURN = 56;
    const _SPLIT_HERO = 57;
    const _WORLDCUP = 58;
    const _REPORT_BATTLE = 59;
    const _QUERY_REPLAY = 60;
    const _SYNC_SKILL_STREN = 61;
    const _QUERY_RANKLIST = 62;
    const _CHANGE_SERVER = 63;
    const _REQUIRE_AROUSAL = 64;
    const _CHANGE_TASK_STATUS = 65;
    const _REQUEST_GUILD_LOG = 66;
    const _QUERY_ACT_STAGE = 67;
    const _REQUEST_UPGRADE_AROUSAL_LEVEL = 68;
    const _REAL_PVP = 69;
    const _ASK_PRED_STAGE = 70;
    const _TOP_ARENA = 71;
    const _UPCOMING_EVENTS = 72;
    const _SYNC_TIME_ZONE = 73;
    const _LINK_DEVICE = 74;
    const _MOVE_ACCOUNT = 75;
    const _PLAYER_CHALLENGE = 76;
    const _ANCIENTS = 77;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_REPEAT => array(
            'name' => '_repeat',
            'required' => true,
            'type' => 5,
        ),
        self::_USER_ID => array(
            'name' => '_user_id',
            'required' => false,
            'type' => 5,
        ),
        self::_LOGIN => array(
            'name' => '_login',
            'required' => false,
            'type' => 'MsgUp_Login'
        ),
        self::_REQUEST_USERINFO => array(
            'name' => '_request_userinfo',
            'required' => false,
            'type' => 'MsgUp_RequestUserinfo'
        ),
        self::_ENTER_STAGE => array(
            'name' => '_enter_stage',
            'required' => false,
            'type' => 'MsgUp_EnterStage'
        ),
        self::_EXIT_STAGE => array(
            'name' => '_exit_stage',
            'required' => false,
            'type' => 'MsgUp_ExitStage'
        ),
        self::_GM_CMD => array(
            'name' => '_gm_cmd',
            'required' => false,
            'type' => 'MsgUp_GmCmd'
        ),
        self::_HERO_UPGRADE => array(
            'name' => '_hero_upgrade',
            'required' => false,
            'type' => 'MsgUp_HeroUpgrade'
        ),
        self::_EQUIP_SYNTHESIS => array(
            'name' => '_equip_synthesis',
            'required' => false,
            'type' => 'MsgUp_EquipSynthesis'
        ),
        self::_WEAR_EQUIP => array(
            'name' => '_wear_equip',
            'required' => false,
            'type' => 'MsgUp_WearEquip'
        ),
        self::_CONSUME_ITEM => array(
            'name' => '_consume_item',
            'required' => false,
            'type' => 'MsgUp_ConsumeItem'
        ),
        self::_SHOP_REFRESH => array(
            'name' => '_shop_refresh',
            'required' => false,
            'type' => 'MsgUp_ShopRefresh'
        ),
        self::_SHOP_CONSUME => array(
            'name' => '_shop_consume',
            'required' => false,
            'type' => 'MsgUp_ShopConsume'
        ),
        self::_SKILL_LEVELUP => array(
            'name' => '_skill_levelup',
            'required' => false,
            'type' => 'MsgUp_SkillLevelup'
        ),
        self::_SELL_ITEM => array(
            'name' => '_sell_item',
            'required' => false,
            'type' => 'MsgUp_SellItem'
        ),
        self::_FRAGMENT_COMPOSE => array(
            'name' => '_fragment_compose',
            'required' => false,
            'type' => 'MsgUp_FragmentCompose'
        ),
        self::_HERO_EQUIP_UPGRADE => array(
            'name' => '_hero_equip_upgrade',
            'required' => false,
            'type' => 'MsgUp_HeroEquipUpgrade'
        ),
        self::_TRIGGER_TASK => array(
            'name' => '_trigger_task',
            'required' => false,
            'type' => 'MsgUp_TriggerTask'
        ),
        self::_REQUIRE_REWARDS => array(
            'name' => '_require_rewards',
            'required' => false,
            'type' => 'MsgUp_RequireRewards'
        ),
        self::_TRIGGER_JOB => array(
            'name' => '_trigger_job',
            'required' => false,
            'type' => 'MsgUp_TriggerJob'
        ),
        self::_JOB_REWARDS => array(
            'name' => '_job_rewards',
            'required' => false,
            'type' => 'MsgUp_JobRewards'
        ),
        self::_RESET_ELITE => array(
            'name' => '_reset_elite',
            'required' => false,
            'type' => 'MsgUp_ResetElite'
        ),
        self::_SWEEP_STAGE => array(
            'name' => '_sweep_stage',
            'required' => false,
            'type' => 'MsgUp_SweepStage'
        ),
        self::_BUY_VITALITY => array(
            'name' => '_buy_vitality',
            'required' => false,
            'type' => 'MsgUp_BuyVitality'
        ),
        self::_BUY_SKILL_STREN_POINT => array(
            'name' => '_buy_skill_stren_point',
            'required' => false,
            'type' => 'MsgUp_BuySkillStrenPoint'
        ),
        self::_TAVERN_DRAW => array(
            'name' => '_tavern_draw',
            'required' => false,
            'type' => 'MsgUp_TavernDraw'
        ),
        self::_QUERY_DATA => array(
            'name' => '_query_data',
            'required' => false,
            'type' => 'MsgUp_QueryData'
        ),
        self::_HERO_EVOLVE => array(
            'name' => '_hero_evolve',
            'required' => false,
            'type' => 'MsgUp_HeroEvolve'
        ),
        self::_ENTER_ACT_STAGE => array(
            'name' => '_enter_act_stage',
            'required' => false,
            'type' => 'MsgUp_EnterActStage'
        ),
        self::_SYNC_VITALITY => array(
            'name' => '_sync_vitality',
            'required' => false,
            'type' => 'MsgUp_SyncVitality'
        ),
        self::_SUSPEND_REPORT => array(
            'name' => '_suspend_report',
            'required' => false,
            'type' => 'MsgUp_SuspendReport'
        ),
        self::_TUTORIAL => array(
            'name' => '_tutorial',
            'required' => false,
            'type' => 'MsgUp_Tutorial'
        ),
        self::_LADDER => array(
            'name' => '_ladder',
            'required' => false,
            'type' => 'MsgUp_Ladder'
        ),
        self::_SET_NAME => array(
            'name' => '_set_name',
            'required' => false,
            'type' => 'MsgUp_SetName'
        ),
        self::_MIDAS => array(
            'name' => '_midas',
            'required' => false,
            'type' => 'MsgUp_Midas'
        ),
        self::_OPEN_SHOP => array(
            'name' => '_open_shop',
            'required' => false,
            'type' => 'MsgUp_OpenShop'
        ),
        self::_CHARGE => array(
            'name' => '_charge',
            'required' => false,
            'type' => 'MsgUp_Charge'
        ),
        self::_SDK_LOGIN => array(
            'name' => '_sdk_login',
            'required' => false,
            'type' => 'MsgUp_SdkLogin'
        ),
        self::_SET_AVATAR => array(
            'name' => '_set_avatar',
            'required' => false,
            'type' => 'MsgUp_SetAvatar'
        ),
        self::_ASK_DAILY_LOGIN => array(
            'name' => '_ask_daily_login',
            'required' => false,
            'type' => 'MsgUp_AskDailyLogin'
        ),
        self::_TBC => array(
            'name' => '_tbc',
            'required' => false,
            'type' => 'MsgUp_Tbc'
        ),
        self::_GET_MAILLIST => array(
            'name' => '_get_maillist',
            'required' => false,
            'type' => 'MsgUp_GetMaillist'
        ),
        self::_READ_MAIL => array(
            'name' => '_read_mail',
            'required' => false,
            'type' => 'MsgUp_ReadMail'
        ),
        self::_GET_SVR_TIME => array(
            'name' => '_get_svr_time',
            'required' => false,
            'type' => 'MsgUp_GetSvrTime'
        ),
        self::_GET_VIP_GIFT => array(
            'name' => '_get_vip_gift',
            'required' => false,
            'type' => 'MsgUp_GetVipGift'
        ),
        self::_IMPORTANT_DATA_MD5 => array(
            'name' => '_important_data_md5',
            'required' => false,
            'type' => 7,
        ),
        self::_CHAT => array(
            'name' => '_chat',
            'required' => false,
            'type' => 'MsgUp_Chat'
        ),
        self::_CDKEY_GIFT => array(
            'name' => '_cdkey_gift',
            'required' => false,
            'type' => 'MsgUp_CdkeyGift'
        ),
        self::_GUILD => array(
            'name' => '_guild',
            'required' => false,
            'type' => 'MsgUp_Guild'
        ),
        self::_ASK_MAGICSOUL => array(
            'name' => '_ask_magicsoul',
            'required' => false,
            'type' => 'MsgUp_AskMagicsoul'
        ),
        self::_ASK_ACTIVITY_INFO => array(
            'name' => '_ask_activity_info',
            'required' => false,
            'type' => 'MsgUp_AskActivityInfo'
        ),
        self::_EXCAVATE => array(
            'name' => '_excavate',
            'required' => false,
            'type' => 'MsgUp_Excavate'
        ),
        self::_PUSH_NOTIFY => array(
            'name' => '_push_notify',
            'required' => false,
            'type' => 'MsgUp_PushNotify'
        ),
        self::_SYSTEM_SETTING => array(
            'name' => '_system_setting',
            'required' => false,
            'type' => 'MsgUp_SystemSetting'
        ),
        self::_QUERY_SPLIT_DATA => array(
            'name' => '_query_split_data',
            'required' => false,
            'type' => 'MsgUp_QuerySplitData'
        ),
        self::_QUERY_SPLIT_RETURN => array(
            'name' => '_query_split_return',
            'required' => false,
            'type' => 'MsgUp_QuerySplitReturn'
        ),
        self::_SPLIT_HERO => array(
            'name' => '_split_hero',
            'required' => false,
            'type' => 'MsgUp_SplitHero'
        ),
        self::_WORLDCUP => array(
            'name' => '_worldcup',
            'required' => false,
            'type' => 'MsgUp_Worldcup'
        ),
        self::_REPORT_BATTLE => array(
            'name' => '_report_battle',
            'required' => false,
            'type' => 'MsgUp_ReportBattle'
        ),
        self::_QUERY_REPLAY => array(
            'name' => '_query_replay',
            'required' => false,
            'type' => 'MsgUp_QueryReplay'
        ),
        self::_SYNC_SKILL_STREN => array(
            'name' => '_sync_skill_stren',
            'required' => false,
            'type' => 'MsgUp_SyncSkillStren'
        ),
        self::_QUERY_RANKLIST => array(
            'name' => '_query_ranklist',
            'required' => false,
            'type' => 'MsgUp_QueryRanklist'
        ),
        self::_CHANGE_SERVER => array(
            'name' => '_change_server',
            'required' => false,
            'type' => 'MsgUp_ChangeServer'
        ),
        self::_REQUIRE_AROUSAL => array(
            'name' => '_require_arousal',
            'required' => false,
            'type' => 'MsgUp_RequireArousal'
        ),
        self::_CHANGE_TASK_STATUS => array(
            'name' => '_change_task_status',
            'required' => false,
            'type' => 'MsgUp_ChangeTaskStatus'
        ),
        self::_REQUEST_GUILD_LOG => array(
            'name' => '_request_guild_log',
            'required' => false,
            'type' => 'MsgUp_RequestGuildLog'
        ),
        self::_QUERY_ACT_STAGE => array(
            'name' => '_query_act_stage',
            'required' => false,
            'type' => 'MsgUp_QueryActStage'
        ),
        self::_REQUEST_UPGRADE_AROUSAL_LEVEL => array(
            'name' => '_request_upgrade_arousal_level',
            'required' => false,
            'type' => 'MsgUp_RequestUpgradeArousalLevel'
        ),
        self::_REAL_PVP => array(
            'name' => '_real_pvp',
            'required' => false,
            'type' => 'MsgUp_RealPvp'
        ),
        self::_ASK_PRED_STAGE => array(
            'name' => '_ask_pred_stage',
            'required' => false,
            'type' => 'MsgUp_AskPredStage'
        ),
        self::_TOP_ARENA => array(
            'name' => '_top_arena',
            'required' => false,
            'type' => 'MsgUp_TopArena'
        ),
        self::_UPCOMING_EVENTS => array(
            'name' => '_upcoming_events',
            'required' => false,
            'type' => 'MsgUp_UpcomingEvents'
        ),
        self::_SYNC_TIME_ZONE => array(
            'name' => '_sync_time_zone',
            'required' => false,
            'type' => 'MsgUp_SyncTimeZone'
        ),
        self::_LINK_DEVICE => array(
            'name' => '_link_device',
            'required' => false,
            'type' => 'MsgUp_LinkDevice'
        ),
        self::_MOVE_ACCOUNT => array(
            'name' => '_move_account',
            'required' => false,
            'type' => 'MsgUp_MoveAccount'
        ),
        self::_PLAYER_CHALLENGE => array(
            'name' => '_player_challenge',
            'required' => false,
            'type' => 'MsgUp_PlayerChallenge'
        ),
        self::_ANCIENTS => array(
            'name' => '_ancients',
            'required' => false,
            'type' => 'MsgUp_Ancients'
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
        $this->values[self::_REPEAT] = null;
        $this->values[self::_USER_ID] = null;
        $this->values[self::_LOGIN] = null;
        $this->values[self::_REQUEST_USERINFO] = null;
        $this->values[self::_ENTER_STAGE] = null;
        $this->values[self::_EXIT_STAGE] = null;
        $this->values[self::_GM_CMD] = null;
        $this->values[self::_HERO_UPGRADE] = null;
        $this->values[self::_EQUIP_SYNTHESIS] = null;
        $this->values[self::_WEAR_EQUIP] = null;
        $this->values[self::_CONSUME_ITEM] = null;
        $this->values[self::_SHOP_REFRESH] = null;
        $this->values[self::_SHOP_CONSUME] = null;
        $this->values[self::_SKILL_LEVELUP] = null;
        $this->values[self::_SELL_ITEM] = null;
        $this->values[self::_FRAGMENT_COMPOSE] = null;
        $this->values[self::_HERO_EQUIP_UPGRADE] = null;
        $this->values[self::_TRIGGER_TASK] = null;
        $this->values[self::_REQUIRE_REWARDS] = null;
        $this->values[self::_TRIGGER_JOB] = null;
        $this->values[self::_JOB_REWARDS] = null;
        $this->values[self::_RESET_ELITE] = null;
        $this->values[self::_SWEEP_STAGE] = null;
        $this->values[self::_BUY_VITALITY] = null;
        $this->values[self::_BUY_SKILL_STREN_POINT] = null;
        $this->values[self::_TAVERN_DRAW] = null;
        $this->values[self::_QUERY_DATA] = null;
        $this->values[self::_HERO_EVOLVE] = null;
        $this->values[self::_ENTER_ACT_STAGE] = null;
        $this->values[self::_SYNC_VITALITY] = null;
        $this->values[self::_SUSPEND_REPORT] = null;
        $this->values[self::_TUTORIAL] = null;
        $this->values[self::_LADDER] = null;
        $this->values[self::_SET_NAME] = null;
        $this->values[self::_MIDAS] = null;
        $this->values[self::_OPEN_SHOP] = null;
        $this->values[self::_CHARGE] = null;
        $this->values[self::_SDK_LOGIN] = null;
        $this->values[self::_SET_AVATAR] = null;
        $this->values[self::_ASK_DAILY_LOGIN] = null;
        $this->values[self::_TBC] = null;
        $this->values[self::_GET_MAILLIST] = null;
        $this->values[self::_READ_MAIL] = null;
        $this->values[self::_GET_SVR_TIME] = null;
        $this->values[self::_GET_VIP_GIFT] = null;
        $this->values[self::_IMPORTANT_DATA_MD5] = null;
        $this->values[self::_CHAT] = null;
        $this->values[self::_CDKEY_GIFT] = null;
        $this->values[self::_GUILD] = null;
        $this->values[self::_ASK_MAGICSOUL] = null;
        $this->values[self::_ASK_ACTIVITY_INFO] = null;
        $this->values[self::_EXCAVATE] = null;
        $this->values[self::_PUSH_NOTIFY] = null;
        $this->values[self::_SYSTEM_SETTING] = null;
        $this->values[self::_QUERY_SPLIT_DATA] = null;
        $this->values[self::_QUERY_SPLIT_RETURN] = null;
        $this->values[self::_SPLIT_HERO] = null;
        $this->values[self::_WORLDCUP] = null;
        $this->values[self::_REPORT_BATTLE] = null;
        $this->values[self::_QUERY_REPLAY] = null;
        $this->values[self::_SYNC_SKILL_STREN] = null;
        $this->values[self::_QUERY_RANKLIST] = null;
        $this->values[self::_CHANGE_SERVER] = null;
        $this->values[self::_REQUIRE_AROUSAL] = null;
        $this->values[self::_CHANGE_TASK_STATUS] = null;
        $this->values[self::_REQUEST_GUILD_LOG] = null;
        $this->values[self::_QUERY_ACT_STAGE] = null;
        $this->values[self::_REQUEST_UPGRADE_AROUSAL_LEVEL] = null;
        $this->values[self::_REAL_PVP] = null;
        $this->values[self::_ASK_PRED_STAGE] = null;
        $this->values[self::_TOP_ARENA] = null;
        $this->values[self::_UPCOMING_EVENTS] = null;
        $this->values[self::_SYNC_TIME_ZONE] = null;
        $this->values[self::_LINK_DEVICE] = null;
        $this->values[self::_MOVE_ACCOUNT] = null;
        $this->values[self::_PLAYER_CHALLENGE] = null;
        $this->values[self::_ANCIENTS] = null;
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
     * Sets value of '_repeat' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRepeat($value)
    {
        return $this->set(self::_REPEAT, $value);
    }

    /**
     * Returns value of '_repeat' property
     *
     * @return int
     */
    public function getRepeat()
    {
        return $this->get(self::_REPEAT);
    }

    /**
     * Sets value of '_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::_USER_ID, $value);
    }

    /**
     * Returns value of '_user_id' property
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->get(self::_USER_ID);
    }

    /**
     * Sets value of '_login' property
     *
     * @param MsgUp_Login $value Property value
     *
     * @return null
     */
    public function setLogin(MsgUp_Login $value)
    {
        return $this->set(self::_LOGIN, $value);
    }

    /**
     * Returns value of '_login' property
     *
     * @return MsgUp_Login
     */
    public function getLogin()
    {
        return $this->get(self::_LOGIN);
    }

    /**
     * Sets value of '_request_userinfo' property
     *
     * @param MsgUp_RequestUserinfo $value Property value
     *
     * @return null
     */
    public function setRequestUserinfo(MsgUp_RequestUserinfo $value)
    {
        return $this->set(self::_REQUEST_USERINFO, $value);
    }

    /**
     * Returns value of '_request_userinfo' property
     *
     * @return MsgUp_RequestUserinfo
     */
    public function getRequestUserinfo()
    {
        return $this->get(self::_REQUEST_USERINFO);
    }

    /**
     * Sets value of '_enter_stage' property
     *
     * @param MsgUp_EnterStage $value Property value
     *
     * @return null
     */
    public function setEnterStage(MsgUp_EnterStage $value)
    {
        return $this->set(self::_ENTER_STAGE, $value);
    }

    /**
     * Returns value of '_enter_stage' property
     *
     * @return MsgUp_EnterStage
     */
    public function getEnterStage()
    {
        return $this->get(self::_ENTER_STAGE);
    }

    /**
     * Sets value of '_exit_stage' property
     *
     * @param MsgUp_ExitStage $value Property value
     *
     * @return null
     */
    public function setExitStage(MsgUp_ExitStage $value)
    {
        return $this->set(self::_EXIT_STAGE, $value);
    }

    /**
     * Returns value of '_exit_stage' property
     *
     * @return MsgUp_ExitStage
     */
    public function getExitStage()
    {
        return $this->get(self::_EXIT_STAGE);
    }

    /**
     * Sets value of '_gm_cmd' property
     *
     * @param MsgUp_GmCmd $value Property value
     *
     * @return null
     */
    public function setGmCmd(MsgUp_GmCmd $value)
    {
        return $this->set(self::_GM_CMD, $value);
    }

    /**
     * Returns value of '_gm_cmd' property
     *
     * @return MsgUp_GmCmd
     */
    public function getGmCmd()
    {
        return $this->get(self::_GM_CMD);
    }

    /**
     * Sets value of '_hero_upgrade' property
     *
     * @param MsgUp_HeroUpgrade $value Property value
     *
     * @return null
     */
    public function setHeroUpgrade(MsgUp_HeroUpgrade $value)
    {
        return $this->set(self::_HERO_UPGRADE, $value);
    }

    /**
     * Returns value of '_hero_upgrade' property
     *
     * @return MsgUp_HeroUpgrade
     */
    public function getHeroUpgrade()
    {
        return $this->get(self::_HERO_UPGRADE);
    }

    /**
     * Sets value of '_equip_synthesis' property
     *
     * @param MsgUp_EquipSynthesis $value Property value
     *
     * @return null
     */
    public function setEquipSynthesis(MsgUp_EquipSynthesis $value)
    {
        return $this->set(self::_EQUIP_SYNTHESIS, $value);
    }

    /**
     * Returns value of '_equip_synthesis' property
     *
     * @return MsgUp_EquipSynthesis
     */
    public function getEquipSynthesis()
    {
        return $this->get(self::_EQUIP_SYNTHESIS);
    }

    /**
     * Sets value of '_wear_equip' property
     *
     * @param MsgUp_WearEquip $value Property value
     *
     * @return null
     */
    public function setWearEquip(MsgUp_WearEquip $value)
    {
        return $this->set(self::_WEAR_EQUIP, $value);
    }

    /**
     * Returns value of '_wear_equip' property
     *
     * @return MsgUp_WearEquip
     */
    public function getWearEquip()
    {
        return $this->get(self::_WEAR_EQUIP);
    }

    /**
     * Sets value of '_consume_item' property
     *
     * @param MsgUp_ConsumeItem $value Property value
     *
     * @return null
     */
    public function setConsumeItem(MsgUp_ConsumeItem $value)
    {
        return $this->set(self::_CONSUME_ITEM, $value);
    }

    /**
     * Returns value of '_consume_item' property
     *
     * @return MsgUp_ConsumeItem
     */
    public function getConsumeItem()
    {
        return $this->get(self::_CONSUME_ITEM);
    }

    /**
     * Sets value of '_shop_refresh' property
     *
     * @param MsgUp_ShopRefresh $value Property value
     *
     * @return null
     */
    public function setShopRefresh(MsgUp_ShopRefresh $value)
    {
        return $this->set(self::_SHOP_REFRESH, $value);
    }

    /**
     * Returns value of '_shop_refresh' property
     *
     * @return MsgUp_ShopRefresh
     */
    public function getShopRefresh()
    {
        return $this->get(self::_SHOP_REFRESH);
    }

    /**
     * Sets value of '_shop_consume' property
     *
     * @param MsgUp_ShopConsume $value Property value
     *
     * @return null
     */
    public function setShopConsume(MsgUp_ShopConsume $value)
    {
        return $this->set(self::_SHOP_CONSUME, $value);
    }

    /**
     * Returns value of '_shop_consume' property
     *
     * @return MsgUp_ShopConsume
     */
    public function getShopConsume()
    {
        return $this->get(self::_SHOP_CONSUME);
    }

    /**
     * Sets value of '_skill_levelup' property
     *
     * @param MsgUp_SkillLevelup $value Property value
     *
     * @return null
     */
    public function setSkillLevelup(MsgUp_SkillLevelup $value)
    {
        return $this->set(self::_SKILL_LEVELUP, $value);
    }

    /**
     * Returns value of '_skill_levelup' property
     *
     * @return MsgUp_SkillLevelup
     */
    public function getSkillLevelup()
    {
        return $this->get(self::_SKILL_LEVELUP);
    }

    /**
     * Sets value of '_sell_item' property
     *
     * @param MsgUp_SellItem $value Property value
     *
     * @return null
     */
    public function setSellItem(MsgUp_SellItem $value)
    {
        return $this->set(self::_SELL_ITEM, $value);
    }

    /**
     * Returns value of '_sell_item' property
     *
     * @return MsgUp_SellItem
     */
    public function getSellItem()
    {
        return $this->get(self::_SELL_ITEM);
    }

    /**
     * Sets value of '_fragment_compose' property
     *
     * @param MsgUp_FragmentCompose $value Property value
     *
     * @return null
     */
    public function setFragmentCompose(MsgUp_FragmentCompose $value)
    {
        return $this->set(self::_FRAGMENT_COMPOSE, $value);
    }

    /**
     * Returns value of '_fragment_compose' property
     *
     * @return MsgUp_FragmentCompose
     */
    public function getFragmentCompose()
    {
        return $this->get(self::_FRAGMENT_COMPOSE);
    }

    /**
     * Sets value of '_hero_equip_upgrade' property
     *
     * @param MsgUp_HeroEquipUpgrade $value Property value
     *
     * @return null
     */
    public function setHeroEquipUpgrade(MsgUp_HeroEquipUpgrade $value)
    {
        return $this->set(self::_HERO_EQUIP_UPGRADE, $value);
    }

    /**
     * Returns value of '_hero_equip_upgrade' property
     *
     * @return MsgUp_HeroEquipUpgrade
     */
    public function getHeroEquipUpgrade()
    {
        return $this->get(self::_HERO_EQUIP_UPGRADE);
    }

    /**
     * Sets value of '_trigger_task' property
     *
     * @param MsgUp_TriggerTask $value Property value
     *
     * @return null
     */
    public function setTriggerTask(MsgUp_TriggerTask $value)
    {
        return $this->set(self::_TRIGGER_TASK, $value);
    }

    /**
     * Returns value of '_trigger_task' property
     *
     * @return MsgUp_TriggerTask
     */
    public function getTriggerTask()
    {
        return $this->get(self::_TRIGGER_TASK);
    }

    /**
     * Sets value of '_require_rewards' property
     *
     * @param MsgUp_RequireRewards $value Property value
     *
     * @return null
     */
    public function setRequireRewards(MsgUp_RequireRewards $value)
    {
        return $this->set(self::_REQUIRE_REWARDS, $value);
    }

    /**
     * Returns value of '_require_rewards' property
     *
     * @return MsgUp_RequireRewards
     */
    public function getRequireRewards()
    {
        return $this->get(self::_REQUIRE_REWARDS);
    }

    /**
     * Sets value of '_trigger_job' property
     *
     * @param MsgUp_TriggerJob $value Property value
     *
     * @return null
     */
    public function setTriggerJob(MsgUp_TriggerJob $value)
    {
        return $this->set(self::_TRIGGER_JOB, $value);
    }

    /**
     * Returns value of '_trigger_job' property
     *
     * @return MsgUp_TriggerJob
     */
    public function getTriggerJob()
    {
        return $this->get(self::_TRIGGER_JOB);
    }

    /**
     * Sets value of '_job_rewards' property
     *
     * @param MsgUp_JobRewards $value Property value
     *
     * @return null
     */
    public function setJobRewards(MsgUp_JobRewards $value)
    {
        return $this->set(self::_JOB_REWARDS, $value);
    }

    /**
     * Returns value of '_job_rewards' property
     *
     * @return MsgUp_JobRewards
     */
    public function getJobRewards()
    {
        return $this->get(self::_JOB_REWARDS);
    }

    /**
     * Sets value of '_reset_elite' property
     *
     * @param MsgUp_ResetElite $value Property value
     *
     * @return null
     */
    public function setResetElite(MsgUp_ResetElite $value)
    {
        return $this->set(self::_RESET_ELITE, $value);
    }

    /**
     * Returns value of '_reset_elite' property
     *
     * @return MsgUp_ResetElite
     */
    public function getResetElite()
    {
        return $this->get(self::_RESET_ELITE);
    }

    /**
     * Sets value of '_sweep_stage' property
     *
     * @param MsgUp_SweepStage $value Property value
     *
     * @return null
     */
    public function setSweepStage(MsgUp_SweepStage $value)
    {
        return $this->set(self::_SWEEP_STAGE, $value);
    }

    /**
     * Returns value of '_sweep_stage' property
     *
     * @return MsgUp_SweepStage
     */
    public function getSweepStage()
    {
        return $this->get(self::_SWEEP_STAGE);
    }

    /**
     * Sets value of '_buy_vitality' property
     *
     * @param MsgUp_BuyVitality $value Property value
     *
     * @return null
     */
    public function setBuyVitality(MsgUp_BuyVitality $value)
    {
        return $this->set(self::_BUY_VITALITY, $value);
    }

    /**
     * Returns value of '_buy_vitality' property
     *
     * @return MsgUp_BuyVitality
     */
    public function getBuyVitality()
    {
        return $this->get(self::_BUY_VITALITY);
    }

    /**
     * Sets value of '_buy_skill_stren_point' property
     *
     * @param MsgUp_BuySkillStrenPoint $value Property value
     *
     * @return null
     */
    public function setBuySkillStrenPoint(MsgUp_BuySkillStrenPoint $value)
    {
        return $this->set(self::_BUY_SKILL_STREN_POINT, $value);
    }

    /**
     * Returns value of '_buy_skill_stren_point' property
     *
     * @return MsgUp_BuySkillStrenPoint
     */
    public function getBuySkillStrenPoint()
    {
        return $this->get(self::_BUY_SKILL_STREN_POINT);
    }

    /**
     * Sets value of '_tavern_draw' property
     *
     * @param MsgUp_TavernDraw $value Property value
     *
     * @return null
     */
    public function setTavernDraw(MsgUp_TavernDraw $value)
    {
        return $this->set(self::_TAVERN_DRAW, $value);
    }

    /**
     * Returns value of '_tavern_draw' property
     *
     * @return MsgUp_TavernDraw
     */
    public function getTavernDraw()
    {
        return $this->get(self::_TAVERN_DRAW);
    }

    /**
     * Sets value of '_query_data' property
     *
     * @param MsgUp_QueryData $value Property value
     *
     * @return null
     */
    public function setQueryData(MsgUp_QueryData $value)
    {
        return $this->set(self::_QUERY_DATA, $value);
    }

    /**
     * Returns value of '_query_data' property
     *
     * @return MsgUp_QueryData
     */
    public function getQueryData()
    {
        return $this->get(self::_QUERY_DATA);
    }

    /**
     * Sets value of '_hero_evolve' property
     *
     * @param MsgUp_HeroEvolve $value Property value
     *
     * @return null
     */
    public function setHeroEvolve(MsgUp_HeroEvolve $value)
    {
        return $this->set(self::_HERO_EVOLVE, $value);
    }

    /**
     * Returns value of '_hero_evolve' property
     *
     * @return MsgUp_HeroEvolve
     */
    public function getHeroEvolve()
    {
        return $this->get(self::_HERO_EVOLVE);
    }

    /**
     * Sets value of '_enter_act_stage' property
     *
     * @param MsgUp_EnterActStage $value Property value
     *
     * @return null
     */
    public function setEnterActStage(MsgUp_EnterActStage $value)
    {
        return $this->set(self::_ENTER_ACT_STAGE, $value);
    }

    /**
     * Returns value of '_enter_act_stage' property
     *
     * @return MsgUp_EnterActStage
     */
    public function getEnterActStage()
    {
        return $this->get(self::_ENTER_ACT_STAGE);
    }

    /**
     * Sets value of '_sync_vitality' property
     *
     * @param MsgUp_SyncVitality $value Property value
     *
     * @return null
     */
    public function setSyncVitality(MsgUp_SyncVitality $value)
    {
        return $this->set(self::_SYNC_VITALITY, $value);
    }

    /**
     * Returns value of '_sync_vitality' property
     *
     * @return MsgUp_SyncVitality
     */
    public function getSyncVitality()
    {
        return $this->get(self::_SYNC_VITALITY);
    }

    /**
     * Sets value of '_suspend_report' property
     *
     * @param MsgUp_SuspendReport $value Property value
     *
     * @return null
     */
    public function setSuspendReport(MsgUp_SuspendReport $value)
    {
        return $this->set(self::_SUSPEND_REPORT, $value);
    }

    /**
     * Returns value of '_suspend_report' property
     *
     * @return MsgUp_SuspendReport
     */
    public function getSuspendReport()
    {
        return $this->get(self::_SUSPEND_REPORT);
    }

    /**
     * Sets value of '_tutorial' property
     *
     * @param MsgUp_Tutorial $value Property value
     *
     * @return null
     */
    public function setTutorial(MsgUp_Tutorial $value)
    {
        return $this->set(self::_TUTORIAL, $value);
    }

    /**
     * Returns value of '_tutorial' property
     *
     * @return MsgUp_Tutorial
     */
    public function getTutorial()
    {
        return $this->get(self::_TUTORIAL);
    }

    /**
     * Sets value of '_ladder' property
     *
     * @param MsgUp_Ladder $value Property value
     *
     * @return null
     */
    public function setLadder(MsgUp_Ladder $value)
    {
        return $this->set(self::_LADDER, $value);
    }

    /**
     * Returns value of '_ladder' property
     *
     * @return MsgUp_Ladder
     */
    public function getLadder()
    {
        return $this->get(self::_LADDER);
    }

    /**
     * Sets value of '_set_name' property
     *
     * @param MsgUp_SetName $value Property value
     *
     * @return null
     */
    public function setSetName(MsgUp_SetName $value)
    {
        return $this->set(self::_SET_NAME, $value);
    }

    /**
     * Returns value of '_set_name' property
     *
     * @return MsgUp_SetName
     */
    public function getSetName()
    {
        return $this->get(self::_SET_NAME);
    }

    /**
     * Sets value of '_midas' property
     *
     * @param MsgUp_Midas $value Property value
     *
     * @return null
     */
    public function setMidas(MsgUp_Midas $value)
    {
        return $this->set(self::_MIDAS, $value);
    }

    /**
     * Returns value of '_midas' property
     *
     * @return MsgUp_Midas
     */
    public function getMidas()
    {
        return $this->get(self::_MIDAS);
    }

    /**
     * Sets value of '_open_shop' property
     *
     * @param MsgUp_OpenShop $value Property value
     *
     * @return null
     */
    public function setOpenShop(MsgUp_OpenShop $value)
    {
        return $this->set(self::_OPEN_SHOP, $value);
    }

    /**
     * Returns value of '_open_shop' property
     *
     * @return MsgUp_OpenShop
     */
    public function getOpenShop()
    {
        return $this->get(self::_OPEN_SHOP);
    }

    /**
     * Sets value of '_charge' property
     *
     * @param MsgUp_Charge $value Property value
     *
     * @return null
     */
    public function setCharge(MsgUp_Charge $value)
    {
        return $this->set(self::_CHARGE, $value);
    }

    /**
     * Returns value of '_charge' property
     *
     * @return MsgUp_Charge
     */
    public function getCharge()
    {
        return $this->get(self::_CHARGE);
    }

    /**
     * Sets value of '_sdk_login' property
     *
     * @param MsgUp_SdkLogin $value Property value
     *
     * @return null
     */
    public function setSdkLogin(MsgUp_SdkLogin $value)
    {
        return $this->set(self::_SDK_LOGIN, $value);
    }

    /**
     * Returns value of '_sdk_login' property
     *
     * @return MsgUp_SdkLogin
     */
    public function getSdkLogin()
    {
        return $this->get(self::_SDK_LOGIN);
    }

    /**
     * Sets value of '_set_avatar' property
     *
     * @param MsgUp_SetAvatar $value Property value
     *
     * @return null
     */
    public function setSetAvatar(MsgUp_SetAvatar $value)
    {
        return $this->set(self::_SET_AVATAR, $value);
    }

    /**
     * Returns value of '_set_avatar' property
     *
     * @return MsgUp_SetAvatar
     */
    public function getSetAvatar()
    {
        return $this->get(self::_SET_AVATAR);
    }

    /**
     * Sets value of '_ask_daily_login' property
     *
     * @param MsgUp_AskDailyLogin $value Property value
     *
     * @return null
     */
    public function setAskDailyLogin(MsgUp_AskDailyLogin $value)
    {
        return $this->set(self::_ASK_DAILY_LOGIN, $value);
    }

    /**
     * Returns value of '_ask_daily_login' property
     *
     * @return MsgUp_AskDailyLogin
     */
    public function getAskDailyLogin()
    {
        return $this->get(self::_ASK_DAILY_LOGIN);
    }

    /**
     * Sets value of '_tbc' property
     *
     * @param MsgUp_Tbc $value Property value
     *
     * @return null
     */
    public function setTbc(MsgUp_Tbc $value)
    {
        return $this->set(self::_TBC, $value);
    }

    /**
     * Returns value of '_tbc' property
     *
     * @return MsgUp_Tbc
     */
    public function getTbc()
    {
        return $this->get(self::_TBC);
    }

    /**
     * Sets value of '_get_maillist' property
     *
     * @param MsgUp_GetMaillist $value Property value
     *
     * @return null
     */
    public function setGetMaillist(MsgUp_GetMaillist $value)
    {
        return $this->set(self::_GET_MAILLIST, $value);
    }

    /**
     * Returns value of '_get_maillist' property
     *
     * @return MsgUp_GetMaillist
     */
    public function getGetMaillist()
    {
        return $this->get(self::_GET_MAILLIST);
    }

    /**
     * Sets value of '_read_mail' property
     *
     * @param MsgUp_ReadMail $value Property value
     *
     * @return null
     */
    public function setReadMail(MsgUp_ReadMail $value)
    {
        return $this->set(self::_READ_MAIL, $value);
    }

    /**
     * Returns value of '_read_mail' property
     *
     * @return MsgUp_ReadMail
     */
    public function getReadMail()
    {
        return $this->get(self::_READ_MAIL);
    }

    /**
     * Sets value of '_get_svr_time' property
     *
     * @param MsgUp_GetSvrTime $value Property value
     *
     * @return null
     */
    public function setGetSvrTime(MsgUp_GetSvrTime $value)
    {
        return $this->set(self::_GET_SVR_TIME, $value);
    }

    /**
     * Returns value of '_get_svr_time' property
     *
     * @return MsgUp_GetSvrTime
     */
    public function getGetSvrTime()
    {
        return $this->get(self::_GET_SVR_TIME);
    }

    /**
     * Sets value of '_get_vip_gift' property
     *
     * @param MsgUp_GetVipGift $value Property value
     *
     * @return null
     */
    public function setGetVipGift(MsgUp_GetVipGift $value)
    {
        return $this->set(self::_GET_VIP_GIFT, $value);
    }

    /**
     * Returns value of '_get_vip_gift' property
     *
     * @return MsgUp_GetVipGift
     */
    public function getGetVipGift()
    {
        return $this->get(self::_GET_VIP_GIFT);
    }

    /**
     * Sets value of '_important_data_md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImportantDataMd5($value)
    {
        return $this->set(self::_IMPORTANT_DATA_MD5, $value);
    }

    /**
     * Returns value of '_important_data_md5' property
     *
     * @return string
     */
    public function getImportantDataMd5()
    {
        return $this->get(self::_IMPORTANT_DATA_MD5);
    }

    /**
     * Sets value of '_chat' property
     *
     * @param MsgUp_Chat $value Property value
     *
     * @return null
     */
    public function setChat(MsgUp_Chat $value)
    {
        return $this->set(self::_CHAT, $value);
    }

    /**
     * Returns value of '_chat' property
     *
     * @return MsgUp_Chat
     */
    public function getChat()
    {
        return $this->get(self::_CHAT);
    }

    /**
     * Sets value of '_cdkey_gift' property
     *
     * @param MsgUp_CdkeyGift $value Property value
     *
     * @return null
     */
    public function setCdkeyGift(MsgUp_CdkeyGift $value)
    {
        return $this->set(self::_CDKEY_GIFT, $value);
    }

    /**
     * Returns value of '_cdkey_gift' property
     *
     * @return MsgUp_CdkeyGift
     */
    public function getCdkeyGift()
    {
        return $this->get(self::_CDKEY_GIFT);
    }

    /**
     * Sets value of '_guild' property
     *
     * @param MsgUp_Guild $value Property value
     *
     * @return null
     */
    public function setGuild(MsgUp_Guild $value)
    {
        return $this->set(self::_GUILD, $value);
    }

    /**
     * Returns value of '_guild' property
     *
     * @return MsgUp_Guild
     */
    public function getGuild()
    {
        return $this->get(self::_GUILD);
    }

    /**
     * Sets value of '_ask_magicsoul' property
     *
     * @param MsgUp_AskMagicsoul $value Property value
     *
     * @return null
     */
    public function setAskMagicsoul(MsgUp_AskMagicsoul $value)
    {
        return $this->set(self::_ASK_MAGICSOUL, $value);
    }

    /**
     * Returns value of '_ask_magicsoul' property
     *
     * @return MsgUp_AskMagicsoul
     */
    public function getAskMagicsoul()
    {
        return $this->get(self::_ASK_MAGICSOUL);
    }

    /**
     * Sets value of '_ask_activity_info' property
     *
     * @param MsgUp_AskActivityInfo $value Property value
     *
     * @return null
     */
    public function setAskActivityInfo(MsgUp_AskActivityInfo $value)
    {
        return $this->set(self::_ASK_ACTIVITY_INFO, $value);
    }

    /**
     * Returns value of '_ask_activity_info' property
     *
     * @return MsgUp_AskActivityInfo
     */
    public function getAskActivityInfo()
    {
        return $this->get(self::_ASK_ACTIVITY_INFO);
    }

    /**
     * Sets value of '_excavate' property
     *
     * @param MsgUp_Excavate $value Property value
     *
     * @return null
     */
    public function setExcavate(MsgUp_Excavate $value)
    {
        return $this->set(self::_EXCAVATE, $value);
    }

    /**
     * Returns value of '_excavate' property
     *
     * @return MsgUp_Excavate
     */
    public function getExcavate()
    {
        return $this->get(self::_EXCAVATE);
    }

    /**
     * Sets value of '_push_notify' property
     *
     * @param MsgUp_PushNotify $value Property value
     *
     * @return null
     */
    public function setPushNotify(MsgUp_PushNotify $value)
    {
        return $this->set(self::_PUSH_NOTIFY, $value);
    }

    /**
     * Returns value of '_push_notify' property
     *
     * @return MsgUp_PushNotify
     */
    public function getPushNotify()
    {
        return $this->get(self::_PUSH_NOTIFY);
    }

    /**
     * Sets value of '_system_setting' property
     *
     * @param MsgUp_SystemSetting $value Property value
     *
     * @return null
     */
    public function setSystemSetting(MsgUp_SystemSetting $value)
    {
        return $this->set(self::_SYSTEM_SETTING, $value);
    }

    /**
     * Returns value of '_system_setting' property
     *
     * @return MsgUp_SystemSetting
     */
    public function getSystemSetting()
    {
        return $this->get(self::_SYSTEM_SETTING);
    }

    /**
     * Sets value of '_query_split_data' property
     *
     * @param MsgUp_QuerySplitData $value Property value
     *
     * @return null
     */
    public function setQuerySplitData(MsgUp_QuerySplitData $value)
    {
        return $this->set(self::_QUERY_SPLIT_DATA, $value);
    }

    /**
     * Returns value of '_query_split_data' property
     *
     * @return MsgUp_QuerySplitData
     */
    public function getQuerySplitData()
    {
        return $this->get(self::_QUERY_SPLIT_DATA);
    }

    /**
     * Sets value of '_query_split_return' property
     *
     * @param MsgUp_QuerySplitReturn $value Property value
     *
     * @return null
     */
    public function setQuerySplitReturn(MsgUp_QuerySplitReturn $value)
    {
        return $this->set(self::_QUERY_SPLIT_RETURN, $value);
    }

    /**
     * Returns value of '_query_split_return' property
     *
     * @return MsgUp_QuerySplitReturn
     */
    public function getQuerySplitReturn()
    {
        return $this->get(self::_QUERY_SPLIT_RETURN);
    }

    /**
     * Sets value of '_split_hero' property
     *
     * @param MsgUp_SplitHero $value Property value
     *
     * @return null
     */
    public function setSplitHero(MsgUp_SplitHero $value)
    {
        return $this->set(self::_SPLIT_HERO, $value);
    }

    /**
     * Returns value of '_split_hero' property
     *
     * @return MsgUp_SplitHero
     */
    public function getSplitHero()
    {
        return $this->get(self::_SPLIT_HERO);
    }

    /**
     * Sets value of '_worldcup' property
     *
     * @param MsgUp_Worldcup $value Property value
     *
     * @return null
     */
    public function setWorldcup(MsgUp_Worldcup $value)
    {
        return $this->set(self::_WORLDCUP, $value);
    }

    /**
     * Returns value of '_worldcup' property
     *
     * @return MsgUp_Worldcup
     */
    public function getWorldcup()
    {
        return $this->get(self::_WORLDCUP);
    }

    /**
     * Sets value of '_report_battle' property
     *
     * @param MsgUp_ReportBattle $value Property value
     *
     * @return null
     */
    public function setReportBattle(MsgUp_ReportBattle $value)
    {
        return $this->set(self::_REPORT_BATTLE, $value);
    }

    /**
     * Returns value of '_report_battle' property
     *
     * @return MsgUp_ReportBattle
     */
    public function getReportBattle()
    {
        return $this->get(self::_REPORT_BATTLE);
    }

    /**
     * Sets value of '_query_replay' property
     *
     * @param MsgUp_QueryReplay $value Property value
     *
     * @return null
     */
    public function setQueryReplay(MsgUp_QueryReplay $value)
    {
        return $this->set(self::_QUERY_REPLAY, $value);
    }

    /**
     * Returns value of '_query_replay' property
     *
     * @return MsgUp_QueryReplay
     */
    public function getQueryReplay()
    {
        return $this->get(self::_QUERY_REPLAY);
    }

    /**
     * Sets value of '_sync_skill_stren' property
     *
     * @param MsgUp_SyncSkillStren $value Property value
     *
     * @return null
     */
    public function setSyncSkillStren(MsgUp_SyncSkillStren $value)
    {
        return $this->set(self::_SYNC_SKILL_STREN, $value);
    }

    /**
     * Returns value of '_sync_skill_stren' property
     *
     * @return MsgUp_SyncSkillStren
     */
    public function getSyncSkillStren()
    {
        return $this->get(self::_SYNC_SKILL_STREN);
    }

    /**
     * Sets value of '_query_ranklist' property
     *
     * @param MsgUp_QueryRanklist $value Property value
     *
     * @return null
     */
    public function setQueryRanklist(MsgUp_QueryRanklist $value)
    {
        return $this->set(self::_QUERY_RANKLIST, $value);
    }

    /**
     * Returns value of '_query_ranklist' property
     *
     * @return MsgUp_QueryRanklist
     */
    public function getQueryRanklist()
    {
        return $this->get(self::_QUERY_RANKLIST);
    }

    /**
     * Sets value of '_change_server' property
     *
     * @param MsgUp_ChangeServer $value Property value
     *
     * @return null
     */
    public function setChangeServer(MsgUp_ChangeServer $value)
    {
        return $this->set(self::_CHANGE_SERVER, $value);
    }

    /**
     * Returns value of '_change_server' property
     *
     * @return MsgUp_ChangeServer
     */
    public function getChangeServer()
    {
        return $this->get(self::_CHANGE_SERVER);
    }

    /**
     * Sets value of '_require_arousal' property
     *
     * @param MsgUp_RequireArousal $value Property value
     *
     * @return null
     */
    public function setRequireArousal(MsgUp_RequireArousal $value)
    {
        return $this->set(self::_REQUIRE_AROUSAL, $value);
    }

    /**
     * Returns value of '_require_arousal' property
     *
     * @return MsgUp_RequireArousal
     */
    public function getRequireArousal()
    {
        return $this->get(self::_REQUIRE_AROUSAL);
    }

    /**
     * Sets value of '_change_task_status' property
     *
     * @param MsgUp_ChangeTaskStatus $value Property value
     *
     * @return null
     */
    public function setChangeTaskStatus(MsgUp_ChangeTaskStatus $value)
    {
        return $this->set(self::_CHANGE_TASK_STATUS, $value);
    }

    /**
     * Returns value of '_change_task_status' property
     *
     * @return MsgUp_ChangeTaskStatus
     */
    public function getChangeTaskStatus()
    {
        return $this->get(self::_CHANGE_TASK_STATUS);
    }

    /**
     * Sets value of '_request_guild_log' property
     *
     * @param MsgUp_RequestGuildLog $value Property value
     *
     * @return null
     */
    public function setRequestGuildLog(MsgUp_RequestGuildLog $value)
    {
        return $this->set(self::_REQUEST_GUILD_LOG, $value);
    }

    /**
     * Returns value of '_request_guild_log' property
     *
     * @return MsgUp_RequestGuildLog
     */
    public function getRequestGuildLog()
    {
        return $this->get(self::_REQUEST_GUILD_LOG);
    }

    /**
     * Sets value of '_query_act_stage' property
     *
     * @param MsgUp_QueryActStage $value Property value
     *
     * @return null
     */
    public function setQueryActStage(MsgUp_QueryActStage $value)
    {
        return $this->set(self::_QUERY_ACT_STAGE, $value);
    }

    /**
     * Returns value of '_query_act_stage' property
     *
     * @return MsgUp_QueryActStage
     */
    public function getQueryActStage()
    {
        return $this->get(self::_QUERY_ACT_STAGE);
    }

    /**
     * Sets value of '_request_upgrade_arousal_level' property
     *
     * @param MsgUp_RequestUpgradeArousalLevel $value Property value
     *
     * @return null
     */
    public function setRequestUpgradeArousalLevel(MsgUp_RequestUpgradeArousalLevel $value)
    {
        return $this->set(self::_REQUEST_UPGRADE_AROUSAL_LEVEL, $value);
    }

    /**
     * Returns value of '_request_upgrade_arousal_level' property
     *
     * @return MsgUp_RequestUpgradeArousalLevel
     */
    public function getRequestUpgradeArousalLevel()
    {
        return $this->get(self::_REQUEST_UPGRADE_AROUSAL_LEVEL);
    }

    /**
     * Sets value of '_real_pvp' property
     *
     * @param MsgUp_RealPvp $value Property value
     *
     * @return null
     */
    public function setRealPvp(MsgUp_RealPvp $value)
    {
        return $this->set(self::_REAL_PVP, $value);
    }

    /**
     * Returns value of '_real_pvp' property
     *
     * @return MsgUp_RealPvp
     */
    public function getRealPvp()
    {
        return $this->get(self::_REAL_PVP);
    }

    /**
     * Sets value of '_ask_pred_stage' property
     *
     * @param MsgUp_AskPredStage $value Property value
     *
     * @return null
     */
    public function setAskPredStage(MsgUp_AskPredStage $value)
    {
        return $this->set(self::_ASK_PRED_STAGE, $value);
    }

    /**
     * Returns value of '_ask_pred_stage' property
     *
     * @return MsgUp_AskPredStage
     */
    public function getAskPredStage()
    {
        return $this->get(self::_ASK_PRED_STAGE);
    }

    /**
     * Sets value of '_top_arena' property
     *
     * @param MsgUp_TopArena $value Property value
     *
     * @return null
     */
    public function setTopArena(MsgUp_TopArena $value)
    {
        return $this->set(self::_TOP_ARENA, $value);
    }

    /**
     * Returns value of '_top_arena' property
     *
     * @return MsgUp_TopArena
     */
    public function getTopArena()
    {
        return $this->get(self::_TOP_ARENA);
    }

    /**
     * Sets value of '_upcoming_events' property
     *
     * @param MsgUp_UpcomingEvents $value Property value
     *
     * @return null
     */
    public function setUpcomingEvents(MsgUp_UpcomingEvents $value)
    {
        return $this->set(self::_UPCOMING_EVENTS, $value);
    }

    /**
     * Returns value of '_upcoming_events' property
     *
     * @return MsgUp_UpcomingEvents
     */
    public function getUpcomingEvents()
    {
        return $this->get(self::_UPCOMING_EVENTS);
    }

    /**
     * Sets value of '_sync_time_zone' property
     *
     * @param MsgUp_SyncTimeZone $value Property value
     *
     * @return null
     */
    public function setSyncTimeZone(MsgUp_SyncTimeZone $value)
    {
        return $this->set(self::_SYNC_TIME_ZONE, $value);
    }

    /**
     * Returns value of '_sync_time_zone' property
     *
     * @return MsgUp_SyncTimeZone
     */
    public function getSyncTimeZone()
    {
        return $this->get(self::_SYNC_TIME_ZONE);
    }

    /**
     * Sets value of '_link_device' property
     *
     * @param MsgUp_LinkDevice $value Property value
     *
     * @return null
     */
    public function setLinkDevice(MsgUp_LinkDevice $value)
    {
        return $this->set(self::_LINK_DEVICE, $value);
    }

    /**
     * Returns value of '_link_device' property
     *
     * @return MsgUp_LinkDevice
     */
    public function getLinkDevice()
    {
        return $this->get(self::_LINK_DEVICE);
    }

    /**
     * Sets value of '_move_account' property
     *
     * @param MsgUp_MoveAccount $value Property value
     *
     * @return null
     */
    public function setMoveAccount(MsgUp_MoveAccount $value)
    {
        return $this->set(self::_MOVE_ACCOUNT, $value);
    }

    /**
     * Returns value of '_move_account' property
     *
     * @return MsgUp_MoveAccount
     */
    public function getMoveAccount()
    {
        return $this->get(self::_MOVE_ACCOUNT);
    }

    /**
     * Sets value of '_player_challenge' property
     *
     * @param MsgUp_PlayerChallenge $value Property value
     *
     * @return null
     */
    public function setPlayerChallenge(MsgUp_PlayerChallenge $value)
    {
        return $this->set(self::_PLAYER_CHALLENGE, $value);
    }

    /**
     * Returns value of '_player_challenge' property
     *
     * @return MsgUp_PlayerChallenge
     */
    public function getPlayerChallenge()
    {
        return $this->get(self::_PLAYER_CHALLENGE);
    }

    /**
     * Sets value of '_ancients' property
     *
     * @param MsgUp_Ancients $value Property value
     *
     * @return null
     */
    public function setAncients(MsgUp_Ancients $value)
    {
        return $this->set(self::_ANCIENTS, $value);
    }

    /**
     * Returns value of '_ancients' property
     *
     * @return MsgUp_Ancients
     */
    public function getAncients()
    {
        return $this->get(self::_ANCIENTS);
    }
}

/**
 * region_type enum embedded in login message
 */
final class MsgUp_Login_RegionType
{
    const cn = 0;
    const tw = 1;
    const seazh = 2;
    const seaen = 3;
    const seath = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'cn' => self::cn,
            'tw' => self::tw,
            'seazh' => self::seazh,
            'seaen' => self::seaen,
            'seath' => self::seath,
        );
    }
}

/**
 * login message
 */
class MsgUp_Login extends \ProtobufMessage
{
    /* Field index constants */
    const _ACTIVE_CODE = 1;
    const _OLD_DEVICEID = 2;
    const _VERSION = 3;
    const _OS = 4;
    const _OS_VERSION = 5;
    const _DEVICE = 6;
    const _LANG = 7;
    const _REGION = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ACTIVE_CODE => array(
            'name' => '_active_code',
            'required' => false,
            'type' => 5,
        ),
        self::_OLD_DEVICEID => array(
            'name' => '_old_deviceid',
            'required' => false,
            'type' => 7,
        ),
        self::_VERSION => array(
            'name' => '_version',
            'required' => false,
            'type' => 7,
        ),
        self::_OS => array(
            'name' => '_os',
            'required' => false,
            'type' => 7,
        ),
        self::_OS_VERSION => array(
            'name' => '_os_version',
            'required' => false,
            'type' => 7,
        ),
        self::_DEVICE => array(
            'name' => '_device',
            'required' => false,
            'type' => 7,
        ),
        self::_LANG => array(
            'name' => '_lang',
            'required' => false,
            'type' => 7,
        ),
        self::_REGION => array(
            'name' => '_region',
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
        $this->values[self::_ACTIVE_CODE] = null;
        $this->values[self::_OLD_DEVICEID] = null;
        $this->values[self::_VERSION] = null;
        $this->values[self::_OS] = null;
        $this->values[self::_OS_VERSION] = null;
        $this->values[self::_DEVICE] = null;
        $this->values[self::_LANG] = null;
        $this->values[self::_REGION] = null;
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
     * Sets value of '_active_code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setActiveCode($value)
    {
        return $this->set(self::_ACTIVE_CODE, $value);
    }

    /**
     * Returns value of '_active_code' property
     *
     * @return int
     */
    public function getActiveCode()
    {
        return $this->get(self::_ACTIVE_CODE);
    }

    /**
     * Sets value of '_old_deviceid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOldDeviceid($value)
    {
        return $this->set(self::_OLD_DEVICEID, $value);
    }

    /**
     * Returns value of '_old_deviceid' property
     *
     * @return string
     */
    public function getOldDeviceid()
    {
        return $this->get(self::_OLD_DEVICEID);
    }

    /**
     * Sets value of '_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::_VERSION, $value);
    }

    /**
     * Returns value of '_version' property
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get(self::_VERSION);
    }

    /**
     * Sets value of '_os' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOs($value)
    {
        return $this->set(self::_OS, $value);
    }

    /**
     * Returns value of '_os' property
     *
     * @return string
     */
    public function getOs()
    {
        return $this->get(self::_OS);
    }

    /**
     * Sets value of '_os_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsVersion($value)
    {
        return $this->set(self::_OS_VERSION, $value);
    }

    /**
     * Returns value of '_os_version' property
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->get(self::_OS_VERSION);
    }

    /**
     * Sets value of '_device' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDevice($value)
    {
        return $this->set(self::_DEVICE, $value);
    }

    /**
     * Returns value of '_device' property
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->get(self::_DEVICE);
    }

    /**
     * Sets value of '_lang' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLang($value)
    {
        return $this->set(self::_LANG, $value);
    }

    /**
     * Returns value of '_lang' property
     *
     * @return string
     */
    public function getLang()
    {
        return $this->get(self::_LANG);
    }

    /**
     * Sets value of '_region' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRegion($value)
    {
        return $this->set(self::_REGION, $value);
    }

    /**
     * Returns value of '_region' property
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->get(self::_REGION);
    }
}

/**
 * sdk_login message
 */
class MsgUp_SdkLogin extends \ProtobufMessage
{
    /* Field index constants */
    const _SESSION_KEY = 1;
    const _PLAT_ID = 2;
    const _APP_HD = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SESSION_KEY => array(
            'name' => '_session_key',
            'required' => true,
            'type' => 7,
        ),
        self::_PLAT_ID => array(
            'name' => '_plat_id',
            'required' => true,
            'type' => 5,
        ),
        self::_APP_HD => array(
            'name' => '_app_hd',
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
        $this->values[self::_SESSION_KEY] = null;
        $this->values[self::_PLAT_ID] = null;
        $this->values[self::_APP_HD] = null;
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
     * Sets value of '_session_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSessionKey($value)
    {
        return $this->set(self::_SESSION_KEY, $value);
    }

    /**
     * Returns value of '_session_key' property
     *
     * @return string
     */
    public function getSessionKey()
    {
        return $this->get(self::_SESSION_KEY);
    }

    /**
     * Sets value of '_plat_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPlatId($value)
    {
        return $this->set(self::_PLAT_ID, $value);
    }

    /**
     * Returns value of '_plat_id' property
     *
     * @return int
     */
    public function getPlatId()
    {
        return $this->get(self::_PLAT_ID);
    }

    /**
     * Sets value of '_app_hd' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAppHd($value)
    {
        return $this->set(self::_APP_HD, $value);
    }

    /**
     * Returns value of '_app_hd' property
     *
     * @return int
     */
    public function getAppHd()
    {
        return $this->get(self::_APP_HD);
    }
}

/**
 * request_userinfo message
 */
class MsgUp_RequestUserinfo extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * enter_stage message
 */
class MsgUp_EnterStage extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * exit_stage message
 */
class MsgUp_ExitStage extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;
    const _STARS = 2;
    const _HEROES = 3;
    const _OPRATIONS = 4;
    const _MD5 = 5;
    const _SELF_DATA = 6;
    const _UNIT_BATTLE_DATA = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_STARS => array(
            'name' => '_stars',
            'required' => false,
            'type' => 5,
        ),
        self::_HEROES => array(
            'name' => '_heroes',
            'repeated' => true,
            'type' => 5,
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_MD5 => array(
            'name' => '_md5',
            'required' => false,
            'type' => 7,
        ),
        self::_SELF_DATA => array(
            'name' => '_self_data',
            'repeated' => true,
            'type' => 5,
        ),
        self::_UNIT_BATTLE_DATA => array(
            'name' => '_unit_battle_data',
            'repeated' => true,
            'type' => 'MsgUp_UnitBattleData'
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_STARS] = null;
        $this->values[self::_HEROES] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_MD5] = null;
        $this->values[self::_SELF_DATA] = array();
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
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHeroes($value)
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
     * @return int[]
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
     * @return int
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
     * Sets value of '_md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::_MD5, $value);
    }

    /**
     * Returns value of '_md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        return $this->get(self::_MD5);
    }

    /**
     * Appends value to '_self_data' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSelfData($value)
    {
        return $this->append(self::_SELF_DATA, $value);
    }

    /**
     * Clears '_self_data' list
     *
     * @return null
     */
    public function clearSelfData()
    {
        return $this->clear(self::_SELF_DATA);
    }

    /**
     * Returns '_self_data' list
     *
     * @return int[]
     */
    public function getSelfData()
    {
        return $this->get(self::_SELF_DATA);
    }

    /**
     * Returns '_self_data' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDataIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DATA));
    }

    /**
     * Returns element from '_self_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSelfDataAt($offset)
    {
        return $this->get(self::_SELF_DATA, $offset);
    }

    /**
     * Returns count of '_self_data' list
     *
     * @return int
     */
    public function getSelfDataCount()
    {
        return $this->count(self::_SELF_DATA);
    }

    /**
     * Appends value to '_unit_battle_data' list
     *
     * @param MsgUp_UnitBattleData $value Value to append
     *
     * @return null
     */
    public function appendUnitBattleData(MsgUp_UnitBattleData $value)
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
     * @return MsgUp_UnitBattleData[]
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
     * @return MsgUp_UnitBattleData
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
class MsgUp_UnitBattleData extends \ProtobufMessage
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
 * gm_cmd message
 */
class MsgUp_GmCmd extends \ProtobufMessage
{
    /* Field index constants */
    const _UNLOCK_ALL_STAGES = 1;
    const _GET_ALL_HEROES = 2;
    const _SET_HERO_INFO = 3;
    const _SET_VITALITY = 4;
    const _SET_MONEY = 5;
    const _SET_RECHARGE_SUM = 6;
    const _SET_PLAYER_LEVEL = 7;
    const _SET_PLAYER_EXP = 8;
    const _SET_ITEMS = 9;
    const _RESET_DEVICE = 10;
    const _OPEN_MYSTERY_SHOP = 11;
    const _ARCHIVE_ID = 12;
    const _RESTORE_ID = 13;
    const _RESET_SWEEP = 14;
    const _SET_DAILYLOGIN_DAYS = 15;
    const _OPEN_GUILD_STAGE = 16;
    const _SET_GUILD_ACTIVE_POINT = 17;
    const _STAGE_ID = 18;
    const _AROUSAL_NPC_EXP = 19;
    const _FINISH_HERO_TASK = 20;
    const _GET_MONTH_CARD = 21;
    const _NEW_SET_ITEMS = 22;
    const _OPEN_ANCIENTS = 23;
    const _CLOSE_ANCIENTS = 24;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UNLOCK_ALL_STAGES => array(
            'name' => '_unlock_all_stages',
            'required' => false,
            'type' => 5,
        ),
        self::_GET_ALL_HEROES => array(
            'name' => '_get_all_heroes',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_HERO_INFO => array(
            'name' => '_set_hero_info',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_SET_VITALITY => array(
            'name' => '_set_vitality',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_MONEY => array(
            'name' => '_set_money',
            'required' => false,
            'type' => 'MsgUp_SetMoney'
        ),
        self::_SET_RECHARGE_SUM => array(
            'name' => '_set_recharge_sum',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_PLAYER_LEVEL => array(
            'name' => '_set_player_level',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_PLAYER_EXP => array(
            'name' => '_set_player_exp',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_ITEMS => array(
            'name' => '_set_items',
            'repeated' => true,
            'type' => 5,
        ),
        self::_RESET_DEVICE => array(
            'name' => '_reset_device',
            'required' => false,
            'type' => 5,
        ),
        self::_OPEN_MYSTERY_SHOP => array(
            'name' => '_open_mystery_shop',
            'required' => false,
            'type' => 5,
        ),
        self::_ARCHIVE_ID => array(
            'name' => '_archive_id',
            'required' => false,
            'type' => 5,
        ),
        self::_RESTORE_ID => array(
            'name' => '_restore_id',
            'required' => false,
            'type' => 5,
        ),
        self::_RESET_SWEEP => array(
            'name' => '_reset_sweep',
            'required' => false,
            'type' => 5,
        ),
        self::_SET_DAILYLOGIN_DAYS => array(
            'name' => '_set_dailylogin_days',
            'required' => false,
            'type' => 5,
        ),
        self::_OPEN_GUILD_STAGE => array(
            'name' => '_open_guild_stage',
            'required' => false,
            'type' => 'MsgUp_OpenAllGuildStage'
        ),
        self::_SET_GUILD_ACTIVE_POINT => array(
            'name' => '_set_guild_active_point',
            'required' => false,
            'type' => 5,
        ),
        self::_STAGE_ID => array(
            'name' => '_stage_id',
            'required' => false,
            'type' => 5,
        ),
        self::_AROUSAL_NPC_EXP => array(
            'name' => '_arousal_npc_exp',
            'required' => false,
            'type' => 5,
        ),
        self::_FINISH_HERO_TASK => array(
            'name' => '_finish_hero_task',
            'required' => false,
            'type' => 5,
        ),
        self::_GET_MONTH_CARD => array(
            'name' => '_get_month_card',
            'required' => false,
            'type' => 5,
        ),
        self::_NEW_SET_ITEMS => array(
            'name' => '_new_set_items',
            'repeated' => true,
            'type' => 'MsgUp_ItemInfo'
        ),
        self::_OPEN_ANCIENTS => array(
            'name' => '_open_ancients',
            'required' => false,
            'type' => 5,
        ),
        self::_CLOSE_ANCIENTS => array(
            'name' => '_close_ancients',
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
        $this->values[self::_UNLOCK_ALL_STAGES] = null;
        $this->values[self::_GET_ALL_HEROES] = null;
        $this->values[self::_SET_HERO_INFO] = array();
        $this->values[self::_SET_VITALITY] = null;
        $this->values[self::_SET_MONEY] = null;
        $this->values[self::_SET_RECHARGE_SUM] = null;
        $this->values[self::_SET_PLAYER_LEVEL] = null;
        $this->values[self::_SET_PLAYER_EXP] = null;
        $this->values[self::_SET_ITEMS] = array();
        $this->values[self::_RESET_DEVICE] = null;
        $this->values[self::_OPEN_MYSTERY_SHOP] = null;
        $this->values[self::_ARCHIVE_ID] = null;
        $this->values[self::_RESTORE_ID] = null;
        $this->values[self::_RESET_SWEEP] = null;
        $this->values[self::_SET_DAILYLOGIN_DAYS] = null;
        $this->values[self::_OPEN_GUILD_STAGE] = null;
        $this->values[self::_SET_GUILD_ACTIVE_POINT] = null;
        $this->values[self::_STAGE_ID] = null;
        $this->values[self::_AROUSAL_NPC_EXP] = null;
        $this->values[self::_FINISH_HERO_TASK] = null;
        $this->values[self::_GET_MONTH_CARD] = null;
        $this->values[self::_NEW_SET_ITEMS] = array();
        $this->values[self::_OPEN_ANCIENTS] = null;
        $this->values[self::_CLOSE_ANCIENTS] = null;
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
     * Sets value of '_unlock_all_stages' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUnlockAllStages($value)
    {
        return $this->set(self::_UNLOCK_ALL_STAGES, $value);
    }

    /**
     * Returns value of '_unlock_all_stages' property
     *
     * @return int
     */
    public function getUnlockAllStages()
    {
        return $this->get(self::_UNLOCK_ALL_STAGES);
    }

    /**
     * Sets value of '_get_all_heroes' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGetAllHeroes($value)
    {
        return $this->set(self::_GET_ALL_HEROES, $value);
    }

    /**
     * Returns value of '_get_all_heroes' property
     *
     * @return int
     */
    public function getGetAllHeroes()
    {
        return $this->get(self::_GET_ALL_HEROES);
    }

    /**
     * Appends value to '_set_hero_info' list
     *
     * @param Msg_Hero $value Value to append
     *
     * @return null
     */
    public function appendSetHeroInfo(Msg_Hero $value)
    {
        return $this->append(self::_SET_HERO_INFO, $value);
    }

    /**
     * Clears '_set_hero_info' list
     *
     * @return null
     */
    public function clearSetHeroInfo()
    {
        return $this->clear(self::_SET_HERO_INFO);
    }

    /**
     * Returns '_set_hero_info' list
     *
     * @return Msg_Hero[]
     */
    public function getSetHeroInfo()
    {
        return $this->get(self::_SET_HERO_INFO);
    }

    /**
     * Returns '_set_hero_info' iterator
     *
     * @return ArrayIterator
     */
    public function getSetHeroInfoIterator()
    {
        return new \ArrayIterator($this->get(self::_SET_HERO_INFO));
    }

    /**
     * Returns element from '_set_hero_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msg_Hero
     */
    public function getSetHeroInfoAt($offset)
    {
        return $this->get(self::_SET_HERO_INFO, $offset);
    }

    /**
     * Returns count of '_set_hero_info' list
     *
     * @return int
     */
    public function getSetHeroInfoCount()
    {
        return $this->count(self::_SET_HERO_INFO);
    }

    /**
     * Sets value of '_set_vitality' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetVitality($value)
    {
        return $this->set(self::_SET_VITALITY, $value);
    }

    /**
     * Returns value of '_set_vitality' property
     *
     * @return int
     */
    public function getSetVitality()
    {
        return $this->get(self::_SET_VITALITY);
    }

    /**
     * Sets value of '_set_money' property
     *
     * @param MsgUp_SetMoney $value Property value
     *
     * @return null
     */
    public function setSetMoney(MsgUp_SetMoney $value)
    {
        return $this->set(self::_SET_MONEY, $value);
    }

    /**
     * Returns value of '_set_money' property
     *
     * @return MsgUp_SetMoney
     */
    public function getSetMoney()
    {
        return $this->get(self::_SET_MONEY);
    }

    /**
     * Sets value of '_set_recharge_sum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetRechargeSum($value)
    {
        return $this->set(self::_SET_RECHARGE_SUM, $value);
    }

    /**
     * Returns value of '_set_recharge_sum' property
     *
     * @return int
     */
    public function getSetRechargeSum()
    {
        return $this->get(self::_SET_RECHARGE_SUM);
    }

    /**
     * Sets value of '_set_player_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetPlayerLevel($value)
    {
        return $this->set(self::_SET_PLAYER_LEVEL, $value);
    }

    /**
     * Returns value of '_set_player_level' property
     *
     * @return int
     */
    public function getSetPlayerLevel()
    {
        return $this->get(self::_SET_PLAYER_LEVEL);
    }

    /**
     * Sets value of '_set_player_exp' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetPlayerExp($value)
    {
        return $this->set(self::_SET_PLAYER_EXP, $value);
    }

    /**
     * Returns value of '_set_player_exp' property
     *
     * @return int
     */
    public function getSetPlayerExp()
    {
        return $this->get(self::_SET_PLAYER_EXP);
    }

    /**
     * Appends value to '_set_items' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSetItems($value)
    {
        return $this->append(self::_SET_ITEMS, $value);
    }

    /**
     * Clears '_set_items' list
     *
     * @return null
     */
    public function clearSetItems()
    {
        return $this->clear(self::_SET_ITEMS);
    }

    /**
     * Returns '_set_items' list
     *
     * @return int[]
     */
    public function getSetItems()
    {
        return $this->get(self::_SET_ITEMS);
    }

    /**
     * Returns '_set_items' iterator
     *
     * @return ArrayIterator
     */
    public function getSetItemsIterator()
    {
        return new \ArrayIterator($this->get(self::_SET_ITEMS));
    }

    /**
     * Returns element from '_set_items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSetItemsAt($offset)
    {
        return $this->get(self::_SET_ITEMS, $offset);
    }

    /**
     * Returns count of '_set_items' list
     *
     * @return int
     */
    public function getSetItemsCount()
    {
        return $this->count(self::_SET_ITEMS);
    }

    /**
     * Sets value of '_reset_device' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResetDevice($value)
    {
        return $this->set(self::_RESET_DEVICE, $value);
    }

    /**
     * Returns value of '_reset_device' property
     *
     * @return int
     */
    public function getResetDevice()
    {
        return $this->get(self::_RESET_DEVICE);
    }

    /**
     * Sets value of '_open_mystery_shop' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOpenMysteryShop($value)
    {
        return $this->set(self::_OPEN_MYSTERY_SHOP, $value);
    }

    /**
     * Returns value of '_open_mystery_shop' property
     *
     * @return int
     */
    public function getOpenMysteryShop()
    {
        return $this->get(self::_OPEN_MYSTERY_SHOP);
    }

    /**
     * Sets value of '_archive_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setArchiveId($value)
    {
        return $this->set(self::_ARCHIVE_ID, $value);
    }

    /**
     * Returns value of '_archive_id' property
     *
     * @return int
     */
    public function getArchiveId()
    {
        return $this->get(self::_ARCHIVE_ID);
    }

    /**
     * Sets value of '_restore_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRestoreId($value)
    {
        return $this->set(self::_RESTORE_ID, $value);
    }

    /**
     * Returns value of '_restore_id' property
     *
     * @return int
     */
    public function getRestoreId()
    {
        return $this->get(self::_RESTORE_ID);
    }

    /**
     * Sets value of '_reset_sweep' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResetSweep($value)
    {
        return $this->set(self::_RESET_SWEEP, $value);
    }

    /**
     * Returns value of '_reset_sweep' property
     *
     * @return int
     */
    public function getResetSweep()
    {
        return $this->get(self::_RESET_SWEEP);
    }

    /**
     * Sets value of '_set_dailylogin_days' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetDailyloginDays($value)
    {
        return $this->set(self::_SET_DAILYLOGIN_DAYS, $value);
    }

    /**
     * Returns value of '_set_dailylogin_days' property
     *
     * @return int
     */
    public function getSetDailyloginDays()
    {
        return $this->get(self::_SET_DAILYLOGIN_DAYS);
    }

    /**
     * Sets value of '_open_guild_stage' property
     *
     * @param MsgUp_OpenAllGuildStage $value Property value
     *
     * @return null
     */
    public function setOpenGuildStage(MsgUp_OpenAllGuildStage $value)
    {
        return $this->set(self::_OPEN_GUILD_STAGE, $value);
    }

    /**
     * Returns value of '_open_guild_stage' property
     *
     * @return MsgUp_OpenAllGuildStage
     */
    public function getOpenGuildStage()
    {
        return $this->get(self::_OPEN_GUILD_STAGE);
    }

    /**
     * Sets value of '_set_guild_active_point' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSetGuildActivePoint($value)
    {
        return $this->set(self::_SET_GUILD_ACTIVE_POINT, $value);
    }

    /**
     * Returns value of '_set_guild_active_point' property
     *
     * @return int
     */
    public function getSetGuildActivePoint()
    {
        return $this->get(self::_SET_GUILD_ACTIVE_POINT);
    }

    /**
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }

    /**
     * Sets value of '_arousal_npc_exp' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setArousalNpcExp($value)
    {
        return $this->set(self::_AROUSAL_NPC_EXP, $value);
    }

    /**
     * Returns value of '_arousal_npc_exp' property
     *
     * @return int
     */
    public function getArousalNpcExp()
    {
        return $this->get(self::_AROUSAL_NPC_EXP);
    }

    /**
     * Sets value of '_finish_hero_task' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFinishHeroTask($value)
    {
        return $this->set(self::_FINISH_HERO_TASK, $value);
    }

    /**
     * Returns value of '_finish_hero_task' property
     *
     * @return int
     */
    public function getFinishHeroTask()
    {
        return $this->get(self::_FINISH_HERO_TASK);
    }

    /**
     * Sets value of '_get_month_card' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGetMonthCard($value)
    {
        return $this->set(self::_GET_MONTH_CARD, $value);
    }

    /**
     * Returns value of '_get_month_card' property
     *
     * @return int
     */
    public function getGetMonthCard()
    {
        return $this->get(self::_GET_MONTH_CARD);
    }

    /**
     * Appends value to '_new_set_items' list
     *
     * @param MsgUp_ItemInfo $value Value to append
     *
     * @return null
     */
    public function appendNewSetItems(MsgUp_ItemInfo $value)
    {
        return $this->append(self::_NEW_SET_ITEMS, $value);
    }

    /**
     * Clears '_new_set_items' list
     *
     * @return null
     */
    public function clearNewSetItems()
    {
        return $this->clear(self::_NEW_SET_ITEMS);
    }

    /**
     * Returns '_new_set_items' list
     *
     * @return MsgUp_ItemInfo[]
     */
    public function getNewSetItems()
    {
        return $this->get(self::_NEW_SET_ITEMS);
    }

    /**
     * Returns '_new_set_items' iterator
     *
     * @return ArrayIterator
     */
    public function getNewSetItemsIterator()
    {
        return new \ArrayIterator($this->get(self::_NEW_SET_ITEMS));
    }

    /**
     * Returns element from '_new_set_items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_ItemInfo
     */
    public function getNewSetItemsAt($offset)
    {
        return $this->get(self::_NEW_SET_ITEMS, $offset);
    }

    /**
     * Returns count of '_new_set_items' list
     *
     * @return int
     */
    public function getNewSetItemsCount()
    {
        return $this->count(self::_NEW_SET_ITEMS);
    }

    /**
     * Sets value of '_open_ancients' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOpenAncients($value)
    {
        return $this->set(self::_OPEN_ANCIENTS, $value);
    }

    /**
     * Returns value of '_open_ancients' property
     *
     * @return int
     */
    public function getOpenAncients()
    {
        return $this->get(self::_OPEN_ANCIENTS);
    }

    /**
     * Sets value of '_close_ancients' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCloseAncients($value)
    {
        return $this->set(self::_CLOSE_ANCIENTS, $value);
    }

    /**
     * Returns value of '_close_ancients' property
     *
     * @return int
     */
    public function getCloseAncients()
    {
        return $this->get(self::_CLOSE_ANCIENTS);
    }
}

/**
 * open_all_guild_stage message
 */
class MsgUp_OpenAllGuildStage extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * price_type enum embedded in set_money message
 */
final class MsgUp_SetMoney_PriceType
{
    const gold = 0;
    const diamond = 1;
    const crusadepoint = 2;
    const arenapoint = 3;
    const guildpoint = 4;
    const honourpoint = 5;

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
            'crusadepoint' => self::crusadepoint,
            'arenapoint' => self::arenapoint,
            'guildpoint' => self::guildpoint,
            'honourpoint' => self::honourpoint,
        );
    }
}

/**
 * set_money message
 */
class MsgUp_SetMoney extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _AMOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_AMOUNT => array(
            'name' => '_amount',
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_AMOUNT] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }

    /**
     * Sets value of '_amount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAmount($value)
    {
        return $this->set(self::_AMOUNT, $value);
    }

    /**
     * Returns value of '_amount' property
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->get(self::_AMOUNT);
    }
}

/**
 * hero_upgrade message
 */
class MsgUp_HeroUpgrade extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_ID => array(
            'name' => '_hero_id',
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
        $this->values[self::_HERO_ID] = null;
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
     * Sets value of '_hero_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::_HERO_ID, $value);
    }

    /**
     * Returns value of '_hero_id' property
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->get(self::_HERO_ID);
    }
}

/**
 * equip_synthesis message
 */
class MsgUp_EquipSynthesis extends \ProtobufMessage
{
    /* Field index constants */
    const _EQUIP_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_EQUIP_ID => array(
            'name' => '_equip_id',
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
        $this->values[self::_EQUIP_ID] = null;
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
     * Sets value of '_equip_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEquipId($value)
    {
        return $this->set(self::_EQUIP_ID, $value);
    }

    /**
     * Returns value of '_equip_id' property
     *
     * @return int
     */
    public function getEquipId()
    {
        return $this->get(self::_EQUIP_ID);
    }
}

/**
 * wear_equip message
 */
class MsgUp_WearEquip extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_ID = 1;
    const _ITEM_POS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_ID => array(
            'name' => '_hero_id',
            'required' => true,
            'type' => 5,
        ),
        self::_ITEM_POS => array(
            'name' => '_item_pos',
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
        $this->values[self::_HERO_ID] = null;
        $this->values[self::_ITEM_POS] = null;
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
     * Sets value of '_hero_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::_HERO_ID, $value);
    }

    /**
     * Returns value of '_hero_id' property
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->get(self::_HERO_ID);
    }

    /**
     * Sets value of '_item_pos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setItemPos($value)
    {
        return $this->set(self::_ITEM_POS, $value);
    }

    /**
     * Returns value of '_item_pos' property
     *
     * @return int
     */
    public function getItemPos()
    {
        return $this->get(self::_ITEM_POS);
    }
}

/**
 * sync_vitality message
 */
class MsgUp_SyncVitality extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * type enum embedded in buy_vitality message
 */
final class MsgUp_BuyVitality_Type
{
    const shadow_rune = 1;
    const vitality = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'shadow_rune' => self::shadow_rune,
            'vitality' => self::vitality,
        );
    }
}

/**
 * buy_vitality message
 */
class MsgUp_BuyVitality extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
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
        $this->values[self::_TYPE] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }
}

/**
 * consume_item message
 */
class MsgUp_ConsumeItem extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_ID = 1;
    const _ITEM_ID = 2;
    const _NEW_ITEM_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_ID => array(
            'name' => '_hero_id',
            'required' => false,
            'type' => 5,
        ),
        self::_ITEM_ID => array(
            'name' => '_item_id',
            'required' => false,
            'type' => 5,
        ),
        self::_NEW_ITEM_ID => array(
            'name' => '_new_item_id',
            'required' => false,
            'type' => 'MsgUp_ItemInfo'
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
        $this->values[self::_HERO_ID] = null;
        $this->values[self::_ITEM_ID] = null;
        $this->values[self::_NEW_ITEM_ID] = null;
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
     * Sets value of '_hero_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::_HERO_ID, $value);
    }

    /**
     * Returns value of '_hero_id' property
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->get(self::_HERO_ID);
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
     * Sets value of '_new_item_id' property
     *
     * @param MsgUp_ItemInfo $value Property value
     *
     * @return null
     */
    public function setNewItemId(MsgUp_ItemInfo $value)
    {
        return $this->set(self::_NEW_ITEM_ID, $value);
    }

    /**
     * Returns value of '_new_item_id' property
     *
     * @return MsgUp_ItemInfo
     */
    public function getNewItemId()
    {
        return $this->get(self::_NEW_ITEM_ID);
    }
}

/**
 * rtype enum embedded in shop_refresh message
 */
final class MsgUp_ShopRefresh_Rtype
{
    const sync = 0;
    const auto_refresh = 1;
    const manual_refresh = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'sync' => self::sync,
            'auto_refresh' => self::auto_refresh,
            'manual_refresh' => self::manual_refresh,
        );
    }
}

/**
 * shop_refresh message
 */
class MsgUp_ShopRefresh extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _SHOP_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'default' => MsgUp_ShopRefresh_Rtype::sync, 
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_SHOP_ID => array(
            'name' => '_shop_id',
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_SHOP_ID] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }

    /**
     * Sets value of '_shop_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setShopId($value)
    {
        return $this->set(self::_SHOP_ID, $value);
    }

    /**
     * Returns value of '_shop_id' property
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->get(self::_SHOP_ID);
    }
}

/**
 * shop_consume message
 */
class MsgUp_ShopConsume extends \ProtobufMessage
{
    /* Field index constants */
    const _SID = 1;
    const _SLOTID = 2;
    const _AMOUNT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SID => array(
            'name' => '_sid',
            'required' => true,
            'type' => 5,
        ),
        self::_SLOTID => array(
            'name' => '_slotid',
            'required' => true,
            'type' => 5,
        ),
        self::_AMOUNT => array(
            'name' => '_amount',
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
        $this->values[self::_SID] = null;
        $this->values[self::_SLOTID] = null;
        $this->values[self::_AMOUNT] = null;
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
     * Sets value of '_sid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSid($value)
    {
        return $this->set(self::_SID, $value);
    }

    /**
     * Returns value of '_sid' property
     *
     * @return int
     */
    public function getSid()
    {
        return $this->get(self::_SID);
    }

    /**
     * Sets value of '_slotid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSlotid($value)
    {
        return $this->set(self::_SLOTID, $value);
    }

    /**
     * Returns value of '_slotid' property
     *
     * @return int
     */
    public function getSlotid()
    {
        return $this->get(self::_SLOTID);
    }

    /**
     * Sets value of '_amount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAmount($value)
    {
        return $this->set(self::_AMOUNT, $value);
    }

    /**
     * Returns value of '_amount' property
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->get(self::_AMOUNT);
    }
}

/**
 * skill_levelup message
 */
class MsgUp_SkillLevelup extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROID = 1;
    const _ORDER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROID => array(
            'name' => '_heroid',
            'required' => true,
            'type' => 5,
        ),
        self::_ORDER => array(
            'name' => '_order',
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
        $this->values[self::_HEROID] = null;
        $this->values[self::_ORDER] = array();
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
     * Appends value to '_order' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendOrder($value)
    {
        return $this->append(self::_ORDER, $value);
    }

    /**
     * Clears '_order' list
     *
     * @return null
     */
    public function clearOrder()
    {
        return $this->clear(self::_ORDER);
    }

    /**
     * Returns '_order' list
     *
     * @return int[]
     */
    public function getOrder()
    {
        return $this->get(self::_ORDER);
    }

    /**
     * Returns '_order' iterator
     *
     * @return ArrayIterator
     */
    public function getOrderIterator()
    {
        return new \ArrayIterator($this->get(self::_ORDER));
    }

    /**
     * Returns element from '_order' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getOrderAt($offset)
    {
        return $this->get(self::_ORDER, $offset);
    }

    /**
     * Returns count of '_order' list
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->count(self::_ORDER);
    }
}

/**
 * sell_item message
 */
class MsgUp_SellItem extends \ProtobufMessage
{
    /* Field index constants */
    const _ITEM = 1;
    const _NEW_ITEM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ITEM => array(
            'name' => '_item',
            'repeated' => true,
            'type' => 5,
        ),
        self::_NEW_ITEM => array(
            'name' => '_new_item',
            'repeated' => true,
            'type' => 'MsgUp_ItemInfo'
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
        $this->values[self::_ITEM] = array();
        $this->values[self::_NEW_ITEM] = array();
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
     * Appends value to '_item' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendItem($value)
    {
        return $this->append(self::_ITEM, $value);
    }

    /**
     * Clears '_item' list
     *
     * @return null
     */
    public function clearItem()
    {
        return $this->clear(self::_ITEM);
    }

    /**
     * Returns '_item' list
     *
     * @return int[]
     */
    public function getItem()
    {
        return $this->get(self::_ITEM);
    }

    /**
     * Returns '_item' iterator
     *
     * @return ArrayIterator
     */
    public function getItemIterator()
    {
        return new \ArrayIterator($this->get(self::_ITEM));
    }

    /**
     * Returns element from '_item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getItemAt($offset)
    {
        return $this->get(self::_ITEM, $offset);
    }

    /**
     * Returns count of '_item' list
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->count(self::_ITEM);
    }

    /**
     * Appends value to '_new_item' list
     *
     * @param MsgUp_ItemInfo $value Value to append
     *
     * @return null
     */
    public function appendNewItem(MsgUp_ItemInfo $value)
    {
        return $this->append(self::_NEW_ITEM, $value);
    }

    /**
     * Clears '_new_item' list
     *
     * @return null
     */
    public function clearNewItem()
    {
        return $this->clear(self::_NEW_ITEM);
    }

    /**
     * Returns '_new_item' list
     *
     * @return MsgUp_ItemInfo[]
     */
    public function getNewItem()
    {
        return $this->get(self::_NEW_ITEM);
    }

    /**
     * Returns '_new_item' iterator
     *
     * @return ArrayIterator
     */
    public function getNewItemIterator()
    {
        return new \ArrayIterator($this->get(self::_NEW_ITEM));
    }

    /**
     * Returns element from '_new_item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_ItemInfo
     */
    public function getNewItemAt($offset)
    {
        return $this->get(self::_NEW_ITEM, $offset);
    }

    /**
     * Returns count of '_new_item' list
     *
     * @return int
     */
    public function getNewItemCount()
    {
        return $this->count(self::_NEW_ITEM);
    }
}

/**
 * fragment_compose message
 */
class MsgUp_FragmentCompose extends \ProtobufMessage
{
    /* Field index constants */
    const _FRAGMENT = 1;
    const _FRAG_AMOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_FRAGMENT => array(
            'name' => '_fragment',
            'required' => true,
            'type' => 5,
        ),
        self::_FRAG_AMOUNT => array(
            'name' => '_frag_amount',
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
        $this->values[self::_FRAGMENT] = null;
        $this->values[self::_FRAG_AMOUNT] = null;
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
     * Sets value of '_fragment' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFragment($value)
    {
        return $this->set(self::_FRAGMENT, $value);
    }

    /**
     * Returns value of '_fragment' property
     *
     * @return int
     */
    public function getFragment()
    {
        return $this->get(self::_FRAGMENT);
    }

    /**
     * Sets value of '_frag_amount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFragAmount($value)
    {
        return $this->set(self::_FRAG_AMOUNT, $value);
    }

    /**
     * Returns value of '_frag_amount' property
     *
     * @return int
     */
    public function getFragAmount()
    {
        return $this->get(self::_FRAG_AMOUNT);
    }
}

/**
 * OP_TYPE enum embedded in hero_equip_upgrade message
 */
final class MsgUp_HeroEquipUpgrade_OPTYPE
{
    const normal = 1;
    const boss = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'normal' => self::normal,
            'boss' => self::boss,
        );
    }
}

/**
 * hero_equip_upgrade message
 */
class MsgUp_HeroEquipUpgrade extends \ProtobufMessage
{
    /* Field index constants */
    const _OP_TYPE = 1;
    const _HEROID = 2;
    const _SLOT = 3;
    const _MATERIALS = 4;
    const _NEW_MATERIALS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OP_TYPE => array(
            'default' => MsgUp_HeroEquipUpgrade_OPTYPE::normal, 
            'name' => '_op_type',
            'required' => true,
            'type' => 5,
        ),
        self::_HEROID => array(
            'name' => '_heroid',
            'required' => true,
            'type' => 5,
        ),
        self::_SLOT => array(
            'name' => '_slot',
            'required' => true,
            'type' => 5,
        ),
        self::_MATERIALS => array(
            'name' => '_materials',
            'repeated' => true,
            'type' => 5,
        ),
        self::_NEW_MATERIALS => array(
            'name' => '_new_materials',
            'repeated' => true,
            'type' => 'MsgUp_ItemInfo'
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
        $this->values[self::_OP_TYPE] = null;
        $this->values[self::_HEROID] = null;
        $this->values[self::_SLOT] = null;
        $this->values[self::_MATERIALS] = array();
        $this->values[self::_NEW_MATERIALS] = array();
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
     * Sets value of '_op_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOpType($value)
    {
        return $this->set(self::_OP_TYPE, $value);
    }

    /**
     * Returns value of '_op_type' property
     *
     * @return int
     */
    public function getOpType()
    {
        return $this->get(self::_OP_TYPE);
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
     * Sets value of '_slot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSlot($value)
    {
        return $this->set(self::_SLOT, $value);
    }

    /**
     * Returns value of '_slot' property
     *
     * @return int
     */
    public function getSlot()
    {
        return $this->get(self::_SLOT);
    }

    /**
     * Appends value to '_materials' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendMaterials($value)
    {
        return $this->append(self::_MATERIALS, $value);
    }

    /**
     * Clears '_materials' list
     *
     * @return null
     */
    public function clearMaterials()
    {
        return $this->clear(self::_MATERIALS);
    }

    /**
     * Returns '_materials' list
     *
     * @return int[]
     */
    public function getMaterials()
    {
        return $this->get(self::_MATERIALS);
    }

    /**
     * Returns '_materials' iterator
     *
     * @return ArrayIterator
     */
    public function getMaterialsIterator()
    {
        return new \ArrayIterator($this->get(self::_MATERIALS));
    }

    /**
     * Returns element from '_materials' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getMaterialsAt($offset)
    {
        return $this->get(self::_MATERIALS, $offset);
    }

    /**
     * Returns count of '_materials' list
     *
     * @return int
     */
    public function getMaterialsCount()
    {
        return $this->count(self::_MATERIALS);
    }

    /**
     * Appends value to '_new_materials' list
     *
     * @param MsgUp_ItemInfo $value Value to append
     *
     * @return null
     */
    public function appendNewMaterials(MsgUp_ItemInfo $value)
    {
        return $this->append(self::_NEW_MATERIALS, $value);
    }

    /**
     * Clears '_new_materials' list
     *
     * @return null
     */
    public function clearNewMaterials()
    {
        return $this->clear(self::_NEW_MATERIALS);
    }

    /**
     * Returns '_new_materials' list
     *
     * @return MsgUp_ItemInfo[]
     */
    public function getNewMaterials()
    {
        return $this->get(self::_NEW_MATERIALS);
    }

    /**
     * Returns '_new_materials' iterator
     *
     * @return ArrayIterator
     */
    public function getNewMaterialsIterator()
    {
        return new \ArrayIterator($this->get(self::_NEW_MATERIALS));
    }

    /**
     * Returns element from '_new_materials' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_ItemInfo
     */
    public function getNewMaterialsAt($offset)
    {
        return $this->get(self::_NEW_MATERIALS, $offset);
    }

    /**
     * Returns count of '_new_materials' list
     *
     * @return int
     */
    public function getNewMaterialsCount()
    {
        return $this->count(self::_NEW_MATERIALS);
    }
}

/**
 * tutorial message
 */
class MsgUp_Tutorial extends \ProtobufMessage
{
    /* Field index constants */
    const _RECORD = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RECORD => array(
            'name' => '_record',
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
        $this->values[self::_RECORD] = array();
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
     * Appends value to '_record' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendRecord($value)
    {
        return $this->append(self::_RECORD, $value);
    }

    /**
     * Clears '_record' list
     *
     * @return null
     */
    public function clearRecord()
    {
        return $this->clear(self::_RECORD);
    }

    /**
     * Returns '_record' list
     *
     * @return int[]
     */
    public function getRecord()
    {
        return $this->get(self::_RECORD);
    }

    /**
     * Returns '_record' iterator
     *
     * @return ArrayIterator
     */
    public function getRecordIterator()
    {
        return new \ArrayIterator($this->get(self::_RECORD));
    }

    /**
     * Returns element from '_record' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getRecordAt($offset)
    {
        return $this->get(self::_RECORD, $offset);
    }

    /**
     * Returns count of '_record' list
     *
     * @return int
     */
    public function getRecordCount()
    {
        return $this->count(self::_RECORD);
    }
}

/**
 * trigger_task message
 */
class MsgUp_TriggerTask extends \ProtobufMessage
{
    /* Field index constants */
    const _TASK = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TASK => array(
            'name' => '_task',
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
        $this->values[self::_TASK] = array();
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
     * Appends value to '_task' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendTask($value)
    {
        return $this->append(self::_TASK, $value);
    }

    /**
     * Clears '_task' list
     *
     * @return null
     */
    public function clearTask()
    {
        return $this->clear(self::_TASK);
    }

    /**
     * Returns '_task' list
     *
     * @return int[]
     */
    public function getTask()
    {
        return $this->get(self::_TASK);
    }

    /**
     * Returns '_task' iterator
     *
     * @return ArrayIterator
     */
    public function getTaskIterator()
    {
        return new \ArrayIterator($this->get(self::_TASK));
    }

    /**
     * Returns element from '_task' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getTaskAt($offset)
    {
        return $this->get(self::_TASK, $offset);
    }

    /**
     * Returns count of '_task' list
     *
     * @return int
     */
    public function getTaskCount()
    {
        return $this->count(self::_TASK);
    }
}

/**
 * require_rewards message
 */
class MsgUp_RequireRewards extends \ProtobufMessage
{
    /* Field index constants */
    const _LINE = 1;
    const _ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_LINE => array(
            'name' => '_line',
            'required' => true,
            'type' => 5,
        ),
        self::_ID => array(
            'name' => '_id',
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
        $this->values[self::_LINE] = null;
        $this->values[self::_ID] = null;
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
     * Sets value of '_line' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLine($value)
    {
        return $this->set(self::_LINE, $value);
    }

    /**
     * Returns value of '_line' property
     *
     * @return int
     */
    public function getLine()
    {
        return $this->get(self::_LINE);
    }

    /**
     * Sets value of '_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }
}

/**
 * change_task_status message
 */
class MsgUp_ChangeTaskStatus extends \ProtobufMessage
{
    /* Field index constants */
    const _LINE = 1;
    const _ID = 2;
    const _OPERATION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_LINE => array(
            'name' => '_line',
            'required' => true,
            'type' => 5,
        ),
        self::_ID => array(
            'name' => '_id',
            'required' => true,
            'type' => 5,
        ),
        self::_OPERATION => array(
            'name' => '_operation',
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
        $this->values[self::_LINE] = null;
        $this->values[self::_ID] = null;
        $this->values[self::_OPERATION] = null;
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
     * Sets value of '_line' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLine($value)
    {
        return $this->set(self::_LINE, $value);
    }

    /**
     * Returns value of '_line' property
     *
     * @return int
     */
    public function getLine()
    {
        return $this->get(self::_LINE);
    }

    /**
     * Sets value of '_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }

    /**
     * Sets value of '_operation' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOperation($value)
    {
        return $this->set(self::_OPERATION, $value);
    }

    /**
     * Returns value of '_operation' property
     *
     * @return int
     */
    public function getOperation()
    {
        return $this->get(self::_OPERATION);
    }
}

/**
 * trigger_job message
 */
class MsgUp_TriggerJob extends \ProtobufMessage
{
    /* Field index constants */
    const _JOBS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_JOBS => array(
            'name' => '_jobs',
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
        $this->values[self::_JOBS] = array();
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
     * Appends value to '_jobs' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendJobs($value)
    {
        return $this->append(self::_JOBS, $value);
    }

    /**
     * Clears '_jobs' list
     *
     * @return null
     */
    public function clearJobs()
    {
        return $this->clear(self::_JOBS);
    }

    /**
     * Returns '_jobs' list
     *
     * @return int[]
     */
    public function getJobs()
    {
        return $this->get(self::_JOBS);
    }

    /**
     * Returns '_jobs' iterator
     *
     * @return ArrayIterator
     */
    public function getJobsIterator()
    {
        return new \ArrayIterator($this->get(self::_JOBS));
    }

    /**
     * Returns element from '_jobs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getJobsAt($offset)
    {
        return $this->get(self::_JOBS, $offset);
    }

    /**
     * Returns count of '_jobs' list
     *
     * @return int
     */
    public function getJobsCount()
    {
        return $this->count(self::_JOBS);
    }
}

/**
 * job_rewards message
 */
class MsgUp_JobRewards extends \ProtobufMessage
{
    /* Field index constants */
    const _JOB = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_JOB => array(
            'name' => '_job',
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
        $this->values[self::_JOB] = null;
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
     * Sets value of '_job' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setJob($value)
    {
        return $this->set(self::_JOB, $value);
    }

    /**
     * Returns value of '_job' property
     *
     * @return int
     */
    public function getJob()
    {
        return $this->get(self::_JOB);
    }
}

/**
 * suspend_report message
 */
class MsgUp_SuspendReport extends \ProtobufMessage
{
    /* Field index constants */
    const _GAMETIME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_GAMETIME => array(
            'name' => '_gametime',
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
        $this->values[self::_GAMETIME] = null;
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
     * Sets value of '_gametime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGametime($value)
    {
        return $this->set(self::_GAMETIME, $value);
    }

    /**
     * Returns value of '_gametime' property
     *
     * @return int
     */
    public function getGametime()
    {
        return $this->get(self::_GAMETIME);
    }
}

/**
 * rtype enum embedded in reset_elite message
 */
final class MsgUp_ResetElite_Rtype
{
    const daily_free = 0;
    const vip_reset = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'daily_free' => self::daily_free,
            'vip_reset' => self::vip_reset,
        );
    }
}

/**
 * reset_elite message
 */
class MsgUp_ResetElite extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _STAGEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'default' => MsgUp_ResetElite_Rtype::daily_free, 
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_STAGEID => array(
            'name' => '_stageid',
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_STAGEID] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
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
}

/**
 * rtype enum embedded in sweep_stage message
 */
final class MsgUp_SweepStage_Rtype
{
    const sweep_with_ticket = 0;
    const sweep_with_rmb = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'sweep_with_ticket' => self::sweep_with_ticket,
            'sweep_with_rmb' => self::sweep_with_rmb,
        );
    }
}

/**
 * sweep_stage message
 */
class MsgUp_SweepStage extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _STAGEID = 2;
    const _TIMES = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_STAGEID => array(
            'name' => '_stageid',
            'required' => true,
            'type' => 5,
        ),
        self::_TIMES => array(
            'name' => '_times',
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_STAGEID] = null;
        $this->values[self::_TIMES] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
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
     * Sets value of '_times' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTimes($value)
    {
        return $this->set(self::_TIMES, $value);
    }

    /**
     * Returns value of '_times' property
     *
     * @return int
     */
    public function getTimes()
    {
        return $this->get(self::_TIMES);
    }
}

/**
 * buy_skill_stren_point message
 */
class MsgUp_BuySkillStrenPoint extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * ask_magicsoul message
 */
class MsgUp_AskMagicsoul extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * draw_type enum embedded in tavern_draw message
 */
final class MsgUp_TavernDraw_DrawType
{
    const single = 0;
    const combo = 1;
    const stone = 3;
    const free = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'single' => self::single,
            'combo' => self::combo,
            'stone' => self::stone,
            'free' => self::free,
        );
    }
}

/**
 * box_type enum embedded in tavern_draw message
 */
final class MsgUp_TavernDraw_BoxType
{
    const green = 1;
    const blue = 2;
    const purple = 3;
    const magicsoul = 4;
    const stone_green = 5;
    const stone_blue = 6;
    const stone_purple = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'green' => self::green,
            'blue' => self::blue,
            'purple' => self::purple,
            'magicsoul' => self::magicsoul,
            'stone_green' => self::stone_green,
            'stone_blue' => self::stone_blue,
            'stone_purple' => self::stone_purple,
        );
    }
}

/**
 * tavern_draw message
 */
class MsgUp_TavernDraw extends \ProtobufMessage
{
    /* Field index constants */
    const _DRAW_TYPE = 1;
    const _BOX_TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_DRAW_TYPE => array(
            'default' => MsgUp_TavernDraw_DrawType::single, 
            'name' => '_draw_type',
            'required' => true,
            'type' => 5,
        ),
        self::_BOX_TYPE => array(
            'default' => MsgUp_TavernDraw_BoxType::green, 
            'name' => '_box_type',
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
        $this->values[self::_DRAW_TYPE] = null;
        $this->values[self::_BOX_TYPE] = null;
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
     * Sets value of '_draw_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDrawType($value)
    {
        return $this->set(self::_DRAW_TYPE, $value);
    }

    /**
     * Returns value of '_draw_type' property
     *
     * @return int
     */
    public function getDrawType()
    {
        return $this->get(self::_DRAW_TYPE);
    }

    /**
     * Sets value of '_box_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBoxType($value)
    {
        return $this->set(self::_BOX_TYPE, $value);
    }

    /**
     * Returns value of '_box_type' property
     *
     * @return int
     */
    public function getBoxType()
    {
        return $this->get(self::_BOX_TYPE);
    }
}

/**
 * hero_evolve message
 */
class MsgUp_HeroEvolve extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROID => array(
            'name' => '_heroid',
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
        $this->values[self::_HEROID] = null;
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
}

/**
 * enter_act_stage message
 */
class MsgUp_EnterActStage extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_GROUP = 1;
    const _STAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_GROUP => array(
            'name' => '_stage_group',
            'required' => true,
            'type' => 5,
        ),
        self::_STAGE => array(
            'name' => '_stage',
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
        $this->values[self::_STAGE_GROUP] = null;
        $this->values[self::_STAGE] = null;
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
     * Sets value of '_stage_group' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageGroup($value)
    {
        return $this->set(self::_STAGE_GROUP, $value);
    }

    /**
     * Returns value of '_stage_group' property
     *
     * @return int
     */
    public function getStageGroup()
    {
        return $this->get(self::_STAGE_GROUP);
    }

    /**
     * Sets value of '_stage' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStage($value)
    {
        return $this->set(self::_STAGE, $value);
    }

    /**
     * Returns value of '_stage' property
     *
     * @return int
     */
    public function getStage()
    {
        return $this->get(self::_STAGE);
    }
}

/**
 * ladder message
 */
class MsgUp_Ladder extends \ProtobufMessage
{
    /* Field index constants */
    const _OPEN_PANEL = 1;
    const _APPLY_OPPONENT = 2;
    const _START_BATTLE = 3;
    const _END_BATTLE = 4;
    const _SET_LINEUP = 5;
    const _QUERY_RECORDS = 6;
    const _QUERY_REPLAY = 7;
    const _QUERY_RANKBOARD = 8;
    const _QUERY_OPPO = 9;
    const _CLEAR_BATTLE_CD = 10;
    const _DRAW_RANK_REWARD = 11;
    const _BUY_BATTLE_CHANCE = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPEN_PANEL => array(
            'name' => '_open_panel',
            'required' => false,
            'type' => 'MsgUp_OpenPanel'
        ),
        self::_APPLY_OPPONENT => array(
            'name' => '_apply_opponent',
            'required' => false,
            'type' => 'MsgUp_ApplyOpponent'
        ),
        self::_START_BATTLE => array(
            'name' => '_start_battle',
            'required' => false,
            'type' => 'MsgUp_StartBattle'
        ),
        self::_END_BATTLE => array(
            'name' => '_end_battle',
            'required' => false,
            'type' => 'MsgUp_EndBattle'
        ),
        self::_SET_LINEUP => array(
            'name' => '_set_lineup',
            'required' => false,
            'type' => 'MsgUp_SetLineup'
        ),
        self::_QUERY_RECORDS => array(
            'name' => '_query_records',
            'required' => false,
            'type' => 'MsgUp_QueryRecords'
        ),
        self::_QUERY_REPLAY => array(
            'name' => '_query_replay',
            'required' => false,
            'type' => 'MsgUp_QueryReplay'
        ),
        self::_QUERY_RANKBOARD => array(
            'name' => '_query_rankboard',
            'required' => false,
            'type' => 'MsgUp_QueryRankboard'
        ),
        self::_QUERY_OPPO => array(
            'name' => '_query_oppo',
            'required' => false,
            'type' => 'MsgUp_QueryOppoInfo'
        ),
        self::_CLEAR_BATTLE_CD => array(
            'name' => '_clear_battle_cd',
            'required' => false,
            'type' => 'MsgUp_ClearBattleCd'
        ),
        self::_DRAW_RANK_REWARD => array(
            'name' => '_draw_rank_reward',
            'required' => false,
            'type' => 'MsgUp_DrawRankReward'
        ),
        self::_BUY_BATTLE_CHANCE => array(
            'name' => '_buy_battle_chance',
            'required' => false,
            'type' => 'MsgUp_BuyBattleChance'
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
        $this->values[self::_OPEN_PANEL] = null;
        $this->values[self::_APPLY_OPPONENT] = null;
        $this->values[self::_START_BATTLE] = null;
        $this->values[self::_END_BATTLE] = null;
        $this->values[self::_SET_LINEUP] = null;
        $this->values[self::_QUERY_RECORDS] = null;
        $this->values[self::_QUERY_REPLAY] = null;
        $this->values[self::_QUERY_RANKBOARD] = null;
        $this->values[self::_QUERY_OPPO] = null;
        $this->values[self::_CLEAR_BATTLE_CD] = null;
        $this->values[self::_DRAW_RANK_REWARD] = null;
        $this->values[self::_BUY_BATTLE_CHANCE] = null;
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
     * Sets value of '_open_panel' property
     *
     * @param MsgUp_OpenPanel $value Property value
     *
     * @return null
     */
    public function setOpenPanel(MsgUp_OpenPanel $value)
    {
        return $this->set(self::_OPEN_PANEL, $value);
    }

    /**
     * Returns value of '_open_panel' property
     *
     * @return MsgUp_OpenPanel
     */
    public function getOpenPanel()
    {
        return $this->get(self::_OPEN_PANEL);
    }

    /**
     * Sets value of '_apply_opponent' property
     *
     * @param MsgUp_ApplyOpponent $value Property value
     *
     * @return null
     */
    public function setApplyOpponent(MsgUp_ApplyOpponent $value)
    {
        return $this->set(self::_APPLY_OPPONENT, $value);
    }

    /**
     * Returns value of '_apply_opponent' property
     *
     * @return MsgUp_ApplyOpponent
     */
    public function getApplyOpponent()
    {
        return $this->get(self::_APPLY_OPPONENT);
    }

    /**
     * Sets value of '_start_battle' property
     *
     * @param MsgUp_StartBattle $value Property value
     *
     * @return null
     */
    public function setStartBattle(MsgUp_StartBattle $value)
    {
        return $this->set(self::_START_BATTLE, $value);
    }

    /**
     * Returns value of '_start_battle' property
     *
     * @return MsgUp_StartBattle
     */
    public function getStartBattle()
    {
        return $this->get(self::_START_BATTLE);
    }

    /**
     * Sets value of '_end_battle' property
     *
     * @param MsgUp_EndBattle $value Property value
     *
     * @return null
     */
    public function setEndBattle(MsgUp_EndBattle $value)
    {
        return $this->set(self::_END_BATTLE, $value);
    }

    /**
     * Returns value of '_end_battle' property
     *
     * @return MsgUp_EndBattle
     */
    public function getEndBattle()
    {
        return $this->get(self::_END_BATTLE);
    }

    /**
     * Sets value of '_set_lineup' property
     *
     * @param MsgUp_SetLineup $value Property value
     *
     * @return null
     */
    public function setSetLineup(MsgUp_SetLineup $value)
    {
        return $this->set(self::_SET_LINEUP, $value);
    }

    /**
     * Returns value of '_set_lineup' property
     *
     * @return MsgUp_SetLineup
     */
    public function getSetLineup()
    {
        return $this->get(self::_SET_LINEUP);
    }

    /**
     * Sets value of '_query_records' property
     *
     * @param MsgUp_QueryRecords $value Property value
     *
     * @return null
     */
    public function setQueryRecords(MsgUp_QueryRecords $value)
    {
        return $this->set(self::_QUERY_RECORDS, $value);
    }

    /**
     * Returns value of '_query_records' property
     *
     * @return MsgUp_QueryRecords
     */
    public function getQueryRecords()
    {
        return $this->get(self::_QUERY_RECORDS);
    }

    /**
     * Sets value of '_query_replay' property
     *
     * @param MsgUp_QueryReplay $value Property value
     *
     * @return null
     */
    public function setQueryReplay(MsgUp_QueryReplay $value)
    {
        return $this->set(self::_QUERY_REPLAY, $value);
    }

    /**
     * Returns value of '_query_replay' property
     *
     * @return MsgUp_QueryReplay
     */
    public function getQueryReplay()
    {
        return $this->get(self::_QUERY_REPLAY);
    }

    /**
     * Sets value of '_query_rankboard' property
     *
     * @param MsgUp_QueryRankboard $value Property value
     *
     * @return null
     */
    public function setQueryRankboard(MsgUp_QueryRankboard $value)
    {
        return $this->set(self::_QUERY_RANKBOARD, $value);
    }

    /**
     * Returns value of '_query_rankboard' property
     *
     * @return MsgUp_QueryRankboard
     */
    public function getQueryRankboard()
    {
        return $this->get(self::_QUERY_RANKBOARD);
    }

    /**
     * Sets value of '_query_oppo' property
     *
     * @param MsgUp_QueryOppoInfo $value Property value
     *
     * @return null
     */
    public function setQueryOppo(MsgUp_QueryOppoInfo $value)
    {
        return $this->set(self::_QUERY_OPPO, $value);
    }

    /**
     * Returns value of '_query_oppo' property
     *
     * @return MsgUp_QueryOppoInfo
     */
    public function getQueryOppo()
    {
        return $this->get(self::_QUERY_OPPO);
    }

    /**
     * Sets value of '_clear_battle_cd' property
     *
     * @param MsgUp_ClearBattleCd $value Property value
     *
     * @return null
     */
    public function setClearBattleCd(MsgUp_ClearBattleCd $value)
    {
        return $this->set(self::_CLEAR_BATTLE_CD, $value);
    }

    /**
     * Returns value of '_clear_battle_cd' property
     *
     * @return MsgUp_ClearBattleCd
     */
    public function getClearBattleCd()
    {
        return $this->get(self::_CLEAR_BATTLE_CD);
    }

    /**
     * Sets value of '_draw_rank_reward' property
     *
     * @param MsgUp_DrawRankReward $value Property value
     *
     * @return null
     */
    public function setDrawRankReward(MsgUp_DrawRankReward $value)
    {
        return $this->set(self::_DRAW_RANK_REWARD, $value);
    }

    /**
     * Returns value of '_draw_rank_reward' property
     *
     * @return MsgUp_DrawRankReward
     */
    public function getDrawRankReward()
    {
        return $this->get(self::_DRAW_RANK_REWARD);
    }

    /**
     * Sets value of '_buy_battle_chance' property
     *
     * @param MsgUp_BuyBattleChance $value Property value
     *
     * @return null
     */
    public function setBuyBattleChance(MsgUp_BuyBattleChance $value)
    {
        return $this->set(self::_BUY_BATTLE_CHANCE, $value);
    }

    /**
     * Returns value of '_buy_battle_chance' property
     *
     * @return MsgUp_BuyBattleChance
     */
    public function getBuyBattleChance()
    {
        return $this->get(self::_BUY_BATTLE_CHANCE);
    }
}

/**
 * open_panel message
 */
class MsgUp_OpenPanel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * apply_opponent message
 */
class MsgUp_ApplyOpponent extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * start_battle message
 */
class MsgUp_StartBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _OPPO_USER_ID = 1;
    const _ATTACK_LINEUP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPPO_USER_ID => array(
            'name' => '_oppo_user_id',
            'required' => true,
            'type' => 5,
        ),
        self::_ATTACK_LINEUP => array(
            'name' => '_attack_lineup',
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
        $this->values[self::_OPPO_USER_ID] = null;
        $this->values[self::_ATTACK_LINEUP] = array();
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
     * Sets value of '_oppo_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserId($value)
    {
        return $this->set(self::_OPPO_USER_ID, $value);
    }

    /**
     * Returns value of '_oppo_user_id' property
     *
     * @return int
     */
    public function getOppoUserId()
    {
        return $this->get(self::_OPPO_USER_ID);
    }

    /**
     * Appends value to '_attack_lineup' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendAttackLineup($value)
    {
        return $this->append(self::_ATTACK_LINEUP, $value);
    }

    /**
     * Clears '_attack_lineup' list
     *
     * @return null
     */
    public function clearAttackLineup()
    {
        return $this->clear(self::_ATTACK_LINEUP);
    }

    /**
     * Returns '_attack_lineup' list
     *
     * @return int[]
     */
    public function getAttackLineup()
    {
        return $this->get(self::_ATTACK_LINEUP);
    }

    /**
     * Returns '_attack_lineup' iterator
     *
     * @return ArrayIterator
     */
    public function getAttackLineupIterator()
    {
        return new \ArrayIterator($this->get(self::_ATTACK_LINEUP));
    }

    /**
     * Returns element from '_attack_lineup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getAttackLineupAt($offset)
    {
        return $this->get(self::_ATTACK_LINEUP, $offset);
    }

    /**
     * Returns count of '_attack_lineup' list
     *
     * @return int
     */
    public function getAttackLineupCount()
    {
        return $this->count(self::_ATTACK_LINEUP);
    }
}

/**
 * end_battle message
 */
class MsgUp_EndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
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
        $this->values[self::_RESULT] = null;
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
}

/**
 * set_lineup message
 */
class MsgUp_SetLineup extends \ProtobufMessage
{
    /* Field index constants */
    const _LINEUP = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_LINEUP => array(
            'name' => '_lineup',
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
        $this->values[self::_LINEUP] = array();
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
     * Appends value to '_lineup' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendLineup($value)
    {
        return $this->append(self::_LINEUP, $value);
    }

    /**
     * Clears '_lineup' list
     *
     * @return null
     */
    public function clearLineup()
    {
        return $this->clear(self::_LINEUP);
    }

    /**
     * Returns '_lineup' list
     *
     * @return int[]
     */
    public function getLineup()
    {
        return $this->get(self::_LINEUP);
    }

    /**
     * Returns '_lineup' iterator
     *
     * @return ArrayIterator
     */
    public function getLineupIterator()
    {
        return new \ArrayIterator($this->get(self::_LINEUP));
    }

    /**
     * Returns element from '_lineup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getLineupAt($offset)
    {
        return $this->get(self::_LINEUP, $offset);
    }

    /**
     * Returns count of '_lineup' list
     *
     * @return int
     */
    public function getLineupCount()
    {
        return $this->count(self::_LINEUP);
    }
}

/**
 * query_records message
 */
class MsgUp_QueryRecords extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_replay message
 */
class MsgUp_QueryReplay extends \ProtobufMessage
{
    /* Field index constants */
    const _RECORD_INDEX = 1;
    const _RECORD_SVRID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RECORD_INDEX => array(
            'name' => '_record_index',
            'required' => true,
            'type' => 5,
        ),
        self::_RECORD_SVRID => array(
            'name' => '_record_svrid',
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
        $this->values[self::_RECORD_INDEX] = null;
        $this->values[self::_RECORD_SVRID] = null;
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
     * Sets value of '_record_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordIndex($value)
    {
        return $this->set(self::_RECORD_INDEX, $value);
    }

    /**
     * Returns value of '_record_index' property
     *
     * @return int
     */
    public function getRecordIndex()
    {
        return $this->get(self::_RECORD_INDEX);
    }

    /**
     * Sets value of '_record_svrid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordSvrid($value)
    {
        return $this->set(self::_RECORD_SVRID, $value);
    }

    /**
     * Returns value of '_record_svrid' property
     *
     * @return int
     */
    public function getRecordSvrid()
    {
        return $this->get(self::_RECORD_SVRID);
    }
}

/**
 * sync_skill_stren message
 */
class MsgUp_SyncSkillStren extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * rankboard_type enum embedded in query_rankboard message
 */
final class MsgUp_QueryRankboard_RankboardType
{
    const static_type = 0;
    const dynamic = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'static_type' => self::static_type,
            'dynamic' => self::dynamic,
        );
    }
}

/**
 * query_rankboard message
 */
class MsgUp_QueryRankboard extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
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
        $this->values[self::_TYPE] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }
}

/**
 * query_oppo_info message
 */
class MsgUp_QueryOppoInfo extends \ProtobufMessage
{
    /* Field index constants */
    const _OPPO_USER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPPO_USER_ID => array(
            'name' => '_oppo_user_id',
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
        $this->values[self::_OPPO_USER_ID] = null;
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
     * Sets value of '_oppo_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserId($value)
    {
        return $this->set(self::_OPPO_USER_ID, $value);
    }

    /**
     * Returns value of '_oppo_user_id' property
     *
     * @return int
     */
    public function getOppoUserId()
    {
        return $this->get(self::_OPPO_USER_ID);
    }
}

/**
 * clear_battle_cd message
 */
class MsgUp_ClearBattleCd extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * draw_rank_reward message
 */
class MsgUp_DrawRankReward extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * buy_battle_chance message
 */
class MsgUp_BuyBattleChance extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * set_type enum embedded in set_name message
 */
final class MsgUp_SetName_SetType
{
    const free = 0;
    const rmb = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'free' => self::free,
            'rmb' => self::rmb,
        );
    }
}

/**
 * set_name message
 */
class MsgUp_SetName extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_NAME => array(
            'name' => '_name',
            'required' => true,
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_NAME] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
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
}

/**
 * set_avatar message
 */
class MsgUp_SetAvatar extends \ProtobufMessage
{
    /* Field index constants */
    const _AVATAR = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_AVATAR => array(
            'name' => '_avatar',
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
        $this->values[self::_AVATAR] = null;
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
}

/**
 * query_type enum embedded in query_data message
 */
final class MsgUp_QueryData_QueryType
{
    const rmb = 1;
    const hero = 2;
    const recharge = 3;
    const monthcard = 4;
    const items = 5;
    const money = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'rmb' => self::rmb,
            'hero' => self::hero,
            'recharge' => self::recharge,
            'monthcard' => self::monthcard,
            'items' => self::items,
            'money' => self::money,
        );
    }
}

/**
 * query_data message
 */
class MsgUp_QueryData extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _QUERY_HEROES = 2;
    const _MONTH_CARD_ID = 3;
    const _ITEM_IDS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
            'repeated' => true,
            'type' => 5,
        ),
        self::_QUERY_HEROES => array(
            'name' => '_query_heroes',
            'repeated' => true,
            'type' => 5,
        ),
        self::_MONTH_CARD_ID => array(
            'name' => '_month_card_id',
            'repeated' => true,
            'type' => 5,
        ),
        self::_ITEM_IDS => array(
            'name' => '_item_ids',
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
        $this->values[self::_TYPE] = array();
        $this->values[self::_QUERY_HEROES] = array();
        $this->values[self::_MONTH_CARD_ID] = array();
        $this->values[self::_ITEM_IDS] = array();
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
     * Appends value to '_type' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendType($value)
    {
        return $this->append(self::_TYPE, $value);
    }

    /**
     * Clears '_type' list
     *
     * @return null
     */
    public function clearType()
    {
        return $this->clear(self::_TYPE);
    }

    /**
     * Returns '_type' list
     *
     * @return int[]
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }

    /**
     * Returns '_type' iterator
     *
     * @return ArrayIterator
     */
    public function getTypeIterator()
    {
        return new \ArrayIterator($this->get(self::_TYPE));
    }

    /**
     * Returns element from '_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getTypeAt($offset)
    {
        return $this->get(self::_TYPE, $offset);
    }

    /**
     * Returns count of '_type' list
     *
     * @return int
     */
    public function getTypeCount()
    {
        return $this->count(self::_TYPE);
    }

    /**
     * Appends value to '_query_heroes' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendQueryHeroes($value)
    {
        return $this->append(self::_QUERY_HEROES, $value);
    }

    /**
     * Clears '_query_heroes' list
     *
     * @return null
     */
    public function clearQueryHeroes()
    {
        return $this->clear(self::_QUERY_HEROES);
    }

    /**
     * Returns '_query_heroes' list
     *
     * @return int[]
     */
    public function getQueryHeroes()
    {
        return $this->get(self::_QUERY_HEROES);
    }

    /**
     * Returns '_query_heroes' iterator
     *
     * @return ArrayIterator
     */
    public function getQueryHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::_QUERY_HEROES));
    }

    /**
     * Returns element from '_query_heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getQueryHeroesAt($offset)
    {
        return $this->get(self::_QUERY_HEROES, $offset);
    }

    /**
     * Returns count of '_query_heroes' list
     *
     * @return int
     */
    public function getQueryHeroesCount()
    {
        return $this->count(self::_QUERY_HEROES);
    }

    /**
     * Appends value to '_month_card_id' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendMonthCardId($value)
    {
        return $this->append(self::_MONTH_CARD_ID, $value);
    }

    /**
     * Clears '_month_card_id' list
     *
     * @return null
     */
    public function clearMonthCardId()
    {
        return $this->clear(self::_MONTH_CARD_ID);
    }

    /**
     * Returns '_month_card_id' list
     *
     * @return int[]
     */
    public function getMonthCardId()
    {
        return $this->get(self::_MONTH_CARD_ID);
    }

    /**
     * Returns '_month_card_id' iterator
     *
     * @return ArrayIterator
     */
    public function getMonthCardIdIterator()
    {
        return new \ArrayIterator($this->get(self::_MONTH_CARD_ID));
    }

    /**
     * Returns element from '_month_card_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getMonthCardIdAt($offset)
    {
        return $this->get(self::_MONTH_CARD_ID, $offset);
    }

    /**
     * Returns count of '_month_card_id' list
     *
     * @return int
     */
    public function getMonthCardIdCount()
    {
        return $this->count(self::_MONTH_CARD_ID);
    }

    /**
     * Appends value to '_item_ids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendItemIds($value)
    {
        return $this->append(self::_ITEM_IDS, $value);
    }

    /**
     * Clears '_item_ids' list
     *
     * @return null
     */
    public function clearItemIds()
    {
        return $this->clear(self::_ITEM_IDS);
    }

    /**
     * Returns '_item_ids' list
     *
     * @return int[]
     */
    public function getItemIds()
    {
        return $this->get(self::_ITEM_IDS);
    }

    /**
     * Returns '_item_ids' iterator
     *
     * @return ArrayIterator
     */
    public function getItemIdsIterator()
    {
        return new \ArrayIterator($this->get(self::_ITEM_IDS));
    }

    /**
     * Returns element from '_item_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getItemIdsAt($offset)
    {
        return $this->get(self::_ITEM_IDS, $offset);
    }

    /**
     * Returns count of '_item_ids' list
     *
     * @return int
     */
    public function getItemIdsCount()
    {
        return $this->count(self::_ITEM_IDS);
    }
}

/**
 * midas message
 */
class MsgUp_Midas extends \ProtobufMessage
{
    /* Field index constants */
    const _TIMES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TIMES => array(
            'name' => '_times',
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
        $this->values[self::_TIMES] = null;
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
     * Sets value of '_times' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTimes($value)
    {
        return $this->set(self::_TIMES, $value);
    }

    /**
     * Returns value of '_times' property
     *
     * @return int
     */
    public function getTimes()
    {
        return $this->get(self::_TIMES);
    }
}

/**
 * open_shop message
 */
class MsgUp_OpenShop extends \ProtobufMessage
{
    /* Field index constants */
    const _SHOPID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SHOPID => array(
            'name' => '_shopid',
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
        $this->values[self::_SHOPID] = null;
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
     * Sets value of '_shopid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setShopid($value)
    {
        return $this->set(self::_SHOPID, $value);
    }

    /**
     * Returns value of '_shopid' property
     *
     * @return int
     */
    public function getShopid()
    {
        return $this->get(self::_SHOPID);
    }
}

/**
 * charge message
 */
class MsgUp_Charge extends \ProtobufMessage
{
    /* Field index constants */
    const _PLATID = 1;
    const _CHARGEID = 2;
    const _EXTRADATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_PLATID => array(
            'default' => MsgUp_PlatformType::self, 
            'name' => '_platid',
            'required' => true,
            'type' => 5,
        ),
        self::_CHARGEID => array(
            'name' => '_chargeid',
            'required' => false,
            'type' => 5,
        ),
        self::_EXTRADATA => array(
            'name' => '_extradata',
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
        $this->values[self::_PLATID] = null;
        $this->values[self::_CHARGEID] = null;
        $this->values[self::_EXTRADATA] = null;
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
     * Sets value of '_platid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPlatid($value)
    {
        return $this->set(self::_PLATID, $value);
    }

    /**
     * Returns value of '_platid' property
     *
     * @return int
     */
    public function getPlatid()
    {
        return $this->get(self::_PLATID);
    }

    /**
     * Sets value of '_chargeid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChargeid($value)
    {
        return $this->set(self::_CHARGEID, $value);
    }

    /**
     * Returns value of '_chargeid' property
     *
     * @return int
     */
    public function getChargeid()
    {
        return $this->get(self::_CHARGEID);
    }

    /**
     * Sets value of '_extradata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExtradata($value)
    {
        return $this->set(self::_EXTRADATA, $value);
    }

    /**
     * Returns value of '_extradata' property
     *
     * @return string
     */
    public function getExtradata()
    {
        return $this->get(self::_EXTRADATA);
    }
}

/**
 * status enum embedded in ask_daily_login message
 */
final class MsgUp_AskDailyLogin_Status
{
    const all = 1;
    const common = 2;
    const vip = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'all' => self::all,
            'common' => self::common,
            'vip' => self::vip,
        );
    }
}

/**
 * ask_daily_login message
 */
class MsgUp_AskDailyLogin extends \ProtobufMessage
{
    /* Field index constants */
    const _STATUS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STATUS => array(
            'name' => '_status',
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
}

/**
 * tbc message
 */
class MsgUp_Tbc extends \ProtobufMessage
{
    /* Field index constants */
    const _OPEN_PANEL = 1;
    const _QUERY_OPPO = 2;
    const _START_BAT = 3;
    const _END_BAT = 4;
    const _RESET = 5;
    const _DRAW_REWARD = 6;
    const _SWEEP = 7;
    const _CHANGE_MODE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPEN_PANEL => array(
            'name' => '_open_panel',
            'required' => false,
            'type' => 'MsgUp_TbcOpenPanel'
        ),
        self::_QUERY_OPPO => array(
            'name' => '_query_oppo',
            'required' => false,
            'type' => 'MsgUp_TbcQueryOppo'
        ),
        self::_START_BAT => array(
            'name' => '_start_bat',
            'required' => false,
            'type' => 'MsgUp_TbcStartBattle'
        ),
        self::_END_BAT => array(
            'name' => '_end_bat',
            'required' => false,
            'type' => 'MsgUp_TbcEndBattle'
        ),
        self::_RESET => array(
            'name' => '_reset',
            'required' => false,
            'type' => 'MsgUp_TbcReset'
        ),
        self::_DRAW_REWARD => array(
            'name' => '_draw_reward',
            'required' => false,
            'type' => 'MsgUp_TbcDrawReward'
        ),
        self::_SWEEP => array(
            'name' => '_sweep',
            'required' => false,
            'type' => 'MsgUp_TbcSweep'
        ),
        self::_CHANGE_MODE => array(
            'name' => '_change_mode',
            'required' => false,
            'type' => 'MsgUp_TbcChangeMode'
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
        $this->values[self::_OPEN_PANEL] = null;
        $this->values[self::_QUERY_OPPO] = null;
        $this->values[self::_START_BAT] = null;
        $this->values[self::_END_BAT] = null;
        $this->values[self::_RESET] = null;
        $this->values[self::_DRAW_REWARD] = null;
        $this->values[self::_SWEEP] = null;
        $this->values[self::_CHANGE_MODE] = null;
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
     * Sets value of '_open_panel' property
     *
     * @param MsgUp_TbcOpenPanel $value Property value
     *
     * @return null
     */
    public function setOpenPanel(MsgUp_TbcOpenPanel $value)
    {
        return $this->set(self::_OPEN_PANEL, $value);
    }

    /**
     * Returns value of '_open_panel' property
     *
     * @return MsgUp_TbcOpenPanel
     */
    public function getOpenPanel()
    {
        return $this->get(self::_OPEN_PANEL);
    }

    /**
     * Sets value of '_query_oppo' property
     *
     * @param MsgUp_TbcQueryOppo $value Property value
     *
     * @return null
     */
    public function setQueryOppo(MsgUp_TbcQueryOppo $value)
    {
        return $this->set(self::_QUERY_OPPO, $value);
    }

    /**
     * Returns value of '_query_oppo' property
     *
     * @return MsgUp_TbcQueryOppo
     */
    public function getQueryOppo()
    {
        return $this->get(self::_QUERY_OPPO);
    }

    /**
     * Sets value of '_start_bat' property
     *
     * @param MsgUp_TbcStartBattle $value Property value
     *
     * @return null
     */
    public function setStartBat(MsgUp_TbcStartBattle $value)
    {
        return $this->set(self::_START_BAT, $value);
    }

    /**
     * Returns value of '_start_bat' property
     *
     * @return MsgUp_TbcStartBattle
     */
    public function getStartBat()
    {
        return $this->get(self::_START_BAT);
    }

    /**
     * Sets value of '_end_bat' property
     *
     * @param MsgUp_TbcEndBattle $value Property value
     *
     * @return null
     */
    public function setEndBat(MsgUp_TbcEndBattle $value)
    {
        return $this->set(self::_END_BAT, $value);
    }

    /**
     * Returns value of '_end_bat' property
     *
     * @return MsgUp_TbcEndBattle
     */
    public function getEndBat()
    {
        return $this->get(self::_END_BAT);
    }

    /**
     * Sets value of '_reset' property
     *
     * @param MsgUp_TbcReset $value Property value
     *
     * @return null
     */
    public function setReset(MsgUp_TbcReset $value)
    {
        return $this->set(self::_RESET, $value);
    }

    /**
     * Returns value of '_reset' property
     *
     * @return MsgUp_TbcReset
     */
    public function getReset()
    {
        return $this->get(self::_RESET);
    }

    /**
     * Sets value of '_draw_reward' property
     *
     * @param MsgUp_TbcDrawReward $value Property value
     *
     * @return null
     */
    public function setDrawReward(MsgUp_TbcDrawReward $value)
    {
        return $this->set(self::_DRAW_REWARD, $value);
    }

    /**
     * Returns value of '_draw_reward' property
     *
     * @return MsgUp_TbcDrawReward
     */
    public function getDrawReward()
    {
        return $this->get(self::_DRAW_REWARD);
    }

    /**
     * Sets value of '_sweep' property
     *
     * @param MsgUp_TbcSweep $value Property value
     *
     * @return null
     */
    public function setSweep(MsgUp_TbcSweep $value)
    {
        return $this->set(self::_SWEEP, $value);
    }

    /**
     * Returns value of '_sweep' property
     *
     * @return MsgUp_TbcSweep
     */
    public function getSweep()
    {
        return $this->get(self::_SWEEP);
    }

    /**
     * Sets value of '_change_mode' property
     *
     * @param MsgUp_TbcChangeMode $value Property value
     *
     * @return null
     */
    public function setChangeMode(MsgUp_TbcChangeMode $value)
    {
        return $this->set(self::_CHANGE_MODE, $value);
    }

    /**
     * Returns value of '_change_mode' property
     *
     * @return MsgUp_TbcChangeMode
     */
    public function getChangeMode()
    {
        return $this->get(self::_CHANGE_MODE);
    }
}

/**
 * tbc_change_mode message
 */
class MsgUp_TbcChangeMode extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * tbc_sweep message
 */
class MsgUp_TbcSweep extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * tbc_open_panel message
 */
class MsgUp_TbcOpenPanel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * tbc_query_oppo message
 */
class MsgUp_TbcQueryOppo extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * tbc_start_battle message
 */
class MsgUp_TbcStartBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROIDS = 1;
    const _USE_HIRE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROIDS => array(
            'name' => '_heroids',
            'repeated' => true,
            'type' => 5,
        ),
        self::_USE_HIRE => array(
            'name' => '_use_hire',
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
        $this->values[self::_HEROIDS] = array();
        $this->values[self::_USE_HIRE] = null;
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
     * Appends value to '_heroids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHeroids($value)
    {
        return $this->append(self::_HEROIDS, $value);
    }

    /**
     * Clears '_heroids' list
     *
     * @return null
     */
    public function clearHeroids()
    {
        return $this->clear(self::_HEROIDS);
    }

    /**
     * Returns '_heroids' list
     *
     * @return int[]
     */
    public function getHeroids()
    {
        return $this->get(self::_HEROIDS);
    }

    /**
     * Returns '_heroids' iterator
     *
     * @return ArrayIterator
     */
    public function getHeroidsIterator()
    {
        return new \ArrayIterator($this->get(self::_HEROIDS));
    }

    /**
     * Returns element from '_heroids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHeroidsAt($offset)
    {
        return $this->get(self::_HEROIDS, $offset);
    }

    /**
     * Returns count of '_heroids' list
     *
     * @return int
     */
    public function getHeroidsCount()
    {
        return $this->count(self::_HEROIDS);
    }

    /**
     * Sets value of '_use_hire' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUseHire($value)
    {
        return $this->set(self::_USE_HIRE, $value);
    }

    /**
     * Returns value of '_use_hire' property
     *
     * @return int
     */
    public function getUseHire()
    {
        return $this->get(self::_USE_HIRE);
    }
}

/**
 * tbc_hero message
 */
class MsgUp_TbcHero extends \ProtobufMessage
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

/**
 * tbc_end_battle message
 */
class MsgUp_TbcEndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;
    const _SELF_HEROES = 2;
    const _OPPO_HEROES = 3;
    const _OPRATIONS = 4;
    const _STAGE_ID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'MsgUp_TbcHero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'MsgUp_TbcHero'
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_STAGE_ID] = null;
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
     * @param MsgUp_TbcHero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(MsgUp_TbcHero $value)
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
     * @return MsgUp_TbcHero[]
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
     * @return MsgUp_TbcHero
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
     * @param MsgUp_TbcHero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(MsgUp_TbcHero $value)
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
     * @return MsgUp_TbcHero[]
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
     * @return MsgUp_TbcHero
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * tbc_mode enum embedded in tbc_reset message
 */
final class MsgUp_TbcReset_TbcMode
{
    const normal = 1;
    const hell = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'normal' => self::normal,
            'hell' => self::hell,
        );
    }
}

/**
 * tbc_reset message
 */
class MsgUp_TbcReset extends \ProtobufMessage
{
    /* Field index constants */
    const _MODE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_MODE => array(
            'name' => '_mode',
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
        $this->values[self::_MODE] = null;
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
     * Sets value of '_mode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMode($value)
    {
        return $this->set(self::_MODE, $value);
    }

    /**
     * Returns value of '_mode' property
     *
     * @return int
     */
    public function getMode()
    {
        return $this->get(self::_MODE);
    }
}

/**
 * tbc_draw_reward message
 */
class MsgUp_TbcDrawReward extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * get_maillist message
 */
class MsgUp_GetMaillist extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * mtype enum embedded in read_mail message
 */
final class MsgUp_ReadMail_Mtype
{
    const system_mail = 1;
    const private_mail = 2;
    const guild_mail = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'system_mail' => self::system_mail,
            'private_mail' => self::private_mail,
            'guild_mail' => self::guild_mail,
        );
    }
}

/**
 * read_mail message
 */
class MsgUp_ReadMail extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;
    const _MAIL_TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
            'type' => 5,
        ),
        self::_MAIL_TYPE => array(
            'name' => '_mail_type',
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
        $this->values[self::_ID] = null;
        $this->values[self::_MAIL_TYPE] = null;
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
     * Sets value of '_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }

    /**
     * Sets value of '_mail_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMailType($value)
    {
        return $this->set(self::_MAIL_TYPE, $value);
    }

    /**
     * Returns value of '_mail_type' property
     *
     * @return int
     */
    public function getMailType()
    {
        return $this->get(self::_MAIL_TYPE);
    }
}

/**
 * get_svr_time message
 */
class MsgUp_GetSvrTime extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * get_vip_gift message
 */
class MsgUp_GetVipGift extends \ProtobufMessage
{
    /* Field index constants */
    const _VIP = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_VIP => array(
            'name' => '_vip',
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
        $this->values[self::_VIP] = null;
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
}

/**
 * chat message
 */
class MsgUp_Chat extends \ProtobufMessage
{
    /* Field index constants */
    const _SAY = 1;
    const _FRESH = 2;
    const _FETCH = 3;
    const _CHAT_ADD_BL = 4;
    const _CHAT_DEL_BL = 5;
    const _CHAT_FETCH_BL = 6;
    const _CHAT_BROAD_SAY = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SAY => array(
            'name' => '_say',
            'required' => false,
            'type' => 'MsgUp_ChatSay'
        ),
        self::_FRESH => array(
            'name' => '_fresh',
            'required' => false,
            'type' => 'MsgUp_ChatFresh'
        ),
        self::_FETCH => array(
            'name' => '_fetch',
            'required' => false,
            'type' => 'MsgUp_ChatFetch'
        ),
        self::_CHAT_ADD_BL => array(
            'name' => '_chat_add_bl',
            'required' => false,
            'type' => 'MsgUp_ChatAddBl'
        ),
        self::_CHAT_DEL_BL => array(
            'name' => '_chat_del_bl',
            'required' => false,
            'type' => 'MsgUp_ChatDelBl'
        ),
        self::_CHAT_FETCH_BL => array(
            'name' => '_chat_fetch_bl',
            'required' => false,
            'type' => 'MsgUp_ChatFetchBl'
        ),
        self::_CHAT_BROAD_SAY => array(
            'name' => '_chat_broad_say',
            'required' => false,
            'type' => 'MsgUp_ChatBroadSay'
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
        $this->values[self::_SAY] = null;
        $this->values[self::_FRESH] = null;
        $this->values[self::_FETCH] = null;
        $this->values[self::_CHAT_ADD_BL] = null;
        $this->values[self::_CHAT_DEL_BL] = null;
        $this->values[self::_CHAT_FETCH_BL] = null;
        $this->values[self::_CHAT_BROAD_SAY] = null;
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
     * Sets value of '_say' property
     *
     * @param MsgUp_ChatSay $value Property value
     *
     * @return null
     */
    public function setSay(MsgUp_ChatSay $value)
    {
        return $this->set(self::_SAY, $value);
    }

    /**
     * Returns value of '_say' property
     *
     * @return MsgUp_ChatSay
     */
    public function getSay()
    {
        return $this->get(self::_SAY);
    }

    /**
     * Sets value of '_fresh' property
     *
     * @param MsgUp_ChatFresh $value Property value
     *
     * @return null
     */
    public function setFresh(MsgUp_ChatFresh $value)
    {
        return $this->set(self::_FRESH, $value);
    }

    /**
     * Returns value of '_fresh' property
     *
     * @return MsgUp_ChatFresh
     */
    public function getFresh()
    {
        return $this->get(self::_FRESH);
    }

    /**
     * Sets value of '_fetch' property
     *
     * @param MsgUp_ChatFetch $value Property value
     *
     * @return null
     */
    public function setFetch(MsgUp_ChatFetch $value)
    {
        return $this->set(self::_FETCH, $value);
    }

    /**
     * Returns value of '_fetch' property
     *
     * @return MsgUp_ChatFetch
     */
    public function getFetch()
    {
        return $this->get(self::_FETCH);
    }

    /**
     * Sets value of '_chat_add_bl' property
     *
     * @param MsgUp_ChatAddBl $value Property value
     *
     * @return null
     */
    public function setChatAddBl(MsgUp_ChatAddBl $value)
    {
        return $this->set(self::_CHAT_ADD_BL, $value);
    }

    /**
     * Returns value of '_chat_add_bl' property
     *
     * @return MsgUp_ChatAddBl
     */
    public function getChatAddBl()
    {
        return $this->get(self::_CHAT_ADD_BL);
    }

    /**
     * Sets value of '_chat_del_bl' property
     *
     * @param MsgUp_ChatDelBl $value Property value
     *
     * @return null
     */
    public function setChatDelBl(MsgUp_ChatDelBl $value)
    {
        return $this->set(self::_CHAT_DEL_BL, $value);
    }

    /**
     * Returns value of '_chat_del_bl' property
     *
     * @return MsgUp_ChatDelBl
     */
    public function getChatDelBl()
    {
        return $this->get(self::_CHAT_DEL_BL);
    }

    /**
     * Sets value of '_chat_fetch_bl' property
     *
     * @param MsgUp_ChatFetchBl $value Property value
     *
     * @return null
     */
    public function setChatFetchBl(MsgUp_ChatFetchBl $value)
    {
        return $this->set(self::_CHAT_FETCH_BL, $value);
    }

    /**
     * Returns value of '_chat_fetch_bl' property
     *
     * @return MsgUp_ChatFetchBl
     */
    public function getChatFetchBl()
    {
        return $this->get(self::_CHAT_FETCH_BL);
    }

    /**
     * Sets value of '_chat_broad_say' property
     *
     * @param MsgUp_ChatBroadSay $value Property value
     *
     * @return null
     */
    public function setChatBroadSay(MsgUp_ChatBroadSay $value)
    {
        return $this->set(self::_CHAT_BROAD_SAY, $value);
    }

    /**
     * Returns value of '_chat_broad_say' property
     *
     * @return MsgUp_ChatBroadSay
     */
    public function getChatBroadSay()
    {
        return $this->get(self::_CHAT_BROAD_SAY);
    }
}

/**
 * chat_broad_say message
 */
class MsgUp_ChatBroadSay extends \ProtobufMessage
{
    /* Field index constants */
    const _CHANNEL = 1;
    const _TARGET_IDS = 2;
    const _CONTENT_TYPE = 3;
    const _CONTENT = 4;
    const _ACCESSORY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHANNEL => array(
            'name' => '_channel',
            'required' => false,
            'type' => 5,
        ),
        self::_TARGET_IDS => array(
            'name' => '_target_ids',
            'repeated' => true,
            'type' => 5,
        ),
        self::_CONTENT_TYPE => array(
            'name' => '_content_type',
            'required' => false,
            'type' => 5,
        ),
        self::_CONTENT => array(
            'name' => '_content',
            'required' => false,
            'type' => 7,
        ),
        self::_ACCESSORY => array(
            'name' => '_accessory',
            'required' => false,
            'type' => 'MsgUp_ChatAcc'
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
        $this->values[self::_CHANNEL] = null;
        $this->values[self::_TARGET_IDS] = array();
        $this->values[self::_CONTENT_TYPE] = null;
        $this->values[self::_CONTENT] = null;
        $this->values[self::_ACCESSORY] = null;
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
     * Sets value of '_channel' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::_CHANNEL, $value);
    }

    /**
     * Returns value of '_channel' property
     *
     * @return int
     */
    public function getChannel()
    {
        return $this->get(self::_CHANNEL);
    }

    /**
     * Appends value to '_target_ids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendTargetIds($value)
    {
        return $this->append(self::_TARGET_IDS, $value);
    }

    /**
     * Clears '_target_ids' list
     *
     * @return null
     */
    public function clearTargetIds()
    {
        return $this->clear(self::_TARGET_IDS);
    }

    /**
     * Returns '_target_ids' list
     *
     * @return int[]
     */
    public function getTargetIds()
    {
        return $this->get(self::_TARGET_IDS);
    }

    /**
     * Returns '_target_ids' iterator
     *
     * @return ArrayIterator
     */
    public function getTargetIdsIterator()
    {
        return new \ArrayIterator($this->get(self::_TARGET_IDS));
    }

    /**
     * Returns element from '_target_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getTargetIdsAt($offset)
    {
        return $this->get(self::_TARGET_IDS, $offset);
    }

    /**
     * Returns count of '_target_ids' list
     *
     * @return int
     */
    public function getTargetIdsCount()
    {
        return $this->count(self::_TARGET_IDS);
    }

    /**
     * Sets value of '_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setContentType($value)
    {
        return $this->set(self::_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of '_content_type' property
     *
     * @return int
     */
    public function getContentType()
    {
        return $this->get(self::_CONTENT_TYPE);
    }

    /**
     * Sets value of '_content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::_CONTENT, $value);
    }

    /**
     * Returns value of '_content' property
     *
     * @return string
     */
    public function getContent()
    {
        return $this->get(self::_CONTENT);
    }

    /**
     * Sets value of '_accessory' property
     *
     * @param MsgUp_ChatAcc $value Property value
     *
     * @return null
     */
    public function setAccessory(MsgUp_ChatAcc $value)
    {
        return $this->set(self::_ACCESSORY, $value);
    }

    /**
     * Returns value of '_accessory' property
     *
     * @return MsgUp_ChatAcc
     */
    public function getAccessory()
    {
        return $this->get(self::_ACCESSORY);
    }
}

/**
 * chat_fetch_bl message
 */
class MsgUp_ChatFetchBl extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * chat_say message
 */
class MsgUp_ChatSay extends \ProtobufMessage
{
    /* Field index constants */
    const _CHANNEL = 1;
    const _TARGET_ID = 2;
    const _CONTENT_TYPE = 3;
    const _CONTENT = 4;
    const _ACCESSORY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHANNEL => array(
            'default' => MsgUp_ChatChannel::world_channel, 
            'name' => '_channel',
            'required' => true,
            'type' => 5,
        ),
        self::_TARGET_ID => array(
            'name' => '_target_id',
            'required' => false,
            'type' => 5,
        ),
        self::_CONTENT_TYPE => array(
            'name' => '_content_type',
            'required' => true,
            'type' => 5,
        ),
        self::_CONTENT => array(
            'name' => '_content',
            'required' => true,
            'type' => 7,
        ),
        self::_ACCESSORY => array(
            'name' => '_accessory',
            'required' => false,
            'type' => 'MsgUp_ChatAcc'
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
        $this->values[self::_CHANNEL] = null;
        $this->values[self::_TARGET_ID] = null;
        $this->values[self::_CONTENT_TYPE] = null;
        $this->values[self::_CONTENT] = null;
        $this->values[self::_ACCESSORY] = null;
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
     * Sets value of '_channel' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::_CHANNEL, $value);
    }

    /**
     * Returns value of '_channel' property
     *
     * @return int
     */
    public function getChannel()
    {
        return $this->get(self::_CHANNEL);
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

    /**
     * Sets value of '_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setContentType($value)
    {
        return $this->set(self::_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of '_content_type' property
     *
     * @return int
     */
    public function getContentType()
    {
        return $this->get(self::_CONTENT_TYPE);
    }

    /**
     * Sets value of '_content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::_CONTENT, $value);
    }

    /**
     * Returns value of '_content' property
     *
     * @return string
     */
    public function getContent()
    {
        return $this->get(self::_CONTENT);
    }

    /**
     * Sets value of '_accessory' property
     *
     * @param MsgUp_ChatAcc $value Property value
     *
     * @return null
     */
    public function setAccessory(MsgUp_ChatAcc $value)
    {
        return $this->set(self::_ACCESSORY, $value);
    }

    /**
     * Returns value of '_accessory' property
     *
     * @return MsgUp_ChatAcc
     */
    public function getAccessory()
    {
        return $this->get(self::_ACCESSORY);
    }
}

/**
 * chat_acc_t enum embedded in chat_acc message
 */
final class MsgUp_ChatAcc_ChatAccT
{
    const binary = 1;
    const pvp_replay = 2;
    const binary_replay = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'binary' => self::binary,
            'pvp_replay' => self::pvp_replay,
            'binary_replay' => self::binary_replay,
        );
    }
}

/**
 * chat_acc message
 */
class MsgUp_ChatAcc extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;
    const _BINARY = 2;
    const _RECORD_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
            'required' => true,
            'type' => 5,
        ),
        self::_BINARY => array(
            'name' => '_binary',
            'required' => false,
            'type' => 7,
        ),
        self::_RECORD_ID => array(
            'name' => '_record_id',
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
        $this->values[self::_TYPE] = null;
        $this->values[self::_BINARY] = null;
        $this->values[self::_RECORD_ID] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }

    /**
     * Sets value of '_binary' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBinary($value)
    {
        return $this->set(self::_BINARY, $value);
    }

    /**
     * Returns value of '_binary' property
     *
     * @return string
     */
    public function getBinary()
    {
        return $this->get(self::_BINARY);
    }

    /**
     * Sets value of '_record_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordId($value)
    {
        return $this->set(self::_RECORD_ID, $value);
    }

    /**
     * Returns value of '_record_id' property
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->get(self::_RECORD_ID);
    }
}

/**
 * battle_record message
 */
class MsgUp_BattleRecord extends \ProtobufMessage
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
    const _SELF_DYNAS = 15;
    const _OPPO_HEROES = 16;
    const _OPPO_DYNAS = 17;
    const _RSEED = 18;
    const _SELF_ROBOT = 19;
    const _PARAM1 = 20;
    const _OPERATIONS = 21;

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
        self::_SELF_DYNAS => array(
            'name' => '_self_dynas',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'Msg_Hero'
        ),
        self::_OPPO_DYNAS => array(
            'name' => '_oppo_dynas',
            'repeated' => true,
            'type' => 'Msg_HeroDyna'
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
        self::_PARAM1 => array(
            'name' => '_param1',
            'required' => false,
            'type' => 5,
        ),
        self::_OPERATIONS => array(
            'name' => '_operations',
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
        $this->values[self::_SELF_DYNAS] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_OPPO_DYNAS] = array();
        $this->values[self::_RSEED] = null;
        $this->values[self::_SELF_ROBOT] = null;
        $this->values[self::_PARAM1] = null;
        $this->values[self::_OPERATIONS] = array();
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
     * Appends value to '_self_dynas' list
     *
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendSelfDynas(Msg_HeroDyna $value)
    {
        return $this->append(self::_SELF_DYNAS, $value);
    }

    /**
     * Clears '_self_dynas' list
     *
     * @return null
     */
    public function clearSelfDynas()
    {
        return $this->clear(self::_SELF_DYNAS);
    }

    /**
     * Returns '_self_dynas' list
     *
     * @return Msg_HeroDyna[]
     */
    public function getSelfDynas()
    {
        return $this->get(self::_SELF_DYNAS);
    }

    /**
     * Returns '_self_dynas' iterator
     *
     * @return ArrayIterator
     */
    public function getSelfDynasIterator()
    {
        return new \ArrayIterator($this->get(self::_SELF_DYNAS));
    }

    /**
     * Returns element from '_self_dynas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msg_HeroDyna
     */
    public function getSelfDynasAt($offset)
    {
        return $this->get(self::_SELF_DYNAS, $offset);
    }

    /**
     * Returns count of '_self_dynas' list
     *
     * @return int
     */
    public function getSelfDynasCount()
    {
        return $this->count(self::_SELF_DYNAS);
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
     * Appends value to '_oppo_dynas' list
     *
     * @param Msg_HeroDyna $value Value to append
     *
     * @return null
     */
    public function appendOppoDynas(Msg_HeroDyna $value)
    {
        return $this->append(self::_OPPO_DYNAS, $value);
    }

    /**
     * Clears '_oppo_dynas' list
     *
     * @return null
     */
    public function clearOppoDynas()
    {
        return $this->clear(self::_OPPO_DYNAS);
    }

    /**
     * Returns '_oppo_dynas' list
     *
     * @return Msg_HeroDyna[]
     */
    public function getOppoDynas()
    {
        return $this->get(self::_OPPO_DYNAS);
    }

    /**
     * Returns '_oppo_dynas' iterator
     *
     * @return ArrayIterator
     */
    public function getOppoDynasIterator()
    {
        return new \ArrayIterator($this->get(self::_OPPO_DYNAS));
    }

    /**
     * Returns element from '_oppo_dynas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msg_HeroDyna
     */
    public function getOppoDynasAt($offset)
    {
        return $this->get(self::_OPPO_DYNAS, $offset);
    }

    /**
     * Returns count of '_oppo_dynas' list
     *
     * @return int
     */
    public function getOppoDynasCount()
    {
        return $this->count(self::_OPPO_DYNAS);
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
}

/**
 * chat_fresh message
 */
class MsgUp_ChatFresh extends \ProtobufMessage
{
    /* Field index constants */
    const _CHANNEL = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHANNEL => array(
            'default' => MsgUp_ChatChannel::world_channel, 
            'name' => '_channel',
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
        $this->values[self::_CHANNEL] = null;
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
     * Sets value of '_channel' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::_CHANNEL, $value);
    }

    /**
     * Returns value of '_channel' property
     *
     * @return int
     */
    public function getChannel()
    {
        return $this->get(self::_CHANNEL);
    }
}

/**
 * chat_fetch message
 */
class MsgUp_ChatFetch extends \ProtobufMessage
{
    /* Field index constants */
    const _CHANNEL = 1;
    const _CHAT_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHANNEL => array(
            'default' => MsgUp_ChatChannel::world_channel, 
            'name' => '_channel',
            'required' => true,
            'type' => 5,
        ),
        self::_CHAT_ID => array(
            'name' => '_chat_id',
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
        $this->values[self::_CHANNEL] = null;
        $this->values[self::_CHAT_ID] = null;
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
     * Sets value of '_channel' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::_CHANNEL, $value);
    }

    /**
     * Returns value of '_channel' property
     *
     * @return int
     */
    public function getChannel()
    {
        return $this->get(self::_CHANNEL);
    }

    /**
     * Sets value of '_chat_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChatId($value)
    {
        return $this->set(self::_CHAT_ID, $value);
    }

    /**
     * Returns value of '_chat_id' property
     *
     * @return int
     */
    public function getChatId()
    {
        return $this->get(self::_CHAT_ID);
    }
}

/**
 * chat_add_bl message
 */
class MsgUp_ChatAddBl extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_UID] = null;
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
}

/**
 * chat_del_bl message
 */
class MsgUp_ChatDelBl extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_UID] = null;
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
}

/**
 * guild message
 */
class MsgUp_Guild extends \ProtobufMessage
{
    /* Field index constants */
    const _CREATE = 1;
    const _DISMISS = 2;
    const _LIST = 3;
    const _SEARCH = 4;
    const _JOIN = 5;
    const _JOIN_CONFIRM = 6;
    const _LEAVE = 7;
    const _KICK = 8;
    const _SET = 9;
    const _QUERY = 10;
    const _OPEN_PANNEL = 11;
    const _SET_JOB = 12;
    const _ADD_HIRE = 13;
    const _DEL_HIRE = 14;
    const _QUERY_HIRES = 15;
    const _HIRE_HERO = 16;
    const _WORSHIP_REQ = 17;
    const _WORSHIP_WITHDRAW = 18;
    const _QUERY_HH_DETAIL = 19;
    const _INSTANCE_QUERY = 20;
    const _INSTANCE_DETAIL = 21;
    const _INSTANCE_START = 22;
    const _INSTANCE_END = 23;
    const _INSTANCE_DROP = 24;
    const _INSTANCE_OPEN = 25;
    const _INSTANCE_APPLY = 26;
    const _DROP_INFO = 27;
    const _DROP_GIVE = 28;
    const _INSTANCE_DAMAGE = 29;
    const _ITEMS_HISTORY = 30;
    const _GUILD_JUMP = 31;
    const _GUILD_APP_QUEUE = 32;
    const _INSTANCE_PREPARE = 33;
    const _GUILD_QUERY_MEMBER = 34;
    const _GUILD_STAGE_RANK = 35;
    const _SET_JUMP = 36;
    const _GUILD_SEND_MAIL = 37;
    const _GUILD_QUERY_SINGLE = 38;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CREATE => array(
            'name' => '_create',
            'required' => false,
            'type' => 'MsgUp_GuildCreate'
        ),
        self::_DISMISS => array(
            'name' => '_dismiss',
            'required' => false,
            'type' => 'MsgUp_GuildDismiss'
        ),
        self::_LIST => array(
            'name' => '_list',
            'required' => false,
            'type' => 'MsgUp_GuildList'
        ),
        self::_SEARCH => array(
            'name' => '_search',
            'required' => false,
            'type' => 'MsgUp_GuildSearch'
        ),
        self::_JOIN => array(
            'name' => '_join',
            'required' => false,
            'type' => 'MsgUp_GuildJoin'
        ),
        self::_JOIN_CONFIRM => array(
            'name' => '_join_confirm',
            'required' => false,
            'type' => 'MsgUp_GuildJoinConfirm'
        ),
        self::_LEAVE => array(
            'name' => '_leave',
            'required' => false,
            'type' => 'MsgUp_GuildLeave'
        ),
        self::_KICK => array(
            'name' => '_kick',
            'required' => false,
            'type' => 'MsgUp_GuildKick'
        ),
        self::_SET => array(
            'name' => '_set',
            'required' => false,
            'type' => 'MsgUp_GuildSet'
        ),
        self::_QUERY => array(
            'name' => '_query',
            'required' => false,
            'type' => 'MsgUp_GuildQuery'
        ),
        self::_OPEN_PANNEL => array(
            'name' => '_open_pannel',
            'required' => false,
            'type' => 'MsgUp_GuildOpenPannel'
        ),
        self::_SET_JOB => array(
            'name' => '_set_job',
            'required' => false,
            'type' => 'MsgUp_GuildSetJob'
        ),
        self::_ADD_HIRE => array(
            'name' => '_add_hire',
            'required' => false,
            'type' => 'MsgUp_GuildAddHire'
        ),
        self::_DEL_HIRE => array(
            'name' => '_del_hire',
            'required' => false,
            'type' => 'MsgUp_GuildDelHire'
        ),
        self::_QUERY_HIRES => array(
            'name' => '_query_hires',
            'required' => false,
            'type' => 'MsgUp_GuildQueryHires'
        ),
        self::_HIRE_HERO => array(
            'name' => '_hire_hero',
            'required' => false,
            'type' => 'MsgUp_GuildHireHero'
        ),
        self::_WORSHIP_REQ => array(
            'name' => '_worship_req',
            'required' => false,
            'type' => 'MsgUp_GuildWorshipReq'
        ),
        self::_WORSHIP_WITHDRAW => array(
            'name' => '_worship_withdraw',
            'required' => false,
            'type' => 'MsgUp_GuildWorshipWithdraw'
        ),
        self::_QUERY_HH_DETAIL => array(
            'name' => '_query_hh_detail',
            'required' => false,
            'type' => 'MsgUp_GuildQureyHhDetail'
        ),
        self::_INSTANCE_QUERY => array(
            'name' => '_instance_query',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceQuery'
        ),
        self::_INSTANCE_DETAIL => array(
            'name' => '_instance_detail',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceDetail'
        ),
        self::_INSTANCE_START => array(
            'name' => '_instance_start',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceStart'
        ),
        self::_INSTANCE_END => array(
            'name' => '_instance_end',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceEnd'
        ),
        self::_INSTANCE_DROP => array(
            'name' => '_instance_drop',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceDrop'
        ),
        self::_INSTANCE_OPEN => array(
            'name' => '_instance_open',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceOpen'
        ),
        self::_INSTANCE_APPLY => array(
            'name' => '_instance_apply',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceApply'
        ),
        self::_DROP_INFO => array(
            'name' => '_drop_info',
            'required' => false,
            'type' => 'MsgUp_GuildDropInfo'
        ),
        self::_DROP_GIVE => array(
            'name' => '_drop_give',
            'required' => false,
            'type' => 'MsgUp_GuildDropGive'
        ),
        self::_INSTANCE_DAMAGE => array(
            'name' => '_instance_damage',
            'required' => false,
            'type' => 'MsgUp_GuildInstanceDamage'
        ),
        self::_ITEMS_HISTORY => array(
            'name' => '_items_history',
            'required' => false,
            'type' => 'MsgUp_GuildItemsHistory'
        ),
        self::_GUILD_JUMP => array(
            'name' => '_guild_jump',
            'required' => false,
            'type' => 'MsgUp_GuildJump'
        ),
        self::_GUILD_APP_QUEUE => array(
            'name' => '_guild_app_queue',
            'required' => false,
            'type' => 'MsgUp_GuildAppQueue'
        ),
        self::_INSTANCE_PREPARE => array(
            'name' => '_instance_prepare',
            'required' => false,
            'type' => 'MsgUp_GuildPrepareInstance'
        ),
        self::_GUILD_QUERY_MEMBER => array(
            'name' => '_guild_query_member',
            'required' => false,
            'type' => 'MsgUp_GuildQueryMember'
        ),
        self::_GUILD_STAGE_RANK => array(
            'name' => '_guild_stage_rank',
            'required' => false,
            'type' => 'MsgUp_GuildStageRank'
        ),
        self::_SET_JUMP => array(
            'name' => '_set_jump',
            'required' => false,
            'type' => 'MsgUp_GuildSetJump'
        ),
        self::_GUILD_SEND_MAIL => array(
            'name' => '_guild_send_mail',
            'required' => false,
            'type' => 'MsgUp_GuildSendMail'
        ),
        self::_GUILD_QUERY_SINGLE => array(
            'name' => '_guild_query_single',
            'required' => false,
            'type' => 'MsgUp_GuildQuerySingle'
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
        $this->values[self::_CREATE] = null;
        $this->values[self::_DISMISS] = null;
        $this->values[self::_LIST] = null;
        $this->values[self::_SEARCH] = null;
        $this->values[self::_JOIN] = null;
        $this->values[self::_JOIN_CONFIRM] = null;
        $this->values[self::_LEAVE] = null;
        $this->values[self::_KICK] = null;
        $this->values[self::_SET] = null;
        $this->values[self::_QUERY] = null;
        $this->values[self::_OPEN_PANNEL] = null;
        $this->values[self::_SET_JOB] = null;
        $this->values[self::_ADD_HIRE] = null;
        $this->values[self::_DEL_HIRE] = null;
        $this->values[self::_QUERY_HIRES] = null;
        $this->values[self::_HIRE_HERO] = null;
        $this->values[self::_WORSHIP_REQ] = null;
        $this->values[self::_WORSHIP_WITHDRAW] = null;
        $this->values[self::_QUERY_HH_DETAIL] = null;
        $this->values[self::_INSTANCE_QUERY] = null;
        $this->values[self::_INSTANCE_DETAIL] = null;
        $this->values[self::_INSTANCE_START] = null;
        $this->values[self::_INSTANCE_END] = null;
        $this->values[self::_INSTANCE_DROP] = null;
        $this->values[self::_INSTANCE_OPEN] = null;
        $this->values[self::_INSTANCE_APPLY] = null;
        $this->values[self::_DROP_INFO] = null;
        $this->values[self::_DROP_GIVE] = null;
        $this->values[self::_INSTANCE_DAMAGE] = null;
        $this->values[self::_ITEMS_HISTORY] = null;
        $this->values[self::_GUILD_JUMP] = null;
        $this->values[self::_GUILD_APP_QUEUE] = null;
        $this->values[self::_INSTANCE_PREPARE] = null;
        $this->values[self::_GUILD_QUERY_MEMBER] = null;
        $this->values[self::_GUILD_STAGE_RANK] = null;
        $this->values[self::_SET_JUMP] = null;
        $this->values[self::_GUILD_SEND_MAIL] = null;
        $this->values[self::_GUILD_QUERY_SINGLE] = null;
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
     * Sets value of '_create' property
     *
     * @param MsgUp_GuildCreate $value Property value
     *
     * @return null
     */
    public function setCreate(MsgUp_GuildCreate $value)
    {
        return $this->set(self::_CREATE, $value);
    }

    /**
     * Returns value of '_create' property
     *
     * @return MsgUp_GuildCreate
     */
    public function getCreate()
    {
        return $this->get(self::_CREATE);
    }

    /**
     * Sets value of '_dismiss' property
     *
     * @param MsgUp_GuildDismiss $value Property value
     *
     * @return null
     */
    public function setDismiss(MsgUp_GuildDismiss $value)
    {
        return $this->set(self::_DISMISS, $value);
    }

    /**
     * Returns value of '_dismiss' property
     *
     * @return MsgUp_GuildDismiss
     */
    public function getDismiss()
    {
        return $this->get(self::_DISMISS);
    }

    /**
     * Sets value of '_list' property
     *
     * @param MsgUp_GuildList $value Property value
     *
     * @return null
     */
    public function setList(MsgUp_GuildList $value)
    {
        return $this->set(self::_LIST, $value);
    }

    /**
     * Returns value of '_list' property
     *
     * @return MsgUp_GuildList
     */
    public function getList()
    {
        return $this->get(self::_LIST);
    }

    /**
     * Sets value of '_search' property
     *
     * @param MsgUp_GuildSearch $value Property value
     *
     * @return null
     */
    public function setSearch(MsgUp_GuildSearch $value)
    {
        return $this->set(self::_SEARCH, $value);
    }

    /**
     * Returns value of '_search' property
     *
     * @return MsgUp_GuildSearch
     */
    public function getSearch()
    {
        return $this->get(self::_SEARCH);
    }

    /**
     * Sets value of '_join' property
     *
     * @param MsgUp_GuildJoin $value Property value
     *
     * @return null
     */
    public function setJoin(MsgUp_GuildJoin $value)
    {
        return $this->set(self::_JOIN, $value);
    }

    /**
     * Returns value of '_join' property
     *
     * @return MsgUp_GuildJoin
     */
    public function getJoin()
    {
        return $this->get(self::_JOIN);
    }

    /**
     * Sets value of '_join_confirm' property
     *
     * @param MsgUp_GuildJoinConfirm $value Property value
     *
     * @return null
     */
    public function setJoinConfirm(MsgUp_GuildJoinConfirm $value)
    {
        return $this->set(self::_JOIN_CONFIRM, $value);
    }

    /**
     * Returns value of '_join_confirm' property
     *
     * @return MsgUp_GuildJoinConfirm
     */
    public function getJoinConfirm()
    {
        return $this->get(self::_JOIN_CONFIRM);
    }

    /**
     * Sets value of '_leave' property
     *
     * @param MsgUp_GuildLeave $value Property value
     *
     * @return null
     */
    public function setLeave(MsgUp_GuildLeave $value)
    {
        return $this->set(self::_LEAVE, $value);
    }

    /**
     * Returns value of '_leave' property
     *
     * @return MsgUp_GuildLeave
     */
    public function getLeave()
    {
        return $this->get(self::_LEAVE);
    }

    /**
     * Sets value of '_kick' property
     *
     * @param MsgUp_GuildKick $value Property value
     *
     * @return null
     */
    public function setKick(MsgUp_GuildKick $value)
    {
        return $this->set(self::_KICK, $value);
    }

    /**
     * Returns value of '_kick' property
     *
     * @return MsgUp_GuildKick
     */
    public function getKick()
    {
        return $this->get(self::_KICK);
    }

    /**
     * Sets value of '_set' property
     *
     * @param MsgUp_GuildSet $value Property value
     *
     * @return null
     */
    public function setSet(MsgUp_GuildSet $value)
    {
        return $this->set(self::_SET, $value);
    }

    /**
     * Returns value of '_set' property
     *
     * @return MsgUp_GuildSet
     */
    public function getSet()
    {
        return $this->get(self::_SET);
    }

    /**
     * Sets value of '_query' property
     *
     * @param MsgUp_GuildQuery $value Property value
     *
     * @return null
     */
    public function setQuery(MsgUp_GuildQuery $value)
    {
        return $this->set(self::_QUERY, $value);
    }

    /**
     * Returns value of '_query' property
     *
     * @return MsgUp_GuildQuery
     */
    public function getQuery()
    {
        return $this->get(self::_QUERY);
    }

    /**
     * Sets value of '_open_pannel' property
     *
     * @param MsgUp_GuildOpenPannel $value Property value
     *
     * @return null
     */
    public function setOpenPannel(MsgUp_GuildOpenPannel $value)
    {
        return $this->set(self::_OPEN_PANNEL, $value);
    }

    /**
     * Returns value of '_open_pannel' property
     *
     * @return MsgUp_GuildOpenPannel
     */
    public function getOpenPannel()
    {
        return $this->get(self::_OPEN_PANNEL);
    }

    /**
     * Sets value of '_set_job' property
     *
     * @param MsgUp_GuildSetJob $value Property value
     *
     * @return null
     */
    public function setSetJob(MsgUp_GuildSetJob $value)
    {
        return $this->set(self::_SET_JOB, $value);
    }

    /**
     * Returns value of '_set_job' property
     *
     * @return MsgUp_GuildSetJob
     */
    public function getSetJob()
    {
        return $this->get(self::_SET_JOB);
    }

    /**
     * Sets value of '_add_hire' property
     *
     * @param MsgUp_GuildAddHire $value Property value
     *
     * @return null
     */
    public function setAddHire(MsgUp_GuildAddHire $value)
    {
        return $this->set(self::_ADD_HIRE, $value);
    }

    /**
     * Returns value of '_add_hire' property
     *
     * @return MsgUp_GuildAddHire
     */
    public function getAddHire()
    {
        return $this->get(self::_ADD_HIRE);
    }

    /**
     * Sets value of '_del_hire' property
     *
     * @param MsgUp_GuildDelHire $value Property value
     *
     * @return null
     */
    public function setDelHire(MsgUp_GuildDelHire $value)
    {
        return $this->set(self::_DEL_HIRE, $value);
    }

    /**
     * Returns value of '_del_hire' property
     *
     * @return MsgUp_GuildDelHire
     */
    public function getDelHire()
    {
        return $this->get(self::_DEL_HIRE);
    }

    /**
     * Sets value of '_query_hires' property
     *
     * @param MsgUp_GuildQueryHires $value Property value
     *
     * @return null
     */
    public function setQueryHires(MsgUp_GuildQueryHires $value)
    {
        return $this->set(self::_QUERY_HIRES, $value);
    }

    /**
     * Returns value of '_query_hires' property
     *
     * @return MsgUp_GuildQueryHires
     */
    public function getQueryHires()
    {
        return $this->get(self::_QUERY_HIRES);
    }

    /**
     * Sets value of '_hire_hero' property
     *
     * @param MsgUp_GuildHireHero $value Property value
     *
     * @return null
     */
    public function setHireHero(MsgUp_GuildHireHero $value)
    {
        return $this->set(self::_HIRE_HERO, $value);
    }

    /**
     * Returns value of '_hire_hero' property
     *
     * @return MsgUp_GuildHireHero
     */
    public function getHireHero()
    {
        return $this->get(self::_HIRE_HERO);
    }

    /**
     * Sets value of '_worship_req' property
     *
     * @param MsgUp_GuildWorshipReq $value Property value
     *
     * @return null
     */
    public function setWorshipReq(MsgUp_GuildWorshipReq $value)
    {
        return $this->set(self::_WORSHIP_REQ, $value);
    }

    /**
     * Returns value of '_worship_req' property
     *
     * @return MsgUp_GuildWorshipReq
     */
    public function getWorshipReq()
    {
        return $this->get(self::_WORSHIP_REQ);
    }

    /**
     * Sets value of '_worship_withdraw' property
     *
     * @param MsgUp_GuildWorshipWithdraw $value Property value
     *
     * @return null
     */
    public function setWorshipWithdraw(MsgUp_GuildWorshipWithdraw $value)
    {
        return $this->set(self::_WORSHIP_WITHDRAW, $value);
    }

    /**
     * Returns value of '_worship_withdraw' property
     *
     * @return MsgUp_GuildWorshipWithdraw
     */
    public function getWorshipWithdraw()
    {
        return $this->get(self::_WORSHIP_WITHDRAW);
    }

    /**
     * Sets value of '_query_hh_detail' property
     *
     * @param MsgUp_GuildQureyHhDetail $value Property value
     *
     * @return null
     */
    public function setQueryHhDetail(MsgUp_GuildQureyHhDetail $value)
    {
        return $this->set(self::_QUERY_HH_DETAIL, $value);
    }

    /**
     * Returns value of '_query_hh_detail' property
     *
     * @return MsgUp_GuildQureyHhDetail
     */
    public function getQueryHhDetail()
    {
        return $this->get(self::_QUERY_HH_DETAIL);
    }

    /**
     * Sets value of '_instance_query' property
     *
     * @param MsgUp_GuildInstanceQuery $value Property value
     *
     * @return null
     */
    public function setInstanceQuery(MsgUp_GuildInstanceQuery $value)
    {
        return $this->set(self::_INSTANCE_QUERY, $value);
    }

    /**
     * Returns value of '_instance_query' property
     *
     * @return MsgUp_GuildInstanceQuery
     */
    public function getInstanceQuery()
    {
        return $this->get(self::_INSTANCE_QUERY);
    }

    /**
     * Sets value of '_instance_detail' property
     *
     * @param MsgUp_GuildInstanceDetail $value Property value
     *
     * @return null
     */
    public function setInstanceDetail(MsgUp_GuildInstanceDetail $value)
    {
        return $this->set(self::_INSTANCE_DETAIL, $value);
    }

    /**
     * Returns value of '_instance_detail' property
     *
     * @return MsgUp_GuildInstanceDetail
     */
    public function getInstanceDetail()
    {
        return $this->get(self::_INSTANCE_DETAIL);
    }

    /**
     * Sets value of '_instance_start' property
     *
     * @param MsgUp_GuildInstanceStart $value Property value
     *
     * @return null
     */
    public function setInstanceStart(MsgUp_GuildInstanceStart $value)
    {
        return $this->set(self::_INSTANCE_START, $value);
    }

    /**
     * Returns value of '_instance_start' property
     *
     * @return MsgUp_GuildInstanceStart
     */
    public function getInstanceStart()
    {
        return $this->get(self::_INSTANCE_START);
    }

    /**
     * Sets value of '_instance_end' property
     *
     * @param MsgUp_GuildInstanceEnd $value Property value
     *
     * @return null
     */
    public function setInstanceEnd(MsgUp_GuildInstanceEnd $value)
    {
        return $this->set(self::_INSTANCE_END, $value);
    }

    /**
     * Returns value of '_instance_end' property
     *
     * @return MsgUp_GuildInstanceEnd
     */
    public function getInstanceEnd()
    {
        return $this->get(self::_INSTANCE_END);
    }

    /**
     * Sets value of '_instance_drop' property
     *
     * @param MsgUp_GuildInstanceDrop $value Property value
     *
     * @return null
     */
    public function setInstanceDrop(MsgUp_GuildInstanceDrop $value)
    {
        return $this->set(self::_INSTANCE_DROP, $value);
    }

    /**
     * Returns value of '_instance_drop' property
     *
     * @return MsgUp_GuildInstanceDrop
     */
    public function getInstanceDrop()
    {
        return $this->get(self::_INSTANCE_DROP);
    }

    /**
     * Sets value of '_instance_open' property
     *
     * @param MsgUp_GuildInstanceOpen $value Property value
     *
     * @return null
     */
    public function setInstanceOpen(MsgUp_GuildInstanceOpen $value)
    {
        return $this->set(self::_INSTANCE_OPEN, $value);
    }

    /**
     * Returns value of '_instance_open' property
     *
     * @return MsgUp_GuildInstanceOpen
     */
    public function getInstanceOpen()
    {
        return $this->get(self::_INSTANCE_OPEN);
    }

    /**
     * Sets value of '_instance_apply' property
     *
     * @param MsgUp_GuildInstanceApply $value Property value
     *
     * @return null
     */
    public function setInstanceApply(MsgUp_GuildInstanceApply $value)
    {
        return $this->set(self::_INSTANCE_APPLY, $value);
    }

    /**
     * Returns value of '_instance_apply' property
     *
     * @return MsgUp_GuildInstanceApply
     */
    public function getInstanceApply()
    {
        return $this->get(self::_INSTANCE_APPLY);
    }

    /**
     * Sets value of '_drop_info' property
     *
     * @param MsgUp_GuildDropInfo $value Property value
     *
     * @return null
     */
    public function setDropInfo(MsgUp_GuildDropInfo $value)
    {
        return $this->set(self::_DROP_INFO, $value);
    }

    /**
     * Returns value of '_drop_info' property
     *
     * @return MsgUp_GuildDropInfo
     */
    public function getDropInfo()
    {
        return $this->get(self::_DROP_INFO);
    }

    /**
     * Sets value of '_drop_give' property
     *
     * @param MsgUp_GuildDropGive $value Property value
     *
     * @return null
     */
    public function setDropGive(MsgUp_GuildDropGive $value)
    {
        return $this->set(self::_DROP_GIVE, $value);
    }

    /**
     * Returns value of '_drop_give' property
     *
     * @return MsgUp_GuildDropGive
     */
    public function getDropGive()
    {
        return $this->get(self::_DROP_GIVE);
    }

    /**
     * Sets value of '_instance_damage' property
     *
     * @param MsgUp_GuildInstanceDamage $value Property value
     *
     * @return null
     */
    public function setInstanceDamage(MsgUp_GuildInstanceDamage $value)
    {
        return $this->set(self::_INSTANCE_DAMAGE, $value);
    }

    /**
     * Returns value of '_instance_damage' property
     *
     * @return MsgUp_GuildInstanceDamage
     */
    public function getInstanceDamage()
    {
        return $this->get(self::_INSTANCE_DAMAGE);
    }

    /**
     * Sets value of '_items_history' property
     *
     * @param MsgUp_GuildItemsHistory $value Property value
     *
     * @return null
     */
    public function setItemsHistory(MsgUp_GuildItemsHistory $value)
    {
        return $this->set(self::_ITEMS_HISTORY, $value);
    }

    /**
     * Returns value of '_items_history' property
     *
     * @return MsgUp_GuildItemsHistory
     */
    public function getItemsHistory()
    {
        return $this->get(self::_ITEMS_HISTORY);
    }

    /**
     * Sets value of '_guild_jump' property
     *
     * @param MsgUp_GuildJump $value Property value
     *
     * @return null
     */
    public function setGuildJump(MsgUp_GuildJump $value)
    {
        return $this->set(self::_GUILD_JUMP, $value);
    }

    /**
     * Returns value of '_guild_jump' property
     *
     * @return MsgUp_GuildJump
     */
    public function getGuildJump()
    {
        return $this->get(self::_GUILD_JUMP);
    }

    /**
     * Sets value of '_guild_app_queue' property
     *
     * @param MsgUp_GuildAppQueue $value Property value
     *
     * @return null
     */
    public function setGuildAppQueue(MsgUp_GuildAppQueue $value)
    {
        return $this->set(self::_GUILD_APP_QUEUE, $value);
    }

    /**
     * Returns value of '_guild_app_queue' property
     *
     * @return MsgUp_GuildAppQueue
     */
    public function getGuildAppQueue()
    {
        return $this->get(self::_GUILD_APP_QUEUE);
    }

    /**
     * Sets value of '_instance_prepare' property
     *
     * @param MsgUp_GuildPrepareInstance $value Property value
     *
     * @return null
     */
    public function setInstancePrepare(MsgUp_GuildPrepareInstance $value)
    {
        return $this->set(self::_INSTANCE_PREPARE, $value);
    }

    /**
     * Returns value of '_instance_prepare' property
     *
     * @return MsgUp_GuildPrepareInstance
     */
    public function getInstancePrepare()
    {
        return $this->get(self::_INSTANCE_PREPARE);
    }

    /**
     * Sets value of '_guild_query_member' property
     *
     * @param MsgUp_GuildQueryMember $value Property value
     *
     * @return null
     */
    public function setGuildQueryMember(MsgUp_GuildQueryMember $value)
    {
        return $this->set(self::_GUILD_QUERY_MEMBER, $value);
    }

    /**
     * Returns value of '_guild_query_member' property
     *
     * @return MsgUp_GuildQueryMember
     */
    public function getGuildQueryMember()
    {
        return $this->get(self::_GUILD_QUERY_MEMBER);
    }

    /**
     * Sets value of '_guild_stage_rank' property
     *
     * @param MsgUp_GuildStageRank $value Property value
     *
     * @return null
     */
    public function setGuildStageRank(MsgUp_GuildStageRank $value)
    {
        return $this->set(self::_GUILD_STAGE_RANK, $value);
    }

    /**
     * Returns value of '_guild_stage_rank' property
     *
     * @return MsgUp_GuildStageRank
     */
    public function getGuildStageRank()
    {
        return $this->get(self::_GUILD_STAGE_RANK);
    }

    /**
     * Sets value of '_set_jump' property
     *
     * @param MsgUp_GuildSetJump $value Property value
     *
     * @return null
     */
    public function setSetJump(MsgUp_GuildSetJump $value)
    {
        return $this->set(self::_SET_JUMP, $value);
    }

    /**
     * Returns value of '_set_jump' property
     *
     * @return MsgUp_GuildSetJump
     */
    public function getSetJump()
    {
        return $this->get(self::_SET_JUMP);
    }

    /**
     * Sets value of '_guild_send_mail' property
     *
     * @param MsgUp_GuildSendMail $value Property value
     *
     * @return null
     */
    public function setGuildSendMail(MsgUp_GuildSendMail $value)
    {
        return $this->set(self::_GUILD_SEND_MAIL, $value);
    }

    /**
     * Returns value of '_guild_send_mail' property
     *
     * @return MsgUp_GuildSendMail
     */
    public function getGuildSendMail()
    {
        return $this->get(self::_GUILD_SEND_MAIL);
    }

    /**
     * Sets value of '_guild_query_single' property
     *
     * @param MsgUp_GuildQuerySingle $value Property value
     *
     * @return null
     */
    public function setGuildQuerySingle(MsgUp_GuildQuerySingle $value)
    {
        return $this->set(self::_GUILD_QUERY_SINGLE, $value);
    }

    /**
     * Returns value of '_guild_query_single' property
     *
     * @return MsgUp_GuildQuerySingle
     */
    public function getGuildQuerySingle()
    {
        return $this->get(self::_GUILD_QUERY_SINGLE);
    }
}

/**
 * type enum embedded in guild_query_single message
 */
final class MsgUp_GuildQuerySingle_Type
{
    const monthcard = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'monthcard' => self::monthcard,
        );
    }
}

/**
 * guild_query_single message
 */
class MsgUp_GuildQuerySingle extends \ProtobufMessage
{
    /* Field index constants */
    const QUERY_TYPE = 1;
    const UID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUERY_TYPE => array(
            'name' => 'query_type',
            'repeated' => true,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
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
        $this->values[self::QUERY_TYPE] = array();
        $this->values[self::UID] = null;
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
     * Appends value to 'query_type' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendQueryType($value)
    {
        return $this->append(self::QUERY_TYPE, $value);
    }

    /**
     * Clears 'query_type' list
     *
     * @return null
     */
    public function clearQueryType()
    {
        return $this->clear(self::QUERY_TYPE);
    }

    /**
     * Returns 'query_type' list
     *
     * @return int[]
     */
    public function getQueryType()
    {
        return $this->get(self::QUERY_TYPE);
    }

    /**
     * Returns 'query_type' iterator
     *
     * @return ArrayIterator
     */
    public function getQueryTypeIterator()
    {
        return new \ArrayIterator($this->get(self::QUERY_TYPE));
    }

    /**
     * Returns element from 'query_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getQueryTypeAt($offset)
    {
        return $this->get(self::QUERY_TYPE, $offset);
    }

    /**
     * Returns count of 'query_type' list
     *
     * @return int
     */
    public function getQueryTypeCount()
    {
        return $this->count(self::QUERY_TYPE);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return int
     */
    public function getUid()
    {
        return $this->get(self::UID);
    }
}

/**
 * guild_send_mail message
 */
class MsgUp_GuildSendMail extends \ProtobufMessage
{
    /* Field index constants */
    const TITLE = 1;
    const CONTENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => true,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => true,
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
        $this->values[self::TITLE] = null;
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }
}

/**
 * is_can_jump enum embedded in guild_set_jump message
 */
final class MsgUp_GuildSetJump_IsCanJump
{
    const true = 1;
    const false = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'true' => self::true,
            'false' => self::false,
        );
    }
}

/**
 * guild_set_jump message
 */
class MsgUp_GuildSetJump extends \ProtobufMessage
{
    /* Field index constants */
    const _IS_CAN_JUMP = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_IS_CAN_JUMP => array(
            'name' => '_is_can_jump',
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
        $this->values[self::_IS_CAN_JUMP] = null;
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
     * Sets value of '_is_can_jump' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsCanJump($value)
    {
        return $this->set(self::_IS_CAN_JUMP, $value);
    }

    /**
     * Returns value of '_is_can_jump' property
     *
     * @return int
     */
    public function getIsCanJump()
    {
        return $this->get(self::_IS_CAN_JUMP);
    }
}

/**
 * guild_stage_rank message
 */
class MsgUp_GuildStageRank extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * guild_query_member message
 */
class MsgUp_GuildQueryMember extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_prepare_instance message
 */
class MsgUp_GuildPrepareInstance extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * guild_app_queue message
 */
class MsgUp_GuildAppQueue extends \ProtobufMessage
{
    /* Field index constants */
    const _ITEM_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ITEM_ID => array(
            'name' => '_item_id',
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
        $this->values[self::_ITEM_ID] = null;
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
}

/**
 * guild_jump message
 */
class MsgUp_GuildJump extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_items_history message
 */
class MsgUp_GuildItemsHistory extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_drop_give message
 */
class MsgUp_GuildDropGive extends \ProtobufMessage
{
    /* Field index constants */
    const _ITEM_ID = 1;
    const _RAID_ID = 2;
    const _USER_ID = 3;
    const _TIME_OUT_END = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ITEM_ID => array(
            'name' => '_item_id',
            'required' => true,
            'type' => 5,
        ),
        self::_RAID_ID => array(
            'name' => '_raid_id',
            'required' => true,
            'type' => 5,
        ),
        self::_USER_ID => array(
            'name' => '_user_id',
            'required' => true,
            'type' => 5,
        ),
        self::_TIME_OUT_END => array(
            'name' => '_time_out_end',
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
        $this->values[self::_ITEM_ID] = null;
        $this->values[self::_RAID_ID] = null;
        $this->values[self::_USER_ID] = null;
        $this->values[self::_TIME_OUT_END] = null;
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
     * Sets value of '_raid_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRaidId($value)
    {
        return $this->set(self::_RAID_ID, $value);
    }

    /**
     * Returns value of '_raid_id' property
     *
     * @return int
     */
    public function getRaidId()
    {
        return $this->get(self::_RAID_ID);
    }

    /**
     * Sets value of '_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::_USER_ID, $value);
    }

    /**
     * Returns value of '_user_id' property
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->get(self::_USER_ID);
    }

    /**
     * Sets value of '_time_out_end' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTimeOutEnd($value)
    {
        return $this->set(self::_TIME_OUT_END, $value);
    }

    /**
     * Returns value of '_time_out_end' property
     *
     * @return int
     */
    public function getTimeOutEnd()
    {
        return $this->get(self::_TIME_OUT_END);
    }
}

/**
 * guild_instance_damage message
 */
class MsgUp_GuildInstanceDamage extends \ProtobufMessage
{
    /* Field index constants */
    const _RAID_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RAID_ID => array(
            'name' => '_raid_id',
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
        $this->values[self::_RAID_ID] = null;
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
     * Sets value of '_raid_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRaidId($value)
    {
        return $this->set(self::_RAID_ID, $value);
    }

    /**
     * Returns value of '_raid_id' property
     *
     * @return int
     */
    public function getRaidId()
    {
        return $this->get(self::_RAID_ID);
    }
}

/**
 * guild_drop_info message
 */
class MsgUp_GuildDropInfo extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_instance_apply message
 */
class MsgUp_GuildInstanceApply extends \ProtobufMessage
{
    /* Field index constants */
    const _RAID_ID = 1;
    const _ITEM_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RAID_ID => array(
            'name' => '_raid_id',
            'required' => true,
            'type' => 5,
        ),
        self::_ITEM_ID => array(
            'name' => '_item_id',
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
        $this->values[self::_RAID_ID] = null;
        $this->values[self::_ITEM_ID] = null;
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
     * Sets value of '_raid_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRaidId($value)
    {
        return $this->set(self::_RAID_ID, $value);
    }

    /**
     * Returns value of '_raid_id' property
     *
     * @return int
     */
    public function getRaidId()
    {
        return $this->get(self::_RAID_ID);
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
}

/**
 * guild_instance_start message
 */
class MsgUp_GuildInstanceStart extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * guild_instance_end message
 */
class MsgUp_GuildInstanceEnd extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;
    const _HP_INFO = 2;
    const _WAVE = 3;
    const _DAMAGE = 4;
    const _PROGRESS = 5;
    const _STAGE_PROGRESS = 6;
    const _OPRATIONS = 7;
    const _HEROES = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_HP_INFO => array(
            'name' => '_hp_info',
            'repeated' => true,
            'type' => 5,
        ),
        self::_WAVE => array(
            'name' => '_wave',
            'required' => true,
            'type' => 5,
        ),
        self::_DAMAGE => array(
            'name' => '_damage',
            'required' => true,
            'type' => 5,
        ),
        self::_PROGRESS => array(
            'name' => '_progress',
            'required' => true,
            'type' => 5,
        ),
        self::_STAGE_PROGRESS => array(
            'name' => '_stage_progress',
            'required' => true,
            'type' => 5,
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_HEROES => array(
            'name' => '_heroes',
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_HP_INFO] = array();
        $this->values[self::_WAVE] = null;
        $this->values[self::_DAMAGE] = null;
        $this->values[self::_PROGRESS] = null;
        $this->values[self::_STAGE_PROGRESS] = null;
        $this->values[self::_OPRATIONS] = array();
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
     * Appends value to '_hp_info' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHpInfo($value)
    {
        return $this->append(self::_HP_INFO, $value);
    }

    /**
     * Clears '_hp_info' list
     *
     * @return null
     */
    public function clearHpInfo()
    {
        return $this->clear(self::_HP_INFO);
    }

    /**
     * Returns '_hp_info' list
     *
     * @return int[]
     */
    public function getHpInfo()
    {
        return $this->get(self::_HP_INFO);
    }

    /**
     * Returns '_hp_info' iterator
     *
     * @return ArrayIterator
     */
    public function getHpInfoIterator()
    {
        return new \ArrayIterator($this->get(self::_HP_INFO));
    }

    /**
     * Returns element from '_hp_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHpInfoAt($offset)
    {
        return $this->get(self::_HP_INFO, $offset);
    }

    /**
     * Returns count of '_hp_info' list
     *
     * @return int
     */
    public function getHpInfoCount()
    {
        return $this->count(self::_HP_INFO);
    }

    /**
     * Sets value of '_wave' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWave($value)
    {
        return $this->set(self::_WAVE, $value);
    }

    /**
     * Returns value of '_wave' property
     *
     * @return int
     */
    public function getWave()
    {
        return $this->get(self::_WAVE);
    }

    /**
     * Sets value of '_damage' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDamage($value)
    {
        return $this->set(self::_DAMAGE, $value);
    }

    /**
     * Returns value of '_damage' property
     *
     * @return int
     */
    public function getDamage()
    {
        return $this->get(self::_DAMAGE);
    }

    /**
     * Sets value of '_progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::_PROGRESS, $value);
    }

    /**
     * Returns value of '_progress' property
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->get(self::_PROGRESS);
    }

    /**
     * Sets value of '_stage_progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageProgress($value)
    {
        return $this->set(self::_STAGE_PROGRESS, $value);
    }

    /**
     * Returns value of '_stage_progress' property
     *
     * @return int
     */
    public function getStageProgress()
    {
        return $this->get(self::_STAGE_PROGRESS);
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
     * Appends value to '_heroes' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHeroes($value)
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
     * @return int[]
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
     * @return int
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
 * guild_instance_drop message
 */
class MsgUp_GuildInstanceDrop extends \ProtobufMessage
{
    /* Field index constants */
    const _RAID_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RAID_ID => array(
            'name' => '_raid_id',
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
        $this->values[self::_RAID_ID] = null;
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
     * Sets value of '_raid_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRaidId($value)
    {
        return $this->set(self::_RAID_ID, $value);
    }

    /**
     * Returns value of '_raid_id' property
     *
     * @return int
     */
    public function getRaidId()
    {
        return $this->get(self::_RAID_ID);
    }
}

/**
 * guild_instance_open message
 */
class MsgUp_GuildInstanceOpen extends \ProtobufMessage
{
    /* Field index constants */
    const _RAID_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RAID_ID => array(
            'name' => '_raid_id',
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
        $this->values[self::_RAID_ID] = null;
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
     * Sets value of '_raid_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRaidId($value)
    {
        return $this->set(self::_RAID_ID, $value);
    }

    /**
     * Returns value of '_raid_id' property
     *
     * @return int
     */
    public function getRaidId()
    {
        return $this->get(self::_RAID_ID);
    }
}

/**
 * guild_instance_query message
 */
class MsgUp_GuildInstanceQuery extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_instance_detail message
 */
class MsgUp_GuildInstanceDetail extends \ProtobufMessage
{
    /* Field index constants */
    const _STAGE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * guild_create message
 */
class MsgUp_GuildCreate extends \ProtobufMessage
{
    /* Field index constants */
    const _NAME = 1;
    const _AVATAR = 2;
    const _COUNTRY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_NAME => array(
            'name' => '_name',
            'required' => true,
            'type' => 7,
        ),
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => true,
            'type' => 5,
        ),
        self::_COUNTRY => array(
            'name' => '_country',
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
        $this->values[self::_NAME] = null;
        $this->values[self::_AVATAR] = null;
        $this->values[self::_COUNTRY] = null;
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
     * Sets value of '_country' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::_COUNTRY, $value);
    }

    /**
     * Returns value of '_country' property
     *
     * @return int
     */
    public function getCountry()
    {
        return $this->get(self::_COUNTRY);
    }
}

/**
 * guild_dismiss message
 */
class MsgUp_GuildDismiss extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_list message
 */
class MsgUp_GuildList extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_search message
 */
class MsgUp_GuildSearch extends \ProtobufMessage
{
    /* Field index constants */
    const _GUILD_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_GUILD_ID => array(
            'name' => '_guild_id',
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
        $this->values[self::_GUILD_ID] = null;
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
     * Sets value of '_guild_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGuildId($value)
    {
        return $this->set(self::_GUILD_ID, $value);
    }

    /**
     * Returns value of '_guild_id' property
     *
     * @return int
     */
    public function getGuildId()
    {
        return $this->get(self::_GUILD_ID);
    }
}

/**
 * guild_join message
 */
class MsgUp_GuildJoin extends \ProtobufMessage
{
    /* Field index constants */
    const _GUILD_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_GUILD_ID => array(
            'name' => '_guild_id',
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
        $this->values[self::_GUILD_ID] = null;
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
     * Sets value of '_guild_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGuildId($value)
    {
        return $this->set(self::_GUILD_ID, $value);
    }

    /**
     * Returns value of '_guild_id' property
     *
     * @return int
     */
    public function getGuildId()
    {
        return $this->get(self::_GUILD_ID);
    }
}

/**
 * confirm_type enum embedded in guild_join_confirm message
 */
final class MsgUp_GuildJoinConfirm_ConfirmType
{
    const accept = 1;
    const reject = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'accept' => self::accept,
            'reject' => self::reject,
        );
    }
}

/**
 * guild_join_confirm message
 */
class MsgUp_GuildJoinConfirm extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_TYPE => array(
            'default' => MsgUp_GuildJoinConfirm_ConfirmType::accept, 
            'name' => '_type',
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
        $this->values[self::_UID] = null;
        $this->values[self::_TYPE] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }
}

/**
 * guild_leave message
 */
class MsgUp_GuildLeave extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_kick message
 */
class MsgUp_GuildKick extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_UID] = null;
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
}

/**
 * guild_join_t enum embedded in guild_set message
 */
final class MsgUp_GuildSet_GuildJoinT
{
    const no_verify = 1;
    const verify = 2;
    const closed = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'no_verify' => self::no_verify,
            'verify' => self::verify,
            'closed' => self::closed,
        );
    }
}

/**
 * guild_set message
 */
class MsgUp_GuildSet extends \ProtobufMessage
{
    /* Field index constants */
    const _AVATAR = 1;
    const _JOIN_TYPE = 2;
    const _JOIN_LIMIT = 3;
    const _SLOGAN = 4;
    const _CAN_JUMP = 5;
    const _COUNTRY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_AVATAR => array(
            'name' => '_avatar',
            'required' => false,
            'type' => 5,
        ),
        self::_JOIN_TYPE => array(
            'name' => '_join_type',
            'required' => false,
            'type' => 5,
        ),
        self::_JOIN_LIMIT => array(
            'name' => '_join_limit',
            'required' => false,
            'type' => 5,
        ),
        self::_SLOGAN => array(
            'name' => '_slogan',
            'required' => false,
            'type' => 7,
        ),
        self::_CAN_JUMP => array(
            'name' => '_can_jump',
            'required' => false,
            'type' => 5,
        ),
        self::_COUNTRY => array(
            'name' => '_country',
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
        $this->values[self::_AVATAR] = null;
        $this->values[self::_JOIN_TYPE] = null;
        $this->values[self::_JOIN_LIMIT] = null;
        $this->values[self::_SLOGAN] = null;
        $this->values[self::_CAN_JUMP] = null;
        $this->values[self::_COUNTRY] = null;
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
     * Sets value of '_join_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setJoinType($value)
    {
        return $this->set(self::_JOIN_TYPE, $value);
    }

    /**
     * Returns value of '_join_type' property
     *
     * @return int
     */
    public function getJoinType()
    {
        return $this->get(self::_JOIN_TYPE);
    }

    /**
     * Sets value of '_join_limit' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setJoinLimit($value)
    {
        return $this->set(self::_JOIN_LIMIT, $value);
    }

    /**
     * Returns value of '_join_limit' property
     *
     * @return int
     */
    public function getJoinLimit()
    {
        return $this->get(self::_JOIN_LIMIT);
    }

    /**
     * Sets value of '_slogan' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSlogan($value)
    {
        return $this->set(self::_SLOGAN, $value);
    }

    /**
     * Returns value of '_slogan' property
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->get(self::_SLOGAN);
    }

    /**
     * Sets value of '_can_jump' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCanJump($value)
    {
        return $this->set(self::_CAN_JUMP, $value);
    }

    /**
     * Returns value of '_can_jump' property
     *
     * @return int
     */
    public function getCanJump()
    {
        return $this->get(self::_CAN_JUMP);
    }

    /**
     * Sets value of '_country' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::_COUNTRY, $value);
    }

    /**
     * Returns value of '_country' property
     *
     * @return int
     */
    public function getCountry()
    {
        return $this->get(self::_COUNTRY);
    }
}

/**
 * guild_query message
 */
class MsgUp_GuildQuery extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_open_pannel message
 */
class MsgUp_GuildOpenPannel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_set_job message
 */
class MsgUp_GuildSetJob extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _JOB = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_JOB => array(
            'name' => '_job',
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
        $this->values[self::_UID] = null;
        $this->values[self::_JOB] = null;
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
     * Sets value of '_job' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setJob($value)
    {
        return $this->set(self::_JOB, $value);
    }

    /**
     * Returns value of '_job' property
     *
     * @return int
     */
    public function getJob()
    {
        return $this->get(self::_JOB);
    }
}

/**
 * guild_add_hire message
 */
class MsgUp_GuildAddHire extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROID => array(
            'name' => '_heroid',
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
        $this->values[self::_HEROID] = null;
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
}

/**
 * guild_del_hire message
 */
class MsgUp_GuildDelHire extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROID => array(
            'name' => '_heroid',
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
        $this->values[self::_HEROID] = null;
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
}

/**
 * guild_query_hires message
 */
class MsgUp_GuildQueryHires extends \ProtobufMessage
{
    /* Field index constants */
    const _FROM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_FROM => array(
            'name' => '_from',
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
        $this->values[self::_FROM] = null;
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
     * Sets value of '_from' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFrom($value)
    {
        return $this->set(self::_FROM, $value);
    }

    /**
     * Returns value of '_from' property
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->get(self::_FROM);
    }
}

/**
 * guild_hire_hero message
 */
class MsgUp_GuildHireHero extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _HEROID = 2;
    const _FROM = 3;
    const _STAGE_ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_HEROID => array(
            'name' => '_heroid',
            'required' => true,
            'type' => 5,
        ),
        self::_FROM => array(
            'name' => '_from',
            'required' => true,
            'type' => 5,
        ),
        self::_STAGE_ID => array(
            'name' => '_stage_id',
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
        $this->values[self::_UID] = null;
        $this->values[self::_HEROID] = null;
        $this->values[self::_FROM] = null;
        $this->values[self::_STAGE_ID] = null;
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
     * Sets value of '_from' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFrom($value)
    {
        return $this->set(self::_FROM, $value);
    }

    /**
     * Returns value of '_from' property
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->get(self::_FROM);
    }

    /**
     * Sets value of '_stage_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStageId($value)
    {
        return $this->set(self::_STAGE_ID, $value);
    }

    /**
     * Returns value of '_stage_id' property
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->get(self::_STAGE_ID);
    }
}

/**
 * guild_worship_req message
 */
class MsgUp_GuildWorshipReq extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;
    const _UID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
            'type' => 5,
        ),
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_ID] = null;
        $this->values[self::_UID] = null;
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
     * Sets value of '_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::_ID);
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
}

/**
 * guild_worship_withdraw message
 */
class MsgUp_GuildWorshipWithdraw extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * guild_qurey_hh_detail message
 */
class MsgUp_GuildQureyHhDetail extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _HEROID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_HEROID => array(
            'name' => '_heroid',
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
        $this->values[self::_UID] = null;
        $this->values[self::_HEROID] = null;
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
}

/**
 * ask_activity_info message
 */
class MsgUp_AskActivityInfo extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * cdkey_gift message
 */
class MsgUp_CdkeyGift extends \ProtobufMessage
{
    /* Field index constants */
    const _CDKEY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CDKEY => array(
            'name' => '_cdkey',
            'required' => true,
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
        $this->values[self::_CDKEY] = null;
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
     * Sets value of '_cdkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCdkey($value)
    {
        return $this->set(self::_CDKEY, $value);
    }

    /**
     * Returns value of '_cdkey' property
     *
     * @return string
     */
    public function getCdkey()
    {
        return $this->get(self::_CDKEY);
    }
}

/**
 * excavate message
 */
class MsgUp_Excavate extends \ProtobufMessage
{
    /* Field index constants */
    const _SEARCH_EXCAVATE = 1;
    const _QUERY_EXCAVATE_DATA = 2;
    const _QUERY_EXCAVATE_HISTORY = 3;
    const _QUERY_EXCAVATE_BATTLE = 4;
    const _SET_EXCAVATE_TEAM = 5;
    const _EXCAVATE_START_BATTLE = 6;
    const _EXCAVATE_END_BATTLE = 7;
    const _QUERY_EXCAVATE_DEF = 8;
    const _CLEAR_EXCAVATE_BATTLE = 9;
    const _DRAW_EXCAVATE_DEF_RWD = 10;
    const _QUERY_REPLAY = 11;
    const _REVENGE_EXCAVATE = 12;
    const _DRAW_EXCAV_RES = 13;
    const _WITHDRAW_EXCAVATE_HERO = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SEARCH_EXCAVATE => array(
            'name' => '_search_excavate',
            'required' => false,
            'type' => 'MsgUp_SearchExcavate'
        ),
        self::_QUERY_EXCAVATE_DATA => array(
            'name' => '_query_excavate_data',
            'required' => false,
            'type' => 'MsgUp_QueryExcavateData'
        ),
        self::_QUERY_EXCAVATE_HISTORY => array(
            'name' => '_query_excavate_history',
            'required' => false,
            'type' => 'MsgUp_QueryExcavateHistory'
        ),
        self::_QUERY_EXCAVATE_BATTLE => array(
            'name' => '_query_excavate_battle',
            'required' => false,
            'type' => 'MsgUp_QueryExcavateBattle'
        ),
        self::_SET_EXCAVATE_TEAM => array(
            'name' => '_set_excavate_team',
            'required' => false,
            'type' => 'MsgUp_SetExcavateTeam'
        ),
        self::_EXCAVATE_START_BATTLE => array(
            'name' => '_excavate_start_battle',
            'required' => false,
            'type' => 'MsgUp_ExcavateStartBattle'
        ),
        self::_EXCAVATE_END_BATTLE => array(
            'name' => '_excavate_end_battle',
            'required' => false,
            'type' => 'MsgUp_ExcavateEndBattle'
        ),
        self::_QUERY_EXCAVATE_DEF => array(
            'name' => '_query_excavate_def',
            'required' => false,
            'type' => 'MsgUp_QueryExcavateDef'
        ),
        self::_CLEAR_EXCAVATE_BATTLE => array(
            'name' => '_clear_excavate_battle',
            'required' => false,
            'type' => 'MsgUp_ClearExcavateBattle'
        ),
        self::_DRAW_EXCAVATE_DEF_RWD => array(
            'name' => '_draw_excavate_def_rwd',
            'required' => false,
            'type' => 'MsgUp_DrawExcavateDefRwd'
        ),
        self::_QUERY_REPLAY => array(
            'name' => '_query_replay',
            'required' => false,
            'type' => 'MsgUp_QueryReplay'
        ),
        self::_REVENGE_EXCAVATE => array(
            'name' => '_revenge_excavate',
            'required' => false,
            'type' => 'MsgUp_RevengeExcavate'
        ),
        self::_DRAW_EXCAV_RES => array(
            'name' => '_draw_excav_res',
            'required' => false,
            'type' => 'MsgUp_DrawExcavRes'
        ),
        self::_WITHDRAW_EXCAVATE_HERO => array(
            'name' => '_withdraw_excavate_hero',
            'required' => false,
            'type' => 'MsgUp_WithdrawExcavateHero'
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
        $this->values[self::_SEARCH_EXCAVATE] = null;
        $this->values[self::_QUERY_EXCAVATE_DATA] = null;
        $this->values[self::_QUERY_EXCAVATE_HISTORY] = null;
        $this->values[self::_QUERY_EXCAVATE_BATTLE] = null;
        $this->values[self::_SET_EXCAVATE_TEAM] = null;
        $this->values[self::_EXCAVATE_START_BATTLE] = null;
        $this->values[self::_EXCAVATE_END_BATTLE] = null;
        $this->values[self::_QUERY_EXCAVATE_DEF] = null;
        $this->values[self::_CLEAR_EXCAVATE_BATTLE] = null;
        $this->values[self::_DRAW_EXCAVATE_DEF_RWD] = null;
        $this->values[self::_QUERY_REPLAY] = null;
        $this->values[self::_REVENGE_EXCAVATE] = null;
        $this->values[self::_DRAW_EXCAV_RES] = null;
        $this->values[self::_WITHDRAW_EXCAVATE_HERO] = null;
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
     * Sets value of '_search_excavate' property
     *
     * @param MsgUp_SearchExcavate $value Property value
     *
     * @return null
     */
    public function setSearchExcavate(MsgUp_SearchExcavate $value)
    {
        return $this->set(self::_SEARCH_EXCAVATE, $value);
    }

    /**
     * Returns value of '_search_excavate' property
     *
     * @return MsgUp_SearchExcavate
     */
    public function getSearchExcavate()
    {
        return $this->get(self::_SEARCH_EXCAVATE);
    }

    /**
     * Sets value of '_query_excavate_data' property
     *
     * @param MsgUp_QueryExcavateData $value Property value
     *
     * @return null
     */
    public function setQueryExcavateData(MsgUp_QueryExcavateData $value)
    {
        return $this->set(self::_QUERY_EXCAVATE_DATA, $value);
    }

    /**
     * Returns value of '_query_excavate_data' property
     *
     * @return MsgUp_QueryExcavateData
     */
    public function getQueryExcavateData()
    {
        return $this->get(self::_QUERY_EXCAVATE_DATA);
    }

    /**
     * Sets value of '_query_excavate_history' property
     *
     * @param MsgUp_QueryExcavateHistory $value Property value
     *
     * @return null
     */
    public function setQueryExcavateHistory(MsgUp_QueryExcavateHistory $value)
    {
        return $this->set(self::_QUERY_EXCAVATE_HISTORY, $value);
    }

    /**
     * Returns value of '_query_excavate_history' property
     *
     * @return MsgUp_QueryExcavateHistory
     */
    public function getQueryExcavateHistory()
    {
        return $this->get(self::_QUERY_EXCAVATE_HISTORY);
    }

    /**
     * Sets value of '_query_excavate_battle' property
     *
     * @param MsgUp_QueryExcavateBattle $value Property value
     *
     * @return null
     */
    public function setQueryExcavateBattle(MsgUp_QueryExcavateBattle $value)
    {
        return $this->set(self::_QUERY_EXCAVATE_BATTLE, $value);
    }

    /**
     * Returns value of '_query_excavate_battle' property
     *
     * @return MsgUp_QueryExcavateBattle
     */
    public function getQueryExcavateBattle()
    {
        return $this->get(self::_QUERY_EXCAVATE_BATTLE);
    }

    /**
     * Sets value of '_set_excavate_team' property
     *
     * @param MsgUp_SetExcavateTeam $value Property value
     *
     * @return null
     */
    public function setSetExcavateTeam(MsgUp_SetExcavateTeam $value)
    {
        return $this->set(self::_SET_EXCAVATE_TEAM, $value);
    }

    /**
     * Returns value of '_set_excavate_team' property
     *
     * @return MsgUp_SetExcavateTeam
     */
    public function getSetExcavateTeam()
    {
        return $this->get(self::_SET_EXCAVATE_TEAM);
    }

    /**
     * Sets value of '_excavate_start_battle' property
     *
     * @param MsgUp_ExcavateStartBattle $value Property value
     *
     * @return null
     */
    public function setExcavateStartBattle(MsgUp_ExcavateStartBattle $value)
    {
        return $this->set(self::_EXCAVATE_START_BATTLE, $value);
    }

    /**
     * Returns value of '_excavate_start_battle' property
     *
     * @return MsgUp_ExcavateStartBattle
     */
    public function getExcavateStartBattle()
    {
        return $this->get(self::_EXCAVATE_START_BATTLE);
    }

    /**
     * Sets value of '_excavate_end_battle' property
     *
     * @param MsgUp_ExcavateEndBattle $value Property value
     *
     * @return null
     */
    public function setExcavateEndBattle(MsgUp_ExcavateEndBattle $value)
    {
        return $this->set(self::_EXCAVATE_END_BATTLE, $value);
    }

    /**
     * Returns value of '_excavate_end_battle' property
     *
     * @return MsgUp_ExcavateEndBattle
     */
    public function getExcavateEndBattle()
    {
        return $this->get(self::_EXCAVATE_END_BATTLE);
    }

    /**
     * Sets value of '_query_excavate_def' property
     *
     * @param MsgUp_QueryExcavateDef $value Property value
     *
     * @return null
     */
    public function setQueryExcavateDef(MsgUp_QueryExcavateDef $value)
    {
        return $this->set(self::_QUERY_EXCAVATE_DEF, $value);
    }

    /**
     * Returns value of '_query_excavate_def' property
     *
     * @return MsgUp_QueryExcavateDef
     */
    public function getQueryExcavateDef()
    {
        return $this->get(self::_QUERY_EXCAVATE_DEF);
    }

    /**
     * Sets value of '_clear_excavate_battle' property
     *
     * @param MsgUp_ClearExcavateBattle $value Property value
     *
     * @return null
     */
    public function setClearExcavateBattle(MsgUp_ClearExcavateBattle $value)
    {
        return $this->set(self::_CLEAR_EXCAVATE_BATTLE, $value);
    }

    /**
     * Returns value of '_clear_excavate_battle' property
     *
     * @return MsgUp_ClearExcavateBattle
     */
    public function getClearExcavateBattle()
    {
        return $this->get(self::_CLEAR_EXCAVATE_BATTLE);
    }

    /**
     * Sets value of '_draw_excavate_def_rwd' property
     *
     * @param MsgUp_DrawExcavateDefRwd $value Property value
     *
     * @return null
     */
    public function setDrawExcavateDefRwd(MsgUp_DrawExcavateDefRwd $value)
    {
        return $this->set(self::_DRAW_EXCAVATE_DEF_RWD, $value);
    }

    /**
     * Returns value of '_draw_excavate_def_rwd' property
     *
     * @return MsgUp_DrawExcavateDefRwd
     */
    public function getDrawExcavateDefRwd()
    {
        return $this->get(self::_DRAW_EXCAVATE_DEF_RWD);
    }

    /**
     * Sets value of '_query_replay' property
     *
     * @param MsgUp_QueryReplay $value Property value
     *
     * @return null
     */
    public function setQueryReplay(MsgUp_QueryReplay $value)
    {
        return $this->set(self::_QUERY_REPLAY, $value);
    }

    /**
     * Returns value of '_query_replay' property
     *
     * @return MsgUp_QueryReplay
     */
    public function getQueryReplay()
    {
        return $this->get(self::_QUERY_REPLAY);
    }

    /**
     * Sets value of '_revenge_excavate' property
     *
     * @param MsgUp_RevengeExcavate $value Property value
     *
     * @return null
     */
    public function setRevengeExcavate(MsgUp_RevengeExcavate $value)
    {
        return $this->set(self::_REVENGE_EXCAVATE, $value);
    }

    /**
     * Returns value of '_revenge_excavate' property
     *
     * @return MsgUp_RevengeExcavate
     */
    public function getRevengeExcavate()
    {
        return $this->get(self::_REVENGE_EXCAVATE);
    }

    /**
     * Sets value of '_draw_excav_res' property
     *
     * @param MsgUp_DrawExcavRes $value Property value
     *
     * @return null
     */
    public function setDrawExcavRes(MsgUp_DrawExcavRes $value)
    {
        return $this->set(self::_DRAW_EXCAV_RES, $value);
    }

    /**
     * Returns value of '_draw_excav_res' property
     *
     * @return MsgUp_DrawExcavRes
     */
    public function getDrawExcavRes()
    {
        return $this->get(self::_DRAW_EXCAV_RES);
    }

    /**
     * Sets value of '_withdraw_excavate_hero' property
     *
     * @param MsgUp_WithdrawExcavateHero $value Property value
     *
     * @return null
     */
    public function setWithdrawExcavateHero(MsgUp_WithdrawExcavateHero $value)
    {
        return $this->set(self::_WITHDRAW_EXCAVATE_HERO, $value);
    }

    /**
     * Returns value of '_withdraw_excavate_hero' property
     *
     * @return MsgUp_WithdrawExcavateHero
     */
    public function getWithdrawExcavateHero()
    {
        return $this->get(self::_WITHDRAW_EXCAVATE_HERO);
    }
}

/**
 * draw_excav_res message
 */
class MsgUp_DrawExcavRes extends \ProtobufMessage
{
    /* Field index constants */
    const _MINE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_MINE_ID => array(
            'name' => '_mine_id',
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
        $this->values[self::_MINE_ID] = null;
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
     * Sets value of '_mine_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMineId($value)
    {
        return $this->set(self::_MINE_ID, $value);
    }

    /**
     * Returns value of '_mine_id' property
     *
     * @return int
     */
    public function getMineId()
    {
        return $this->get(self::_MINE_ID);
    }
}

/**
 * search_excavate_type enum embedded in search_excavate message
 */
final class MsgUp_SearchExcavate_SearchExcavateType
{
    const gold = 1;
    const exp = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'gold' => self::gold,
            'exp' => self::exp,
        );
    }
}

/**
 * search_excavate message
 */
class MsgUp_SearchExcavate extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
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
        $this->values[self::_TYPE] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }
}

/**
 * query_excavate_data message
 */
class MsgUp_QueryExcavateData extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_excavate_history message
 */
class MsgUp_QueryExcavateHistory extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_excavate_battle message
 */
class MsgUp_QueryExcavateBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
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
        $this->values[self::_ID] = null;
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
     * Sets value of '_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return string
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }
}

/**
 * set_excavate_team message
 */
class MsgUp_SetExcavateTeam extends \ProtobufMessage
{
    /* Field index constants */
    const _EXCAVATE_ID = 1;
    const _TID = 2;
    const _EXCAVATE_TYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_EXCAVATE_ID => array(
            'name' => '_excavate_id',
            'required' => false,
            'type' => 5,
        ),
        self::_TID => array(
            'name' => '_tid',
            'repeated' => true,
            'type' => 5,
        ),
        self::_EXCAVATE_TYPE => array(
            'name' => '_excavate_type',
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
        $this->values[self::_EXCAVATE_ID] = null;
        $this->values[self::_TID] = array();
        $this->values[self::_EXCAVATE_TYPE] = null;
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
     * Sets value of '_excavate_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExcavateId($value)
    {
        return $this->set(self::_EXCAVATE_ID, $value);
    }

    /**
     * Returns value of '_excavate_id' property
     *
     * @return int
     */
    public function getExcavateId()
    {
        return $this->get(self::_EXCAVATE_ID);
    }

    /**
     * Appends value to '_tid' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendTid($value)
    {
        return $this->append(self::_TID, $value);
    }

    /**
     * Clears '_tid' list
     *
     * @return null
     */
    public function clearTid()
    {
        return $this->clear(self::_TID);
    }

    /**
     * Returns '_tid' list
     *
     * @return int[]
     */
    public function getTid()
    {
        return $this->get(self::_TID);
    }

    /**
     * Returns '_tid' iterator
     *
     * @return ArrayIterator
     */
    public function getTidIterator()
    {
        return new \ArrayIterator($this->get(self::_TID));
    }

    /**
     * Returns element from '_tid' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getTidAt($offset)
    {
        return $this->get(self::_TID, $offset);
    }

    /**
     * Returns count of '_tid' list
     *
     * @return int
     */
    public function getTidCount()
    {
        return $this->count(self::_TID);
    }

    /**
     * Sets value of '_excavate_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExcavateType($value)
    {
        return $this->set(self::_EXCAVATE_TYPE, $value);
    }

    /**
     * Returns value of '_excavate_type' property
     *
     * @return int
     */
    public function getExcavateType()
    {
        return $this->get(self::_EXCAVATE_TYPE);
    }
}

/**
 * excavate_start_battle message
 */
class MsgUp_ExcavateStartBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _HEROIDS = 1;
    const _EXCAVATE_ID = 2;
    const _TEAM_ID = 3;
    const _TEAM_SVR_ID = 4;
    const _USE_HIRE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HEROIDS => array(
            'name' => '_heroids',
            'repeated' => true,
            'type' => 5,
        ),
        self::_EXCAVATE_ID => array(
            'name' => '_excavate_id',
            'required' => true,
            'type' => 5,
        ),
        self::_TEAM_ID => array(
            'name' => '_team_id',
            'required' => true,
            'type' => 5,
        ),
        self::_TEAM_SVR_ID => array(
            'name' => '_team_svr_id',
            'required' => false,
            'type' => 5,
        ),
        self::_USE_HIRE => array(
            'name' => '_use_hire',
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
        $this->values[self::_HEROIDS] = array();
        $this->values[self::_EXCAVATE_ID] = null;
        $this->values[self::_TEAM_ID] = null;
        $this->values[self::_TEAM_SVR_ID] = null;
        $this->values[self::_USE_HIRE] = null;
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
     * Appends value to '_heroids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHeroids($value)
    {
        return $this->append(self::_HEROIDS, $value);
    }

    /**
     * Clears '_heroids' list
     *
     * @return null
     */
    public function clearHeroids()
    {
        return $this->clear(self::_HEROIDS);
    }

    /**
     * Returns '_heroids' list
     *
     * @return int[]
     */
    public function getHeroids()
    {
        return $this->get(self::_HEROIDS);
    }

    /**
     * Returns '_heroids' iterator
     *
     * @return ArrayIterator
     */
    public function getHeroidsIterator()
    {
        return new \ArrayIterator($this->get(self::_HEROIDS));
    }

    /**
     * Returns element from '_heroids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHeroidsAt($offset)
    {
        return $this->get(self::_HEROIDS, $offset);
    }

    /**
     * Returns count of '_heroids' list
     *
     * @return int
     */
    public function getHeroidsCount()
    {
        return $this->count(self::_HEROIDS);
    }

    /**
     * Sets value of '_excavate_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExcavateId($value)
    {
        return $this->set(self::_EXCAVATE_ID, $value);
    }

    /**
     * Returns value of '_excavate_id' property
     *
     * @return int
     */
    public function getExcavateId()
    {
        return $this->get(self::_EXCAVATE_ID);
    }

    /**
     * Sets value of '_team_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTeamId($value)
    {
        return $this->set(self::_TEAM_ID, $value);
    }

    /**
     * Returns value of '_team_id' property
     *
     * @return int
     */
    public function getTeamId()
    {
        return $this->get(self::_TEAM_ID);
    }

    /**
     * Sets value of '_team_svr_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTeamSvrId($value)
    {
        return $this->set(self::_TEAM_SVR_ID, $value);
    }

    /**
     * Returns value of '_team_svr_id' property
     *
     * @return int
     */
    public function getTeamSvrId()
    {
        return $this->get(self::_TEAM_SVR_ID);
    }

    /**
     * Sets value of '_use_hire' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUseHire($value)
    {
        return $this->set(self::_USE_HIRE, $value);
    }

    /**
     * Returns value of '_use_hire' property
     *
     * @return int
     */
    public function getUseHire()
    {
        return $this->get(self::_USE_HIRE);
    }
}

/**
 * excavate_end_battle message
 */
class MsgUp_ExcavateEndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;
    const _SELF_HEROES = 2;
    const _OPPO_HEROES = 3;
    const _OPRATIONS = 4;
    const _TYPE_ID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
            'repeated' => true,
            'type' => 'MsgUp_ExcavateHero'
        ),
        self::_OPPO_HEROES => array(
            'name' => '_oppo_heroes',
            'repeated' => true,
            'type' => 'MsgUp_ExcavateHero'
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
            'repeated' => true,
            'type' => 5,
        ),
        self::_TYPE_ID => array(
            'name' => '_type_id',
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_SELF_HEROES] = array();
        $this->values[self::_OPPO_HEROES] = array();
        $this->values[self::_OPRATIONS] = array();
        $this->values[self::_TYPE_ID] = null;
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
     * @param MsgUp_ExcavateHero $value Value to append
     *
     * @return null
     */
    public function appendSelfHeroes(MsgUp_ExcavateHero $value)
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
     * @return MsgUp_ExcavateHero[]
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
     * @return MsgUp_ExcavateHero
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
     * @param MsgUp_ExcavateHero $value Value to append
     *
     * @return null
     */
    public function appendOppoHeroes(MsgUp_ExcavateHero $value)
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
     * @return MsgUp_ExcavateHero[]
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
     * @return MsgUp_ExcavateHero
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
     * Sets value of '_type_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTypeId($value)
    {
        return $this->set(self::_TYPE_ID, $value);
    }

    /**
     * Returns value of '_type_id' property
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->get(self::_TYPE_ID);
    }
}

/**
 * query_excavate_def message
 */
class MsgUp_QueryExcavateDef extends \ProtobufMessage
{
    /* Field index constants */
    const _MINE_ID = 1;
    const _APPLIER_UID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_MINE_ID => array(
            'name' => '_mine_id',
            'required' => true,
            'type' => 5,
        ),
        self::_APPLIER_UID => array(
            'name' => '_applier_uid',
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
        $this->values[self::_MINE_ID] = null;
        $this->values[self::_APPLIER_UID] = null;
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
     * Sets value of '_mine_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMineId($value)
    {
        return $this->set(self::_MINE_ID, $value);
    }

    /**
     * Returns value of '_mine_id' property
     *
     * @return int
     */
    public function getMineId()
    {
        return $this->get(self::_MINE_ID);
    }

    /**
     * Sets value of '_applier_uid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setApplierUid($value)
    {
        return $this->set(self::_APPLIER_UID, $value);
    }

    /**
     * Returns value of '_applier_uid' property
     *
     * @return int
     */
    public function getApplierUid()
    {
        return $this->get(self::_APPLIER_UID);
    }
}

/**
 * clear_excavate_battle message
 */
class MsgUp_ClearExcavateBattle extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * withdraw_excavate_hero message
 */
class MsgUp_WithdrawExcavateHero extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_ID => array(
            'name' => '_hero_id',
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
        $this->values[self::_HERO_ID] = null;
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
     * Sets value of '_hero_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::_HERO_ID, $value);
    }

    /**
     * Returns value of '_hero_id' property
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->get(self::_HERO_ID);
    }
}

/**
 * draw_excavate_def_rwd message
 */
class MsgUp_DrawExcavateDefRwd extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
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
        $this->values[self::_ID] = null;
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
     * Sets value of '_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return string
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }
}

/**
 * drop_excavate message
 */
class MsgUp_DropExcavate extends \ProtobufMessage
{
    /* Field index constants */
    const _MINE_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_MINE_ID => array(
            'name' => '_mine_id',
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
        $this->values[self::_MINE_ID] = null;
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
     * Sets value of '_mine_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMineId($value)
    {
        return $this->set(self::_MINE_ID, $value);
    }

    /**
     * Returns value of '_mine_id' property
     *
     * @return int
     */
    public function getMineId()
    {
        return $this->get(self::_MINE_ID);
    }
}

/**
 * revenge_excavate message
 */
class MsgUp_RevengeExcavate extends \ProtobufMessage
{
    /* Field index constants */
    const _ENEMY_SVRID = 1;
    const _ENEMY_UID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ENEMY_SVRID => array(
            'name' => '_enemy_svrid',
            'required' => false,
            'type' => 5,
        ),
        self::_ENEMY_UID => array(
            'name' => '_enemy_uid',
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
        $this->values[self::_ENEMY_SVRID] = null;
        $this->values[self::_ENEMY_UID] = null;
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
     * Sets value of '_enemy_svrid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEnemySvrid($value)
    {
        return $this->set(self::_ENEMY_SVRID, $value);
    }

    /**
     * Returns value of '_enemy_svrid' property
     *
     * @return int
     */
    public function getEnemySvrid()
    {
        return $this->get(self::_ENEMY_SVRID);
    }

    /**
     * Sets value of '_enemy_uid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEnemyUid($value)
    {
        return $this->set(self::_ENEMY_UID, $value);
    }

    /**
     * Returns value of '_enemy_uid' property
     *
     * @return int
     */
    public function getEnemyUid()
    {
        return $this->get(self::_ENEMY_UID);
    }
}

/**
 * excavate_hero message
 */
class MsgUp_ExcavateHero extends \ProtobufMessage
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

/**
 * upcoming_events message
 */
class MsgUp_UpcomingEvents extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * change_server message
 */
class MsgUp_ChangeServer extends \ProtobufMessage
{
    /* Field index constants */
    const _OP_TYPE = 1;
    const _SERVER_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OP_TYPE => array(
            'name' => '_op_type',
            'required' => true,
            'type' => 5,
        ),
        self::_SERVER_ID => array(
            'name' => '_server_id',
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
        $this->values[self::_OP_TYPE] = null;
        $this->values[self::_SERVER_ID] = null;
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
     * Sets value of '_op_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOpType($value)
    {
        return $this->set(self::_OP_TYPE, $value);
    }

    /**
     * Returns value of '_op_type' property
     *
     * @return int
     */
    public function getOpType()
    {
        return $this->get(self::_OP_TYPE);
    }

    /**
     * Sets value of '_server_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setServerId($value)
    {
        return $this->set(self::_SERVER_ID, $value);
    }

    /**
     * Returns value of '_server_id' property
     *
     * @return int
     */
    public function getServerId()
    {
        return $this->get(self::_SERVER_ID);
    }
}

/**
 * push_notify message
 */
class MsgUp_PushNotify extends \ProtobufMessage
{
    /* Field index constants */
    const _CLIENT_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CLIENT_ID => array(
            'name' => '_client_id',
            'required' => true,
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
        $this->values[self::_CLIENT_ID] = null;
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
     * Sets value of '_client_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::_CLIENT_ID, $value);
    }

    /**
     * Returns value of '_client_id' property
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->get(self::_CLIENT_ID);
    }
}

/**
 * system_setting message
 */
class MsgUp_SystemSetting extends \ProtobufMessage
{
    /* Field index constants */
    const _REQUEST = 1;
    const _CHANGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_REQUEST => array(
            'name' => '_request',
            'required' => false,
            'type' => 'MsgUp_SystemSettingRequest'
        ),
        self::_CHANGE => array(
            'name' => '_change',
            'required' => false,
            'type' => 'MsgUp_SystemSettingChange'
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
        $this->values[self::_REQUEST] = null;
        $this->values[self::_CHANGE] = null;
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
     * Sets value of '_request' property
     *
     * @param MsgUp_SystemSettingRequest $value Property value
     *
     * @return null
     */
    public function setRequest(MsgUp_SystemSettingRequest $value)
    {
        return $this->set(self::_REQUEST, $value);
    }

    /**
     * Returns value of '_request' property
     *
     * @return MsgUp_SystemSettingRequest
     */
    public function getRequest()
    {
        return $this->get(self::_REQUEST);
    }

    /**
     * Sets value of '_change' property
     *
     * @param MsgUp_SystemSettingChange $value Property value
     *
     * @return null
     */
    public function setChange(MsgUp_SystemSettingChange $value)
    {
        return $this->set(self::_CHANGE, $value);
    }

    /**
     * Returns value of '_change' property
     *
     * @return MsgUp_SystemSettingChange
     */
    public function getChange()
    {
        return $this->get(self::_CHANGE);
    }
}

/**
 * setting_status enum embedded in system_setting_change message
 */
final class MsgUp_SystemSettingChange_SettingStatus
{
    const on = 1;
    const off = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'on' => self::on,
            'off' => self::off,
        );
    }
}

/**
 * system_setting_change message
 */
class MsgUp_SystemSettingChange extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => true,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => true,
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }
}

/**
 * system_setting_request message
 */
class MsgUp_SystemSettingRequest extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_split_data message
 */
class MsgUp_QuerySplitData extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_split_return message
 */
class MsgUp_QuerySplitReturn extends \ProtobufMessage
{
    /* Field index constants */
    const _TID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TID => array(
            'name' => '_tid',
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
        $this->values[self::_TID] = null;
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
}

/**
 * split_hero message
 */
class MsgUp_SplitHero extends \ProtobufMessage
{
    /* Field index constants */
    const _TID = 1;
    const _STONE_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TID => array(
            'name' => '_tid',
            'required' => true,
            'type' => 5,
        ),
        self::_STONE_ID => array(
            'name' => '_stone_id',
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
        $this->values[self::_TID] = null;
        $this->values[self::_STONE_ID] = null;
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
     * Sets value of '_stone_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStoneId($value)
    {
        return $this->set(self::_STONE_ID, $value);
    }

    /**
     * Returns value of '_stone_id' property
     *
     * @return int
     */
    public function getStoneId()
    {
        return $this->get(self::_STONE_ID);
    }
}

/**
 * worldcup message
 */
class MsgUp_Worldcup extends \ProtobufMessage
{
    /* Field index constants */
    const _WORLDCUP_QUERY = 1;
    const _WORLDCUP_SUBMIT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_WORLDCUP_QUERY => array(
            'name' => '_worldcup_query',
            'required' => false,
            'type' => 'MsgUp_WorldcupQuery'
        ),
        self::_WORLDCUP_SUBMIT => array(
            'name' => '_worldcup_submit',
            'required' => false,
            'type' => 'MsgUp_WorldcupSubmit'
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
        $this->values[self::_WORLDCUP_QUERY] = null;
        $this->values[self::_WORLDCUP_SUBMIT] = null;
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
     * Sets value of '_worldcup_query' property
     *
     * @param MsgUp_WorldcupQuery $value Property value
     *
     * @return null
     */
    public function setWorldcupQuery(MsgUp_WorldcupQuery $value)
    {
        return $this->set(self::_WORLDCUP_QUERY, $value);
    }

    /**
     * Returns value of '_worldcup_query' property
     *
     * @return MsgUp_WorldcupQuery
     */
    public function getWorldcupQuery()
    {
        return $this->get(self::_WORLDCUP_QUERY);
    }

    /**
     * Sets value of '_worldcup_submit' property
     *
     * @param MsgUp_WorldcupSubmit $value Property value
     *
     * @return null
     */
    public function setWorldcupSubmit(MsgUp_WorldcupSubmit $value)
    {
        return $this->set(self::_WORLDCUP_SUBMIT, $value);
    }

    /**
     * Returns value of '_worldcup_submit' property
     *
     * @return MsgUp_WorldcupSubmit
     */
    public function getWorldcupSubmit()
    {
        return $this->get(self::_WORLDCUP_SUBMIT);
    }
}

/**
 * worldcup_query message
 */
class MsgUp_WorldcupQuery extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * worldcup_submit message
 */
class MsgUp_WorldcupSubmit extends \ProtobufMessage
{
    /* Field index constants */
    const _GUESS1 = 1;
    const _GUESS2 = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_GUESS1 => array(
            'name' => '_guess1',
            'required' => true,
            'type' => 5,
        ),
        self::_GUESS2 => array(
            'name' => '_guess2',
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
        $this->values[self::_GUESS1] = null;
        $this->values[self::_GUESS2] = null;
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
     * Sets value of '_guess1' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGuess1($value)
    {
        return $this->set(self::_GUESS1, $value);
    }

    /**
     * Returns value of '_guess1' property
     *
     * @return int
     */
    public function getGuess1()
    {
        return $this->get(self::_GUESS1);
    }

    /**
     * Sets value of '_guess2' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGuess2($value)
    {
        return $this->set(self::_GUESS2, $value);
    }

    /**
     * Returns value of '_guess2' property
     *
     * @return int
     */
    public function getGuess2()
    {
        return $this->get(self::_GUESS2);
    }
}

/**
 * report_battle message
 */
class MsgUp_ReportBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;
    const _DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
            'type' => 5,
        ),
        self::_DATA => array(
            'name' => '_data',
            'required' => true,
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
        $this->values[self::_ID] = null;
        $this->values[self::_DATA] = null;
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
     * Sets value of '_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }

    /**
     * Sets value of '_data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::_DATA, $value);
    }

    /**
     * Returns value of '_data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::_DATA);
    }
}

/**
 * op_type enum embedded in link_device message
 */
final class MsgUp_LinkDevice_OpType
{
    const generate_code = 1;
    const validate_code = 2;
    const confirm_link = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'generate_code' => self::generate_code,
            'validate_code' => self::validate_code,
            'confirm_link' => self::confirm_link,
        );
    }
}

/**
 * link_device message
 */
class MsgUp_LinkDevice extends \ProtobufMessage
{
    /* Field index constants */
    const _OP_TYPE = 1;
    const _GCID = 2;
    const _LINKCODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OP_TYPE => array(
            'name' => '_op_type',
            'required' => true,
            'type' => 5,
        ),
        self::_GCID => array(
            'name' => '_gcid',
            'required' => false,
            'type' => 7,
        ),
        self::_LINKCODE => array(
            'name' => '_linkCode',
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
        $this->values[self::_OP_TYPE] = null;
        $this->values[self::_GCID] = null;
        $this->values[self::_LINKCODE] = null;
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
     * Sets value of '_op_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOpType($value)
    {
        return $this->set(self::_OP_TYPE, $value);
    }

    /**
     * Returns value of '_op_type' property
     *
     * @return int
     */
    public function getOpType()
    {
        return $this->get(self::_OP_TYPE);
    }

    /**
     * Sets value of '_gcid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGcid($value)
    {
        return $this->set(self::_GCID, $value);
    }

    /**
     * Returns value of '_gcid' property
     *
     * @return string
     */
    public function getGcid()
    {
        return $this->get(self::_GCID);
    }

    /**
     * Sets value of '_linkCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkCode($value)
    {
        return $this->set(self::_LINKCODE, $value);
    }

    /**
     * Returns value of '_linkCode' property
     *
     * @return string
     */
    public function getLinkCode()
    {
        return $this->get(self::_LINKCODE);
    }
}

/**
 * rank_type enum embedded in query_ranklist message
 */
final class MsgUp_QueryRanklist_RankType
{
    const guildliveness = 1;
    const excavate_rob = 2;
    const excavate_gold = 3;
    const excavate_exp = 4;
    const top_gs = 5;
    const full_hero_gs = 6;
    const hero_team_gs = 7;
    const hero_evo_star = 8;
    const hero_arousal = 9;
    const top_arena = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'guildliveness' => self::guildliveness,
            'excavate_rob' => self::excavate_rob,
            'excavate_gold' => self::excavate_gold,
            'excavate_exp' => self::excavate_exp,
            'top_gs' => self::top_gs,
            'full_hero_gs' => self::full_hero_gs,
            'hero_team_gs' => self::hero_team_gs,
            'hero_evo_star' => self::hero_evo_star,
            'hero_arousal' => self::hero_arousal,
            'top_arena' => self::top_arena,
        );
    }
}

/**
 * query_ranklist message
 */
class MsgUp_QueryRanklist extends \ProtobufMessage
{
    /* Field index constants */
    const _RANK_TYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RANK_TYPE => array(
            'name' => '_rank_type',
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
        $this->values[self::_RANK_TYPE] = null;
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
     * Sets value of '_rank_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::_RANK_TYPE, $value);
    }

    /**
     * Returns value of '_rank_type' property
     *
     * @return int
     */
    public function getRankType()
    {
        return $this->get(self::_RANK_TYPE);
    }
}

/**
 * arousal_type enum embedded in require_arousal message
 */
final class MsgUp_RequireArousal_ArousalType
{
    const require_arousal = 1;
    const apply_arousal = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'require_arousal' => self::require_arousal,
            'apply_arousal' => self::apply_arousal,
        );
    }
}

/**
 * require_arousal message
 */
class MsgUp_RequireArousal extends \ProtobufMessage
{
    /* Field index constants */
    const _HID = 1;
    const _AROUSAL_TYPE = 2;
    const _AID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HID => array(
            'name' => '_hid',
            'required' => true,
            'type' => 5,
        ),
        self::_AROUSAL_TYPE => array(
            'name' => '_arousal_type',
            'required' => true,
            'type' => 5,
        ),
        self::_AID => array(
            'name' => '_aid',
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
        $this->values[self::_HID] = null;
        $this->values[self::_AROUSAL_TYPE] = null;
        $this->values[self::_AID] = null;
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
     * Sets value of '_hid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHid($value)
    {
        return $this->set(self::_HID, $value);
    }

    /**
     * Returns value of '_hid' property
     *
     * @return int
     */
    public function getHid()
    {
        return $this->get(self::_HID);
    }

    /**
     * Sets value of '_arousal_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setArousalType($value)
    {
        return $this->set(self::_AROUSAL_TYPE, $value);
    }

    /**
     * Returns value of '_arousal_type' property
     *
     * @return int
     */
    public function getArousalType()
    {
        return $this->get(self::_AROUSAL_TYPE);
    }

    /**
     * Sets value of '_aid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAid($value)
    {
        return $this->set(self::_AID, $value);
    }

    /**
     * Returns value of '_aid' property
     *
     * @return int
     */
    public function getAid()
    {
        return $this->get(self::_AID);
    }
}

/**
 * request_guild_log message
 */
class MsgUp_RequestGuildLog extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_act_stage message
 */
class MsgUp_QueryActStage extends \ProtobufMessage
{
    /* Field index constants */
    const _ACT_STAGE_GROUPS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ACT_STAGE_GROUPS => array(
            'name' => '_act_stage_groups',
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
        $this->values[self::_ACT_STAGE_GROUPS] = array();
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
     * Appends value to '_act_stage_groups' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendActStageGroups($value)
    {
        return $this->append(self::_ACT_STAGE_GROUPS, $value);
    }

    /**
     * Clears '_act_stage_groups' list
     *
     * @return null
     */
    public function clearActStageGroups()
    {
        return $this->clear(self::_ACT_STAGE_GROUPS);
    }

    /**
     * Returns '_act_stage_groups' list
     *
     * @return int[]
     */
    public function getActStageGroups()
    {
        return $this->get(self::_ACT_STAGE_GROUPS);
    }

    /**
     * Returns '_act_stage_groups' iterator
     *
     * @return ArrayIterator
     */
    public function getActStageGroupsIterator()
    {
        return new \ArrayIterator($this->get(self::_ACT_STAGE_GROUPS));
    }

    /**
     * Returns element from '_act_stage_groups' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getActStageGroupsAt($offset)
    {
        return $this->get(self::_ACT_STAGE_GROUPS, $offset);
    }

    /**
     * Returns count of '_act_stage_groups' list
     *
     * @return int
     */
    public function getActStageGroupsCount()
    {
        return $this->count(self::_ACT_STAGE_GROUPS);
    }
}

/**
 * request_upgrade_arousal_level message
 */
class MsgUp_RequestUpgradeArousalLevel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * register_device message
 */
class MsgUp_RegisterDevice extends \ProtobufMessage
{
    /* Field index constants */
    const _USER_ID = 1;
    const _DEVICE_ID = 2;
    const _SUMMARY = 3;
    const _OTHER_DEVICE_ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_USER_ID => array(
            'name' => '_user_id',
            'required' => true,
            'type' => 5,
        ),
        self::_DEVICE_ID => array(
            'name' => '_device_id',
            'required' => true,
            'type' => 7,
        ),
        self::_SUMMARY => array(
            'name' => '_summary',
            'required' => false,
            'type' => 'MsgUp_UserSummary'
        ),
        self::_OTHER_DEVICE_ID => array(
            'name' => '_other_device_id',
            'repeated' => true,
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
        $this->values[self::_USER_ID] = null;
        $this->values[self::_DEVICE_ID] = null;
        $this->values[self::_SUMMARY] = null;
        $this->values[self::_OTHER_DEVICE_ID] = array();
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
     * Sets value of '_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::_USER_ID, $value);
    }

    /**
     * Returns value of '_user_id' property
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->get(self::_USER_ID);
    }

    /**
     * Sets value of '_device_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceId($value)
    {
        return $this->set(self::_DEVICE_ID, $value);
    }

    /**
     * Returns value of '_device_id' property
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->get(self::_DEVICE_ID);
    }

    /**
     * Sets value of '_summary' property
     *
     * @param MsgUp_UserSummary $value Property value
     *
     * @return null
     */
    public function setSummary(MsgUp_UserSummary $value)
    {
        return $this->set(self::_SUMMARY, $value);
    }

    /**
     * Returns value of '_summary' property
     *
     * @return MsgUp_UserSummary
     */
    public function getSummary()
    {
        return $this->get(self::_SUMMARY);
    }

    /**
     * Appends value to '_other_device_id' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendOtherDeviceId($value)
    {
        return $this->append(self::_OTHER_DEVICE_ID, $value);
    }

    /**
     * Clears '_other_device_id' list
     *
     * @return null
     */
    public function clearOtherDeviceId()
    {
        return $this->clear(self::_OTHER_DEVICE_ID);
    }

    /**
     * Returns '_other_device_id' list
     *
     * @return string[]
     */
    public function getOtherDeviceId()
    {
        return $this->get(self::_OTHER_DEVICE_ID);
    }

    /**
     * Returns '_other_device_id' iterator
     *
     * @return ArrayIterator
     */
    public function getOtherDeviceIdIterator()
    {
        return new \ArrayIterator($this->get(self::_OTHER_DEVICE_ID));
    }

    /**
     * Returns element from '_other_device_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getOtherDeviceIdAt($offset)
    {
        return $this->get(self::_OTHER_DEVICE_ID, $offset);
    }

    /**
     * Returns count of '_other_device_id' list
     *
     * @return int
     */
    public function getOtherDeviceIdCount()
    {
        return $this->count(self::_OTHER_DEVICE_ID);
    }
}

/**
 * pvp_challenge_req message
 */
class MsgUp_PvpChallengeReq extends \ProtobufMessage
{
    /* Field index constants */
    const _CHALLENGE_DEVICE_ID = 1;
    const _PVP_RULE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHALLENGE_DEVICE_ID => array(
            'name' => '_challenge_device_id',
            'required' => true,
            'type' => 7,
        ),
        self::_PVP_RULE => array(
            'name' => '_pvp_rule',
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
        $this->values[self::_CHALLENGE_DEVICE_ID] = null;
        $this->values[self::_PVP_RULE] = null;
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
     * Sets value of '_challenge_device_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChallengeDeviceId($value)
    {
        return $this->set(self::_CHALLENGE_DEVICE_ID, $value);
    }

    /**
     * Returns value of '_challenge_device_id' property
     *
     * @return string
     */
    public function getChallengeDeviceId()
    {
        return $this->get(self::_CHALLENGE_DEVICE_ID);
    }

    /**
     * Sets value of '_pvp_rule' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPvpRule($value)
    {
        return $this->set(self::_PVP_RULE, $value);
    }

    /**
     * Returns value of '_pvp_rule' property
     *
     * @return int
     */
    public function getPvpRule()
    {
        return $this->get(self::_PVP_RULE);
    }
}

/**
 * pvp_challenge_reply message
 */
class MsgUp_PvpChallengeReply extends \ProtobufMessage
{
    /* Field index constants */
    const _CHALLENGE_DEVICE_ID = 1;
    const _ACCEPT_CHALLENGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHALLENGE_DEVICE_ID => array(
            'name' => '_challenge_device_id',
            'required' => true,
            'type' => 7,
        ),
        self::_ACCEPT_CHALLENGE => array(
            'name' => '_accept_challenge',
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
        $this->values[self::_CHALLENGE_DEVICE_ID] = null;
        $this->values[self::_ACCEPT_CHALLENGE] = null;
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
     * Sets value of '_challenge_device_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChallengeDeviceId($value)
    {
        return $this->set(self::_CHALLENGE_DEVICE_ID, $value);
    }

    /**
     * Returns value of '_challenge_device_id' property
     *
     * @return string
     */
    public function getChallengeDeviceId()
    {
        return $this->get(self::_CHALLENGE_DEVICE_ID);
    }

    /**
     * Sets value of '_accept_challenge' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAcceptChallenge($value)
    {
        return $this->set(self::_ACCEPT_CHALLENGE, $value);
    }

    /**
     * Returns value of '_accept_challenge' property
     *
     * @return int
     */
    public function getAcceptChallenge()
    {
        return $this->get(self::_ACCEPT_CHALLENGE);
    }
}

/**
 * pvp_enter_room message
 */
class MsgUp_PvpEnterRoom extends \ProtobufMessage
{
    /* Field index constants */
    const _DEVICE_ID = 1;
    const _SERVER_ID = 2;
    const _DATA_MD5 = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_DEVICE_ID => array(
            'name' => '_device_id',
            'required' => true,
            'type' => 7,
        ),
        self::_SERVER_ID => array(
            'name' => '_server_id',
            'required' => true,
            'type' => 7,
        ),
        self::_DATA_MD5 => array(
            'name' => '_data_md5',
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
        $this->values[self::_DEVICE_ID] = null;
        $this->values[self::_SERVER_ID] = null;
        $this->values[self::_DATA_MD5] = null;
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
     * Sets value of '_device_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceId($value)
    {
        return $this->set(self::_DEVICE_ID, $value);
    }

    /**
     * Returns value of '_device_id' property
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->get(self::_DEVICE_ID);
    }

    /**
     * Sets value of '_server_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerId($value)
    {
        return $this->set(self::_SERVER_ID, $value);
    }

    /**
     * Returns value of '_server_id' property
     *
     * @return string
     */
    public function getServerId()
    {
        return $this->get(self::_SERVER_ID);
    }

    /**
     * Sets value of '_data_md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDataMd5($value)
    {
        return $this->set(self::_DATA_MD5, $value);
    }

    /**
     * Returns value of '_data_md5' property
     *
     * @return string
     */
    public function getDataMd5()
    {
        return $this->get(self::_DATA_MD5);
    }
}

/**
 * user_summary message
 */
class MsgUp_UserSummary extends \ProtobufMessage
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
 * pvp_ready message
 */
class MsgUp_PvpReady extends \ProtobufMessage
{
    /* Field index constants */
    const _SELF_HEROES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SELF_HEROES => array(
            'name' => '_self_heroes',
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
        $this->values[self::_SELF_HEROES] = array();
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
}

/**
 * pvp_end message
 */
class MsgUp_PvpEnd extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * hero_select_begin message
 */
class MsgUp_HeroSelectBegin extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * hero_select message
 */
class MsgUp_HeroSelect extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_SELECTED = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_SELECTED => array(
            'name' => '_hero_selected',
            'required' => true,
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
        $this->values[self::_HERO_SELECTED] = null;
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
     * Sets value of '_hero_selected' property
     *
     * @param Msg_Hero $value Property value
     *
     * @return null
     */
    public function setHeroSelected(Msg_Hero $value)
    {
        return $this->set(self::_HERO_SELECTED, $value);
    }

    /**
     * Returns value of '_hero_selected' property
     *
     * @return Msg_Hero
     */
    public function getHeroSelected()
    {
        return $this->get(self::_HERO_SELECTED);
    }
}

/**
 * hero_deselect message
 */
class MsgUp_HeroDeselect extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_DESELECTED = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_DESELECTED => array(
            'name' => '_hero_deselected',
            'required' => true,
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
        $this->values[self::_HERO_DESELECTED] = null;
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
     * Sets value of '_hero_deselected' property
     *
     * @param Msg_Hero $value Property value
     *
     * @return null
     */
    public function setHeroDeselected(Msg_Hero $value)
    {
        return $this->set(self::_HERO_DESELECTED, $value);
    }

    /**
     * Returns value of '_hero_deselected' property
     *
     * @return Msg_Hero
     */
    public function getHeroDeselected()
    {
        return $this->get(self::_HERO_DESELECTED);
    }
}

/**
 * hero_select_round_end message
 */
class MsgUp_HeroSelectRoundEnd extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * pvp_round_end message
 */
class MsgUp_PvpRoundEnd extends \ProtobufMessage
{
    /* Field index constants */
    const _CUR_ROUND = 1;
    const _RESULT = 2;
    const _OPRATIONS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CUR_ROUND => array(
            'name' => '_cur_round',
            'required' => true,
            'type' => 5,
        ),
        self::_RESULT => array(
            'default' => Msg_BattleResult::victory, 
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_OPRATIONS => array(
            'name' => '_oprations',
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
        $this->values[self::_CUR_ROUND] = null;
        $this->values[self::_RESULT] = null;
        $this->values[self::_OPRATIONS] = array();
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
     * Sets value of '_cur_round' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCurRound($value)
    {
        return $this->set(self::_CUR_ROUND, $value);
    }

    /**
     * Returns value of '_cur_round' property
     *
     * @return int
     */
    public function getCurRound()
    {
        return $this->get(self::_CUR_ROUND);
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
}

/**
 * sync_operation message
 */
class MsgUp_SyncOperation extends \ProtobufMessage
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

/**
 * pvp_heart message
 */
class MsgUp_PvpHeart extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * pvp_round_reset message
 */
class MsgUp_PvpRoundReset extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * result_show_over message
 */
class MsgUp_ResultShowOver extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * pvp_round_init_over message
 */
class MsgUp_PvpRoundInitOver extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * pvp_select_ready message
 */
class MsgUp_PvpSelectReady extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * real_pvp message
 */
class MsgUp_RealPvp extends \ProtobufMessage
{
    /* Field index constants */
    const _REG_DEVICE = 1;
    const _PVP_CHALLENGE_REQ = 2;
    const _PVP_CHALLENGE_REPLY = 3;
    const _PVP_ENTER_ROOM = 4;
    const _PVP_READY = 5;
    const _HERO_SELECT_BEGIN = 6;
    const _HERO_SELECT = 7;
    const _HERO_DESELECT = 8;
    const _HERO_SELECT_ROUND_END = 9;
    const _ROUND_END = 10;
    const _PVP_END = 11;
    const _PVP_HEART = 12;
    const _SYNC_OPERATION = 13;
    const _PVP_ROUND_RESET = 14;
    const _RESULT_SHOW_OVER = 15;
    const _PVP_ROUND_INIT_OVER = 16;
    const _PVP_SELECT_READY = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_REG_DEVICE => array(
            'name' => '_reg_device',
            'required' => false,
            'type' => 'MsgUp_RegisterDevice'
        ),
        self::_PVP_CHALLENGE_REQ => array(
            'name' => '_pvp_challenge_req',
            'required' => false,
            'type' => 'MsgUp_PvpChallengeReq'
        ),
        self::_PVP_CHALLENGE_REPLY => array(
            'name' => '_pvp_challenge_reply',
            'required' => false,
            'type' => 'MsgUp_PvpChallengeReply'
        ),
        self::_PVP_ENTER_ROOM => array(
            'name' => '_pvp_enter_room',
            'required' => false,
            'type' => 'MsgUp_PvpEnterRoom'
        ),
        self::_PVP_READY => array(
            'name' => '_pvp_ready',
            'required' => false,
            'type' => 'MsgUp_PvpReady'
        ),
        self::_HERO_SELECT_BEGIN => array(
            'name' => '_hero_select_begin',
            'required' => false,
            'type' => 'MsgUp_HeroSelectBegin'
        ),
        self::_HERO_SELECT => array(
            'name' => '_hero_select',
            'required' => false,
            'type' => 'MsgUp_HeroSelect'
        ),
        self::_HERO_DESELECT => array(
            'name' => '_hero_deselect',
            'required' => false,
            'type' => 'MsgUp_HeroDeselect'
        ),
        self::_HERO_SELECT_ROUND_END => array(
            'name' => '_hero_select_round_end',
            'required' => false,
            'type' => 'MsgUp_HeroSelectRoundEnd'
        ),
        self::_ROUND_END => array(
            'name' => '_round_end',
            'required' => false,
            'type' => 'MsgUp_PvpRoundEnd'
        ),
        self::_PVP_END => array(
            'name' => '_pvp_end',
            'required' => false,
            'type' => 'MsgUp_PvpEnd'
        ),
        self::_PVP_HEART => array(
            'name' => '_pvp_heart',
            'required' => false,
            'type' => 'MsgUp_PvpHeart'
        ),
        self::_SYNC_OPERATION => array(
            'name' => '_sync_operation',
            'required' => false,
            'type' => 'MsgUp_SyncOperation'
        ),
        self::_PVP_ROUND_RESET => array(
            'name' => '_pvp_round_reset',
            'required' => false,
            'type' => 'MsgUp_PvpRoundReset'
        ),
        self::_RESULT_SHOW_OVER => array(
            'name' => '_result_show_over',
            'required' => false,
            'type' => 'MsgUp_ResultShowOver'
        ),
        self::_PVP_ROUND_INIT_OVER => array(
            'name' => '_pvp_round_init_over',
            'required' => false,
            'type' => 'MsgUp_PvpRoundInitOver'
        ),
        self::_PVP_SELECT_READY => array(
            'name' => '_pvp_select_ready',
            'required' => false,
            'type' => 'MsgUp_PvpSelectReady'
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
        $this->values[self::_REG_DEVICE] = null;
        $this->values[self::_PVP_CHALLENGE_REQ] = null;
        $this->values[self::_PVP_CHALLENGE_REPLY] = null;
        $this->values[self::_PVP_ENTER_ROOM] = null;
        $this->values[self::_PVP_READY] = null;
        $this->values[self::_HERO_SELECT_BEGIN] = null;
        $this->values[self::_HERO_SELECT] = null;
        $this->values[self::_HERO_DESELECT] = null;
        $this->values[self::_HERO_SELECT_ROUND_END] = null;
        $this->values[self::_ROUND_END] = null;
        $this->values[self::_PVP_END] = null;
        $this->values[self::_PVP_HEART] = null;
        $this->values[self::_SYNC_OPERATION] = null;
        $this->values[self::_PVP_ROUND_RESET] = null;
        $this->values[self::_RESULT_SHOW_OVER] = null;
        $this->values[self::_PVP_ROUND_INIT_OVER] = null;
        $this->values[self::_PVP_SELECT_READY] = null;
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
     * Sets value of '_reg_device' property
     *
     * @param MsgUp_RegisterDevice $value Property value
     *
     * @return null
     */
    public function setRegDevice(MsgUp_RegisterDevice $value)
    {
        return $this->set(self::_REG_DEVICE, $value);
    }

    /**
     * Returns value of '_reg_device' property
     *
     * @return MsgUp_RegisterDevice
     */
    public function getRegDevice()
    {
        return $this->get(self::_REG_DEVICE);
    }

    /**
     * Sets value of '_pvp_challenge_req' property
     *
     * @param MsgUp_PvpChallengeReq $value Property value
     *
     * @return null
     */
    public function setPvpChallengeReq(MsgUp_PvpChallengeReq $value)
    {
        return $this->set(self::_PVP_CHALLENGE_REQ, $value);
    }

    /**
     * Returns value of '_pvp_challenge_req' property
     *
     * @return MsgUp_PvpChallengeReq
     */
    public function getPvpChallengeReq()
    {
        return $this->get(self::_PVP_CHALLENGE_REQ);
    }

    /**
     * Sets value of '_pvp_challenge_reply' property
     *
     * @param MsgUp_PvpChallengeReply $value Property value
     *
     * @return null
     */
    public function setPvpChallengeReply(MsgUp_PvpChallengeReply $value)
    {
        return $this->set(self::_PVP_CHALLENGE_REPLY, $value);
    }

    /**
     * Returns value of '_pvp_challenge_reply' property
     *
     * @return MsgUp_PvpChallengeReply
     */
    public function getPvpChallengeReply()
    {
        return $this->get(self::_PVP_CHALLENGE_REPLY);
    }

    /**
     * Sets value of '_pvp_enter_room' property
     *
     * @param MsgUp_PvpEnterRoom $value Property value
     *
     * @return null
     */
    public function setPvpEnterRoom(MsgUp_PvpEnterRoom $value)
    {
        return $this->set(self::_PVP_ENTER_ROOM, $value);
    }

    /**
     * Returns value of '_pvp_enter_room' property
     *
     * @return MsgUp_PvpEnterRoom
     */
    public function getPvpEnterRoom()
    {
        return $this->get(self::_PVP_ENTER_ROOM);
    }

    /**
     * Sets value of '_pvp_ready' property
     *
     * @param MsgUp_PvpReady $value Property value
     *
     * @return null
     */
    public function setPvpReady(MsgUp_PvpReady $value)
    {
        return $this->set(self::_PVP_READY, $value);
    }

    /**
     * Returns value of '_pvp_ready' property
     *
     * @return MsgUp_PvpReady
     */
    public function getPvpReady()
    {
        return $this->get(self::_PVP_READY);
    }

    /**
     * Sets value of '_hero_select_begin' property
     *
     * @param MsgUp_HeroSelectBegin $value Property value
     *
     * @return null
     */
    public function setHeroSelectBegin(MsgUp_HeroSelectBegin $value)
    {
        return $this->set(self::_HERO_SELECT_BEGIN, $value);
    }

    /**
     * Returns value of '_hero_select_begin' property
     *
     * @return MsgUp_HeroSelectBegin
     */
    public function getHeroSelectBegin()
    {
        return $this->get(self::_HERO_SELECT_BEGIN);
    }

    /**
     * Sets value of '_hero_select' property
     *
     * @param MsgUp_HeroSelect $value Property value
     *
     * @return null
     */
    public function setHeroSelect(MsgUp_HeroSelect $value)
    {
        return $this->set(self::_HERO_SELECT, $value);
    }

    /**
     * Returns value of '_hero_select' property
     *
     * @return MsgUp_HeroSelect
     */
    public function getHeroSelect()
    {
        return $this->get(self::_HERO_SELECT);
    }

    /**
     * Sets value of '_hero_deselect' property
     *
     * @param MsgUp_HeroDeselect $value Property value
     *
     * @return null
     */
    public function setHeroDeselect(MsgUp_HeroDeselect $value)
    {
        return $this->set(self::_HERO_DESELECT, $value);
    }

    /**
     * Returns value of '_hero_deselect' property
     *
     * @return MsgUp_HeroDeselect
     */
    public function getHeroDeselect()
    {
        return $this->get(self::_HERO_DESELECT);
    }

    /**
     * Sets value of '_hero_select_round_end' property
     *
     * @param MsgUp_HeroSelectRoundEnd $value Property value
     *
     * @return null
     */
    public function setHeroSelectRoundEnd(MsgUp_HeroSelectRoundEnd $value)
    {
        return $this->set(self::_HERO_SELECT_ROUND_END, $value);
    }

    /**
     * Returns value of '_hero_select_round_end' property
     *
     * @return MsgUp_HeroSelectRoundEnd
     */
    public function getHeroSelectRoundEnd()
    {
        return $this->get(self::_HERO_SELECT_ROUND_END);
    }

    /**
     * Sets value of '_round_end' property
     *
     * @param MsgUp_PvpRoundEnd $value Property value
     *
     * @return null
     */
    public function setRoundEnd(MsgUp_PvpRoundEnd $value)
    {
        return $this->set(self::_ROUND_END, $value);
    }

    /**
     * Returns value of '_round_end' property
     *
     * @return MsgUp_PvpRoundEnd
     */
    public function getRoundEnd()
    {
        return $this->get(self::_ROUND_END);
    }

    /**
     * Sets value of '_pvp_end' property
     *
     * @param MsgUp_PvpEnd $value Property value
     *
     * @return null
     */
    public function setPvpEnd(MsgUp_PvpEnd $value)
    {
        return $this->set(self::_PVP_END, $value);
    }

    /**
     * Returns value of '_pvp_end' property
     *
     * @return MsgUp_PvpEnd
     */
    public function getPvpEnd()
    {
        return $this->get(self::_PVP_END);
    }

    /**
     * Sets value of '_pvp_heart' property
     *
     * @param MsgUp_PvpHeart $value Property value
     *
     * @return null
     */
    public function setPvpHeart(MsgUp_PvpHeart $value)
    {
        return $this->set(self::_PVP_HEART, $value);
    }

    /**
     * Returns value of '_pvp_heart' property
     *
     * @return MsgUp_PvpHeart
     */
    public function getPvpHeart()
    {
        return $this->get(self::_PVP_HEART);
    }

    /**
     * Sets value of '_sync_operation' property
     *
     * @param MsgUp_SyncOperation $value Property value
     *
     * @return null
     */
    public function setSyncOperation(MsgUp_SyncOperation $value)
    {
        return $this->set(self::_SYNC_OPERATION, $value);
    }

    /**
     * Returns value of '_sync_operation' property
     *
     * @return MsgUp_SyncOperation
     */
    public function getSyncOperation()
    {
        return $this->get(self::_SYNC_OPERATION);
    }

    /**
     * Sets value of '_pvp_round_reset' property
     *
     * @param MsgUp_PvpRoundReset $value Property value
     *
     * @return null
     */
    public function setPvpRoundReset(MsgUp_PvpRoundReset $value)
    {
        return $this->set(self::_PVP_ROUND_RESET, $value);
    }

    /**
     * Returns value of '_pvp_round_reset' property
     *
     * @return MsgUp_PvpRoundReset
     */
    public function getPvpRoundReset()
    {
        return $this->get(self::_PVP_ROUND_RESET);
    }

    /**
     * Sets value of '_result_show_over' property
     *
     * @param MsgUp_ResultShowOver $value Property value
     *
     * @return null
     */
    public function setResultShowOver(MsgUp_ResultShowOver $value)
    {
        return $this->set(self::_RESULT_SHOW_OVER, $value);
    }

    /**
     * Returns value of '_result_show_over' property
     *
     * @return MsgUp_ResultShowOver
     */
    public function getResultShowOver()
    {
        return $this->get(self::_RESULT_SHOW_OVER);
    }

    /**
     * Sets value of '_pvp_round_init_over' property
     *
     * @param MsgUp_PvpRoundInitOver $value Property value
     *
     * @return null
     */
    public function setPvpRoundInitOver(MsgUp_PvpRoundInitOver $value)
    {
        return $this->set(self::_PVP_ROUND_INIT_OVER, $value);
    }

    /**
     * Returns value of '_pvp_round_init_over' property
     *
     * @return MsgUp_PvpRoundInitOver
     */
    public function getPvpRoundInitOver()
    {
        return $this->get(self::_PVP_ROUND_INIT_OVER);
    }

    /**
     * Sets value of '_pvp_select_ready' property
     *
     * @param MsgUp_PvpSelectReady $value Property value
     *
     * @return null
     */
    public function setPvpSelectReady(MsgUp_PvpSelectReady $value)
    {
        return $this->set(self::_PVP_SELECT_READY, $value);
    }

    /**
     * Returns value of '_pvp_select_ready' property
     *
     * @return MsgUp_PvpSelectReady
     */
    public function getPvpSelectReady()
    {
        return $this->get(self::_PVP_SELECT_READY);
    }
}

/**
 * fb_share message
 */
class MsgUp_FbShare extends \ProtobufMessage
{
    /* Field index constants */
    const HERO_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HERO_ID => array(
            'name' => 'hero_id',
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
        $this->values[self::HERO_ID] = null;
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
     * Sets value of 'hero_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::HERO_ID, $value);
    }

    /**
     * Returns value of 'hero_id' property
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->get(self::HERO_ID);
    }
}

/**
 * query_info_fb message
 */
class MsgUp_QueryInfoFb extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * query_friends_fb message
 */
class MsgUp_QueryFriendsFb extends \ProtobufMessage
{
    /* Field index constants */
    const _IDS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_IDS => array(
            'name' => '_ids',
            'repeated' => true,
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
        $this->values[self::_IDS] = array();
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
     * Appends value to '_ids' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendIds($value)
    {
        return $this->append(self::_IDS, $value);
    }

    /**
     * Clears '_ids' list
     *
     * @return null
     */
    public function clearIds()
    {
        return $this->clear(self::_IDS);
    }

    /**
     * Returns '_ids' list
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->get(self::_IDS);
    }

    /**
     * Returns '_ids' iterator
     *
     * @return ArrayIterator
     */
    public function getIdsIterator()
    {
        return new \ArrayIterator($this->get(self::_IDS));
    }

    /**
     * Returns element from '_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getIdsAt($offset)
    {
        return $this->get(self::_IDS, $offset);
    }

    /**
     * Returns count of '_ids' list
     *
     * @return int
     */
    public function getIdsCount()
    {
        return $this->count(self::_IDS);
    }
}

/**
 * invite_fb message
 */
class MsgUp_InviteFb extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
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
        $this->values[self::_ID] = null;
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
     * Sets value of '_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return string
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }
}

/**
 * req_reward_fb message
 */
class MsgUp_ReqRewardFb extends \ProtobufMessage
{
    /* Field index constants */
    const _ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ID => array(
            'name' => '_id',
            'required' => true,
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
        $this->values[self::_ID] = null;
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
     * Sets value of '_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::_ID, $value);
    }

    /**
     * Returns value of '_id' property
     *
     * @return string
     */
    public function getId()
    {
        return $this->get(self::_ID);
    }
}

/**
 * donate_guild_card message
 */
class MsgUp_DonateGuildCard extends \ProtobufMessage
{
    /* Field index constants */
    const _USER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_USER_ID => array(
            'name' => '_user_id',
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
        $this->values[self::_USER_ID] = null;
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
     * Sets value of '_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::_USER_ID, $value);
    }

    /**
     * Returns value of '_user_id' property
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->get(self::_USER_ID);
    }
}

/**
 * ask_may_give_card message
 */
class MsgUp_AskMayGiveCard extends \ProtobufMessage
{
    /* Field index constants */
    const _USER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_USER_ID => array(
            'name' => '_user_id',
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
        $this->values[self::_USER_ID] = null;
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
     * Sets value of '_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::_USER_ID, $value);
    }

    /**
     * Returns value of '_user_id' property
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->get(self::_USER_ID);
    }
}

/**
 * ask_monthcard_info message
 */
class MsgUp_AskMonthcardInfo extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * ask_pred_stage message
 */
class MsgUp_AskPredStage extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * top_arena message
 */
class MsgUp_TopArena extends \ProtobufMessage
{
    /* Field index constants */
    const _OPEN_PANEL = 1;
    const _APPLY_OPPONENT = 2;
    const _START_BATTLE = 3;
    const _END_BATTLE = 4;
    const _SET_LINEUP = 5;
    const _QUERY_RECORDS = 6;
    const _QUERY_REPLAY = 7;
    const _QUERY_RANKBOARD = 8;
    const _QUERY_OPPO = 9;
    const _CLEAR_BATTLE_CD = 10;
    const _DRAW_RANK_REWARD = 11;
    const _BUY_BATTLE_CHANCE = 12;
    const _OPEN_RULE_PANEL = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPEN_PANEL => array(
            'name' => '_open_panel',
            'required' => false,
            'type' => 'MsgUp_ArenaOpenPanel'
        ),
        self::_APPLY_OPPONENT => array(
            'name' => '_apply_opponent',
            'required' => false,
            'type' => 'MsgUp_ArenaApplyOpponent'
        ),
        self::_START_BATTLE => array(
            'name' => '_start_battle',
            'required' => false,
            'type' => 'MsgUp_ArenaStartBattle'
        ),
        self::_END_BATTLE => array(
            'name' => '_end_battle',
            'required' => false,
            'type' => 'MsgUp_ArenaEndBattle'
        ),
        self::_SET_LINEUP => array(
            'name' => '_set_lineup',
            'required' => false,
            'type' => 'MsgUp_ArenaSetLineup'
        ),
        self::_QUERY_RECORDS => array(
            'name' => '_query_records',
            'required' => false,
            'type' => 'MsgUp_ArenaQueryRecords'
        ),
        self::_QUERY_REPLAY => array(
            'name' => '_query_replay',
            'required' => false,
            'type' => 'MsgUp_ArenaQueryReplay'
        ),
        self::_QUERY_RANKBOARD => array(
            'name' => '_query_rankboard',
            'required' => false,
            'type' => 'MsgUp_ArenaQueryRankboard'
        ),
        self::_QUERY_OPPO => array(
            'name' => '_query_oppo',
            'required' => false,
            'type' => 'MsgUp_ArenaQueryOppoInfo'
        ),
        self::_CLEAR_BATTLE_CD => array(
            'name' => '_clear_battle_cd',
            'required' => false,
            'type' => 'MsgUp_ArenaClearBattleCd'
        ),
        self::_DRAW_RANK_REWARD => array(
            'name' => '_draw_rank_reward',
            'required' => false,
            'type' => 'MsgUp_ArenaDrawRankReward'
        ),
        self::_BUY_BATTLE_CHANCE => array(
            'name' => '_buy_battle_chance',
            'required' => false,
            'type' => 'MsgUp_ArenaBuyBattleChance'
        ),
        self::_OPEN_RULE_PANEL => array(
            'name' => '_open_rule_panel',
            'required' => false,
            'type' => 'MsgUp_ArenaOpenRulePanel'
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
        $this->values[self::_OPEN_PANEL] = null;
        $this->values[self::_APPLY_OPPONENT] = null;
        $this->values[self::_START_BATTLE] = null;
        $this->values[self::_END_BATTLE] = null;
        $this->values[self::_SET_LINEUP] = null;
        $this->values[self::_QUERY_RECORDS] = null;
        $this->values[self::_QUERY_REPLAY] = null;
        $this->values[self::_QUERY_RANKBOARD] = null;
        $this->values[self::_QUERY_OPPO] = null;
        $this->values[self::_CLEAR_BATTLE_CD] = null;
        $this->values[self::_DRAW_RANK_REWARD] = null;
        $this->values[self::_BUY_BATTLE_CHANCE] = null;
        $this->values[self::_OPEN_RULE_PANEL] = null;
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
     * Sets value of '_open_panel' property
     *
     * @param MsgUp_ArenaOpenPanel $value Property value
     *
     * @return null
     */
    public function setOpenPanel(MsgUp_ArenaOpenPanel $value)
    {
        return $this->set(self::_OPEN_PANEL, $value);
    }

    /**
     * Returns value of '_open_panel' property
     *
     * @return MsgUp_ArenaOpenPanel
     */
    public function getOpenPanel()
    {
        return $this->get(self::_OPEN_PANEL);
    }

    /**
     * Sets value of '_apply_opponent' property
     *
     * @param MsgUp_ArenaApplyOpponent $value Property value
     *
     * @return null
     */
    public function setApplyOpponent(MsgUp_ArenaApplyOpponent $value)
    {
        return $this->set(self::_APPLY_OPPONENT, $value);
    }

    /**
     * Returns value of '_apply_opponent' property
     *
     * @return MsgUp_ArenaApplyOpponent
     */
    public function getApplyOpponent()
    {
        return $this->get(self::_APPLY_OPPONENT);
    }

    /**
     * Sets value of '_start_battle' property
     *
     * @param MsgUp_ArenaStartBattle $value Property value
     *
     * @return null
     */
    public function setStartBattle(MsgUp_ArenaStartBattle $value)
    {
        return $this->set(self::_START_BATTLE, $value);
    }

    /**
     * Returns value of '_start_battle' property
     *
     * @return MsgUp_ArenaStartBattle
     */
    public function getStartBattle()
    {
        return $this->get(self::_START_BATTLE);
    }

    /**
     * Sets value of '_end_battle' property
     *
     * @param MsgUp_ArenaEndBattle $value Property value
     *
     * @return null
     */
    public function setEndBattle(MsgUp_ArenaEndBattle $value)
    {
        return $this->set(self::_END_BATTLE, $value);
    }

    /**
     * Returns value of '_end_battle' property
     *
     * @return MsgUp_ArenaEndBattle
     */
    public function getEndBattle()
    {
        return $this->get(self::_END_BATTLE);
    }

    /**
     * Sets value of '_set_lineup' property
     *
     * @param MsgUp_ArenaSetLineup $value Property value
     *
     * @return null
     */
    public function setSetLineup(MsgUp_ArenaSetLineup $value)
    {
        return $this->set(self::_SET_LINEUP, $value);
    }

    /**
     * Returns value of '_set_lineup' property
     *
     * @return MsgUp_ArenaSetLineup
     */
    public function getSetLineup()
    {
        return $this->get(self::_SET_LINEUP);
    }

    /**
     * Sets value of '_query_records' property
     *
     * @param MsgUp_ArenaQueryRecords $value Property value
     *
     * @return null
     */
    public function setQueryRecords(MsgUp_ArenaQueryRecords $value)
    {
        return $this->set(self::_QUERY_RECORDS, $value);
    }

    /**
     * Returns value of '_query_records' property
     *
     * @return MsgUp_ArenaQueryRecords
     */
    public function getQueryRecords()
    {
        return $this->get(self::_QUERY_RECORDS);
    }

    /**
     * Sets value of '_query_replay' property
     *
     * @param MsgUp_ArenaQueryReplay $value Property value
     *
     * @return null
     */
    public function setQueryReplay(MsgUp_ArenaQueryReplay $value)
    {
        return $this->set(self::_QUERY_REPLAY, $value);
    }

    /**
     * Returns value of '_query_replay' property
     *
     * @return MsgUp_ArenaQueryReplay
     */
    public function getQueryReplay()
    {
        return $this->get(self::_QUERY_REPLAY);
    }

    /**
     * Sets value of '_query_rankboard' property
     *
     * @param MsgUp_ArenaQueryRankboard $value Property value
     *
     * @return null
     */
    public function setQueryRankboard(MsgUp_ArenaQueryRankboard $value)
    {
        return $this->set(self::_QUERY_RANKBOARD, $value);
    }

    /**
     * Returns value of '_query_rankboard' property
     *
     * @return MsgUp_ArenaQueryRankboard
     */
    public function getQueryRankboard()
    {
        return $this->get(self::_QUERY_RANKBOARD);
    }

    /**
     * Sets value of '_query_oppo' property
     *
     * @param MsgUp_ArenaQueryOppoInfo $value Property value
     *
     * @return null
     */
    public function setQueryOppo(MsgUp_ArenaQueryOppoInfo $value)
    {
        return $this->set(self::_QUERY_OPPO, $value);
    }

    /**
     * Returns value of '_query_oppo' property
     *
     * @return MsgUp_ArenaQueryOppoInfo
     */
    public function getQueryOppo()
    {
        return $this->get(self::_QUERY_OPPO);
    }

    /**
     * Sets value of '_clear_battle_cd' property
     *
     * @param MsgUp_ArenaClearBattleCd $value Property value
     *
     * @return null
     */
    public function setClearBattleCd(MsgUp_ArenaClearBattleCd $value)
    {
        return $this->set(self::_CLEAR_BATTLE_CD, $value);
    }

    /**
     * Returns value of '_clear_battle_cd' property
     *
     * @return MsgUp_ArenaClearBattleCd
     */
    public function getClearBattleCd()
    {
        return $this->get(self::_CLEAR_BATTLE_CD);
    }

    /**
     * Sets value of '_draw_rank_reward' property
     *
     * @param MsgUp_ArenaDrawRankReward $value Property value
     *
     * @return null
     */
    public function setDrawRankReward(MsgUp_ArenaDrawRankReward $value)
    {
        return $this->set(self::_DRAW_RANK_REWARD, $value);
    }

    /**
     * Returns value of '_draw_rank_reward' property
     *
     * @return MsgUp_ArenaDrawRankReward
     */
    public function getDrawRankReward()
    {
        return $this->get(self::_DRAW_RANK_REWARD);
    }

    /**
     * Sets value of '_buy_battle_chance' property
     *
     * @param MsgUp_ArenaBuyBattleChance $value Property value
     *
     * @return null
     */
    public function setBuyBattleChance(MsgUp_ArenaBuyBattleChance $value)
    {
        return $this->set(self::_BUY_BATTLE_CHANCE, $value);
    }

    /**
     * Returns value of '_buy_battle_chance' property
     *
     * @return MsgUp_ArenaBuyBattleChance
     */
    public function getBuyBattleChance()
    {
        return $this->get(self::_BUY_BATTLE_CHANCE);
    }

    /**
     * Sets value of '_open_rule_panel' property
     *
     * @param MsgUp_ArenaOpenRulePanel $value Property value
     *
     * @return null
     */
    public function setOpenRulePanel(MsgUp_ArenaOpenRulePanel $value)
    {
        return $this->set(self::_OPEN_RULE_PANEL, $value);
    }

    /**
     * Returns value of '_open_rule_panel' property
     *
     * @return MsgUp_ArenaOpenRulePanel
     */
    public function getOpenRulePanel()
    {
        return $this->get(self::_OPEN_RULE_PANEL);
    }
}

/**
 * arena_open_panel message
 */
class MsgUp_ArenaOpenPanel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * arena_apply_opponent message
 */
class MsgUp_ArenaApplyOpponent extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * arena_start_battle message
 */
class MsgUp_ArenaStartBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _OPPO_USER_ID = 1;
    const _ATTACK_LINEUP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPPO_USER_ID => array(
            'name' => '_oppo_user_id',
            'required' => true,
            'type' => 5,
        ),
        self::_ATTACK_LINEUP => array(
            'name' => '_attack_lineup',
            'repeated' => true,
            'type' => 'MsgUp_Lineup'
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
        $this->values[self::_OPPO_USER_ID] = null;
        $this->values[self::_ATTACK_LINEUP] = array();
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
     * Sets value of '_oppo_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserId($value)
    {
        return $this->set(self::_OPPO_USER_ID, $value);
    }

    /**
     * Returns value of '_oppo_user_id' property
     *
     * @return int
     */
    public function getOppoUserId()
    {
        return $this->get(self::_OPPO_USER_ID);
    }

    /**
     * Appends value to '_attack_lineup' list
     *
     * @param MsgUp_Lineup $value Value to append
     *
     * @return null
     */
    public function appendAttackLineup(MsgUp_Lineup $value)
    {
        return $this->append(self::_ATTACK_LINEUP, $value);
    }

    /**
     * Clears '_attack_lineup' list
     *
     * @return null
     */
    public function clearAttackLineup()
    {
        return $this->clear(self::_ATTACK_LINEUP);
    }

    /**
     * Returns '_attack_lineup' list
     *
     * @return MsgUp_Lineup[]
     */
    public function getAttackLineup()
    {
        return $this->get(self::_ATTACK_LINEUP);
    }

    /**
     * Returns '_attack_lineup' iterator
     *
     * @return ArrayIterator
     */
    public function getAttackLineupIterator()
    {
        return new \ArrayIterator($this->get(self::_ATTACK_LINEUP));
    }

    /**
     * Returns element from '_attack_lineup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_Lineup
     */
    public function getAttackLineupAt($offset)
    {
        return $this->get(self::_ATTACK_LINEUP, $offset);
    }

    /**
     * Returns count of '_attack_lineup' list
     *
     * @return int
     */
    public function getAttackLineupCount()
    {
        return $this->count(self::_ATTACK_LINEUP);
    }
}

/**
 * arena_end_battle message
 */
class MsgUp_ArenaEndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
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
}

/**
 * arena_set_lineup message
 */
class MsgUp_ArenaSetLineup extends \ProtobufMessage
{
    /* Field index constants */
    const _LINEUP = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_LINEUP => array(
            'name' => '_lineup',
            'repeated' => true,
            'type' => 'MsgUp_Lineup'
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
        $this->values[self::_LINEUP] = array();
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
     * Appends value to '_lineup' list
     *
     * @param MsgUp_Lineup $value Value to append
     *
     * @return null
     */
    public function appendLineup(MsgUp_Lineup $value)
    {
        return $this->append(self::_LINEUP, $value);
    }

    /**
     * Clears '_lineup' list
     *
     * @return null
     */
    public function clearLineup()
    {
        return $this->clear(self::_LINEUP);
    }

    /**
     * Returns '_lineup' list
     *
     * @return MsgUp_Lineup[]
     */
    public function getLineup()
    {
        return $this->get(self::_LINEUP);
    }

    /**
     * Returns '_lineup' iterator
     *
     * @return ArrayIterator
     */
    public function getLineupIterator()
    {
        return new \ArrayIterator($this->get(self::_LINEUP));
    }

    /**
     * Returns element from '_lineup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_Lineup
     */
    public function getLineupAt($offset)
    {
        return $this->get(self::_LINEUP, $offset);
    }

    /**
     * Returns count of '_lineup' list
     *
     * @return int
     */
    public function getLineupCount()
    {
        return $this->count(self::_LINEUP);
    }
}

/**
 * arena_query_records message
 */
class MsgUp_ArenaQueryRecords extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * arena_query_replay message
 */
class MsgUp_ArenaQueryReplay extends \ProtobufMessage
{
    /* Field index constants */
    const _RECORD_INDEX = 1;
    const _RECORD_SVRID = 2;
    const _REPLAY_INDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RECORD_INDEX => array(
            'name' => '_record_index',
            'required' => true,
            'type' => 5,
        ),
        self::_RECORD_SVRID => array(
            'name' => '_record_svrid',
            'required' => false,
            'type' => 5,
        ),
        self::_REPLAY_INDEX => array(
            'name' => '_replay_index',
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
        $this->values[self::_RECORD_INDEX] = null;
        $this->values[self::_RECORD_SVRID] = null;
        $this->values[self::_REPLAY_INDEX] = null;
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
     * Sets value of '_record_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordIndex($value)
    {
        return $this->set(self::_RECORD_INDEX, $value);
    }

    /**
     * Returns value of '_record_index' property
     *
     * @return int
     */
    public function getRecordIndex()
    {
        return $this->get(self::_RECORD_INDEX);
    }

    /**
     * Sets value of '_record_svrid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordSvrid($value)
    {
        return $this->set(self::_RECORD_SVRID, $value);
    }

    /**
     * Returns value of '_record_svrid' property
     *
     * @return int
     */
    public function getRecordSvrid()
    {
        return $this->get(self::_RECORD_SVRID);
    }

    /**
     * Sets value of '_replay_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReplayIndex($value)
    {
        return $this->set(self::_REPLAY_INDEX, $value);
    }

    /**
     * Returns value of '_replay_index' property
     *
     * @return int
     */
    public function getReplayIndex()
    {
        return $this->get(self::_REPLAY_INDEX);
    }
}

/**
 * rankboard_type enum embedded in arena_query_rankboard message
 */
final class MsgUp_ArenaQueryRankboard_RankboardType
{
    const static_type = 0;
    const dynamic = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'static_type' => self::static_type,
            'dynamic' => self::dynamic,
        );
    }
}

/**
 * arena_query_rankboard message
 */
class MsgUp_ArenaQueryRankboard extends \ProtobufMessage
{
    /* Field index constants */
    const _TYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_TYPE => array(
            'name' => '_type',
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
        $this->values[self::_TYPE] = null;
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
     * Sets value of '_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::_TYPE, $value);
    }

    /**
     * Returns value of '_type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::_TYPE);
    }
}

/**
 * arena_query_oppo_info message
 */
class MsgUp_ArenaQueryOppoInfo extends \ProtobufMessage
{
    /* Field index constants */
    const _OPPO_USER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_OPPO_USER_ID => array(
            'name' => '_oppo_user_id',
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
        $this->values[self::_OPPO_USER_ID] = null;
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
     * Sets value of '_oppo_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserId($value)
    {
        return $this->set(self::_OPPO_USER_ID, $value);
    }

    /**
     * Returns value of '_oppo_user_id' property
     *
     * @return int
     */
    public function getOppoUserId()
    {
        return $this->get(self::_OPPO_USER_ID);
    }
}

/**
 * arena_clear_battle_cd message
 */
class MsgUp_ArenaClearBattleCd extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * arena_draw_rank_reward message
 */
class MsgUp_ArenaDrawRankReward extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * arena_buy_battle_chance message
 */
class MsgUp_ArenaBuyBattleChance extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * lineup message
 */
class MsgUp_Lineup extends \ProtobufMessage
{
    /* Field index constants */
    const _HERO_ID = 1;
    const _GS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_HERO_ID => array(
            'name' => '_hero_id',
            'repeated' => true,
            'type' => 5,
        ),
        self::_GS => array(
            'name' => '_gs',
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
        $this->values[self::_HERO_ID] = array();
        $this->values[self::_GS] = null;
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
     * Appends value to '_hero_id' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHeroId($value)
    {
        return $this->append(self::_HERO_ID, $value);
    }

    /**
     * Clears '_hero_id' list
     *
     * @return null
     */
    public function clearHeroId()
    {
        return $this->clear(self::_HERO_ID);
    }

    /**
     * Returns '_hero_id' list
     *
     * @return int[]
     */
    public function getHeroId()
    {
        return $this->get(self::_HERO_ID);
    }

    /**
     * Returns '_hero_id' iterator
     *
     * @return ArrayIterator
     */
    public function getHeroIdIterator()
    {
        return new \ArrayIterator($this->get(self::_HERO_ID));
    }

    /**
     * Returns element from '_hero_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHeroIdAt($offset)
    {
        return $this->get(self::_HERO_ID, $offset);
    }

    /**
     * Returns count of '_hero_id' list
     *
     * @return int
     */
    public function getHeroIdCount()
    {
        return $this->count(self::_HERO_ID);
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
}

/**
 * arena_open_rule_panel message
 */
class MsgUp_ArenaOpenRulePanel extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * sync_time_zone message
 */
class MsgUp_SyncTimeZone extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * move_account message
 */
class MsgUp_MoveAccount extends \ProtobufMessage
{
    /* Field index constants */
    const _DEST_SERVER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_DEST_SERVER_ID => array(
            'name' => '_dest_server_id',
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
        $this->values[self::_DEST_SERVER_ID] = null;
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
     * Sets value of '_dest_server_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDestServerId($value)
    {
        return $this->set(self::_DEST_SERVER_ID, $value);
    }

    /**
     * Returns value of '_dest_server_id' property
     *
     * @return int
     */
    public function getDestServerId()
    {
        return $this->get(self::_DEST_SERVER_ID);
    }
}

/**
 * player_challenge message
 */
class MsgUp_PlayerChallenge extends \ProtobufMessage
{
    /* Field index constants */
    const _CHALLENGE_SET_TEAM = 1;
    const _BEGAN_CHALLENGE = 2;
    const _START_BATTLE = 3;
    const _END_BATTLE = 4;
    const _CHALLENGE_REPLAY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHALLENGE_SET_TEAM => array(
            'name' => '_challenge_set_team',
            'required' => false,
            'type' => 'MsgUp_ChallengeSetTeam'
        ),
        self::_BEGAN_CHALLENGE => array(
            'name' => '_began_challenge',
            'required' => false,
            'type' => 'MsgUp_BeganChallenge'
        ),
        self::_START_BATTLE => array(
            'name' => '_start_battle',
            'required' => false,
            'type' => 'MsgUp_StartBattle'
        ),
        self::_END_BATTLE => array(
            'name' => '_end_battle',
            'required' => false,
            'type' => 'MsgUp_ChallengeEndBattle'
        ),
        self::_CHALLENGE_REPLAY => array(
            'name' => '_challenge_replay',
            'required' => false,
            'type' => 'MsgUp_ChallengeReplay'
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
        $this->values[self::_CHALLENGE_SET_TEAM] = null;
        $this->values[self::_BEGAN_CHALLENGE] = null;
        $this->values[self::_START_BATTLE] = null;
        $this->values[self::_END_BATTLE] = null;
        $this->values[self::_CHALLENGE_REPLAY] = null;
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
     * Sets value of '_challenge_set_team' property
     *
     * @param MsgUp_ChallengeSetTeam $value Property value
     *
     * @return null
     */
    public function setChallengeSetTeam(MsgUp_ChallengeSetTeam $value)
    {
        return $this->set(self::_CHALLENGE_SET_TEAM, $value);
    }

    /**
     * Returns value of '_challenge_set_team' property
     *
     * @return MsgUp_ChallengeSetTeam
     */
    public function getChallengeSetTeam()
    {
        return $this->get(self::_CHALLENGE_SET_TEAM);
    }

    /**
     * Sets value of '_began_challenge' property
     *
     * @param MsgUp_BeganChallenge $value Property value
     *
     * @return null
     */
    public function setBeganChallenge(MsgUp_BeganChallenge $value)
    {
        return $this->set(self::_BEGAN_CHALLENGE, $value);
    }

    /**
     * Returns value of '_began_challenge' property
     *
     * @return MsgUp_BeganChallenge
     */
    public function getBeganChallenge()
    {
        return $this->get(self::_BEGAN_CHALLENGE);
    }

    /**
     * Sets value of '_start_battle' property
     *
     * @param MsgUp_StartBattle $value Property value
     *
     * @return null
     */
    public function setStartBattle(MsgUp_StartBattle $value)
    {
        return $this->set(self::_START_BATTLE, $value);
    }

    /**
     * Returns value of '_start_battle' property
     *
     * @return MsgUp_StartBattle
     */
    public function getStartBattle()
    {
        return $this->get(self::_START_BATTLE);
    }

    /**
     * Sets value of '_end_battle' property
     *
     * @param MsgUp_ChallengeEndBattle $value Property value
     *
     * @return null
     */
    public function setEndBattle(MsgUp_ChallengeEndBattle $value)
    {
        return $this->set(self::_END_BATTLE, $value);
    }

    /**
     * Returns value of '_end_battle' property
     *
     * @return MsgUp_ChallengeEndBattle
     */
    public function getEndBattle()
    {
        return $this->get(self::_END_BATTLE);
    }

    /**
     * Sets value of '_challenge_replay' property
     *
     * @param MsgUp_ChallengeReplay $value Property value
     *
     * @return null
     */
    public function setChallengeReplay(MsgUp_ChallengeReplay $value)
    {
        return $this->set(self::_CHALLENGE_REPLAY, $value);
    }

    /**
     * Returns value of '_challenge_replay' property
     *
     * @return MsgUp_ChallengeReplay
     */
    public function getChallengeReplay()
    {
        return $this->get(self::_CHALLENGE_REPLAY);
    }
}

/**
 * challenge_set_team message
 */
class MsgUp_ChallengeSetTeam extends \ProtobufMessage
{
    /* Field index constants */
    const _SAY = 1;
    const _SHOW_TEAM = 2;
    const _SET_LINEUP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_SAY => array(
            'name' => '_say',
            'required' => true,
            'type' => 'MsgUp_ChatSay'
        ),
        self::_SHOW_TEAM => array(
            'name' => '_show_team',
            'required' => true,
            'type' => 5,
        ),
        self::_SET_LINEUP => array(
            'name' => '_set_lineup',
            'required' => true,
            'type' => 'MsgUp_SetLineup'
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
        $this->values[self::_SAY] = null;
        $this->values[self::_SHOW_TEAM] = null;
        $this->values[self::_SET_LINEUP] = null;
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
     * Sets value of '_say' property
     *
     * @param MsgUp_ChatSay $value Property value
     *
     * @return null
     */
    public function setSay(MsgUp_ChatSay $value)
    {
        return $this->set(self::_SAY, $value);
    }

    /**
     * Returns value of '_say' property
     *
     * @return MsgUp_ChatSay
     */
    public function getSay()
    {
        return $this->get(self::_SAY);
    }

    /**
     * Sets value of '_show_team' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setShowTeam($value)
    {
        return $this->set(self::_SHOW_TEAM, $value);
    }

    /**
     * Returns value of '_show_team' property
     *
     * @return int
     */
    public function getShowTeam()
    {
        return $this->get(self::_SHOW_TEAM);
    }

    /**
     * Sets value of '_set_lineup' property
     *
     * @param MsgUp_SetLineup $value Property value
     *
     * @return null
     */
    public function setSetLineup(MsgUp_SetLineup $value)
    {
        return $this->set(self::_SET_LINEUP, $value);
    }

    /**
     * Returns value of '_set_lineup' property
     *
     * @return MsgUp_SetLineup
     */
    public function getSetLineup()
    {
        return $this->get(self::_SET_LINEUP);
    }
}

/**
 * began_challenge message
 */
class MsgUp_BeganChallenge extends \ProtobufMessage
{
    /* Field index constants */
    const _CHALLENGEID = 1;
    const _RECORDID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_CHALLENGEID => array(
            'name' => '_challengeid',
            'required' => true,
            'type' => 5,
        ),
        self::_RECORDID => array(
            'name' => '_recordid',
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
        $this->values[self::_CHALLENGEID] = null;
        $this->values[self::_RECORDID] = null;
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
     * Sets value of '_challengeid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChallengeid($value)
    {
        return $this->set(self::_CHALLENGEID, $value);
    }

    /**
     * Returns value of '_challengeid' property
     *
     * @return int
     */
    public function getChallengeid()
    {
        return $this->get(self::_CHALLENGEID);
    }

    /**
     * Sets value of '_recordid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecordid($value)
    {
        return $this->set(self::_RECORDID, $value);
    }

    /**
     * Returns value of '_recordid' property
     *
     * @return int
     */
    public function getRecordid()
    {
        return $this->get(self::_RECORDID);
    }
}

/**
 * challenge_end_battle message
 */
class MsgUp_ChallengeEndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _RESULT = 1;
    const _OPPO_USER_ID = 2;
    const _SAY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RESULT => array(
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_OPPO_USER_ID => array(
            'name' => '_oppo_user_id',
            'required' => true,
            'type' => 5,
        ),
        self::_SAY => array(
            'name' => '_say',
            'required' => true,
            'type' => 'MsgUp_ChatSay'
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
        $this->values[self::_RESULT] = null;
        $this->values[self::_OPPO_USER_ID] = null;
        $this->values[self::_SAY] = null;
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
     * Sets value of '_oppo_user_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOppoUserId($value)
    {
        return $this->set(self::_OPPO_USER_ID, $value);
    }

    /**
     * Returns value of '_oppo_user_id' property
     *
     * @return int
     */
    public function getOppoUserId()
    {
        return $this->get(self::_OPPO_USER_ID);
    }

    /**
     * Sets value of '_say' property
     *
     * @param MsgUp_ChatSay $value Property value
     *
     * @return null
     */
    public function setSay(MsgUp_ChatSay $value)
    {
        return $this->set(self::_SAY, $value);
    }

    /**
     * Returns value of '_say' property
     *
     * @return MsgUp_ChatSay
     */
    public function getSay()
    {
        return $this->get(self::_SAY);
    }
}

/**
 * challenge_replay message
 */
class MsgUp_ChallengeReplay extends \ProtobufMessage
{
    /* Field index constants */
    const _RECORD_INDEX = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_RECORD_INDEX => array(
            'name' => '_record_index',
            'required' => true,
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
        $this->values[self::_RECORD_INDEX] = null;
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
     * Sets value of '_record_index' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecordIndex($value)
    {
        return $this->set(self::_RECORD_INDEX, $value);
    }

    /**
     * Returns value of '_record_index' property
     *
     * @return string
     */
    public function getRecordIndex()
    {
        return $this->get(self::_RECORD_INDEX);
    }
}

/**
 * item_info message
 */
class MsgUp_ItemInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ITEM_ID = 1;
    const ITEM_AMOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEM_ID => array(
            'name' => 'item_id',
            'required' => false,
            'type' => 5,
        ),
        self::ITEM_AMOUNT => array(
            'name' => 'item_amount',
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
        $this->values[self::ITEM_ID] = null;
        $this->values[self::ITEM_AMOUNT] = null;
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
     * Sets value of 'item_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::ITEM_ID, $value);
    }

    /**
     * Returns value of 'item_id' property
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->get(self::ITEM_ID);
    }

    /**
     * Sets value of 'item_amount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setItemAmount($value)
    {
        return $this->set(self::ITEM_AMOUNT, $value);
    }

    /**
     * Returns value of 'item_amount' property
     *
     * @return int
     */
    public function getItemAmount()
    {
        return $this->get(self::ITEM_AMOUNT);
    }
}

/**
 * ancients message
 */
class MsgUp_Ancients extends \ProtobufMessage
{
    /* Field index constants */
    const _ANCIENTS_OPEN_PANEL = 1;
    const _ANCIENTS_REQUEST_INVITE_INFO = 2;
    const _ANCIENTS_START_BATTLE = 3;
    const _ANCIENTS_REQUEST_RECORD = 4;
    const _ANCIENTS_SEND_INVITATION = 5;
    const _ANCIENTS_END_BATTLE = 6;
    const _ANCIENTS_PREPARE_BATTLE = 7;
    const _ANCIENTS_REQUEST_GUARD = 8;
    const _ANCIENTS_DRAW_REWARDS = 9;
    const _ANCIENTS_REQUEST_SUMMARY = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_ANCIENTS_OPEN_PANEL => array(
            'name' => '_ancients_open_panel',
            'required' => false,
            'type' => 'MsgUp_AncientsOpenPanel'
        ),
        self::_ANCIENTS_REQUEST_INVITE_INFO => array(
            'name' => '_ancients_request_invite_info',
            'required' => false,
            'type' => 'MsgUp_AncientsRequestInviteInfo'
        ),
        self::_ANCIENTS_START_BATTLE => array(
            'name' => '_ancients_start_battle',
            'required' => false,
            'type' => 'MsgUp_AncientsStartBattle'
        ),
        self::_ANCIENTS_REQUEST_RECORD => array(
            'name' => '_ancients_request_record',
            'required' => false,
            'type' => 'MsgUp_AncientsRequestRecord'
        ),
        self::_ANCIENTS_SEND_INVITATION => array(
            'name' => '_ancients_send_invitation',
            'required' => false,
            'type' => 'MsgUp_AncientsSendInvitation'
        ),
        self::_ANCIENTS_END_BATTLE => array(
            'name' => '_ancients_end_battle',
            'required' => false,
            'type' => 'MsgUp_AncientsEndBattle'
        ),
        self::_ANCIENTS_PREPARE_BATTLE => array(
            'name' => '_ancients_prepare_battle',
            'required' => false,
            'type' => 'MsgUp_AncientsPrepareBattle'
        ),
        self::_ANCIENTS_REQUEST_GUARD => array(
            'name' => '_ancients_request_guard',
            'required' => false,
            'type' => 'MsgUp_AncientsRequestGuard'
        ),
        self::_ANCIENTS_DRAW_REWARDS => array(
            'name' => '_ancients_draw_rewards',
            'required' => false,
            'type' => 'MsgUp_AncientsDrawRewards'
        ),
        self::_ANCIENTS_REQUEST_SUMMARY => array(
            'name' => '_ancients_request_summary',
            'required' => false,
            'type' => 'MsgUp_AncientsRequestSummary'
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
        $this->values[self::_ANCIENTS_OPEN_PANEL] = null;
        $this->values[self::_ANCIENTS_REQUEST_INVITE_INFO] = null;
        $this->values[self::_ANCIENTS_START_BATTLE] = null;
        $this->values[self::_ANCIENTS_REQUEST_RECORD] = null;
        $this->values[self::_ANCIENTS_SEND_INVITATION] = null;
        $this->values[self::_ANCIENTS_END_BATTLE] = null;
        $this->values[self::_ANCIENTS_PREPARE_BATTLE] = null;
        $this->values[self::_ANCIENTS_REQUEST_GUARD] = null;
        $this->values[self::_ANCIENTS_DRAW_REWARDS] = null;
        $this->values[self::_ANCIENTS_REQUEST_SUMMARY] = null;
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
     * Sets value of '_ancients_open_panel' property
     *
     * @param MsgUp_AncientsOpenPanel $value Property value
     *
     * @return null
     */
    public function setAncientsOpenPanel(MsgUp_AncientsOpenPanel $value)
    {
        return $this->set(self::_ANCIENTS_OPEN_PANEL, $value);
    }

    /**
     * Returns value of '_ancients_open_panel' property
     *
     * @return MsgUp_AncientsOpenPanel
     */
    public function getAncientsOpenPanel()
    {
        return $this->get(self::_ANCIENTS_OPEN_PANEL);
    }

    /**
     * Sets value of '_ancients_request_invite_info' property
     *
     * @param MsgUp_AncientsRequestInviteInfo $value Property value
     *
     * @return null
     */
    public function setAncientsRequestInviteInfo(MsgUp_AncientsRequestInviteInfo $value)
    {
        return $this->set(self::_ANCIENTS_REQUEST_INVITE_INFO, $value);
    }

    /**
     * Returns value of '_ancients_request_invite_info' property
     *
     * @return MsgUp_AncientsRequestInviteInfo
     */
    public function getAncientsRequestInviteInfo()
    {
        return $this->get(self::_ANCIENTS_REQUEST_INVITE_INFO);
    }

    /**
     * Sets value of '_ancients_start_battle' property
     *
     * @param MsgUp_AncientsStartBattle $value Property value
     *
     * @return null
     */
    public function setAncientsStartBattle(MsgUp_AncientsStartBattle $value)
    {
        return $this->set(self::_ANCIENTS_START_BATTLE, $value);
    }

    /**
     * Returns value of '_ancients_start_battle' property
     *
     * @return MsgUp_AncientsStartBattle
     */
    public function getAncientsStartBattle()
    {
        return $this->get(self::_ANCIENTS_START_BATTLE);
    }

    /**
     * Sets value of '_ancients_request_record' property
     *
     * @param MsgUp_AncientsRequestRecord $value Property value
     *
     * @return null
     */
    public function setAncientsRequestRecord(MsgUp_AncientsRequestRecord $value)
    {
        return $this->set(self::_ANCIENTS_REQUEST_RECORD, $value);
    }

    /**
     * Returns value of '_ancients_request_record' property
     *
     * @return MsgUp_AncientsRequestRecord
     */
    public function getAncientsRequestRecord()
    {
        return $this->get(self::_ANCIENTS_REQUEST_RECORD);
    }

    /**
     * Sets value of '_ancients_send_invitation' property
     *
     * @param MsgUp_AncientsSendInvitation $value Property value
     *
     * @return null
     */
    public function setAncientsSendInvitation(MsgUp_AncientsSendInvitation $value)
    {
        return $this->set(self::_ANCIENTS_SEND_INVITATION, $value);
    }

    /**
     * Returns value of '_ancients_send_invitation' property
     *
     * @return MsgUp_AncientsSendInvitation
     */
    public function getAncientsSendInvitation()
    {
        return $this->get(self::_ANCIENTS_SEND_INVITATION);
    }

    /**
     * Sets value of '_ancients_end_battle' property
     *
     * @param MsgUp_AncientsEndBattle $value Property value
     *
     * @return null
     */
    public function setAncientsEndBattle(MsgUp_AncientsEndBattle $value)
    {
        return $this->set(self::_ANCIENTS_END_BATTLE, $value);
    }

    /**
     * Returns value of '_ancients_end_battle' property
     *
     * @return MsgUp_AncientsEndBattle
     */
    public function getAncientsEndBattle()
    {
        return $this->get(self::_ANCIENTS_END_BATTLE);
    }

    /**
     * Sets value of '_ancients_prepare_battle' property
     *
     * @param MsgUp_AncientsPrepareBattle $value Property value
     *
     * @return null
     */
    public function setAncientsPrepareBattle(MsgUp_AncientsPrepareBattle $value)
    {
        return $this->set(self::_ANCIENTS_PREPARE_BATTLE, $value);
    }

    /**
     * Returns value of '_ancients_prepare_battle' property
     *
     * @return MsgUp_AncientsPrepareBattle
     */
    public function getAncientsPrepareBattle()
    {
        return $this->get(self::_ANCIENTS_PREPARE_BATTLE);
    }

    /**
     * Sets value of '_ancients_request_guard' property
     *
     * @param MsgUp_AncientsRequestGuard $value Property value
     *
     * @return null
     */
    public function setAncientsRequestGuard(MsgUp_AncientsRequestGuard $value)
    {
        return $this->set(self::_ANCIENTS_REQUEST_GUARD, $value);
    }

    /**
     * Returns value of '_ancients_request_guard' property
     *
     * @return MsgUp_AncientsRequestGuard
     */
    public function getAncientsRequestGuard()
    {
        return $this->get(self::_ANCIENTS_REQUEST_GUARD);
    }

    /**
     * Sets value of '_ancients_draw_rewards' property
     *
     * @param MsgUp_AncientsDrawRewards $value Property value
     *
     * @return null
     */
    public function setAncientsDrawRewards(MsgUp_AncientsDrawRewards $value)
    {
        return $this->set(self::_ANCIENTS_DRAW_REWARDS, $value);
    }

    /**
     * Returns value of '_ancients_draw_rewards' property
     *
     * @return MsgUp_AncientsDrawRewards
     */
    public function getAncientsDrawRewards()
    {
        return $this->get(self::_ANCIENTS_DRAW_REWARDS);
    }

    /**
     * Sets value of '_ancients_request_summary' property
     *
     * @param MsgUp_AncientsRequestSummary $value Property value
     *
     * @return null
     */
    public function setAncientsRequestSummary(MsgUp_AncientsRequestSummary $value)
    {
        return $this->set(self::_ANCIENTS_REQUEST_SUMMARY, $value);
    }

    /**
     * Returns value of '_ancients_request_summary' property
     *
     * @return MsgUp_AncientsRequestSummary
     */
    public function getAncientsRequestSummary()
    {
        return $this->get(self::_ANCIENTS_REQUEST_SUMMARY);
    }
}

/**
 * ancients_request_summary message
 */
class MsgUp_AncientsRequestSummary extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * ancients_draw_rewards message
 */
class MsgUp_AncientsDrawRewards extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * ancients_request_record message
 */
class MsgUp_AncientsRequestRecord extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_UID] = null;
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
}

/**
 * ancients_request_invite_info message
 */
class MsgUp_AncientsRequestInviteInfo extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * ancients_open_panel message
 */
class MsgUp_AncientsOpenPanel extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_UID] = null;
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
}

/**
 * ancients_start_battle message
 */
class MsgUp_AncientsStartBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _INDEX = 1;
    const _LINEUP = 2;
    const _UID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_INDEX => array(
            'name' => '_index',
            'required' => true,
            'type' => 5,
        ),
        self::_LINEUP => array(
            'name' => '_lineup',
            'required' => true,
            'type' => 'MsgUp_Lineup'
        ),
        self::_UID => array(
            'name' => '_uid',
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
        $this->values[self::_LINEUP] = null;
        $this->values[self::_UID] = null;
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
     * Sets value of '_lineup' property
     *
     * @param MsgUp_Lineup $value Property value
     *
     * @return null
     */
    public function setLineup(MsgUp_Lineup $value)
    {
        return $this->set(self::_LINEUP, $value);
    }

    /**
     * Returns value of '_lineup' property
     *
     * @return MsgUp_Lineup
     */
    public function getLineup()
    {
        return $this->get(self::_LINEUP);
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
}

/**
 * ancients_send_invitation message
 */
class MsgUp_AncientsSendInvitation extends \ProtobufMessage
{
    /* Field index constants */
    const _INVITATIONS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_INVITATIONS => array(
            'name' => '_invitations',
            'repeated' => true,
            'type' => 'MsgUp_AncientsInvitation'
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
        $this->values[self::_INVITATIONS] = array();
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
     * Appends value to '_invitations' list
     *
     * @param MsgUp_AncientsInvitation $value Value to append
     *
     * @return null
     */
    public function appendInvitations(MsgUp_AncientsInvitation $value)
    {
        return $this->append(self::_INVITATIONS, $value);
    }

    /**
     * Clears '_invitations' list
     *
     * @return null
     */
    public function clearInvitations()
    {
        return $this->clear(self::_INVITATIONS);
    }

    /**
     * Returns '_invitations' list
     *
     * @return MsgUp_AncientsInvitation[]
     */
    public function getInvitations()
    {
        return $this->get(self::_INVITATIONS);
    }

    /**
     * Returns '_invitations' iterator
     *
     * @return ArrayIterator
     */
    public function getInvitationsIterator()
    {
        return new \ArrayIterator($this->get(self::_INVITATIONS));
    }

    /**
     * Returns element from '_invitations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MsgUp_AncientsInvitation
     */
    public function getInvitationsAt($offset)
    {
        return $this->get(self::_INVITATIONS, $offset);
    }

    /**
     * Returns count of '_invitations' list
     *
     * @return int
     */
    public function getInvitationsCount()
    {
        return $this->count(self::_INVITATIONS);
    }
}

/**
 * ancients_invitation message
 */
class MsgUp_AncientsInvitation extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _SAY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_SAY => array(
            'name' => '_say',
            'required' => true,
            'type' => 'MsgUp_ChatSay'
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
        $this->values[self::_SAY] = null;
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
     * Sets value of '_say' property
     *
     * @param MsgUp_ChatSay $value Property value
     *
     * @return null
     */
    public function setSay(MsgUp_ChatSay $value)
    {
        return $this->set(self::_SAY, $value);
    }

    /**
     * Returns value of '_say' property
     *
     * @return MsgUp_ChatSay
     */
    public function getSay()
    {
        return $this->get(self::_SAY);
    }
}

/**
 * ancients_request_guard message
 */
class MsgUp_AncientsRequestGuard extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_INDEX => array(
            'name' => '_index',
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
        $this->values[self::_UID] = null;
        $this->values[self::_INDEX] = null;
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
}

/**
 * ancients_end_battle message
 */
class MsgUp_AncientsEndBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _INDEX = 2;
    const _RESULT = 3;
    const _HP_INFO = 4;
    const _OPERATION = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_INDEX => array(
            'name' => '_index',
            'required' => true,
            'type' => 5,
        ),
        self::_RESULT => array(
            'name' => '_result',
            'required' => true,
            'type' => 5,
        ),
        self::_HP_INFO => array(
            'name' => '_hp_info',
            'repeated' => true,
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
        $this->values[self::_UID] = null;
        $this->values[self::_INDEX] = null;
        $this->values[self::_RESULT] = null;
        $this->values[self::_HP_INFO] = array();
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
     * Appends value to '_hp_info' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendHpInfo($value)
    {
        return $this->append(self::_HP_INFO, $value);
    }

    /**
     * Clears '_hp_info' list
     *
     * @return null
     */
    public function clearHpInfo()
    {
        return $this->clear(self::_HP_INFO);
    }

    /**
     * Returns '_hp_info' list
     *
     * @return int[]
     */
    public function getHpInfo()
    {
        return $this->get(self::_HP_INFO);
    }

    /**
     * Returns '_hp_info' iterator
     *
     * @return ArrayIterator
     */
    public function getHpInfoIterator()
    {
        return new \ArrayIterator($this->get(self::_HP_INFO));
    }

    /**
     * Returns element from '_hp_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getHpInfoAt($offset)
    {
        return $this->get(self::_HP_INFO, $offset);
    }

    /**
     * Returns count of '_hp_info' list
     *
     * @return int
     */
    public function getHpInfoCount()
    {
        return $this->count(self::_HP_INFO);
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

/**
 * ancients_prepare_battle message
 */
class MsgUp_AncientsPrepareBattle extends \ProtobufMessage
{
    /* Field index constants */
    const _UID = 1;
    const _INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::_UID => array(
            'name' => '_uid',
            'required' => true,
            'type' => 5,
        ),
        self::_INDEX => array(
            'name' => '_index',
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
        $this->values[self::_UID] = null;
        $this->values[self::_INDEX] = null;
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
}
require_once 'pb_proto_common.php';