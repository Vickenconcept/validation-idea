# Fix "undefined type" / red squiggles (IntelliSense)

Those red underlines are from the IDE not understanding Laravel (facades, models, container). Fix them like this:

## 1. Install dependencies (if you haven’t)

```bash
composer install
```

## 2. Generate IDE helper files

From the project root:

```bash
composer ide-helper
```

Or run each step yourself:

```bash
php artisan ide-helper:generate
php artisan ide-helper:models -N
php artisan ide-helper:meta
```

This creates:

- `_ide_helper.php` – facade and helper docblocks so the IDE knows return types
- `_ide_helper_models.php` – model docblocks
- `.phpstorm.meta.php` – container / dependency resolution hints

**Re-run `composer ide-helper`** after adding new models or facades so the IDE stays in sync.

## 3. Use the right PHP extension (Cursor / VS Code)

- Install **PHP Intelephense** (e.g. “Intelephense” by Ben Mewburn).  
  It uses the files above and gives much better Laravel support than the built-in PHP extension.
- Disable or don’t use the built-in “PHP Language Basics” for this workspace if it conflicts.

## 4. Reload the window

After generating the helper files: **Ctrl+Shift+P** → “Developer: Reload Window” (or restart Cursor).  
The red squiggles should clear once the IDE re-indexes.

---

**Summary:** Run `composer install` then `composer ide-helper`, use PHP Intelephense, and reload the window. The “undefined type” / red color issues should go away.
