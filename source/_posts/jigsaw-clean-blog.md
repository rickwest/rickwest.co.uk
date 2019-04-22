---
extends: _layouts.post
image: /assets/images/backgrounds/jigsaw-clean-blog-bg.jpg
title: Jigsaw Clean Blog 📚
subtitle: I rebuilt my blog using Jigsaw and released my first open source package in the process
excerpt: I rebuilt my blog using Jigsaw and released my first open source package in the process
date: 2019-04-21
section: content
---

Ok, so this isn't actually as exciting as it sounds. I basically just rebuilt my blog using Tightens Jigsaw static site generator and then packaged it up in to a starter template, making it available on [Packagist](https://packagist.org/packages/rickwest/jigsaw-clean-blog) for others to use!

---

Deciding I wanted to move my blog away from Wordpress and towards a more lightweight, developer oriented static site generator, Jigsaw was the obvious choice for so many reasons that I previously discussed [here](/building-static-sites-with-jigsaw/).

The only downside, moving to Jigsaw, was the initial 'development' of the blog itself. I say downside, but being an enthusiastic developer, I actually enjoyed the process. However, I can see how that initial hurdle and time commitment might put some people off making the switch. It's hard enough finding the time to actually write a blog post, never mind move the blog to a new platform and make it look pretty.  We all lead busy lives after all! 

Not only that, but it's safe to say that we don't all have an eye for design, I certainly don't! However, I had recently stumbled across [Nuno Maduro's blog](https://nunomaduro.com/), and really liked the clean look of it, so I decided to port the [Startbootstrap Clean Blog](https://startbootstrap.com/themes/clean-blog/) over to Jigsaw and use that myself, on this very website 😊.

## The Package

When Tighten published a post about [Jigsaw starter templates](https://tighten.co/blog/jigsaw-starter-templates), this inspired me to package up my Jigsaw implementation of the Clean Blog theme and make it available to others. As a result the [jigsaw-clean-blog](https://github.com/rickwest/jigsaw-clean-blog) starter was born! It's my first 'package', and I really enjoyed the process of putting it together. If it can help save one person from reinventing the wheel or lower the barrier of entry for someone wanting to try the awesome Jigsaw then it's a job well done 👌. 

Get the starter! - https://github.com/rickwest/jigsaw-clean-blog

<img class="img-fluid" src="https://raw.githubusercontent.com/rickwest/jigsaw-clean-blog/master/screenshot.png">
 
---
 
### What's Included

This fully-responsive (based on [Bootstrap 4](https://getbootstrap.com/)) starter template includes some sample pages and comes pre configured with:

- Syntax highlighting with [highlight.js](https://highlightjs.org/)
- A script that automatically generates a `sitemap.xml`
- A script that automatically generates a RSS feed
- A custom 404 page
- A contact form with [formSpree](https://formspree.io/) integration

### Getting Started

You can get up and running with this starter in 3 quick easy steps:

1. Create the project directory

 ```bash 
 mkdir my-clean-blog
 ```

2. Install Jigsaw via Composer

 ```bash 
  cd my-clean-blog
  composer require tightenco/jigsaw
 ```

3. Initialize your project

 ```bash 
     ./vendor/bin/jigsaw init rickwest/jigsaw-clean-blog
 ```

Once that you have everything installed, you can then serve the site using PHP ``` ./vendor/bin/jigsaw serve ``` or alternatively, using Browsersync  `yarn run watch`

## Over To You

Although only a very simple project, just putting something out there has been a pretty big deal for me, but also a process that I've enjoyed wholeheartedly.

With that said, I'd love to get your feedback on this Jigsaw starter, especially if you've decided to give it a try. 

I'm really pleased with how my new Jigsaw powered blog has turned out so it would be great to see what you've been working on. Maybe you've built your own Jigsaw starter? I'd love to hear about it!

Get the starter! - https://github.com/rickwest/jigsaw-clean-blog

---

> During the process of building my blog, I was torn between the Clean Blog theme and another Jekyll theme. I also worked on porting that over to Jigsaw and I'm in the process of packaging that up, in the hope that my work won't go totally to waste! https://github.com/rickwest/jigsaw-basically-basic


