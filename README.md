# WordPress Hide Login

[![WordPress Plugin](https://img.shields.io/badge/WordPress-5.0%2B-blue.svg)](https://wordpress.org/)
[![PHP Support](https://img.shields.io/badge/PHP-7.4%20%7C%208.0%20%7C%208.1%20%7C%208.2%20%7C%208.3-777BB4.svg)](https://php.net/)
[![License](https://img.shields.io/badge/License-GPLv3-green.svg)](https://www.gnu.org/licenses/gpl-3.0.html)

Secures WordPress sites by changing the default wp-login.php URL to a custom slug and blocking unauthorized access.

## Requirements

| Component | Minimum | Tested |
|-----------|---------|--------|
| **WordPress** | 5.0 | 5.0 – 6.7 |
| **PHP** | 7.4 | 7.4, 8.0, 8.1, 8.2, 8.3 |

## Features

- **Custom Login Slug:** Change `wp-login.php` to any secure URL.
- **Access Restriction:** Redirect unauthorized direct access attempts to 404.

## Installation

### Via Composer (VCS Repository)
Add the repository to your `composer.json` and require the package:

```bash
composer config repositories.tikhomirov-wp-hide-login-plugin git https://github.com/tikhomirov/wp-hide-login-plugin.git
composer require tikhomirov/wp-hide-login-plugin
```

### Manual Installation
1. Download the latest ZIP release.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

---

## Русский

Защищает сайты на WordPress путем скрытия стандартного адреса входа wp-login.php и перенаправления на кастомный slug.

### Совместимость
- **WordPress:** от 5.0 и выше
- **PHP:** от 7.4 до 8.3

### Возможности
- Смена стандартного URL входа в админку и защита от ботов.

**Установка:** подключите через Composer (VCS) или скачайте архив и активируйте в панели управления WordPress.
