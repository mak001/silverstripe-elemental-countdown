# SilverStripe Elemental Count Down Block

Additional elements for the [SilverStripe Elemental](https://github.com/dnadesign/silverstripe-elemental) module.

[![Build Status](https://travis-ci.org/dynamic/silverstripe-elemental-countdown.svg?branch=master)](https://travis-ci.org/dynamic/silverstripe-elemental-countdown)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/badges/build.png?b=master)](https://scrutinizer-ci.com/g/dynamic/silverstripe-elemental-countdown/build-status/master)
[![codecov](https://codecov.io/gh/dynamic/silverstripe-elemental-countdown/branch/master/graph/badge.svg)](https://codecov.io/gh/dynamic/silverstripe-elemental-countdown)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown-block/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown-block)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown-block/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown-block)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown-block/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown-block)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown-block/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown-block)


## Requirements

* SilverStripe ^4.0
* SilverStripe Elemental ^2.0

## Installation

`composer require dynamic/silverstripe-elemental-countdown-block`

## Usage

Elemental Count Down Block will add the following Element to your site:

* Count Down (to a date/time specified in the cms)

### Template Notes

When overriding the `templates/Dynamic/Elements/CountDown/Elements/ElementCountDown.ss` file in your own theme, be sure to include the following in your `.countdown` element:

* `data-end="$End"`
* `data-elapse="$Elapse"`

example: `<div class="countdown" data-end="$End" data-elapse="$Elapse" ></div>`

The above is used in the initialization of the countdown plugin.

## Screen Shots

#### Front End sample of a Countdown Element
![Front End sample of a Countdown Element](./readme-images/countdown-block-sample.jpg)

#### CMS - Countdown Element Main Tab
![CMS - Countdown Element Main Tab](./readme-images/countdown-block-cms.jpg)

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/dynamic/silverstripe-elemental-blocks#getting-more-elements)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)