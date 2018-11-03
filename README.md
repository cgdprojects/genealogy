# Modular Genealogy Software
 ![Latest Stable Version](https://img.shields.io/github/release/modularsoftware/genealogy.svg) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/modularsoftware/genealogy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/modularsoftware/genealogy/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/modularsoftware/genealogy/badges/build.png?b=master)](https://scrutinizer-ci.com/g/modularsoftware/genealogy/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/modularsoftware/genealogy/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![StyleCI](https://github.styleci.io/repos/135390590/shield?branch=master)](https://github.styleci.io/repos/135390590)
[![CodeFactor](https://www.codefactor.io/repository/github/modularsoftware/genealogy/badge/master)](https://www.codefactor.io/repository/github/modularsoftware/genealogy/overview/master)
[![codebeat badge](https://codebeat.co/badges/911f9e33-212a-4dfa-a860-751cdbbacff7)](https://codebeat.co/projects/github-com-modulargenealogy-genealogy-master)
[![Build Status](https://travis-ci.org/modularsoftware/genealogy.svg?branch=master)](https://travis-ci.org/modularsoftware/genealogy)


## Description

Genealogy software for processing data efficiently. Creating your own family tree website. Store your data locally or in a networked
environment.

Features include: creating / editing / updating / deleting of individuals, families, events,
sources, notes, citations, repositories. Live rendering of tree data. Data tables, forms
addresses, contacts, permissions and roles. 

Importing of CSV / Spreadsheets. Currently in the process of implementing
API access. Exporting is also planned but with your own install you are in control of your data.


Currently under development and not recommended for production websites however there are no known serious issues. 
Features will be improved gradually. Watch / star on GitHub or follow the project on Facebook.

![](https://www.modularsoftware.co.uk/screenshots/genealogy/edit-individual.png)


### Installation

1. Download the project with `composer create-project modularsoftware/genealogy`

2. Configure the `.env` file. 

3. Run `php artisan migrate --seed`

4. Login into the project with user: `admin@example.net`, password: `password`


### Docker container support

Open `DOCKER.md` file for information

### Software used
Laravel 5.6.x, Bulma 0.7.x, Vuejs 2.5.x and:

[Vue Router](https://router.vuejs.org/en), [Vuex](https://vuex.vuejs.org/en/), [Axios](https://github.com/axios/axios),
[Font awesome 5](https://fontawesome.com), [Animate.css](https://daneden.github.io/animate.css/), 
[Bulmaswatch](https://jenil.github.io/bulmaswatch), [Bulma-Extensions](https://wikiki.github.io/bulma-extensions/overview),
[Nprogress.js](http://ricostacruz.com/nprogress), [Vue-multiselect](https://github.com/monterail/vue-multiselect),
[Intro.js](http://introjs.com/),  [Chart.js](http://chartjs.org), [Flatpickr](https://chmln.github.io/flatpickr/), 

Special thanks to [Laravel Enso](https://github.com/laravel-enso)  [Taylor Otwell](https://laravel.com/), [Jeffrey Way](https://laracasts.com), [Evan You](https://vuejs.org/) and [Jeremy Thomas](https://bulma.io).


## Reporting bugs

If you've stumbled across a bug, please help us out by [reporting the bug](https://github.com/modularsoftware/genealogy/issues?state=open) you have found. Simply log in or register and submit a new issue, leaving as much information about the bug as possible, e.g.

* Steps to reproduce
* Expected result
* Actual result

This will help us to fix the bug as quickly as possible, and if you'd like to fix it yourself feel free to fork us on GitHub and submit a pull request!

### License

 [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)


## Contributing

Contributions are encouraged and welcome; however, please review the Developer Certificate of Origin in the LICENSE.md file included in the repository.