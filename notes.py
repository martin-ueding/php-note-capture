#!/usr/bin/python
# -*- coding: utf-8 -*-

# Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

from __future__ import print_function

import flask
import json
import datetime

app = flask.Flask(__name__)

notes = []
notes_loaded = False

def load_notes():
    global notes
    global notes_loaded

    if notes_loaded:
        return

    with open("notes.js") as f:
        notes = json.loads(f.read())
        notes_loaded = True

def new_note(form):
    global notes

    notes.append({
        "text": form["text"],
        "priority": form["priority"],
        "entry": datetime.datetime.now().strftime("%Y-%m-%d"),
    })

    print(notes)

@app.route('/', methods=["GET", "POST"])
def new():
    load_notes()
    form = flask.request.form
    if "text" in form:
        new_note(form)

    return flask.render_template('new.html', time=1, notes=notes,
                                 notes_len=len(notes))

if __name__ == '__main__':
    app.run(debug=True)
