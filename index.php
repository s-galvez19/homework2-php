<!-- 1. Since stamps require images, and they should be persisted, 
what is your strategy to save the image? Are you going to convert it into a base64 String 
and save the whole image it in the database OR 
save the image on the file system, and add the name to the database? Whatever is your answer,
 why do you consider this the best way to proceed? -->

 
I think to create a folder called gallery and there save all the images inside of the gallery folder
 and then put it in the database.

 <!-- 2. Stamps have a group of attributes, so you will probably need a data structure to represent stamps. In PHP,
  that structure most likely be an associative array or an object.
  Give it a though and answer which structure are you going to use and why? -->

  associative matrix, because I have the possibility of creating my own index within a matrix

 <!-- 3. If you choose to treat your stamps as objects, how are you going to save the object in the database? 
  Are you planning to save each attribute to a different column manually or 
  use an ORM system? Explain your answers on detail. -->

  I would plan to create a column for each attribute so I can save exactly what I want from each stamp

<!-- 4. When saving passwords on the database, plain text is not an option. What is your strategy to store the user password? Are you going to encrypt or hash the password? No matter what your answer is, 
explain why and what algorithm do you plan to use. -->

I think when you create the database, and you create a column called password, it automatically protects that information
