<?php
{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "7394556d9dd66cd3c7b32080ac2e51f6",
    "packages": [
        {
            "name": "doctrine/inflector",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89",
                "reference": "8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^8.2",
                "phpstan/phpstan": "^0.12",
                "phpstan/phpstan-phpunit": "^0.12",
                "phpstan/phpstan-strict-rules": "^0.12",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.0",
                "vimeo/psalm": "^4.10"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Inflector\\": "lib/Doctrine/Inflector"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Inflector is a small library that can perform string manipulations with regard to upper/lowercase and singular/plural forms of words.",
            "homepage": "https://www.doctrine-project.org/projects/inflector.html",
            "keywords": [
                "inflection",
                "inflector",
                "lowercase",
                "manipulation",
                "php",
                "plural",
                "singular",
                "strings",
                "uppercase",
                "words"
            ],
            "support": {
                "issues": "https://github.com/doctrine/inflector/issues",
                "source": "https://github.com/doctrine/inflector/tree/2.0.4"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finflector",
                    "type": "tidelift"
                }
            ],
            "time": "2021-10-22T20:16:43+00:00"
        },
        {
            "name": "illuminate/bus",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/bus.git",
                "reference": "917798f4a21c5eed1f83f9b434ce94f9c4fa8432"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/bus/zipball/917798f4a21c5eed1f83f9b434ce94f9c4fa8432",
                "reference": "917798f4a21c5eed1f83f9b434ce94f9c4fa8432",
                "shasum": ""
            },
            "require": {
                "illuminate/collections": "^8.0",
                "illuminate/contracts": "^8.0",
                "illuminate/pipeline": "^8.0",
                "illuminate/support": "^8.0",
                "php": "^7.3|^8.0"
            },
            "suggest": {
                "illuminate/queue": "Required to use closures when chaining jobs (^7.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Bus\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Bus package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-10T22:25:47+00:00"
        },
        {
            "name": "illuminate/collections",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/collections.git",
                "reference": "ed630f15e937c5c928a9454748ff727ce5ea01ec"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/collections/zipball/ed630f15e937c5c928a9454748ff727ce5ea01ec",
                "reference": "ed630f15e937c5c928a9454748ff727ce5ea01ec",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^8.0",
                "illuminate/macroable": "^8.0",
                "php": "^7.3|^8.0"
            },
            "suggest": {
                "symfony/var-dumper": "Required to use the dump method (^5.4)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Support\\": ""
                },
                "files": [
                    "helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Collections package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-17T15:04:13+00:00"
        },
        {
            "name": "illuminate/container",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/container.git",
                "reference": "e18f8ce24a551e086621b00c7b75d6914d2011b4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/container/zipball/e18f8ce24a551e086621b00c7b75d6914d2011b4",
                "reference": "e18f8ce24a551e086621b00c7b75d6914d2011b4",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^8.0",
                "php": "^7.3|^8.0",
                "psr/container": "^1.0"
            },
            "provide": {
                "psr/container-implementation": "1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Container\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Container package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-05T15:38:15+00:00"
        },
        {
            "name": "illuminate/contracts",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/contracts.git",
                "reference": "5e0fd287a1b22a6b346a9f7cd484d8cf0234585d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/contracts/zipball/5e0fd287a1b22a6b346a9f7cd484d8cf0234585d",
                "reference": "5e0fd287a1b22a6b346a9f7cd484d8cf0234585d",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0",
                "psr/container": "^1.0",
                "psr/simple-cache": "^1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Contracts\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Contracts package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-13T14:47:47+00:00"
        },
        {
            "name": "illuminate/database",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/database.git",
                "reference": "0e6e98b163cf3bf53750f0fb0faa1b22c46d1343"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/database/zipball/0e6e98b163cf3bf53750f0fb0faa1b22c46d1343",
                "reference": "0e6e98b163cf3bf53750f0fb0faa1b22c46d1343",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "illuminate/collections": "^8.0",
                "illuminate/container": "^8.0",
                "illuminate/contracts": "^8.0",
                "illuminate/macroable": "^8.0",
                "illuminate/support": "^8.0",
                "php": "^7.3|^8.0",
                "symfony/console": "^5.4"
            },
            "suggest": {
                "doctrine/dbal": "Required to rename columns and drop SQLite columns (^2.13.3|^3.1.4).",
                "fakerphp/faker": "Required to use the eloquent factory builder (^1.9.1).",
                "illuminate/console": "Required to use the database commands (^8.0).",
                "illuminate/events": "Required to use the observers with Eloquent (^8.0).",
                "illuminate/filesystem": "Required to use the migrations (^8.0).",
                "illuminate/pagination": "Required to paginate the result set (^8.0).",
                "symfony/finder": "Required to use Eloquent model factories (^5.4)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Database\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Database package.",
            "homepage": "https://laravel.com",
            "keywords": [
                "database",
                "laravel",
                "orm",
                "sql"
            ],
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-17T19:06:15+00:00"
        },
        {
            "name": "illuminate/events",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/events.git",
                "reference": "b7f06cafb6c09581617f2ca05d69e9b159e5a35d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/events/zipball/b7f06cafb6c09581617f2ca05d69e9b159e5a35d",
                "reference": "b7f06cafb6c09581617f2ca05d69e9b159e5a35d",
                "shasum": ""
            },
            "require": {
                "illuminate/bus": "^8.0",
                "illuminate/collections": "^8.0",
                "illuminate/container": "^8.0",
                "illuminate/contracts": "^8.0",
                "illuminate/macroable": "^8.0",
                "illuminate/support": "^8.0",
                "php": "^7.3|^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Events\\": ""
                },
                "files": [
                    "functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Events package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2021-09-15T14:32:50+00:00"
        },
        {
            "name": "illuminate/macroable",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/macroable.git",
                "reference": "aed81891a6e046fdee72edd497f822190f61c162"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/macroable/zipball/aed81891a6e046fdee72edd497f822190f61c162",
                "reference": "aed81891a6e046fdee72edd497f822190f61c162",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Support\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Macroable package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2021-11-16T13:57:03+00:00"
        },
        {
            "name": "illuminate/pipeline",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/pipeline.git",
                "reference": "23aeff5b26ae4aee3f370835c76bd0f4e93f71d2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/pipeline/zipball/23aeff5b26ae4aee3f370835c76bd0f4e93f71d2",
                "reference": "23aeff5b26ae4aee3f370835c76bd0f4e93f71d2",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^8.0",
                "illuminate/support": "^8.0",
                "php": "^7.3|^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Pipeline\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Pipeline package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2021-03-26T18:39:16+00:00"
        },
        {
            "name": "illuminate/support",
            "version": "v8.80.0",
            "source": {
                "type": "git",
                "url": "https://github.com/illuminate/support.git",
                "reference": "69afbd89e6b6bf847e3df59e0f72cd820b18e8da"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/illuminate/support/zipball/69afbd89e6b6bf847e3df59e0f72cd820b18e8da",
                "reference": "69afbd89e6b6bf847e3df59e0f72cd820b18e8da",
                "shasum": ""
            },
            "require": {
                "doctrine/inflector": "^1.4|^2.0",
                "ext-json": "*",
                "ext-mbstring": "*",
                "illuminate/collections": "^8.0",
                "illuminate/contracts": "^8.0",
                "illuminate/macroable": "^8.0",
                "nesbot/carbon": "^2.53.1",
                "php": "^7.3|^8.0",
                "voku/portable-ascii": "^1.4.8"
            },
            "conflict": {
                "tightenco/collect": "<5.5.33"
            },
            "suggest": {
                "illuminate/filesystem": "Required to use the composer class (^8.0).",
                "league/commonmark": "Required to use Str::markdown() and Stringable::markdown() (^1.3|^2.0.2).",
                "ramsey/uuid": "Required to use Str::uuid() (^4.2.2).",
                "symfony/process": "Required to use the composer class (^5.4).",
                "symfony/var-dumper": "Required to use the dd function (^5.4).",
                "vlucas/phpdotenv": "Required to use the Env class and env helper (^5.4.1)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Illuminate\\Support\\": ""
                },
                "files": [
                    "helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Illuminate Support package.",
            "homepage": "https://laravel.com",
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-01-17T15:24:30+00:00"
        },
        {
            "name": "nesbot/carbon",
            "version": "2.56.0",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "626ec8cbb724cd3c3400c3ed8f730545b744e3f4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/626ec8cbb724cd3c3400c3ed8f730545b744e3f4",
                "reference": "626ec8cbb724cd3c3400c3ed8f730545b744e3f4",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1.8 || ^8.0",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/polyfill-php80": "^1.16",
                "symfony/translation": "^3.4 || ^4.0 || ^5.0 || ^6.0"
            },
            "require-dev": {
                "doctrine/dbal": "^2.0 || ^3.0",
                "doctrine/orm": "^2.7",
                "friendsofphp/php-cs-fixer": "^3.0",
                "kylekatarnls/multi-tester": "^2.0",
                "phpmd/phpmd": "^2.9",
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpstan": "^0.12.54 || ^1.0",
                "phpunit/phpunit": "^7.5.20 || ^8.5.14",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "bin": [
                "bin/carbon"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-3.x": "3.x-dev",
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Carbon\\Laravel\\ServiceProvider"
                    ]
                },
                "phpstan": {
                    "includes": [
                        "extension.neon"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "https://markido.com"
                },
                {
                    "name": "kylekatarnls",
                    "homepage": "https://github.com/kylekatarnls"
                }
            ],
            "description": "An API extension for DateTime that supports 281 different languages.",
            "homepage": "https://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "support": {
                "docs": "https://carbon.nesbot.com/docs",
                "issues": "https://github.com/briannesbitt/Carbon/issues",
                "source": "https://github.com/briannesbitt/Carbon"
            },
            "funding": [
                {
                    "url": "https://opencollective.com/Carbon",
                    "type": "open_collective"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/nesbot/carbon",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-21T17:08:38+00:00"
        },
        {
            "name": "psr/container",
            "version": "1.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/container.git",
                "reference": "513e0666f7216c7459170d56df27dfcefe1689ea"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/container/zipball/513e0666f7216c7459170d56df27dfcefe1689ea",
                "reference": "513e0666f7216c7459170d56df27dfcefe1689ea",
                "shasum": ""
            },
            "require": {
                "php": ">=7.4.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Psr\\Container\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common Container Interface (PHP FIG PSR-11)",
            "homepage": "https://github.com/php-fig/container",
            "keywords": [
                "PSR-11",
                "container",
                "container-interface",
                "container-interop",
                "psr"
            ],
            "support": {
                "issues": "https://github.com/php-fig/container/issues",
                "source": "https://github.com/php-fig/container/tree/1.1.2"
            },
            "time": "2021-11-05T16:50:12+00:00"
        },
        {
            "name": "psr/simple-cache",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/simple-cache.git",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\SimpleCache\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interfaces for simple caching",
            "keywords": [
                "cache",
                "caching",
                "psr",
                "psr-16",
                "simple-cache"
            ],
            "support": {
                "source": "https://github.com/php-fig/simple-cache/tree/master"
            },
            "time": "2017-10-23T01:57:42+00:00"
        },
        {
            "name": "symfony/console",
            "version": "v5.4.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "a2c6b7ced2eb7799a35375fb9022519282b5405e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/a2c6b7ced2eb7799a35375fb9022519282b5405e",
                "reference": "a2c6b7ced2eb7799a35375fb9022519282b5405e",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php73": "^1.9",
                "symfony/polyfill-php80": "^1.16",
                "symfony/service-contracts": "^1.1|^2|^3",
                "symfony/string": "^5.1|^6.0"
            },
            "conflict": {
                "psr/log": ">=3",
                "symfony/dependency-injection": "<4.4",
                "symfony/dotenv": "<5.1",
                "symfony/event-dispatcher": "<4.4",
                "symfony/lock": "<4.4",
                "symfony/process": "<4.4"
            },
            "provide": {
                "psr/log-implementation": "1.0|2.0"
            },
            "require-dev": {
                "psr/log": "^1|^2",
                "symfony/config": "^4.4|^5.0|^6.0",
                "symfony/dependency-injection": "^4.4|^5.0|^6.0",
                "symfony/event-dispatcher": "^4.4|^5.0|^6.0",
                "symfony/lock": "^4.4|^5.0|^6.0",
                "symfony/process": "^4.4|^5.0|^6.0",
                "symfony/var-dumper": "^4.4|^5.0|^6.0"
            },
            "suggest": {
                "psr/log": "For using the console logger",
                "symfony/event-dispatcher": "",
                "symfony/lock": "",
                "symfony/process": ""
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Eases the creation of beautiful and testable command line interfaces",
            "homepage": "https://symfony.com",
            "keywords": [
                "cli",
                "command line",
                "console",
                "terminal"
            ],
            "support": {
                "source": "https://github.com/symfony/console/tree/v5.4.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-12-20T16:11:12+00:00"
        },
        {
            "name": "symfony/deprecation-contracts",
            "version": "v3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/deprecation-contracts.git",
                "reference": "c726b64c1ccfe2896cb7df2e1331c357ad1c8ced"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/c726b64c1ccfe2896cb7df2e1331c357ad1c8ced",
                "reference": "c726b64c1ccfe2896cb7df2e1331c357ad1c8ced",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "files": [
                    "function.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A generic function and convention to trigger deprecation notices",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/deprecation-contracts/tree/v3.0.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-11-01T23:48:49+00:00"
        },
        {
            "name": "symfony/polyfill-ctype",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-ctype.git",
                "reference": "30885182c981ab175d4d034db0f6f469898070ab"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/30885182c981ab175d4d034db0f6f469898070ab",
                "reference": "30885182c981ab175d4d034db0f6f469898070ab",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-ctype": "*"
            },
            "suggest": {
                "ext-ctype": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Ctype\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Gert de Pagter",
                    "email": "BackEndTea@gmail.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for ctype functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "ctype",
                "polyfill",
                "portable"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-10-20T20:35:02+00:00"
        },
        {
            "name": "symfony/polyfill-intl-grapheme",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                "reference": "81b86b50cf841a64252b439e738e97f4a34e2783"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/81b86b50cf841a64252b439e738e97f4a34e2783",
                "reference": "81b86b50cf841a64252b439e738e97f4a34e2783",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Grapheme\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's grapheme_* functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "grapheme",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-11-23T21:10:46+00:00"
        },
        {
            "name": "symfony/polyfill-intl-normalizer",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                "reference": "8590a5f561694770bdcd3f9b5c69dde6945028e8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/8590a5f561694770bdcd3f9b5c69dde6945028e8",
                "reference": "8590a5f561694770bdcd3f9b5c69dde6945028e8",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Normalizer\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's Normalizer class and related functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "intl",
                "normalizer",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-02-19T12:13:01+00:00"
        },
        {
            "name": "symfony/polyfill-mbstring",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-mbstring.git",
                "reference": "0abb51d2f102e00a4eefcf46ba7fec406d245825"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/0abb51d2f102e00a4eefcf46ba7fec406d245825",
                "reference": "0abb51d2f102e00a4eefcf46ba7fec406d245825",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-mbstring": "*"
            },
            "suggest": {
                "ext-mbstring": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Mbstring\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Mbstring extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "mbstring",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-11-30T18:21:41+00:00"
        },
        {
            "name": "symfony/polyfill-php73",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php73.git",
                "reference": "cc5db0e22b3cb4111010e48785a97f670b350ca5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/cc5db0e22b3cb4111010e48785a97f670b350ca5",
                "reference": "cc5db0e22b3cb4111010e48785a97f670b350ca5",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php73\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php73/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-06-05T21:20:04+00:00"
        },
        {
            "name": "symfony/polyfill-php80",
            "version": "v1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php80.git",
                "reference": "57b712b08eddb97c762a8caa32c84e037892d2e9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/57b712b08eddb97c762a8caa32c84e037892d2e9",
                "reference": "57b712b08eddb97c762a8caa32c84e037892d2e9",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.23-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php80\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ion Bazan",
                    "email": "ion.bazan@gmail.com"
                },
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php80/tree/v1.24.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-09-13T13:58:33+00:00"
        },
        {
            "name": "symfony/service-contracts",
            "version": "v2.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/service-contracts.git",
                "reference": "d664541b99d6fb0247ec5ff32e87238582236204"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/service-contracts/zipball/d664541b99d6fb0247ec5ff32e87238582236204",
                "reference": "d664541b99d6fb0247ec5ff32e87238582236204",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/container": "^1.1"
            },
            "conflict": {
                "ext-psr": "<1.1|>=2"
            },
            "suggest": {
                "symfony/service-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.4-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Service\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to writing services",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/service-contracts/tree/v2.4.1"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-11-04T16:37:19+00:00"
        },
        {
            "name": "symfony/string",
            "version": "v6.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/string.git",
                "reference": "bae261d0c3ac38a1f802b4dfed42094296100631"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/string/zipball/bae261d0c3ac38a1f802b4dfed42094296100631",
                "reference": "bae261d0c3ac38a1f802b4dfed42094296100631",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "symfony/polyfill-ctype": "~1.8",
                "symfony/polyfill-intl-grapheme": "~1.0",
                "symfony/polyfill-intl-normalizer": "~1.0",
                "symfony/polyfill-mbstring": "~1.0"
            },
            "conflict": {
                "symfony/translation-contracts": "<2.0"
            },
            "require-dev": {
                "symfony/error-handler": "^5.4|^6.0",
                "symfony/http-client": "^5.4|^6.0",
                "symfony/translation-contracts": "^2.0|^3.0",
                "symfony/var-exporter": "^5.4|^6.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\String\\": ""
                },
                "files": [
                    "Resources/functions.php"
                ],
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way",
            "homepage": "https://symfony.com",
            "keywords": [
                "grapheme",
                "i18n",
                "string",
                "unicode",
                "utf-8",
                "utf8"
            ],
            "support": {
                "source": "https://github.com/symfony/string/tree/v6.0.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-12-16T22:13:01+00:00"
        },
        {
            "name": "symfony/translation",
            "version": "v6.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "a16c33f93e2fd62d259222aebf792158e9a28a77"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/a16c33f93e2fd62d259222aebf792158e9a28a77",
                "reference": "a16c33f93e2fd62d259222aebf792158e9a28a77",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/translation-contracts": "^2.3|^3.0"
            },
            "conflict": {
                "symfony/config": "<5.4",
                "symfony/console": "<5.4",
                "symfony/dependency-injection": "<5.4",
                "symfony/http-kernel": "<5.4",
                "symfony/twig-bundle": "<5.4",
                "symfony/yaml": "<5.4"
            },
            "provide": {
                "symfony/translation-implementation": "2.3|3.0"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^5.4|^6.0",
                "symfony/console": "^5.4|^6.0",
                "symfony/dependency-injection": "^5.4|^6.0",
                "symfony/finder": "^5.4|^6.0",
                "symfony/http-client-contracts": "^1.1|^2.0|^3.0",
                "symfony/http-kernel": "^5.4|^6.0",
                "symfony/intl": "^5.4|^6.0",
                "symfony/polyfill-intl-icu": "^1.21",
                "symfony/service-contracts": "^1.1.2|^2|^3",
                "symfony/yaml": "^5.4|^6.0"
            },
            "suggest": {
                "psr/log-implementation": "To use logging capability in translator",
                "symfony/config": "",
                "symfony/yaml": ""
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools to internationalize your application",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/translation/tree/v6.0.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-12-25T20:10:03+00:00"
        },
        {
            "name": "symfony/translation-contracts",
            "version": "v3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation-contracts.git",
                "reference": "1b6ea5a7442af5a12dba3dbd6d71034b5b234e77"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation-contracts/zipball/1b6ea5a7442af5a12dba3dbd6d71034b5b234e77",
                "reference": "1b6ea5a7442af5a12dba3dbd6d71034b5b234e77",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2"
            },
            "suggest": {
                "symfony/translation-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Translation\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to translation",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/translation-contracts/tree/v3.0.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2021-09-07T12:43:40+00:00"
        },
        {
            "name": "voku/portable-ascii",
            "version": "1.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/voku/portable-ascii.git",
                "reference": "87337c91b9dfacee02452244ee14ab3c43bc485a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/voku/portable-ascii/zipball/87337c91b9dfacee02452244ee14ab3c43bc485a",
                "reference": "87337c91b9dfacee02452244ee14ab3c43bc485a",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~6.0 || ~7.0 || ~9.0"
            },
            "suggest": {
                "ext-intl": "Use Intl for transliterator_transliterate() support"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "voku\\": "src/voku/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Lars Moelleken",
                    "homepage": "http://www.moelleken.org/"
                }
            ],
            "description": "Portable ASCII library - performance optimized (ascii) string functions for php.",
            "homepage": "https://github.com/voku/portable-ascii",
            "keywords": [
                "ascii",
                "clean",
                "php"
            ],
            "support": {
                "issues": "https://github.com/voku/portable-ascii/issues",
                "source": "https://github.com/voku/portable-ascii/tree/1.6.1"
            },
            "funding": [
                {
                    "url": "https://www.paypal.me/moelleken",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/voku",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/portable-ascii",
                    "type": "open_collective"
                },
                {
                    "url": "https://www.patreon.com/voku",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/voku/portable-ascii",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-24T18:55:24+00:00"
        }
    ],
    "packages-dev": [],
    "aliases": [],
    "minimum-stability": "stable",
    "stability-flags": [],
    "prefer-stable": false,
    "prefer-lowest": false,
    "platform": [],
    "platform-dev": {
        "php": "^8.0.13"
    },
    "plugin-api-version": "2.0.0"
}
