<?php

namespace Achrafbardan\NsTicketSearch;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\UriFactory;
use Spatie\Url\Url;

final class Client
{
    private ClientBuilder $clientBuilder;

    protected $shareApiUrl = 'https://share.ns-mlab.nl/';
    protected $ticketApiUrl = 'https://tickets.ns-mlab.nl/api/v1/order/';
    

    public function __construct(ClientBuilder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->clientBuilder = $clientBuilder ?: new ClientBuilder();
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();

        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin(
                [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            )
        );
    }

    /**
     * Search by share id.
     */
    public function getTicketByShareId(string $shareId): Response
    {
        $response = $this->getHttpClient()->get('https://share.ns-mlab.nl/?s=' . $shareId, [
            'headers' => [
                'user-agent' => ' Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Mobile Safari/537.36',
            ]
        ]);

        $url = Url::fromString($response->getHeader('location')[0]);

        return $this->getTicketByOrderIdAndOrderDetailId($url->getQueryParameter("orderId"), $url->getQueryParameter("orderDetailId"));
    }

    /**
     * Search by share id.
     */
    public function getTicketByOrderIdAndOrderDetailId(string $orderId, string $orderDetailId): Response
    {
        return new Response($this->getHttpClient()->get($this->ticketApiUrl . $orderId . '/' . $orderDetailId));
    }

    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }
}