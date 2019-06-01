# Buto-Plugin-StringRandomize

Get a random string.

## Usage

Params:
- length, length of string (optional, default=10).
- characters, characters in usage (optional).

```
wfPlugin::includeonce('string/randomize');
$string_randomize = new PluginStringRandomize();
$username = $string_randomize->randomize(8);
```
