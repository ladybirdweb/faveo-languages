# How to edit existing language and add new language in Faveo?

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

**How to translate**

Download the lang.php file from https://github.com/ladybirdweb/faveo-languages

**Note:** If the language file you are looking for exists, you can download the same file and edit it. If it’s not available in the list, kindly download lang.php from the “en” folder and make changes to it. No changes should be made directly to the lang.php file under the “en” folder.

The file once edited should be saved with the name lang.php, and placed in the folder named according to **ISO Language Code.** 

**Here is an example:** We want to add a translation for the Greek Language, We will download the lang.php from the en folder. Once the translations are done, we will go to faveoroot/resources/lang, create a folder named “el” as according to ISO Language code, Code for the Greek language is “el”. After creating the folder we will place the newly translated lang.php in the “el” folder. A proper path for placing lang.php will be faveoroot/resources/lang/el.

**ISO Language Code**

https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes. All language files should follow the existing language naming convention used in Faveo

Let’s say here we are using Faveo in Italian Language and we want to change the **Remember** highlighted in the below image to Ricorda and this translation is missing in the Italian language file.

![Alt text](https://www.faveohelpdesk.com/wp-content/uploads/2021/11/demo1.png "Demo1")

1. Here is the Screenshot from the Language file where we have to make changes.
As we want to translate something on the Login page, we will make changes under Login on the Right Side as shown in the screenshot below

![Alt text](https://www.faveohelpdesk.com/wp-content/uploads/2021/11/demo2.png "Demo2")

2. Let's make changes and save.

![Alt text](https://www.faveohelpdesk.com/wp-content/uploads/2021/11/demo3.png "Demo3")

3. Once this is saved in the Italian language file and we reopen the client panel URL the new translation is applied 

![Alt text](https://www.faveohelpdesk.com/wp-content/uploads/2021/11/demo4.png "Demo4")

If after translating and updating the language pack you still see the words in English it's because Faveo also has different modules and plugins which need to be translated independently. Uploading the language file package via admin panel settings currently does not update these plugins and modules. To translate them follow the steps mentioned below 



**For plugins translation(Web app):**


- Go to FaveoRoot/app/Plugins/{Plugin Dir}/lang
- Each plugin contains the default fallback language translation for English in the "en" directory.
- To translate plugins copy the lang.php file present in {path to Faveo root dir}/app/Plugins/{Plugin Dir}/lang/en to {path to Faveo root dir}/app/Plugins/{Plugin Dir}/{iso code of your language eg. fr for french}.
- After copying the lang directory to the new directory edit and replace the translations in lang.php as you update in normal translation.


For modules translation(Web app):
Faveo has various modules that need to be translated. All can be found under {path to Faveo root dir}/app/ directory. 


1. Bill
2. FaveoLog
3. FaveoReport
4. FaveoStorage
5. FileManager
6. HelptopicType


- Each module contains the default fallback language translation for English in the "en" directory.
- To translate plugins copy the lang.php file present in {path to Faveo root dir}/app/{Module Dir}/lang/en to {path to Faveo root dir}/app/{Module Dir}/{iso code of your language eg. fr for french}.
- After copying the lang directory to the new directory edit and replace the translations in lang.php as you update in normal translation. For language translation, you need to work on Language.php under this zip file. You will have to modify this file and put it under faveo_root/app/FaveoReport/lang/{lang_iso_code}

**Note:** It is recommended to share the updated language file with us at support@faveohelpdesk.com so that we can add it to the product and make it available to every client.











