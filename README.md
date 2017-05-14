Symfony2 + MongoDB + Oauth Server
=================

This repo includes a starter pack for rest apis secured with oauth.

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
- composer install
- set an emaill address to mailer_user in parameters.yml
- add users from cli with **php app/console fos:user:create**
- add clients from {base_url}/client/new