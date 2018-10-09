#!/bin/bash
set -e

psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB" <<-EOSQL
    CREATE USER acmadmin with superuser;
    set role acmadmin;
    CREATE DATABASE acm owner acmadmin;
    GRANT ALL PRIVILEGES ON DATABASE acm TO acmadmin;
    \connect acm acmadmin;
    create table datadb (name varchar(50) not null, starting_date date, id int primary key, data varchar(20));
    create table admindb(username varchar not null, password varchar);
    insert into admindb values ('superuser','password');
    insert into admindb (username) values ('sub-user');
EOSQL

