FROM postgres:latest

COPY ./create_test_db.sh   /docker-entrypoint-initdb.d/10-create_test_db.sh

WORKDIR  /docker-entrypoint-initdb.d



RUN #!/bin/bash \
	["psql --username ${POSTGRES_USER} ${POSTGRES_DB} -c "CREATE DATABASE ${POSTGRES_DB};"]
