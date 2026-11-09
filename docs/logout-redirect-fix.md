# Исправление выхода из админки (Hide Login)

## Задание
На кастомном URL входа (`whl_page`) запрос `?action=logout` у залогиненного пользователя перенаправлялся в админку до загрузки `wp-login.php`, из‑за чего выход не выполнялся. После merge PR #3 — patch-релиз **1.0.1**.

## План
1. Не выполнять ранний redirect для залогиненных, если в запросе задан `action` (в т.ч. `logout`).
2. Регрессионные unit-тесты для guard-логики; `php -l` по PHP-файлам.
3. Версия **1.0.0 → 1.0.1** в header плагина, `composer.json`, `CHANGELOG.md`, `README.md`.
4. Commit, push, PR (без merge/deploy, без тега).

## Код
- Исправление logout: `8b2cd49` (в master через PR #3).
- Версия 1.0.1: `d18bec1`.

**Ограничение тестов:** полноценный интеграционный сценарий WordPress (cookies, `wp_logout()`, redirect после выхода) в CI не поднимается; проверена логика root cause, PHP lint и PHPUnit.
