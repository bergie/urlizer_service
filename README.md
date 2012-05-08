URLizer service
===============

This is a simple Heroku PHP app showcasing how to install [Composer packages](http://packagist.org/). It simply takes strings and converts them to clean URL names.

Creating such an app is easy. Simply set it to use the custom PHP buildpack until [the changes are accepted](https://github.com/heroku/heroku-buildpack-php/pull/10) into the official one:

    $ heroku create -s cedar --buildpack https://github.com/bergie/heroku-buildpack-php.git urlizer-service

And then deploy:

    $ git push heroku master
