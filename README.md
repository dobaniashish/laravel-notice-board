# Laravel Notice Board

A notice board app with made Laravel.

This is a simple minimal and quickly developed notice board app made with Laravel and Tailwind CSS following the project instructions. There are lots of possibilities to upgrade this app.

## Project instructions

The following instruction were provided.

    Create a notice board (e.g. www.example.com/notice-board) which shows stories live added by Admin (only approved stories), without having to refresh the browser. This page is public.

    The stories should be entered by the admin in the Admin Area. Admin has to login first to get to this page. Stories should allow HTML. Story should have Title & Description fields (just like a regular blog).

    Once a story has been added, admin shall receive an email to preview the newly added story. Admin has to approve this story from the email i.e. there has to be an approval link in the email (unique for each newly added story). Once approved, this new story should appear on the notice board automatically.

    MUST:-
    - Write migrations for the required tables.
    - Use of blade templates for ADD/Listing of stories in the Admin Area and the notice board page.
    - Make use of Laravel validations as much as possible (wherever applicable).
    - Use of queues to schedule sending in background.
    - Deploy the code on a public github repository.

    OPTIONAL:-
    - Use of latest laravel version.
    - Use of contracts & services.
    - Use of caching wherever applicable.
    - Use of events/listeners.

    Note:-
    1. Please provide special instructions(if any) to make to code base run on our local/remote platform.
    2. No need for any beautiful UI. Focus should be on completion of functionality.

## Possible Features/Upgrades

There are lots of possibilities to upgrade this app that were skipped to develop it quickly.

-   Full Admin Panel.
    -   Stories list page.
    -   Edit stories.
    -   Admin profile settings.
-   Purify/Sanitize story description input.
-   Single use links for story approval email.
-   Tests.
-   ...more.

## Installation

1. Clone this repository.
1. Install Composer dependencies.
    ```bash
    composer install
    ```
1. Install Node dependencies. (Optional)
    ```bash
    npm install
    ```
1. Copy `.env.example` to `.env` and set values.
    - APP_KEY - Generate with `php artisan key:generate`.
    - APP_URL - Change to `http://127.0.0.1:8000` in development to get proper approval url in emails.
    - DB connection config - Set only if you want to use anything other then sqlite.
        - DB_CONNECTION
        - DB_HOST
        - DB_PORT
        - DB_DATABASE
        - DB_USERNAME
        - DB_PASSWORD
    - MAIL config - Depending on your preferred mail tester.
    - REVERB cofig
        - REVERB_APP_ID
        - REVERB_APP_KEY
        - REVERB_APP_SECRET
        - REVERB_HOST
        - REVERB_PORT
        - REVERB_SCHEME
        - REVERB_SERVER_PORT

## Database and migrations

The development environment used sqlite database. Run the migrate command with seed option to setup and import data.

```bash
php artisan migrate --seed
```

## Running application and services

To start the server use the following command in separate terminals.

1. Start PHP development server.
    ```bash
    php artisan serve
    ```
1. Start Reverb server for web sockets.
    ```bash
    php artisan reverb:start
    ```
1. Run queue jobs.
    ```bash
    php artisan queue:work
    ```

Access the application in the browser via the development url http://127.0.0.1:8000/ or the url provided by `php artisan serve` command.

## Default admin login credentials

The database seeder adds the following admin credentials:

Username: `admin@example.net`

Password: `password`
