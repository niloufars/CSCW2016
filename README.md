# CSCW Website repo

This repo contains the CSCW 2016 website source.

A good starting point before editing is to check out `_inc/config.php`, which contains some useful constants (conference year, location, etc) so that we don't have to repeat things like "San Francisco" everywhere (plus it will help next year's maintainers with migration, assuming they use this code). Also note that a few other constants, like `$basePath`, should be defined in each file and used to construct relative URLs (absolute URLs for pages within the site __should not__ be used because they will break deployments on test sites). See `index.php` and `_inc/header.php` for examples of the use of `$basePath`. 