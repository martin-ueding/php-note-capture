# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

all:

install:
	# Python module
	./setup.py install --install-layout deb --root "$(DESTDIR)/"
	#
	# WSGI file
	install -d "$(DESTDIR)/var/www/notecapture"
	install notecapture.wsgi -t "$(DESTDIR)/var/www/notecapture"
	#
	# Apache 2 vhost
	install -d "$(DESTDIR)/etc/apache2/sites-available"
	install apache2/notecapture -t "$(DESTDIR)/etc/apache2/sites-available"

.PHONY: clean
clean:
	$(RM) -r build
	$(RM) *.class *.jar
	$(RM) *.o *.out
	$(RM) *.pyc *.pyo
	$(RM) *.orig
