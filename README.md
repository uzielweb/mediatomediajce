# Media to Media JCE (mediatomediajce) Joomla System Plugin

![Joomla](https://img.shields.io/badge/Joomla-4.x-green.svg)
[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

A Joomla system plugin that automatically converts standard Joomla media fields (`type="media"`) to the JCE editor media field (`type="mediajce"`).

## About the Plugin

This plugin was developed to simplify the work of Joomla developers and site administrators who use the JCE editor. When enabled, it intercepts form rendering and replaces all native Joomla media selection fields with the JCE file manager, which is more robust and user-friendly.

The main advantage is the ability to use the JCE interface to select not only images but any file type in any component that uses Joomla's standard media fields.

## Features

* **Automatic Replacement:** Converts all `media` type fields to `mediajce` without requiring manual code or XML form changes.
* **JCE Integration:** Utilizes the JCE file manager, providing a better user experience.
* **Support for All File Types:** By default, the replacement allows the selection of any file type, not just images (`mediatype="files"`).
* **Plug and Play:** Simply install and activate. No additional configuration is required.
* **Default Directory:** Sets the `media` directory as the default for uploads if no other directory is specified in the original field.

## Requirements

* **Joomla:** Version 3.x, 4.x, or higher.
* **JCE Editor:** The JCE Editor component must be installed and enabled on your site, as the `mediajce` field is part of it.

## Installation

1. Download the latest version of the plugin from the project's *Releases* page.
2. Access your Joomla site's administration panel.
3. Go to **System** -> **Install** -> **Extensions**.
4. Drag the plugin's `.zip` file to the upload area or use the "Browse" button to locate it.
5. After installation, go to **System** -> **Manage** -> **Plugins**.
6. Search for "System - Media to Media JCE".
7. Enable the plugin.

From this point on, all media fields will be automatically replaced.

## How It Works

The plugin uses Joomla's `onContentPrepareForm` event to manipulate forms before they are displayed. It analyzes the form's XML and changes the `type` attribute from "media" to "mediajce" for all relevant fields.

## Author and License

* **Author:** Ponto Mega
* **Contact:** contato@pontomega.com.br
* **Website:** https://www.pontomega.com.br
* **License:** GNU General Public License v2 or later
<img width="1869" height="919" alt="image" src="https://github.com/user-attachments/assets/f6e45f1c-dfb6-47c5-aa8f-854b06feec2b" />
