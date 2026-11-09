# Changelog

All notable changes to this project are documented in this file.

## [1.0.1] — 2026-11-09

### Fixed

- Logout on the custom login URL (`action=logout`) no longer redirects logged-in users to the admin area before WordPress core runs `wp_logout()` ([#3](https://github.com/tikhomirov/wp-hide-login-plugin/pull/3)).

## [1.0.0] — initial release

- Custom login slug and blocking direct access to `wp-login.php` / `wp-admin` for guests.
