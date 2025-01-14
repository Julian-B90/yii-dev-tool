<?php

/**
 * See file packages.local.php.example for customization examples.
 *
 * DO NOT EDIT THIS FILE. To customize the configuration, create your local configuration
 * packages.local.php using file packages.local.php.example as example.
 */
$packages = [
    'docs' => true,

    // Config plugin
    'config' => true,
    'composer-config-plugin' => true,

    // Error handler
    'error-handler' => true,
    'friendly-exception' => true,

    // Dependency injection
    'di' => true,
    'proxy' => true,
    'container-proxy' => true,
    'injector' => true,
    'factory' => true,

    // Events
    'event-dispatcher' => true,
    'yii-event' => true,

    // Core packages
    'aliases' => true,
    'serializer' => true,
    'network-utilities' => true,
    'http' => true,
    'data-response' => true,

    // Security
    'security' => true,
    'rate-limiter' => true,
    'csrf' => true,

    // Authentication and authorization
    'access' => true,
    'auth' => true,
    'auth-jwt' => true,
    'user' => true,
    'yii-auth-client' => true,

    // RBAC
    'rbac' => true,
    'rbac-db' => true,
    'rbac-php' => true,
    'rbac-spiral-db' => true,

    // Cache
    'cache' => true,
    'cache-apcu' => true,
    'cache-wincache' => true,
    'cache-file' => true,
    'cache-db' => true,
    'cache-memcached' => true,

    // Log
    'log' => true,
    'log-target-db' => true,
    'log-target-email' => true,
    'log-target-file' => true,
    'log-target-syslog' => true,

    // i18n
    'i18n' => true,
    'translator' => true,
    'translator-extractor' => true,
    'translator-message-php' => true,
    'translator-message-gettext' => true,
    'translator-message-db' => true,
    'translator-formatter-intl' => true,
    'translator-formatter-simple' => true,

    // Queue
    'yii-queue' => true,
    'yii-queue-interop' => true,
    'yii-queue-amqp' => true,

    // Mutex
    'mutex' => true,
    'mutex-file' => true,
    'mutex-db-pgsql' => true,
    'mutex-db-oracle' => true,
    'mutex-db-mysql' => true,
    // 'mutex-db-redis' => true,

    // Mailer
    'mailer' => true,
    'mailer-swiftmailer' => true,

    // Helpers and utilities
    'arrays' => true,
    'strings' => true,
    'files' => true,
    'var-dumper' => true,
    'html' => true,
    'json' => true,

    // Console
    'yii-console' => true,

    // Tools
    'yii-swagger' => true,
    'profiler' => true,
    //'fixture' => true,

    // Databases
    'db' => true,
    'db-mysql' => true,
    'db-pgsql' => true,
    'db-sqlite' => true,
    'db-mssql' => true,
    'db-oracle' => true,
    //'db-mongodb' => true,
    'db-mariadb' => true,
    'active-record' => true,
    'yii-db-migration' => true,
    'yii-cycle' => true,
    // 'db-sphinx' => true,
    // 'db-redis' => true,

    // Router
    'router' => true,
    'router-fastroute' => true,

    // Web
    'request-model' => true,
    'middleware-dispatcher' => true,
    'request-body-parser' => true,
    'session' => true,
    'cookies' => true,
    'yii-web' => true,

    // View, assets, templates and widgets
    'view' => true,
    'yii-view' => true,
    'yii-twig' => true,
    'widget' => true,
    'yii-widgets' => true,
    'form' => true,
    'assets' => true,
    'yii-jquery' => true,
    'yii-masked-input' => true,

    // Data abstractions and widgets
    'data' => true,
    'validator' => true,
    'yii-dataview' => true,

    // Debugger
    'yii-debug' => true,
    'yii-debug-api' => true,
    'yii-debug-frontend' => true,

    // Gii
    'yii-gii' => true,
    'yii-gii-frontend' => true,

    // CSS frameworks
    //'yii-bootstrap4' => true,
    'yii-bootstrap5' => true,
    'yii-bulma' => true,

    'yii-captcha' => true,
    'yii-filesystem' => true,

    // Demo
    'yii-demo' => true,
    'demo-api' => true,

    // Application templates
    'app' => true,
    'app-api' => true,

    // Docker
    'yii-docker' => true,

    // Testing
    'test-support' => true,
    'psr-dummy-provider' => true,

    // Requirements checker
    'requirements' => true,

    // Package template
    'package-template' => true,
];

if (file_exists($localFile = __DIR__ . '/packages.local.php')) {
    /** @noinspection PhpIncludeInspection */
    $packages = array_merge($packages, require $localFile);
}

return $packages;
