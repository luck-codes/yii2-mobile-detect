
# Yii 2 Mobile detect

Компонент для [Yii 2](http://www.yiiframework.com/) приложения использующий класс
[Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) для определения устройств.

Установка
------------

Предпочтительный способ установки этого расширения через [composer](http://getcomposer.org/download/).

Либо запустить

```
php composer.phar require --prefer-dist luckcodes/yii2-mobile-detect "dev-master"
```

или добавить

```
"luckcodes/yii2-mobile-detect": "dev-master"
```

в требуемый раздел вашего `composer.json` файл.

Как использовать в коде:
---
Проверка является ли устройство мобильным телефоном

```
$isMobile = \luckcodes\mobiledetect\MobileDetectHelper::isMobile();
```

Проверка является ли устройство планшетом

```
$isTablet = \luckcodes\mobiledetect\MobileDetectHelper::isTablet();
```

Проверка является ли устройство ПК

```
$isDesktop = \luckcodes\mobiledetect\MobileDetectHelper::isDesktop();
```
