---
extends: _layouts.post
image: /assets/images/backgrounds/jigsaw-home-dark.png
title: Jigsaw — the Laravel Static Site Generator.
subtitle: My interview with Keith Damiani, Senior Developer at Tighten and Lead Developer on the Jigsaw project.
excerpt: My interview with Keith Damiani, Senior Developer at Tighten and Lead Developer on the Jigsaw project. I asked Keith some questions about the development of Jigsaw and the plans for the future.
date: 2018-10-25
section: content
---

Developed by the team at Tighten, Jigsaw is a Static Site Generator that utilises components from the Laravel framework for building static websites.

As part of some research I did into Jigsaw (this was originally part of a university project that I’ve turned into a blog post!), I reached out to Keith Damiani, a Senior Developer at Tighten, who is also the lead on the Jigsaw project.

Keith was kind enough to answer a few of my question regarding the development of Jigsaw and the plans for the future.

Here’s what he had to say…

**RW: Can you please introduce yourself and tell me about your background and your involvement with Jigsaw?**

KD: I’m a Senior Developer at Tighten, a fully-remote web consultancy based out of Chicago. I live in Charlottesville, VA, and am relatively new to programming, having spent 20 years running a graphic design agency prior to joining Tighten.

I’m the lead developer on Jigsaw, taking over from Adam Wathan (who originally wrote Jigsaw while at Tighten) after he left.

**RW: What was the main motivation for developing Jigsaw? Is it simply a byproduct of a Tighten project, or is it something that you/Matt/Tighten specifically wanted to develop?**

KD: It definitely had humble beginnings; originally, it was designed purely for internal use, mainly to power our own site. I’d have to ask Adam about his motivation, but I suspect he took a look at the Ruby world, as he often does, and thought it would be nice to have something like Jekyll for the PHP/Laravel world, leveraging Blade’s compiler engine.

**RW: Is their anything that makes Jigsaw particularly different from other static site generators? Although you might be biased, what sets Jigsaw apart from other products?**

KD: It’s definitely targeted at developers who are comfortable in the Laravel ecosystem, as it draws so heavily on Blade; so for someone who writes Laravel (or even PHP) all day, it’s a natural choice that involves a pretty short learning curve to get up and running.

<img class="img-fluid" src="/assets/images/content/blade.png">
<span class="caption text-muted">Blade example, taken from https://jigsaw.tighten.co/</span>

**RW: Were there any specific or difficult technical challenges that you had to solve during the development of Jigsaw?**

KD: The original version had no concept of “collections,” and adding that was a bit of a challenge because it essentially requires processing every page twice (to enable one page to reference another, e.g. in a sidebar menu). Recently, I’ve been working on optimizing the build process to be as efficient (and fast) as possible — particularly for large sites — which has involved digging into the guts of the Blade engine to figure out how to add support for caching.

More generally, it’s been a challenge to stretch Jigsaw’s abilities beyond what it was originally intended for, because at its origin it was as a one-trick pony: spin through a bunch of Markdown files and build static HTML using Blade. There are definitely times when this core concept becomes a constraint on what we can do; and as we continue to add features that stretch the limits of what the Blade engine can pull off, the Jigsaw codebase will get so Frankenstein-y that it might be worth a full rewrite :)

**RW: Regarding the code base, have you been able to leverage many exiting packages and Laravel components or has it been a case of building a lot of things from scratch?**

KD: Because of its reliance on Blade as its backbone, and the fact that it was written and is maintained by a bunch of Laravel devs, it definitely takes advantage of a lot of Laravel (and Symfony) goodness. In addition to Blade, it relies heavily on Collections, the Laravel container, and the Symfony console component.

**RW: What do you see as the ideal use case for Jigsaw? Simple blogs? Websites? Have you seen any interesting applications of Jigsaw?**

KD: It was definitely originally designed for a simple site (not even a blog, before the collections support was added), but as it has grown, we’ve seen all sorts of interesting uses. People have used it to consume remote API-based CMS content (using services like Contentful), one developer has built an entire HTML-email framework on top of Jigsaw. A few devs we know have very large sites (with 6,000+ pages) that really stretch the abilities of what was originally a very simple static site generator. But the 90% use-case, and what we think Jigsaw is well-suited for, are blogs, documentation sites, and traditional marketing-type sites (like our own). We created builtwithjigsaw.com to collect some of these great examples.

<img class="img-fluid" src="/assets/images/content/built-with-jigsaw.png">
<span class="caption text-muted">https://builtwithjigsaw.com/</span>

**RW: Is Jigsaw aimed at a specific ‘type’ of developer? For example, is it important to keep it simple to use in order to keep the barrier to entry fairly low for lesser experienced developers?**

KD: It’s definitely targeted at (1) someone who’s comfortable in Laravel, and (2) someone who’s comfortable on the command line. As it has grown, though, and the audience has become broader, it is a little tricky to balance the desire to add more complicated features, while maintaining a low barrier to entry. Ideally, Jigsaw will always be easy to get started with for a less experienced developer, but robust and extensible enough for advanced developers to continue doing creative and innovative things with.

**RW: What’s the future of Jigsaw? Are their any exciting features that you are working on at the minute or plan to add?**

KD: We’re wrapping up development of support for starter templates, including two beautiful Tighten-developed ones that will be built-in — one for a blog, one for documentation sites — as well as the ability for third parties to build their own for people to use. Again, the goal here is to make it really simple to get a great site up and running quickly: jigsaw init blog or jigsaw init docs and you’re ready to go. The optimization stuff is pretty exciting, at least for those who maintain large sites, as it cuts down build times by about 75%. Beyond this, we have plans to continue building features that allow users to hook in to external API-based CMS’s, and soon I reallllly want to add support for internationalization, which we’ve had many requests for from day 1.

**RW: Following on from that, I personally love the simplicity of Jigsaw, but are there any plans to introduce a ‘plugin’ ecosystem, admin interface, or anything like that?**

KD: Yes and no; the starter templates are a first step toward extensibility, and we’re looking at ways for people to build reusable plugins for things like commonly-used helper methods. We added support for events to provide hooks for people to run arbitrary code before or after a build, and the bootstrap.php file is there to let advanced developers accomplish almost anything they want…but it would be nice to make this more accessible for less-experienced developers, and to allow everyone to take advantage of some of the great ideas in the community. I don’t expect we’ll ever add any kind of admin interface, it’ll always be command-line based (primarily because that’s how we like to work 😊 )

**RW: Anything else exciting or interesting to tell me about Jigsaw?**

KD: It has been a really fun open source project to work on, precisely because of the way it has grown beyond its original use-case; it was thrown out to the world as something quite simple and limited in functionality, and grew organically as users (including ourselves) came back with lots of “hey, what if Jigsaw could do X” requests.