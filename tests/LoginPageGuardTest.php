<?php

declare(strict_types=1);

namespace hide_login\Tests;

use function hide_login\should_redirect_logged_in_from_login_page;
use PHPUnit\Framework\TestCase;

final class LoginPageGuardTest extends TestCase
{
    public function testRedirectsLoggedInUserWithNoAction(): void
    {
        $this->assertTrue(should_redirect_logged_in_from_login_page([]));
    }

    public function testDoesNotRedirectWhenLogoutActionPresent(): void
    {
        $this->assertFalse(should_redirect_logged_in_from_login_page([
            'action' => 'logout',
            '_wpnonce' => 'example-nonce-value',
        ]));
    }

    public function testDoesNotRedirectForOtherLoginActions(): void
    {
        foreach (['lostpassword', 'resetpass', 'rp', 'postpass', 'register'] as $action) {
            $this->assertFalse(
                should_redirect_logged_in_from_login_page(['action' => $action]),
                'action='.$action
            );
        }
    }

    public function testDoesNotRedirectWhenActionKeyExistsEvenIfEmpty(): void
    {
        $this->assertFalse(should_redirect_logged_in_from_login_page(['action' => '']));
    }

    public function testRedirectWhenOnlyRedirectToQueryArg(): void
    {
        $this->assertTrue(should_redirect_logged_in_from_login_page([
            'redirect_to' => 'https://example.org/wp-admin/',
        ]));
    }
}
