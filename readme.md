# P3
+ By: Elijah Reddy
+ Production URL: <https://p3.mystphy.sx>

## Outside resources
+ PHP logic and reference via [PHP Manual](https://secure.php.net/manual/en/)
+ Styling via [Bootstrap CDN](https://www.bootstrapcdn.com)
+ HTML Layout reference via [Bootstrap Documentation](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
+ Forms reference via [W3 HTML Input Types](https://www.w3schools.com/html/html_form_input_types.asp) and [input type="date"](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/date)
+ Leap Year Algorithm via [Leap year](https://en.wikipedia.org/wiki/Leap_year)
+ Floating Point Division pointers via [How do I get a float value when dividing two integers? (PHP)](https://stackoverflow.com/questions/17218312/how-do-i-get-a-float-value-when-dividing-two-integers-php)
+ Laravel validation and logic via [Laravel Documentation](https://laravel.com/docs/5.6)
+ How to use PHP variables in a Laravel validation rule via [how to pass variable in validation rule](https://laracasts.com/discuss/channels/laravel/how-to-pass-variable-in-validation-rule)
+ PHP ternary operator reference via [How to use the PHP ternary operator](https://www.abeautifulsite.net/how-to-use-the-php-ternary-operator)

## Code style divergences
+ My code is longer than 80 characters in a few places.

## Notes for instructor
+ Due to PHP on Windows not supporting 64 bit integers I had to use floats to keep my date range high like in P2.
+ I continued to use Boostrap guidelines like in P2.
+ I got around to remembering radio button selection, it's still a mess though.
+ I had to install bcmath separately on my DigitalOcean droplet: https://askubuntu.com/questions/776232/how-do-i-enable-the-bcdiv-function-in-php-7-0/776233 like in P2.