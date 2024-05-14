
[![Latest Stable Version](https://poser.pugx.org/hojalatheef/sitepackage/v/stable.svg?style=for-the-badge)](https://github.com/hojalatheef/sitepackage)
[![TYPO3](https://img.shields.io/badge/TYPO3-%F16822.svg?style=for-the-badge&logo=TYPO3&logoColor=white)](https://get.typo3.org/version/13)
[![Total Downloads](https://poser.pugx.org/typo3/cms-core/d/total.svg?style=for-the-badge)](https://packagist.org/packages/typo3/cms-core)
[![Total Downloads](https://poser.pugx.org/hojalatheef/sitepackage/d/total.svg?style=for-the-badge)](https://packagist.org/packages/hojalatheef/sitepackage)
[![Monthly Downloads](https://poser.pugx.org/hojalatheef/sitepackage/d/monthly?style=for-the-badge)](https://packagist.org/packages/hojalatheef/sitepackage)
# TYPO3 extension `sitepackage`

This sitepackage extension is designed for TYPO3 version 13, showcasing the
latest features and improvements introduced in this version.

|                  | URL                                                   |
|------------------|-------------------------------------------------------|
| **Repository:**  | <https://github.com/hojalatheef/sitepackage.git>      |
| **Read online:** | <https://github.com/hojalatheef/sitepackage/wiki>     |

# Installation

Clone or download the `sitepackage` extension repository.

```sh
  git@github.com:hojalatheef/sitepackage.git
```
Go to the TYPO3 Extension Manager and install the extension.
Usage

After installation, you can utilize this `sitepackage` extension to develop TYPO3
websites that leverage the new features and enhancements introduced in TYPO3
version 13.

# Running Tests

The `sitepackage` comes with a simple demo set of tests. It relies
on the runTests.sh script which is a simplified version of a similar script from
the TYPO3 core.
Find detailed usage examples by executing `Build/Scripts/runTests.sh -h` and
have a look at
`.github/workflows/tests.yml` to see how this is used in CI.

Example usage:

```
Build/Scripts/runTests.sh -s composerUpdate
Build/Scripts/runTests.sh -s rector
Build/Scripts/runTests.sh -s phpstan
Build/Scripts/runTests.sh -s cgl
```

Running some tests locally can fix errors that are just displayed in actions on github.
The following command can fix things like linebreaks or indentations:

# Normalize composer.json

```
Build/Scripts/runTests.sh -s composerNormalize -n
```

# Credits

This `sitepackage` extension is maintained by Hoja Mustaffa Abdul Latheef. Feel
free to contribute by submitting pull requests or reporting issues on GitHub.

# License

This extension is released under the MIT License. Feel free to use, modify, and
distribute it according to your needs.
