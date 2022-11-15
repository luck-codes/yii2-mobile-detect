
# Yii 2 Mobile detect

Компонент для [Yii 2](http://www.yiiframework.com/) приложения использующий класс
[Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) для определения устройств.

Установка
------------

Предпочтительный способ установки этого расширения через [composer](http://getcomposer.org/download/).

Либо запустить

```
php composer.phar require --prefer-dist luckcodes/yii2-mobile-detect "~1.1"
```

или добавить

```
"luckcodes/yii2-mobile-detect": "~1.1"
```

в требуемый раздел вашего `composer.json` файл.

Как использовать в коде:
---
Проверка является ли устройство мобильным телефоном:

```
$isMobile = \luckcodes\mobiledetect\MobileDetectHelper::isPhone();
```
Проверка является ли устройство мобильным телефоном или планшетом:

```
$isMobile = \luckcodes\mobiledetect\MobileDetectHelper::isMobile();
```

Проверка является ли устройство планшетом:

```
$isTablet = \luckcodes\mobiledetect\MobileDetectHelper::isTablet();
```

Проверка является ли устройство ПК:

```
$isDesktop = \luckcodes\mobiledetect\MobileDetectHelper::isDesktop();
```

А так же поддержка функций проверки самого класса [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect), такие как:

```
isiPhone()
isBlackBerry()
isPixel()
isHTC()
isNexus()
isDell()
isMotorola()
isSamsung()
isLG()
isSony()
isAsus()
isXiaomi()
isNokiaLumia()
isMicromax()
isPalm()
isVertu()
isPantech()
isFly()
isWiko()
isiMobile()
isSimValley()
isWolfgang()
isAlcatel()
isNintendo()
isAmoi()
isINQ()
isOnePlus()
isGenericPhone()
isiPad()
isNexusTablet()
isGoogleTablet()
isSamsungTablet()
isKindle()
isSurfaceTablet()
isHPTablet()
isAsusTablet()
isBlackBerryTablet()
isHTCtablet()
isMotorolaTablet()
isNookTablet()
isAcerTablet()
isToshibaTablet()
isLGTablet()
isFujitsuTablet()
isPrestigioTablet()
isLenovoTablet()
isDellTablet()
isYarvikTablet()
isMedionTablet()
isArnovaTablet()
isIntensoTablet()
isIRUTablet()
isMegafonTablet()
isEbodaTablet()
isAllViewTablet()
isArchosTablet()
isAinolTablet()
isNokiaLumiaTablet()
isSonyTablet()
isPhilipsTablet()
isCubeTablet()
isCobyTablet()
isMIDTablet()
isMSITablet()
isSMiTTablet()
isRockChipTablet()
isFlyTablet()
isbqTablet()
isHuaweiTablet()
isNecTablet()
isPantechTablet()
isBronchoTablet()
isVersusTablet()
isZyncTablet()
isPositivoTablet()
isNabiTablet()
isKoboTablet()
isDanewTablet()
isTexetTablet()
isPlaystationTablet()
isTrekstorTablet()
isPyleAudioTablet()
isAdvanTablet()
isDanyTechTablet()
isGalapadTablet()
isMicromaxTablet()
isKarbonnTablet()
isAllFineTablet()
isPROSCANTablet()
isYONESTablet()
isChangJiaTablet()
isGUTablet()
isPointOfViewTablet()
isOvermaxTablet()
isHCLTablet()
isDPSTablet()
isVistureTablet()
isCrestaTablet()
isMediatekTablet()
isConcordeTablet()
isGoCleverTablet()
isModecomTablet()
isVoninoTablet()
isECSTablet()
isStorexTablet()
isVodafoneTablet()
isEssentielBTablet()
isRossMoorTablet()
isiMobileTablet()
isTolinoTablet()
isAudioSonicTablet()
isAMPETablet()
isSkkTablet()
isTecnoTablet()
isJXDTablet()
isiJoyTablet()
isFX2Tablet()
isXoroTablet()
isViewsonicTablet()
isVerizonTablet()
isOdysTablet()
isCaptivaTablet()
isIconbitTablet()
isTeclastTablet()
isOndaTablet()
isJaytechTablet()
isBlaupunktTablet()
isDigmaTablet()
isEvolioTablet()
isLavaTablet()
isAocTablet()
isMpmanTablet()
isCelkonTablet()
isWolderTablet()
isMediacomTablet()
isMiTablet()
isNibiruTablet()
isNexoTablet()
isLeaderTablet()
isUbislateTablet()
isPocketBookTablet()
isKocasoTablet()
isHisenseTablet()
isHudl()
isTelstraTablet()
isGenericTablet()
isAndroidOS()
isBlackBerryOS()
isPalmOS()
isSymbianOS()
isWindowsMobileOS()
isWindowsPhoneOS()
isiOS()
isiPadOS()
isSailfishOS()
isMeeGoOS()
isMaemoOS()
isJavaOS()
iswebOS()
isbadaOS()
isBREWOS()
isChrome()
isDolfin()
isOpera()
isSkyfire()
isEdge()
isIE()
isFirefox()
isBolt()
isTeaShark()
isBlazer()
isSafari()
isWeChat()
isUCBrowser()
isbaiduboxapp()
isbaidubrowser()
isDiigoBrowser()
isMercury()
isObigoBrowser()
isNetFront()
isGenericBrowser()
isPaleMoon()
isBot()
isMobileBot()
isDesktopMode()
isTV()
isWebKit()
isConsole()
isWatch()
```
