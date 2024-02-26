const mix = require('laravel-mix');
const clean = require('laravel-mix-clean');
const path = require("path");
const fs = require('fs')

// Frontend Bootstrap 5
const activeTheme = process.env.LARA_CLIENT_THEME;

// Public Path
const PUBLIC_ASSET_PATH = './public/assets/';
// const PUBLIC_ASSET_PATH = './../httpdocs/assets/';
// const PUBLIC_ASSET_PATH = './../public/assets/';

// Media Temp Folder (copy media files only once)
const mediafolder = PUBLIC_ASSET_PATH + 'media/_temp';

// Theme - Client
const CLIENT_THEME = activeTheme;

const appMode = process.env.NODE_ENV;

if (appMode != 'production') {
	console.log('\x1b[35m', 'Mode: DEVELOPMENT')
} else {
	console.log('\x1b[35m', 'Mode: PRODUCTION')
}

// Process only one specific module
// Set value in .env:
// Possible values: base, demo, client, admin
const partial = process.env.MIX_PARTIAL_PROCESS

// Process CSS only
const cssOnly = (process.env.MIX_PROCESS_CSS_ONLY == 'true')

let processBase = false;
let processDemo = false;
let processClient = false;
let processAdmin = false;

if (partial == '') {
	processBase = true;
	processDemo = true;
	processClient = true;
	processAdmin = true;
	console.log('\x1b[35m', 'processing: Base, Demo, Client, Admin')
} else if (partial == 'base') {
	processBase = true;
	console.log('\x1b[35m', 'Notice: processing BASE only')
} else if (partial == 'demo') {
	processDemo = true;
	console.log('\x1b[35m', 'Notice: processing DEMO only')
} else if (partial == 'client') {
	processClient = true;
	console.log('\x1b[35m', 'Notice: processing CLIENT only')
} else if (partial == 'admin') {
	processAdmin = true;
	console.log('\x1b[35m', 'Notice: processing ADMIN only')
} else {
	console.log('\x1b[31m', 'WARNING: partial processing NOT VALID! Check your ENV file')
	process.exit(0);
}

if (cssOnly) {
	console.log('\x1b[35m', 'Notice: processing CSS only')
}

// Theme - Base
const BASE_THEME = 'base';

// Theme - Demo
const DEMO_THEME = 'demo';

// Paths
const LARA_CORE = 'laracms/core/src/';
const THEME_SOURCE = 'laracms/themes/';
const ADMIN_SRC_PATH = 'admin/Resources/Assets/';
const DEST_THEME_PATH = PUBLIC_ASSET_PATH + 'themes/';
const DEST_ADMIN_PATH = PUBLIC_ASSET_PATH + 'admin/';

// JS
const SRC_ADMIN_JS = path.join(__dirname, LARA_CORE + ADMIN_SRC_PATH + '/js');
const SRC_BASE_JS = path.join(__dirname, THEME_SOURCE + BASE_THEME + '/_assets/js');
const SRC_DEMO_JS = path.join(__dirname, THEME_SOURCE + DEMO_THEME + '/_assets/js');
const SRC_CLIENT_JS = path.join(__dirname, THEME_SOURCE + CLIENT_THEME + '/_assets/js');

// SCSS
const SRC_ADMIN_SCSS = path.join(__dirname, LARA_CORE + ADMIN_SRC_PATH + '/scss');
const SRC_BASE_SCSS = path.join(__dirname, THEME_SOURCE + BASE_THEME + '/_assets/scss');
const SRC_DEMO_SCSS = path.join(__dirname, THEME_SOURCE + DEMO_THEME + '/_assets/scss');
const SRC_CLIENT_SCSS = path.join(__dirname, THEME_SOURCE + CLIENT_THEME + '/_assets/scss');

// Public Assets
const SRC_ADMIN_PUBLIC = path.join(__dirname, LARA_CORE + ADMIN_SRC_PATH + '/_public');
const SRC_BASE_PUBLIC = path.join(__dirname, THEME_SOURCE + BASE_THEME + '/_assets/_public');
const SRC_DEMO_PUBLIC = path.join(__dirname, THEME_SOURCE + DEMO_THEME + '/_assets/_public');
const SRC_CLIENT_PUBLIC = path.join(__dirname, THEME_SOURCE + CLIENT_THEME + '/_assets/_public');

// DEST
const DEST_ADMIN_DIR = path.join(__dirname, DEST_ADMIN_PATH)
const DEST_BASE_DIR = path.join(__dirname, DEST_THEME_PATH + BASE_THEME)
const DEST_DEMO_DIR = path.join(__dirname, DEST_THEME_PATH + DEMO_THEME)
const DEST_CLIENT_DIR = path.join(__dirname, DEST_THEME_PATH + CLIENT_THEME)

// Filenames for minification
let cssFileName = 'app.css';
let frontJsFileName = 'app.js';
let adminJsFileName = 'app.js';
if (appMode === 'production') {
	cssFileName = 'app.min.css';
	frontJsFileName = 'app.min.js';
	adminJsFileName = 'app.min.js';
}


// set the public asset path
mix.setPublicPath(PUBLIC_ASSET_PATH);

/* ~~~~~~~~~~~~~~~~ Cleaning Before & After ~~~~~~~~~~~~ */

let cleanOptions = {
	verbose: true,
	cleanAfterEveryBuildPatterns: [],
	cleanOnceBeforeBuildPatterns: [],
};

if (processBase) {
	let mergeCleanOptions = getCleanOptions(cleanOptions, BASE_THEME, cssOnly);
	cleanOptions = mergeCleanOptions;
}
if (processDemo) {
	let mergeCleanOptions = getCleanOptions(cleanOptions, DEMO_THEME, cssOnly);
	cleanOptions = mergeCleanOptions;
}
if (processClient && activeTheme != 'demo') {
	let mergeCleanOptions = getCleanOptions(cleanOptions, CLIENT_THEME, cssOnly);
	cleanOptions = mergeCleanOptions;
}
if (processAdmin) {
	let mergeCleanOptions = getAdminCleanOptions(cleanOptions, cssOnly);
	cleanOptions = mergeCleanOptions;
}

mix.clean(cleanOptions);


/* ~~~~~~~~~~~~~~~~ Modern JS with modules ~~~~~~~~~~~~~~~~ */

// Base
if (processBase) {

	if (cssOnly) {
		mix.sass(SRC_BASE_SCSS + '/app.scss', DEST_BASE_DIR + '/css/' + cssFileName)
			.options({processCssUrls: false});
	} else {
		mix.js(SRC_BASE_JS + '/app.js', DEST_BASE_DIR + '/js/' + frontJsFileName)
			.sass(SRC_BASE_SCSS + '/app.scss', DEST_BASE_DIR + '/css/' + cssFileName)
			.copy(SRC_BASE_PUBLIC + '/favicon', DEST_BASE_DIR + '/favicon')
			.copy(SRC_BASE_PUBLIC + '/fonts', DEST_BASE_DIR + '/fonts')
			.copy(SRC_BASE_PUBLIC + '/images', DEST_BASE_DIR + '/images')
			.copy(SRC_BASE_PUBLIC + '/vendor', DEST_BASE_DIR + '/vendor/')
			.options({processCssUrls: false});

	}
}

// Demo
if (processDemo) {

	if (cssOnly) {
		mix.sass(SRC_DEMO_SCSS + '/app.scss', DEST_DEMO_DIR + '/css/' + cssFileName)
			.options({processCssUrls: false});
	} else {
		mix.js(SRC_DEMO_JS + '/app.js', DEST_DEMO_DIR + '/js/' + frontJsFileName)
			.sass(SRC_DEMO_SCSS + '/app.scss', DEST_DEMO_DIR + '/css/' + cssFileName)
			.copy(SRC_DEMO_PUBLIC + '/favicon', DEST_DEMO_DIR + '/favicon')
			.copy(SRC_DEMO_PUBLIC + '/fonts', DEST_DEMO_DIR + '/fonts')
			.copy(SRC_DEMO_PUBLIC + '/images', DEST_DEMO_DIR + '/images')
			.copy(SRC_DEMO_PUBLIC + '/vendor', DEST_DEMO_DIR + '/vendor')
			.options({processCssUrls: false});

	}

}

// Client
if (processClient && activeTheme != 'demo') {

	if (cssOnly) {
		mix.sass(SRC_CLIENT_SCSS + '/app.scss', DEST_CLIENT_DIR + '/css/' + cssFileName)
			.options({processCssUrls: false});
	} else {
		mix.js(SRC_CLIENT_JS + '/app.js', DEST_CLIENT_DIR + '/js/' + frontJsFileName)
			.sass(SRC_CLIENT_SCSS + '/app.scss', DEST_CLIENT_DIR + '/css/' + cssFileName)
			.copy(SRC_CLIENT_PUBLIC + '/favicon', DEST_CLIENT_DIR + '/favicon')
			.copy(SRC_CLIENT_PUBLIC + '/fonts', DEST_CLIENT_DIR + '/fonts')
			.copy(SRC_CLIENT_PUBLIC + '/images', DEST_CLIENT_DIR + '/images')
			.copy(SRC_CLIENT_PUBLIC + '/vendor', DEST_CLIENT_DIR + '/vendor/')
			.options({processCssUrls: false});

		if (fs.existsSync(mediafolder)) {
			console.log('mediafolder already copied');
		} else {
			console.log('copying demo mediafolder');
			mix.copy(SRC_DEMO_PUBLIC + '/media', PUBLIC_ASSET_PATH + '/media')
		}

	}
}


/* ~~~~~~~~~~~~~~~~ Admin (Keen Metronic) ~~~~~~~~~~~~~~~~ */

if (processAdmin) {

	adminJsFiles = [
		SRC_ADMIN_JS + '/_vendor/fast-delete.js',
		SRC_ADMIN_JS + '/_vendor/image-picker.js',
		SRC_ADMIN_JS + '/app.js',
	];

	if (cssOnly) {
		mix.sass(SRC_ADMIN_SCSS + '/style.scss', DEST_ADMIN_DIR + '/css/' + cssFileName)
			.options({processCssUrls: false});
	} else {
		mix.combine(adminJsFiles, DEST_ADMIN_DIR + '/js/' + adminJsFileName)
			.sass(SRC_ADMIN_SCSS + '/style.scss', DEST_ADMIN_DIR + '/css/' + cssFileName)
			.copy(SRC_ADMIN_PUBLIC + '/help', DEST_ADMIN_DIR + '/help')
			.copy(SRC_ADMIN_PUBLIC + '/img', DEST_ADMIN_DIR + '/img')
			.copy(SRC_ADMIN_PUBLIC + '/metronic', DEST_ADMIN_DIR + '/metronic')
			.copy(SRC_ADMIN_PUBLIC + '/plugins', DEST_ADMIN_DIR + '/plugins')
			.copy(SRC_ADMIN_PUBLIC + '/webfonts', DEST_ADMIN_DIR + '/webfonts')
			.options({processCssUrls: false});

	}
}

function getCleanOptions(options, theme, cssOnly) {

	let before = options.cleanOnceBeforeBuildPatterns;
	let after = options.cleanAfterEveryBuildPatterns;

	// Clean Theme Before
	let themeBefore = [];
	if (appMode != 'production') {
		if (cssOnly) {
			themeBefore = [
				'themes/' + theme + '/css/*',
			];
		} else {
			themeBefore = [
				'themes/' + theme + '/*',
			];
		}
	}

	// Clean Theme After
	let themeAfter = [];
	if (!cssOnly) {
		let themeAfter = [
			'themes/' + theme + '/js/*.txt',
		];
	}

	bMerge = before.concat(themeBefore);
	aMerge = after.concat(themeAfter);

	options.cleanOnceBeforeBuildPatterns = bMerge;
	options.cleanAfterEveryBuildPatterns = aMerge;

	return options;

}

function getAdminCleanOptions(options, cssOnly) {

	let before = options.cleanOnceBeforeBuildPatterns;

	// Clean Admin Before
	let adminBefore = [];
	if (appMode != 'production') {
		if (cssOnly) {
			let adminBefore = [
				'admin/css/*',
			];
		} else {
			let adminBefore = [
				'admin/*',
			];
		}
	}

	bMerge = before.concat(adminBefore);

	options.cleanOnceBeforeBuildPatterns = bMerge;

	return options;

}
