CREATE USER 'oai-pmh'@'%' IDENTIFIED BY 'oai-pmh';
CREATE DATABASE `oai-pmh`;
GRANT ALL PRIVILEGES ON `oai-pmh` . * TO 'oai-pmh'@'%';
