# CasinoTheme

**CasinoTheme** is a custom WordPress theme designed for casino-related websites, offering a modern and user-friendly design. The theme includes customizable footer options and a shortcode for adding brand sliders.

---

## Table of Contents

- [Theme Details](#theme-details)
- [Features](#features)
- [Installation](#installation)
- [Customization Options](#customization-options)
- [Shortcodes](#shortcodes)
- [License](#license)
- [Author](#author)

---

## Theme Details

- **Theme Name:** CasinoTheme
- **Theme URI:** [CasinoTheme Repository](https://github.com/radoshDev)
- **Author:** [Radosh](https://github.com/radoshDev)
- **Version:** 0.1
- **Description:** Login casino theme
- **Text Domain:** casinotheme

---

## Features

- **Footer Customization:** Add address, email, phone number, social media links, and copyright information via WordPress Customizer.
- **Brand Slider Shortcode:** Easily add a slider for showcasing brands using a shortcode.
- Fully responsive and mobile-friendly layout.
- Lightweight and performance-optimized.
- Modern design tailored for casino-related websites.

---

## Installation

1. Download the latest version of the theme from the [repository](https://github.com/radoshDev).
2. Log in to your WordPress admin dashboard.
3. Navigate to **Appearance > Themes** and click **Add New**.
4. Upload the `CasinoTheme.zip` file and click **Install Now**.
5. Activate the theme.

---

## Customization Options

CasinoTheme includes extensive footer customization options accessible through the WordPress Customizer. Navigate to **Appearance > Customize > Footer** to modify various footer settings such as address, email, phone number, social media links, and copyright text.

---

## Shortcodes

### `brands-slider`

The `brands-slider` shortcode allows you to create a slider showcasing brand logos.

#### Usage

```php
[brands-slider images_id="1,2,3,4,5"]
```

#### Attributes

`images_id`: Comma-separated list of attachment IDs for the images you want to display in the slider.

### `latest-news`

This latest-news` shortcode allows you to display the latest news posts from a specified category on your WordPress site.

#### Usage

```php
[latest-news title="Your Title" subtitle="Your Subtitle" category_name="news"]
```

#### Attributes

- **`title`** (string): Sets the title of the news section.
- **`subtitle`** (string): Sets the subtitle of the news section.
- **`category_name`** (string): Specifies the category slug to fetch news posts from.

### `latest-posts`

The `latest-posts` shortcode allows you to display the latest posts from a specified category on your WordPress site in a responsive grid format.

#### Usage

```php
[latest-posts title="Your Title" subtitle="Your Subtitle" category="category-slug" per_page="5"]
```

#### Attributes

- **`title`** (string): Sets the title of the posts section.
- **`subtitle`** (string): Sets the subtitle of the posts section.
- **`category`** (string): Specifies the category slug to fetch posts from.
- **`per_page`** (integer): Determines the number of posts to display per page (default is 5).

### `subscribe-section`

The `subscribe-section` shortcode allows you to display a subscription section on your WordPress site. This section includes a title, an email input field, a subscribe button, and a privacy policy agreement checkbox.

#### Usage

```php
[subscribe-section title="Your Custom Title"]
```

#### Attributes

- **`title`** (string): Sets the title of the subscription section. The default title is "Get the best blog stories into your inbox!".

---

## License

This theme is licensed under the GNU General Public License v2 or later. See [GPL-2.0](https://www.gnu.org/licenses/gpl-2.0.html) for more details.

---

## Author

**Radosh**  
GitHub: [radoshDev](https://github.com/radoshDev)

---

## Contributing

Contributions, issues, and feature requests are welcome!  
Feel free to check the [issues page](https://github.com/radoshDev).

---

## Changelog

### Version 0.1

- Initial release.
- Added footer customization options via WordPress Customizer.

---

## Acknowledgments

Special thanks to the WordPress community for their documentation and support.
