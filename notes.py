#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

import flask

app = flask.Flask(__name__)

@app.route('/')
def new():
    return flask.render_template('new.html', time=1, notes=[], notes_len=3)

if __name__ == '__main__':
    app.run(debug=True)
