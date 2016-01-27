# SASS-PHP - Out of the box

Out of the box SASS compiler (SCSS syntax) in PHP with Apache rewriting based on [leafo's scss.php][compilerurl].

## Features

 - Parse SASS files
 - Line numbers (can be removed)
 - .htaccess based rewriting

## Instructions

 1. Copy everything on your server in the desired directory
 2. Open *yourserver/css/test.css* in your browser

You should see this :

```css
/* line 6, ../../scss/test.scss */
body {
  font: 100% Helvetica, sans-serif;
  color: #333; }
```

The script has compiled *scss/test.scss* and shows it to you

So, basicaly you have to modify files inside *scss/* directory and call your CSS the same way you call *.scss* files. It's transparent and can be used with quite any CMS.

## What is nice ?

You know how to copy a file ? You know SCSS ? You are ready! It's perfect for frontend developers who don't want to bother with backend.

## What is NOT nice ?

I'm not a backend developer! I don't know shit about nice PHP coding rules. So, here you have my little tool, built to ease up my *coding* life. It mostly works well... but it's not optimized, there might be some errors and security holes.


[compilerurl]: https://github.com/leafo/scssphp
