.. Copyright © 2013-2014 Martin Ueding <dev@martin-ueding.de>

Changelog
=========

v2.1.1
    - Add ``notes.js`` again

v2.1
    - Update ``notes-download`` to support SSL download via ``auth.cert``
      supplication of a self-signed certificate

v2.0.2
    - Remove hidden field with current time from the form

v2.0.1
    - Do not set user in ``make install``. This needs to have some
      ``debian/postinst`` script instead.

v2.0
    - Change from PHP to Python 2 with Flask, deploy via WSGI with Apache 2

v1.3.2
    - Let the form expire to prevent sending a form again if the POST request
      was in the cache

v1.3.1
    - Use uppercase letters for priority
    - Vertical align priority to top

v1.3
    - Option to prepend a date

v1.2
    - Night mode
    - Show tasks in a table
    - Fix CSS style of select

v1.1
    - Add priority feature

v1.0
    Initial release
