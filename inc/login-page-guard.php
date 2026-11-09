<?php

declare(strict_types=1);

namespace hide_login;

/**
 * Whether a logged-in user visiting the custom login endpoint should be redirected
 * before WordPress core handles wp-login.php (e.g. action=logout).
 *
 * @param array<string, mixed> $request Typically $_REQUEST.
 */
function should_redirect_logged_in_from_login_page(array $request): bool
{
    return ! isset($request['action']);
}
