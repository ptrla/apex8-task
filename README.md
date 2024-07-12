### Pre-requisites

You'll need [Docker](https://docs.docker.com/desktop/) and the tool that allows you to make http request e.g. Postman.

### Getting started

1. Run `make start` to build images and spin up containers.
3. Run tests `make test`
2. Make a POST request to  `localhost/api/lead/process` with following payload:

```json
 {
    "postcode": "PO10 2EU",
    "reg": "lg09eyv",
    "model": "VAUXHALL ZAFIRA EXCLUSIV CDTI A",
    "date": "2011",
    "cylinder": "1910",
    "color": "blue",
    "keepers": "Test User",
    "contact": "07222333333",
    "email": "testuser@hotmail.com",
    "fuel": "DIESEL",
    "trans": "Automatic",
    "doors": "5",
    "motDue": "30/03/2025",
    "leadId": "148490",
    "vin": "W0L0AHM759206775"
}
```