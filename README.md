# Programmer Blog Theme

This theme is meant to be used as a personal blog for a programmer. You can install the theme like any other, by installing the `.zip` file from your WordPress dashboard.  
After installing, you should go to `Appearance > Customize > Site Identitiy` and upload a logo image for your blog. The logo should be square and will be resized down to 70x70px. Also, if any widgets are installed in the footer by default, you should go to `Appearance > Widgets` and drag the individual widgets out of the footer. 

## Testing the theme

To test the theme, navigate to `Tools > Import` in your WordPress dashboard and scroll down to `WordPress`, click `Install` and after it finishes click `Run Importer`. Upload the `tests/theme_unit_test.wordpress.xml` file located in the theme directory. That will add posts and pages that will test the layout and functionality of the site.


# Syntax Highlighter Plugin

The theme comes with a plugin that is used to highlight code blocks inside of blog posts. After putting the plugin inside your WordPress installs `Plugins` directory, you can navigate to `Plugins > Installed Plugins` in your WordPress dashboard, find the `Niteo Interview Text Highlighter` and `activate` it.  
Whenever a post is rendered, the plugin will look for a block of code surrounded by 3 backticks ```` ``` ```` and the programming language of the code block after the first set of backticks like:  
````
Some text
```python
<<< CODE >>>
```
<empty line>
More text
````
You can also put a space between the backticks and the language and that will still work, but the code should be on it's own line(s), not on the same line as the backticks.  
Make sure you are using the `Text` and not the `Visual` editor when writing/pasting code, or WordPress will remove the indentation.

## Testing the plugin

The plugin comes with it's own [`PHPUnit`](https://phpunit.readthedocs.io/en/7.1/) tests which are located in the `tests` directory of the plugin.
