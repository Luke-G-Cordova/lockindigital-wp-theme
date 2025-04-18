To develop for this plugin do the following steps.

- Open local by flywheel
- Run the site, in tools the instant reload plugin should be on. If not installed, install it.
- Do `npm run dev` in the terminal to run tailwind.
- Start developing.

Try to make any widgets or reusable sections/pieces of code in the `/template-parts` directory and call `<?php get_template_part("template-parts/your-template-part"); ?>` when reusing it.

Put any page templates in the main directory, to use them go into wp-admin, add a page, and use the template that is needed for that page.

The `/inc/Utils/` contains utility classes. You can add to this but just remember to add `namespace LockInDigital\Utils;` to the top of the file which will tell `autoload.php` to include it when you import it elsewhere via `use LockInDigital\Utils\YourUtilityClass;`.
