# DomCrawler-disabled

Test project for seeing how disabled fields with the same name affects form processing with DomCrawler.

Run `composer install` for installing dependencies

Browser behaviour: 
1. Open form_disabled.html in browser and submit the form 
2. GET parameter appears with correct value. (`field1=test`)

Expected behaviour with DomCrawler: 
1. Run `php test.php`
2. Output should contain the following: 
```
   Array
   (
       [field1] => test
   )
```

Actual behaviour when using DomCrawler
1. Run `php test.php`
2. Output returns an empty array, while processing form values. It removes any existing previous keys (inputs) if they inputs have the same name  
```
   Array
   (
   )
```


Form HTML for easy access
```
<form action="" method="GET">
    <input type="text" name="field1" value="test"/>
    <input type="text" name="field1" value="not to be sent" disabled="true"/>
    <input type="submit"/>
</form>
```
