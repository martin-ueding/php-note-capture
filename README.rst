.. Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

############
note-capture
############

Suite of scripts to add tasks to Taskwarrior_ on the go.

There is a website (written in Python 2 with Flask) that can be used from any
mobile device. Then, ``notes-download`` is used to download those notes. It is
written in Python 3.

The notes are saved in JSON on your webserver. You will have to set up a HTTP
auth scheme to protect it.

Requirements
============

On the Webserver
----------------

- Apache 2 Webserver
- Python 2
- python-flask
- write access in the directory ``/var/www/note-capture``

Locally
-------

- Python 3
- Taskwarrior_ as the ``task`` command

Installation
============

Server
------

Install the server part of this with ``make install``.

Local
-----

#. Install a ``~/.config/php-note-capture/config.ini`` files and define the
   following::

    [auth]
    realm =
    uri =
    user =
    passwd =

    [reset]
    reseturl =

#. Set up Taskwarrior_ so that ``task add`` can be called.
#. Run ``./setup install`` or ``./setup install --user`` to install the
   ``notes-download`` script.

License
=======

This program is licensed under the *GNU Affero General Public License v3 or
later (AGPLv3+)*.

.. _Taskwarrior: http://taskwarrior.org/
