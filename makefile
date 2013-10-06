# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

all:

install:
	# Python module
	./setup.py install --install-layout deb --root "$(DESTDIR)/"
	#
	# WSGI file
	install -d "$(DESTDIR)/var/www/notecapture"
	install -m 644 notecapture.wsgi -t "$(DESTDIR)/var/www/notecapture"
	install -m 600 -o www-data -g www-data notes.js -t "$(DESTDIR)/var/www/notecapture"
	#
	# Apache 2 configuration file
	install -d "$(DESTDIR)/etc/apache2/conf.d"
	install -m 644 apache2/notecapture -t "$(DESTDIR)/etc/apache2/conf.d"

.PHONY: clean
clean:
	$(RM) -r build
	$(RM) *.class *.jar
	$(RM) *.o *.out
	$(RM) *.pyc *.pyo
	$(RM) *.orig
