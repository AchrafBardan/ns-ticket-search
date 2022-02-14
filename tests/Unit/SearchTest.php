<?php

namespace Tests\Unit;

use Achrafbardan\NsTicketSearch\Client;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    /** @test */
    public function it_can_search_by_order_and_order_detail_id()
    {
        $client = new Client();

        $response = $client->getTicketByOrderIdAndOrderDetailId('5bsKktEmAbAAAAF8dlBkb5Co', 'wz0KktEmuNEAAAF8hVNkb5Co');
        
        $this->assertEquals('achrafbardan13@gmail.com', $response->json()['payload']['bookerEmail']);
    }

    /** @test */
    public function it_can_search_by_share_id()
    {
        $client = new Client();

        $response = $client->getTicketByShareId('Wi4NEgbW');

        $this->assertEquals('achrafbardan13@gmail.com', $response->json()['payload']['bookerEmail']);
    }
}