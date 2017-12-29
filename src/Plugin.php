<?php

namespace Free2Wait;

use Composer\Composer;
use Composer\Installer\PackageEvent;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    protected static function checkFree2WaitOrder()
    {
        // @todo Implement checkFree2WaitOrder.
        return true;
    }

    protected static function hasFree2WaitOrderOrWait(PackageEvent $event)
    {
        // @todo Add hasFree2WaitSetting.
        $hasFree2WaitSetting = false;
        if ($hasFree2WaitSetting && !self::checkFree2WaitOrder()) {
            // @todo Replace ip & project with real values.
            $project = 'foo/bar';
            $ip = '1.1.1.1';
            $event->getIO()->write("You are free to wait for the package download - but in case if time is money for you, please consider buying non-waiting access to the package: https://example.com.com/?project={$project}&ip={$ip} - every cent goes to the package developer to incentive the open-source development.");
            $event->getIO()->write('');
            foreach (range(10, 1, -1) as $i) {
                $event->getIO()->overwrite("Please wait for {$i} seconds...", false);
                sleep(1);
            }
            $event->getIO()->overwrite('', false);
        }
    }

    public static function prePackageInstall(PackageEvent $event)
    {
        self::hasFree2WaitOrderOrWait($event);
    }

    public static function prePackageUpdate(PackageEvent $event)
    {
        self::hasFree2WaitOrderOrWait($event);
    }
}
