# Timezone Select Form Builder

This is fork from camroncade/timezone, but for GMT timezones instead of UTC. Compare `src/Timezone.php` from both packages to understand the difference.

This is a helper function that creates a select menu including timezones in human-readable format. Each underlying key is the php-friendly name for the timezone, making it easy to immediately store and use them. The array of timezones and their underlying keys were taken from the repository by [tamaspap](https://github.com/tamaspap/timezones).

## Installation

Recommended installation of this package is through composer. Include the following in your project's `composer.json` file:

    "require": {
    	"alexeymezenin/laravel-gmt-timezones": "*"
    }

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to add the service provider. Open `config/app.php`, and add a new item to the service providers array.

    'AlexeyMezenin\LaravelGmtTimezones\TimezoneServiceProvider'

Now it's ready for use!

## Usage

### Timezone Convert Helper Functions

The package includes two helper functions that make it easy to deal with displaying and storing timezones, `convertFromGMT()` and `convertToGMT()`:

Each function accepts two required parameters and a third optional parameter dealing with the format of the returned timestamp.

    convertFromGMT($timestamp, $timezone, $format);
    convertToGMT($timestamp, $timezone, $format);

The first parameter accepts a timestamp, the second accepts the name of the timezone that you are converting to/from. The option values associated with the timezones included in the select form builder can be plugged into here as is. Alternatively, you can use any of [PHP's supported timezones](http://php.net/manual/en/timezones.php).

The third parameter is optional, and default is set to `'Y-m-d H:i:s'`, which is how Laravel natively stores datetimes into the database (the `created_at` and `updated_at` columns).

### Select Form Builder

The package also includes a helper function for the creation of the select option. This is created by calling `Timezone::selectForm()`.

The method selectForm accepts four optional parameters, `string selected`, `placeholder`, `array formAttributes`, and `array optionAttributes`. An example of it's use is shown below:

    $selected = 'America/Los_Angeles';
    $placeholder = 'Select a timezone';
    $formAttributes = ['class' => 'form-control', 'style' => 'float:left;', 'name' => 'timezone'];
    $optionAttributes = ['customValue' => 'true'];

    Timezone::selectForm($selected, $placeholder, $formAttributes, $optionAttributes);

Note that the `$selected` parameter matches the string to the values on each option, not the display text. The paratmeters `$formAttributes` and `$optionAttributes` can be used for styling, roles, and generally anything you need. This is useful for applying Twitter Bootstrap styling.
