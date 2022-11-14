<?php

namespace luckcodes\mobiledetect;


use Detection\MobileDetect;

class MobileDetectHelper
{

    static private $detect = false;

    /**
     *
     */
    static function init()
    {
        if (!self::$detect) {
            self::$detect = new MobileDetect();
        }
    }

    /**
     * @return boolean
     */
    static function isMobile()
    {
        return self::$detect->isMobile();
    }

    /**
     * @return boolean
     */
    static function isTablet()
    {
        return self::$detect->isTablet();
    }

    /**
     * @return boolean
     */
    static function isDesktop()
    {
        return !self::$detect->isMobile() && !self::$detect->isTablet();
    }
}

MobileDetectHelper::init();
