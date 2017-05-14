Symfony2 + MongoDB + Oauth Server
=================

This repo includes a starter pack for REST API with oauth and MongoDB.

Included Bundles
-
- FOSUserBundle
- FOSOAuthServerBundle
- JMSSerializerBundle
- NelmioApiDocBundle
- DoctrineMongoDBBundle

Also included Alcaeus mongo-php-adapter.

# How-to use
- clone repo
- use with docker with the help below or follow the steps
    - composer install
    - set an emaill address to mailer_user in parameters.yml
    - add users from cli with **php app/console fos:user:create**
    - add clients from {base_url}/client/new

# Docker Usage

```
docker-compose build
docker-compose up -d
docker-compose exec php composer install
```