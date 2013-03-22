#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2012-2013 Martin Ueding <dev@martin-ueding.de>

from distutils.core import setup

__docformat__ = "restructuredtext en"

setup(
    author = "Martin Ueding",
    author_email = "dev@martin-ueding.de",
    classifiers = [
        "Environment :: Console",
        "Programming Language :: Python",
        "Programming Language :: PHP",

    ],
    description = "Online notes for Taskwarrior",
    download_url = "http://martin-ueding.de/download/php-note-capture/",
    name = "copyrightupdate",
    scripts = ["notes-download"],
    url = "http://martin-ueding.de/projects/php-note-capture/",
    version = "1.0",
)
