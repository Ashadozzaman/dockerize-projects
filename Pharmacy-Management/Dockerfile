# FROM node:16-alpine

# WORKDIR /app

# COPY package*.json ./

# # Remove existing node_modules and package-lock.json, then install dependencies
# RUN rm -rf node_modules package-lock.json && npm install

# COPY . .

# EXPOSE 3002

# CMD ["npm", "run", "dev"]



# Production

FROM node:lts-alpine as build-stage
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# production stage
FROM nginx:stable-alpine as production-stage
COPY --from=build-stage /app/dist /usr/share/nginx/html
COPY /conf/nginx.conf /etc/nginx/conf.d/default.conf
# EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]

