#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2012-2013 Martin Ueding <dev@martin-ueding.de>

from distutils.core import setup

__docformat__ = "restructuredtext en"

setup(
    author = "Martin Ueding",
    author_email = "dev@martin-ueding.de",
    classifiers = [
        "Development Status :: 5 - Production/Stable",
        "Environment :: Console",
        "License :: OSI Approved :: GNU Affero General Public License v3 or later (AGPLv3+)",
        "Natural Language :: English",
        "Programming Language :: PHP",
        "Programming Language :: Python :: 3",
        "Topic :: Office/Business",

    ],
    description = "Online notes for Taskwarrior",
    download_url = "http://martin-ueding.de/download/php-note-capture/",
    py_modules = ["notes"],
    packages = ["."],
    package_data = {".": ["static/*", "templates/*"]},
    name = "note-capture",
    scripts = ["notes-download"],
    url = "http://martin-ueding.de/projects/php-note-capture/",
    version = "1.0",
)
