# install latest node
# https://hub.docker.com/_/node/
FROM node:latest
RUN apt-get update
RUN apt-get install -y sudo

# create and set app directory
RUN mkdir -p /usr/src/app/
WORKDIR /usr/src/app/

# install app dependencies
# this is done before the following COPY command to take advantage of layer caching
RUN npm install
RUN npm i pm2 -g
CMD ["pm2-runtime", "server.js"]