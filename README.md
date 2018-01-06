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

> You are free to wait for the package download - but in case if time is money for you, please consider buying non-waiting access to the package: https://example.com/?project={$project}&ip={$ip} - every cent goes to the package developer to incentive the open-source development.

\- and makes user to wait for affordable time period (default: 10 seconds).

3) The link above would lead to the simple checkout form, where non-waiting access could be bought for month by Paypal for affordable amount (default: $5).

4) Every cent goes to the package developer.

# Idea
The idea is simple & similar to the way free-to-play works in gamedev industry: open-source remains free to use, free to distribute (all of the sources at any moment could be downloaded from Github without any restriction) - but if you feel uncomfortable waiting for package downloading, you should purchase non-waiting access, which will entirely to the cent go to the package developer to support open-source development.
Individuals shouldn't notice any difference - while large corporations, who has complex Continuous Integration setups based on Composer, could discover that it's uncomfortable for them to have such slow builds and it will make them purchasing non-waiting access, which in turn will help package developers to continue their work on open-source development.

# FAQ
## "Open-source" & "monetization": isn't there a contradiction? Does it correspond to open-source spirit? Does not it violate any license?

There is no contradiction, it fully complies to GNU license. It's a common misconception to treat "free" in terms of "no price". As Richard Stallman stated:

> Free software is a matter of liberty, not price. To understand the concept, you should think of free as in free speech, not as in free beer.

See also for reference:
- https://en.wikipedia.org/wiki/Free_software
- https://ell.stackexchange.com/a/25k19
- https://www.gnu.org/philosophy/selling.html

## Is this service free of charge? Is there any fee? How it is monetized?

No fee is charged. Plugin "eats its dog food": is being monetized the same way it offers to others - by selling non-waiting access to its download.

## Shouldn't security releases be downloaded as soon as possible?

In case if 10-seconds-delay matters, we could exclude special tags from monetization to make them be downloaded without any delay.

## What is the current state of the project?

For now it is just a proof-of-concept. The plan is as follows:
- [x] (done) Craft MVP (minimum viable product).
- [ ] (in progress) Check that package developers are interested to merge PR, introducing dependency from this Composer plugin. Gather feedback to extend or refactor the service.
- [ ] (later) Check that package users are willing to pay for non-waiting access to download. Gather feedback to extend or refactor the service.

## How effective it is? How much money it will bring to package developer?

For now there is no real statistics - as the project is at early stages of customer development. But in theory the estimated  calculation is as follows:
- Number of package installs per month: 1000
- Conversion install to sale of non-waiting access: 3% (it's a common e-commerce conversion from view to sale; in our case it could be less or bigger - nobody knows)
- Average check: $5

=> Package developer profit per month per each 1000 of installs = 1000 * 0.03 * 5 = **$150/month**

In case if package is popular enough for several thousands installs per month - this estimated calculation should be proportionally increased.
