### CSP for PHP &nbsp;&nbsp;[![Build Status](https://travis-ci.org/hkdobrev/csp-php.png?branch=master)](https://travis-ci.org/hkdobrev/csp-php) [![Code Coverage](https://scrutinizer-ci.com/g/hkdobrev/csp-php/badges/coverage.png?s=a2b79939fe8b190b563db35483da96fa83518300)](https://scrutinizer-ci.com/g/hkdobrev/csp-php/) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/hkdobrev/csp-php/badges/quality-score.png?s=7acc9aabc91022ef4bbb4651d55bdf79e7a6ba80)](https://scrutinizer-ci.com/g/hkdobrev/csp-php/)

#### Content-Security-Policy header generatator

---

#### What is CSP?

Content Security Policy is a specification developed by W3C and more specificially Web Application Security Working Group.

Its goal is to make cross-site scripting (XSS), content injection and other attacks quite difficult.
It considerably improves the security of web applications by limiting what the browser would load and execute.

It is a mechanism which allows the server to send to the visitor's browser a set of strict rules to follow.

You could whitelist script, image and iframe sources (and many other) which you would want to allow on your site.
Everything else which might be injected as an iframe, an inline script or an external resource would not be loaded and executed by the browser at all.

---

#### What is this repo about?

This library aims to ease the use of the different variations of rules and directives in the Content Security Policy (CSP).
It could potentially introduce web developers to the specification and broaden the use of CSP across PHP projects (a significant part of the web).

And thus to increase the secuirty of the web as a whole.

---

#### Roadmap

See [TODO.md](TODO.md)

---

For more on Content Security Policy see: http://www.html5rocks.com/en/tutorials/security/content-security-policy/

Here is a video introduction: https://mikewest.org/2013/09/frontend-security-frontendconf-2013

And the different versions of the specification:
- [CSP 1.0 (Candidate Recomendation)](www.w3.org/TR/CSP)
- [CSP 1.1 (Working Draft)](www.w3.org/TR/CSP11)
- [CSP 1.1 (Editor's Draft)](http://w3c.github.io/webappsec/specs/content-security-policy/csp-specification.dev.html)

---

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/hkdobrev/csp-php/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
