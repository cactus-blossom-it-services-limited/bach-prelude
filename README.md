# bach-prelude
### DDEV
* The settings.php and related files are configured for Drupal 8/9 local development
* There is a custom command in the .ddev/commands/host directory
  * 'ddev phpstorm' launches the project in PHPStorm
  * The command works on Ubuntu

### Drupal 9 work
1. Added devel contrib module, enabled web profiler
1. Added feeds modules, migrate and migrate plus, kint, dependencies
1. Took database snapshot before adding migrate and feeds modules
