<?php

namespace Sebdesign\VivaPayments\Test\Unit\Services;

use Sebdesign\VivaPayments\Test\TestCase;

/**
 * @covers \Sebdesign\VivaPayments\Client
 * @covers \Sebdesign\VivaPayments\Services\Webhook
 */
class WebhookTest extends TestCase
{
    /**
     * @test
     * @group unit
     * @covers \Sebdesign\VivaPayments\Responses\WebhookVerificationKey
     */
    public function it_gets_an_authorization_code(): void
    {
        $this->mockJsonResponses(['Key' => 'foo']);
        $this->mockRequests();

        $verification = $this->client->webhooks()->getVerificationKey();
        $request = $this->getLastRequest();

        $this->assertMethod('GET', $request);
        $this->assertEquals('foo', $verification->Key);
    }
}
