FROM node:18-alpine

WORKDIR /docker-react

COPY public/ /public/
COPY src/ /src/
COPY package.json .

RUN npm install

CMD ["npm", "start"]
