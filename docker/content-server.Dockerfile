FROM httpd AS dev
CMD httpd-foreground \
    && apachectl restart