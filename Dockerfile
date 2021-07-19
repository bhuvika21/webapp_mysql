FROM mattrayner/lamp:latest-1804
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get clean
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2ctl","-D","FOREGROUND"]
