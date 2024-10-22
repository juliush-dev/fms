FROM alpine AS dev
WORKDIR /framework
RUN apk add --no-cache curl unzip && \
    curl -o latest.zip https://wordpress.org/latest.zip && \
    unzip latest.zip -d . && \
    rm latest.zip && \
    apk del curl unzip
RUN mkdir -p wordpress/wp-content/plugins/my-custom-plugin \
    wordpress/wp-content/themes/my-custom-theme

FROM alpine AS prod