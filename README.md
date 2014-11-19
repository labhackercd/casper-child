# WordPress theme for http://blog.labhackercd.net/

This is a child theme for [Casper](https://github.com/lacymorrow/casper/). We
use it at http://blog.labhackercd.net/.


## Development

Make sure you have [node.js](http://nodejs.org) and [npm](http://npmjs.org)
installed in your system.

Then install both [grunt-cli](http://gruntjs.com) and [bower](http://bower.io)
globally:

```bash
npm install -g grunt-cli bower
```

Clone this repository:

```bash
git clone https://github.com/labhackercd/casper-child.git
cd casper-child
```

Install the required packages:

```bash
npm install
```

And finally build the theme style:

```bash
grunt build
```

You are advised to edit the theme through the `sass/style.scss` file.


## Usage

Install and activate [Casper](https://github.com/lacymorrow/casper/). You need
the most recent version of the theme. Once Casper is working, upload the
`casper-child` folder into your WordPress theme directory, alongside the
`casper` folder. In your dashboard, activate the Casper Child theme to make it
live.

For more info on using child themes, check out the
[WordPress Codex](http://codex.wordpress.org/Child_Themes).


Many thanks to the [Ghost](http://ghost.org) &
[WordPress](http://wordpress.org) teams, as well as the [Underscores
_s](http://underscores.me/) contributers, and
[kvendrik](https://github.com/kvendrik/responsive-images.js). Built using all
of the above.
