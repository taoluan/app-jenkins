FROM jenkins/jenkins:centos7

USER root

#instal nodejs and npm
RUN yum -y update && \
    yum -y install epel-release && \
    yum -y install nodejs npm && \
    ln -s /usr/bin/node /usr/bin/nodejs

#instal composer and php
RUN yum -y install epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php74
RUN yum install php php-mbstring php-xml php-pdo php-pdo_mysql php-xdebug -y
RUN yum update -y
RUN cd /tmp
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer