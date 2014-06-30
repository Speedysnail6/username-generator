Username Generator
==================
Username Generator is a simple PHP file that randomly generates a username. It can be easily accessed by other files as seen in the demo folder. If you point your browser to `generate.php`, it will generate a username. All the adjectives, nouns, and numbers can be added/removed one-per-line in text files. Sometimes, a username does not contain an adjective, noun, and/or number. This is not a glitch. Special parameters can be sent to `generate.php` via the URL or `$_GET`.


----------

Try it out
----------
You can see a the current version installed on [my website][1]. Also, it's free to use under the MIT License, so you can use it on your own projects/sites.


----------


Special Parameters
------------------
If data is sent to `generate.php` through the URL for example `generate.php?prefix=xx_` or by sending it directly through a form with the method `$_GET`. The current parameters are:

> **prefix** - what's before the username ex (the_awesome_)

> **suffix** - what's after the username ex (_is_me)

> **gm** - (generation method) how the username is generated ex (1)

>*- Generation Method 1: Adjective, Noun Number*

>*- Generation Method 2: Adjective, Noun*

>**imporantnouns** - This can currently only be one noun. This could be your name, favorite food, etc. There is a one in three change it will be replaced with the noun section in the generated username ex (firetruck)


----------


Help us
----------------
Feel free to clone this and make pull requests for any changes you made. We appreciate all help, even if there's only a really small change. If you make lots of pull requests, you become part of the team.


  [1]: http://speedysnail6.info/usernames "Username Generator"
