#Installing project dependencies

Your development machine must meet the following requirements to get started:

Node.js >= 4.5.0
After installing Node.js, we recommend that you update to the latest version of npm:

```bash
npm install -g npm@latest
```
From the command line:

- Install gulp and Bower globally with npm install -g gulp bower
- Navigate to the theme directory, then run npm install
- Run bower install
- You now have all the necessary dependencies to run the build process.

#Available gulp commands

- gulp — Compile and optimize the files in your assets directory
- gulp watch — Compile assets when file changes are made
- gulp --production — Compile assets for production (no source maps)
To use BrowserSync during gulp watch you need to update devUrl at the bottom of assets/manifest.json to reflect your local development hostname.

#Adding front-end packages with Bower

Install Bower packages with bower install --save package-name. Using the --save flag will add the package into your project's bower.json dependencies. asset-builder uses main-bower-files to read your bower.json and automatically collect CSS and JS from files defined in the main property from your included Bower packages. You can override the behavior if you add an overrides property to your own bower.json. You can see overrides in action by opening bower.json.

The asset pipeline

The manifest.json file in the assets/ directory is used by asset-builder to build out the CSS and JS files that are used by the theme.

The asset-builder documentation has examples, troubleshooting tips, and the manifest file specification.
Theme stylesheets

Sage includes one primary stylesheet: dist/styles/main.css. main.css is built from assets/styles/main.scss.

#In main.scss:

wiredep is used to inject Sass dependencies from Bower
Barebones partials are imported to help get your styling started
Any main CSS dependencies from Bower packages are also included in the primary stylesheet.

The editor stylesheet, which is used by TinyMCE in the WordPress visual editor, is generated from your primary theme stylesheet.

Tip: You can use the manifest.json file to include CSS from WordPress plugins in your theme's primary stylesheet by defining the path to the vendor CSS file with the vendor property. See the asset-builder documentation for examples, troubleshooting tips, and the manifest file specification.
Theme scripts

Sage includes one primary JavaScript file: dist/scripts/main.js. main.js is built from assets/scripts/main.js.

Any main JS dependencies from Bower packages are also included in the primary JavaScript file.

Sage also loads jQuery and Modernizr before the primary JavaScript file.

Tip: You can use the manifest.json file to include JS from WordPress plugins in your theme's primary JavaScript file by defining the path to the vendor JS file with the vendor property. See the asset-builder documentation for examples, troubleshooting tips, and the manifest file specification.
Next: Theme Deployment

