# CSCW Website repo

This repo contains the CSCW 2016 website source.

A good starting point before editing is to check out `_inc/config.php`, which contains some useful constants (conference year, location, etc) so that we don't have to repeat things like "San Francisco" everywhere (plus it will help next year's maintainers with migration, assuming they use this code). Also note that a few other constants, like `$basePath`, should be defined in each file and used to construct relative URLs (absolute URLs for pages within the site __should not__ be used because they will break deployments on test sites). See `index.php` and `_inc/header.php` for examples of the use of `$basePath`. 

## Uploading

Basic process is something like:

1.  Merge master branch onto release (to keep track of released versions)

    ```
    git checkout release
    git merge master
    ```

2.  Copy the repo contents onto the FTP folder. Ignore dotfiles, the _dev 
    directory, and this README; for example, do not include these files:

    ```
    .git
    .gitignore
    .project
    .settings
    _dev
    README.md
    ```
   
    I'd recommend using an FTP client that allows you to copy entire 
    directory trees and only copy new versions of files, such as 
    FileZilla.
    
3.  Remember to push the updated release branch back to github, and switch back 
    to master (or another branch) before continuing work; e.g.
    
    ```
    git push
    git checkout master 
    ```
    