# Don Chicho's Nurture Farm
## Custom Wordpress Theme based off of [HTML5 Blank](http://html5blank.com)

This project is the Wordpress theme used in Don Chicho's Nurture Farm's website. The repository only contains the Wordpress theme, and not the plugins. However, the list of plugins used are stored here.

## Development Setup

To setup Wordpress, install XAMPP and setup the database. Since the main item being developed is a WP theme, the development and production databases can be separate.

The following script may be useful to start XAMPP:

```
sudo service apache2 stop
sudo service mysql stop
sudo /opt/lampp/lampp start
```

## Development Workflow

As of the moment, front page text and images are hardcoded, and thus placed in this repository.

As much as possible, **do not just edit in production.** Not only is this unsafe, it creates differences from the development and production version, which aren't trivial to resolve.

## Production Setup

The website is hosted in Hostinger. Deployment is done via SSH, so the machine needs to be able to SSH there. Generate your key-pair and share it with Hostinger.

## Production Deployment

First, the whole project must be compressed into a `.tgz` file:

```
cd ..
tar donchichos.tgz donchichos/
```

Next, the compressed archive must be copied into the server:

```
scp donchichos.tgz u207368244@156.67.222.85 -P 65002
```

Afterwards, you can `ssh` into the server and extract it in the themes folder:

```
ssh -p 65002 u207368244@156.67.222.85
bash export.sh
```

The `export.sh` script is shown here:

```
mv donchichos.tgz public_html/wp-content/themes/
cd public_html/wp-content/themes/
tar -zxvf donchichos.tgz
```