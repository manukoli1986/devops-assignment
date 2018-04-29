Introduction:

Below code to deploy these services as a sandboxed infrastructure. This setup can be executable on a local machine.

We will be using docker-compose and dockerfile to automate stand up the Springboot application:
DockerFile: To create container image, we have used dockerfile to customize the service container according to the secenerio. 
Docker-Compose: It will launch all service in form of container with pre-defined parameters which can be altered as per requirement.




1 - PostgreSQL DB

We will use PostgreSQL DB from ducker hub and will launch it with customization.

#docker pull docker.io/postgres

We can test it via below commands:
#docker run -it --name DB -e POSTGRES_USER=docker -e POSTGRES_PASSWORD=docker123 -e POSTGRES_DB="order-service" -p 5432:5432 -d docker.io/postgres
#psql -h localhost -d order-service --user docker -p 5432


2 - Product/Order/Payment Service 

For this I have build an image with cloned github URLs respectivaely. You can find dockerfile-{product/order/payment) respectively. Then I am using them in docker compose file to download it and run it with necessary parameters required to run the SpringBoot Application.


3 - Monitoring 

For this I 
