
## Databases Homework 1

### 1 .Pakoreguokite DB taip, kad knyga galėtų turėti daugiau nei vieną autorių.

```
CREATE TABLE IF NOT EXISTS `books_authors` ( 
	`id` INT NOT NULL AUTO_INCREMENT, 
	`book_id` INT NOT NULL, 
	`author_id` INT NOT NULL, 
	FOREIGN KEY (book_id) REFERENCES book(id)  , 
	FOREIGN KEY (author_id) REFERENCES author(id),
	PRIMARY KEY (`id`)
	)DEFAULT CHARSET=utf8mb4;

```
Bei taip pat reikėtų panaikinti ryšį tarp book.author_id ir author.id 
```
ALTER TABLE book DROP COLUMN author_id;
```

### 2. Lenteles užpildykite taip, kad visos knygos turėtų daugiau nei vieną autorių.

```

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (1,1); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (1,3); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (1,4); 

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (2,2); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (2,1); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (2,5); 

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (3,3); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (3,2); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (3,1); 

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (4,4); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (4,3); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (4,2); 

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (5,4); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (5,3); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (5,2); 

INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (6,1); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (6,5); 
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES (6,3);
```

### 3. Išveskite knygų sąrašą su jų autoriais, atskirtais per kablelį.

```
SELECT  book.title,
GROUP_CONCAT( " ", a.name,
" ",a.surname)
FROM book 
JOIN books_authors AS ba ON  book.id = ba.book_id
JOIN author  AS a ON ba.author_id = a.id
GROUP BY book.title
ORDER BY book.title;
```