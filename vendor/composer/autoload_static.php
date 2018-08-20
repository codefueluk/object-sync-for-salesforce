<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit258a02242ea9a0000a7e219d56217e81
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ActionScheduler\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ActionScheduler\\' => 
        array (
            0 => __DIR__ . '/..' . '/prospress/action-scheduler',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static $classMap = array (
        'AllowFieldTruncationHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'AssignmentRuleHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'CallOptions' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'Email' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceEmail.php',
        'EmailHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'LocaleOptions' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'LoginScopeHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'MassEmailMessage' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceEmail.php',
        'MruHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'PackageVersion' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'PackageVersionHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'ProcessRequest' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceProcessRequest.php',
        'ProcessSubmitRequest' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceProcessRequest.php',
        'ProcessWorkitemRequest' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceProcessRequest.php',
        'ProxySettings' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/ProxySettings.php',
        'QueryOptions' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'QueryResult' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceBaseClient.php',
        'SObject' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceBaseClient.php',
        'SforceBaseClient' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceBaseClient.php',
        'SforceCustomField' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceMetaObject.php',
        'SforceCustomObject' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceMetaObject.php',
        'SforceEnterpriseClient' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceEnterpriseClient.php',
        'SforceMetadataClient' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceMetadataClient.php',
        'SforcePartnerClient' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforcePartnerClient.php',
        'SforceSearchResult' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceBaseClient.php',
        'SforceSoapClient' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforcePartnerClient.php',
        'SingleEmailMessage' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceEmail.php',
        'UserTerritoryDeleteHeader' => __DIR__ . '/..' . '/developerforce/force.com-toolkit-for-php/soapclient/SforceHeaderOptions.php',
        'WP_Logging' => __DIR__ . '/..' . '/pippinsplugins/wp-logging/WP_Logging.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit258a02242ea9a0000a7e219d56217e81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit258a02242ea9a0000a7e219d56217e81::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit258a02242ea9a0000a7e219d56217e81::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit258a02242ea9a0000a7e219d56217e81::$classMap;

        }, null, ClassLoader::class);
    }
}
