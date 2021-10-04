# Vite + Tailwind CSS JIT - demo Wordpress Theme for rapid development

Example of using Vite+Tailwindcss (JIT) in Wordpress Theme development. Auto generating CSS, auto refresh on every file save/edit and easy production build tool with no hassle.
Inspired by https://github.com/vitejs/vite/issues/341

<img src="assets/img/hello-world.jpg" width="100%">


## Installation

Unpack and copy folder to your Wordpress installation /wp-content/themes/ folder, or install theme via wp-admin by uploading .zip file and activate the theme.
Then from your console or command prompt go to the theme folder and run **npm install**. Note: NodeJS is requred.

Installation (Node.js installed required):
```bash
npm install
```

Quick commands:
```bash
# dev server start
npm run dev

# production build
npm run build
```


## Setup

Entry point file **main.js** is where you include all your scripts and styles. It can be changed via **vite.config.json** and **functions.php**.

```bash
# get styles
import "./assets/css/styles.css"

# get scripts
import "./assets/js/scripts.js"
```

## Development with live preview/refresh

Ensure **define("IS_VITE_DEVELOPMENT", true);** exists in your **wp-config.php** or theme/plugin **functions.php**. Just run **npm run dev** and refresh your development website.

```bash
npm run dev
```
After Vite dev server is started open your installed Wordpress website in any browser or refresh it. Then you can start editing index.php, or any other php file in your theme, by adding elements and Tailwind classes. After saving changes your browser page eg your site should refresh immediately. You can freely edit asset files like styles.css, scripts.js too.

### Note for httpS serving
If your local development domain is served via **https**:// then generating certificate for localhost usage and some changes in config are required
- install mkcert utility and follow the instructions how to generate & install certificate https://github.com/FiloSottile/mkcert
    - example on Windows 10 (PowerShell as Administrator)

```bash
# install mkcert
choco install mkcert

# global one time install
mkcert -install

# run in project/theme folder to create localhost-key.pem & localhost.pem 
mkcert localhost
```

- enable server.https option in **vite.config.js**
- change VITE_SERVER to http**s** in your **functions.php**


## Production build

Just run **npm run build**, set defined **IS_VITE_DEVELOPMENT** to **false** and refresh local website.

```bash
npm run build
```
Wordpress should load now production generated assets.

Note: To ensure classes used inside CMS to be processed just add them to safelist.txt and run build again.


## Customizations

More info on the links below
- https://vitejs.dev/config/
- https://tailwindcss.com/
- https://github.com/tailwindlabs/tailwindcss-jit

Visual Studio Code Tailwind Intellisense plugin is a must.
https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss

---
That's it.

Happy coding! :)

---
## Changes

### v0.2.7
- Tailwind updated to 2.2.16
- PostCSS updated to v8.3.8
- Autoprefixer updated to 10.3.6
- Vite updated to v2.6.2

### v0.2.6
- Tailwind updated to 2.2.15
- Vite updated to v2.5.7
- Autoprefixer updated to 10.3.4
- PostCSS updated to v8.3.6
- PostCSS-Nested updated to 5.0.6
- IS_VITE_DEVELOPMENT check fix

### v0.2.5
- PostCSS updated to v8.2.14

### v0.2.4
- https solution added
- 404.php template file added

### v0.2.3
- Vite updated to v2.2.4
- PostCSS updated to v8.2.13
- Tailwindcss updated to v2.1.2
- https option included into server vite.config.js

### v0.2.2
- small workaround added in order Tailwindcss Intellisense to work
- postcss package updated to v8.2.10
- index.php splited into header.php & footer.php
- example page.php template with responsive container added

### v0.2.1
- TailwindCSS updated to 2.1.1 (JIT is included in this version)
- experimental @tailwindcss/jit removed
- functions.php cleanup
- tailwind.config.js, mode 'JIT' added (v2.1.1)
- postcss.config.js updated

### v0.1.0
- initial release
