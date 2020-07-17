# Wordpress Development Test


## How to Submit

Please fork this Repository, commit changes to your fork and then open a PR to this repository when complete for review. Also, include a link in the Pull Request to download your zipped assets folder + database dump so we can quickly bootstrap the website and review.

## Test Requirements

Please see the `INSTRUCTIONS.md` file.

## How to run?

This is a detatched development repository and uses docker to provide the development environment. You can engage the environment by running the following command...

```shell
docker-compose -f .docker/dev/docker-compose.yml up
```

There is a convenience script included in the `composer.json` so you can run:

### Start Services
```shell
docker-compose -f .docker/dev/docker-compose.yml up -d
```

### Stop Services
```shell
docker-compose -f .docker/dev/docker-compose.yml down
```

This will give you two services:
*   (app.wp) Wordpress/Apache (PHP7.4) Service, the official Wordpress docker image.
*   (app.db) Mysql 5.7 database


### Connect to Mysql Server

The Mysql Server forwards ports from `3306` to `33060`. You can connect with the following very secure and original details:-

**Host**: 127.0.0.1 (localhost)
**Username**: wordpress
**Password**: wordpress
**Database**: wordpress

### Visit the Dev Site

You can visit the dev site at: `http://localhost:8000`

## Plugins
Plugins go into the `src/plugins` or `src/mu-plugins` directory, depending on their importance. Any plugins that can be just installed a build time can be added to the root `composer.json` and will be installed as part of the build process. If any plugins are not available in https://wpackagist.org/ then they can be added manually to the `src/plugins` dir and added to the .gitignore so they can be kept inside the repo.

## Themes
To install the starter theme, change to the `src/themes/starter-theme` directory and run the following command:-

```shell
composer install
npm install
npm run dev
```

You can refer to the theme's included `README.md` file for further instructions on using it.
