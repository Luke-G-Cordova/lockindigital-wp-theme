# Lock In Digital – WordPress Theme

This is the custom WordPress theme used by Lock In Digital. It is built with Tailwind CSS, ACF, and developed locally using Local by Flywheel.

---

## 🔧 Development Setup

To get started developing this theme locally:

1. **Open Local by Flywheel**

   - Start the WordPress site you've connected to this theme.

2. **Ensure Instant Reload Plugin is Active**

   - This enables hot reload while editing templates. Install it if it's not already installed. This is not necessary but can help the development process

3. **Run Tailwind in Watch Mode**

   ```bash
   npm run dev
   ```

   This watches your `tailwind.css` file and compiles changes into the final output.

4. **Start Coding**

   - Begin developing new templates or components.

---

## 📁 Theme File Structure

- `/template-parts/`

  - Contains all reusable components such as hero sections, contact blocks, or service previews.
  - Call with:
    ```php
    <?php get_template_part('template-parts/your-template-part'); ?>
    ```

- `/inc/Utils/`

  - Contains utility classes used across the theme.
  - Make sure each file begins with:
    ```php
    namespace LockInDigital\Utils;
    ```
  - Use via:
    ```php
    use LockInDigital\Utils\YourUtilityClass;
    ```

- `*.php` (in root)

  - Page templates like `page-about.php`, `page-contact.php`, `page-store.php`, etc.
  - To use them, go to WP Admin > Pages > Add/Edit Page > Template dropdown.

---

## 🌎 Global Variables

This theme has several global variables. You can find and manipulate them in wp-admin under `Appearance > Customize > Theme Settings`. Currently the following global variables are set there:

> - **Phone Number**
> - **Email Address**
> - **Facebook Page URL**
> - **Instagram Page URL**
> - **LinkedIn Page URL**
> - **X (Twitter) Page URL**
> - **Business Address**

Use these variables by calling `get_theme_mod('your_needed_var_id')`.

### Setup New Global Variables

In `functions.php` add code resembling the following in the `lockin_customize_register()` function:

```php
$wp_customize->add_setting('lockin_{your_variable_name}', ['default'   => '', 'transport' => 'refresh']);
$wp_customize->add_control('lockin_{your_variable_name}_control', [
   'label'    => _t('Your Variable Name Label'),
   'section'  => 'lockin_theme_settings',
   'settings' => 'lockin_{your_variable_name}',
   'type'     => 'text',
]);
```

If you wanted to now call this variable in your php code it should look like the following:

```php
<?php $myVariable = get_theme_mod('lockin_{your_variable_name}'); ?>
```

---

## ⚙️ Advanced Custom Fields (ACF)

This theme **requires** ACF and uses **ACF JSON sync** to ensure field groups are version-controlled and automatically loaded.

### ✅ Auto-Loaded Fields

This theme includes the following field groups in `/acf-json`:

- **Hero Content**
  - `hero_heading`, `hero_subheading`, `hero_button_text`
- **City Page Content**
  - `city_name`, `state_name`, `state_prefix`

ACF automatically loads these fields if:

- ACF is active
- The field group is not already in the DB
- The `acf-json/` folder is present

**No manual import is necessary**.

### ACF JSON Setup

The theme uses the following filters in `functions.php` to handle JSON export/import:

```php
add_filter('acf/settings/save_json', function($path) {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});
```

If you create or update a field group in WP Admin, a JSON file will be saved automatically to `/acf-json/`.

> 📁 You must **create this folder manually** (`acf-json`) in the theme if it doesn’t exist. ACF won’t create it for you.

---

## 🧪 If You Use This Theme Elsewhere

1. **Ensure ACF is Installed**

   - This theme relies on custom fields stored via ACF.

2. **Verify the `/acf-json` Folder Exists**

   - It should be part of your theme folder and committed to Git.
   - If missing, the fields will not appear in WP Admin.

3. **Resave Field Groups (optional)**

   - If you make edits in WP Admin, ACF will update the JSON files.

---

## ✅ Notes

- **Don't hardcode strings** in templates if they are dynamic. Use `lid_field()` or helper methods. You can find these in `/inc/helpers.php`.
- Create new fields via WP Admin or JSON to avoid duplicating work.
- Keep all field group keys and structure consistent with version control.

---

## 📌 To-Do (Optional Improvements)

- ***

Built with ❤️ by Lock In Digital
