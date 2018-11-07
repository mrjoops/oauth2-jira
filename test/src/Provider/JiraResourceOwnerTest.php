<?php

namespace Mrjoops\OAuth2\Client\Test\Provider;

use Mockery as m;

class JiraResourceOwnerTest extends \PHPUnit_Framework_TestCase
{
    public function testUrlIsNullWithoutId()
    {
        $user = new \Mrjoops\OAuth2\Client\Provider\JiraResourceOwner;

        $url = $user->getUrl();

        $this->assertNull($url);
    }

    public function testUrlIsSetWithId()
    {
        $user = new \Mrjoops\OAuth2\Client\Provider\JiraResourceOwner(json_decode('[{"id":"test"}]', true));

        $url = $user->getUrl();

        $this->assertEquals($url, 'https://api.atlassian.com/ex/jira/test/');
    }
}
