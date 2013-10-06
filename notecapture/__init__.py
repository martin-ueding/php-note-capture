#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

from __future__ import absolute_import, print_function

import flask
import json
import datetime
import os.path
import time

app = flask.Flask(__name__)

notes = []
notes_loaded = False

def find_notes_file():
    path = [".", "/var/www/notecapture"]

    for dir_ in path:
        file_ = os.path.join(dir_, "notes.js")
        if os.path.isfile(file_):
            break

    return file_

def load_notes():
    global notes
    global notes_loaded

    if notes_loaded:
        return

    with open(find_notes_file()) as f:
        notes = json.loads(f.read())
        notes_loaded = True

def new_note(form):
    global notes

    notes.append({
        "text": form["text"],
        "priority": form["priority"],
        "entry": datetime.datetime.now().strftime("%Y-%m-%d"),
    })

    save_notes()

def save_notes():
    with open(find_notes_file(), "w") as f:
        f.write(json.dumps(notes))

@app.route('/', methods=["GET", "POST"])
def new():
    load_notes()
    form = flask.request.form
    if "text" in form:
        new_note(form)

    tp_vars = {
        "notes": notes,
        "notes_len": len(notes),
        "now": int(time.time()),
        "url_for_list": flask.url_for('list'),
    }
    return flask.render_template('new.html', **tp_vars)

@app.route("/list")
def list():
    load_notes()

    tp_vars = {
        "notes": notes,
        "notes_len": len(notes),
        "url_for_new": flask.url_for('new'),
    }
    return flask.render_template('list.html', **tp_vars)


if __name__ == '__main__':
    app.run(debug=True)
