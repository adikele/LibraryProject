LibraryProject
==============

What the application does: The "Library" website, the code of which is listed here, allows a user to list all the available library books in different categories. If a customer (site user) wishes to see the available books from a particular category of books, he/she is asked to choose a category from a dropdown list.  
 
How the code works: There are four classes apart from a testLibrary file: Reader, Author, Person, Book.   Every Book Object has two types of data:  (i)    five fields, namely, title, genre, pages, readerID and authorID, that are entered directly with a new book entry (ii)   arrays authorDetails and readerDetails.  The testLibrary files uses Book Class's methods getReaderID () and getAuthorID () to fill in the authorDetails and readerDetails fields of every Book object that is created. The authorDetails and readerDetails attributes of Book are filled from data stored in objects of type Reader and Author.  The parent class for the Reader and Author classes is the Person class.

Future course of action for the project: This basic application can be expanded to include more features, such as displaying pictures of the book and other statistics about the book in question, such as its popularity among different types of readers.
