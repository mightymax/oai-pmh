# OAI-PMH

PHP based OAI-PMH DataProvider, configurable and extendable to communicate with different types of archives.

Abstract DataProviders are available for

* MySQL databases
* [Broker](https://meertensinstituut.github.io/broker/)

To use the system with your own resources, a specific [DataProviderModule](https://github.com/meertensinstituut/oai-pmh/tree/master/src/lib/dataProviderModule) has to be created, extending one of the existing (abstract) DataProviders. Multiple examples are available, and also a Docker configuration generating a fully functional MySQL based demonstration of the OAI-PMH DataProvider.

To build and run the Docker image

```bash
git clone git@github.com:mightymax/oai-pmh.git
cd oai-pmh
docker compose up
```

This will provide a website on port 8080 on the ip of your docker host with a running OAI-PMH DataProvider.
