<?php return array (
  2 => 'broadcasting',
  4 => 'concurrency',
  5 => 'cors',
  8 => 'hashing',
  14 => 'view',
  'app' => 
  array (
    'name' => 'PPDB MTSN 1 PANDEGLANG',
    'env' => 'local',
    'debug' => true,
    'url' => '',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'Asia/Jakarta',
    'locale' => 'id',
    'fallback_locale' => 'id',
    'faker_locale' => 'id_ID',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:Lp/IDiCDBBhwPDbSkDban1uG88z2sF6IQAzY3996tzs=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
      6 => 'Illuminate\\Cookie\\CookieServiceProvider',
      7 => 'Illuminate\\Database\\DatabaseServiceProvider',
      8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      10 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      11 => 'Illuminate\\Hashing\\HashServiceProvider',
      12 => 'Illuminate\\Mail\\MailServiceProvider',
      13 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      15 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      16 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      17 => 'Illuminate\\Queue\\QueueServiceProvider',
      18 => 'Illuminate\\Redis\\RedisServiceProvider',
      19 => 'Illuminate\\Session\\SessionServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\Filament\\AdminPanelProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Concurrency' => 'Illuminate\\Support\\Facades\\Concurrency',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Context' => 'Illuminate\\Support\\Facades\\Context',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schedule' => 'Illuminate\\Support\\Facades\\Schedule',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Uri' => 'Illuminate\\Support\\Uri',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'cache' => 
  array (
    'default' => 'database',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'cache',
        'lock_connection' => NULL,
        'lock_table' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\framework/cache/data',
        'lock_path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => 'http://192.168.154.22:8000/',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'ppdb_mtsn_1_pandeglang_cache_',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'db_admisi',
        'prefix' => '',
        'foreign_key_constraints' => true,
        'busy_timeout' => NULL,
        'journal_mode' => NULL,
        'synchronous' => NULL,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_admisi',
        'username' => 'root',
        'password' => '18012000',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_admisi',
        'username' => 'root',
        'password' => '18012000',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_admisi',
        'username' => 'root',
        'password' => '18012000',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_admisi',
        'username' => 'root',
        'password' => '18012000',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 
    array (
      'table' => 'migrations',
      'update_date_on_publish' => true,
    ),
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'ppdb_mtsn_1_pandeglang_database_',
        'persistent' => false,
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filament' => 
  array (
    'broadcasting' => 
    array (
    ),
    'default_filesystem_disk' => 'public',
    'assets_path' => NULL,
    'cache_path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\bootstrap/cache/filament',
    'livewire_loading_delay' => 'default',
  ),
  'filament-easy-footer' => 
  array (
    'app_name' => 'PPDB MTSN 1 PANDEGLANG',
    'github' => 
    array (
      'repository' => 'zulfikriyahya/ppdb',
      'token' => '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',
      'cache_ttl' => '3600',
    ),
  ),
  'filament-shield' => 
  array (
    'shield_resource' => 
    array (
      'should_register_navigation' => true,
      'slug' => 'shield/roles',
      'navigation_sort' => -1,
      'navigation_badge' => true,
      'navigation_group' => true,
      'is_globally_searchable' => false,
      'show_model_path' => true,
      'is_scoped_to_tenant' => true,
      'cluster' => NULL,
    ),
    'tenant_model' => NULL,
    'auth_provider_model' => 
    array (
      'fqcn' => 'App\\Models\\User',
    ),
    'super_admin' => 
    array (
      'enabled' => true,
      'name' => 'administrator',
      'define_via_gate' => true,
      'intercept_gate' => 'before',
    ),
    'panel_user' => 
    array (
      'enabled' => true,
      'name' => 'panel_user',
    ),
    'permission_prefixes' => 
    array (
      'resource' => 
      array (
        0 => 'view',
        1 => 'view_any',
        2 => 'create',
        3 => 'update',
        4 => 'restore',
        5 => 'restore_any',
        6 => 'replicate',
        7 => 'reorder',
        8 => 'delete',
        9 => 'delete_any',
        10 => 'force_delete',
        11 => 'force_delete_any',
      ),
      'page' => 'page',
      'widget' => 'widget',
    ),
    'entities' => 
    array (
      'pages' => true,
      'widgets' => true,
      'resources' => true,
      'custom_permissions' => false,
    ),
    'generator' => 
    array (
      'option' => 'policies_and_permissions',
      'policy_directory' => 'Policies',
      'policy_namespace' => 'Policies',
    ),
    'exclude' => 
    array (
      'enabled' => true,
      'pages' => 
      array (
        0 => 'Dashboard',
      ),
      'widgets' => 
      array (
        0 => 'AccountWidget',
        1 => 'FilamentInfoWidget',
      ),
      'resources' => 
      array (
      ),
    ),
    'discovery' => 
    array (
      'discover_all_resources' => false,
      'discover_all_widgets' => false,
      'discover_all_pages' => false,
    ),
    'register_role_policy' => 
    array (
      'enabled' => true,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\app/private',
        'serve' => true,
        'throw' => false,
        'report' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
        'throw' => false,
        'report' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
        'report' => false,
      ),
    ),
    'links' => 
    array (
      'C:\\Users\\zedla\\Desktop\\ppdb\\public\\storage' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\app/public',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => NULL,
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\logs/laravel.log',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
        'replace_placeholders' => true,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'scheme' => NULL,
        'url' => NULL,
        'host' => 'mail.mtsn1pandeglang.sch.id',
        'port' => '587',
        'username' => 'adm@mtsn1pandeglang.sch.id',
        'password' => 'P@ndegl@ng_14012000*',
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'adm@mtsn1pandeglang.sch.id',
      'name' => 'PPDB MTSN 1 PANDEGLANG',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\Users\\zedla\\Desktop\\ppdb\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'role_pivot_key' => NULL,
      'permission_pivot_key' => NULL,
      'model_morph_key' => 'model_id',
      'team_foreign_key' => 'team_id',
    ),
    'register_permission_check_method' => true,
    'register_octane_reset_listener' => false,
    'events_enabled' => false,
    'teams' => false,
    'team_resolver' => 'Spatie\\Permission\\DefaultTeamResolver',
    'use_passport_client_credentials' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      \DateInterval::__set_state(array(
         'from_string' => true,
         'date_string' => '24 hours',
      )),
      'key' => 'spatie.permission.cache',
      'store' => 'default',
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'authenticate_session' => 'Laravel\\Sanctum\\Http\\Middleware\\AuthenticateSession',
      'encrypt_cookies' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
      'validate_csrf_token' => 'Illuminate\\Foundation\\Http\\Middleware\\ValidateCsrfToken',
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'ppdb_mtsn_1_pandeglang_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => '12',
      'verify' => true,
      'limit' => NULL,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
      'verify' => true,
    ),
    'rehash_on_login' => true,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\Users\\zedla\\Desktop\\ppdb\\resources\\views',
    ),
    'compiled' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\framework\\views',
  ),
  'filament-nord-theme' => 
  array (
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'public_path' => NULL,
    'convert_entities' => true,
    'options' => 
    array (
      'font_dir' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\fonts',
      'font_cache' => 'C:\\Users\\zedla\\Desktop\\ppdb\\storage\\fonts',
      'temp_dir' => 'C:\\Users\\zedla\\AppData\\Local\\Temp',
      'chroot' => 'C:\\Users\\zedla\\Desktop\\ppdb',
      'allowed_protocols' => 
      array (
        'data://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'file://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'http://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'https://' => 
        array (
          'rules' => 
          array (
          ),
        ),
      ),
      'artifactPathValidation' => NULL,
      'log_output_file' => NULL,
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_paper_orientation' => 'portrait',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => false,
      'allowed_remote_hosts' => NULL,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
  ),
  'blade-heroicons' => 
  array (
    'prefix' => 'heroicon',
    'fallback' => '',
    'class' => '',
    'attributes' => 
    array (
    ),
  ),
  'blade-icons' => 
  array (
    'sets' => 
    array (
    ),
    'class' => '',
    'attributes' => 
    array (
    ),
    'fallback' => '',
    'components' => 
    array (
      'disabled' => false,
      'default' => 'icon',
    ),
  ),
  'octane' => 
  array (
    'server' => 'roadrunner',
    'https' => false,
    'listeners' => 
    array (
      'Laravel\\Octane\\Events\\WorkerStarting' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\EnsureUploadedFilesAreValid',
        1 => 'Laravel\\Octane\\Listeners\\EnsureUploadedFilesCanBeMoved',
      ),
      'Laravel\\Octane\\Events\\RequestReceived' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\CreateConfigurationSandbox',
        1 => 'Laravel\\Octane\\Listeners\\CreateUrlGeneratorSandbox',
        2 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToAuthorizationGate',
        3 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToBroadcastManager',
        4 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseManager',
        5 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseSessionHandler',
        6 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToFilesystemManager',
        7 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToHttpKernel',
        8 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToLogManager',
        9 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToMailManager',
        10 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToNotificationChannelManager',
        11 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToPipelineHub',
        12 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToCacheManager',
        13 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToSessionManager',
        14 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToQueueManager',
        15 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToRouter',
        16 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToValidationFactory',
        17 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToViewFactory',
        18 => 'Laravel\\Octane\\Listeners\\FlushDatabaseRecordModificationState',
        19 => 'Laravel\\Octane\\Listeners\\FlushDatabaseQueryLog',
        20 => 'Laravel\\Octane\\Listeners\\RefreshQueryDurationHandling',
        21 => 'Laravel\\Octane\\Listeners\\FlushLogContext',
        22 => 'Laravel\\Octane\\Listeners\\FlushArrayCache',
        23 => 'Laravel\\Octane\\Listeners\\FlushMonologState',
        24 => 'Laravel\\Octane\\Listeners\\FlushStrCache',
        25 => 'Laravel\\Octane\\Listeners\\FlushTranslatorCache',
        26 => 'Laravel\\Octane\\Listeners\\PrepareInertiaForNextOperation',
        27 => 'Laravel\\Octane\\Listeners\\PrepareLivewireForNextOperation',
        28 => 'Laravel\\Octane\\Listeners\\PrepareScoutForNextOperation',
        29 => 'Laravel\\Octane\\Listeners\\PrepareSocialiteForNextOperation',
        30 => 'Laravel\\Octane\\Listeners\\FlushLocaleState',
        31 => 'Laravel\\Octane\\Listeners\\FlushQueuedCookies',
        32 => 'Laravel\\Octane\\Listeners\\FlushSessionState',
        33 => 'Laravel\\Octane\\Listeners\\FlushAuthenticationState',
        34 => 'Laravel\\Octane\\Listeners\\EnforceRequestScheme',
        35 => 'Laravel\\Octane\\Listeners\\EnsureRequestServerPortMatchesScheme',
        36 => 'Laravel\\Octane\\Listeners\\GiveNewRequestInstanceToApplication',
        37 => 'Laravel\\Octane\\Listeners\\GiveNewRequestInstanceToPaginator',
      ),
      'Laravel\\Octane\\Events\\RequestHandled' => 
      array (
      ),
      'Laravel\\Octane\\Events\\RequestTerminated' => 
      array (
      ),
      'Laravel\\Octane\\Events\\TaskReceived' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\CreateConfigurationSandbox',
        1 => 'Laravel\\Octane\\Listeners\\CreateUrlGeneratorSandbox',
        2 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToAuthorizationGate',
        3 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToBroadcastManager',
        4 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseManager',
        5 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseSessionHandler',
        6 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToFilesystemManager',
        7 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToHttpKernel',
        8 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToLogManager',
        9 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToMailManager',
        10 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToNotificationChannelManager',
        11 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToPipelineHub',
        12 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToCacheManager',
        13 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToSessionManager',
        14 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToQueueManager',
        15 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToRouter',
        16 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToValidationFactory',
        17 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToViewFactory',
        18 => 'Laravel\\Octane\\Listeners\\FlushDatabaseRecordModificationState',
        19 => 'Laravel\\Octane\\Listeners\\FlushDatabaseQueryLog',
        20 => 'Laravel\\Octane\\Listeners\\RefreshQueryDurationHandling',
        21 => 'Laravel\\Octane\\Listeners\\FlushLogContext',
        22 => 'Laravel\\Octane\\Listeners\\FlushArrayCache',
        23 => 'Laravel\\Octane\\Listeners\\FlushMonologState',
        24 => 'Laravel\\Octane\\Listeners\\FlushStrCache',
        25 => 'Laravel\\Octane\\Listeners\\FlushTranslatorCache',
        26 => 'Laravel\\Octane\\Listeners\\PrepareInertiaForNextOperation',
        27 => 'Laravel\\Octane\\Listeners\\PrepareLivewireForNextOperation',
        28 => 'Laravel\\Octane\\Listeners\\PrepareScoutForNextOperation',
        29 => 'Laravel\\Octane\\Listeners\\PrepareSocialiteForNextOperation',
      ),
      'Laravel\\Octane\\Events\\TaskTerminated' => 
      array (
      ),
      'Laravel\\Octane\\Events\\TickReceived' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\CreateConfigurationSandbox',
        1 => 'Laravel\\Octane\\Listeners\\CreateUrlGeneratorSandbox',
        2 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToAuthorizationGate',
        3 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToBroadcastManager',
        4 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseManager',
        5 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToDatabaseSessionHandler',
        6 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToFilesystemManager',
        7 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToHttpKernel',
        8 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToLogManager',
        9 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToMailManager',
        10 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToNotificationChannelManager',
        11 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToPipelineHub',
        12 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToCacheManager',
        13 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToSessionManager',
        14 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToQueueManager',
        15 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToRouter',
        16 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToValidationFactory',
        17 => 'Laravel\\Octane\\Listeners\\GiveNewApplicationInstanceToViewFactory',
        18 => 'Laravel\\Octane\\Listeners\\FlushDatabaseRecordModificationState',
        19 => 'Laravel\\Octane\\Listeners\\FlushDatabaseQueryLog',
        20 => 'Laravel\\Octane\\Listeners\\RefreshQueryDurationHandling',
        21 => 'Laravel\\Octane\\Listeners\\FlushLogContext',
        22 => 'Laravel\\Octane\\Listeners\\FlushArrayCache',
        23 => 'Laravel\\Octane\\Listeners\\FlushMonologState',
        24 => 'Laravel\\Octane\\Listeners\\FlushStrCache',
        25 => 'Laravel\\Octane\\Listeners\\FlushTranslatorCache',
        26 => 'Laravel\\Octane\\Listeners\\PrepareInertiaForNextOperation',
        27 => 'Laravel\\Octane\\Listeners\\PrepareLivewireForNextOperation',
        28 => 'Laravel\\Octane\\Listeners\\PrepareScoutForNextOperation',
        29 => 'Laravel\\Octane\\Listeners\\PrepareSocialiteForNextOperation',
      ),
      'Laravel\\Octane\\Events\\TickTerminated' => 
      array (
      ),
      'Laravel\\Octane\\Contracts\\OperationTerminated' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\FlushOnce',
        1 => 'Laravel\\Octane\\Listeners\\FlushTemporaryContainerInstances',
      ),
      'Laravel\\Octane\\Events\\WorkerErrorOccurred' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\ReportException',
        1 => 'Laravel\\Octane\\Listeners\\StopWorkerIfNecessary',
      ),
      'Laravel\\Octane\\Events\\WorkerStopping' => 
      array (
        0 => 'Laravel\\Octane\\Listeners\\CloseMonologHandlers',
      ),
    ),
    'warm' => 
    array (
      0 => 'auth',
      1 => 'cache',
      2 => 'cache.store',
      3 => 'config',
      4 => 'cookie',
      5 => 'db',
      6 => 'db.factory',
      7 => 'db.transactions',
      8 => 'encrypter',
      9 => 'files',
      10 => 'hash',
      11 => 'log',
      12 => 'router',
      13 => 'routes',
      14 => 'session',
      15 => 'session.store',
      16 => 'translator',
      17 => 'url',
      18 => 'view',
    ),
    'flush' => 
    array (
    ),
    'tables' => 
    array (
      'example:1000' => 
      array (
        'name' => 'string:1000',
        'votes' => 'int',
      ),
    ),
    'cache' => 
    array (
      'rows' => 1000,
      'bytes' => 10000,
    ),
    'watch' => 
    array (
      0 => 'app',
      1 => 'bootstrap',
      2 => 'config/**/*.php',
      3 => 'database/**/*.php',
      4 => 'public/**/*.php',
      5 => 'resources/**/*.php',
      6 => 'routes',
      7 => 'composer.lock',
      8 => '.env',
    ),
    'garbage' => 50,
    'max_execution_time' => 30,
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Livewire',
    'view_path' => 'C:\\Users\\zedla\\Desktop\\ppdb\\resources\\views/livewire',
    'layout' => 'components.layouts.app',
    'lazy_placeholder' => NULL,
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
      'cleanup' => true,
    ),
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
    array (
      'show_progress_bar' => true,
      'progress_bar_color' => '#2299dd',
    ),
    'inject_morph_markers' => true,
    'pagination_theme' => 'tailwind',
  ),
  'blueprint' => 
  array (
    'namespace' => 'App',
    'models_namespace' => 'Models',
    'controllers_namespace' => 'Http\\Controllers',
    'components_namespace' => 'Livewire',
    'policy_namespace' => 'Policies',
    'app_path' => 'app',
    'generate_phpdocs' => false,
    'use_constraints' => false,
    'on_delete' => 'cascade',
    'on_update' => 'cascade',
    'fake_nullables' => true,
    'use_guarded' => false,
    'singular_routes' => false,
    'property_promotion' => false,
    'generate_resource_collection_classes' => true,
    'generators' => 
    array (
      'controller' => 'Blueprint\\Generators\\ControllerGenerator',
      'factory' => 'Blueprint\\Generators\\FactoryGenerator',
      'migration' => 'Blueprint\\Generators\\MigrationGenerator',
      'model' => 'Blueprint\\Generators\\ModelGenerator',
      'route' => 'Blueprint\\Generators\\RouteGenerator',
      'seeder' => 'Blueprint\\Generators\\SeederGenerator',
      'test' => 'Blueprint\\Generators\\PhpUnitTestGenerator',
      'event' => 'Blueprint\\Generators\\Statements\\EventGenerator',
      'form_request' => 'Blueprint\\Generators\\Statements\\FormRequestGenerator',
      'job' => 'Blueprint\\Generators\\Statements\\JobGenerator',
      'mail' => 'Blueprint\\Generators\\Statements\\MailGenerator',
      'notification' => 'Blueprint\\Generators\\Statements\\NotificationGenerator',
      'resource' => 'Blueprint\\Generators\\Statements\\ResourceGenerator',
      'view' => 'Blueprint\\Generators\\Statements\\ViewGenerator',
      'inertia_page' => 'Blueprint\\Generators\\Statements\\InertiaPageGenerator',
      'policy' => 'Blueprint\\Generators\\PolicyGenerator',
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
