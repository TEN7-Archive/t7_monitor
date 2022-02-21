# README

This is a simple module that creates a non-cacheable page on a Drupal 9 website that can be used for reliable site monitoring if the other cache-busting methods fail. 

## How to Install in Composer

Locate the "repositories" key in your composer.json file and paste the following:

```     
{
    "type": "package",
    "package": {
        "name": "ten7/t7_monitor",
        "version": "1.0.0",
        "type": "drupal-module",
        "dist": {
            "url": "https://github.com/ten7/t7_monitor/archive/refs/heads/main.zip",
            "type": "zip"
        }
    }
}
 ```
 Once you have added this to your file, then run `composer require ten7/t7_monitor`
