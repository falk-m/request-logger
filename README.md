PHP Request Logger
======

[![Author](https://img.shields.io/badge/author-falkm-blue.svg?style=flat-square)](https://falk-m.de)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

a simple php script how log all GET and POST parameter from request.    
Useful if you want to test some hooks for example.

## Usage

make sure that the ```log``` directory hat write permissions

## sample

Url: ```http://localhost:81/blub/?test=1```

in ```/log/yyy-mm-dd.log``` file:
```
2023-09-14T11:51:29+00:00 {"REQUEST_METHOD":"GET","URL":"\/blub\/?test=1","GET":{"test":"1"},"POST":[]}
```