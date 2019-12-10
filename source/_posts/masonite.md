---
extends: _layouts.post
image: /assets/images/backgrounds/bricks-bg.png
title: Majestic Masonite
subtitle: An introduction to a beautiful, friendly, Python web framework 🐍
excerpt: An introduction to a beautiful, friendly, Python web framework 🐍
date: 2019-12-10
section: content
---

> **Majestic** (adjective) - having or showing impressive beauty or scale.
 
### The current landscape

Python is one of the most commonly recommended programming languages for beginners. This is in no small part due to it’s elegant, simple and human readable syntax. Python is also available out of the box on most operating systems, so it’s fairly easy for those starting out with programming to begin writing little scripts and small applications. But once hooked on the magic of programming and the power of Python where do you go next? 
 
Unless they have a specific interest in data, hardware or networking, the majority of people new to development will undoubtedly soon find themselves wanting to create and launch something for the web. However, the path from small Python script to tangible web application is certainly not clear.
 
Long standing frameworks such as Flask and the mighty Django exist in order to help clear the path, but they certainly do not lend themselves to those of us who are more recent to the industry.
 
Yes, Flask is inherently simple and easy to get started with, but when you need authentication or a database? All of a sudden you find yourself in a sea of complex third party packages. A lack of convention also means that the power and decision making is placed very much in your inexperienced hands and it quickly becomes way too easy to spend more time procrastinating than actually building something.
 
What  for me is lacking in Flask, Django takes and starts running with...and goes and goes and goes. Django certainly has a box full of tools, but the leap from Python novice to deploying a Django application is one that is just too far for me and I’m sure that many newcomers to development or Python would agree with me.
 
In my experience, neither framework has a strong go-to community or clear progressive learning path. Sure, the documentation is good and there are a ton of resources but as a beginner, where do you go when you get stuck? Who are the educators in this space? In my opinion, it just seems that these communities fail to embrace those new to the industry.
 
My personal feeling is that Flask and Django are frameworks that lend themselves to experienced Python developers who want or need to build something for the web. I certainly don’t get the feeling that they are for people who want to bring an idea to life and happen to know a little bit of Python.
 
Maybe this is why those new to the industry tend to gravitate toward something like the PHP or Javascript ecosystem. Not only do excellent beginner friendly frameworks and tools exist, but the communities and ecosystems surrounding them are welcoming to those at all levels. They have identified something that Python frameworks thus far seem to have missed.
 
That was until I discovered Masonite, the (beginner) friendly, developer centric, Python Web Application Framework.
 
### Introducing Masonite

Established in early 2018, Masonite has rocketed to more than 1200 stars on Github and it’s popularity is growing day by day.
 
[![MasoniteFramework/masonite - GitHub](https://gh-card.dev/repos/MasoniteFramework/masonite.svg)](https://github.com/MasoniteFramework/masonite)
 
Unlike the barebones Flask or the complicated Django, Masonite is a framework that strives to be a simple to use batteries included developer tool, coming with lots of functionality out of the box, whilst also remaining extremely extensible. It is designed in a way that simplifies the development process from installation through to deployment, with developer happiness and experience being a primary consideration throughout.
 
Most impressive is the speed in which Masonite enables you to hit the ground running when undertaking a new project. Masonite ships out of the box with solutions for a lot of the common problems that a modern web application would usually need to solve. From easy integration with Mail providers and Real-time messaging services, such as Pusher and Ably, to form validation and authentication, masonite has you covered.
 
Masonite also has its own handy command line interface, named Craft, for rapid scaffolding of various things such as models, controllers, views and commands. 
 
For me personally, the feature that most impresses and resonates with me is Masonites IOC service container and auto resolving dependency injection. Whilst pretty uncommon for Python applications, coming from a PHP background, this felt like a very modern, elegant implementation of a common software design pattern.
 
Everything in the Masonite ecosystem is designed to automate what can be automated and standardise what would usually be the complex. Using Masonite, developers can concentrate on developing the domain logic without getting caught us in the complexity of the implementation details.
 
### “Good artists copy, great artists steal” - Steve Jobs

Great people understand at a deeper level what makes something great. They then build on the shoulders of that and build something even better, taking it further, and putting their own spin on it. This is exactly what Masonite creator Joe Mancuso has done with the framework.  
 
Masonite is more than simply just another Python framework. Instead, it has taken inspiration from popular frameworks written in other languages and built on those ideas and principles, emulating them within Masonite and the Python ecosystem.
 
Therefore, if you thought Masonite looked and felt a lot like the PHP framework Laravel, then you would be right. Conceptually similar, Joe has taken all the things that make Laravel great, put his spin on them and implemented them in Masonite, often with a very similar syntax and feel. The transition from Laravel PHP developer to Masonite Python developer is certainly not an incomprehensible task.
 
But Laravel isn’t the most popular backend framework in the world because of the features it implements. Laravel transcends other web application frameworks by instead being a community, an ecosystem and for some, a way of life.
 
Laravel has done this by welcoming and embracing people from all backgrounds and abilities. Not only is the API itself simple and easy to use but the resources and tutorials are all unassuming, with plenty of them geared towards developers who are taking their first steps in development.
 
As I have discussed, this is something that is clearly missing in the Python ecosystem but the Masonite framework has set out to change that.
 
Joe recognised early, [after talking to Laravel creator Taylor Otwell](https://dev.to/masonite/what-i-learned-from-speaking-with-taylor-otwell-and-how-its-changing-masonite-4fmd), that to make a framework successful it has to be easy to use. This means not only having a great API, but also being easy to adopt and learn.
 
As a result of this, Joe set up the Masonite slack channel and he is in there himself on a daily basis, answering questions and helping in any way he can. He has also recently set up [MasoniteCasts](https://masonitecasts.com), a Netflix for Masonite/Python developers type service, where he has begun creating video tutorials so people new to Masonite can learn the framework directly from the creator himself. Joe is doing everything he can to make learning and adopting Masonite as easy as possible for developers of all abilities.
 
Further to doing all they can to help developers with their applications, Joe and the Masonite team are also doing what they can to enable other developers to contribute to the framework. Issues are frequently labelled for beginners or easy difficulty and they are a great way to encourage new developers into the Masonite and wider Open Source ecosystem. As someone who has struggled in the past, to find suitable ways to contribute to Open Source, I really appreciate the patience and guidance Joe and the Masonite core team provides. There are no silly questions and as with all parts of the Masonite ecosystem, the atmosphere is always very positive, welcoming, and inclusive.  
 
### Try if for yourself
Masonite is under very active development and is constantly being improved with new features and integrations added. It’s still very much early days, and Flask and Django still remain the goto frameworks for building web applications in Python, but Masonite is looking to establish its place alongside them and then catapult itself beyond. I certainly believe that Masonite has the potential to do just that!
 
Python is one of the most popular programming languages, especially for people new to development, but when you are ready to push beyond the path isn’t always obvious. There is a clear void to be filled.
 
Easy to use and welcoming to new developers, Masonite fills this void by providing a clear path of progression with near limitless scope. It’s an exciting time to be a part of the Python and Masonite ecosystem and there is no better time than now to get involved and help shape the future moving forward.
 
**That project you’ve been thinking about starting, but haven’t had the time?...Give Masonite a try, you will be up and running in no time!**
 
 
*This post is my entry into the [Masonite blog post competition](https://masonitecasts.com/articles/win-300-in-masonite-s-first-blog-competition-W90H7H).*
 
   
 
 
 



