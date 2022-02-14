# Ns ticket search
Search ns tickets for free.

### Installation
Run the following command to install the ns ticket searcher:
```
composer require achrafbardan/ns-ticket-search
```

### Usage
```php
...
use AchrafBardan\NsTicketSearch\Client;
...
$client = new Client();

$client->getTicketByShareId('Wi4NEgbW');
```
Returns:
```json
{
    "links": {},
    "payload": {
        "bookerEmail": "achrafbardan13@gmail.com",
        "tickets": [
            {
                "routeInfo": [],
                "orderId": "5bsKktEmAbAAAAF8dlBkb5Co",
                "type": "MobileTicket",
                "orderCreationDate": "2021-10-18T01:48:42+02:00",
                "documentNo": "38729042",
                "travelDate": "2021-10-23",
                "returnDate": "2021-10-23",
                "productName": "jongerendagkaart",
                "sapCode": "RRU",
                "travelClass": "2",
                "routeChoice": "0",
                "initials": "A",
                "lastName": "Bardan",
                "secutixTicketId": "0030167666",
                "secutixMobilePDFLink": "https://www.ns.nl/producten/selfservice/pdf/?LineItemUUID=4AIKktEmFzYAAAF8gVBkb5Co&type=mobile",
                "price": 750,
                "barcodeBase64": "I1VUMDExMTg0TlMwMDIwLAIUSAhpfm9MrCRqP78IWzwebu0pIdcCFGEIICKeIH8jMAT3PDNII5qS1lKfAAAAADAyNDl4nH2QzWrDMBCEX0VnH5pd/ayUoxq71MV1wNiGnIKgIYQUBVy/P12JEvtQvKcdjb9hvMP5vfIlIIBRiE6L5wAoQLJEhA5BgkRAvae2qdrh3Df+xJC2sjv0EtgGwD2gyov9eMTrZbpEUYbrPYRpBmQDgSAPh7FQaVWHemRFKSxpnUqkMpngca9h+gpReMDlEbnQolJTDjR5M6Nv6lK8dcdPIdUOYZeqi/64UkCouWtOstX3XfzMYb49orhF0TZAymy4dpO1myyR4x/FbEtwqzOMtWeMWW3/vyAqY59fV0OHilKSy0ezL4ncxPUKL4oC9YK74m9+AcGSff0=",
                "pdfLinkNl": "https://www.ns.nl/producten/selfservice/pdf/?LineItemUUID=4AIKktEmFzYAAAF8gVBkb5Co&type=mobile",
                "pdfLinkEn": "https://www.ns.nl/producten/en/selfservice/pdf/?LineItemUUID=4AIKktEmFzYAAAF8gVBkb5Co&type=mobile",
                "attachmentsNl": [
                    "https://www.ns.nl/producten/static/BOS/ns-Site/website/ns-website/nl_NL/Ticket/NS-e-ticket-Part3-Voorwaarden-Jongeren-Dag-NL-V022022.svg"
                ],
                "attachmentsEn": [
                    "https://www.ns.nl/producten/static/BOS/ns-Site/website/ns-website/nl_NL/Ticket/NS-e-ticket-Part3-Voorwaarden-Jongeren-Dag-NL-V022022.svg"
                ],
                "iconImage": {
                    "uri": "/api/v1/resource?resource=%2Fcatalogue%2Ficon_dayticket.png&classifier=mdpi",
                    "params": {
                        "classifier": "mdpi",
                        "height": "{height}"
                    }
                }
            }
        ],
        "shareUrl": "https://ns.nl/rpx?ticket&orderId=5bsKktEmAbAAAAF8dlBkb5Co&orderDetailId=wz0KktEmuNEAAAF8hVNkb5Co",
        "orderId": "5bsKktEmAbAAAAF8dlBkb5Co",
        "orderDetailId": "wz0KktEmuNEAAAF8hVNkb5Co",
        "payment": {
            "creationDate": "2021-10-18T01:48:42+02:00",
            "price": 750,
            "status": "SUCCESS",
            "bookerEmail": "achrafbardan13@gmail.com"
        }
    },
    "meta": {}
}
```