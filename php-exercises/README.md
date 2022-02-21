CI&T PHP Exercises
===============


### Get the repository
- Download or clone the repository

### Run composer install
- Composer install

### Start lando
-  lando start

### Run the tests
-  lando test tests/ClassNameTest.php

### Do
-  Use the classes in the scr directory to develop your solution

### Do not
-  Do not change the name of the classes or methods


1 - Print the numbers.
----------------------

Write a function that receives an undetermined number of parameters 
(numbers) and returns the average of these numbers.

>    $numbers: an array of integers

Input format 

    The parameter contains n comma-separated representing the array’s elements.

Constraints

     -1000<n, ar[i]<=1000

Output format

    Print the average of array

Sample Input

     10,6,6,8

Sample Output

     7,5

Explanation

    We print the average number of the array (10+6+6+8)/4


2 - Celsius and Fahrenheit.
--------------------------

Write a function that takes degrees in Celsius scale and converts it to Fahrenheit scale.

>    $temperature: int with temperature in celsius 

Input format 

    The parameter contains one integer with the value of temperature in celsius.

Constraints 

    -100< n <=100

Output format

    Print the temperature in Fahrenheit

Sample Input

    10

Sample Output

    50

Explanation

    We print the conversion of the temperature in celsius to Fahrenheit 

    (0°C × 9/5) + 32 = 32°F
  

3 - Meters to centimeters. 
--------------------------

Write a function that converts meters into centimeters.

>   $meter: int with length in meters 

Input format 

    The parameter contains one integer with the value of length in meters.

Constraints 

    0< n <=100

Output format

    Print the length in centimeters

Sample Input

    10

Sample Output

    1000

Explanation

    We print the conversion of the length in meters to centimeters 
    Multiply the value received in meter by 100   
  

4 - Max and Min.
----------------

Write a function that receives an undetermined number of parameters and prints the largest and smallest of them.

>    $number: an array of integers

Input format 

    The parameter contains n comma-separated representing the array’s elements.

Constraints 

    -1000< n, ar[i] <=1000

Output format

    Print the max and min value of an array

Sample Input

    -10,60,16,28

Sample Output

    60, -10

Explanation

    We print the max and min values of the array 


5 - Days of the week.
---------------------

Write a function that receives a number and displays the corresponding day of the week. (1-Sunday, 2-Monday, etc.), if you enter another value your function should return an invalid value was entered.

>   $number: an array of integers

Input format 

    The parameter contains one integer with the day of the week.

Constraints 

    1< n <=7

Output format

    Print the day of the week

Sample Input

    1

Sample Output

    Sunday

Explanation

    We print the day of the week based on a given integer   


6 - The type of triangles.
--------------------------

Develop a script that asks for sides of a triangle. The program should inform you if the values ​​really form a triangle. 
Indicate, in the case of a valid triangle, whether it is: equilateral, isosceles or scalene.
  - Tips:
    - Three sides form a triangle when the sum of any two sides is greater than the third;
    - Equilateral Triangle: three equal sides;
    - Isosceles Triangle: any two equal sides;
    - Scalene Triangle: three different sides;

> $ar: an array of integers

Input format 

    The parameter contains n comma-separated representing the array’s elements.

Constraints 

    0<n, ar[i]<=1000

Output format

    Print a string with the type of the triangle

Sample Input

    10,10,10

Sample Output

    Equilateral

Explanation

    We print the type of the triangle based on the length of the sides 


7 - Social number validation.
------------------------------

Write a function that receives the number of a CPF* and return if it is valid or not (TRUE or FALSE). You need to print on the screen if the number is a valid CPF or not.

> What is a CPF: The CPF is like a Social Security Number ID in Brazil. It is a document made by the IRS and serves to identify taxpayers. The CPF is an 11-digit number that follows some rules

> $socialNumber: string with the social number value

Input format 

    The parameter contains n comma-separated representing the array’s elements.

Constraints 

    0<n, ar[i]<=9

Output format

    Print a boolean value with the result of the validation

Sample Input

    11225687799

Sample Output

    false

Explanation

    We print the true or false based on the validations below 


validation rules:

Let's use as an example, a fictitious CPF "529.982.247-25".

First digit validation
First, multiply the first 9 digits by the descending sequence of numbers from 10 to 2 and add the results. Thus:

    5 * 10 + 2 * 9 + 9 * 8 + 9 * 7 + 8 * 6 + 2 * 5 + 2 * 4 + 4 * 3 + 7 * 2

The result of our example is:

    295

The next step of verification is also simple, just multiply this result by 10 and divide by 11.

    295 * 10 / 11

The result that interests us is actually the REST of the division. If it is equal to the first check digit (first digit after '-'), the first part of validation is correct.

> Important Note: If the remainder of the division equals 10, we consider it to be 0.
Let's check the first check digit in our example:

    The result of the above division is '268' and the REST is 2

This means that our example CPF passed the first digit validation.

Second digit validation
The second digit validation is similar to the first one, but let's consider the first 9 digits, plus the first check digit, and let's multiply these 10 numbers by the descending sequence from 11 to 2. Let's see:
    5 * 11 + 2 * 10 + 9 * 9 + 9 * 8 + 8 * 7 + 2 * 6 + 2 * 5 + 4 * 4 + 7 * 3 + 2 * 2

The result is:

    347

Following the same process as for the first check, we multiply by 10 and divide by 11.

    347 * 10 / 11

Checking the REST, as we did before, we have:

    The split result is '315' and the REST is 5

We check if the rest corresponds to the second check digit.

    With this verification, we verified that the CPF 529.982.247-25 is valid.

> Important Note: Exist some CPFs that are not valid even if they pass the digit validation.
Is the case of repeating numbers (111.111.111-11, 222.222.222-22, ...)

References:
+	https://dicasdeprogramacao.com.br/algoritmo-para-validar-cpf/
+ http://www.receita.fazenda.gov.br/aplicacoes/atcta/cpf/funcoes.js


8 - Object-oriented exercise:
----------------------------

Implement the diagram on the file:
+ https://docs.google.com/document/d/1Ey6jEkI_nmcpH9n11dh91LXpUAywUJGkVCLNQ9mhEZk


References:
+ https://www.visual-paradigm.com/guide/uml-unified-modeling-language/uml-aggregation-vs-composition/
+ https://www.visual-paradigm.com/guide/uml-unified-modeling-language/uml-class-diagram-tutorial/
