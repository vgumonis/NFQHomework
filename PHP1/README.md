
## PHP 1 Homework

### 1. Kodel Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') yra 6 

Realus gautas rezultatas yra 6.2 float'as, taciau kadangi return type'as yra int, 6.2 yra convertuojamas i 6.

### 2. Kas ir kodel nutiko bandant kviesti Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1')

"declare(strict_types=1)" kartu su funcija nera includinami. Norint patestuot, kad veiktu strict type deklaracija reiketu tiesiogiai paleist function_strict.php file'a. Tada ir butu ismetada klaide del netinkamu parametru tipu.

### 3. 'php'== 0 /// true

Kadangi yra naujamas loose comparison ir 'php' nera jokiu skaiciu jis yra convertuojamas i 0, jei butu pvz '5 apples' sis string'as butu convetuojamas i 5 int'a. 

