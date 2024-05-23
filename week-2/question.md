## Objective: Create a simple object-oriented PHP application for managing a library. This application should have classes for Book and Library.

**Requirements**

Class Book:

Properties: title (private), author (private), year (private).
Constructor to initialize these properties.
Getter methods for each property.
Method getSummary to return a string summary of the book (title, author, and year).
Class Library:

Property: books (private, an array to store Book objects).
Method addBook to add a Book object to the books array.
Method getBooks to return the array of all books.
Method getBookSummaries to return an array of summaries for all books.
Instructions
Create the Book class with the specified properties and methods.
Create the Library class with the specified properties and methods.
Add at least two books to the library and display their summaries.

**Expected output:**

```php
Title: The Great Gatsby, Author: F. Scott Fitzgerald, Year: 1925
Title: 1984, Author: George Orwell, Year: 1949
