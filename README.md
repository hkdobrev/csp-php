### CSP for PHP

#### Content-Security-Policy header generatator

[![Build Status](https://travis-ci.org/hkdobrev/csp-php.png?branch=master)](https://travis-ci.org/hkdobrev/csp-php)

---

Content Security Policy is a specification developed by W3C and more specificially Web Application Security Working Group.

It aims to make cross-site scripting (XSS), content injection and other attacks quite difficult.
It considerably improve the security of web applications with limiting what the browser would load and execute.

It is a mechanism which allows the server to send to the visitor's browser a set of strict rules to follow.

You could whitelist script, image iframe, sources (and many other) which you would want to allow on your site.
Everything else which might be injected as an iframe, an inline script or an external resource would not be loaded and executed by the browser at all.

---

For more on Content Security Policy see: http://www.html5rocks.com/en/tutorials/security/content-security-policy/

Here is a video introduction: https://mikewest.org/2013/09/frontend-security-frontendconf-2013

And the spec: [CSP 1.0 (Candidate Recomendation)](www.w3.org/TR/CSP) [CSP 1.1 (Working Draft)](www.w3.org/TR/CSP11)
