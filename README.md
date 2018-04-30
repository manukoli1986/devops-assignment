Introduction:

Below code to deploy these services as a sandboxed infrastructure. This setup can be executable on a local machine.

We will be using docker-compose and dockerfile to automate stand up the Springboot application:
DockerFile: To create container image, we have used dockerfile to customize the service container according to the secenerio. 
Docker-Compose: It will launch all service in form of container with pre-defined parameters which can be altered as per requirement.

NOTE: Please download all files and folder to bring springboot application online.

INSTRUCTIONS:
1. Please go to download location and run below command to start containers
#docker-compose up

After Starting up they would look something like this. 
e.g.
CONTAINER ID        IMAGE                             COMMAND                  CREATED             STATUS                   PORTS                    NAMES
1a8a206e2547        php:apache                        "docker-php-entryp..."   5 minutes ago       Up 4 minutes             0.0.0.0:80->80/tcp       web_service
29fe7b7336bd        manukoli1986/gradle4jdk8payment   "gradle bootrun"         5 minutes ago       Up 5 minutes             0.0.0.0:9002->9002/tcp   Payment_Service
7ab577d00f7d        manukoli1986/grdle4jv8            "gradle bootrun"         6 minutes ago       Up 5 minutes             0.0.0.0:9001->9001/tcp   Order_Service
a044b912ea2f        manukoli1986/nodejs-8             "npm start PORT=9000"    6 minutes ago       Up 6 minutes             0.0.0.0:9000->9000/tcp   Product_Service
a534edfd8f31        docker.io/postgres                "docker-entrypoint..."   6 minutes ago       Up 6 minutes             0.0.0.0:5432->5432/tcp   DB

2. Set cron job to fetch docker container stats
"* * * * * sleep 15; /<Download-location>/webapp/status.sh" 

1 - PostgreSQL DB

We will use PostgreSQL DB from ducker hub and will launch it with customization.

#docker pull docker.io/postgres

We can test it via below commands:
#docker run -it --name DB -e POSTGRES_USER=docker -e POSTGRES_PASSWORD=docker123 -e POSTGRES_DB="order-service" -p 5432:5432 -d docker.io/postgres
#psql -h localhost -d order-service --user docker -p 5432


2 - Product/Order/Payment Service 

For this I have build an image with cloned github URLs respectivaely. You can find dockerfile-{product/order/payment) respectively. Then I am using them in docker compose file to download it and run it with necessary parameters required to run the SpringBoot Application.


3 - Monitoring 

For this I have create bash script which will capture docker container stats and will be displayed on apache container. I tried with php script to automatically to fetch it but unable to do it due to time constraint. And I have already taken 3 days extension. We can also run docker container for monitoring and alert services like ( Prometheus/Collected/Alertd/Grafana etc ). 

4. Web Service

Here web service container will be launched to access health checks for product/order/payment services by clicking on links. And need to do manual interventions to do order and payment using below command. 
To update order
#curl -H "Content-Type:application/json" -X POST -d '{"productIds": "1,2,3"}' http://localhost:9001/orders
To Payment
#curl -i localhost:9002/payments/orders/6
(I was getting not support error which trying for payment. Not sure when my syntax to check payment is correct or not. If it is wrong then please share the solution.

Overall the task was really amazing for me and learning part too. I really would like to move into these work areas. I never stop learning new things and try to get hands on experience. 


I have uploaded docket containers at <https://hub.docker.com/u/manukoli1986/>. 

