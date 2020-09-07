# S3V Theme

## Pre-requisites
Before starting, ensure that you are using at least the latest LTS release of
Node.js, once Node.js has been installed, we recommend to run

To install the required packages use
```
npm install
```

## Features
- Target as multi purpose theme. Follow the latest ui design, modern feel & fully responsive using PostCSS.
- Theme will provide config like,
	- base unit setting
	- define font recommended to import Web Fonts
	- colors scheme for primary, secondary color, link color, header & footer bgcolor
	- Header options like fixed or normal
	- Layout option 12 column grid fluid/fixed using minimum width, inner & outer gutter
	- Social connect
	- Footer copyright option
- Fontawesome icons will used
- Modular gulp tasks for compiling and linting

## Theme Regions
  branding: 'Branding'
  navigation: 'Main navigation'
  search: 'Search'
  featured: 'Featured'
  breadcrumb: 'Breadcrumb'
  content_top: 'Content top'
  content: 'Content' #required!
  content_bottom: 'Content bottom'
  sidebar_first: 'First sidebar'
  sidebar_second: 'Second sidebar'
  footer_top: 'Footer top'
  footer_bottom: 'Footer bottom'

## Working on CSS
The project uses [PostCSS](https://postcss.org/) for managing variables and
provide the needed browser support.

## Working on Javascript
The project uses [ES6](https://es6.io/) for managing javascript with the `Drupal.behaviors` code standard.

## Linting js and css
Will update soon.

## Images
The images designated for your custom theme can be placed in the `images/` folder. We have gulp task to optimized images.
