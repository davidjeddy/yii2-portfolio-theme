# David J Eddy Portfolio Theme Collection

## Copyright

Respective owners or David J Eddy, 2016

## License

See license.md

## Install

First add the following to the script section of your `composer.json`:

```
{	
    ...
    },
    "scripts": {
        "post-autoload-dump": [
            "./vendor/davidjeddy/yii2-portfolio-theme/SYM-LINK-INSTALL.sh"
        ]
    }
}
```

...then add the dependancy to your project by  running the following

```
	php composer.phar require davidjeddy/yii2-portfolio-theme "~1.0"
```
...or add the following to your `composer.json` require section

```
	"davidjeddy/yii2-portfolio-theme": "~1.0"
```
