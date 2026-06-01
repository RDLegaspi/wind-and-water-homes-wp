# Wind and Water Homes WordPress

Repository for the WordPress.org migration of the Wind and Water Homes website.

## What This Repo Owns

- Custom theme code in `wp-content/themes/wind-and-water-homes`
- Site-specific plugin code in `wp-content/plugins/wind-and-water-custom`
- Must-use plugin code in `wp-content/mu-plugins`
- Migration notes and launch checklists in `docs`
- Environment templates and project documentation

## What This Repo Does Not Own

- WordPress core
- Uploaded media
- Local database snapshots
- Secrets or production credentials
- Cache, backup, and generated files

## Local Docker Setup

This repo includes Docker Compose for a local WordPress stack:

- WordPress with PHP 8.2 and Apache
- MariaDB 11.4
- WP-CLI for local commands
- phpMyAdmin for database inspection

Create your local environment file:

```sh
cp .env.example .env
```

Start WordPress and MariaDB:

```sh
docker compose up -d
```

Open WordPress at:

```txt
http://localhost:8080
```

Optional tools:

```sh
docker compose --profile tools up -d phpmyadmin
docker compose --profile tools run --rm wpcli wp --info
```

phpMyAdmin runs at:

```txt
http://localhost:8081
```

WordPress core and MariaDB data live in Docker volumes. Custom theme, plugin, must-use plugin, and uploads are mounted from this repo.

To stop the stack:

```sh
docker compose down
```

To remove local WordPress and database data completely:

```sh
docker compose down -v
```

## Migration Workflow

1. Audit the existing website pages, URLs, forms, media, and SEO metadata.
2. Build reusable theme templates and blocks.
3. Import or recreate content in WordPress.
4. Map old URLs to new WordPress URLs.
5. Test forms, analytics, SEO metadata, redirects, performance, and responsive layouts.
6. Launch from staging only after backups and rollback steps are confirmed.

See `docs/migration-checklist.md` for the working checklist.
