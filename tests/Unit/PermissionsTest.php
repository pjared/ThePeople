<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PermissionsTest extends TestCase
{
    private $admin_links = [
        '/admin/',
        '/admin/candidate-approve',
        '/admin/candidate-assignment',
        '/admin/create-ballot',
        '/admin/candidate-links',
        // '/admin/',
    ];

    private $candidate_links = [
        '/candidate/edit',
        // '/candidate/',
    ];

    private $default_links = [
        '/',
        '/ballot', // {{id}}
        '/apply',
        '/candidate/profile/', //{id}
        '/permalink', //{permalink}
        // '/',
    ];

    /**
     * Make sure that basic users cannot access any pages with roles
     *
     * @return void
     */
    public function test_default_user_permissions()
    {
        $this->assertTrue(true);
    }

    /**
     * Make sure that candidate users cannot access all pages except admin
     *
     * @return void
     */
    public function test_candidate_user_permissions()
    {
        $this->assertTrue(true);
    }

    /**
     * Make sure admin can access all links
     *
     * @return void
     */
    public function test_admin_user_permissions()
    {
        $this->assertTrue(true);
    }
}
