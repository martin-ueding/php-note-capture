#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

from notecapture import app
from werkzeug.debug import DebuggedApplication
application = DebuggedApplication(app, True)
