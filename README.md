# WordPress Hide Login (`wp-hide-login-plugin`)

![WordPress Plugin](https://img.shields.io/badge/WordPress-5.0%2B-blue.svg)
![PHP Support](https://img.shields.io/badge/PHP-7.4%20%7C%208.0%20%7C%208.1%20%7C%208.2%20%7C%208.3-777BB4.svg)
![License](https://img.shields.io/badge/License-GPLv2-green.svg)

Плагин безопасности для замены стандартного URL входа `wp-login.php` на пользовательский slug и защиты от сканирования админки.

---

## 🚀 Возможности

- 🔒 **Кастомный URL авторизации:** Замена `wp-login.php` на любой slug (например, `/signin`).
- 🚫 **Редирект неавторизованных:** Перенаправление попыток доступа к `wp-admin` на 404 страницу.
- ⚙️ **Простая настройка:** Конфигурация за 1 клик на странице настроек.

---

## 📥 Установка

### Через Composer (рекомендуется)
```bash
composer config repositories.tikhomirov-wp-hide-login-plugin git https://github.com/tikhomirov/wp-hide-login-plugin.git
composer require tikhomirov/wp-hide-login-plugin
```

### Вручную
1. Скачайте ZIP-архив репозитория.
2. Распакуйте в директорию `/wp-content/plugins/wp-hide-login-plugin/`.
3. Активируйте плагин в админ-панели **Плагины → Установленные**.

---

## 💻 Использование

1. Перейдите в **Настройки → Чтение** (или страницу плагина).
2. Задайте новый адрес входа в поле **Login URL**.
3. Сохраните изменения.

---

## 🛠️ Требования

- **WordPress:** 5.0 или выше
- **PHP:** 7.4, 8.0, 8.1, 8.2, 8.3
