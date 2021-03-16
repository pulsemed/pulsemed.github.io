FROM nginx:alpine
RUN apk add --no-cache wget
RUN rm -rf /usr/share/nginx/html/*
COPY ./entrypoint.sh /usr/local/bin/entrypoint
RUN chmod +x /usr/local/bin/entrypoint
ENTRYPOINT ["entrypoint"]
CMD ["nginx", "-g", "daemon off;"]
