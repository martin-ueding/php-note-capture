# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

all:

install:
	./setup.py install --install-layout deb --root "$(DESTDIR)"

.PHONY: clean
clean:
	$(RM) *.class *.jar
	$(RM) *.o *.out
	$(RM) *.pyc *.pyo
	$(RM) *.orig
