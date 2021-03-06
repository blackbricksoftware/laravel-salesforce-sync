# Laravel Migration Builder - Salesforce

## Description

Create migration as analogs to Salesforce objects read from a connected org. Useful for staging data for import or downloading data for warehousing.

See [Laravel Migration Builder](https://github.com/blackbricksoftware/laravel-migration-builder) as well.

## Installation

### Install package

`composer require blackbricksoftware/laravel-migration-builder-salesforce --dev`

### Publish configuration

`php artisan vendor:publish --tag=laravel-migration-builder-salesforce-config`

## Modify .env

Add the following lines. See the [Salesforce REST API Client for Laravel](https://github.com/omniphx/forrest) page for specific configuration details.

```
SF_AUTH_METHOD=UserPassword
SF_CONSUMER_KEY=123455
SF_CONSUMER_SECRET=ABCDEF
SF_CALLBACK_URI=https://test.app/callback
SF_LOGIN_URL=https://login.salesforce.com
#SF_LOGIN_URL=https://test.salesforce.com
SF_USERNAME=test@example.com
SF_PASSWORD=password123
```

`SF_AUTH_METHOD=UserPassword` will likely be the easiest method for a CLI application. 

`SF_LOGIN_URL` will generally be `https://login.salesforce.com` for a live org or `https://test.salesforce.com` for a sandbox org.

`SF_PASSWORD` will be the user's login password with the user's token concatenated on the end.


# Modify configuration (optional)

Change `storage.type` to `object` if you intend to use more than one Salesforce connection.

## Usage

### Commands

- `php artisan make:migration-builder:salesforce:object ObjectName`: make a migration mirroring the structure of the given object (`ObjectName`)
- `php artisan make:migration-builder:salesforce:object:list`: list available object in connected Salesforce Org
- `php artisan make:migration-builder:salesforce:object:debug ObjectName`: create a 3 files in the (a `ObjectName.var_dump.txt`, `Objectname.print_r.txt`, and pretty printed `ObjectName.json`) in the `Storage::disk('local')` directory (usually `storage/app/migration-builder/salesforce/`) showing the response from the Salesforce REST API.

# Acknowledgement

- omniphx for the [Salesforce REST API Client for Laravel](https://github.com/omniphx/forrest)
- [This](https://developer.salesforce.com/docs/atlas.en-us.230.0.api.meta/api/sforce_api_calls_describesobjects_describesobjectresult.htm) Salesforce Developer document I guess.
