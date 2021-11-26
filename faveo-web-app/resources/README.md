For language translation, you need to work on Language.php under this zip file. You will have to modify this file and put it under faveo_root/app/FaveoReport/lang/{lang_iso_code}

If after translating and updating the language pack you still see the words in English it's because Faveo also had different modules and plugins which need to be translated independently. Uploading the language file package via admin panel settings currently does not update these plugins and modules. To translate them follow the steps mentioned below 

For plugins translation

>Go to app/Plugins/{Plugin Dir}/lang 

>Each plugin contains the default fallback language translation for English in the "en" directory. 

>To translate plugins copy the lang.php file present in {path to Faveo root dir}/app/Plugins/{Plugin Dir}/lang/en to {path to Faveo root dir}/app/Plugins/{Plugin Dir}/{iso code of your language eg. fr for french}. 

>After copying the lang directory to the new directory edit and replace the translations in lang.php as you update in normal translation. 

For modules translation, Faveo has various modules that need to be translated. All can be found under {path to Faveo root dir}/app/ directory. 

1: Bill 

2: FaveoLog 

3: FaveoReport 

4: FaveoStorage 

5: FileManager 

6: HelptopicType 

>Each module contains the default fallback language translation for English in "en" directory. 

>To translate plugins copy the lang.php file present in {path to Faveo root dir}/app/{Module Dir}/lang/en to {path to Faveo root dir}/app/{Module Dir}/{iso code of your language eg. fr for french}. 

>After copying the lang directory to the new directory edit and replace the translations in lang.php as you update in normal translation. For language translation, you need to work on Language.php under this zip file. You will have to modify this file and put it under faveo_root/app/FaveoReport/lang/{lang_iso_code}
