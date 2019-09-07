---
extends: _layouts.post
image: /assets/images/backgrounds/hhkb.jpg
title: Albert Laravel Doc Search
subtitle: Search the Laravel documentation quickly and easily with this Albert Launcher extension 🕵️
excerpt: Search the Laravel documentation quickly and easily with this Albert Launcher extension 🕵️
date: 2019-09-06
section: content
---

You're learning a new technology or framework and you're frustratingly having to hit the documentation every 2 minutes, even when trying to do the most simple of things. 

Sound's familiar right? 

I feel your pain 😫! 

As I shared recently, [I'm learning Laravel](https://www.rickwest.co.uk/learning-laravel/) and as a result it seems like I've got the documentation permanently open in a browser window. With that, I'm also finding that searching the documentation and switching back and forth between IDE and browser is pretty inconvenient, as well as inhibitive to productivity.

Contemplating a solution, I stumbled across the awesome [Laravel Docs Search](https://github.com/tillkruss/alfred-laravel-docs) by Till Kruss, a custom workflow for the macOS productivity app [Alfred](https://www.alfredapp.com/).

### An Alfred alternative for Linux 

Inspired, I decided to search for a similar solution for Linux, and my search quickly unearthed [Albert](https://albertlauncher.github.io/), a desktop agnostic launcher. Surely the name is more than simply a coincidence 🤔!

I also discovered that not only is Albert fantastic out of the box but, similarly to Alfred, it is extensible, providing a Python extension which facilitates the embedding of Python modules in order to customise behaviour.

With that in mind, and inspired by Till's Alfred Workflow, I set about developing my own [Laravel docs search extension for Albert](https://github.com/rickwest/albert-laravel-docs).

<img class="img-fluid" src="https://raw.githubusercontent.com/rickwest/albert-laravel-docs/master/albert-laravel-docs.gif" alt="Albert Laravel Docs">

---

### Installation and Usage

I'd love for you to check out the repo and install this extension yourself.

<a href="https://github.com/rickwest/albert-laravel-docs"><img class="img-fluid" src="https://gh-card.dev/repos/rickwest/albert-laravel-docs.svg"></a>

Getting started is fairly straight forward and following the [installation of Albert](https://albertlauncher.github.io/docs/installing/), you simply need to clone the `albert-laravel-docs` repo into your Albert Python Extensions directory and enable it in the Albert settings.

Searching the Laravel documentation is then just a case of opening up Albert and prefixing your search with “ld ” followed by your search query.

```php
ld <query>
ld unit testing
```

---

### Reaping the rewards

Being able to search the Laravel documentation directly form Albert is certainly a major increase in both convenience and productivity. 

Also, because the extension uses the same Algolia index as the [official Laravel docs](https://laravel.com/docs/6.0), the search is very fast and accurate, most of the time I’m in the location of the documentation that I need to reference within seconds.

There are still some improvements that I would like to make, such as the possibility of improving the display of the result and the ability to search a specific Laravel version, but at the minute I'm prioritising doing some actual learning. Contributions, of course, are always more than welcome!

### I didn't stop at Laravel

Such was the improvement, in my workflow, using this extension that I also created similar doc search extensions for [Vue.js](https://vuejs.org/), [Tailwind CSS](https://tailwindcss.com/) and Tighten's [Jigsaw](https://jigsaw.tighten.co/):

<a href="https://github.com/rickwest/albert-laravel-docs"><img class="img-fluid" src="https://gh-card.dev/repos/rickwest/albert-laravel-docs.svg"></a>

<a href="https://github.com/rickwest/albert-laravel-docs"><img class="img-fluid" src="https://gh-card.dev/repos/rickwest/albert-laravel-docs.svg"></a>

<a href="https://github.com/rickwest/albert-laravel-docs"><img class="img-fluid" src="https://gh-card.dev/repos/rickwest/albert-laravel-docs.svg"></a>

Get turbocharging your own workflow 🚀!

It would be great to hear any feedback or suggestions, or if you know an Albert extension that I would benefit from, let's continue the conversation over on [twitter](https://twitter.com/rick_west8) ✌️. 