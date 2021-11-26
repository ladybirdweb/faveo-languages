Both Faveo Web and mobile apps are multilingual and already translated into multiple languages and can further be translated into more languages.

There are two scenarios
- Some English words are not translated into a specific language
- Some language translation doesn’t exist at all

This article is written to address the above concerns and how a Faveo user can help to provide the missing translations. 

Most of the Faveo language files have been hosted in the link below including web and mobile apps https://github.com/ladybirdweb/faveo-languages 

The plugins and modules language file you will not find on Github.

There are 2 kinds of translations
- Translation saved and coming from language files
- Translation saved in the database

Currently, Faveo doesn’t support multilingual translation at the database level. That being said this is something that will be implemented and it’s part of Faveo roadmap and product evolution. 

This article only covers the translation of words that are coming from a language file.

**How do translate**

Download the lang.php file from https://github.com/ladybirdweb/faveo-languages

**Note:** If the language file you are looking for exists, you can download the same file and edit it. If it’s not available in the list, kindly download lang.php from the “en” folder and make changes to it. No changes should be made directly to the lang.php file under the “en” folder.

The file once edited should be saved with the name lang.php, and placed in the folder named according to **ISO Language Code.** 

**Here is an example:** We want to add a translation for the Greek Language, We will download the lang.php from the en folder. Once the translations are done, we will go to faveoroot/resources/lang, create a folder named “el” as according to ISO Language code, Code for the Greek language is “el”. After creating the folder we will place the newly translated lang.php in the “el” folder. A proper path for placing lang.php will be faveoroot/resources/lang/el.

**ISO Language Code**

https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes. All language files should follow the existing language naming convention used in Faveo

Let’s say here we are using Faveo in Italian Language and we want to change the **Remember** highlighted in the below image to Ricorda and this translation is missing in the Italian language file.







