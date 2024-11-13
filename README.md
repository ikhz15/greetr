Importing Laravel Package
We can now import our package from the GitLab server into a new Laravel project using Composer. Create another Laravel project on your local machine.

Require our package in composer.json
Edit the new project’s composer.jsonfile to require our package and also indicate our repository in GitLab for Composer to know where to fetch packages aside from the default packagist repositories.

"require": {

    "php": "^7.1.3",

    "fideloper/proxy": "^4.0",

    "laravel/framework": "5.7.*",
    
    "laravel/tinker": "^1.0",
    
    "simplexi/greetr": "^1.0.0"},
    
    "repositories":
    
    [{
    
        "type": "vcs",
        
        "url": "https://gitlab.com/francis01/greetr"
    
    }]

The repository’s property lists all non-packagist repositories. If you are going to install several packages from the same GitLab domain, instead of specifying each package’s repository you may use the type “composer” and only indicate the domain in the URL. However, there’s an additional setup that your GitLab admin should do in this case. For now, let’s stick to a single repository with type “vcs”.

Run the following command to load the changes we made to our project’s composer.json file and install our package.

$ composer update

We now should find our package in the vendor directory of our project. We should be able to use our package like any other packages that we require in our project. We can test our package by just following the previous section on testing our package but this time do it on the new Laravel project that you just created.

Src: https://medium.com/@francismacugay/build-your-own-laravel-package-in-10-minutes-using-composer-867e8ef875dd
