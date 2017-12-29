# composer-free2wait
Monetizing open-source development: "You are free to wait for the package download - but in case if time is money for you, please consider buying non-waiting access to the package - every cent goes to the package developer to incentive the open-source development."

# Use case
1) Any Composer-package-developer (every person, who has a repo at Github with `composer.json` in it) decides to create/merge pull-request, which introduces dependency from this package into its `composer.json`:
```
"require": [
  "free2wait/composer-free2wait": "*"
]
```
2) This plugin does literally the following:
- Every time when Composer installs or updates any package, it checks:
  - Whether the package, being installed/updated, has a special setting, corresponding to the plugin: it means it doesn't interrupt or disturb the way it works for packages that didn't voluntary accept its behavior.
  - Whether the IP, where Composer is run, have not already bought non-waiting access for month to download this concrete package.
- If both is true (has setting & not bought), it shows such message:

> You are free to wait for the package download - but in case if time is money for you, please consider buying non-waiting access to the package: https://example.com.com/?project={$project}&ip={$ip} - every cent goes to the package developer to incentive the open-source development.

\- and makes user to wait for affordable time period (default: 10 seconds).

3) The link above would lead to the simple checkout form, where non-waiting access could be bought for month by Paypal for affordable amount (default: $5).

# Idea
The idea is simple & similar to the way free-to-play works in gamedev industry: open-source remains free to use, free to distribute (all of the sources at any moment could be downloaded from Github without any restriction) - but if you feel uncomfortable waiting for package downloading, you should purchase non-waiting access, which will entirely to the cent go to the package developer to support open-source development.
Individuals shouldn't notice any difference - while large corporations, who has complex Continuous Integration setups based on Composer, could discover that it's uncomfortable for them to have such slow builds and it will make them purchasing non-waiting access, which in turn will help package developers to continue their work on open-source development.

# Monetization
No fee is charged. Plugin "eats its dog food": is being monetized the same way it offers to others - by selling non-waiting access to its download.
