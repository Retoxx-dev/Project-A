FROM mysql:8.0

WORKDIR docker-entrypoint-initdb.d

COPY ./db/scheme/mysql-database-scheme.sql .

WORKDIR /