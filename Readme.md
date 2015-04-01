# i3 AntiSpam

## Plugin Information

A shortcode to insert mailadresses via the WP antispambot function.

***

## Installation

1. Unzip the download package
2. Upload `i3-antispam` to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

***

## Usage

Use the shortcode like:
`[email]john.doe@mysite.com[/email]`

The default shortcode will generate a mailto link.

When you set shortcode attribute `link="false"` the link will not be generated:
`[email link="false"]john.doe@mysite.com[/email]`

***

## Contributors

- [WordPress Codex](https://codex.wordpress.org/Function_Reference/antispambot) - Converts email addresses characters to HTML entities to block spam bots.

***

## Changelog

### 1.0
* First push