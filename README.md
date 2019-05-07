# Jigsaw Clean Blog

Jigsaw Clean Blog, as the name suggests, is a simple [Jigsaw](https://jigsaw.tighten.co/) implementation of the [Startbootstrap Clean Blog theme](https://startbootstrap.com/template-overviews/clean-blog/). See the demo [here](https://jigsaw-clean-blog.netlify.com/).

### System Requirements
To use Jigsaw, you need to have PHP 7 and Composer installed on your machine. You'll also need Node.js, NPM and Yarn installed in order to use Laravel Mix to compile the CSS and Javascript.

### Getting Started

1. Clone this repository
    ``` bash 
    git clone https://github.com/rickwest/jigsaw-clean-blog.git
    ```

2. Install PHP dependencies with Composer
   
   ``` bash 
    composer install
    ```
3. Install Javascript dependencies using Yarn
    
    ``` bash 
    yarn install
    ```

Now that you have everything installed, you can serve the site using PHP ``` ./vendor/bin/jigsaw serve ``` or alternatively, using Browsersync ``` yarn run watch ```

---

## Contributing

- Fork it (https://github.com/yourname/yourproject/fork)
- Create your feature branch (git checkout -b feature/fooBar)
- Commit your changes (git commit -am 'Add some fooBar')
- Push to the branch (git push origin feature/fooBar)
- Create a new Pull Request
