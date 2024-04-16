# Picker of Rundom Characters
This library generates random chachacter. 
This library has only one static method called **some()** which takes in two optional parameter.

- If you dont pass any paramter, the length will be 8.
- If you dont pass first integer paramter, the length will be what you have passed.
- If you pass second string paramter, it will pick the result fron what you have passed   
```php
Ongom\Picker\pick::some(); //1jdGD47D
Ongom\Picker\pick::some(3); //h4T
Ongom\Picker\pick::some(3, "helo123"); //lH1
   
```
