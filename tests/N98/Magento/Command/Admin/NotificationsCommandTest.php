<?php

namespace N98\Magento\Command\Admin;

use N98\Magento\Command\TestCase;

class NotificationsCommandTest extends TestCase
{
    public function testExecute()
    {
        $this->assertDisplayContains(
            array(
                'command' => 'admin:notifications',
                '--on'    => true,
            ),
            'Admin Notifications hidden'
        );

        $this->assertDisplayContains(
            array(
                'command' => 'admin:notifications',
                '--off'   => true,
            ),
            'Admin Notifications visible'
        );
    }
}
