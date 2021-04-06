# Vite + Tailwind/JIT - demo Wordpress Theme for rapid development

Fastest Wordpress Theme development you have ever seen. Auto generating CSS, auto refresh on every file save and easy production build tool with no hassle.
Inspired by https://github.com/vitejs/vite/issues/341

<img src="assets/img/hello-world.jpg" width="100%">

*Note: Tailwind JIT is currently experimental and it will be integrated into Tailwind soon, will update the theme accordinaly*

## Installation

Unpack and copy folder to your /wp-content/themes/ folder, or install theme via wp-admin by uploading .zip file and activate Demo theme.
Then CD (change directory) to theme folder and run **npm install**. Node is requred.

```bash
npm install
```


## Setup

Entry point file **main.js** is where you include all your scripts and styles. It can be changed via **vite.config.json** and **functions.php**.

```bash
# get styles
import "./assets/css/styles.css"

# get scripts
import "./assets/js/scripts.js"
```

Your CSS file should include tailwind base files, like in this example.

```bash
# styles.css
@tailwind base;
@tailwind components;
@tailwind utilities;
```


## Development with live preview/refresh

Ensure **define("IS_VITE_DEVELOPMENT", true);** exists in your **wp-config.php** or theme/plugin **functions.php**. Just run **npm run dev** and refresh your development website.

```bash
npm run dev
```
After Vite dev server is started open your installed Wordpress website in any browser or refresh it. Then you can start editing index.php, or any other php file in your theme, by adding elements and Tailwind classes. After saving changes your browser page eg your site should refresh immediately. You can freely edit asset files like styles.css, scripts.js too.


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

### v0.2.1
- TailwindCSS updated to 2.1.1 (JIT is included in this version)
- experimental @tailwindcss/jit removed
- functions.php cleanup
- tailwind.config.js, mode 'JIT' added (v2.1.1)
- postcss.config.js updated

### v0.1.0
- initial release
