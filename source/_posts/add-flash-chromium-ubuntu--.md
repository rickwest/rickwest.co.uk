---
extends: _layouts.post
title: Add Flash to Chromium on Ubuntu 16.04
date: 2017-07-29
section: content
---

I like to listen to music at work, and with Amazon Prime Music I have plenty of music easily accessible. Unless Linux is your operating system of choice, that is. Although there is no native Linux app, there is an Amazon Music web app. Great. Apart from it needs flash installed. No problem. However, not as straight forward as it sounds. There's no official Flash extension for Chromium. A little search on Google and I discovered lots of references to outdated packages and old tutorials. I tried a few of the options and found either the packages no longer existed or they were for older versions of Ubuntu. In the end, I managed to get it sorted really easily, after stumbling across [Jonathon F's](https://launchpad.net/~jonathonf/+archive/ubuntu/pepperflashplugin-nonfree) back-port of pepperflashplug<wbr></wbr>in-nonfree with direct download of Flash from Adobe instead of using Chrome RPM. So to save my future self and anyone else the pain...

### Add the new pepperflashplugin-nonfree

Open a terminal and add the PPA ```
<pre class="">sudo add-apt-repository ppa:jonathonf/pepperflashplugin-nonfree
```

 Update your package list's to make sure you are getting the latest version ```
<pre class="">sudo apt update
```

 Install the package ```
<pre class="">sudo apt install pepperflashplugin-nonfree
```

 It's that easy! After running the install command, close all chromium windows and if you go to chrome://flash/ in your browser you should see the flash plugin installed :-) When a new version of Flash is relased, update by doing ```
<pre class="">sudo update-pepperflashplugin-nonfree --install
```

 Un-install the package ```
<pre class="">sudo apt remove pepperflashplugin-nonfree browser-plugin-freshplayer-pepperflash
```

```
<pre class="">sudo apt autoremove
```

 Hope that helped! I know I will probably be revisiting this page again sometime in the future! If you want more Ubuntu and Linux tips and snippets, you can find them [here](https://rickwest.co.uk/category/ubuntu)
