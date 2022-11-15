<?php

namespace luckcodes\mobiledetect;


use Detection\MobileDetect;

/**
 * Class MobileDetectHelper
 * @package luckcodes\mobiledetect
 * @version 1.1.0
 * @method static bool isiPhone()
 * @method static bool isBlackBerry()
 * @method static bool isPixel()
 * @method static bool isHTC()
 * @method static bool isNexus()
 * @method static bool isDell()
 * @method static bool isMotorola()
 * @method static bool isSamsung()
 * @method static bool isLG()
 * @method static bool isSony()
 * @method static bool isAsus()
 * @method static bool isXiaomi()
 * @method static bool isNokiaLumia()
 * @method static bool isMicromax()
 * @method static bool isPalm()
 * @method static bool isVertu()
 * @method static bool isPantech()
 * @method static bool isFly()
 * @method static bool isWiko()
 * @method static bool isiMobile()
 * @method static bool isSimValley()
 * @method static bool isWolfgang()
 * @method static bool isAlcatel()
 * @method static bool isNintendo()
 * @method static bool isAmoi()
 * @method static bool isINQ()
 * @method static bool isOnePlus()
 * @method static bool isGenericPhone()
 * @method static bool isiPad()
 * @method static bool isNexusTablet()
 * @method static bool isGoogleTablet()
 * @method static bool isSamsungTablet()
 * @method static bool isKindle()
 * @method static bool isSurfaceTablet()
 * @method static bool isHPTablet()
 * @method static bool isAsusTablet()
 * @method static bool isBlackBerryTablet()
 * @method static bool isHTCtablet()
 * @method static bool isMotorolaTablet()
 * @method static bool isNookTablet()
 * @method static bool isAcerTablet()
 * @method static bool isToshibaTablet()
 * @method static bool isLGTablet()
 * @method static bool isFujitsuTablet()
 * @method static bool isPrestigioTablet()
 * @method static bool isLenovoTablet()
 * @method static bool isDellTablet()
 * @method static bool isYarvikTablet()
 * @method static bool isMedionTablet()
 * @method static bool isArnovaTablet()
 * @method static bool isIntensoTablet()
 * @method static bool isIRUTablet()
 * @method static bool isMegafonTablet()
 * @method static bool isEbodaTablet()
 * @method static bool isAllViewTablet()
 * @method static bool isArchosTablet()
 * @method static bool isAinolTablet()
 * @method static bool isNokiaLumiaTablet()
 * @method static bool isSonyTablet()
 * @method static bool isPhilipsTablet()
 * @method static bool isCubeTablet()
 * @method static bool isCobyTablet()
 * @method static bool isMIDTablet()
 * @method static bool isMSITablet()
 * @method static bool isSMiTTablet()
 * @method static bool isRockChipTablet()
 * @method static bool isFlyTablet()
 * @method static bool isbqTablet()
 * @method static bool isHuaweiTablet()
 * @method static bool isNecTablet()
 * @method static bool isPantechTablet()
 * @method static bool isBronchoTablet()
 * @method static bool isVersusTablet()
 * @method static bool isZyncTablet()
 * @method static bool isPositivoTablet()
 * @method static bool isNabiTablet()
 * @method static bool isKoboTablet()
 * @method static bool isDanewTablet()
 * @method static bool isTexetTablet()
 * @method static bool isPlaystationTablet()
 * @method static bool isTrekstorTablet()
 * @method static bool isPyleAudioTablet()
 * @method static bool isAdvanTablet()
 * @method static bool isDanyTechTablet()
 * @method static bool isGalapadTablet()
 * @method static bool isMicromaxTablet()
 * @method static bool isKarbonnTablet()
 * @method static bool isAllFineTablet()
 * @method static bool isPROSCANTablet()
 * @method static bool isYONESTablet()
 * @method static bool isChangJiaTablet()
 * @method static bool isGUTablet()
 * @method static bool isPointOfViewTablet()
 * @method static bool isOvermaxTablet()
 * @method static bool isHCLTablet()
 * @method static bool isDPSTablet()
 * @method static bool isVistureTablet()
 * @method static bool isCrestaTablet()
 * @method static bool isMediatekTablet()
 * @method static bool isConcordeTablet()
 * @method static bool isGoCleverTablet()
 * @method static bool isModecomTablet()
 * @method static bool isVoninoTablet()
 * @method static bool isECSTablet()
 * @method static bool isStorexTablet()
 * @method static bool isVodafoneTablet()
 * @method static bool isEssentielBTablet()
 * @method static bool isRossMoorTablet()
 * @method static bool isiMobileTablet()
 * @method static bool isTolinoTablet()
 * @method static bool isAudioSonicTablet()
 * @method static bool isAMPETablet()
 * @method static bool isSkkTablet()
 * @method static bool isTecnoTablet()
 * @method static bool isJXDTablet()
 * @method static bool isiJoyTablet()
 * @method static bool isFX2Tablet()
 * @method static bool isXoroTablet()
 * @method static bool isViewsonicTablet()
 * @method static bool isVerizonTablet()
 * @method static bool isOdysTablet()
 * @method static bool isCaptivaTablet()
 * @method static bool isIconbitTablet()
 * @method static bool isTeclastTablet()
 * @method static bool isOndaTablet()
 * @method static bool isJaytechTablet()
 * @method static bool isBlaupunktTablet()
 * @method static bool isDigmaTablet()
 * @method static bool isEvolioTablet()
 * @method static bool isLavaTablet()
 * @method static bool isAocTablet()
 * @method static bool isMpmanTablet()
 * @method static bool isCelkonTablet()
 * @method static bool isWolderTablet()
 * @method static bool isMediacomTablet()
 * @method static bool isMiTablet()
 * @method static bool isNibiruTablet()
 * @method static bool isNexoTablet()
 * @method static bool isLeaderTablet()
 * @method static bool isUbislateTablet()
 * @method static bool isPocketBookTablet()
 * @method static bool isKocasoTablet()
 * @method static bool isHisenseTablet()
 * @method static bool isHudl()
 * @method static bool isTelstraTablet()
 * @method static bool isGenericTablet()
 * @method static bool isAndroidOS()
 * @method static bool isBlackBerryOS()
 * @method static bool isPalmOS()
 * @method static bool isSymbianOS()
 * @method static bool isWindowsMobileOS()
 * @method static bool isWindowsPhoneOS()
 * @method static bool isiOS()
 * @method static bool isiPadOS()
 * @method static bool isSailfishOS()
 * @method static bool isMeeGoOS()
 * @method static bool isMaemoOS()
 * @method static bool isJavaOS()
 * @method static bool iswebOS()
 * @method static bool isbadaOS()
 * @method static bool isBREWOS()
 * @method static bool isChrome()
 * @method static bool isDolfin()
 * @method static bool isOpera()
 * @method static bool isSkyfire()
 * @method static bool isEdge()
 * @method static bool isIE()
 * @method static bool isFirefox()
 * @method static bool isBolt()
 * @method static bool isTeaShark()
 * @method static bool isBlazer()
 * @method static bool isSafari()
 * @method static bool isWeChat()
 * @method static bool isUCBrowser()
 * @method static bool isbaiduboxapp()
 * @method static bool isbaidubrowser()
 * @method static bool isDiigoBrowser()
 * @method static bool isMercury()
 * @method static bool isObigoBrowser()
 * @method static bool isNetFront()
 * @method static bool isGenericBrowser()
 * @method static bool isPaleMoon()
 * @method static bool isBot()
 * @method static bool isMobileBot()
 * @method static bool isDesktopMode()
 * @method static bool isTV()
 * @method static bool isWebKit()
 * @method static bool isConsole()
 * @method static bool isWatch()
 */
class MobileDetectHelper
{

    static private $detect = false;

    /**
     * init
     */
    static function init()
    {
        if (!self::$detect) {
            self::$detect = new MobileDetect();
        }
    }

    /**
     * Support for Lib Mobile-Detect functions
     * @param $name
     * @param $arguments
     * @return false|mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([self::$detect, $name], $arguments);
    }

    /**
     * We define only mobile without tablets
     * @return boolean
     */
    static function isPhone()
    {
        return self::$detect->isMobile() && !self::$detect->isTablet();
    }

    /**
     * We define desktop mobile without tablets
     * @return boolean
     */
    static function isDesktop()
    {
        return !self::$detect->isMobile() && !self::$detect->isTablet();
    }
}

MobileDetectHelper::init();
