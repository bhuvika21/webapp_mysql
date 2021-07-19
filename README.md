Please change the mysql login details in connect.php and result.php

Changes to be done in your cloud service DB:

character_set_server=UTF8

Enforce SSL connection=disabled

docker build -t myapp:v1 .

docker run -dit -p 80:80 myapp:v1
